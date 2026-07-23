<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\WishlistItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class WishlistController extends Controller
{
    public function add(Request $request)
    {
        $request->validate([
            'product_variant_id' => 'required|exists:product_variants,id'
        ]);

        $item = WishlistItem::where('user_id', Auth::guard('customer')->id())
            ->where('product_variant_id', $request->product_variant_id)
            ->first();


        if ($item) {

            $item->delete();
            Alert::toast('Removed from wishlist', 'success');

            return response()->json([
                'status' => true,
                'type' => 'removed',
                'message' => 'Removed from wishlist',
                'count' => WishlistItem::where('user_id', Auth::guard('customer')->id())->count()
            ]);
        }

        WishlistItem::create([
            'user_id' => Auth::guard('customer')->id(),
            'product_variant_id' => $request->product_variant_id
        ]);
        Alert::toast('Added Successfully', 'success');

        return response()->json([
            'status' => true,
            'type' => 'added',
            'message' => 'Added to wishlist',
            'count' => WishlistItem::where('user_id', Auth::guard('customer')->id())->count()
        ]);
    }


    public function remove($id)
    {
        WishlistItem::where('user_id', Auth::guard('customer')->id())
            ->where('id', $id)
            ->delete();
        Alert::toast('Removed from wishlist', 'success');
        return back()->with('success', 'Removed from wishlist');
    }

}
