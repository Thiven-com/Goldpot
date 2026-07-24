@extends('layouts.website')

@section('content')

    <main class="main-bg">

        <section class="pt-120 pb-120">
            <div class="container" style="margin-top: 80px;">

                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8">

                        <div class="card border-0 shadow-lg rounded-4 overflow-hidden">

                            <div class="card-header text-center py-4 bg-dark text-white">
                                <h3 class="mb-1 text-white">Complete Payment</h3>
                                <p class="mb-0 opacity-75">Secure checkout powered by Razorpay</p>
                            </div>

                            <div class="card-body p-5">

                                <!-- Order Info -->
                                <div class="mb-4">

                                    <div class="d-flex justify-content-between mb-2">
                                        <span>Invoice ID</span>
                                        <strong>{{ $member->member_no }}</strong>
                                    </div>

                                    <div class="d-flex justify-content-between mb-2">
                                        <span>Customer</span>
                                        <strong>{{ auth('customer')->user()->name }}</strong>
                                    </div>

                                    <div class="d-flex justify-content-between mb-2">
                                        <span>Email</span>
                                        <strong>{{ auth('customer')->user()->email }}</strong>
                                    </div>

                                    <div class="d-flex justify-content-between mb-2">
                                        <span>Amount</span>
                                        <strong class="text-success">
                                            ₹{{ number_format($grandTotal, 2) }}
                                        </strong>
                                    </div>

                                </div>

                                <hr>

                                <!-- Payment Security -->
                                <div class="text-center my-4">
                                    <img src="https://cdn.razorpay.com/logo.svg" style="height:40px;">
                                    <p class="mt-3 text-muted small">
                                        Pay securely using UPI, Cards, Net Banking or Wallets
                                    </p>
                                </div>

                                <!-- Pay Button -->
                                <button id="payButton" class="theme-btn style-one w-100 py-3">
                                    Pay ₹{{ number_format($grandTotal, 2) }}
                                </button>

                                <a href="{{ route('schemes') }}" class="btn btn-light border w-100 mt-3">
                                    Back To Schemes
                                </a>

                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </section>

    </main>


    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>

    <script>

        document.getElementById('payButton').addEventListener('click', function () {

            var options = {

                key: "{{ env('RAZORPAY_KEY') }}",

                amount: "{{ $payAmount * 100 }}",

                currency: "INR",

                name: "{{ config('app.name') }}",

                description: "Jewellery Scheme Payment",

                image: "{{ asset($site->logo ?? '') }}",

                order_id: "{{ $razorpayOrder['id'] }}",

                handler: function (response) {

                    let form = document.createElement('form');

                    form.method = "POST";

                    form.action = "{{ route('scheme.payment.success', $member->id) }}";

                    form.innerHTML = `
                        @csrf
                        <input type="hidden" name="razorpay_payment_id" value="${response.razorpay_payment_id}">
                        <input type="hidden" name="razorpay_order_id" value="${response.razorpay_order_id}">
                        <input type="hidden" name="razorpay_signature" value="${response.razorpay_signature}">
                    `;

                    document.body.appendChild(form);

                    form.submit();

                },

                prefill: {

                    name: "{{ auth('customer')->user()->name }}",

                    email: "{{ auth('customer')->user()->email }}",

                    contact: "{{ auth('customer')->user()->mobile }}"

                },

                theme: {

                    color: "#c9a227"

                }

            };

            console.log(options);

            var rzp = new Razorpay(options);

            rzp.open();

        });

    </script>
@endsection