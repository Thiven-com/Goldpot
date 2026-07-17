@extends('layouts.website')
@section('content')

    <!-- Page Header Start -->
    <div class="page-header dark-section parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-3" data-cursor="-opaque">Checkout</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Page Checkout Start -->
    <div class="page-checkout">
        <div class="container">
            <form action="#">
                <div class="row">
                    <div class="col-xl-7">
                        <!-- Checkout Form Box Start -->
                        <div class="checkout-form-box">
                            <!-- Checkout Login Box Start -->
                            {{-- <div class="checkout-login-box wow fadeInUp" id="login_accordion">
                                <!-- Checkout Login Accordion Start -->
                                <div class="checkout-login-accordion">
                                    <h2 class="checkout-accordion-header" id="login_heading1">
                                        <button class="checkout-accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#login_collapse1"
                                            aria-expanded="false" aria-controls="login_collapse1">
                                            Returning customer? <b>Click here to login</b>
                                        </button>
                                    </h2>
                                    <div id="login_collapse1" class="accordion-collapse collapse" role="region"
                                        aria-labelledby="login_heading1" data-bs-parent="#login_accordion">
                                        <!-- Checkout Accordion Body Start -->
                                        <div class="checkout-accordion-body">
                                            <!-- Checkout Accordion Body Content Start -->
                                            <div class="checkout-accordion-body-content">
                                                <p>If you have shopped with us before, please enter your details below. If
                                                    you are a new customer, please proceed to the Billing section.</p>
                                            </div>
                                            <!-- Checkout Accordion Body Content End -->

                                            <!-- Checkout Login Form Start -->
                                            <div class="checkout-login-form">
                                                <div class="form-group">
                                                    <label>Account username *</label>
                                                    <input type="text" name="name" class="form-control" id="name"
                                                        placeholder="Enter user name" required="">
                                                    <div class="help-block with-errors"></div>
                                                </div>

                                                <div class="form-group">
                                                    <label>Password *</label>
                                                    <input type="password" name="password" class="form-control"
                                                        id="password" placeholder="Password" required="">
                                                    <div class="help-block with-errors"></div>
                                                </div>

                                                <!-- Checkout Login Form Footer Start -->
                                                <div class="checkout-login-form-footer">
                                                    <div class="checkout-login-btn">
                                                        <button type="submit" class="btn-default">Login</button>
                                                    </div>
                                                    <div class="checkout-form-checkbox">
                                                        <input type="checkbox" id="remember" name="rememberme"
                                                            value="remember">
                                                        <label for="remember">Remember Me</label>
                                                    </div>
                                                </div>
                                                <!-- Checkout Login Form Footer End -->
                                            </div>
                                            <!-- Checkout Login Form End -->
                                        </div>
                                        <!-- Checkout Accordion Body End -->
                                    </div>
                                </div>
                                <!-- Checkout Login Accordion End -->
                            </div> --}}
                            <!-- Checkout Login Box End -->

                            <!-- Checkout Bill Address Box Start -->
                            <div class="checkout-bill-address-box wow fadeInUp" data-wow-delay="0.2s">
                                <!-- Checkout Bill Address Title Start -->
                                <div class="checkout-bill-address-title">
                                    <h2>Billing address</h2>
                                </div>
                                <!-- Checkout Bill Address Title End -->

                                <!-- Checkout Bill Address Form Start -->
                                <div class="checkout-bill-address-form">
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label>First Name *</label>
                                            <input type="text" name="fname" class="form-control" id="fname"
                                                placeholder="Enter first name" required="">
                                            <div class="help-block with-errors"></div>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label>Last Name *</label>
                                            <input type="text" name="lname" class="form-control" id="lname"
                                                placeholder="Enter last name" required="">
                                            <div class="help-block with-errors"></div>
                                        </div>

                                        <div class="form-group col-lg-12">
                                            <label>Company name (optional)</label>
                                            <input type="text" name="company" class="form-control" id="company"
                                                placeholder="Enter company Name" required="">
                                            <div class="help-block with-errors"></div>
                                        </div>

                                        <div class="form-group col-lg-12">
                                            <label>Country / Region *</label>
                                            <select name="country" class="form-control form-select" id="country"
                                                required="">
                                                <option value="" disabled="" selected="">Select country</option>
                                                <option value="India">India</option>
                                                <option value="China">China</option>
                                                <option value="USA">USA</option>
                                            </select>
                                            <div class="help-block with-errors"></div>
                                        </div>

                                        <div class="form-group col-lg-12">
                                            <label>Town / City *</label>
                                            <input type="text" name="city" class="form-control" id="city"
                                                placeholder="Enter city" required="">
                                            <div class="help-block with-errors"></div>
                                        </div>

                                        <div class="form-group col-lg-12">
                                            <label>District *</label>
                                            <select name="district" class="form-control form-select" id="district"
                                                required="">
                                                <option value="" disabled="" selected="">Select District</option>
                                                <option value="Delhi">Delhi</option>
                                                <option value="Ahmedabad">Ahmedabad</option>
                                                <option value="Bengaluru">Bengaluru</option>
                                                <option value="Mumbai">Mumbai</option>
                                            </select>
                                            <div class="help-block with-errors"></div>
                                        </div>

                                        <div class="form-group col-lg-12">
                                            <label>Street address *</label>
                                            <input type="text" name="address" class="form-control" id="address"
                                                placeholder="Enter address" required="">
                                            <div class="help-block with-errors"></div>
                                        </div>

                                        <div class="form-group col-lg-12">
                                            <label>Postcode / ZIP (optional)</label>
                                            <input type="text" name="pincode" class="form-control" id="pincode"
                                                placeholder="Enter pin code" required="">
                                            <div class="help-block with-errors"></div>
                                        </div>

                                        <div class="form-group col-lg-12">
                                            <label>Phone Number*</label>
                                            <input type="text" name="phone" class="form-control" id="phone"
                                                placeholder="Phone" required="">
                                            <div class="help-block with-errors"></div>
                                        </div>

                                        <div class="form-group col-lg-12">
                                            <label>Email address *</label>
                                            <input type="email" name="email" class="form-control" id="email"
                                                placeholder="Enter e-mail" required="">
                                            <div class="help-block with-errors"></div>
                                            <div class="checkout-form-checkbox different-address-note">
                                                <input type="checkbox" id="differentaddress" name="differentaddress"
                                                    value="differentaddress">
                                                <label for="differentaddress">Ship to a different address?</label>
                                            </div>
                                        </div>

                                        <div class="form-group col-lg-12">
                                            <label>Order notes (optional)</label>
                                            <textarea name="notes" class="form-control" id="notes" rows="7"
                                                placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Checkout Bill Address Form End -->
                            </div>
                            <!-- Checkout Bill Address Box End -->
                        </div>
                        <!-- Checkout Form Box End -->
                    </div>

                    <div class="col-xl-5">
                        <!-- Page Single Sidebar Start -->
                        <div class="page-single-sidebar right-side-sidebar">
                            <!-- Checkout Sidebar Box Start -->
                            <div class="checkout-sidebar-box wow fadeInUp" data-wow-delay="0.2s">
                                <!-- Product Total Order Box Start -->
                                <div class="product-total-order-box">
                                    <!-- Checkout Coupeon Accordion Start -->
                                    <div class="checkout-coupeon-accordion">
                                        <h2 class="coupeon-accordion-header" id="coupeon_heading1">
                                            <button class="coupeon-accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#coupeon_collapse1"
                                                aria-expanded="false" aria-controls="coupeon_collapse1">
                                                Have a coupon? <b>Click here to enter your code</b>
                                            </button>
                                        </h2>
                                        <div id="coupeon_collapse1" class="accordion-collapse collapse" role="region"
                                            aria-labelledby="coupeon_heading1">
                                            <div class="coupeon-accordion-body">
                                                <div class="coupeon-accordion-body-content">
                                                    <p>If you have a coupon code, please apply it below.</p>
                                                </div>
                                                <div class="coupeon-apply-form">
                                                    <div class="form-group">
                                                        <input type="text" name="promo" class="form-control"
                                                            placeholder="Add promo code" required="">
                                                    </div>
                                                    <div class="coupeon-apply-btn">
                                                        <button class="btn-default">Apply Coupon</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Checkout Coupeon Accordion End -->

                                    <!-- Product Total Order Title Start -->
                                    <div class="product-total-order-title">
                                        <h3>Your Order</h3>
                                    </div>
                                    <!-- Product Total Order Title End -->

                                    <!-- Product Total Order List Start -->
                                    <div class="product-total-order-list">
                                        <!-- Product Total Item Tag List Start -->
                                        <div class="product-total-item-tag-list">
                                            <span class="product-total-item-tag">Product</span>
                                            <span class="product-total-item-tag">Subtotal</span>
                                        </div>
                                        <!-- Product Total Item Tag List End -->

                                        <!-- Product Total Item Start -->
                                        <div class="product-total-item">
                                            <div class="product-total-item-header">
                                                <div class="product-total-item-image">
                                                    <figure>
                                                        <img src="{{asset('website')}}/images/product-image-1.png" alt="">
                                                    </figure>
                                                </div>
                                                <div class="product-total-item-title">
                                                    <p>Timeless Elegance Ring</p>
                                                </div>
                                            </div>
                                            <div class="product-total-item-subtotal">
                                                <p>₹4000.00</p>
                                            </div>
                                        </div>
                                        <!-- Product Total Item End -->

                                        <!-- Product Total Item Start -->
                                        <div class="product-total-item">
                                            <div class="product-total-item-header">
                                                <div class="product-total-item-image">
                                                    <figure>
                                                        <img src="{{asset('website')}}/images/product-image-2.png" alt="">
                                                    </figure>
                                                </div>
                                                <div class="product-total-item-title">
                                                    <p>Kundan Curve Necklace</p>
                                                </div>
                                            </div>
                                            <div class="product-total-item-subtotal">
                                                <p>₹6000.00</p>
                                            </div>
                                        </div>
                                        <!-- Product Total Item End -->

                                        <!-- Product Total Item Start -->
                                        <div class="product-total-item">
                                            <div class="product-total-item-header">
                                                <div class="product-total-item-image">
                                                    <figure>
                                                        <img src="{{asset('website')}}/images/product-image-1.png" alt="">
                                                    </figure>
                                                </div>
                                                <div class="product-total-item-title">
                                                    <p>Gold Solitaire Earrings</p>
                                                </div>
                                            </div>
                                            <div class="product-total-item-subtotal">
                                                <p>₹12000.00</p>
                                            </div>
                                        </div>
                                        <!-- Product Total Item End -->

                                        <!-- All Product Total List Start -->
                                        <div class="all-product-total-list">
                                            <!-- All Product Total Start -->
                                            <div class="all-product-total">
                                                <p>Subtotal <span>₹22000.00</span></p>
                                            </div>
                                            <!-- All Product Total Start -->

                                            <!-- All Product Total End -->
                                            <div class="all-product-total">
                                                <p>Total <span>₹22000.00</span></p>
                                            </div>
                                            <!-- All Product Total End -->
                                        </div>
                                        <!-- All Product Total List End -->

                                        <!-- Order Summary Shipment Info Start -->
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
                                                        <input type="radio" id="Flat_rate" name="interest"
                                                            value="Flat_rate">
                                                        <label for="Flat_rate">Flat rate:</label>
                                                    </span>
                                                    <label for="Flat_rate">₹20000.00</label>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- Order Summary Shipment Info End -->

                                        <!-- Order Payment Info Start -->
                                        <div class="order-payment-info">
                                            <!-- Order Payment Info Item Start -->
                                            <div class="order-payment-info-item">
                                                <span>
                                                    <input type="radio" id="check_payments" name="payment"
                                                        value="check_payments" checked="">
                                                    <label for="check_payments">Check payments</label>
                                                </span>
                                                <p>Please send a check to Store Name, Store Street, Store Town, Store State
                                                    / County, Store Postcode.</p>
                                            </div>
                                            <!-- Order Payment Info Item End -->

                                            <!-- Order Payment Info Item Start -->
                                            <div class="order-payment-info-item">
                                                <span>
                                                    <input type="radio" id="cash_on_delivery" name="payment"
                                                        value="cash_on_delivery">
                                                    <label for="cash_on_delivery">Cash on delivery</label>
                                                </span>
                                            </div>
                                            <!-- Order Payment Info Item End -->
                                        </div>
                                        <!-- Order Payment Info End -->
                                    </div>
                                    <!-- Product Total Order List End -->
                                </div>
                                <!-- Product Total Order Box End -->

                                <!-- Place Order Button Start -->
                                <div class="place-order-button">
                                    <a href="{{ route('orders') }}" class="btn-default">Place Order</a>
                                    <div id="msgSubmit" class="h3 hidden"></div>
                                </div>
                                <!-- Place Order Button End -->
                            </div>
                            <!-- Checkout Sidebar Box End -->
                        </div>
                        <!-- Page Single Sidebar End -->
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Page Checkout End -->
@endsection