@extends('layouts.website')
@section('content')

<style>
    /*==========================
    No Orders Found
==========================*/

.text-center.py-5{
    max-width:700px;
    margin:50px auto;
    padding:60px 40px !important;
    background:#fff;
    border:1px solid #e9ecef;
    border-radius:20px;
    box-shadow:0 12px 35px rgba(0,0,0,.06);
    text-align:center;
    transition:.3s;
}

.text-center.py-5:hover{
    transform:translateY(-5px);
    box-shadow:0 18px 40px rgba(0,0,0,.08);
}

.text-center.py-5 h4{
    font-size:32px;
    font-weight:700;
    color:#111827;
    margin-bottom:15px;
}

.text-center.py-5 p{
    max-width:450px;
    margin:0 auto 30px;
    color:#6b7280 !important;
    font-size:16px;
    line-height:28px;
}

.text-center.py-5 .theme-btn{
    display:inline-flex;
    align-items:center;
    justify-content:center;
    padding:14px 32px;
    border-radius:10px;
    font-weight:600;
    transition:.3s;
}

.text-center.py-5 .theme-btn:hover{
    transform:translateY(-3px);
}

@media (max-width:768px){

    .text-center.py-5{
        margin:20px auto;
        padding:40px 20px !important;
    }

    .text-center.py-5 h4{
        font-size:26px;
    }

    .text-center.py-5 p{
        font-size:15px;
    }

}
</style>

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
        /* Start Shopping Button */

.text-center.py-5 .theme-btn{
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-width: 220px;
    height: 52px;
    padding: 0 30px;
    background: #111827;
    color: #fff !important;
    border: 2px solid #111827;
    border-radius: 12px;
    font-size: 16px;
    font-weight: 600;
    text-decoration: none;
    transition: all .3s ease;
}

.text-center.py-5 .theme-btn:hover{
    background: #fff;
    color: #111827 !important;
    border-color: #111827;
    transform: translateY(-3px);
    box-shadow: 0 12px 25px rgba(17, 24, 39, 0.18);
}

.text-center.py-5 .theme-btn:active{
    transform: scale(.98);
}

.text-center.py-5 .theme-btn:focus{
    outline: none;
    box-shadow: 0 0 0 4px rgba(17, 24, 39, 0.15);
}
    </style>
@endsection