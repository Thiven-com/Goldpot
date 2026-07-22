<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\Website\AccountController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/shop', [PageController::class, 'shop'])->name('shop');
Route::get('/schemes', [PageController::class, 'schemes'])->name('schemes');
Route::get('/product-details/{slug}', [PageController::class, 'productDetails'])->name('productDetails');
Route::get('/blog', [PageController::class, 'blog'])->name('blog');
Route::get('/blog-details/{slug}', [PageController::class, 'blogDetails'])->name('blogDetails');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/cart', [PageController::class, 'cart'])->name('cart');
Route::get('/checkout', [PageController::class, 'checkout'])->name('checkout');
Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');
Route::get('/wishlist', [PageController::class, 'wishlist'])->name('wishlist');
Route::get('/orders', [PageController::class, 'orders'])->name('orders');
Route::get('/profile', [PageController::class, 'profile'])->name('profile');
Route::get('/login', [PageController::class, 'login'])->name('login');
Route::get('login', [AccountController::class, 'login'])->name('login');
Route::get('logout', [AccountController::class, 'logout'])->name('logout');
Route::post('/send-otp', [AccountController::class, 'sendOtp']);
Route::post('/verify-otp', [AccountController::class, 'verifyOtp']);
