@extends('layouts.website')
@section('content')
    <!-- Page Header Start -->
    <div class="page-header dark-section parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-3" data-cursor="-opaque">Cart</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Cart</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Page Cart Section Start -->
    <div class="page-cart">
        <div class="container">
            <div class="row">
                <div class="col-xl-8">
                    <!-- Cart Content Box Start -->
                    <div class="cart-content-box">
                        <!-- Cart Item Table Box Start -->
                        <div class="cart-item-table-box">
                            <!-- Cart Item Table Start -->
                            <div class="cart-item-table wow fadeInUp">
                                <!-- Cart Item Header Start -->
                                <div class="cart-item-header">
                                    <span class="product-header-tag">Product</span>
                                    <span class="price-header-tag">Price</span>
                                    <span class="quantity-header-tag">Quantity</span>
                                    <span class="subtotal-header-tag">Subtotal</span>
                                </div>
                                <!-- Cart Item Header End -->

                                <!-- Cart Item Start -->
                                <div class="cart-item">
                                    <div class="cart-item-image-content">
                                        <div class="cart-item-image">
                                            <figure>
                                                <img src="{{asset('website')}}/images/product-image-1.png" alt="">
                                            </figure>
                                        </div>
                                        <div class="cart-item-info-content">
                                            <div class="cart-item-title">
                                                <p>Timeless Elegance Ring</p>
                                            </div>
                                            <div class="cart-item-price">
                                                <p>₹4000.00</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cart-item-quantity-total">
                                        <div class="cart-item-quantity">
                                            <div class="qty-box">
                                                <button class="qty-btn minus"><span>-</span></button>
                                                <input type="text" class="qty-input" value="01" readonly="">
                                                <button class="qty-btn plus"><span>+</span></button>
                                            </div>
                                        </div>
                                        <div class="cart-item-subtotal">
                                            <p>₹4000.00</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Cart Item End -->

                                <!-- Cart Item Start -->
                                <div class="cart-item">
                                    <div class="cart-item-image-content">
                                        <div class="cart-item-image">
                                            <figure>
                                                <img src="{{asset('website')}}/images/product-image-2.png" alt="">
                                            </figure>
                                        </div>
                                        <div class="cart-item-info-content">
                                            <div class="cart-item-title">
                                                <p>Kundan Curve Necklace</p>
                                            </div>
                                            <div class="cart-item-price">
                                                <p>₹6000.00</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cart-item-quantity-total">
                                        <div class="cart-item-quantity">
                                            <div class="qty-box">
                                                <button class="qty-btn minus"><span>-</span></button>
                                                <input type="text" class="qty-input" value="01" readonly="">
                                                <button class="qty-btn plus"><span>+</span></button>
                                            </div>
                                        </div>
                                        <div class="cart-item-subtotal">
                                            <p>₹6000.00</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Cart Item End -->

                                <!-- Cart Item Start -->
                                <div class="cart-item">
                                    <div class="cart-item-image-content">
                                        <div class="cart-item-image">
                                            <figure>
                                                <img src="{{asset('website')}}/images/product-image-3.png" alt="">
                                            </figure>
                                        </div>
                                        <div class="cart-item-info-content">
                                            <div class="cart-item-title">
                                                <p>Gold Solitaire Earrings</p>
                                            </div>
                                            <div class="cart-item-price">
                                                <p>₹12000.00</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cart-item-quantity-total">
                                        <div class="cart-item-quantity">
                                            <div class="qty-box">
                                                <button class="qty-btn minus"><span>-</span></button>
                                                <input type="text" class="qty-input" value="01" readonly="">
                                                <button class="qty-btn plus"><span>+</span></button>
                                            </div>
                                        </div>
                                        <div class="cart-item-subtotal">
                                            <p>₹12000.00</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Cart Item End -->

                                <!-- Cart Item Start -->
                                <div class="cart-item">
                                    <div class="cart-item-image-content">
                                        <div class="cart-item-image">
                                            <figure>
                                                <img src="{{asset('website')}}/images/product-image-4.png" alt="">
                                            </figure>
                                        </div>
                                        <div class="cart-item-info-content">
                                            <div class="cart-item-title">
                                                <p>Bridal Gold Hoop Earrings</p>
                                            </div>
                                            <div class="cart-item-price">
                                                <p>₹4000.00</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cart-item-quantity-total">
                                        <div class="cart-item-quantity">
                                            <div class="qty-box">
                                                <button class="qty-btn minus"><span>-</span></button>
                                                <input type="text" class="qty-input" value="01" readonly="">
                                                <button class="qty-btn plus"><span>+</span></button>
                                            </div>
                                        </div>
                                        <div class="cart-item-subtotal">
                                            <p>₹4000.00</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Cart Item End -->
                            </div>
                            <!-- Cart Item Table End -->

                            <!-- Cart Item Buttons Start -->
                            <div class="cart-item-buttons wow fadeInUp" data-wow-delay="0.2s">
                                <a href="#" class="btn-default btn-update">Update Cart</a>
                                <a href="#" class="btn-default btn-clear">Clear Cart</a>
                            </div>
                            <!-- Cart Item Buttons End -->
                        </div>
                        <!-- Cart Item Table Box End -->

                        <!-- Interested Products Box Start -->
                        <div class="interested-products-box">
                            <!-- Interested Products Box Title Start -->
                            <div class="interested-products-box-title wow fadeInUp">
                                <h2>You May be interested:</h2>
                            </div>
                            <!-- Interested Products Box Title End -->

                            <!-- Product item List Start -->
                            <div class="product-item-list">
                                <!-- Product Item Start -->
                                <div class="product-item wow fadeInUp">
                                    <!-- Product Item Header Start -->
                                    <div class="product-item-header">
                                        <!-- Product Item Image Start -->
                                        <div class="product-item-image">
                                            <a href="{{ route('productDetails') }}">
                                                <figure>
                                                    <img src="{{asset('website')}}/images/product-image-1.png" alt="">
                                                </figure>
                                            </a>
                                        </div>
                                        <!-- Product Item Image End -->

                                        <!-- Product Item Action Start -->
                                        <div class="product-item-action">
                                            <ul>
                                                <li><a href="#"><img src="{{asset('website')}}/images/icon-wishlist-primary.svg" alt=""></a></li>
                                                <li><a href="#"><img src="{{asset('website')}}/images/icon-preview-primary.svg" alt=""></a></li>
                                                <li><a href="#"><img src="{{asset('website')}}/images/icon-cart-primary.svg" alt=""></a></li>
                                                <li><a href="#"><img src="{{asset('website')}}/images/icon-compare-primary.svg" alt=""></a></li>
                                                <li><a href="#"><img src="{{asset('website')}}/images/icon-payment-primary.svg" alt=""></a></li>
                                            </ul>
                                        </div>
                                        <!-- Product Item Action End -->
                                    </div>
                                    <!-- Product Item Header End -->

                                    <!-- Product Item Body Start -->
                                    <div class="product-item-body">
                                        <!-- Product Item Content Start -->
                                        <div class="product-item-content">
                                            <h2 class="product-item-title"><a href="{{ route('productDetails') }}">Timeless Elegance
                                                    Ring</a></h2>
                                        </div>
                                        <!-- Product Item Content End -->

                                        <!-- Product Item Price Start -->
                                        <div class="product-item-price">
                                            <h3>₹4000.00 <span>₹8000.00</span></h3>
                                        </div>
                                        <!-- Product Item Price End -->
                                    </div>
                                    <!-- Product Item Body End -->
                                </div>
                                <!-- Product Item End -->

                                <!-- Product Item Start -->
                                <div class="product-item wow fadeInUp" data-wow-delay="0.2s">
                                    <!-- Product Item Header Start -->
                                    <div class="product-item-header">
                                        <!-- Product Item Image Start -->
                                        <div class="product-item-image">
                                            <a href="{{ route('productDetails') }}">
                                                <figure>
                                                    <img src="{{asset('website')}}/images/product-image-2.png" alt="">
                                                </figure>
                                            </a>
                                        </div>
                                        <!-- Product Item Image End -->

                                        <!-- Product Item Action Start -->
                                        <div class="product-item-action">
                                            <ul>
                                                <li><a href="#"><img src="{{asset('website')}}/images/icon-wishlist-primary.svg" alt=""></a></li>
                                                <li><a href="#"><img src="{{asset('website')}}/images/icon-preview-primary.svg" alt=""></a></li>
                                                <li><a href="#"><img src="{{asset('website')}}/images/icon-cart-primary.svg" alt=""></a></li>
                                                <li><a href="#"><img src="{{asset('website')}}/images/icon-compare-primary.svg" alt=""></a></li>
                                                <li><a href="#"><img src="{{asset('website')}}/images/icon-payment-primary.svg" alt=""></a></li>
                                            </ul>
                                        </div>
                                        <!-- Product Item Action End -->
                                    </div>
                                    <!-- Product Item Header End -->

                                    <!-- Product Item Body Start -->
                                    <div class="product-item-body">
                                        <!-- Product Item Content Start -->
                                        <div class="product-item-content">
                                            <h2 class="product-item-title"><a href="{{ route('productDetails') }}">Kundan Curve
                                                    Necklace</a></h2>
                                        </div>
                                        <!-- Product Item Content End -->

                                        <!-- Product Item Price Start -->
                                        <div class="product-item-price">
                                            <h3>₹6000.00 <span>₹8000.00</span></h3>
                                        </div>
                                        <!-- Product Item Price End -->
                                    </div>
                                    <!-- Product Item Body End -->
                                </div>
                                <!-- Product Item End -->

                                <!-- Product Item Start -->
                                <div class="product-item wow fadeInUp" data-wow-delay="0.4s">
                                    <!-- Product Item Header Start -->
                                    <div class="product-item-header">
                                        <!-- Product Item Image Start -->
                                        <div class="product-item-image">
                                            <a href="{{ route('productDetails') }}">
                                                <figure>
                                                    <img src="{{asset('website')}}/images/product-image-3.png" alt="">
                                                </figure>
                                            </a>
                                        </div>
                                        <!-- Product Item Image End -->

                                        <!-- Product Item Action Start -->
                                        <div class="product-item-action">
                                            <ul>
                                                <li><a href="#"><img src="{{asset('website')}}/images/icon-wishlist-primary.svg" alt=""></a></li>
                                                <li><a href="#"><img src="{{asset('website')}}/images/icon-preview-primary.svg" alt=""></a></li>
                                                <li><a href="#"><img src="{{asset('website')}}/images/icon-cart-primary.svg" alt=""></a></li>
                                                <li><a href="#"><img src="{{asset('website')}}/images/icon-compare-primary.svg" alt=""></a></li>
                                                <li><a href="#"><img src="{{asset('website')}}/images/icon-payment-primary.svg" alt=""></a></li>
                                            </ul>
                                        </div>
                                        <!-- Product Item Action End -->
                                    </div>
                                    <!-- Product Item Header End -->

                                    <!-- Product Item Body Start -->
                                    <div class="product-item-body">
                                        <!-- Product Item Content Start -->
                                        <div class="product-item-content">
                                            <h2 class="product-item-title"><a href="{{ route('productDetails') }}">Gold Solitaire
                                                    Earrings</a></h2>
                                        </div>
                                        <!-- Product Item Content End -->

                                        <!-- Product Item Price Start -->
                                        <div class="product-item-price">
                                            <h3>₹10000.00 <span>₹20000.00</span></h3>
                                        </div>
                                        <!-- Product Item Price End -->
                                    </div>
                                    <!-- Product Item Body End -->
                                </div>
                                <!-- Product Item End -->
                            </div>
                            <!-- Product item List End -->
                        </div>
                        <!-- Interested Products Box End -->
                    </div>
                    <!-- Cart Content Box End -->
                </div>

                <div class="col-xl-4">
                    <!-- Page Single Sidebar Start -->
                    <div class="page-single-sidebar right-side-sidebar">
                        <!-- Order Summary Box Start -->
                        <div class="order-summary-box wow fadeInUp" data-wow-delay="0.2s">
                            <form id="promocodeForm" action="#" method="POST">
                                <!-- Order Summary Content Box Start -->
                                <div class="order-summary-content-box">
                                    <div class="order-summary-box-title">
                                        <h2>Order Summary</h2>
                                    </div>
                                    <div class="order-summary-promocode-box">
                                        <div class="order-summary-promocode-form">
                                            <div class="form-group">
                                                <input type="text" name="promo" class="form-control"
                                                    placeholder="Add promo code" required="">
                                                <button type="submit" class="promocode-btn">Apply</button>
                                            </div>
                                        </div>
                                        <div class="order-summary-total">
                                            <h3>Subtotal</h3>
                                            <h3>₹26000.00</h3>
                                        </div>
                                    </div>
                                    <div class="order-summary-shipment-info">
                                        <h3>Shipment 1:</h3>
                                        <ul>
                                            <li>
                                                <span>
                                                    <input type="radio" id="Local_pickup" name="interest"
                                                        value="Local_pickup">
                                                    <label for="Local_pickup">Local pickup:</label>
                                                </span>
                                                <label for="Local_pickup">₹15000.00</label>
                                            </li>
                                            <li>
                                                <span>
                                                    <input type="radio" id="Free_shipping" name="interest"
                                                        value="Free_shipping" checked="">
                                                    <label for="Free_shipping">Free shipping</label>
                                                </span>
                                                <label for="Local_pickup"></label>
                                            </li>
                                            <li>
                                                <span>
                                                    <input type="radio" id="Flat_rate" name="interest" value="Flat_rate">
                                                    <label for="Flat_rate">Flat rate:</label>
                                                </span>
                                                <label for="Flat_rate">₹20000.00</label>
                                            </li>
                                        </ul>
                                        <p>Shipping to <span>Dhaka</span></p>
                                    </div>
                                    <div class="order-summary-total">
                                        <h3>Total</h3>
                                        <h3>₹61000.00</h3>
                                    </div>
                                </div>
                                <!-- Order Summary Content Box End -->

                                <!-- Order Checkout Button Start -->
                                <div class="order-checkout-button">
                                    <a href="{{ route('checkout') }}" class="btn-default">Proceed to Checkout</a>
                                </div>
                                <!-- Order Checkout Button End -->
                            </form>
                        </div>
                        <!-- Order Summary Box End -->
                    </div>
                    <!-- Page Single Sidebar End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Cart Section End -->
@endsection