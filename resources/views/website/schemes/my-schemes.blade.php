@extends('layouts.website')

@section('content')

    <main class="main-bg">

        <section class="pt-120 pb-120">
            <div class="container" style="margin-top:80px;">

                <div class="text-center mb-5">
                    <h2 class="fw-bold">My Jewellery Schemes</h2>
                    <p class="text-muted">
                        View your active and completed jewellery savings schemes.
                    </p>
                </div>

                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                @if ($errors->any())
                    <div class="alert alert-danger mb-3">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if(session('error'))
                    <div class="alert alert-danger mb-3">
                        {{ session('error') }}
                    </div>
                @endif
                @if($members->count())

                    <div class="row">

                        @foreach($members as $member)

                            <div class="col-lg-6 mb-4">

                                <div class="card shadow border-0 rounded-4">

                                    <div class="card-body">

                                        <h4 class="fw-bold mb-3">
                                            {{ $member->scheme->title }}
                                        </h4>

                                        <table class="table table-borderless mb-3">

                                            <tr>
                                                <th>Member No</th>
                                                <td>{{ $member->member_no }}</td>
                                            </tr>

                                            @if($member->scheme->scheme_type == 'monthly')

                                                <tr>
                                                    <th>Monthly Amount</th>
                                                    <td>₹{{ number_format($member->monthly_amount, 2) }}</td>
                                                </tr>

                                            @else

                                                <tr>
                                                    <th>Minimum Daily Amount</th>
                                                    <td>
                                                        ₹{{ number_format($member->scheme->minimum_daily_amount, 2) }}
                                                    </td>
                                                </tr>

                                            @endif

                                            <tr>
                                                <th>Paid Amount</th>
                                                <td class="text-success">
                                                    ₹{{ number_format($member->paid_amount, 2) }}
                                                </td>
                                            </tr>

                                            <tr>
                                                <th>Wallet Credited</th>
                                                <td class="text-primary">
                                                    ₹{{ number_format($member->wallet_credited, 2) }}
                                                </td>
                                            </tr>

                                            @if($member->scheme->scheme_type == 'monthly')

                                                                <tr>
                                                                    <th>Installments</th>
                                                                    <td>
                                                                        {{ $member->paid_installments }}
                                                                        /
                                                                        {{ $member->installments }}
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <th>Next Due</th>
                                                                    <td>
                                                                        {{ $member->next_due_date
                                                ? \Carbon\Carbon::parse($member->next_due_date)->format('d M Y')
                                                : '-' }}
                                                                    </td>
                                                                </tr>

                                            @else

                                                                <tr>
                                                                    <th>Total Payments</th>
                                                                    <td>{{ $member->paid_installments }}</td>
                                                                </tr>

                                                                <tr>
                                                                    <th>Last Payment</th>
                                                                    <td>
                                                                        @php
                                                                            $lastPayment = $member->payments()
                                                                                ->where('status', 'success')
                                                                                ->latest('paid_at')
                                                                                ->first();
                                                                        @endphp

                                                                        {{ $lastPayment
                                                ? \Carbon\Carbon::parse($lastPayment->paid_at)->format('d M Y')
                                                : '-' }}
                                                                    </td>
                                                                </tr>

                                            @endif

                                            <tr>
                                                <th>Status</th>
                                                <td>

                                                    @if($member->status == 'active')

                                                        <span class="badge bg-success">Active</span>

                                                    @elseif($member->status == 'completed')

                                                        <span class="badge bg-primary">Completed</span>

                                                    @else

                                                        <span class="badge bg-warning text-dark">
                                                            Pending
                                                        </span>

                                                    @endif

                                                </td>
                                            </tr>

                                        </table>

                                        @php
                                            $payment = $member->payments()
                                                ->where('status', 'pending')
                                                ->orderBy('installment_no')
                                                ->first();
                                        @endphp

                                        @if($member->scheme->scheme_type == 'monthly')

                                            @if($payment)
                                                <a href="{{ route('scheme.payment', $member->id) }}" class="theme-btn style-one w-100">
                                                    Pay Next Installment
                                                </a>
                                            @endif
{{-- 
                                        @else

                                            <button type="button" class="btn btn-success style-one w-100" data-bs-toggle="modal"
                                                data-bs-target="#dailyPaymentModal{{ $member->id }}">
                                                Make Payment
                                            </button> --}}

                                        @endif

                                    </div>

                                </div>

                            </div>

                        @endforeach

                    </div>

                @else

                    <div class="text-center py-5">

                        <h4>No Schemes Found</h4>

                        <p class="text-muted">
                            You haven't joined any jewellery scheme yet.
                        </p>

                        <a href="{{ route('schemes') }}" class="theme-btn style-one">

                            Browse Schemes

                        </a>

                    </div>

                @endif

            </div>
        </section>

    </main>
@endsection