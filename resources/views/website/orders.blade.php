@extends('layouts.website')
@section('content')

    <!-- Page Header Start -->
    <div class="page-header dark-section parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-3" data-cursor="-opaque">Orders</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="account-order.html">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Orders</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <main class="main-bg">

        <section class="pt-50 pb-20 mt-20">
            <div class="container">

                <div class="text-center mb-5" style="margin-top: 70px;">
                    {{-- <span class="badge bg-dark px-3 py-2 mb-3">Customer Dashboard</span> --}}
                    <h2 class="fw-bold">My Orders</h2>
                    <p class="text-muted">Track your recent purchases and order history</p>
                </div>

                @if($orders->count())

                    <div class="row g-4">

                        @foreach($orders as $order)

                            @php
                                switch ($order->status) {
                                    case 'placed':
                                        $statusColor = 'success';
                                        break;
                                    case 'pending':
                                        $statusColor = 'warning';
                                        break;
                                    case 'cancelled':
                                        $statusColor = 'danger';
                                        break;
                                    case 'delivered':
                                        $statusColor = 'primary';
                                        break;
                                    default:
                                        $statusColor = 'secondary';
                                }
                            @endphp

                            <div class="col-lg-6">

                                <div class="card border-0 shadow-sm rounded-4 h-100 order-card">

                                    <div class="card-body">

                                        <div class="d-flex justify-content-between align-items-center">

                                            <div>
                                                <h5 class="fw-bold mb-1">
                                                    {{ $order->invoice_id }}
                                                </h5>

                                                <small class="text-muted">
                                                    {{ $order->created_at->format('d M Y') }}
                                                </small>
                                            </div>

                                            <div class="text-end">

                                                <span class="badge bg-{{ $statusColor }}">
                                                    {{ ucfirst($order->status) }}
                                                </span>

                                                <div class="fw-bold text-success mt-2">
                                                    ₹{{ number_format($order->grand_total, 2) }}
                                                </div>

                                            </div>

                                        </div>

                                        <hr>

                                        {{-- Products --}}

                                        @foreach($order->items as $item)

                                            <div class="d-flex align-items-center mb-3">

                                                <img src="{{ asset($item->variant->image ?? 'website/images/no-image.png') }}"
                                                    width="70" height="70" class="rounded border object-fit-cover">

                                                <div class="ms-3 flex-grow-1">

                                                    <h6 class="mb-1">
                                                        {{ $item->variant->product->name ?? '' }}
                                                    </h6>

                                                    <small class="text-muted">
                                                        Qty : {{ $item->quantity }}
                                                    </small>

                                                </div>

                                                <strong>
                                                    ₹{{ number_format($item->subtotal, 2) }}
                                                </strong>

                                            </div>

                                        @endforeach

                                        <hr>

                                        <div class="d-flex justify-content-between align-items-center">

                                            <div>

                                                <small class="text-muted d-block">
                                                    Payment
                                                </small>

                                                <strong>
                                                    {{ ucfirst($order->payment_status) }}
                                                </strong>

                                            </div>

                                            {{-- <a href="{{ route('customer.orders.show', $order->id) }}"
                                                class="theme-btn style-one btn-sm">

                                                View Details

                                            </a> --}}

                                        </div>

                                    </div>

                                </div>

                            </div>

                        @endforeach

                    </div>

                    <div class="mt-4 d-flex justify-content-center">
                        {{ $orders->links('pagination::bootstrap-5') }}
                    </div>

                @else

                    <div class="text-center py-5">

                        <h4>No Orders Found</h4>

                        <p class="text-muted">
                            You haven't placed any orders yet.
                        </p>

                        <a href="{{ route('shop') }}" class="theme-btn style-one">
                            Start Shopping
                        </a>

                    </div>

                @endif

            </div>
        </section>

    </main>

    <style>
        .order-card {
            transition: .3s;
        }

        .order-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, .08) !important;
        }

        .object-fit-cover {
            object-fit: cover;
        }
    </style>
@endsection