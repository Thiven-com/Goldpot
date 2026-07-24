<?php $page = 'schemes-edit'; ?>
@extends('layout.mainlayout')

@section('content')

<div class="page-wrapper">

    <div class="content">

        <div class="page-header">

            <div class="page-title">
                <h4>Edit Jewellery Scheme</h4>
                <h6>Update Jewellery Savings Scheme</h6>
            </div>

            <div class="page-btn">
                <a href="{{ route('admin.schemes.index') }}" class="btn btn-secondary">
                    <i class="ti ti-arrow-left me-1"></i>
                    Back
                </a>
            </div>

        </div>

        <form action="{{ route('admin.schemes.update',$scheme->id) }}"
              method="POST"
              enctype="multipart/form-data">

            @csrf
            @method('PUT')

            <div class="card">

                <div class="card-body">

                    <div class="row">

                        <!-- Scheme Name -->
                        <div class="col-md-6">

                            <div class="mb-3">

                                <label class="form-label">
                                    Scheme Name <span class="text-danger">*</span>
                                </label>

                                <input type="text"
                                       name="title"
                                       value="{{ old('title',$scheme->title) }}"
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

                                <input type="text"
                                       name="scheme_code"
                                       value="{{ old('scheme_code',$scheme->scheme_code) }}"
                                       class="form-control">

                            </div>

                        </div>

                        <!-- Monthly Amount -->
                        <div class="col-md-4">

                            <div class="mb-3">

                                <label class="form-label">
                                    Monthly Amount
                                </label>

                                <input type="number"
                                       min="0"
                                       step="0.01"
                                       id="monthly_amount"
                                       name="monthly_amount"
                                       value="{{ old('monthly_amount',$scheme->monthly_amount) }}"
                                       class="form-control calc">

                            </div>

                        </div>

                        <!-- Installments -->
                        <div class="col-md-4">

                            <div class="mb-3">

                                <label class="form-label">
                                    Installments
                                </label>

                                <input type="number"
                                       min="1"
                                       id="installments"
                                       name="installments"
                                       value="{{ old('installments',$scheme->installments) }}"
                                       class="form-control calc">

                            </div>

                        </div>

                        <!-- Joining Fee -->
                        <div class="col-md-4">

                            <div class="mb-3">

                                <label class="form-label">
                                    Joining Fee
                                </label>

                                <input type="number"
                                       min="0"
                                       step="0.01"
                                       name="joining_fee"
                                       value="{{ old('joining_fee',$scheme->joining_fee) }}"
                                       class="form-control">

                            </div>

                        </div>

                        <!-- Bonus Type -->
                        <div class="col-md-4">

                            <div class="mb-3">

                                <label class="form-label">
                                    Bonus Type
                                </label>

                                <select name="bonus_type"
                                        id="bonus_type"
                                        class="form-select">

                                    <option value="fixed"
                                        {{ old('bonus_type',$scheme->bonus_type)=='fixed' ? 'selected' : '' }}>
                                        Fixed
                                    </option>

                                    <option value="percentage"
                                        {{ old('bonus_type',$scheme->bonus_type)=='percentage' ? 'selected' : '' }}>
                                        Percentage
                                    </option>

                                </select>

                            </div>

                        </div>

                        <!-- Bonus Amount -->
                        <div class="col-md-4">

                            <div class="mb-3">

                                <label class="form-label">
                                    Bonus Amount
                                </label>

                                <input type="number"
                                       min="0"
                                       step="0.01"
                                       id="bonus_amount"
                                       name="bonus_amount"
                                       value="{{ old('bonus_amount',$scheme->bonus_amount) }}"
                                       class="form-control calc">

                            </div>

                        </div>

                        <!-- Wallet Credit Preview -->
                        <div class="col-md-4">

                            <div class="mb-3">

                                <label class="form-label">
                                    Wallet Credit Preview
                                </label>

                                <input type="text"
                                       id="wallet_total"
                                       class="form-control"
                                       readonly>

                            </div>

                        </div>

                        <!-- Scheme Image -->
                        <div class="col-md-6">

                            <div class="mb-3">

                                <label class="form-label">
                                    Scheme Image
                                </label>

                                <input type="file"
                                       id="image"
                                       name="image"
                                       class="form-control">

                            </div>

                            @if($scheme->image)

                                <img src="{{ asset($scheme->image) }}"
                                     id="preview"
                                     style="width:160px;border-radius:10px;">

                            @else

                                <img id="preview"
                                     src=""
                                     style="display:none;width:160px;border-radius:10px;">

                            @endif

                        </div>

                        <!-- Online Joining -->
                        <div class="col-md-3">

                            <div class="mb-3">

                                <label class="form-label">
                                    Online Joining
                                </label>

                                <select name="is_online"
                                        class="form-select">

                                    <option value="1"
                                        {{ old('is_online',$scheme->is_online)==1 ? 'selected' : '' }}>
                                        Yes
                                    </option>

                                    <option value="0"
                                        {{ old('is_online',$scheme->is_online)==0 ? 'selected' : '' }}>
                                        No
                                    </option>

                                </select>

                            </div>

                        </div>

                        <!-- Status -->
                        <div class="col-md-3">

                            <div class="mb-3">

                                <label class="form-label">
                                    Status
                                </label>

                                <select name="status"
                                        class="form-select">

                                    <option value="active"
                                        {{ old('status',$scheme->status)=='active' ? 'selected' : '' }}>
                                        Active
                                    </option>

                                    <option value="inactive"
                                        {{ old('status',$scheme->status)=='inactive' ? 'selected' : '' }}>
                                        Inactive
                                    </option>

                                </select>

                            </div>

                        </div>

                        <!-- Short Description -->
                        <div class="col-md-12">

                            <div class="mb-3">

                                <label class="form-label">
                                    Short Description
                                </label>

                                <textarea name="short_description"
                                          rows="3"
                                          class="form-control">{{ old('short_description',$scheme->short_description) }}</textarea>

                            </div>

                        </div>

                        <!-- Description -->
                        <div class="col-md-12">

                            <div class="mb-3">

                                <label class="form-label">
                                    Description
                                </label>

                                <textarea id="summernote"
                                          name="description"
                                          rows="6"
                                          class="form-control">{{ old('description',$scheme->description) }}</textarea>

                            </div>

                        </div>

                        <!-- Terms & Conditions -->
                        <div class="col-md-12">

                            <div class="mb-3">

                                <label class="form-label">
                                    Terms & Conditions
                                </label>

                                <textarea id="summernote2"
                                          name="terms_conditions"
                                          rows="6"
                                          class="form-control">{{ old('terms_conditions',$scheme->terms_conditions) }}</textarea>

                            </div>

                        </div>
                                            </div>

                </div>

                <div class="card-footer text-end">

                    <button type="submit" class="btn btn-primary">

                        <i class="ti ti-device-floppy me-1"></i>

                        Update Scheme

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

@endsection