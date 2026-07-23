<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Address;
use App\Models\CartItem;
use App\Models\Customer;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Razorpay\Api\Api;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{
    //

    public function orders()
    {
        if (!Auth::guard('customer')->check()) {
            Alert::toast("Please Login", 'warning');
            return redirect()->route('login');
        }
        $userId = Auth::guard('customer')->id();
        $user = Customer::where('id', $userId)->first();
        $orders = Order::where('customer_id', $user->id)
            ->latest()
            ->paginate(10);

        return view('website.orders', compact('orders'));
    }
    public function show($id)
    {
        if (!Auth::guard('customer')->check()) {
            Alert::toast("Please Login", 'warning');
            return redirect()->route('login');
        }
        $userId = Auth::guard('customer')->id();
        $user = Customer::where('id', $userId)->first();
        $order = Order::where('customer_id', $user->id)
            ->where('id', $id)
            ->firstOrFail();

        return view('website.order-details', compact('order'));
    }
    public function store(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make(
            $request->all(),
            [
                // 'payment_method' => 'required',
                'address_id' => 'required',
            ],
            [
                // 'payment_method.required' => 'Please select a payment method.',
                'address_id.required' => 'Please select a delivery address.',
            ]
        );

        if ($validator->fails()) {
            return redirect(route('checkout'))
                ->withErrors($validator)
                ->withInput();
        }

        $userId = Auth::guard('customer')->id();
        $user = Customer::where('id', $userId)->first();


        $address = Address::where('id', $request->address_id)->first();

        if (is_null($address)) {
            Alert::toast('Address not found', 'error');
            return redirect()->route('customer.addresses');
        }

        $add['name'] = $address->name ?? $user->name;
        $add['phone'] = $address->mobile ?? $user->mobile;
        $add['mobile'] = $address->mobile ?? $user->mobile;
        $add['email'] = $address->email ?? $user->email;
        $add['address'] = $address->address;
        $add['landmark'] = $address->landmark;
        $add['address_2'] = $address->address_2;
        $add['city'] = $address->city;
        $add['state'] = $address->state;
        $add['pincode'] = $address->pincode;
        $add['email'] = $address->email;

        // dd(json_encode($add));
        // dd($user);
        $cartItems = CartItem::with('variant.product')
            ->where('user_id', $user->id)
            ->get();

        if ($cartItems->count() == 0) {
            Alert::toast('Cart is empty', 'warning');
            return back();
        }


        DB::beginTransaction();

        try {

            $subtotal = $cartItems->sum(function ($item) {
                return $item->unit_price * $item->quantity;
            });

            $shipping = 0;
            $discount = 0;
            $grandTotal = $subtotal + $shipping - $discount;

            /*
        |--------------------------------------------------------------------------
        | CREATE ORDER ALWAYS SAME
        |--------------------------------------------------------------------------
        */
            // $lastInvoice = Order::whereNotNull('invoice_id')
            //     ->pluck('invoice_id')
            //     ->map(function ($id) {
            //         return (int) filter_var($id, FILTER_SANITIZE_NUMBER_INT);
            //     })
            //     ->max();

            // $nextNumber = $lastInvoice ? $lastInvoice + 1 : 1;

            // $invoiceId = 'TestVS' . str_pad($nextNumber, 5, '0', STR_PAD_LEFT);
            $order = Order::create([
                'invoice_id' => ' ',
                'customer_id' => $user->id,

                'subtotal' => $subtotal,
                'tax_total' => 0,
                'discount_total' => $discount,
                'delivery_total' => $shipping,
                'grand_total' => $grandTotal,

                'payment_method' => $request->payment_method,

                'payment_status' => 'pending',
                'status' => 'pending',

                'shipping_address' => json_encode($add),

                'billing_address' => json_encode($add),
            ]);

            $invoiceId = 'VS' . str_pad($order->id, 5, '0', STR_PAD_LEFT);

            $order->update([
                'invoice_id' => $invoiceId
            ]);

            /*
        |--------------------------------------------------------------------------
        | CREATE ORDER ITEMS SAME
        |--------------------------------------------------------------------------
        */

            foreach ($cartItems as $item) {

                OrderItem::create([
                    'order_id' => $order->id,
                    'product_variant_id' => $item->product_variant_id,
                    'seller_id' => 0,
                    'product_title' => $item->variant->product->title,
                    'sku' => $item->variant->sku,
                    'unit_price' => $item->unit_price,
                    'quantity' => $item->quantity,
                    'subtotal' => $item->unit_price * $item->quantity,
                ]);
            }

            /*
        |--------------------------------------------------------------------------
        | PAYMENT ENTRY SAME
        |--------------------------------------------------------------------------
        */

            $payment = Payment::create([
                'order_id' => $order->id,
                'user_id' => $user->id,
                'amount' => $grandTotal,
                'currency' => 'INR',
                'status' => 'pending',
                'method' => $request->payment_method,
                'reference_no' => $order->invoice_id,
            ]);

            /*
        |--------------------------------------------------------------------------
        | COD CONDITION
        |--------------------------------------------------------------------------
        */

            if ($request->payment_method == 'cod') {

                $order->status = 'placed';
                $order->payment_status = 'pending';
                $order->save();

                foreach ($cartItems as $item) {
                    $item->variant->decrement('stock', $item->quantity);
                }

                CartItem::where('user_id', $user->id)->delete();

                DB::commit();

                Alert::success('Success', 'Order Placed');

                return redirect()->route('customer.orders');
            }

            /*
        |--------------------------------------------------------------------------
        | ONLINE PAYMENT CONDITION
        |--------------------------------------------------------------------------
        */

            if ($request->payment_method == 'online_payment') {

                $api = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));

                $razorpayOrder = $api->order->create([
                    'receipt' => $order->invoice_id,
                    'amount' => $grandTotal * 100,
                    'currency' => 'INR'
                ]);

                $payment->provider = 'razorpay';
                $payment->provider_order_id = $razorpayOrder['id'];
                $payment->save();

                DB::commit();

                return view('website.razorpay-payment', compact(
                    'order',
                    'payment',
                    'razorpayOrder',
                    'grandTotal',
                    'user',
                ));
            }
           
        } catch (\Exception $e) {

            DB::rollBack();

            Alert::toast($e->getMessage(), 'error');

            return back()->withInput($request->all());
        }
    }

    public function paymentSuccess(Request $request)
    {  
        // dd($request);
        $payment = Payment::where(
            'provider_order_id',
            $request->razorpay_order_id
        )->first();

        if (!$payment) {

            Log::error('Payment not found', $request->all());

            return redirect()->route('view-cart');
        }


        $cartItems = CartItem::with('variant')
            ->where('user_id', $payment->user_id)
            ->get();

        foreach ($cartItems as $item) {

            if ($item->variant) {

                $item->variant->decrement('stock', $item->quantity);
            }
        }

        CartItem::where('user_id', $payment->user_id)->delete();
        return redirect()->route('customer.orders');
    }

}
