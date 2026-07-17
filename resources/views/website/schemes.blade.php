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
                <span class="scheme-subtitle">JEWELLERY SAVINGS PLANS</span>
                <h2 class="scheme-title">
                    Save Today. Own Your Dream Jewellery Tomorrow.
                </h2>
                <p class="scheme-desc">
                    Choose a jewellery savings plan that fits your budget and enjoy exclusive
                    benefits on your favourite jewellery.
                </p>
            </div>

            <div class="row g-4">

                <!-- Gold Scheme -->
                <div class="col-lg-4">
                    <div class="scheme-card">

                        <div class="scheme-image">
                            <img src="{{ asset('website') }}/images/schemes/gold-plan.png" class="img-fluid">
                        </div>

                        <div class="scheme-content">

                            <span class="scheme-badge gold">
                                Gold Saver Plan
                            </span>

                            <h3>₹500 / Month</h3>

                            <ul>
                                <li>✔ Save for 11 Months</li>
                                <li>✔ Exclusive Bonus</li>
                                <li>✔ 100% Secure</li>
                                <li>✔ Redeem on Gold Jewellery</li>
                            </ul>

                            <a href="#" class="btn btn-gold w-100">
                                Join Now
                            </a>

                        </div>

                    </div>
                </div>

                <!-- Diamond -->
                <div class="col-lg-4">
                    <div class="scheme-card">

                        <div class="scheme-image">
                            <img src="{{ asset('website') }}/images/schemes/diamond-plan.png" class="img-fluid">
                        </div>

                        <div class="scheme-content">

                            <span class="scheme-badge blue">
                                Diamond Saver
                            </span>

                            <h3>₹1000 / Month</h3>

                            <ul>
                                <li>✔ Flexible Installments</li>
                                <li>✔ Certified Diamond</li>
                                <li>✔ Premium Rewards</li>
                                <li>✔ Lifetime Support</li>
                            </ul>

                            <a href="#" class="btn btn-blue w-100">
                                Explore Plan
                            </a>

                        </div>

                    </div>
                </div>

                <!-- Wedding -->
                <div class="col-lg-4">
                    <div class="scheme-card">

                        <div class="scheme-image">
                            <img src="{{ asset('website') }}/images/schemes/wedding-plan.png" class="img-fluid">
                        </div>

                        <div class="scheme-content">

                            <span class="scheme-badge red">
                                Wedding Plan
                            </span>

                            <h3>Flexible Savings</h3>

                            <ul>
                                <li>✔ Perfect for Weddings</li>
                                <li>✔ Gold & Diamond Jewellery</li>
                                <li>✔ Easy Monthly Savings</li>
                                <li>✔ Easy Redemption</li>
                            </ul>

                            <a href="#" class="btn btn-red w-100">
                                Start Saving
                            </a>

                        </div>

                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- Jewellery Schemes End -->
@endsection