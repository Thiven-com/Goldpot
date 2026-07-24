@extends('layouts.website')

@section('content')

    <style>
        :root {
            --gold: #c9a227;
            --gold-dark: #9b7a12;
            --light: #faf8f3;
            --success: #28a745;
        }

        body {
            background: #f8f8f8;
        }

        .payment-header {
            background:
                linear-gradient(rgba(0, 0, 0, .65), rgba(0, 0, 0, .65)),
                url('{{ asset("website/images/page-header.jpg") }}') center center/cover;
            padding: 120px 0;
            color: #fff;
        }

        .payment-header h1 {
            font-size: 46px;
            font-weight: 700;
        }

        .payment-card {
            background: #fff;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 20px 45px rgba(0, 0, 0, .08);
        }

        .payment-card .card-header {
            background: linear-gradient(135deg, #c9a227, #9b7a12);
            color: #fff;
            border: none;
            padding: 20px;
        }

        .summary-card {
            background: #fff;
            border-radius: 20px;
            position: sticky;
            top: 100px;
            box-shadow: 0 20px 45px rgba(0, 0, 0, .08);
        }

        .info-box {
            border: 1px solid #eee;
            border-radius: 15px;
            padding: 18px;
            background: #fffdf8;
            margin-bottom: 20px;
        }

        .amount-box {
            background: linear-gradient(135deg, #fff8e5, #fff2c9);
            border: 2px dashed #c9a227;
            border-radius: 20px;
            padding: 25px;
            text-align: center;
        }

        .amount-box h2 {
            color: #9b7a12;
            font-weight: 700;
            margin-bottom: 0;
        }

        .icon-circle {
            width: 55px;
            height: 55px;
            background: #fff4d6;
            color: #9b7a12;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 22px;
        }

        .section-title {
            font-size: 22px;
            color: #9b7a12;
            font-weight: 700;
            margin-bottom: 25px;
        }

        @media(max-width:991px) {

            .summary-card {

                position: relative;

                top: 0;

                margin-top: 30px;

            }

            .payment-header h1 {

                font-size: 34px;

            }

        }
    </style>

    <div class="payment-header">

        <div class="container text-center">

            <h1>Scheme Payment</h1>

            <p>

                Home /

                Jewellery Scheme /

                Payment

            </p>

        </div>

    </div>

    <section class="py-5">

        <div class="container">

            <div class="row">

                <div class="col-lg-8">

                    <div class="payment-card">

                        <div class="card-header">

                            <h3 class="mb-0">

                                Complete Your Payment

                            </h3>

                        </div>

                        <div class="card-body p-4">

                            <div class="d-flex align-items-center mb-4">

                                <div class="icon-circle">

                                    <i class="fa fa-credit-card"></i>

                                </div>

                                <div class="ms-3">

                                    <h4 class="mb-1">

                                        Payment Details

                                    </h4>

                                    <p class="text-muted mb-0">

                                        Review your installment before payment.

                                    </p>

                                </div>

                            </div>

                            @php

                                $isFirstInstallment = $payment->installment_no == 1;

                            @endphp

                            <div class="row">

                                <div class="col-md-6">

                                    <div class="info-box">

                                        <small class="text-muted">

                                            Member Number

                                        </small>

                                        <h5 class="mt-2">

                                            {{ $member->member_no }}

                                        </h5>

                                    </div>

                                </div>

                                <div class="col-md-6">

                                    <div class="info-box">

                                        <small class="text-muted">

                                            Scheme Name

                                        </small>

                                        <h5 class="mt-2">

                                            {{ $member->scheme->title }}

                                        </h5>

                                    </div>

                                </div>

                                <div class="col-md-6">

                                    <div class="info-box">

                                        <small class="text-muted">

                                            Installment Number

                                        </small>

                                        <h5 class="mt-2">

                                            #{{ $payment->installment_no }}

                                        </h5>

                                    </div>

                                </div>

                                <div class="col-md-6">

                                    <div class="info-box">

                                        <small class="text-muted">

                                            Due Date

                                        </small>

                                        <h5 class="mt-2">

                                            {{ \Carbon\Carbon::parse($payment->due_date)->format('d M Y') }}

                                        </h5>

                                    </div>

                                </div>

                            </div>

                            <hr class="my-4">

                            <div class="amount-box">

                                <p class="text-muted mb-2">

                                    Amount Payable

                                </p>

                                <h2>

                                    ₹{{ number_format($payAmount, 2) }}

                                </h2>

                                @if($isFirstInstallment)

                                    <small class="text-muted">

                                        Includes first installment + joining fee

                                    </small>

                                @else

                                    <small class="text-muted">

                                        Monthly installment payment

                                    </small>

                                @endif

                            </div>
                            <hr class="my-5">

                            <h4 class="section-title">

                                Payment Breakdown

                            </h4>

                            <div class="row">

                                <div class="col-md-6">

                                    <div class="info-box">

                                        <small class="text-muted">

                                            Monthly Installment

                                        </small>

                                        <h4 class="mt-2">

                                            ₹{{ number_format($payment->amount, 2) }}

                                        </h4>

                                    </div>

                                </div>

                                @if($isFirstInstallment)

                                    <div class="col-md-6">

                                        <div class="info-box">

                                            <small class="text-muted">

                                                Joining Fee

                                            </small>

                                            <h4 class="mt-2 text-success">

                                                ₹{{ number_format($member->joining_fee, 2) }}

                                            </h4>

                                        </div>

                                    </div>

                                @endif

                                <div class="col-md-6">

                                    <div class="info-box">

                                        <small class="text-muted">

                                            Wallet Credit

                                        </small>

                                        <h4 class="mt-2 text-primary">

                                            ₹{{ number_format($payment->wallet_credit ?: $payment->amount, 2) }}

                                        </h4>

                                    </div>

                                </div>

                                <div class="col-md-6">

                                    <div class="info-box">

                                        <small class="text-muted">

                                            Payment Status

                                        </small>

                                        <h5 class="mt-2">

                                            <span class="badge bg-warning">

                                                {{ ucfirst($payment->status) }}

                                            </span>

                                        </h5>

                                    </div>

                                </div>

                            </div>

                            <div class="alert alert-success mt-4">

                                <div class="d-flex">

                                    <i class="fa fa-wallet fa-2x me-3"></i>

                                    <div>

                                        <h5 class="mb-2">

                                            Jewellery Wallet

                                        </h5>

                                        <p class="mb-0">

                                            After successful payment your installment
                                            amount will automatically be credited to
                                            your jewellery wallet.

                                        </p>

                                    </div>

                                </div>

                            </div>

                            <div class="alert alert-warning mt-4">

                                <div class="d-flex">

                                    <i class="fa fa-circle-info fa-2x me-3"></i>

                                    <div>

                                        <h5 class="mb-2">

                                            Payment Note

                                        </h5>

                                        <p class="mb-0">

                                            Please do not refresh or close your browser
                                            while completing the payment.

                                        </p>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                <!-- Right Side -->

                <div class="col-lg-4">

                    <div class="summary-card">

                        <div class="card-body p-4">

                            <div class="text-center mb-4">

                                <i class="fa fa-gem fa-3x text-warning mb-3"></i>

                                <h3>

                                    Payment Summary

                                </h3>

                            </div>

                            <div class="d-flex justify-content-between mb-3">

                                <span>

                                    Scheme

                                </span>

                                <strong>

                                    {{ $member->scheme->title }}

                                </strong>

                            </div>

                            <div class="d-flex justify-content-between mb-3">

                                <span>

                                    Member No

                                </span>

                                <strong>

                                    {{ $member->member_no }}

                                </strong>

                            </div>

                            <div class="d-flex justify-content-between mb-3">

                                <span>

                                    Installment

                                </span>

                                <strong>

                                    #{{ $payment->installment_no }}

                                </strong>

                            </div>

                            <div class="d-flex justify-content-between mb-3">

                                <span>

                                    Monthly Amount

                                </span>

                                <strong>

                                    ₹{{ number_format($payment->amount, 2) }}

                                </strong>

                            </div>

                            @if($isFirstInstallment)

                                <div class="d-flex justify-content-between mb-3">

                                    <span>

                                        Joining Fee

                                    </span>

                                    <strong>

                                        ₹{{ number_format($member->joining_fee, 2) }}

                                    </strong>

                                </div>

                            @endif

                            <hr>

                            <div class="text-center">

                                <small class="text-muted">

                                    Total Payable

                                </small>

                                <h2 class="text-success fw-bold">

                                    ₹{{ number_format($payAmount, 2) }}

                                </h2>

                            </div>

                            <div class="alert alert-light border mt-4">

                                <i class="fa fa-shield-alt text-success me-2"></i>

                                Secure payment protected with SSL encryption.

                            </div>
                            <div class="form-check mt-4">

                                <input class="form-check-input" type="checkbox" id="agreeTerms" required>

                                <label class="form-check-label" for="agreeTerms">

                                    I agree to the Scheme Terms & Conditions.

                                </label>

                            </div>

                            <div class="mt-4">

                                <h6 class="fw-bold mb-3">

                                    Secure Payment

                                </h6>

                                <div class="d-flex flex-wrap gap-2">

                                    <span class="badge bg-light text-dark border p-2">

                                        <i class="fa fa-credit-card text-primary me-1"></i>
                                        Credit Card

                                    </span>

                                    <span class="badge bg-light text-dark border p-2">

                                        <i class="fa fa-university text-success me-1"></i>
                                        Net Banking

                                    </span>

                                    <span class="badge bg-light text-dark border p-2">

                                        <i class="fa fa-mobile-alt text-danger me-1"></i>
                                        UPI

                                    </span>

                                    <span class="badge bg-light text-dark border p-2">

                                        <i class="fa fa-wallet text-warning me-1"></i>
                                        Wallet

                                    </span>

                                </div>

                            </div>

                            <button id="payButton" type="button" class="btn btn-warning btn-lg w-100 mt-4">

                                <i class="fa fa-lock me-2"></i>

                                Pay ₹{{ number_format($payAmount, 2) }}

                            </button>

                            <a href="{{ route('schemes.show', $member->scheme->slug) }}"
                                class="btn btn-outline-secondary w-100 mt-3">

                                <i class="fa fa-arrow-left me-2"></i>

                                Back to Scheme

                            </a>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>



    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>

    <script>

        document.getElementById('payButton').addEventListener('click', function () {

            if (!document.getElementById('agreeTerms').checked) {

                alert('Please accept the Terms & Conditions.');

                return;

            }

            var options = {

                key: "{{ env('RAZORPAY_KEY') }}",

                amount: "{{ $razorpayOrder['amount'] ?? ($payAmount * 100) }}",

                currency: "INR",

                name: "{{ config('app.name') }}",

                description: "Jewellery Scheme Payment",

                image: "{{ asset('website/images/logo.png') }}",

                order_id: "{{ $razorpayOrder['id'] ?? '' }}",

                handler: function (response) {

                    document.getElementById('razorpay_payment_id').value = response.razorpay_payment_id;

                    document.getElementById('razorpay_order_id').value = response.razorpay_order_id;

                    document.getElementById('razorpay_signature').value = response.razorpay_signature;

                    document.getElementById('paymentForm').submit();

                },

                theme: {

                    color: "#c9a227"

                }

            };

            var rzp = new Razorpay(options);

            rzp.open();

        });

    </script>

    <form id="paymentForm" action="{{ route('scheme.payment.success', $member->id) }}" method="POST" style="display:none;">

        @csrf

        <input type="hidden" name="razorpay_payment_id" id="razorpay_payment_id">

        <input type="hidden" name="razorpay_order_id" id="razorpay_order_id">

        <input type="hidden" name="razorpay_signature" id="razorpay_signature">

    </form>

@endsection