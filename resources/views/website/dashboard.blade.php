@extends('layouts.website')
@section('content')

    <!-- Page Header Start -->
    <div class="page-header dark-section parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-3" data-cursor="-opaque">My Account</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">My Account</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Page My Account Start -->
    <div class="page-my-account light-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <!-- Page Single Sidebar Start -->
                    <div class="page-single-sidebar">
                        <!-- My Account Sidebar Item Start -->
                        <div class="my-account-sidebar-item wow fadeInUp">
                            <ul>
                                <li><a href="{{ route('dashboard') }}"><img
                                            src="{{asset('website')}}/images/icon-dashboard-primary.svg"
                                            alt="">Dashboard</a></li>
                                <li><a href="{{ route('customer.orders') }}"><img
                                            src="{{asset('website')}}/images/icon-cart-primary.svg" alt="">Orders</a>
                                </li>
                                <li><a href="{{ route('addresses') }}"><img
                                            src="{{asset('website')}}/images/icon-dashboard-primary.svg" alt="">Addresses</a></li>
                                <li><a href="{{ route('profile') }}"><img
                                            src="{{asset('website')}}/images/icon-user-primary.svg" alt="">Account
                                        details</a></li>
                                <li><a href="{{ route('wishlist') }}"><img
                                            src="{{asset('website')}}/images/icon-wishlist-primary.svg" alt="">Wishlist</a>
                                </li>
                                <li><a href="{{ route('login') }}"><img
                                            src="{{asset('website')}}/images/icon-logout-primary.svg" alt="">Logout</a></li>
                            </ul>
                        </div>
                        <!-- My Account Sidebar Item End -->
                    </div>
                    <!-- Page Single Sidebar End -->
                </div>

                <div class="col-lg-8">
                    <!-- Account Dashboard Detail Box Start -->
                    <div class="account-dashboard-detail-box wow fadeInUp" data-wow-delay="0.2s">

                        <p class="account-dashboard-detail-title">
                            Welcome back, <strong></strong> 👋
                        </p>

                        <p>
                            Welcome to your GoldPot account dashboard. Manage your jewellery orders, update your profile,
                            explore your wishlist, and enjoy a seamless shopping experience.
                        </p>

                        <div class="row mt-4">

                            <div class="col-md-6 mb-4">
                                <div class="border rounded-3 p-4 h-100">
                                    <h5>🛍 My Orders</h5>
                                    <p>View your order history and track your recent jewellery purchases.</p>
                                    <a href="{{ route('customer.orders') }}" class="btn-default">View Orders</a>
                                </div>
                            </div>

                            <div class="col-md-6 mb-4">
                                <div class="border rounded-3 p-4 h-100">
                                    <h5>❤️ My Wishlist</h5>
                                    <p>Access your saved jewellery collections and favourite products.</p>
                                    <a href="{{ route('wishlist') }}" class="btn-default">View Wishlist</a>
                                </div>
                            </div>

                            <div class="col-md-6 mb-4">
                                <div class="border rounded-3 p-4 h-100">
                                    <h5>👤 Account Details</h5>
                                    <p>Update your profile, contact information, and password.</p>
                                    <a href="{{ route('profile') }}" class="btn-default">Edit Profile</a>
                                </div>
                            </div>

                            <div class="col-md-6 mb-4">
                                <div class="border rounded-3 p-4 h-100">
                                    <h5>🚪 Logout</h5>
                                    <p>Securely sign out of your GoldPot account whenever you're done.</p>
                                    <a href="{{ route('login') }}" class="btn-default">Logout</a>
                                </div>
                            </div>

                        </div>

                    </div>
                    <!-- Account Dashboard Detail Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page My Account End -->
@endsection