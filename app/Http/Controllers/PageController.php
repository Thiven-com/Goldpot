<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function home()
    {
        return view('website.index');
    }
    public function about()
    {
        return view('website.about');
    }
    public function shop()
    {
        return view('website.shop');
    }
    public function schemes()
    {
        return view('website.schemes');
    }

    public function productDetails()
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
}
