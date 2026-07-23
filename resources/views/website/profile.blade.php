@extends('layouts.website')
@section('content')
    <style>
        .profile-card {
            background: #fff;
            border-radius: 18px;
            border: 1px solid #e9ecef;
            box-shadow: 0 15px 35px rgba(0, 0, 0, .05);
            overflow: hidden;
        }

        .profile-title {
            background: #f8f9fb;
            padding: 25px 30px;
            border-bottom: 1px solid #ececec;
        }

        .profile-title h2 {
            margin: 0;
            font-size: 28px;
            font-weight: 700;
            color: #111827;
        }

        .profile-title span {
            display: block;
            margin-top: 6px;
            color: #6b7280;
            font-size: 15px;
        }

        .profile-body {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
            padding: 30px;
        }

        .profile-info-box {
            background: #fff;
            border: 1px solid #ececec;
            border-radius: 14px;
            padding: 22px;
            transition: .3s;
        }

        .profile-info-box:hover {
            transform: translateY(-4px);
            border-color: #111827;
            box-shadow: 0 10px 25px rgba(0, 0, 0, .08);
        }

        .profile-full {
            grid-column: 1/-1;
        }

        .profile-label {
            display: flex;
            align-items: center;
            gap: 10px;
            color: #6b7280;
            font-size: 14px;
            margin-bottom: 12px;
            text-transform: uppercase;
            letter-spacing: .5px;
        }

        .profile-label i {
            width: 38px;
            height: 38px;
            border-radius: 50%;
            background: #f5f5f5;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 16px;
            color: #111827;
        }

        .profile-info-box h5 {
            margin: 0;
            font-size: 20px;
            font-weight: 600;
            color: #111827;
        }

        .profile-address {
            margin: 0;
            line-height: 30px;
            color: #4b5563;
            font-size: 16px;
        }

        @media(max-width:768px) {

            .profile-body {
                grid-template-columns: 1fr;
                padding: 20px;
            }

            .profile-title {
                padding: 20px;
            }

            .profile-title h2 {
                font-size: 22px;
            }

            .profile-full {
                grid-column: auto;
            }

        }
    </style>

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
                                <li><a href="{{ route('customer.orders') }}"><img
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
                                <li><a href="{{ route('login') }}" style="color: red;"><img
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



                        <!-- Personal Information -->
                        <div class="account-details-content-item wow fadeInUp profile-card">

                            <div class="checkout-bill-address-title profile-title">
                                <div>
                                    <h2>Personal Information</h2>
                                    <span>Manage your account information</span>
                                </div>
                            </div>

                            <div class="profile-body">

                                <div class="profile-info-box">
                                    <span class="profile-label">
                                        <i class="fa-solid fa-user"></i>
                                        Full Name
                                    </span>

                                    <h5>{{ $address->name ?? '-' }}</h5>
                                </div>

                                <div class="profile-info-box">
                                    <span class="profile-label">
                                        <i class="fa-solid fa-phone"></i>
                                        Mobile Number
                                    </span>

                                    <h5>{{ $address->mobile ?? '-' }}</h5>
                                </div>

                                <div class="profile-info-box profile-full">
                                    <span class="profile-label">
                                        <i class="fa-solid fa-envelope"></i>
                                        Email Address
                                    </span>

                                    <h5>{{ $address->email ?? '-' }}</h5>
                                </div>

                                <div class="profile-info-box profile-full">
                                    <span class="profile-label">
                                        <i class="fa-solid fa-location-dot"></i>
                                         Address
                                    </span>

                                    @if($defaultAddress)

                                        <p class="profile-address">

                                            {{ $defaultAddress->address }}

                                            @if($defaultAddress->address_2)
                                                , {{ $defaultAddress->address_2 }}
                                            @endif

                                            <br>

                                            {{ $defaultAddress->city }},
                                            {{ $defaultAddress->state }}
                                            - {{ $defaultAddress->pincode }}

                                        </p>

                                    @else

                                        <p class="text-muted">No address found.</p>

                                    @endif

                                </div>

                            </div>

                        </div>
                    </div>
                    <!-- Account Details Content Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Account Details End -->
@endsection