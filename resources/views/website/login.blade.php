@extends('layouts.website')
@section('content')

    <!-- Page Header Start -->
    <div class="page-header dark-section parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-3" data-cursor="-opaque">Login & Sign Up</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Login & Sign Up</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Pgae Login Section Start -->
    <div class="page-login">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <!-- Login Content Box Start -->
                    <div class="login-content-box">
                        <!-- Login Content Form Item Start -->
                        <div class="login-content-form-item">
                            <form id="LoginForm" action="#" method="POST" data-toggle="validator">
                                <!-- Login Form Content Start -->
                                <div class="login-form-content">
                                    <!-- Login Content Title Box Start -->
                                    <div class="login-content-title-box">
                                        <h2 class="text-anime-style-3" data-cursor="-opaque">Login your account</h2>
                                        <p class="wow fadeInUp">Access your account to explore our latest collections, track
                                            your orders shopping experience. Enter your detail below to continue your
                                            journey with us.</p>
                                    </div>
                                    <!-- Login Content Title Box End -->

                                    <!-- Checkout Login Form Start -->
                                    <div class="checkout-login-form wow fadeInUp" data-wow-delay="0.2s">
                                        <div class="form-group">
                                            <label>Username or email address *</label>
                                            <input type="text" name="name" class="form-control" id="name"
                                                placeholder="Enter user name" required="">
                                            <div class="help-block with-errors"></div>
                                        </div>

                                        <div class="form-group">
                                            <label>Password *</label>
                                            <input type="password" name="current_password" class="form-control"
                                                id="current-password" placeholder="Enter password" required="">
                                            <div class="help-block with-errors"></div>
                                        </div>

                                        <!-- Checkout Login Form Footer Start -->
                                        <div class="checkout-login-form-footer">
                                            <div class="checkout-login-btn">
                                                <button type="button" class="btn-default"
                                                    onclick="window.location='{{ route('home') }}'">
                                                    Login
                                                </button>
                                            </div>
                                            <div class="checkout-form-checkbox">
                                                <input type="checkbox" id="remember" name="#">
                                                <label for="remember">Remember Me</label>
                                            </div>
                                        </div>
                                        <!-- Checkout Login Form Footer End -->
                                    </div>
                                    <!-- Checkout Login Form End -->
                                </div>
                                <!-- Login Form Content End -->
                            </form>
                        </div>
                        <!-- Login Content Form Item End -->

                        <!-- Login Content Form Item Start -->
                        <div class="login-content-form-item">
                            <form id="SignupForm" action="#" method="POST" data-toggle="validator">
                                <!-- Login Form Content Start -->
                                <div class="login-form-content">
                                    <div class="login-content-title-box">
                                        <h2 class="text-anime-style-3" data-cursor="-opaque">
                                            Create Your Account
                                        </h2>

                                        <p class="wow fadeInUp">
                                            Join GoldPot to shop premium jewellery, track your orders, and enjoy exclusive
                                            savings plans and jewellery schemes.
                                        </p>
                                    </div>

                                    <div class="checkout-login-form wow fadeInUp" data-wow-delay="0.2s">

                                        <div class="form-group">
                                            <label>Full Name *</label>
                                            <input type="text" name="name" class="form-control"
                                                placeholder="Enter your full name" required>
                                        </div>

                                        <div class="form-group">
                                            <label>Mobile Number *</label>
                                            <input type="text" name="mobile" class="form-control"
                                                placeholder="Enter mobile number" maxlength="10" required>
                                        </div>

                                        <div class="form-group">
                                            <label>Email Address *</label>
                                            <input type="email" name="email" class="form-control"
                                                placeholder="Enter email address" required>
                                        </div>

                                        <div class="form-group">
                                            <label>Password *</label>
                                            <input type="password" name="password" class="form-control"
                                                placeholder="Enter password" required>
                                        </div>

                                        <div class="form-group">
                                            <label>Confirm Password *</label>
                                            <input type="password" name="password_confirmation" class="form-control"
                                                placeholder="Confirm password" required>
                                        </div>
                                        <div class="checkout-login-btn signup-form-btn">
                                            <button type="submit" class="btn-default w-100" 
                                                    onclick="window.location='{{ route('home') }}'">
                                                Create Account
                                            </button>
                                        </div>

                                    </div>
                                </div>
                                <!-- Login Form Content End -->
                            </form>
                        </div>
                        <!-- Login Content Form Item End -->
                    </div>
                    <!-- Login Content Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Pgae Login Section End -->
@endsection