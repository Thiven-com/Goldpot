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

                                        <tr>
                                            <th>Monthly Amount</th>
                                            <td>₹{{ number_format($member->monthly_amount,2) }}</td>
                                        </tr>

                                        <tr>
                                            <th>Paid Amount</th>
                                            <td class="text-success">
                                                ₹{{ number_format($member->paid_amount,2) }}
                                            </td>
                                        </tr>

                                        <tr>
                                            <th>Wallet Credited</th>
                                            <td class="text-primary">
                                                ₹{{ number_format($member->wallet_credited,2) }}
                                            </td>
                                        </tr>

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
                                                {{ $member->next_due_date ? \Carbon\Carbon::parse($member->next_due_date)->format('d M Y') : '-' }}
                                            </td>
                                        </tr>

                                        <tr>
                                            <th>Status</th>
                                            <td>

                                                @if($member->status=='active')
                                                    <span class="badge bg-success">Active</span>
                                                @elseif($member->status=='completed')
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
                                            ->where('status','pending')
                                            ->orderBy('installment_no')
                                            ->first();
                                    @endphp

                                    @if($payment)

                                        <a href="{{ route('scheme.payment',$member->id) }}"
                                           class="theme-btn style-one w-100">

                                            Pay Next Installment

                                        </a>

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

                    <a href="{{ route('schemes') }}"
                       class="theme-btn style-one">

                        Browse Schemes

                    </a>

                </div>

            @endif

        </div>
    </section>

</main>

@endsection