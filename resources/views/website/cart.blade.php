@extends('layouts.website')
@section('content')
    <style>
        .order-summary-footer {
            /* border-top: 1px solid #e5e5e5; */
            padding-top: 20px;
        }

        .total-order {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .price-wrap {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .total {
            font-size: 24px;
            font-weight: 700;
            color: #000;
        }

        .price-old {
            font-size: 16px;
            color: #999;
            text-decoration: line-through;
        }

        .order-summary-footer .btn-default {
            width: 100%;
            text-align: center;
            padding: 14px 20px;
        }
    </style>

    <style>
        /* Chrome, Safari, Edge, Opera */
        .qty-input::-webkit-outer-spin-button,
        .qty-input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        /* Firefox */
        .qty-input {
            -moz-appearance: textfield;
            appearance: textfield;
        }
    </style>
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
                                @forelse($cartItems as $item)
                                    <!-- Cart Item Header Start -->
                                    <div class="cart-item-header">
                                        <span class="product-header-tag">Product</span>
                                        <span class="price-header-tag">Price</span>
                                        <span class="quantity-header-tag">Quantity</span>
                                        <span class="subtotal-header-tag">Subtotal</span>
                                    </div>
                                    <!-- Cart Item Header End -->

                                    <!-- Cart Item Start -->

                                    @php
                                        $variant = $item->variant;
                                        $product = $variant?->product;
                                        $lineTotal = $item->quantity * $item->unit_price;
                                    @endphp

                                    @if($variant && $product)

                                        <div class="cart-item">

                                            <div class="cart-item-image-content">

                                                <div class="cart-item-image">
                                                    <figure>
                                                        <img src="{{ asset($variant->image) }}" alt="{{ $product->title }}">
                                                    </figure>
                                                </div>

                                                <div class="cart-item-info-content">

                                                    <div class="cart-item-title">
                                                        <p>{{ $product->title }}</p>

                                                        @if($variant->name)
                                                            <small>{{ $variant->name }}</small>
                                                        @endif
                                                        <form action="{{ route('customer.cart.remove', $item->id) }}" method="POST">
                                                            @csrf
                                                            @method('DELETE')

                                                            <button class="btn btn-link p-0 text-danger">
                                                                Remove
                                                            </button>
                                                        </form>
                                                    </div>

                                                    <div class="cart-item-price">
                                                        <p>₹{{ number_format($item->unit_price, 2) }}</p>

                                                        @if($variant->actual_price > $item->unit_price)
                                                            <small style="text-decoration:line-through">
                                                                ₹{{ number_format($variant->actual_price, 2) }}
                                                            </small>
                                                        @endif
                                                    </div>



                                                </div>

                                            </div>

                                            <div class="cart-item-quantity-total">

                                                <div class="cart-item-quantity">

                                                    <form action="{{ route('customer.cart.update') }}" method="POST">
                                                        @csrf

                                                        <input type="hidden" name="id" value="{{ $item->id }}">

                                                        <div class="wg-quantity">

                                                            <button type="button" class="qty-btn minus">
                                                                <span>-</span>
                                                            </button>

                                                            <input type="number" name="quantity" value="{{ $item->quantity }}"
                                                                min="1" class="qty-input">

                                                            <button type="button" class="qty-btn plus">
                                                                <span>+</span>
                                                            </button>

                                                        </div>

                                                        <button class="btn-default mt-2">
                                                            Update
                                                        </button>

                                                    </form>

                                                </div>

                                                <div class="cart-item-subtotal">
                                                    <p>₹{{ number_format($lineTotal, 2) }}</p>
                                                </div>

                                            </div>

                                        </div>

                                    @endif

                                @empty

                                    <div class="text-center py-5">

                                        {{-- <img src="{{ asset('website/images/empty-cart.png') }}" width="140"> --}}

                                        <h4 class="mt-3">
                                            Your Cart is Empty
                                        </h4>

                                        <a href="{{ route('shop') }}" class="btn-default">
                                            Continue Shopping
                                        </a>

                                    </div>

                                @endforelse
                                <!-- Cart Item End -->
                            </div>
                            <!-- Cart Item Table End -->


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
                                @foreach($products as $product)

                                    <div class="product-item wow fadeInUp">

                                        <!-- Product Item Header -->
                                        <div class="product-item-header">

                                            <div class="product-item-image">
                                                <a href="{{ route('productDetails', $product->slug) }}">
                                                    <figure>
                                                        <img src="{{ asset($product->image) }}" alt="{{ $product->title }}">
                                                    </figure>
                                                </a>
                                            </div>

                                            <div class="product-item-action">
                                                <ul>
                                                    <li class="cart">
                                                        <a href="javascript:void(0);"
                                                            class="hover-tooltip tooltip-left box-icon wishlistBtn"
                                                            data-id="{{ $product->variant->id }}">

                                                            <img src="{{ asset('website/images/icon-wishlist-primary.svg') }}"
                                                                alt="">
                                                        </a>
                                                    </li>

                                                    {{-- <li>
                                                        <a href="{{ route('productDetails', $product->slug) }}">
                                                            <img src="{{ asset('website/images/icon-preview-primary.svg') }}"
                                                                alt="">
                                                        </a>
                                                    </li> --}}
                                                    <li class="cart">
                                                        <a href="javascript:void(0);"
                                                            class="hover-tooltip tooltip-left box-icon addCartBtn"
                                                            data-id="{{ $product->variant->id }}">

                                                            <img src="{{ asset('website/images/icon-cart-primary.svg') }}"
                                                                alt="">
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>

                                        </div>

                                        <!-- Product Item Body -->
                                        <div class="product-item-body">

                                            <div class="product-item-content">
                                                <h2 class="product-item-title">
                                                    <a href="{{ route('productDetails', $product->slug) }}">
                                                        {{ $product->title }}
                                                    </a>
                                                </h2>
                                            </div>

                                            <div class="product-item-price">


                                                <h3>
                                                    ₹{{ number_format($product->variant->price, 2) }}

                                                    @if($product->variant->actual_price && $product->variant->actual_price > $product->variant->price)
                                                        <span>₹{{ number_format($product->variant->actual_price, 2) }}</span>
                                                    @endif
                                                </h3>

                                            </div>

                                        </div>

                                    </div>

                                @endforeach

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
                                        @php
                                            $shipping = 0;
                                        @endphp

                                        <div class="order-summary-total">
                                            <h3>Product Total</h3>
                                            <h3>₹{{ number_format($actualTotal, 2) }}</h3>
                                        </div>

                                        <div class="order-summary-total">
                                            <h3>Subtotal</h3>
                                            <h3>₹{{ number_format($subtotal, 2) }}</h3>
                                        </div>

                                        @if($savings > 0)
                                            <div class="order-summary-total">
                                                <h3>You Save</h3>
                                                <h3 class="text-success">
                                                    -₹{{ number_format($savings, 2) }}
                                                </h3>
                                            </div>
                                        @endif

                                        <div class="order-summary-total">
                                            <h3>Shipping</h3>
                                            <h3>{{ $shipping == 0 ? 'Free' : '₹' . number_format($shipping, 2) }}</h3>
                                        </div>
                                        <hr>
                                        <div class="total-order">
                                            <span>Grand Total</span>
                                            <span class="fw-bold">
                                                ₹{{ number_format($total, 2) }}
                                            </span>
                                        </div>
                                    </div>
                                    <div class="order-summary-footer">

                                        {{-- <div class="total-order text-body-l mb-3">
                                            <span class="fw-normal">Estimated Total</span>

                                            <div class="price-wrap gap-2">

                                                <span class="total fw-bold">
                                                    ₹{{ number_format($total, 2) }}
                                                </span>

                                                @if($subtotal > $total)
                                                <span class="price-old text-muted text-decoration-line-through">
                                                    ₹{{ number_format($subtotal, 2) }}
                                                </span>
                                                @endif

                                            </div>
                                        </div>

                                        @if($subtotal > $total)
                                        <p class="text-end mb-4">
                                            You've saved
                                            <strong class="text-success">
                                                ₹{{ number_format($subtotal - $total, 2) }}
                                            </strong>
                                        </p>
                                        @endif --}}


                                        <a href="{{ route('checkout') }}" class="btn-default w-100">
                                            Proceed to Checkout
                                        </a>


                                    </div>
                                </div>
                                <!-- Order Summary Content Box End -->

                                <!-- Order Checkout Button Start -->
                                {{-- <div class="order-checkout-button">
                                    <a href="{{ route('checkout') }}" class="btn-default">Proceed to Checkout</a>
                                </div> --}}
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

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        $(document).on('click', '.wishlistBtn', function (e) {

            e.preventDefault();

            let button = $(this);
            let variantId = button.data('id');

            $.ajax({
                url: "{{ route('customer.wishlist.add') }}",
                type: "POST",
                data: {
                    _token: "{{ csrf_token() }}",
                    product_variant_id: variantId
                },

                success: function (res) {

                    if (res.type == 'added') {
                        button.find('.wishlist-icon').addClass('text-danger');
                    } else {
                        button.find('.wishlist-icon').removeClass('text-danger');
                    }

                    if ($('#wishlistCount').length) {
                        $('#wishlistCount').text(res.count);
                    }

                    toastr.success(res.message);
                }, // <-- Missing comma was here

                error: function (xhr) {
                    console.log(xhr.responseText);
                    toastr.error("Something went wrong");
                }

            });

        });
    </script>
    <script>
        $(document).on('click', '.addCartBtn', function () {

            let button = $(this);
            let variantId = button.data('id');

            $.ajax({
                url: "{{ route('customer.cart.add') }}",
                type: "POST",
                data: {
                    _token: "{{ csrf_token() }}",
                    product_variant_id: variantId,
                    quantity: 1
                },

                beforeSend: function () {
                    button.find('.text').text('Adding...');
                },

                success: function (res) {
                    if (res.status == true) {
                        if (res.stock_error == true) {
                            alert(res.message);
                            button.find('.text').text('Add To Cart');
                            return false;
                        }
                        $('#cartCount').text(res.count);

                        button.find('.text').text('Added');

                        setTimeout(function () {
                            button.find('.text').text('Add To Cart');
                        }, 1500);
                        location.reload();
                    } else {
                        window.location.href = "/login";
                    }
                },

                error: function (xhr) {

                    if (xhr.status == 401) {
                        window.location.href = "/login";
                    }

                }
            });

        });
    </script>

    <script>
        $(document).on('click', '.plus', function () {
            let input = $(this).siblings('.qty-input');
            input.val(parseInt(input.val()) + 1);
        });

        $(document).on('click', '.minus', function () {
            let input = $(this).siblings('.qty-input');
            let value = parseInt(input.val());

            if (value > 1) {
                input.val(value - 1);
            }
        });
    </script>
@endsection