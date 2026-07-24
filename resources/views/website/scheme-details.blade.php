@extends('layouts.website')

@section('content')

    <style>
        :root {
            --gold: #c9a227;
            --gold-dark: #9b7a12;
            --light: #faf8f3;
            --text: #333;
        }

        body {
            background: #f8f8f8;
        }

        .scheme-header {
            background: linear-gradient(rgba(0, 0, 0, .65), rgba(0, 0, 0, .65)),
                url('{{ asset("website/images/page-header.jpg") }}') center center/cover;
            padding: 130px 0;
            color: #fff;
        }

        .scheme-header h1 {
            font-size: 48px;
            font-weight: 700;
        }

        .scheme-header p {
            opacity: .9;
        }

        .scheme-main {
            margin-top: -70px;
            position: relative;
            z-index: 10;
        }

        .scheme-gallery {
            background: #fff;
            border-radius: 25px;
            overflow: hidden;
            box-shadow: 0 20px 50px rgba(0, 0, 0, .08);
        }

        .scheme-gallery img {
            width: 100%;
            height: 550px;
            object-fit: cover;
        }

        .scheme-info {
            background: #fff;
            border-radius: 25px;
            padding: 40px;
            box-shadow: 0 20px 50px rgba(0, 0, 0, .08);
        }

        .scheme-badge {
            display: inline-block;
            background: #fff4d6;
            color: var(--gold-dark);
            padding: 8px 18px;
            border-radius: 40px;
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 20px;
        }

        .scheme-info h2 {
            font-size: 40px;
            font-weight: 700;
            color: #222;
            margin-bottom: 15px;
        }

        .scheme-info p {
            color: #666;
            line-height: 28px;
        }

        .scheme-price {
            display: flex;
            align-items: center;
            gap: 15px;
            margin: 25px 0;
        }

        .scheme-price h3 {
            color: var(--gold-dark);
            font-size: 40px;
            font-weight: 700;
            margin: 0;
        }

        .scheme-price span {
            color: #666;
        }

        .wallet-tag {
            background: #f3f9f2;
            border-left: 4px solid #28a745;
            padding: 18px;
            border-radius: 12px;
            margin-top: 25px;
        }

        .wallet-tag i {
            color: #28a745;
            margin-right: 8px;
        }

        .feature-box {
            display: flex;
            gap: 15px;
            margin-top: 18px;
        }

        .feature-icon {
            width: 55px;
            height: 55px;
            background: #fff8e8;
            color: var(--gold-dark);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 22px;
            flex-shrink: 0;
        }

        .feature-content h5 {
            margin-bottom: 5px;
            font-weight: 600;
        }

        .feature-content p {
            margin: 0;
            color: #777;
            font-size: 15px;
        }

        @media(max-width:991px) {

            .scheme-gallery img {

                height: 380px;

            }

            .scheme-info {

                margin-top: 30px;

                padding: 30px;

            }

            .scheme-header h1 {

                font-size: 34px;

            }

        }
    </style>

    <!-- Hero -->

    <div class="scheme-header">

        <div class="container text-center">

            <h1>{{ $scheme->title }}</h1>

            <p>

                Home /

                Jewellery Schemes /

                {{ $scheme->title }}

            </p>

        </div>

    </div>

    <section class="scheme-main pb-5">

        <div class="container">

            <div class="row g-4 align-items-center">

                <div class="col-lg-6">

                    <div class="scheme-gallery">

                        @if($scheme->image)

                            <img src="{{ asset($scheme->image) }}" alt="{{ $scheme->title }}">

                        @else

                            <img src="{{ asset('website/images/no-image.png') }}">

                        @endif

                    </div>

                </div>

                <div class="col-lg-6">

                    <div class="scheme-info">

                        <span class="scheme-badge">

                            Jewellery Savings Scheme

                        </span>

                        <h2>

                            {{ $scheme->title }}

                        </h2>

                        <p>

                            {{ $scheme->short_description }}

                        </p>

                        <div class="scheme-price">

                            <h3>

                                ₹{{ number_format($scheme->monthly_amount, 2) }}

                            </h3>

                            <span>

                                Per Month

                            </span>

                        </div>

                        <div class="wallet-tag">

                            <i class="fa fa-wallet"></i>

                            Every successful monthly payment is credited to your jewellery wallet
                            and can be redeemed while purchasing jewellery.

                        </div>

                        <div class="feature-box">

                            <div class="feature-icon">

                                <i class="fa fa-calendar"></i>

                            </div>

                            <div class="feature-content">

                                <h5>

                                    {{ $scheme->installments }} Monthly Installments

                                </h5>

                                <p>

                                    Flexible monthly savings plan.

                                </p>

                            </div>

                        </div>

                        <div class="feature-box">

                            <div class="feature-icon">

                                <i class="fa fa-gift"></i>

                            </div>

                            <div class="feature-content">

                                <h5>

                                    Wallet Bonus

                                </h5>

                                <p>

                                    @if($scheme->bonus_type == 'fixed')

                                        ₹{{ number_format($scheme->bonus_amount, 2) }}

                                    @else

                                        {{ $scheme->bonus_amount }}%

                                    @endif

                                    bonus on eligible schemes.

                                </p>

                            </div>

                        </div>

                        <div class="feature-box">

                            <div class="feature-icon">

                                <i class="fa fa-gem"></i>

                            </div>

                            <div class="feature-content">

                                <h5>

                                    Redeem for Jewellery

                                </h5>

                                <p>

                                    Use your wallet balance while purchasing
                                    gold, diamond and silver jewellery.

                                </p>

                            </div>

                        </div>

                    </div>

                </div>

            </div>
            <div class="row g-3 mt-5">

                <div class="col-md-6">

                    <div class="card border-0 shadow-sm h-100" style="border-radius:18px;">

                        <div class="card-body text-center p-4">

                            <div class="mb-3">

                                <i class="fa fa-wallet fa-2x text-warning"></i>

                            </div>

                            <small class="text-muted d-block">

                                Monthly Saving

                            </small>

                            <h3 class="fw-bold mt-2 mb-0">

                                ₹{{ number_format($scheme->monthly_amount, 2) }}

                            </h3>

                        </div>

                    </div>

                </div>

                <div class="col-md-6">

                    <div class="card border-0 shadow-sm h-100" style="border-radius:18px;">

                        <div class="card-body text-center p-4">

                            <div class="mb-3">

                                <i class="fa fa-clock fa-2x text-primary"></i>

                            </div>

                            <small class="text-muted d-block">

                                Duration

                            </small>

                            <h3 class="fw-bold mt-2 mb-0">

                                {{ $scheme->installments }}

                                Months

                            </h3>

                        </div>

                    </div>

                </div>

                <div class="col-md-6">

                    <div class="card border-0 shadow-sm h-100" style="border-radius:18px;">

                        <div class="card-body text-center p-4">

                            <div class="mb-3">

                                <i class="fa fa-money-bill fa-2x text-success"></i>

                            </div>

                            <small class="text-muted d-block">

                                Joining Fee

                            </small>

                            <h3 class="fw-bold mt-2 mb-0">

                                ₹{{ number_format($scheme->joining_fee, 2) }}

                            </h3>

                        </div>

                    </div>

                </div>

                <div class="col-md-6">

                    <div class="card border-0 shadow-sm h-100" style="border-radius:18px;">

                        <div class="card-body text-center p-4">

                            <div class="mb-3">

                                <i class="fa fa-gift fa-2x text-danger"></i>

                            </div>

                            <small class="text-muted d-block">

                                Wallet Bonus

                            </small>

                            <h3 class="fw-bold mt-2 mb-0">

                                @if($scheme->bonus_type == 'fixed')

                                    ₹{{ number_format($scheme->bonus_amount, 2) }}

                                @else

                                    {{ $scheme->bonus_amount }}%

                                @endif

                            </h3>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        </div>

        @php

            $totalSaving = $scheme->monthly_amount * $scheme->installments;

            $firstPayment = $scheme->monthly_amount + $scheme->joining_fee;

        @endphp

        <div class="row mt-5">

            <div class="col-lg-8">

                <div class="card border-0 shadow-lg" style="border-radius:25px;">

                    <div class="card-header border-0 text-white py-4"
                        style="background:linear-gradient(135deg,#c9a227,#9b7a12);border-radius:25px 25px 0 0;">

                        <h3 class="mb-0">

                            Wallet Summary

                        </h3>

                    </div>

                    <div class="card-body p-4">

                        <div class="row">

                            <div class="col-md-6 mb-4">

                                <h6 class="text-muted">

                                    Total Savings

                                </h6>

                                <h3>

                                    ₹{{ number_format($totalSaving, 2) }}

                                </h3>

                            </div>

                            <div class="col-md-6 mb-4">

                                <h6 class="text-muted">

                                    First Payment

                                </h6>

                                <h3>

                                    ₹{{ number_format($firstPayment, 2) }}

                                </h3>

                            </div>

                            <div class="col-md-6">

                                <h6 class="text-muted">

                                    Wallet Credit

                                </h6>

                                <h5>

                                    Credited after every successful installment.

                                </h5>

                            </div>

                            <div class="col-md-6">

                                <h6 class="text-muted">

                                    Online Joining

                                </h6>

                                <h5>

                                    @if($scheme->is_online)

                                        <span class="badge bg-success">

                                            Available

                                        </span>

                                    @else

                                        <span class="badge bg-danger">

                                            Offline Only

                                        </span>

                                    @endif

                                </h5>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <div class="col-lg-4">

                <div class="card border-0 shadow-lg sticky-top" style="top:100px;border-radius:25px;overflow:hidden;">

                    <div class="card-header text-center text-white py-4" style="background:#c9a227;">

                        <h3 class="mb-1">

                            Join Scheme

                        </h3>

                        <small>

                            Start Saving Today

                        </small>

                    </div>

                    <div class="card-body p-4">

                        <div class="d-flex justify-content-between mb-3">

                            <span>

                                Monthly Saving

                            </span>

                            <strong>

                                ₹{{ number_format($scheme->monthly_amount, 2) }}

                            </strong>

                        </div>

                        <div class="d-flex justify-content-between mb-3">

                            <span>

                                Duration

                            </span>

                            <strong>

                                {{ $scheme->installments }}

                                Months

                            </strong>

                        </div>

                        <div class="d-flex justify-content-between mb-3">

                            <span>

                                Joining Fee

                            </span>

                            <strong>

                                ₹{{ number_format($scheme->joining_fee, 2) }}

                            </strong>

                        </div>

                        <hr>

                        <div class="text-center mb-4">

                            <small class="text-muted">

                                First Payment

                            </small>

                            <h2 class="text-warning fw-bold">

                                ₹{{ number_format($firstPayment, 2) }}

                            </h2>

                        </div>

                        @if($scheme->is_online)

                            @auth('customer')

                                <a href="{{ route('scheme.join', $scheme->slug) }}"
                                    class="btn btn-warning w-100 btn-lg rounded-pill">

                                    <i class="fa fa-arrow-right me-2"></i>

                                    Join Scheme

                                </a>

                            @else

                                <a href="{{ route('login') }}" class="btn btn-warning w-100 btn-lg rounded-pill">

                                    Login & Join

                                </a>

                            @endauth

                        @else

                            <button class="btn btn-secondary w-100 btn-lg rounded-pill" disabled>

                                Offline Joining Only

                            </button>

                        @endif

                    </div>

                </div>

            </div>

        </div>
        <!-- Description & Benefits -->
        <div class="row mt-5">

            <div class="col-lg-8">

                <div class="card border-0 shadow-sm mb-4" style="border-radius:20px;">

                    <div class="card-body p-5">

                        <h3 class="fw-bold mb-4">

                            About This Jewellery Savings Scheme

                        </h3>

                        {!! $scheme->description !!}

                    </div>

                </div>

            </div>

            <div class="col-lg-4">

                <div class="card border-0 shadow-sm" style="border-radius:20px;">

                    <div class="card-body p-4">

                        <h4 class="fw-bold mb-4">

                            Scheme Benefits

                        </h4>

                        <div class="d-flex mb-4">

                            <div class="me-3">

                                <span class="badge bg-success rounded-circle p-3">

                                    <i class="fa fa-wallet"></i>

                                </span>

                            </div>

                            <div>

                                <h6 class="fw-bold">

                                    Wallet Credit

                                </h6>

                                <small class="text-muted">

                                    Every successful installment is credited to
                                    your jewellery wallet.

                                </small>

                            </div>

                        </div>

                        <div class="d-flex mb-4">

                            <div class="me-3">

                                <span class="badge bg-warning rounded-circle p-3">

                                    <i class="fa fa-gem"></i>

                                </span>

                            </div>

                            <div>

                                <h6 class="fw-bold">

                                    Jewellery Purchase

                                </h6>

                                <small class="text-muted">

                                    Redeem your wallet balance while purchasing
                                    gold, diamond or silver jewellery.

                                </small>

                            </div>

                        </div>

                        <div class="d-flex mb-4">

                            <div class="me-3">

                                <span class="badge bg-primary rounded-circle p-3">

                                    <i class="fa fa-calendar-check"></i>

                                </span>

                            </div>

                            <div>

                                <h6 class="fw-bold">

                                    Easy Monthly Payments

                                </h6>

                                <small class="text-muted">

                                    Flexible monthly installment schedule.

                                </small>

                            </div>

                        </div>

                        <div class="d-flex">

                            <div class="me-3">

                                <span class="badge bg-danger rounded-circle p-3">

                                    <i class="fa fa-shield-alt"></i>

                                </span>

                            </div>

                            <div>

                                <h6 class="fw-bold">

                                    Secure Payments

                                </h6>

                                <small class="text-muted">

                                    Safe online payment with complete transaction
                                    security.

                                </small>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!-- How It Works -->

        <div class="card border-0 shadow-sm mt-5" style="border-radius:25px;">

            <div class="card-body p-5">

                <div class="text-center mb-5">

                    <h2 class="fw-bold">

                        How It Works

                    </h2>

                    <p class="text-muted">

                        Simple steps to start your jewellery savings journey.

                    </p>

                </div>

                <div class="row text-center">

                    <div class="col-lg-3 col-md-6 mb-4">

                        <div class="p-4">

                            <div class="rounded-circle bg-warning text-white mx-auto mb-3"
                                style="width:80px;height:80px;display:flex;align-items:center;justify-content:center;">

                                <i class="fa fa-user-plus fa-2x"></i>

                            </div>

                            <h5>

                                Join Scheme

                            </h5>

                            <p class="text-muted">

                                Register and become a member of your preferred
                                jewellery savings scheme.

                            </p>

                        </div>

                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">

                        <div class="p-4">

                            <div class="rounded-circle bg-primary text-white mx-auto mb-3"
                                style="width:80px;height:80px;display:flex;align-items:center;justify-content:center;">

                                <i class="fa fa-credit-card fa-2x"></i>

                            </div>

                            <h5>

                                Pay Monthly

                            </h5>

                            <p class="text-muted">

                                Complete your monthly installment online or at
                                the store.

                            </p>

                        </div>

                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">

                        <div class="p-4">

                            <div class="rounded-circle bg-success text-white mx-auto mb-3"
                                style="width:80px;height:80px;display:flex;align-items:center;justify-content:center;">

                                <i class="fa fa-wallet fa-2x"></i>

                            </div>

                            <h5>

                                Wallet Updated

                            </h5>

                            <p class="text-muted">

                                Your installment amount is added to your jewellery
                                wallet after successful payment.

                            </p>

                        </div>

                    </div>

                    <div class="col-lg-3 col-md-6">

                        <div class="p-4">

                            <div class="rounded-circle bg-danger text-white mx-auto mb-3"
                                style="width:80px;height:80px;display:flex;align-items:center;justify-content:center;">

                                <i class="fa fa-ring fa-2x"></i>

                            </div>

                            <h5>

                                Buy Jewellery

                            </h5>

                            <p class="text-muted">

                                Redeem your wallet balance to purchase your
                                favourite jewellery.

                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>
        <!-- Terms & Conditions -->
        <div class="row mt-5" id="terms">

            <div class="col-lg-8">

                <div class="card border-0 shadow-sm" style="border-radius:20px;">

                    <div class="card-body p-5">

                        <h3 class="fw-bold mb-4">

                            Terms & Conditions

                        </h3>

                        @if(!empty($scheme->terms_conditions))

                            {!! $scheme->terms_conditions !!}

                        @else

                            <ul class="mb-0">

                                <li class="mb-3">
                                    Monthly installment should be paid on or before the due date.
                                </li>

                                <li class="mb-3">
                                    Wallet balance can be redeemed only against jewellery purchases.
                                </li>

                                <li class="mb-3">
                                    Bonus is credited as per the selected scheme.
                                </li>

                                <li class="mb-3">
                                    Wallet balance cannot be exchanged for cash.
                                </li>

                                <li>
                                    Company reserves the right to modify the scheme terms.
                                </li>

                            </ul>

                        @endif

                    </div>

                </div>

            </div>

            <div class="col-lg-4">

                <div class="card border-0 shadow-sm" style="border-radius:20px;">

                    <div class="card-body p-4">

                        <h4 class="fw-bold mb-4">

                            Quick Summary

                        </h4>

                        <table class="table table-borderless">

                            <tr>

                                <td>

                                    Monthly Saving

                                </td>

                                <th class="text-end">

                                    ₹{{ number_format($scheme->monthly_amount, 2) }}

                                </th>

                            </tr>

                            <tr>

                                <td>

                                    Duration

                                </td>

                                <th class="text-end">

                                    {{ $scheme->installments }} Months

                                </th>

                            </tr>

                            <tr>

                                <td>

                                    Joining Fee

                                </td>

                                <th class="text-end">

                                    ₹{{ number_format($scheme->joining_fee, 2) }}

                                </th>

                            </tr>

                            <tr>

                                <td>

                                    Wallet Bonus

                                </td>

                                <th class="text-end">

                                    @if($scheme->bonus_type == 'fixed')

                                        ₹{{ number_format($scheme->bonus_amount, 2) }}

                                    @else

                                        {{ $scheme->bonus_amount }}%

                                    @endif

                                </th>

                            </tr>

                            <tr>

                                <td>

                                    Online Joining

                                </td>

                                <th class="text-end">

                                    @if($scheme->is_online)

                                        <span class="badge bg-success">

                                            Yes

                                        </span>

                                    @else

                                        <span class="badge bg-danger">

                                            No

                                        </span>

                                    @endif

                                </th>

                            </tr>

                        </table>

                    </div>

                </div>

            </div>

        </div>

        <!-- FAQ -->

        <div class="card border-0 shadow-sm mt-5" style="border-radius:20px;">

            <div class="card-body p-5">

                <h2 class="fw-bold text-center mb-5">

                    Frequently Asked Questions

                </h2>

                <div class="accordion" id="faqAccordion">

                    <div class="accordion-item">

                        <h2 class="accordion-header">

                            <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#faq1">

                                How does the wallet scheme work?

                            </button>

                        </h2>

                        <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">

                            <div class="accordion-body">

                                Every successful installment is credited to your
                                jewellery wallet and can be used while purchasing
                                jewellery.

                            </div>

                        </div>

                    </div>

                    <div class="accordion-item">

                        <h2 class="accordion-header">

                            <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq2">

                                Can I pay online?

                            </button>

                        </h2>

                        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">

                            <div class="accordion-body">

                                Yes. Secure online payment is available for eligible
                                schemes.

                            </div>

                        </div>

                    </div>

                    <div class="accordion-item">

                        <h2 class="accordion-header">

                            <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq3">

                                Can I redeem anytime?

                            </button>

                        </h2>

                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">

                            <div class="accordion-body">

                                Wallet redemption is available according to the
                                scheme terms and jewellery purchase policy.

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!-- Related Schemes -->

        @if(isset($relatedSchemes) && $relatedSchemes->count())

            <div class="mt-5">

                <div class="text-center mb-5">

                    <h2 class="fw-bold">

                        Explore More Jewellery Schemes

                    </h2>

                </div>

                <div class="row">

                    @foreach($relatedSchemes as $item)

                        <div class="col-lg-4 mb-4">

                            <div class="card border-0 shadow h-100" style="border-radius:20px;overflow:hidden;transition:.3s;">

                                <img src="{{ asset($item->image) }}" style="height:250px;object-fit:cover;">

                                <div class="card-body">

                                    <h4>

                                        {{ $item->title }}

                                    </h4>

                                    <p class="text-muted">

                                        ₹{{ number_format($item->monthly_amount, 2) }}

                                        / Month

                                    </p>

                                    <a href="{{ route('schemes.show', $item->slug) }}" class="btn btn-warning rounded-pill w-100">

                                        View Details

                                    </a>

                                </div>

                            </div>

                        </div>

                    @endforeach

                </div>

            </div>

        @endif

        <!-- Bottom CTA -->

        <div class="card border-0 mt-5" style="background:linear-gradient(135deg,#c9a227,#9b7a12);border-radius:25px;">

            <div class="card-body text-center text-white py-5">

                <h2 class="fw-bold">

                    Start Your Jewellery Savings Journey Today

                </h2>

                <p class="mb-4">

                    Save every month, build your jewellery wallet, and purchase
                    your dream jewellery with confidence.

                </p>

                @if($scheme->is_online)

                    @auth('customer')

                        <a href="{{ route('scheme.join', $scheme->slug) }}" class="btn btn-light btn-lg rounded-pill px-5">

                            Join This Scheme

                        </a>

                    @else

                        <a href="{{ route('login') }}" class="btn btn-light btn-lg rounded-pill px-5">

                            Login & Join

                        </a>

                    @endauth

                @endif

            </div>

        </div>

        </div>

    </section>

@endsection