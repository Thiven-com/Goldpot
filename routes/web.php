<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/shop', [PageController::class, 'shop'])->name('shop');
Route::get('/schemes', [PageController::class, 'schemes'])->name('schemes');
Route::get('/product-details', [PageController::class, 'productDetails'])->name('productDetails');
Route::get('/blog', [PageController::class, 'blog'])->name('blog');
Route::get('/blog-details', [PageController::class, 'blogDetails'])->name('blogDetails');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
