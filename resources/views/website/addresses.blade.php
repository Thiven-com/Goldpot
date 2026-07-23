@extends('layouts.website')
@section('content')
    <style>
        /* ===========================
                   Address Cards
                =========================== */

        .my-account-address {
            display: grid;
            grid-template-columns: repeat(1, 1fr);
            gap: 24px;
        }

        .account-address_item {
            background: #fff;
            border: 1px solid #e8e8e8;
            border-radius: 16px;
            padding: 25px;
            margin: 30px;
            transition: .3s;
            box-shadow: 0 5px 18px rgba(0, 0, 0, .04);
        }

        .account-address_item:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 30px rgba(0, 0, 0, .08);
            border-color: #000;
        }

        .address-title {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 1px solid #f1f1f1;
        }

        .address-title h6 {
            margin: 0;
            font-size: 20px;
        }

        .mark-default {
            background: #111827;
            color: #fff;
            padding: 4px 12px;
            border-radius: 30px;
            font-size: 12px;
        }

        .address-content {
            display: flex;
            gap: 18px;
            align-items: flex-start;
        }

        .address-content i {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 22px;
            color: #111827;
        }

        .address-info {
            flex: 1;
        }

        .info_name {
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 8px;
        }

        .info_more {
            line-height: 1.8;
            color: #666;
        }

        .btn-light {
            margin-top: 20px;
            border: 1px solid #111827;
            background: #fff;
            color: #111827;
            transition: .3s;
        }

        .btn-light:hover {
            background: #111827;
            color: #fff;
        }

        /* ===========================
                   Modal
                =========================== */

        .modal-content {
            border-radius: 16px;
            border: none;
            padding: 10px;
        }

        .modal-heading {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            border-bottom: 1px solid #eee;
        }

        /* ===========================
                   Form Layout
                =========================== */

        .form-content {
            padding: 25px;
        }

        .form-content .tf-grid-layout {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 18px;
            margin-bottom: 18px;
        }

        .tf-field {
            margin-bottom: 18px;
        }

        .tf-field label {
            display: block;
            margin-bottom: 8px;
            font-size: 14px;
            font-weight: 600;
        }

        .style-4 {
            width: 100%;
            height: 48px;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 12px 15px;
            background: #fff;
        }

        textarea.style-4 {
            height: 110px;
            resize: none;
            padding-top: 12px;
        }

        .tf-select select {
            width: 100%;
            height: 48px;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 0 15px;
            background: #fff;
        }

        .style-4:focus,
        .tf-select select:focus {
            outline: none;
            border-color: #111827;
        }

        /* Full Width Fields */

        .form-content>.tf-field {
            width: 100%;
        }

        /* Buttons */

        .form-group-btn {
            padding: 0 25px 25px;
        }

        .form-group-btn .tf-btn {
            width: 100%;
            margin-bottom: 10px;
        }

        .form-group-btn .tf-btn-line {
            width: 100%;
            text-align: center;
        }

        /* ===========================
                   Responsive
                =========================== */

        @media(max-width:991px) {

            .my-account-address {
                grid-template-columns: 1fr;
            }

            .form-content .tf-grid-layout {
                grid-template-columns: 1fr;
            }

            .address-title {
                flex-direction: column;
                align-items: flex-start;
                gap: 10px;
            }

        }
    </style>
    <style>
        /* ==========================
           Action Buttons
        ========================== */

        .address-title .gap-3 {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        /* Edit Button */

        .editAddressBtn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            height: 38px;
            padding: 0 16px;
            border-radius: 8px;
            background: #111827;
            color: #fff !important;
            font-size: 14px;
            font-weight: 500;
            text-decoration: none;
            transition: .3s;
        }

        .editAddressBtn:hover {
            background: #000;
            transform: translateY(-2px);
        }

        /* Delete Button */

        .address-title form {
            margin: 0;
        }

        .address-title form button {
            height: 38px;
            border: none !important;
            border-radius: 8px;
            background: #fee2e2 !important;
            color: #dc2626 !important;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: .3s;
            cursor: pointer;
        }

        .address-title form button:hover {
            background: #dc2626 !important;
            color: #fff !important;
            transform: translateY(-2px);
        }

        /* If icon font isn't working */
        .address-title form button i {
            font-size: 18px;
            font-style: normal;
        }

        /* Set Default */

        .btn-light {
            width: 100%;
            height: 46px;
            border-radius: 10px;
            border: 1px solid #111827;
            background: #fff;
            color: #111827 !important;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            font-weight: 600;
            transition: .3s;
        }

        .btn-light:hover {
            background: #111827;
            color: #fff !important;
        }

        /* Save Button */

        .form-group-btn .tf-btn {
            height: 50px;
            border-radius: 10px;
            font-weight: 600;
            transition: .3s;
        }

        .form-group-btn .tf-btn:hover {
            transform: translateY(-2px);
        }

        /* Cancel Button */

        .form-group-btn .tf-btn-line {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 50px;
            border: 1px solid #ddd;
            border-radius: 10px;
            text-decoration: none;
            color: #555;
            transition: .3s;
        }

        .form-group-btn .tf-btn-line:hover {
            background: #f5f5f5;
        }
    </style>
    <style>
        /* ==========================
       No Address Found
    ========================== */

        .wd-full.text-center {
            max-width: 650px;
            margin: 50px auto;
            padding: 60px 40px;
            background: #ffffff;
            border: 1px solid #ececec;
            border-radius: 20px;
            box-shadow: 0 10px 35px rgba(0, 0, 0, .06);
            text-align: center;
        }

        .wd-full.text-center::before {
            width: 90px;
            height: 90px;
            margin: 0 auto 25px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 42px;
            background: #f5f7fb;
            border-radius: 50%;
        }

        .wd-full.text-center h5 {
            font-size: 30px;
            font-weight: 700;
            color: #111827;
            margin-bottom: 12px;
        }

        .wd-full.text-center p {
            color: #6b7280;
            font-size: 16px;
            line-height: 28px;
            max-width: 420px;
            margin: 0 auto 30px;
        }

        .wd-full.text-center .tf-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            padding: 14px 30px;
            background: #111827;
            color: #fff;
            border-radius: 10px;
            font-weight: 600;
            text-decoration: none;
            transition: .3s;
        }

        .wd-full.text-center .tf-btn:hover {
            background: #000;
            transform: translateY(-3px);
            box-shadow: 0 12px 25px rgba(0, 0, 0, .18);
        }

        .wd-full.text-center .tf-btn i {
            font-size: 18px;
        }

        @media(max-width:768px) {

            .wd-full.text-center {
                padding: 40px 20px;
                margin: 25px auto;
            }

            .wd-full.text-center h5 {
                font-size: 24px;
            }

        }
    </style>

    <div class="page-header dark-section parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-3" data-cursor="-opaque">My Account</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Address</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Account -->
    <div class="flat-spacing-mix-1">
        <div class="container">
            <div class="my-account-address tf-grid-layout sm-col-2 gap-24">

                @forelse($addresses as $address)
                    <div class="account-address_item">

                        <div class="address-title">
                            <div class="d-flex align-items-center gap-6">
                                <h6 class="font-instrument_serif">
                                    {{ $address->address_type ?? 'Home' }}
                                </h6>

                                @if($address->is_default ?? false)
                                    <span class="mark-default text-body-s">
                                        Default
                                    </span>
                                @endif
                            </div>

                            <div class="d-flex align-items-center gap-3">

                                <!-- Edit -->
                                {{-- <a href="javascript:void(0)" class="editAddressBtn" data-id="{{ $address->id }}"
                                    data-name="{{ $address->name }}" data-mobile="{{ $address->mobile }}"
                                    data-email="{{ $address->email }}" data-address="{{ $address->address }}"
                                    data-city="{{ $address->city }}" data-state="{{ $address->state }}"
                                    data-pincode="{{ $address->pincode }}">
                                    Edit
                                </a> --}}

                                <!-- Delete -->
                                <form action="{{ route('customer.address.destroy', $address->id) }}" method="POST"
                                    onsubmit="return confirm('Are you sure you want to delete this address?');">

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="border-0 bg-transparent text-danger d-flex align-items-center">
                                        <i class="icon icon-Trash fs-20">Delate</i>
                                    </button>
                                </form>

                            </div>
                        </div>

                        <div class="address-content">
                            <i class="icon icon-DotLocation fs-20"></i>

                            <div class="address-info">
                                <p class="info_name fw-normal mb-8">
                                    {{ $address->name }}
                                </p>

                                <p class="info_more text-body-s cl-text-5">

                                    {{ $address->mobile }} <br>

                                    {{ $address->address }}

                                    @if($address->address_2)
                                        , {{ $address->address_2 }}
                                    @endif

                                    <br>

                                    {{ $address->city }},
                                    {{ $address->state }}
                                    - {{ $address->pincode }}

                                </p>
                            </div>
                        </div>

                        @if(!($address->is_default ?? false))
                            <a href="#" class="tf-btn type-4 w-100 btn-light mt-3">
                                Set as Default
                            </a>
                        @endif

                    </div>

                @empty
                    <div class="wd-full text-center py-5">
                        <h5>No Address Found</h5>
                        <p class="text-muted mb-3">
                            You haven't added any address yet.
                        </p>

                        <a href="#modalAddAddress" data-bs-toggle="modal" class="tf-btn">
                            Add New Address
                            <i class="icon icon-Plus"></i>
                        </a>
                    </div>
                @endforelse

            </div>
        </div>
    </div>
    <!-- /Account -->

    <!-- Add Address Modal -->
    <div class="modal modalCentered fade" id="modalAddAddress">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-heading">
                    <h5 class="font-instrument_serif fw-normal">Add New Address</h5>
                    <span class="icon icon-Close link-rotate" data-bs-dismiss="modal"></span>
                </div>

                <form action="{{ route('customer.address.store') }}" method="POST">
                    @csrf

                    <div class="form-content mb-24">

                        <div class="tf-grid-layout sm-col-2 gap-8">
                            <!-- Full Name -->
                            <fieldset class="tf-field">
                                <label class="text-body-xs">Full Name *</label>
                                <input type="text" name="name" class="style-4" placeholder="Enter full name" required>
                            </fieldset>

                            <!-- Mobile -->
                            <fieldset class="tf-field">
                                <label class="text-body-xs">Phone Number *</label>
                                <input type="text" name="mobile" class="style-4" placeholder="Enter phone number" required>
                            </fieldset>
                        </div>

                        <div class="tf-grid-layout sm-col-2 gap-8">
                            <!-- Alternate Mobile -->
                            <fieldset class="tf-field">
                                <label class="text-body-xs">Alternate Phone Number</label>
                                <input type="text" name="alternate_mobile" class="style-4"
                                    placeholder="Enter alternate phone number">
                            </fieldset>

                            <!-- Email -->
                            <fieldset class="tf-field">
                                <label class="text-body-xs">Email *</label>
                                <input type="email" name="email" class="style-4" placeholder="Enter email" required>
                            </fieldset>
                        </div>

                        <div class="tf-grid-layout sm-col-2 gap-8">
                            <!-- Pincode -->
                            <fieldset class="tf-field">
                                <label class="text-body-xs">Pincode *</label>
                                <input type="text" name="pincode" class="style-4" placeholder="Enter pincode" required>
                            </fieldset>

                            <!-- City -->
                            <fieldset class="tf-field">
                                <label class="text-body-xs">City *</label>
                                <input type="text" name="city" class="style-4" placeholder="Enter city" required>
                            </fieldset>
                        </div>

                        <div class="tf-grid-layout sm-col-2 gap-8">
                            <!-- Landmark -->
                            <fieldset class="tf-field">
                                <label class="text-body-xs">Landmark</label>
                                <input type="text" name="landmark" class="style-4" placeholder="Enter landmark">
                            </fieldset>
                            @php
                                $states = [
                                    'Andhra Pradesh',
                                    'Arunachal Pradesh',
                                    'Assam',
                                    'Bihar',
                                    'Chhattisgarh',
                                    'Goa',
                                    'Gujarat',
                                    'Haryana',
                                    'Himachal Pradesh',
                                    'Jharkhand',
                                    'Karnataka',
                                    'Kerala',
                                    'Madhya Pradesh',
                                    'Maharashtra',
                                    'Manipur',
                                    'Meghalaya',
                                    'Mizoram',
                                    'Nagaland',
                                    'Odisha',
                                    'Punjab',
                                    'Rajasthan',
                                    'Sikkim',
                                    'Tamil Nadu',
                                    'Telangana',
                                    'Tripura',
                                    'Uttar Pradesh',
                                    'Uttarakhand',
                                    'West Bengal'
                                ];
                            @endphp
                            <!-- State -->
                            <fieldset class="tf-field">
                                <label class="text-body-xs">State *</label>

                                <div class="tf-select w-100">
                                    <select name="state" class="style-4" required>
                                        <option value="">Select State</option>
                                        @foreach($states as $state)
                                            <option value="{{ $state }}" {{ old('state') == $state ? 'selected' : '' }}>
                                                {{ $state }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </fieldset>
                        </div>

                        <!-- GST -->
                        <fieldset class="tf-field">
                            <label class="text-body-xs">GST</label>
                            <input type="text" name="gst" class="style-4" placeholder="Enter GST Number">
                        </fieldset>

                        <!-- Address -->
                        <fieldset class="tf-field">
                            <label class="text-body-xs">House No, Street *</label>
                            <textarea name="address" class="style-4" rows="3" placeholder="House No, Street, Area..."
                                required></textarea>
                        </fieldset>

                        <!-- Address 2 -->
                        <fieldset class="tf-field">
                            <label class="text-body-xs">Address</label>
                            <textarea name="address_2" class="style-4" rows="3"
                                placeholder="Apartment, City, State"></textarea>
                        </fieldset>

                    </div>

                    <div class="form-group-btn">
                        <button type="submit" class="tf-btn type-2 style-2 w-100">
                            Save Address
                        </button>

                        <button type="button" data-bs-dismiss="modal" class="tf-btn-line fw-normal">
                            Cancel
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <!-- /Add Address Form -->

    <!-- Edit Form -->
    <div class="modal modalCentered fade" id="modalEdit">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">

                <div class="modal-heading">
                    <h5 class="font-instrument_serif fw-normal">Edit Address</h5>
                    <span class="icon icon-Close link-rotate" data-bs-dismiss="modal"></span>
                </div>

                <form id="editAddressForm" method="POST">
                    @csrf
                    @method('PUT')

                    <input type="text" name="name" id="edit_name">
                    <input type="text" name="mobile" id="edit_mobile">
                    <input type="email" name="email" id="edit_email">
                    <textarea name="address" id="edit_address"></textarea>
                    <input type="text" name="city" id="edit_city">
                    <input type="text" name="state" id="edit_state">
                    <input type="text" name="pincode" id="edit_pincode">

                    <button type="submit">Update</button>
                </form>

            </div>
        </div>
    </div>
    <!-- /Edit Form -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        document.querySelectorAll('.editAddressBtn').forEach(function (btn) {

            btn.addEventListener('click', function () {

                document.getElementById('edit_name').value = this.dataset.name;
                document.getElementById('edit_mobile').value = this.dataset.mobile;
                document.getElementById('edit_email').value = this.dataset.email;
                document.getElementById('edit_address').value = this.dataset.address;
                document.getElementById('edit_city').value = this.dataset.city;
                document.getElementById('edit_state').value = this.dataset.state;
                document.getElementById('edit_pincode').value = this.dataset.pincode;

                document.getElementById('editAddressForm').action =
                    "/customer/address/update/" + this.dataset.id;

                $('#editAddressModal').modal('show');
            });

        });
    </script>


@endsection