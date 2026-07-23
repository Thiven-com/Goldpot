@extends('layouts.website')

@section('content')

<section class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">

                <div class="mb-5 text-center">
                    <h1 class="fw-bold">Cancellation Policy</h1>
                    <p class="text-muted">
                        We understand that plans can change. Please review our cancellation policy below.
                    </p>
                </div>

                <div class="card shadow-sm border-0 mb-4">
                    <div class="card-body">
                        <h4 class="mb-3">Order Cancellation</h4>
                        <p>
                            Orders can be cancelled before they are processed or shipped. Once
                            an order has been dispatched, it cannot be cancelled.
                        </p>
                    </div>
                </div>

                <div class="card shadow-sm border-0 mb-4">
                    <div class="card-body">
                        <h4 class="mb-3">How to Cancel an Order</h4>
                        <ol class="mb-0">
                            <li>Log in to your account and go to <strong>My Orders</strong>.</li>
                            <li>Select the order you wish to cancel.</li>
                            <li>Click the <strong>Cancel Order</strong> option (if available).</li>
                            <li>Alternatively, contact our customer support team with your order number.</li>
                        </ol>
                    </div>
                </div>

                <div class="card shadow-sm border-0 mb-4">
                    <div class="card-body">
                        <h4 class="mb-3">Cancellation Eligibility</h4>
                        <ul class="mb-0">
                            <li>Orders that have not been shipped are eligible for cancellation.</li>
                            <li>Customized or personalized products cannot be cancelled once production has started.</li>
                            <li>Orders placed during promotional or clearance sales may not be eligible for cancellation.</li>
                        </ul>
                    </div>
                </div>

                <div class="card shadow-sm border-0 mb-4">
                    <div class="card-body">
                        <h4 class="mb-3">Refund for Cancelled Orders</h4>
                        <p>
                            If your cancellation request is approved, the refund will be
                            processed to your original payment method within
                            <strong>5–7 business days</strong>. The actual credit time may vary
                            depending on your bank or payment provider.
                        </p>
                    </div>
                </div>

                <div class="card shadow-sm border-0 mb-4">
                    <div class="card-body">
                        <h4 class="mb-3">Cancellation After Shipment</h4>
                        <p>
                            Orders that have already been shipped cannot be cancelled.
                            If you no longer wish to keep the product, you may request a return
                            after delivery, subject to our Return & Exchange Policy.
                        </p>
                    </div>
                </div>

                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <h4 class="mb-3">Need Help?</h4>
                        <p class="mb-0">
                            If you need assistance with cancelling an order or have any questions,
                            please contact our customer support team. We will be happy to assist you.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

@endsection