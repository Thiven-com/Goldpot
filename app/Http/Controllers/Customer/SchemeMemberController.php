<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Scheme;
use App\Models\SchemeInstallment;
use App\Models\SchemeMember;
use App\Models\SchemePayment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Razorpay\Api\Api;

class SchemeMemberController extends Controller
{
    //
    public function create($slug)
    {
        $scheme = Scheme::where('slug', $slug)
            ->where('status', 'active')
            ->firstOrFail();
        if (!$scheme) {
            return redirect()
                ->route('schemes')
                ->with('error', 'Scheme Details Not Found.');
        }
        // Prevent duplicate joining
        $alreadyJoined = SchemeMember::where('scheme_id', $scheme->id)
            ->where('customer_id', Auth::guard('customer')->id())
            ->exists();

        if ($alreadyJoined) {
            return redirect()
                ->route('customer.my-schemes')
                ->with('error', 'You have already joined this scheme.');
        }

        return view('website.join-scheme', compact('scheme'));
    }
    public function store(Request $request, $slug)
    {
        $scheme = Scheme::where('slug', $slug)
            ->where('status', 'active')
            ->firstOrFail();

        DB::beginTransaction();

        try {

            $customer = Auth::guard('customer')->user();

            // Prevent duplicate registration
            $exists = SchemeMember::where('scheme_id', $scheme->id)
                ->where('customer_id', $customer->id)
                ->whereIn('status', ['pending', 'active'])
                ->exists();

            if ($exists) {

                DB::rollBack();

                return back()->with('error', 'You have already joined this scheme.');

            }

            // Generate Member Number
            $memberNo = $this->generateMemberNumber();

            $joiningDate = now()->toDateString();

            $nextDueDate = now()->addMonth()->toDateString();

            $completionDate = now()->addMonths($scheme->installments)->toDateString();

            // Create Member
            $member = SchemeMember::create([

                'scheme_id' => $scheme->id,

                'customer_id' => $customer->id,

                'member_no' => $memberNo,

                'monthly_amount' => $scheme->monthly_amount,

                'installments' => $scheme->installments,

                'bonus_amount' => $scheme->bonus_amount,

                'bonus_type' => $scheme->bonus_type,

                'joining_fee' => $scheme->joining_fee,

                'paid_amount' => 0,

                'wallet_credited' => 0,

                'paid_installments' => 0,

                'joining_date' => $joiningDate,

                'next_due_date' => $nextDueDate,

                'completion_date' => $completionDate,

                'status' => 'pending',

            ]);
            SchemePayment::create([
                'scheme_member_id' => $member->id,
                'installment_no' => 1,
                'amount' => $scheme->monthly_amount,
                'due_date' => now(),
                'status' => 'pending',
            ]);

            DB::commit();

            return redirect()->route('scheme.payment', $member->id);

        } catch (\Exception $e) {

            DB::rollBack();

            return back()
                ->withInput()
                ->with('error', $e->getMessage());

        }
    }

    /**
     * Generate Unique Member Number
     */
    private function generateMemberNumber()
    {
        $lastMember = SchemeMember::latest('id')->first();

        if (!$lastMember) {
            return 'MEM000001';
        }

        $number = (int) substr($lastMember->member_no, 3);

        return 'MEM' . str_pad($number + 1, 6, '0', STR_PAD_LEFT);
    }

    /**
     * Generate Installments
     */
    protected function generateInstallments(SchemeMember $member)
    {
        for ($i = 1; $i <= $member->installments; $i++) {

            SchemeInstallment::create([

                'scheme_member_id' => $member->id,

                'installment_no' => $i,

                'amount' => $member->monthly_amount,

                'due_date' => now()->addMonths($i - 1),

                'status' => $i == 1 ? 'paid' : 'pending',

            ]);
        }
    }



    public function payment($id)
    {
        $customer = Auth::guard('customer')->user();

        $member = SchemeMember::with('scheme')
            ->where('id', $id)
            ->where('customer_id', $customer->id)
            ->first();

        $payment = SchemePayment::where('scheme_member_id', $member->id)
            ->where('status', 'pending')
            ->orderBy('installment_no')
            ->first();

        if (!$payment) {
            return redirect()->route('customer.my-schemes')
                ->with('error', 'No pending payment found.');
        }

        $payAmount = $payment->amount;

        // Add joining fee for first installment
        if ($payment->installment_no == 1) {
            $payAmount += $member->joining_fee;
        }

        // Create Razorpay order only once
        if (empty($payment->gateway_order_id)) {

            $api = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));

            $razorpayOrder = $api->order->create([
                'receipt' => $member->member_no,
                'amount' => $payAmount * 100,
                'currency' => 'INR',
            ]);

            $payment->update([
                'payment_method' => 'razorpay',
                'amount' => $payAmount,
                'gateway' => 'razorpay',
                'gateway_order_id' => $razorpayOrder['id'],
            ]);

        } else {

            $razorpayOrder = [
                'id' => $payment->gateway_order_id,
                'amount' => $payAmount * 100,
            ];
        }

        return view('website.schemes.payment', compact(
            'member',
            'payment',
            'payAmount',
            'razorpayOrder'
        ));
    }

    /**
     * Payment Success
     */
    public function paymentSuccess(Request $request)
    {
        DB::beginTransaction();

        try {

            $payment = SchemePayment::where(
                'gateway_order_id',
                $request->razorpay_order_id
            )->first();

            $member = SchemeMember::find(
                $payment->scheme_member_id
            );
            $customer = Customer::where('id', $member->customer_id)->first();

            $payment->update([

                'status' => 'success',

                'paid_at' => now(),

                // 'wallet_credit' => $payment->amount,

                'gateway_payment_id' => $request->razorpay_payment_id,

                // 'gateway_response' => $request->razorpay_signature,

            ]);

            $member->increment('paid_installments');

            $member->increment('paid_amount', $payment->amount);

            $customer->increment('wallet', $payment->amount);

            $member->increment('wallet_credited', $payment->amount);

            if ($member->paid_installments >= $member->installments) {

                $member->update([

                    'status' => 'completed',

                    'completion_date' => now(),

                    'next_due_date' => null,

                ]);

            } else {

                $member->update([

                    'status' => 'active',

                    'next_due_date' => now()->addMonth(),

                ]);

                SchemePayment::create([

                    'scheme_member_id' => $member->id,

                    'installment_no' => $payment->installment_no + 1,

                    'amount' => $member->monthly_amount,

                    'due_date' => now()->addMonth(),

                    'status' => 'pending',

                ]);
            }

            DB::commit();

            return redirect()
                ->route('customer.my-schemes')
                ->with('success', 'Payment Successful.');

        } catch (\Exception $e) {
            Log::info($e->getMessage());
            DB::rollBack();

            return back()->with('error', $e->getMessage());

        }
    }

    public function mySchemes()
    {
        $customer = Auth::guard('customer')->user();

        $members = SchemeMember::with('scheme')
            ->where('customer_id', $customer->id)
            ->latest()
            ->get();

        return view('website.schemes.my-schemes', compact('members'));
    }
}
