<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

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
        return view('website.cart');
    }
    public function checkout()
    {
        return view('website.checkout');
    }
    public function dashboard()
    {
        return view('website.dashboard');
    }
    public function wishlist()
    {
        return view('website.wishlist');
    }
    public function orders()
    {
        return view('website.orders');
    }
    public function profile()
    {
        return view('website.profile');
    }
    public function login()
    {
        return view('website.login');
    }
}
