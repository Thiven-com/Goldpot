@extends('layouts.website')
@section('content')
    <style>
        .scheme-section {
            background: #faf7f2;
        }

        .scheme-subtitle {
            color: #C8A13A;
            font-weight: 600;
            letter-spacing: 2px;
            text-transform: uppercase;
        }

        .scheme-title {
            font-size: 42px;
            font-weight: 700;
            margin-top: 10px;
            color: #1d1d1d;
        }

        .scheme-desc {
            color: #666;
            max-width: 700px;
            margin: auto;
        }

        .scheme-card {
            background: #fff;
            border-radius: 22px;
            overflow: hidden;
            transition: .4s;
            box-shadow: 0 15px 35px rgba(0, 0, 0, .08);
            height: 100%;
        }

        .scheme-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 30px 60px rgba(0, 0, 0, .15);
        }

        .scheme-image {
            overflow: hidden;
        }

        .scheme-image img {
            width: 100%;
            height: 280px;
            object-fit: cover;
            transition: .5s;
        }

        .scheme-card:hover img {
            transform: scale(1.08);
        }

        .scheme-content {
            padding: 30px;
        }

        .scheme-badge {
            display: inline-block;
            padding: 8px 18px;
            border-radius: 30px;
            color: #fff;
            font-size: 14px;
            margin-bottom: 18px;
        }

        .gold {
            background: #dea54a;
        }

        .blue {
            background: #173d72;
        }

        .red {
            background: #8c1d2d;
        }

        .scheme-content h3 {
            font-weight: 700;
            margin-bottom: 20px;
        }

        .scheme-content ul {
            list-style: none;
            padding: 0;
            margin-bottom: 25px;
        }

        .scheme-content li {
            padding: 8px 0;
            color: #555;
        }

        .btn-gold {
            background: #dea54a;
            color: #fff;
            border-radius: 40px;
            padding: 12px;
        }

        .btn-blue {
            background: #dea54a;
            color: #fff;
            border-radius: 40px;
            padding: 12px;
        }

        .btn-red {
            background: #dea54a;
            color: #fff;
            border-radius: 40px;
            padding: 12px;
        }

        .btn:hover {
            background: #000;
            color: #fff;
            opacity: .9;
        }
    </style>
    <!-- Page Header Start -->
    <div class="page-header dark-section parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-3" data-cursor="-opaque">Schemes</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Schemes</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->
    <!-- Jewellery Schemes Start -->
    <section class="scheme-section py-5">
        <div class="container">

            <div class="text-center mb-5">

                <span class="scheme-subtitle">
                    JEWELLERY SAVINGS SCHEMES
                </span>

                <h2 class="scheme-title">
                    Save Every Month & Shop Jewellery Using Your Wallet
                </h2>

                <p class="scheme-desc">
                    Join a jewellery savings scheme that suits your budget. Every successful
                    monthly payment is credited to your wallet, allowing you to purchase your
                    favourite gold and diamond jewellery with ease.
                </p>

            </div>

            <div class="row g-4">

                @forelse($schemes as $scheme)

                    <div class="col-lg-4 col-md-6">

                        <div class="scheme-card">

                            <div class="scheme-image">

                                @if($scheme->image)

                                    <img src="{{ asset($scheme->image) }}" alt="{{ $scheme->title }}" class="img-fluid">

                                @else

                                    <img src="{{ asset('website/images/no-image.png') }}" alt="No Image" class="img-fluid">

                                @endif

                            </div>

                            <div class="scheme-content">

                                <span class="scheme-badge gold">

                                    {{ $scheme->title }}

                                </span>

                                <h3>

                                    ₹{{ number_format($scheme->monthly_amount, 2) }}
                                    <small>/ Month</small>

                                </h3>

                                <ul>

                                    <li>

                                        ✔
                                        {{ $scheme->installments }}
                                        Monthly Installments

                                    </li>

                                    <li>

                                        ✔
                                        Joining Fee :
                                        ₹{{ number_format($scheme->joining_fee, 2) }}

                                    </li>

                                    <li>

                                        ✔
                                        Wallet Bonus :

                                        @if($scheme->bonus_type == 'fixed')

                                            ₹{{ number_format($scheme->bonus_amount, 2) }}

                                        @else

                                            {{ $scheme->bonus_amount }}%

                                        @endif

                                    </li>

                                    <li>

                                        ✔ Wallet Credit After Every Successful Payment

                                    </li>

                                    <li>

                                        ✔ Use Wallet Balance to Purchase Jewellery

                                    </li>

                                    <li>

                                        ✔ Online Joining :
                                        {{ $scheme->is_online ? 'Available' : 'Not Available' }}

                                    </li>

                                </ul>

                                <div class="d-grid gap-2">

                                    <a href="{{ route('schemes.show', $scheme->slug) }}" class="btn btn-gold">

                                        View Details

                                    </a>
{{-- 
                                    @auth('customer')

                                        <a href="{{ route('scheme.join', $scheme->slug) }}" class="btn btn-dark">

                                            Join Scheme

                                        </a>

                                    @else

                                        <a href="{{ route('customer.login') }}" class="btn btn-dark">

                                            Login to Join

                                        </a>

                                    @endauth --}}

                                </div>

                            </div>

                        </div>

                    </div>

                @empty

                    <div class="col-lg-12">

                        <div class="alert alert-warning text-center">

                            <h5 class="mb-2">

                                No Jewellery Schemes Available

                            </h5>

                            <p class="mb-0">

                                New jewellery savings schemes will be available soon.

                            </p>

                        </div>

                    </div>

                @endforelse

            </div>

        </div>
    </section>
    <!-- Jewellery Schemes End -->
@endsection