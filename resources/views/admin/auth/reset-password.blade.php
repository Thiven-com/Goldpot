<?php $page = 'signin-2'; ?>
@extends('layout.mainlayout')
@section('content')
    <div class="account-content">

        <div class="row login-wrapper m-0">
            <div class="col-lg-6 p-0">
                <div class="login-content">
                    <form method="POST" action="{{ route('admin.password.resetOtp') }}">
                        @csrf
                        <div class="login-userset">
                            <div class="login-logo logo-normal">
                                <img src="{{ asset($site->site_logo) }}" alt="img">
                            </div>
                            <a href="{{ url('index') }}" class="login-logo logo-white">
                                <img src="{{ asset($site->site_logo) }}" alt="Img">
                            </a>

                            <div class="login-userheading">
                                <h3>Reset Password</h3>
                                <h4>Enter your new password</h4>
                            </div>
                            @if($errors->any())
                                <div class="alert alert-danger">
                                    <ul class="mb-0">
                                        @foreach($errors->all() as $err)
                                            <li>{{ $err }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <input type="hidden" name="email" value="{{ $email }}">

                            <div class="mb-3">
                                <label class="form-label">New Password</label>
                                <div class="pass-group">
                                    <input type="password" name="password"
                                        class="form-control pass-input @error('password') is-invalid @enderror">
                                    <span class="ti toggle-password ti-eye-off text-gray-9"></span>
                                </div>
                                @error('password')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Confirm Password</label>
                                <div class="pass-group">
                                    <input type="password" name="password_confirmation" class="form-control pass-input">
                                    <span class="ti toggle-password ti-eye-off text-gray-9"></span>
                                </div>
                            </div>

                            <div class="form-login">
                                <button type="submit" class="btn btn-login">
                                    Reset Password
                                </button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>

            <div class="col-lg-6 p-0">
                <div class="login-img">
                    <img src="{{ URL::asset('build/img/authentication/authentication-01.svg') }}" alt="img">
                </div>
            </div>
        </div>
    </div>
@endsection