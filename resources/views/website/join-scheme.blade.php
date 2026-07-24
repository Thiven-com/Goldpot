@extends('layouts.website')

@section('content')

    <style>
        :root {
            --gold: #c9a227;
            --gold-dark: #9b7a12;
            --light: #faf8f3;
        }

        body {
            background: #f8f8f8;
        }

        .join-header {
            background:
                linear-gradient(rgba(0, 0, 0, .65), rgba(0, 0, 0, .65)),
                url('{{ asset("website/images/page-header.jpg") }}') center center/cover;
            padding: 120px 0;
            color: #fff;
        }

        .join-header h1 {
            font-size: 46px;
            font-weight: 700;
        }

        .join-card {
            background: #fff;
            border-radius: 20px;
            box-shadow: 0 15px 40px rgba(0, 0, 0, .08);
            overflow: hidden;
        }

        .join-card .card-header {
            background: linear-gradient(135deg, #c9a227, #9b7a12);
            color: #fff;
            border: none;
            padding: 20px;
        }

        .form-control {
            border-radius: 10px;
            height: 52px;
        }

        .summary-card {
            position: sticky;
            top: 100px;
            border-radius: 20px;
            background: #fff;
            box-shadow: 0 15px 40px rgba(0, 0, 0, .08);
        }

        .info-box {
            border: 1px solid #eee;
            border-radius: 15px;
            padding: 18px;
            background: #fffdf7;
            margin-bottom: 20px;
        }

        .section-title {
            color: #9b7a12;
            font-size: 20px;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .customer-icon {
            width: 55px;
            height: 55px;
            background: #fff4d6;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #9b7a12;
            font-size: 22px;
        }

        .readonly {
            background: #f7f7f7 !important;
        }
    </style>

    <div class="join-header">

        <div class="container text-center">

            <h1>Join Jewellery Scheme</h1>

            <p>

                Home /

                Jewellery Schemes /

                {{ $scheme->title }}

            </p>

        </div>

    </div>

    <section class="py-5">

        <div class="container">
            {{-- Validation Errors --}}
            @if($errors->any())

                <div class="alert alert-danger alert-dismissible fade show rounded-3 shadow-sm">

                    <strong>
                        <i class="fa fa-times-circle me-2"></i>
                        Please fix the following errors:
                    </strong>

                    <ul class="mb-0 mt-2">
                        @foreach($errors->all() as $err)
                            <li>{{ $err }}</li>
                        @endforeach
                    </ul>

                    <button type="button" class="btn-close" data-bs-dismiss="alert">
                    </button>

                </div>

            @endif


            {{-- Success Message --}}
            @if(session('success'))

                <div class="alert alert-success alert-dismissible fade show rounded-3 shadow-sm">

                    <i class="fa fa-check-circle me-2"></i>

                    <strong>Success!</strong>

                    {{ session('success') }}

                    <button type="button" class="btn-close" data-bs-dismiss="alert">
                    </button>

                </div>

            @endif


            {{-- Error Message --}}
            @if(session('error'))

                <div class="alert alert-danger alert-dismissible fade show rounded-3 shadow-sm">

                    <i class="fa fa-times-circle me-2"></i>

                    <strong>Error!</strong>

                    {{ session('error') }}

                    <button type="button" class="btn-close" data-bs-dismiss="alert">
                    </button>

                </div>

            @endif


            {{-- Warning Message --}}
            @if(session('warning'))

                <div class="alert alert-warning alert-dismissible fade show rounded-3 shadow-sm">

                    <i class="fa fa-exclamation-triangle me-2"></i>

                    <strong>Warning!</strong>

                    {{ session('warning') }}

                    <button type="button" class="btn-close" data-bs-dismiss="alert">
                    </button>

                </div>

            @endif
            <form action="{{ route('scheme.join.store', $scheme->slug) }}" method="POST">

                @csrf

                <div class="row">

                    <div class="col-lg-8">

                        <div class="join-card">

                            <div class="card-header">

                                <h3 class="mb-0">

                                    Member Registration

                                </h3>

                            </div>

                            <div class="card-body p-4">

                                <div class="d-flex align-items-center mb-4">

                                    <div class="customer-icon">

                                        <i class="fa fa-user"></i>

                                    </div>

                                    <div class="ms-3">

                                        <h4 class="mb-1">

                                            Customer Information

                                        </h4>

                                        <p class="text-muted mb-0">

                                            Your registered account details

                                        </p>

                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-md-6 mb-3">

                                        <label class="fw-semibold">

                                            Full Name

                                        </label>

                                        <input type="text" class="form-control readonly" required
                                            value="{{ auth('customer')->user()->name }}">

                                    </div>

                                    <div class="col-md-6 mb-3">

                                        <label class="fw-semibold">

                                            Mobile Number

                                        </label>

                                        <input type="text" class="form-control readonly"
                                            value="{{ auth('customer')->user()->mobile }}" readonly>

                                    </div>

                                    <div class="col-md-6 mb-3">

                                        <label class="fw-semibold">

                                            Email Address

                                        </label>

                                        <input type="email" class="form-control readonly"
                                            value="{{ auth('customer')->user()->email }}">

                                    </div>

                                    <div class="col-md-6 mb-3">

                                        <label class="fw-semibold">

                                            Joining Date

                                        </label>

                                        <input type="text" class="form-control readonly"
                                            value="{{ now()->format('d M Y') }}" readonly>

                                    </div>

                                </div>

                                <hr class="my-4">

                                <div class="info-box">

                                    <h5>

                                        <i class="fa fa-circle-info text-warning me-2"></i>

                                        Important Information

                                    </h5>

                                    <p class="mb-0">

                                        Your scheme membership will be created after successful payment of
                                        the first installment together with the joining fee.

                                    </p>

                                </div>
                                <h4 class="section-title">

                                    Scheme Information

                                </h4>

                                @php

                                    $totalSaving = $scheme->monthly_amount * $scheme->installments;

                                    $firstPayment = $scheme->monthly_amount + $scheme->joining_fee;

                                @endphp

                                <div class="row">

                                    <div class="col-md-6 mb-4">

                                        <div class="info-box">

                                            <small class="text-muted">

                                                Scheme Name

                                            </small>

                                            <h5 class="mt-2 mb-0">

                                                {{ $scheme->title }}

                                            </h5>

                                        </div>

                                    </div>

                                    <div class="col-md-6 mb-4">

                                        <div class="info-box">

                                            <small class="text-muted">

                                                Member Number

                                            </small>

                                            <h5 class="mt-2 mb-0">

                                                Auto Generated

                                            </h5>

                                        </div>

                                    </div>

                                    <div class="col-md-6 mb-4">

                                        <div class="info-box">

                                            <small class="text-muted">

                                                Monthly Saving

                                            </small>

                                            <h4 class="text-warning mt-2">

                                                ₹{{ number_format($scheme->monthly_amount, 2) }}

                                            </h4>

                                        </div>

                                    </div>

                                    <div class="col-md-6 mb-4">

                                        <div class="info-box">

                                            <small class="text-muted">

                                                Installments

                                            </small>

                                            <h4 class="mt-2">

                                                {{ $scheme->installments }}

                                                Months

                                            </h4>

                                        </div>

                                    </div>

                                    <div class="col-md-6 mb-4">

                                        <div class="info-box">

                                            <small class="text-muted">

                                                Joining Fee

                                            </small>

                                            <h4 class="mt-2 text-success">

                                                ₹{{ number_format($scheme->joining_fee, 2) }}

                                            </h4>

                                        </div>

                                    </div>

                                    <div class="col-md-6 mb-4">

                                        <div class="info-box">

                                            <small class="text-muted">

                                                Wallet Bonus

                                            </small>

                                            <h4 class="mt-2 text-danger">

                                                @if($scheme->bonus_type == 'fixed')

                                                    ₹{{ number_format($scheme->bonus_amount, 2) }}

                                                @else

                                                    {{ $scheme->bonus_amount }}%

                                                @endif

                                            </h4>

                                        </div>

                                    </div>

                                </div>

                                <hr class="my-4">

                                <h4 class="section-title">

                                    Payment Information

                                </h4>

                                <div class="alert alert-warning border-0">

                                    <div class="d-flex">

                                        <i class="fa fa-wallet fa-2x me-3"></i>

                                        <div>

                                            <strong>

                                                Wallet Based Jewellery Scheme

                                            </strong>

                                            <p class="mb-0 mt-2">

                                                Every successful monthly installment will be
                                                credited to your jewellery wallet. The wallet
                                                balance can be redeemed while purchasing
                                                jewellery.

                                            </p>

                                        </div>

                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-md-6">

                                        <div class="info-box">

                                            <small class="text-muted">

                                                Total Savings

                                            </small>

                                            <h3 class="mt-2">

                                                ₹{{ number_format($totalSaving, 2) }}

                                            </h3>

                                        </div>

                                    </div>

                                    <div class="col-md-6">

                                        <div class="info-box">

                                            <small class="text-muted">

                                                First Payment

                                            </small>

                                            <h3 class="mt-2 text-success">

                                                ₹{{ number_format($firstPayment, 2) }}

                                            </h3>

                                        </div>

                                    </div>

                                </div>

                                <!-- Hidden Fields -->

                                <input type="hidden" name="scheme_id" value="{{ $scheme->id }}">

                            </div>

                        </div>

                    </div>
                    <!-- Right Side -->

                    <div class="col-lg-4">

                        <div class="summary-card">

                            <div class="card-body p-4">

                                <div class="text-center mb-4">

                                    <i class="fa fa-gem fa-3x text-warning mb-3"></i>

                                    <h3 class="mb-1">

                                        Scheme Summary

                                    </h3>

                                    <p class="text-muted">

                                        Review your membership details

                                    </p>

                                </div>

                                <div class="d-flex justify-content-between mb-3">

                                    <span>Scheme</span>

                                    <strong>{{ $scheme->title }}</strong>

                                </div>

                                <div class="d-flex justify-content-between mb-3">

                                    <span>Monthly Amount</span>

                                    <strong>

                                        ₹{{ number_format($scheme->monthly_amount, 2) }}

                                    </strong>

                                </div>

                                <div class="d-flex justify-content-between mb-3">

                                    <span>Installments</span>

                                    <strong>

                                        {{ $scheme->installments }}

                                    </strong>

                                </div>

                                <div class="d-flex justify-content-between mb-3">

                                    <span>Total Saving</span>

                                    <strong>

                                        ₹{{ number_format($totalSaving, 2) }}

                                    </strong>

                                </div>

                                <div class="d-flex justify-content-between mb-3">

                                    <span>Joining Fee</span>

                                    <strong>

                                        ₹{{ number_format($scheme->joining_fee, 2) }}

                                    </strong>

                                </div>

                                <div class="d-flex justify-content-between mb-3">

                                    <span>Wallet Bonus</span>

                                    <strong>

                                        @if($scheme->bonus_type == 'fixed')

                                            ₹{{ number_format($scheme->bonus_amount, 2) }}

                                        @else

                                            {{ $scheme->bonus_amount }}%

                                        @endif

                                    </strong>

                                </div>

                                <hr>

                                <div class="d-flex justify-content-between align-items-center mb-4">

                                    <div>

                                        <small class="text-muted">

                                            Pay Today

                                        </small>

                                        <h3 class="text-success mb-0">

                                            ₹{{ number_format($firstPayment, 2) }}

                                        </h3>

                                    </div>

                                    <i class="fa fa-credit-card fa-2x text-success"></i>

                                </div>

                                <div class="alert alert-success border-0">

                                    <strong>

                                        Wallet Credit

                                    </strong>

                                    <p class="mb-0 mt-2">

                                        Your monthly installments will be credited to your
                                        jewellery wallet after every successful payment.

                                    </p>

                                </div>

                                <div class="form-check mt-4">

                                    <input class="form-check-input" type="checkbox" id="agreeTerms" required>

                                    <label class="form-check-label" for="agreeTerms">

                                        I agree to the Scheme Terms & Conditions.

                                    </label>

                                </div>

                                <button type="submit" class="btn btn-warning btn-lg w-100 mt-4">

                                    <i class="fa fa-lock me-2"></i>

                                    Proceed to Payment

                                </button>

                                <a href="{{ route('schemes.show', $scheme->slug) }}"
                                    class="btn btn-outline-secondary w-100 mt-3">

                                    <i class="fa fa-arrow-left me-2"></i>

                                    Back to Scheme

                                </a>

                            </div>

                        </div>

                    </div>

                </div>

            </form>

        </div>

    </section>

@endsection

@push('scripts')

    <script>

        document.querySelector("form").addEventListener("submit", function (e) {

            if (!document.getElementById("agreeTerms").checked) {

                e.preventDefault();

                alert("Please accept the Terms & Conditions.");

            }

        });

    </script>

@endpush