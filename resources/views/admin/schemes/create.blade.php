<?php $page = 'schemes-add'; ?>
@extends('layout.mainlayout')

@section('content')

    <div class="page-wrapper">

        <div class="content">

            <div class="page-header">

                <div class="page-title">
                    <h4>Add Jewellery Scheme</h4>
                    <h6>Create New Jewellery Savings Scheme</h6>
                </div>

                <div class="page-btn">
                    <a href="{{ route('admin.schemes.index') }}" class="btn btn-secondary">
                        <i class="ti ti-arrow-left me-1"></i>
                        Back
                    </a>
                </div>

            </div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('admin.schemes.store') }}" method="POST" enctype="multipart/form-data">

                @csrf

                <div class="card">

                    <div class="card-body">

                        <div class="row">

                            <!-- Scheme Name -->
                            <div class="col-md-6">

                                <div class="mb-3">

                                    <label class="form-label">
                                        Scheme Name <span class="text-danger">*</span>
                                    </label>

                                    <input type="text" name="title" value="{{ old('title') }}"
                                        class="form-control @error('title') is-invalid @enderror">

                                    @error('title')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror

                                </div>

                            </div>

                            <!-- Scheme Code -->
                            <div class="col-md-6">

                                <div class="mb-3">

                                    <label class="form-label">
                                        Scheme Code
                                    </label>

                                    <input type="text" name="scheme_code" value="{{ old('scheme_code') }}"
                                        class="form-control">

                                </div>

                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label">Scheme Type</label>

                                    <select name="scheme_type" id="scheme_type" class="form-select">
                                        <option value="monthly">Monthly</option>
                                        <option value="daily">Daily</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4" id="dailyAmountDiv" style="display:none;">

                                <div class="mb-3">

                                    <label class="form-label">
                                        Minimum Daily Amount
                                    </label>

                                    <input type="number" name="minimum_daily_amount" id="minimum_daily_amount"
                                        class="form-control" min="1" step="0.01">

                                </div>

                            </div>

                            <!-- Monthly Amount -->
                            <div class="col-md-4" id="monthlyAmountDiv">

                                <div class="mb-3">

                                    <label class="form-label">
                                        Monthly Amount
                                    </label>

                                    <input type="number" min="0" step="0.01" id="monthly_amount" name="monthly_amount"
                                        value="{{ old('monthly_amount') }}" class="form-control calc">

                                </div>

                            </div>

                            <!-- Installments -->
                            <div class="col-md-4" id="installmentsDiv">

                                <div class="mb-3">

                                    <label class="form-label">
                                        Installments
                                    </label>

                                    <input type="number" min="1" id="installments" name="installments"
                                        value="{{ old('installments', 11) }}" class="form-control calc">

                                </div>

                            </div>

                            <!-- Joining Fee -->
                            <div class="col-md-4">

                                <div class="mb-3">

                                    <label class="form-label">
                                        Joining Fee
                                    </label>

                                    <input type="number" min="0" step="0.01" name="joining_fee"
                                        value="{{ old('joining_fee', 0) }}" class="form-control">

                                </div>

                            </div>

                            <!-- Bonus Type -->
                            <div class="col-md-4" id="bonusTypeDiv">

                                <div class="mb-3">

                                    <label class="form-label">
                                        Bonus Type
                                    </label>

                                    <select name="bonus_type" id="bonus_type" class="form-select">

                                        <option value="fixed" {{ old('bonus_type') == 'fixed' ? 'selected' : '' }}>
                                            Fixed
                                        </option>

                                        <option value="percentage" {{ old('bonus_type') == 'percentage' ? 'selected' : '' }}>
                                            Percentage
                                        </option>

                                    </select>

                                </div>

                            </div>

                            <!-- Bonus Amount -->
                            <div class="col-md-4" id="bonusAmountDiv">

                                <div class="mb-3">

                                    <label class="form-label">
                                        Bonus Amount
                                    </label>

                                    <input type="number" min="0" step="0.01" id="bonus_amount" name="bonus_amount"
                                        value="{{ old('bonus_amount', 0) }}" class="form-control calc">

                                </div>

                            </div>

                            <!-- Wallet Credit Preview -->
                            <div class="col-md-4" id="walletPreviewDiv">

                                <div class="mb-3">

                                    <label class="form-label">
                                        Wallet Credit Preview
                                    </label>

                                    <input type="text" id="wallet_total" class="form-control" readonly>

                                </div>

                            </div>

                            <!-- Scheme Image -->
                            <div class="col-md-6">

                                <div class="mb-3">

                                    <label class="form-label">
                                        Scheme Image
                                    </label>

                                    <input type="file" name="image" id="image" class="form-control">

                                </div>

                                <img id="preview" src="" style="display:none;width:160px;border-radius:10px;">

                            </div>

                            <!-- Online Joining -->
                            <div class="col-md-3">

                                <div class="mb-3">

                                    <label class="form-label">
                                        Online Joining
                                    </label>

                                    <select name="is_online" class="form-select">

                                        <option value="1">Yes</option>
                                        <option value="0">No</option>

                                    </select>

                                </div>

                            </div>

                            <!-- Status -->
                            <div class="col-md-3">

                                <div class="mb-3">

                                    <label class="form-label">
                                        Status
                                    </label>

                                    <select name="status" class="form-select">

                                        <option value="active">Active</option>
                                        <option value="inactive">Inactive</option>

                                    </select>

                                </div>

                            </div>

                            <!-- Short Description -->
                            <div class="col-md-12">

                                <div class="mb-3">

                                    <label class="form-label">
                                        Short Description
                                    </label>

                                    <textarea name="short_description" rows="3"
                                        class="form-control">{{ old('short_description') }}</textarea>

                                </div>

                            </div>

                            <!-- Description -->
                            <div class="col-md-12">

                                <div class="mb-3">

                                    <label class="form-label">
                                        Description
                                    </label>

                                    <textarea name="description" id="summernote" rows="6"
                                        class="form-control">{{ old('description') }}</textarea>

                                </div>

                            </div>

                            <!-- Terms & Conditions -->
                            <div class="col-md-12">

                                <div class="mb-3">

                                    <label class="form-label">
                                        Terms & Conditions
                                    </label>

                                    <textarea name="terms_conditions" id="summernote2" rows="6"
                                        class="form-control">{{ old('terms_conditions') }}</textarea>

                                </div>

                            </div>
                        </div>

                    </div>

                    <div class="card-footer text-end">

                        <button type="submit" class="btn btn-primary">

                            <i class="ti ti-device-floppy me-1"></i>

                            Save Scheme

                        </button>

                    </div>

                </div>

            </form>

        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>

        $(document).ready(function () {

            function calculateWalletCredit() {

                let monthly = parseFloat($("#monthly_amount").val()) || 0;

                let installments = parseInt($("#installments").val()) || 0;

                let bonus = parseFloat($("#bonus_amount").val()) || 0;

                let total = monthly * installments;

                if ($("#bonus_type").val() === "fixed") {

                    total += bonus;

                } else {

                    total += (total * bonus) / 100;

                }

                $("#wallet_total").val("₹ " + total.toFixed(2));

            }

            $(".calc").on("keyup change", function () {

                calculateWalletCredit();

            });

            $("#bonus_type").on("change", function () {

                calculateWalletCredit();

            });

            calculateWalletCredit();

            $("#image").change(function () {

                if (this.files && this.files[0]) {

                    let reader = new FileReader();

                    reader.onload = function (e) {

                        $("#preview")
                            .attr("src", e.target.result)
                            .show();

                    };

                    reader.readAsDataURL(this.files[0]);

                }

            });

            @if(old('image'))

                $("#preview").show();

            @endif

                                if ($("#summernote").length) {

                $("#summernote").summernote({
                    height: 250
                });

            }

            if ($("#summernote2").length) {

                $("#summernote2").summernote({
                    height: 250
                });

            }

        });

    </script>
    <script>
        $("#scheme_type").on("change", function () {

            if ($(this).val() === "daily") {

                // Show daily fields
                $("#dailyAmountDiv").show();

                // Hide monthly fields
                $("#monthlyAmountDiv").hide();
                $("#installmentsDiv").hide();
                $("#bonusTypeDiv").hide();
                $("#bonusAmountDiv").hide();
                $("#walletPreviewDiv").hide();

                // Required fields
                $("#minimum_daily_amount").prop("required", true);

                $("#monthly_amount").prop("required", false);
                $("#installments").prop("required", false);
                $("#bonus_type").prop("required", false);
                $("#bonus_amount").prop("required", false);

            } else {

                // Show monthly fields
                $("#dailyAmountDiv").hide();

                $("#monthlyAmountDiv").show();
                $("#installmentsDiv").show();
                $("#bonusTypeDiv").show();
                $("#bonusAmountDiv").show();
                $("#walletPreviewDiv").show();

                // Required fields
                $("#minimum_daily_amount").prop("required", false);

                $("#monthly_amount").prop("required", true);
                $("#installments").prop("required", true);
                $("#bonus_type").prop("required", true);
            }

        }).trigger("change");
    </script>

@endsection