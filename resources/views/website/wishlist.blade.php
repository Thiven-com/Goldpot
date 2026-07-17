@extends('layouts.website')
@section('content')

    <!-- Page Header Start -->
    <div class="page-header dark-section parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-3" data-cursor="-opaque">Wishlist</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Wishlist</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Page Account Wishlist Start -->
    <div class="page-account-wishlist">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Wishlist Content Box Start -->
                    <div class="wishlist-content-box">
                        <!-- Wishlist Item Table Start -->
                        <div class="wishlist-item-table wow fadeInUp">
                            <!-- Wishlist Item Header Start -->
                            <div class="wishlist-item-header">
                                <span class="wishlist-product-tag">Product</span>
                                <span class="wishlist-price-tag">Unit Price</span>
                                <span class="wishlist-status-tag">Stock Status</span>
                                <span class="wishlist-action-tag">Action</span>
                            </div>
                            <!-- Wishlist Item Header End -->

                            <!-- Wishlist Item Start -->
                            <div class="wishlist-item">
                                <div class="wishlist-item-image-content">
                                    <div class="wishlist-item-image">
                                        <figure>
                                            <img src="{{asset('website')}}/images/product-image-1.png" alt="">
                                        </figure>
                                    </div>
                                    <div class="wishlist-item-info-content">
                                        <div class="wishlist-item-title">
                                            <p>Timeless Elegance Ring</p>
                                        </div>
                                        <div class="wishlist-item-price">
                                            <p><span>₹2000.00</span> ₹1800.00</p>
                                            <p>10% OFF</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="wishlist-item-status-action">
                                    <div class="wishlist-item-status">
                                        <p>In Stock</p>
                                    </div>
                                    <div class="wishlist-item-action">
                                        <a href="#"><i class="fa-regular fa-trash-can"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Wishlist Item End -->

                            <!-- Wishlist Item Start -->
                            <div class="wishlist-item">
                                <div class="wishlist-item-image-content">
                                    <div class="wishlist-item-image">
                                        <figure>
                                            <img src="{{asset('website')}}/images/product-image-2.png" alt="">
                                        </figure>
                                    </div>
                                    <div class="wishlist-item-info-content">
                                        <div class="wishlist-item-title">
                                            <p>Kundan Curve Necklace</p>
                                        </div>
                                        <div class="wishlist-item-price">
                                            <p><span>₹2000.00</span> ₹1800.00</p>
                                            <p>10% OFF</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="wishlist-item-status-action">
                                    <div class="wishlist-item-status">
                                        <p>In Stock</p>
                                    </div>
                                    <div class="wishlist-item-action">
                                        <a href="#"><i class="fa-regular fa-trash-can"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Wishlist Item End -->

                            <!-- Wishlist Item Start -->
                            <div class="wishlist-item">
                                <div class="wishlist-item-image-content">
                                    <div class="wishlist-item-image">
                                        <figure>
                                            <img src="{{asset('website')}}/images/product-image-3.png" alt="">
                                        </figure>
                                    </div>
                                    <div class="wishlist-item-info-content">
                                        <div class="wishlist-item-title">
                                            <p>Gold Solitaire Earrings</p>
                                        </div>
                                        <div class="wishlist-item-price">
                                            <p><span>₹2000.00</span> ₹1800.00</p>
                                            <p>10% OFF</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="wishlist-item-status-action">
                                    <div class="wishlist-item-status">
                                        <p>In Stock</p>
                                    </div>
                                    <div class="wishlist-item-action">
                                        <a href="#"><i class="fa-regular fa-trash-can"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Wishlist Item End -->
                        </div>
                        <!-- Wishlist Item Table End -->

                        <!-- Wishlist Content Button Start -->
                        <div class="wishlist-content-button wow fadeInUp" data-wow-delay="0.2s">
                            <a href="{{ route('shop') }}" class="btn-default">Back to Shop</a>
                        </div>
                        <!-- Wishlist Content Button End -->
                    </div>
                    <!-- Wishlist Content Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Account Wishlist End -->

@endsection