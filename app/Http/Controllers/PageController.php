<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function home()
    {
        $categories = Category::where('is_feature','yes')->inRandomOrder()->take(6)->get();
        $products = Product::where('status','show')->inRandomOrder()->take(6)->get();
        $featured_products = Product::where('is_feature','yes')->inRandomOrder()->take(6)->get();
        return view('website.index',compact('categories','products','featured_products'));
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

    public function productDetails($slug)
    {
        return view('website.product-details');
    }
    public function blog()
    {
        return view('website.blog');
    }

    public function blogDetails()
    {
        return view('website.blog-details');
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
