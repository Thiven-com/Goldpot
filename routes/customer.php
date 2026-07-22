<?php

use App\Http\Controllers\Customer\AddressController;
use App\Http\Controllers\Customer\CartController;
use App\Http\Controllers\Customer\OrderController;
use App\Http\Controllers\Customer\WebhookController;
use App\Http\Controllers\Customer\WishlistController;
use Illuminate\Support\Facades\Route;

Route::middleware(['customer'])->group(function () {

    Route::post('/wishlist/add', [WishlistController::class, 'add'])
        ->name('customer.wishlist.add');

    Route::delete('/wishlist/remove/{id}', [WishlistController::class, 'remove'])
        ->name('customer.wishlist.remove');

    //Cart
    Route::post('/cart/add', [CartController::class, 'add'])->name('customer.cart.add');
    Route::post('/cart/addtocart', [CartController::class, 'addtocart'])->name('customer.cart.addtocart');
    Route::post('/cart/update', [CartController::class, 'update'])->name('customer.cart.update');
    Route::delete('/cart/remove/{id}', [CartController::class, 'remove'])->name('customer.cart.remove');
    Route::get('/cart/count', [CartController::class, 'count'])->name('customer.cart.count');
    //Order
    Route::post('/place-order', [OrderController::class, 'store'])
        ->name('customer.place.order');
    Route::post('/payment-success', [OrderController::class, 'paymentSuccess'])->name('customer.payment.success');
    Route::get('/orders', [OrderController::class, 'orders'])->name('customer.orders');
    Route::get('/orders/{id}', [OrderController::class, 'show'])->name('customer.orders.show');

    //addresses
    Route::get('addresses', [AddressController::class, 'addresses'])->name('customer.addresses');
    Route::get('/address/create', [AddressController::class, 'customerAddressCreate'])->name('customer.address.create');
    // Route::get('/address/create', [AddressController::class, 'addresscreate'])->name('customer.addresscreate');
    Route::post('/address/store', [AddressController::class, 'storeAddress'])->name('customer.address.store');
    Route::delete('/customer/address/{id}', [AddressController::class, 'destroy'])
        ->name('customer.address.destroy');


    Route::delete('/address/delete/{id}', [AddressController::class, 'delete'])
        ->name('customer.address.delete');

    Route::get('/address/edit/{id}', [AddressController::class, 'addressedit'])
        ->name('customer.addressedit');

    // Update
    Route::post('/address/update/{id}', [AddressController::class, 'addressupdate'])
        ->name('customer.addressupdate');
    Route::post('/order/store', [OrderController::class, 'store'])
        ->name('customer.order.store');

});

// Route::any('webhook/razorpay/capture', [WebhookController::class, 'razorpay']);
// Route::any('/webhook/delhivery', [WebhookController::class, 'delhivery']);


