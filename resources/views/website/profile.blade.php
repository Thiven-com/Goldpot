@extends('layouts.website')
@section('content')

    <!-- Page Header Start -->
    <div class="page-header dark-section parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-3" data-cursor="-opaque">Account Details</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Account details</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Page Account Details Start -->
    <div class="page-account-details light-section">
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
                                <li><a href="{{ route('orders') }}"><img
                                            src="{{asset('website')}}/images/icon-cart-primary.svg" alt="">Orders</a>
                                </li>
                                <li><a href="{{ route('profile') }}"><img
                                            src="{{asset('website')}}/images/icon-user-primary.svg" alt="">Account
                                        details</a></li>
                                <li><a href="{{ route('addresses') }}"><img
                                            src="{{asset('website')}}/images/icon-dashboard-primary.svg"
                                            alt="">Addresses</a></li>
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
                    <!-- Account Details Content Box Start -->
                    <div class="account-details-content-box">
                        <form class="checkout-bill-address-form" id="addressForm" action="#" method="POST">
                            <!-- Account Details Content Item Start -->
                            <div class="account-details-content-item wow fadeInUp">
                                <div class="checkout-bill-address-title">
                                    <h2>Personal Information</h2>
                                </div>

                                <div class="checkout-bill-address-form">
                                    <div class="row">

                                        <div class="form-group col-md-6">
                                            <label>Full Name *</label>
                                            <input type="text" class="form-control" name="name" value="Rahul Sharma"
                                                placeholder="Enter full name">
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label>Mobile Number *</label>
                                            <input type="text" class="form-control" name="mobile" value="9876543210"
                                                placeholder="Enter mobile number">
                                        </div>

                                        <div class="form-group col-lg-12">
                                            <label>Email Address *</label>
                                            <input type="email" class="form-control" name="email"
                                                value="rahul.sharma@example.com" placeholder="Enter email address">
                                        </div>

                                        <div class="form-group col-lg-12">
                                            <label>Address</label>
                                            <textarea class="form-control" rows="4" name="address"
                                                placeholder="Enter your address">No. 45, MG Road, Bengaluru, Karnataka - 560001</textarea>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- Account Details Content Item End -->
                            <div class="checkout-bill-address-title">
                                <h2>Change Password</h2>
                            </div>

                            <div class="checkout-bill-address-form">
                                <div class="row">

                                    <div class="form-group col-lg-12">
                                        <label>Current Password</label>
                                        <input type="password" class="form-control" name="current_password"
                                            placeholder="Enter current password">
                                    </div>

                                    <div class="form-group col-lg-6">
                                        <label>New Password</label>
                                        <input type="password" class="form-control" name="new_password"
                                            placeholder="Enter new password">
                                    </div>

                                    <div class="form-group col-lg-6">
                                        <label>Confirm Password</label>
                                        <input type="password" class="form-control" name="confirm_password"
                                            placeholder="Confirm new password">
                                    </div>

                                </div>
                            </div>

                            <!-- Account Detail Form Button Start -->
                            <div class="checkout-login-btn">
                                <button type="submit" class="btn-default">Save Changes</button>
                            </div>
                            <!-- Account Detail Form Button End -->
                        </form>
                    </div>
                    <!-- Account Details Content Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Account Details End -->
@endsection