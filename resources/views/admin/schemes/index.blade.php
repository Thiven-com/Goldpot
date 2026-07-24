<?php $page = 'schemes-list'; ?>
@extends('layout.mainlayout')

@section('content')

    <div class="page-wrapper">

        <div class="content">

            <div class="page-header">

                <div class="add-item d-flex">
                    <div class="page-title">
                        <h4>Jewellery Schemes</h4>
                        <h6>Manage Jewellery Savings Schemes</h6>
                    </div>
                </div>

                <ul class="table-top-head">
                    <li class="me-2">
                        <a data-bs-toggle="tooltip" data-bs-placement="top" title="Collapse" id="collapse-header">
                            <i class="ti ti-chevron-up"></i>
                        </a>
                    </li>
                </ul>

                <div class="page-btn">
                    <a href="{{ route('admin.schemes.create') }}" class="btn btn-primary">
                        <i class="ti ti-circle-plus me-1"></i>
                        Add Scheme
                    </a>
                </div>

            </div>

            <div class="card">

                <div class="card-body p-0">

                    <div class="table-responsive">

                        <table class="table table-hover">

                            <thead class="thead-light">

                                <tr>

                                    <th width="60">#</th>

                                    <th>Image</th>

                                    <th>Scheme</th>

                                    <th>Monthly Amount</th>

                                    <th>Installments</th>

                                    <th>Joining Fee</th>

                                    <th>Bonus</th>

                                    <th>Status</th>

                                    <th class="text-center">Action</th>

                                </tr>

                            </thead>

                            <tbody>

                                @forelse($schemes as $scheme)

                                    <tr>

                                        <td>{{ $loop->iteration }}</td>

                                        <td>

                                            @if($scheme->image)

                                                <img src="{{ asset($scheme->image) }}" width="70" height="70"
                                                    style="object-fit:cover;border-radius:8px;">

                                            @else

                                                <img src="{{ asset('build/img/no-image.png') }}" width="70" height="70"
                                                    style="object-fit:cover;border-radius:8px;">

                                            @endif

                                        </td>

                                        <td>

                                            <h6 class="mb-1">

                                                {{ $scheme->title }}

                                            </h6>

                                            <small class="text-muted">

                                                {{ $scheme->scheme_code }}

                                            </small>

                                        </td>

                                        <td>

                                            ₹{{ number_format($scheme->monthly_amount, 2) }}

                                        </td>

                                        <td>

                                            {{ $scheme->installments }}

                                        </td>

                                        <td>

                                            ₹{{ number_format($scheme->joining_fee, 2) }}

                                        </td>

                                        <td>

                                            @if($scheme->bonus_type == 'fixed')

                                                ₹{{ number_format($scheme->bonus_amount, 2) }}

                                            @else

                                                {{ $scheme->bonus_amount }}%

                                            @endif

                                        </td>

                                        <td>

                                            @if($scheme->status == 'active')

                                                <span class="badge bg-success">

                                                    Active

                                                </span>

                                            @else

                                                <span class="badge bg-danger">

                                                    Inactive

                                                </span>

                                            @endif

                                        </td>

                                        <td>

                                            <div class="edit-delete-action justify-content-center">

                                                <a href="{{ route('admin.schemes.edit', $scheme->id) }}" class="me-2 p-2">

                                                    <i class="ti ti-edit text-primary"></i>

                                                </a>

                                                <a href="javascript:void(0)" class="confirm-delete-scheme p-2"
                                                    data-url="{{ route('admin.schemes.destroy', $scheme->id) }}">

                                                    <i class="ti ti-trash text-danger"></i>

                                                </a>

                                            </div>

                                        </td>

                                    </tr>

                                @empty

                                    <tr>

                                        <td colspan="9" class="text-center py-5">

                                            <img src="{{ asset('build/img/no-data.svg') }}" width="120" class="mb-3">

                                            <h6>No Schemes Found</h6>

                                        </td>

                                    </tr>

                                @endforelse

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>

        </div>

    </div>

@endsection

@push('scripts')

    <script>

        $(document).on('click', '.confirm-delete-scheme', function () {

            let url = $(this).data('url');

            if (confirm('Are you sure you want to delete this scheme?')) {

                $.ajax({

                    url: url,

                    type: 'POST',

                    data: {
                        _token: '{{ csrf_token() }}',
                        _method: 'DELETE'
                    },

                    success: function (res) {

                        alert(res.message);

                        location.reload();

                    },

                    error: function () {

                        alert('Something went wrong.');

                    }

                });

            }

        });

    </script>

@endpush