<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\CartItem;
use App\Models\ProductVariant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class CartController extends Controller
{
    //
    public function add(Request $request)
    {
        if (!Auth::guard('customer')->check()) {
            return response()->json([
                'status' => false,
                'message' => 'Unauthenticated'
            ], 401);

        }
        $request->validate([
            'product_variant_id' => 'required|exists:product_variants,id',
            'quantity' => 'nullable|integer|min:1'
        ]);

        $qty = $request->quantity ?? 1;

        $variant = ProductVariant::findOrFail($request->product_variant_id);

        $cart = CartItem::where('product_variant_id', $variant->id)
            ->where(function ($q) {
                if (Auth::guard('customer')->check()) {
                    $q->where('user_id', Auth::guard('customer')->id());
                } else {
                    $q->where('session_id', session()->getId());
                }
            })
            ->first();
        $currentQty = $cart ? $cart->quantity : 0;

        $finalQty = $currentQty + $qty;
        // STOCK CHECK
        if ($variant->stock < $finalQty) {
            Alert::toast('Out Of Stock', 'warning');
            return response()->json([
                'status' => true,
                'stock_error' => true,
                'message' => 'Out Of Stock',
                'count' => $this->countItems()
            ]);
        }
        if ($cart) {
            $cart->quantity += $qty;
            $cart->save();
        } else {
            CartItem::create([
                'user_id' => Auth::guard('customer')->check() ? Auth::guard('customer')->id() : null,
                'session_id' => Auth::guard('customer')->check() ? null : session()->getId(),
                'product_variant_id' => $variant->id,
                'quantity' => $qty,
                'unit_price' => $variant->price
            ]);
        }
        Alert::toast('Added Successfully', 'success');
        return response()->json([
            'status' => true,
            'message' => 'Added to cart',
            'count' => $this->countItems()
        ]);
    }

    public function update(Request $request)
    {
        $request->validate([
            'id' => 'required|exists:cart_items,id',
            'quantity' => 'required|integer|min:1'
        ]);

        $item = CartItem::with('variant')->findOrFail($request->id);

        // Check stock
        if ($request->quantity > $item->variant->stock) {
            Alert::toast('Only ' . $item->variant->stock . ' item(s) available in stock.', 'warning');
            return back()->withErrors([
                'stock' => 'Only ' . $item->variant->stock . ' item(s) available in stock.'
            ]);
        }

        $item->quantity = $request->quantity;
        $item->save();

        Alert::toast('Updated Successfully', 'success');

        return back()->with('success', 'Updated Successfully');
    }

    public function remove($id)
    {
        CartItem::where('id', $id)->delete();
        Alert::toast('Removed Successfully', 'success');
        return back()->with('success', 'Removed from cart');
    }

    public function count()
    {
        return response()->json([
            'count' => $this->countItems()
        ]);
    }

    private function countItems()
    {
        return CartItem::where(function ($q) {
            if (Auth::guard('customer')->check()) {
                $q->where('user_id', Auth::guard('customer')->id());
            } else {
                $q->where('session_id', session()->getId());
            }
        })->sum('quantity');
    }


    public function addtocart(Request $request)
    {
        $request->validate([
            'product_variant_id' => 'required|exists:product_variants,id',
            'quantity' => 'nullable|integer|min:1'
        ]);

        $qty = $request->quantity ?? 1;

        $variant = ProductVariant::findOrFail($request->product_variant_id);

        $cart = CartItem::where('product_variant_id', $variant->id)
            ->where(function ($q) {
                if (Auth::guard('customer')->check()) {
                    $q->where('user_id', Auth::guard('customer')->id());
                } else {
                    $q->where('session_id', session()->getId());
                }
            })
            ->first();
        $currentQty = $cart ? $cart->quantity : 0;

        $finalQty = $currentQty + $qty;
        // OUT OF STOCK
        if ($variant->stock <= 0) {

            Alert::toast('Product is out of stock', 'warning');

            return back();
        }

        // STOCK CHECK
        if ($finalQty > $variant->stock) {

            Alert::toast(
                'Only ' . $variant->stock . ' stock available',
                'warning'
            );

            return back();
        }
        if ($cart) {
            $cart->quantity += $qty;
            $cart->save();
        } else {
            CartItem::create([
                'user_id' => Auth::guard('customer')->check() ? Auth::guard('customer')->id() : null,
                'session_id' => Auth::guard('customer')->check() ? null : session()->getId(),
                'product_variant_id' => $variant->id,
                'quantity' => $qty,
                'unit_price' => $variant->price
            ]);
        }

        Alert::toast('Successfully Added to Cart', 'success');

        return back()->with('success', 'Added to cart!');
    }
}
