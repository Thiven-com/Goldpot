@extends('layouts.website')

@section('content')

<style>
    .address-box{
    display:block;
    cursor:pointer;
}

.address-box input{
    display:none;
}

.address-content{
    border:1px solid #e5e5e5;
    border-radius:10px;
    padding:18px;
    transition:.3s;
}

.address-box input:checked + .address-content{
    border:2px solid #000;
    background:#f8f8f8;
}

.product-total-item{
    display:flex;
    justify-content:space-between;
    align-items:center;
    margin-bottom:20px;
}

.checkout-sidebar-box{
    border:1px solid #ececec;
    border-radius:12px;
    padding:25px;
    position:sticky;
    top:20px;
}
</style>

<!-- Breadcrumb -->
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

<!-- Checkout -->
<div class="page-checkout py-5">
    <div class="container">

        <form action="{{ route('customer.order.store') }}" method="POST">
            @csrf

            <div class="row">

                <!-- LEFT SIDE -->
                <div class="col-lg-7">

                    <div class="checkout-form-box">

                        <h3 class="mb-4">Delivery Address</h3>

                        @forelse($addresses as $address)

                            <label class="address-box mb-3">

                                <input type="radio"
                                       name="address_id"
                                       value="{{ $address->id }}"
                                       {{ $loop->first ? 'checked' : '' }}>

                                <div class="address-content">

                                    <strong>{{ $address->name }}</strong>

                                    <p class="mb-1">
                                        {{ $address->address }}
                                        @if($address->address_2)
                                            , {{ $address->address_2 }}
                                        @endif
                                    </p>

                                    <p class="mb-1">
                                        {{ $address->city }},
                                        {{ $address->state }}
                                        -
                                        {{ $address->pincode }}
                                    </p>

                                    <p class="mb-0">
                                        Mobile :
                                        {{ $address->mobile }}
                                    </p>

                                </div>

                            </label>

                        @empty

                            <p>No address found.</p>

                        @endforelse

                    </div>

                </div>


                <!-- RIGHT SIDE -->
                <div class="col-lg-5">

                    <div class="checkout-sidebar-box">

                        <h3 class="mb-4">
                            Your Order
                        </h3>

                        @php
                            $subtotal = 0;
                        @endphp

                        @foreach($cartItems as $item)

                            @php

                                $variant = $item->variant;
                                $product = $variant->product;

                                $lineTotal = $variant->price * $item->quantity;

                                $subtotal += $lineTotal;

                            @endphp

                            <div class="product-total-item">

                                <div class="d-flex align-items-center">

                                    <img src="{{ asset($variant->image) }}"
                                         width="70"
                                         class="me-3">

                                    <div>

                                        <h6 class="mb-1">
                                            {{ $product->title }}
                                        </h6>

                                        Qty :
                                        {{ $item->quantity }}

                                    </div>

                                </div>

                                <div>

                                    ₹{{ number_format($lineTotal,2) }}

                                </div>

                            </div>

                        @endforeach

                        <hr>

                        <div class="d-flex justify-content-between mb-2">
                            <span>Subtotal</span>

                            <strong>
                                ₹{{ number_format($subtotal,2) }}
                            </strong>
                        </div>

                        <div class="d-flex justify-content-between mb-2">
                            <span>Shipping</span>

                            <strong>FREE</strong>
                        </div>

                        <div class="d-flex justify-content-between mb-2">
                            <span>Discount</span>

                            <strong>
                                ₹{{ number_format($discount,2) }}
                            </strong>
                        </div>

                        <hr>

                        <div class="d-flex justify-content-between mb-4">

                            <h5>Total</h5>

                            <h5>
                                ₹{{ number_format($total,2) }}
                            </h5>

                        </div>

                        <h5 class="mb-3">
                            Payment Method
                        </h5>

                        <div class="form-check mb-2">

                            <input class="form-check-input"
                                   type="radio"
                                   name="payment_method"
                                   value="online_payment"
                                   checked>

                            <label class="form-check-label">
                                Online Payment
                            </label>

                        </div>

                        <div class="form-check mb-4">

                            <input class="form-check-input"
                                   type="radio"
                                   name="payment_method"
                                   value="cod">

                            <label class="form-check-label">
                                Cash On Delivery
                            </label>

                        </div>

                        <button type="submit"
                                class="btn-default w-100">

                            Place Order

                        </button>

                    </div>

                </div>

            </div>

        </form>

    </div>
</div>

@endsection