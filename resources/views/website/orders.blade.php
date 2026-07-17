@extends('layouts.website')
@section('content')

    <!-- Page Header Start -->
    <div class="page-header dark-section parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-3" data-cursor="-opaque">Orders</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="account-order.html">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Orders</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Page Account Order Start -->
    <div class="page-account-order light-section">
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
                    <!-- Account Order Detail Box Start -->
                    <div class="account-order-detail-box">
                        <!-- Account Order Table Box Start -->
                        <div class="account-order-table-box wow fadeInUp">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Order</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                        <th>Quantity</th>
                                        <th>Total</th>
                                        {{-- <th>Actions</th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="account-order-table-no">#236</td>
                                        <td>Feb 15, 2026</td>
                                        <td>On hold</td>
                                        <td>1 items</td>
                                        <td>₹4000.00</td>
                                        {{-- <td><a href="account-orders-details.html" class="btn-default">View</a></td>
                                        --}}
                                    </tr>
                                    <tr>
                                        <td class="account-order-table-no">#237</td>
                                        <td>March 22, 2026</td>
                                        <td>On hold</td>
                                        <td>2 items</td>
                                        <td>₹6000.00</td>
                                        {{-- <td><a href="account-orders-details.html" class="btn-default">View</a></td>
                                        --}}
                                    </tr>
                                    <tr>
                                        <td class="account-order-table-no">#238</td>
                                        <td>April 17, 2026</td>
                                        <td>On hold</td>
                                        <td>4 items</td>
                                        <td>₹12000.00</td>
                                        {{-- <td><a href="account-orders-details.html" class="btn-default">View</a></td>
                                        --}}
                                    </tr>
                                    <tr>
                                        <td class="account-order-table-no">#239</td>
                                        <td>May 18, 2026</td>
                                        <td>On hold</td>
                                        <td>1 items</td>
                                        <td>₹4000.00</td>
                                        {{-- <td><a href="account-orders-details.html" class="btn-default">View</a></td>
                                        --}}
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- Account Order Table Box End -->

                        <!-- Account Order Button Start -->
                        <div class="account-order-button wow fadeInUp" data-wow-delay="0.2s">
                            <a href="{{route('shop')}}" class="btn-default">Back to Shop</a>
                        </div>
                        <!-- Account Order Button End -->
                    </div>
                    <!-- Account Order Detail Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Account Order End -->
@endsection