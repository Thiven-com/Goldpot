<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Blog;
use App\Models\CartItem;
use App\Models\Category;
use App\Models\Product;
use App\Models\WishlistItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class PageController extends Controller
{
    //
    public function home()
    {
        $categories = Category::where('is_feature', 'yes')->inRandomOrder()->take(6)->get();
        $products = Product::where('status', 'show')->inRandomOrder()->take(6)->get();
        $featured_products = Product::where('is_feature', 'yes')->inRandomOrder()->take(6)->get();
        $blogs = Blog::where('status', 'show')->inRandomOrder()->take(6)->get();
        return view('website.index', compact('categories', 'products', 'featured_products', 'blogs'));
    }
    public function about()
    {
        return view('website.about');
    }
    public function shop()
    {
        $categories = Category::get();
        $products = Product::with('variants')
            ->where('status', 'show')
            ->get();
        return view('website.shop', compact('categories', 'products'));
    }
    public function schemes()
    {
        return view('website.schemes');
    }

    public function productDetails(Request $request,$slug)
    {
        $product = Product::with([
            'images',
            'variants.attributeMappings.attribute',
            'variants.attributeMappings.value'
        ])->where('slug', $slug)->first();

        if (!$product) {
            return redirect()->route('shop');
        }

        $variant = $product->variants->first();

        if ($request->filled('variant_id')) {
            $selected = $product->variants->firstWhere('id', $request->variant_id);

            if ($selected) {
                $variant = $selected;
            }
        }
        if (!isset($variant)) {
            return redirect()->route('shop');
        }
        $products = Product::where('id', '!=', $product->id)
            ->latest()
            ->take(4)
            ->get();

        return view('website.product-details', compact('product', 'products', 'variant'));
    }
    public function blog()
    {
        $blogs = Blog::where('status', 'show')->get();
        return view('website.blog', compact('blogs'));
    }

    public function blogDetails($slug)
    {
        $blog = Blog::where('slug', $slug)->where('status', 'show')->first();
        return view('website.blog-details', compact('blog'));
    }
    public function contact()
    {
        return view('website.contact');
    }

    public function cart()
    {
        $cartItems = CartItem::with(['variant.product'])
            ->where('user_id', Auth::guard('customer')->id())
            ->get();
        $products = Product::with('variants')
            ->where('status', 'show')
            ->inRandomOrder()
            ->take(3)
            ->get();

        $subtotal = $cartItems->sum(function ($item) {
            return $item->quantity * $item->unit_price;
        });

        $shipping = 0;

        $total = $subtotal + $shipping;

        return view('website.cart', compact(
            'cartItems',
            'subtotal',
            'shipping',
            'products',
            'total'
        ));
    }
    public function checkout()
    {
        $cartItems = CartItem::with(['variant.product'])
            ->where('user_id', Auth::guard('customer')->id())
            ->get();

        $subtotal = 0;

        foreach ($cartItems as $item) {
            $subtotal += $item->variant->price * $item->quantity;
        }

        $discount = 0;
        $shipping = 0;
        $total = $subtotal - $discount + $shipping;

        $addresses = Address::where('customer_id', Auth::guard('customer')->id())->get();

        return view('website.checkout', compact(
            'cartItems',
            'subtotal',
            'discount',
            'shipping',
            'total',
            'addresses'
        ));
    }
    public function dashboard()
    {
        return view('website.dashboard');
    }
    public function wishlist()
    {
        if (!Auth::guard('customer')->check()) {
            Alert::toast('Please Login', 'warning');
            return redirect()->route('login');
        }

        $wishlistItems = WishlistItem::with('variant.product')
            ->where('user_id', Auth::guard('customer')->id())
            ->latest()
            ->get();

        return view('website.wishlist', compact('wishlistItems'));
    }
    public function orders()
    {
        return view('website.orders');
    }
    public function profile()
    {
        $customerId = Auth::guard('customer')->id();

        if (!$customerId) {
            return redirect()->route('login');
        }
        $customer = Auth::guard('customer')->user();
        $defaultAddress = Address::where('customer_id', $customer->id)
            ->latest()
            ->first();
        $address = Address::where('id', $customer->id)->first();

        return view('website.profile', compact('customer', 'defaultAddress', 'address'));
    }
    public function login()
    {
        return view('website.login');
    }
    public function addresses()
    {
        $address = Address::where('customer_id', Auth::guard('customer')->id())->get();
        $addresses = Address::where('customer_id', Auth::guard('customer')->id())->get();
        return view('website.addresses', compact('address', 'addresses'));
    }
}
