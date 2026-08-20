@extends('layouts.website')

@section('content')
    <style>
        :root {
            --gold: #C9A227;
            --gold-dark: #8D6A09;
            --gold-light: #F8F2DE;
            --bg: #F8F6F2;
            --text: #222;
        }

        body {
            background: linear-gradient(180deg, #fff, #f8f6f2);
        }

        .scheme-hero {
            position: relative;
            padding: 20px 0 120px;
            background:
                linear-gradient(rgba(0, 0, 0, .55), rgba(0, 0, 0, .55)),
                url('{{ asset("website/images/page-header.jpg") }}') center/cover;
        }

        .scheme-hero::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: -1px;
            width: 100%;
            height: 90px;
            background: #fff;
            border-radius: 25px 25px 0 0;
        }

        .scheme-hero h1 {
            color: #fff;
            font-size: 60px;
            font-weight: 800;
        }

        .scheme-hero p {
            color: #ddd;
            font-size: 18px;
        }

        .hero-wrapper {
            margin-top: -90px;
            position: relative;
            z-index: 20;
        }

        .hero-card {

            background: #fff;
            border-radius: 30px;
            overflow: hidden;
            box-shadow: 0 25px 70px rgba(0, 0, 0, .08);
        }

        .hero-image {

            position: relative;
        }

        .hero-image img {

            width: 100%;
            height: 620px;
            object-fit: fill;
        }

        .hero-badge {

            position: absolute;
            left: 25px;
            top: 25px;

            background: rgba(255, 255, 255, .95);

            color: var(--gold-dark);

            padding: 10px 18px;

            border-radius: 50px;

            font-weight: 700;
        }

        .hero-content {

            padding: 55px;
        }

        .price-box {

            display: flex;
            align-items: center;
            gap: 20px;

            margin: 30px 0;
        }

        .price-box h2 {

            font-size: 58px;

            color: var(--gold-dark);

            font-weight: 800;

            margin: 0;
        }

        .price-box span {

            color: #666;

            font-size: 20px;
        }

        .wallet-card {

            background: #F3FBF5;

            border-left: 5px solid #18a058;

            padding: 22px;

            border-radius: 15px;

            margin: 30px 0;
        }

        .wallet-card i {

            color: #18a058;

            font-size: 22px;
        }

        .feature-list {

            margin-top: 35px;
        }

        .feature-item {

            display: flex;

            gap: 18px;

            margin-bottom: 25px;
        }

        .feature-icon {

            width: 65px;

            height: 65px;

            border-radius: 18px;

            background: linear-gradient(135deg, #FFF7D8, #F7E2A3);

            display: flex;

            align-items: center;

            justify-content: center;

            font-size: 28px;

            color: var(--gold-dark);

            flex-shrink: 0;
        }

        .feature-text h5 {

            font-weight: 700;

            margin-bottom: 5px;
        }

        .feature-text p {

            margin: 0;

            color: #777;
        }

        .cta-buttons {

            display: flex;

            gap: 15px;

            margin-top: 40px;
        }

        .btn-gold {

            background: linear-gradient(135deg, #C9A227, #8D6A09);

            color: #fff;

            border: none;

            padding: 16px 35px;

            border-radius: 50px;

            font-weight: 700;

            transition: .3s;
        }

        .btn-gold:hover {

            transform: translateY(-3px);

            color: #fff;
        }

        .btn-outline-gold {

            border: 2px solid var(--gold);

            color: var(--gold-dark);

            padding: 16px 35px;

            border-radius: 50px;

            font-weight: 700;
        }

        .btn-outline-gold:hover {

            background: var(--gold);

            color: #fff;
        }
    </style>

    <div class="scheme-hero">

        <div class="container text-center">

            <h1>{{ $scheme->title }}</h1>

            <p>

                Save Smart • Buy Dream Jewellery • Secure Wallet

            </p>

        </div>

    </div>

    <section class="hero-wrapper pb-5">

        <div class="container">

            <div class="hero-card">

                <div class="row g-0 align-items-center">

                    <div class="col-lg-6">

                        <div class="hero-image">

                            @if($scheme->image)

                                <img src="{{ asset($scheme->image) }}">

                            @else

                                <img src="{{ asset('website/images/no-image.png') }}">

                            @endif

                            <div class="hero-badge">

                                <i class="fa fa-crown me-2"></i>

                                Premium Jewellery Scheme

                            </div>

                        </div>

                    </div>

                    <div class="col-lg-6">

                        <div class="hero-content">

                            <span class="badge rounded-pill bg-warning text-dark px-3 py-2">

                                Jewellery Savings Scheme

                            </span>

                            <h2 class="display-5 fw-bold mt-4">

                                {{ $scheme->title }}

                            </h2>

                            <p class="mt-3">

                                {{ $scheme->short_description }}

                            </p>

                            <div class="price-box">

                                @if($scheme->scheme_type == 'monthly')

                                    <h2>

                                        ₹{{ number_format($scheme->monthly_amount, 2) }}

                                    </h2>

                                    <span>Per Month</span>

                                @else

                                    <h2>

                                        ₹{{ number_format($scheme->minimum_daily_amount, 2) }}

                                    </h2>

                                    <span>Minimum Per Day</span>

                                @endif

                            </div>

                            <div class="wallet-card">

                                <div class="d-flex">

                                    <div class="me-3">

                                        <i class="fa fa-wallet"></i>

                                    </div>

                                    <div>

                                        <h5 class="fw-bold">

                                            Wallet Benefits

                                        </h5>

                                        <p class="mb-0">

                                            @if($scheme->scheme_type == 'monthly')

                                                Every monthly installment is instantly credited to your jewellery wallet.

                                            @else

                                                Every successful payment is instantly credited to your jewellery wallet.

                                            @endif

                                        </p>

                                    </div>

                                </div>

                            </div>

                            <div class="feature-list">

                                <div class="feature-item">

                                    <div class="feature-icon">

                                        <i class="fa fa-gem"></i>

                                    </div>

                                    <div class="feature-text">

                                        <h5>Premium Jewellery</h5>

                                        <p>

                                            Redeem your wallet balance on Gold, Silver and Diamond Jewellery.

                                        </p>

                                    </div>

                                </div>

                                <div class="feature-item">

                                    <div class="feature-icon">

                                        <i class="fa fa-wallet"></i>

                                    </div>

                                    <div class="feature-text">

                                        <h5>Secure Wallet</h5>

                                        <p>

                                            Every successful payment increases your jewellery wallet balance.

                                        </p>

                                    </div>

                                </div>

                                <div class="feature-item">

                                    <div class="feature-icon">

                                        <i class="fa fa-shield-alt"></i>

                                    </div>

                                    <div class="feature-text">

                                        <h5>100% Safe Payments</h5>

                                        <p>

                                            Protected online payments with complete security.

                                        </p>

                                    </div>

                                </div>

                            </div>

                            <div class="cta-buttons">

                                @auth('customer')

                                    <a href="{{ route('scheme.join', $scheme->slug) }}" class="btn btn-gold">

                                        Join Now

                                    </a>

                                @else

                                    <a href="{{ route('login') }}" class="btn btn-gold">

                                        Login & Join

                                    </a>

                                @endauth

                                <a href="#benefits" class="btn btn-outline-gold">

                                    Explore Benefits

                                </a>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>
    {{-- =========================
    MOBILE SCHEME HERO
    ========================= --}}

    <section class="mobile-scheme-section">

        <div class="mobile-scheme-card">

            {{-- IMAGE --}}
            <div class="mobile-scheme-image">

                @if($scheme->image)
                    <img src="{{ asset($scheme->image) }}" alt="{{ $scheme->title }}">
                @else
                    <img src="{{ asset('website/images/no-image.png') }}" alt="{{ $scheme->title }}">
                @endif

                <div class="mobile-premium-badge">
                    <i class="fa fa-crown"></i>
                    Premium Scheme
                </div>

            </div>


            {{-- CONTENT --}}
            <div class="mobile-scheme-content">

                {{-- LABEL --}}
                <div class="mobile-scheme-label">
                    <i class="fa fa-gem"></i>
                    Jewellery Savings Scheme
                </div>


                {{-- TITLE --}}
                <h1 class="mobile-scheme-title">
                    {{ $scheme->title }}
                </h1>


                {{-- DESCRIPTION --}}
                <p class="mobile-scheme-description">
                    {{ $scheme->short_description }}
                </p>


                {{-- PRICE --}}
                <div class="mobile-price-card">

                    <div class="mobile-price-icon">
                        <i class="fa fa-wallet"></i>
                    </div>

                    <div class="mobile-price-content">

                        <span>
                            {{ $scheme->scheme_type == 'monthly'
        ? 'Monthly Saving'
        : 'Minimum Daily Saving'
                            }}
                        </span>

                        <strong>
                            ₹{{ number_format(
        $scheme->scheme_type == 'monthly'
        ? $scheme->monthly_amount
        : $scheme->minimum_daily_amount,
        2
    ) }}
                        </strong>

                    </div>

                    <div class="mobile-price-period">

                        {{ $scheme->scheme_type == 'monthly'
        ? '/ Month'
        : '/ Day'
                        }}

                    </div>

                </div>


                {{-- WALLET BENEFIT --}}
                <div class="mobile-wallet-card">

                    <div class="mobile-wallet-icon">
                        <i class="fa fa-wallet"></i>
                    </div>

                    <div>

                        <h5>
                            Wallet Benefits
                        </h5>

                        <p>
                            @if($scheme->scheme_type == 'monthly')
                                Every monthly installment is instantly credited to your jewellery wallet.
                            @else
                                Every successful payment is instantly credited to your jewellery wallet.
                            @endif
                        </p>

                    </div>

                </div>


                {{-- FEATURES --}}
                <div class="mobile-features">

                    {{-- FEATURE 1 --}}
                    <div class="mobile-feature">

                        <div class="mobile-feature-icon">
                            <i class="fa fa-gem"></i>
                        </div>

                        <div>
                            <strong>
                                Premium Jewellery
                            </strong>

                            <span>
                                Gold, Silver & Diamond
                            </span>
                        </div>

                    </div>


                    {{-- FEATURE 2 --}}
                    <div class="mobile-feature">

                        <div class="mobile-feature-icon">
                            <i class="fa fa-shield-alt"></i>
                        </div>

                        <div>
                            <strong>
                                Secure Wallet
                            </strong>

                            <span>
                                Safe & protected savings
                            </span>
                        </div>

                    </div>


                    {{-- FEATURE 3 --}}
                    <div class="mobile-feature">

                        <div class="mobile-feature-icon">
                            <i class="fa fa-lock"></i>
                        </div>

                        <div>
                            <strong>
                                Safe Payments
                            </strong>

                            <span>
                                Secure online payments
                            </span>
                        </div>

                    </div>

                </div>


                {{-- BUTTONS --}}
                <div class="mobile-scheme-buttons">

                    @auth('customer')

                        <a href="{{ route('scheme.join', $scheme->slug) }}" class="mobile-join-btn">

                            <i class="fa fa-arrow-right me-2"></i>
                            Join Now

                        </a>

                    @else

                        <a href="{{ route('login') }}" class="mobile-join-btn">

                            <i class="fa fa-sign-in-alt me-2"></i>
                            Login & Join

                        </a>

                    @endauth


                    <a href="#benefits" class="mobile-explore-btn">

                        Explore Benefits
                        <i class="fa fa-angle-down ms-2"></i>

                    </a>

                </div>

            </div>

        </div>

    </section>

    <style>
        /* ==========================================
       MOBILE SCHEME HERO
    ========================================== */

        .mobile-scheme-section {
            display: none;
        }

        @media (max-width: 767px) {
            .hero-wrapper {
                display: none !important;
            }
        }


        /* ==========================================
       MOBILE ONLY
    ========================================== */

        @media (max-width: 767px) {

            .mobile-scheme-section {
                display: block;
                padding: 15px 12px 30px;
                background: #f8f6f2;
            }


            /* MAIN CARD */

            .mobile-scheme-card {
                background: #ffffff;
                border-radius: 24px;
                overflow: hidden;
                box-shadow: 0 12px 35px rgba(0, 0, 0, 0.08);
            }


            /* IMAGE */

            .mobile-scheme-image {
                position: relative;
                width: 100%;
                height: 300px;
                overflow: hidden;
            }

            .mobile-scheme-image img {
                width: 100%;
                height: 100%;
                object-fit: cover;
                display: block;
            }


            /* IMAGE OVERLAY */

            .mobile-scheme-image::after {
                content: "";
                position: absolute;
                left: 0;
                right: 0;
                bottom: 0;
                height: 100px;
                background: linear-gradient(to top,
                        rgba(0, 0, 0, 0.55),
                        transparent);
                pointer-events: none;
            }


            /* PREMIUM BADGE */

            .mobile-premium-badge {
                position: absolute;
                top: 15px;
                left: 15px;
                z-index: 2;

                display: inline-flex;
                align-items: center;
                gap: 7px;

                padding: 8px 13px;

                background: rgba(255, 255, 255, 0.95);

                color: #8d6a09;

                border-radius: 50px;

                font-size: 12px;
                font-weight: 700;

                box-shadow: 0 5px 15px rgba(0, 0, 0, 0.12);
            }

            .mobile-premium-badge i {
                color: #c9a227;
            }


            /* CONTENT */

            .mobile-scheme-content {
                padding: 22px 18px 20px;
            }


            /* LABEL */

            .mobile-scheme-label {
                display: inline-flex;
                align-items: center;
                gap: 7px;

                padding: 7px 12px;

                background: #fff8df;

                color: #8d6a09;

                border-radius: 50px;

                font-size: 11px;
                font-weight: 700;

                margin-bottom: 14px;
            }

            .mobile-scheme-label i {
                color: #c9a227;
            }


            /* TITLE */

            .mobile-scheme-title {
                font-size: 28px;
                line-height: 1.2;

                font-weight: 800;

                color: #222;

                margin: 0 0 10px;
            }


            /* DESCRIPTION */

            .mobile-scheme-description {
                font-size: 14px;
                line-height: 1.7;

                color: #777;

                margin: 0 0 18px;
            }


            /* PRICE */

            .mobile-price-card {
                display: flex;
                align-items: center;

                gap: 12px;

                padding: 15px;

                background: linear-gradient(135deg,
                        #fff9e8,
                        #fffdf7);

                border: 1px solid #f0dfaa;

                border-radius: 18px;

                margin-bottom: 15px;
            }


            .mobile-price-icon {
                width: 45px;
                height: 45px;

                min-width: 45px;

                display: flex;
                align-items: center;
                justify-content: center;

                background: linear-gradient(135deg,
                        #c9a227,
                        #8d6a09);

                color: #fff;

                border-radius: 13px;

                font-size: 18px;
            }


            .mobile-price-content {
                flex: 1;
            }

            .mobile-price-content span {
                display: block;

                color: #888;

                font-size: 11px;

                margin-bottom: 2px;
            }

            .mobile-price-content strong {
                display: block;

                color: #8d6a09;

                font-size: 25px;

                line-height: 1.1;

                font-weight: 800;
            }


            .mobile-price-period {
                color: #777;

                font-size: 12px;

                white-space: nowrap;
            }


            /* WALLET */

            .mobile-wallet-card {
                display: flex;

                align-items: flex-start;

                gap: 12px;

                padding: 15px;

                background: #f3fbf5;

                border-left: 4px solid #18a058;

                border-radius: 15px;

                margin-bottom: 18px;
            }


            .mobile-wallet-icon {
                width: 40px;
                height: 40px;

                min-width: 40px;

                display: flex;
                align-items: center;
                justify-content: center;

                background: #e3f6e9;

                color: #18a058;

                border-radius: 11px;

                font-size: 17px;
            }


            .mobile-wallet-card h5 {
                margin: 0 0 4px;

                font-size: 14px;

                font-weight: 700;

                color: #222;
            }


            .mobile-wallet-card p {
                margin: 0;

                color: #6d6d6d;

                font-size: 12px;

                line-height: 1.6;
            }


            /* FEATURES */

            .mobile-features {
                display: flex;
                flex-direction: column;

                gap: 10px;

                margin-bottom: 20px;
            }


            .mobile-feature {
                display: flex;
                align-items: center;

                gap: 12px;

                padding: 12px;

                border: 1px solid #eeeeee;

                border-radius: 14px;

                background: #fff;
            }


            .mobile-feature-icon {
                width: 40px;
                height: 40px;

                min-width: 40px;

                display: flex;
                align-items: center;
                justify-content: center;

                border-radius: 12px;

                background: linear-gradient(135deg,
                        #fff8da,
                        #f5e0a4);

                color: #9b7a12;

                font-size: 16px;
            }


            .mobile-feature strong {
                display: block;

                font-size: 13px;

                color: #333;

                margin-bottom: 2px;
            }


            .mobile-feature span {
                display: block;

                font-size: 11px;

                color: #888;
            }


            /* BUTTONS */

            .mobile-scheme-buttons {
                display: flex;
                flex-direction: column;

                gap: 10px;
            }


            .mobile-join-btn {
                width: 100%;

                display: flex;
                align-items: center;
                justify-content: center;

                padding: 14px 20px;

                background: linear-gradient(135deg,
                        #c9a227,
                        #8d6a09);

                color: #fff !important;

                border-radius: 50px;

                font-size: 14px;

                font-weight: 700;

                text-decoration: none;

                box-shadow: 0 8px 20px rgba(141, 106, 9, 0.22);

                transition: 0.3s;
            }


            .mobile-explore-btn {
                width: 100%;

                display: flex;
                align-items: center;
                justify-content: center;

                padding: 13px 20px;

                background: #fff;

                border: 1.5px solid #c9a227;

                color: #8d6a09 !important;

                border-radius: 50px;

                font-size: 13px;

                font-weight: 700;

                text-decoration: none;
            }


            .mobile-join-btn:active,
            .mobile-explore-btn:active {
                transform: scale(0.98);
            }

        }
    </style>
    {{-- ===========================
    PREMIUM STATISTICS
    ============================ --}}

    @php

        if ($scheme->scheme_type == 'monthly') {

            $savingAmount = $scheme->monthly_amount;
            $firstPayment = $scheme->monthly_amount + $scheme->joining_fee;
            $totalSaving = $scheme->monthly_amount * $scheme->installments;

        } else {

            $savingAmount = $scheme->minimum_daily_amount;
            $firstPayment = $scheme->minimum_daily_amount + $scheme->joining_fee;
            $totalSaving = null;

        }

    @endphp

    <style>
        .stat-card {

            background: #fff;

            border-radius: 25px;

            padding: 35px;

            box-shadow: 0 15px 40px rgba(0, 0, 0, .08);

            transition: .35s;

            height: 100%;

            text-align: center;

        }

        .stat-card:hover {

            transform: translateY(-8px);

        }

        .stat-icon {

            width: 85px;

            height: 85px;

            margin: auto;

            border-radius: 50%;

            background: linear-gradient(135deg, #FFF8DB, #F8E2A5);

            display: flex;

            align-items: center;

            justify-content: center;

            font-size: 34px;

            color: #9b7a12;

            margin-bottom: 25px;

        }

        .stat-card h6 {

            color: #888;

            margin-bottom: 12px;

        }

        .stat-card h2 {

            font-weight: 800;

            margin: 0;

        }

        .wallet-summary {

            background: #fff;

            border-radius: 30px;

            box-shadow: 0 25px 60px rgba(0, 0, 0, .08);

            overflow: hidden;

        }

        .summary-header {

            background: linear-gradient(135deg, #c9a227, #8d6a09);

            padding: 28px;

            color: #fff;

        }

        .summary-row {

            display: flex;

            justify-content: space-between;

            padding: 16px 0;

            border-bottom: 1px solid #eee;

        }

        .summary-row:last-child {

            border: none;

        }

        .join-card {

            background: #fff;

            border-radius: 30px;

            box-shadow: 0 25px 60px rgba(0, 0, 0, .08);

            position: sticky;

            top: 120px;

            overflow: hidden;

        }

        .join-header {

            background: linear-gradient(135deg, #c9a227, #8d6a09);

            padding: 30px;

            text-align: center;

            color: #fff;

        }

        .join-price {

            font-size: 52px;

            font-weight: 800;

            margin: 15px 0;

        }

        .join-benefit {

            display: flex;

            gap: 15px;

            margin-bottom: 18px;

        }

        .join-benefit i {

            width: 45px;

            height: 45px;

            border-radius: 50%;

            background: #FFF6D8;

            display: flex;

            align-items: center;

            justify-content: center;

            color: #9b7a12;

        }

        .join-btn {

            background: linear-gradient(135deg, #c9a227, #8d6a09);

            color: #fff;

            padding: 16px;

            border-radius: 50px;

            font-weight: 700;

            width: 100%;

        }

        .join-btn:hover {

            color: #fff;

            transform: translateY(-2px);

        }
    </style>

    <div class="container pb-5">

        <div class="row g-4 mb-5">

            <div class="col-lg-3 col-md-6">

                <div class="stat-card">

                    <div class="stat-icon">

                        <i class="fa fa-wallet"></i>

                    </div>

                    <h6>

                        {{ $scheme->scheme_type == 'monthly' ? 'Monthly Saving' : 'Daily Saving' }}

                    </h6>

                    <h2>

                        ₹{{ number_format($savingAmount, 2) }}

                    </h2>

                </div>

            </div>

            <div class="col-lg-3 col-md-6">

                <div class="stat-card">

                    <div class="stat-icon">

                        <i class="fa fa-money-bill-wave"></i>

                    </div>

                    <h6>

                        Joining Fee

                    </h6>

                    <h2>

                        ₹{{ number_format($scheme->joining_fee, 2) }}

                    </h2>

                </div>

            </div>

            @if($scheme->scheme_type == 'monthly')

                <div class="col-lg-3 col-md-6">

                    <div class="stat-card">

                        <div class="stat-icon">

                            <i class="fa fa-calendar-alt"></i>

                        </div>

                        <h6>

                            Duration

                        </h6>

                        <h2>

                            {{ $scheme->installments }}

                            Months

                        </h2>

                    </div>

                </div>

                <div class="col-lg-3 col-md-6">

                    <div class="stat-card">

                        <div class="stat-icon">

                            <i class="fa fa-gift"></i>

                        </div>

                        <h6>

                            Wallet Bonus

                        </h6>

                        <h2>

                            @if($scheme->bonus_type == 'fixed')

                                ₹{{ number_format($scheme->bonus_amount, 2) }}

                            @else

                                {{ $scheme->bonus_amount }}%

                            @endif

                        </h2>

                    </div>

                </div>

            @else

                <div class="col-lg-3 col-md-6">

                    <div class="stat-card">

                        <div class="stat-icon">

                            <i class="fa fa-sync"></i>

                        </div>

                        <h6>

                            Payments

                        </h6>

                        <h2>

                            Unlimited

                        </h2>

                    </div>

                </div>

                <div class="col-lg-3 col-md-6">

                    <div class="stat-card">

                        <div class="stat-icon">

                            <i class="fa fa-bolt"></i>

                        </div>

                        <h6>

                            Wallet Credit

                        </h6>

                        <h2>

                            Instant

                        </h2>

                    </div>

                </div>

            @endif

        </div>

        <div class="row">

            <div class="col-lg-8">

                <div class="wallet-summary">

                    <div class="summary-header">

                        <h3 class="mb-1">

                            Wallet Summary

                        </h3>

                        <small>

                            Everything you need to know

                        </small>

                    </div>

                    <div class="p-4">

                        <div class="summary-row">

                            <span>Saving Amount</span>

                            <strong>

                                ₹{{ number_format($savingAmount, 2) }}

                            </strong>

                        </div>

                        @if($scheme->scheme_type == 'monthly')

                            <div class="summary-row">

                                <span>Total Saving</span>

                                <strong>

                                    ₹{{ number_format($totalSaving, 2) }}

                                </strong>

                            </div>

                        @endif

                        <div class="summary-row">

                            <span>Joining Fee</span>

                            <strong>

                                ₹{{ number_format($scheme->joining_fee, 2) }}

                            </strong>

                        </div>

                        <div class="summary-row">

                            <span>First Payment</span>

                            <strong class="text-success">

                                ₹{{ number_format($firstPayment, 2) }}

                            </strong>

                        </div>

                        <div class="summary-row">

                            <span>Wallet Credit</span>

                            <strong>

                                Every Successful Payment

                            </strong>

                        </div>

                        <div class="summary-row">

                            <span>Online Joining</span>

                            <strong>

                                @if($scheme->is_online)

                                    <span class="badge bg-success">

                                        Available

                                    </span>

                                @else

                                    <span class="badge bg-danger">

                                        Offline

                                    </span>

                                @endif

                            </strong>

                        </div>

                    </div>

                </div>

            </div>

            <div class="col-lg-4">

                <div class="join-card">

                    <div class="join-header">

                        <h4>

                            Join This Scheme

                        </h4>

                        <div class="join-price">

                            ₹{{ number_format($firstPayment, 2) }}

                        </div>

                        <small>

                            Pay Today

                        </small>

                    </div>

                    <div class="p-4">

                        <div class="join-benefit">

                            <i class="fa fa-wallet"></i>

                            <div>

                                <strong>

                                    Wallet Credit

                                </strong>

                                <div class="text-muted">

                                    Every payment is credited

                                </div>

                            </div>

                        </div>

                        <div class="join-benefit">

                            <i class="fa fa-shield-alt"></i>

                            <div>

                                <strong>

                                    100% Secure

                                </strong>

                                <div class="text-muted">

                                    SSL Protected Payment

                                </div>

                            </div>

                        </div>

                        <div class="join-benefit">

                            <i class="fa fa-gem"></i>

                            <div>

                                <strong>

                                    Redeem Anytime

                                </strong>

                                <div class="text-muted">

                                    Use wallet for jewellery

                                </div>

                            </div>

                        </div>

                        @auth('customer')

                            <a href="{{ route('scheme.join', $scheme->slug) }}" class="btn join-btn mt-4">

                                Join Now

                            </a>

                        @else

                            <a href="{{ route('login') }}" class="btn join-btn mt-4">

                                Login & Join

                            </a>

                        @endauth

                    </div>

                </div>

            </div>

        </div>

    </div>
    {{-- ===========================================================
    PART 3 - PREMIUM ABOUT & BENEFITS
    ============================================================ --}}

    <style>
        .section-title {
            font-size: 42px;
            font-weight: 800;
            color: #222;
            margin-bottom: 15px;
        }

        .section-subtitle {
            color: #888;
            font-size: 17px;
        }

        .about-card {

            background: #fff;

            border-radius: 30px;

            padding: 45px;

            box-shadow: 0 20px 55px rgba(0, 0, 0, .07);

        }

        .benefit-card {

            background: #fff;

            border-radius: 25px;

            padding: 30px;

            transition: .35s;

            height: 100%;

            box-shadow: 0 15px 40px rgba(0, 0, 0, .06);

        }

        .benefit-card:hover {

            transform: translateY(-10px);

        }

        .benefit-icon {

            width: 80px;

            height: 80px;

            border-radius: 20px;

            background: linear-gradient(135deg, #FFF8DA, #F5E0A4);

            display: flex;

            align-items: center;

            justify-content: center;

            font-size: 34px;

            color: #9b7a12;

            margin-bottom: 25px;

        }

        .timeline {
            position: relative;
            max-width: 900px;
            margin: 70px auto 0;
            padding: 0 0 20px;
        }

        .timeline::before {
            content: "";
            position: absolute;
            left: 50%;
            top: 0;
            bottom: 0;
            width: 4px;
            background: #d6b04a;
            transform: translateX(-50%);
        }

        .step {
            position: relative;
            margin-bottom: 60px;
        }

        .step:last-child {
            margin-bottom: 0;
        }

        .step-number {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            width: 70px;
            height: 70px;
            border-radius: 50%;
            background: linear-gradient(135deg, #C9A227, #8D6A09);
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 28px;
            font-weight: bold;
            z-index: 2;
        }

        .step-card {
            width: 42%;
            background: #fff;
            border-radius: 22px;
            padding: 30px;
            box-shadow: 0 15px 40px rgba(0, 0, 0, .08);
        }

        .step:nth-child(odd) .step-card {
            margin-right: auto;
            text-align: right;
        }

        .step:nth-child(even) .step-card {
            margin-left: auto;
            text-align: left;
        }
    </style>

    <div class="container py-5" id="benefits">

        <div class="text-center mb-5">

            <h2 class="section-title">

                About This Jewellery Scheme

            </h2>

            <p class="section-subtitle">

                Save every day and turn your savings into beautiful jewellery.

            </p>

        </div>

        <div class="row">

            <div class="col-lg-8">

                <div class="about-card">

                    {!! $scheme->description !!}

                </div>

            </div>

            <div class="col-lg-4">

                <div class="benefit-card">

                    <div class="benefit-icon">

                        <i class="fa fa-wallet"></i>

                    </div>

                    <h4>

                        Wallet Credit

                    </h4>

                    <p>

                        Every successful payment is automatically credited into your jewellery wallet.

                    </p>

                </div>

                <div class="benefit-card mt-4">

                    <div class="benefit-icon">

                        <i class="fa fa-shield-alt"></i>

                    </div>

                    <h4>

                        Secure Payments

                    </h4>

                    <p>

                        SSL encrypted online payments with Razorpay.

                    </p>

                </div>

            </div>

        </div>

        <div class="row mt-5">

            <div class="col-lg-4 mb-4">

                <div class="benefit-card text-center">

                    <div class="benefit-icon mx-auto">

                        <i class="fa fa-gem"></i>

                    </div>

                    <h4>

                        Premium Jewellery

                    </h4>

                    <p>

                        Redeem your wallet against Gold, Silver and Diamond Jewellery.

                    </p>

                </div>

            </div>

            <div class="col-lg-4 mb-4">

                <div class="benefit-card text-center">

                    <div class="benefit-icon mx-auto">

                        <i class="fa fa-coins"></i>

                    </div>

                    <h4>

                        Flexible Savings

                    </h4>

                    <p>

                        Save according to your convenience and grow your jewellery fund.

                    </p>

                </div>

            </div>

            <div class="col-lg-4 mb-4">

                <div class="benefit-card text-center">

                    <div class="benefit-icon mx-auto">

                        <i class="fa fa-award"></i>

                    </div>

                    <h4>

                        Trusted Brand

                    </h4>

                    <p>

                        GoldPot ensures transparency, trust and secure transactions.

                    </p>

                </div>

            </div>

        </div>

    </div>

    {{-- ================================
    HOW IT WORKS
    ================================ --}}

    <section class="py-5">

        <div class="container">

            <div class="text-center mb-5">

                <h2 class="section-title">

                    How It Works

                </h2>

                <p class="section-subtitle">

                    Four simple steps to own your dream jewellery.

                </p>

            </div>

            <div class="timeline">

                <div class="step">

                    <div class="step-number">

                        1

                    </div>

                    <div class="step-card text-center">

                        <h4>

                            Join Your Scheme

                        </h4>

                        <p>

                            Create your membership and start saving today.

                        </p>

                    </div>

                </div>

                <div class="step">

                    <div class="step-number">

                        2

                    </div>

                    <div class="step-card text-center">

                        @if($scheme->scheme_type == 'monthly')

                            <h4>

                                Pay Every Month

                            </h4>

                            <p>

                                Complete your monthly installment online.

                            </p>

                        @else

                            <h4>

                                Make Daily Payments

                            </h4>

                            <p>

                                Pay one or multiple times every day.

                            </p>

                        @endif

                    </div>

                </div>

                <div class="step">

                    <div class="step-number">

                        3

                    </div>

                    <div class="step-card text-center">

                        <h4>

                            Wallet Updated

                        </h4>

                        <p>

                            Every successful payment is instantly credited into your jewellery wallet.

                        </p>

                    </div>

                </div>

                <div class="step">

                    <div class="step-number">

                        4

                    </div>

                    <div class="step-card text-center">

                        <h4>

                            Purchase Jewellery

                        </h4>

                        <p>

                            Redeem your wallet balance while purchasing jewellery.

                        </p>

                    </div>

                </div>

            </div>

        </div>

    </section>
    {{-- ==========================================================
    PART 4 - FAQ + RELATED SCHEMES + PREMIUM CTA
    ========================================================== --}}

    <style>
        .faq-section {

            padding: 80px 0;

        }

        .faq-card {

            background: #fff;

            border-radius: 25px;

            box-shadow: 0 15px 45px rgba(0, 0, 0, .06);

            overflow: hidden;

        }

        .accordion-item {

            border: none;

            border-bottom: 1px solid #eee;

        }

        .accordion-button {

            padding: 22px 25px;

            font-size: 18px;

            font-weight: 600;

            box-shadow: none !important;

        }

        .accordion-button:not(.collapsed) {

            background: #fff8df;

            color: #9b7a12;

        }

        .related-card {

            background: #fff;

            border-radius: 22px;

            overflow: hidden;

            transition: .35s;

            box-shadow: 0 18px 40px rgba(0, 0, 0, .08);

            height: 100%;

        }

        .related-card:hover {

            transform: translateY(-8px);

        }

        .related-card img {

            height: 260px;

            width: 100%;

            object-fit: cover;

        }

        .related-body {

            padding: 25px;

        }

        .related-price {

            color: #9b7a12;

            font-size: 28px;

            font-weight: 700;

        }

        .cta-section {

            margin-top: 80px;

            border-radius: 35px;

            overflow: hidden;

            background:

                linear-gradient(135deg, #c9a227, #8d6a09);

            color: #fff;

        }

        .cta-section .container {

            padding: 80px 60px;

        }

        .cta-title {

            font-size: 48px;

            font-weight: 800;

        }

        .btn-white-gold {

            background: #fff;

            color: #8d6a09;

            border-radius: 50px;

            padding: 16px 40px;

            font-weight: 700;

        }

        .btn-white-gold:hover {

            color: #8d6a09;

            transform: translateY(-2px);

        }
    </style>

    <!-- FAQ -->

    <section class="faq-section">

        <div class="container">

            <div class="text-center mb-5">

                <h2 class="section-title">

                    Frequently Asked Questions

                </h2>

                <p class="section-subtitle">

                    Everything you need to know about this jewellery savings scheme.

                </p>

            </div>

            <div class="faq-card">

                <div class="accordion accordion-flush" id="faqAccordion">

                    <div class="accordion-item">

                        <h2 class="accordion-header">

                            <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#faq1">

                                How does this jewellery savings scheme work?

                            </button>

                        </h2>

                        <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">

                            <div class="accordion-body">

                                Every successful payment is credited to your jewellery wallet.
                                You can redeem the accumulated wallet balance while purchasing jewellery.

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

                                Yes. Secure online payment is available using Razorpay.

                            </div>

                        </div>

                    </div>

                    <div class="accordion-item">

                        <h2 class="accordion-header">

                            <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq3">

                                When is the wallet credited?

                            </button>

                        </h2>

                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">

                            <div class="accordion-body">

                                Wallet credit happens automatically after every successful payment.

                            </div>

                        </div>

                    </div>

                    <div class="accordion-item">

                        <h2 class="accordion-header">

                            <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq4">

                                Can I redeem anytime?

                            </button>

                        </h2>

                        <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">

                            <div class="accordion-body">

                                Yes, according to the scheme's redemption policy and jewellery purchase rules.

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- RELATED SCHEMES -->

    @if(isset($relatedSchemes) && $relatedSchemes->count())

        <section class="pb-5">

            <div class="container">

                <div class="text-center mb-5">

                    <h2 class="section-title">

                        Explore More Schemes

                    </h2>

                    <p class="section-subtitle">

                        Choose the perfect savings plan for your dream jewellery.

                    </p>

                </div>

                <div class="row">

                    @foreach($relatedSchemes as $item)

                        <div class="col-lg-4 col-md-6 mb-4">

                            <div class="related-card">

                                <img src="{{ asset($item->image) }}">

                                <div class="related-body">

                                    <span class="badge bg-warning text-dark">

                                        Jewellery Scheme

                                    </span>

                                    <h4 class="mt-3">

                                        {{ $item->title }}

                                    </h4>

                                    @if($item->scheme_type == 'monthly')

                                        <div class="related-price">

                                            ₹{{ number_format($item->monthly_amount, 2) }}

                                            <small>/ Month</small>

                                        </div>

                                    @else

                                        <div class="related-price">

                                            ₹{{ number_format($item->minimum_daily_amount, 2) }}

                                            <small>/ Day</small>

                                        </div>

                                    @endif

                                    <a href="{{ route('schemes.show', $item->slug) }}"
                                        class="btn btn-warning rounded-pill w-100 mt-4">

                                        View Scheme

                                    </a>

                                </div>

                            </div>

                        </div>

                    @endforeach

                </div>

            </div>

        </section>

    @endif

    <!-- PREMIUM CTA -->

    <section class="container">

        <div class="cta-section">

            <div class="container">

                <div class="row align-items-center">

                    <div class="col-lg-8">

                        <h2 class="cta-title">

                            Start Your Jewellery Savings Journey Today

                        </h2>

                        <p class="mt-4 mb-0 fs-5">

                            Save consistently, build your jewellery wallet and purchase
                            your dream jewellery with confidence.

                        </p>

                    </div>

                    <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">

                        @if($scheme->is_online)

                            @auth('customer')

                                <a href="{{ route('scheme.join', $scheme->slug) }}" class="btn btn-white-gold btn-lg">

                                    Join Scheme

                                </a>

                            @else

                                <a href="{{ route('login') }}" class="btn btn-white-gold btn-lg">

                                    Login & Join

                                </a>

                            @endauth

                        @endif

                    </div>

                </div>

            </div>

        </div>

    </section>
@endsection