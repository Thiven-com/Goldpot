@extends('layouts.website')

@section('content')

    <style>
        /* Login Section */
        .login-section {
            background: #f8f9f4;
            min-height: 70vh;
            display: flex;
            align-items: center;
            padding: 80px 0;
        }

        /* Login Card */
        .login-card {
            background: #fff;
            border-radius: 20px;
            padding: 45px;
            box-shadow: 0 15px 40px rgba(0, 0, 0, .08);
            transition: .3s ease;
        }

        .login-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 20px 45px rgba(0, 0, 0, .12);
        }

        /* Heading */
        .login-card h2 {
            font-size: 38px;
            font-weight: 700;
            color: #222;
            margin-bottom: 10px;
        }

        .login-card p {
            color: #777;
            margin-bottom: 30px;
        }

        /* Labels */
        .login-card label {
            font-size: 15px;
            font-weight: 600;
            color: #222;
            margin-bottom: 8px;
        }

        /* Input */
        .login-card .form-control {
            height: 55px;
            border-radius: 10px;
            border: 1px solid #ddd;
            padding: 0 18px;
            font-size: 15px;
            transition: .3s;
            box-shadow: none;
        }

        .login-card .form-control:focus {
            border-color: #dea54a;
            box-shadow: 0 0 0 0.2rem rgba(222, 165, 74, .18);
        }

        /* Button */
        .login-card .tf-btn {
            width: 100%;
            height: 55px;
            border: none;
            border-radius: 10px;
            background: #dea54a;
            color: #fff;
            font-size: 16px;
            font-weight: 600;
            transition: .3s;
        }

        .login-card .tf-btn:hover {
            background: #c68f39;
            color: #fff;
        }

        /* OTP Input */
        .login-card input[name="otp"] {
            text-align: center;
            letter-spacing: 8px;
            font-size: 22px;
            font-weight: 600;
        }

        /* Links */
        .login-card a {
            color: #dea54a;
            font-weight: 600;
            text-decoration: none;
        }

        .login-card a:hover {
            color: #c68f39;
        }

        /* Responsive */
        @media(max-width:767px) {

            .login-card {
                padding: 30px 20px;
            }

            .login-card h2 {
                font-size: 30px;
            }
        }
    </style>

    <!-- Page Header Start -->
    <div class="page-header dark-section parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-header-box">
                        <h1 class="text-anime-style-3" data-cursor="-opaque">Login</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('home') }}">Home</a>
                                </li>
                                <li class="breadcrumb-item active">Login</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Login Section Start -->
    <section class="login-section">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-lg-5 col-md-7 col-12">

                    <div class="login-card">

                        <div class="text-center mb-4">
                            <h2 class="font-instrument_serif">Welcome Back</h2>
                            <p class="text-muted mb-0">
                                Login using your mobile number
                            </p>
                        </div>

                        {{-- SEND OTP --}}
                        <form id="sendOtpForm">

                            @csrf

                            <div class="mb-4">
                                <label class="form-label">
                                    Mobile Number
                                </label>

                                <input type="text" name="mobile" class="form-control" placeholder="Enter Mobile Number"
                                    maxlength="10" required><br>

                            </div>

                            <button type="submit" class="tf-btn type-2 style-2 w-100">
                                Send OTP
                            </button>

                        </form>

                        {{-- VERIFY OTP --}}
                        <form id="verifyOtpForm" style="display:none;" class="mt-4">

                            @csrf

                            <div class="mb-4">

                                <label class="form-label">
                                    Enter OTP
                                </label>

                                <input type="text" name="otp" maxlength="6" class="form-control text-center"
                                    placeholder="Enter 6 Digit OTP" required><br>

                            </div>

                            <button type="submit" class="tf-btn type-2 style-2 w-100">
                                Verify & Login
                            </button>

                        </form>

                        {{-- <div class="text-center mt-4">
                            Don't have an account?
                            <a href="#">
                                Register
                            </a>
                        </div> --}}


                    </div>

                </div>

            </div>
        </div>
    </section>
    <!-- Login Section End -->


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>

        let mobile = '';

        $("#sendOtpForm").submit(function (e) {

            e.preventDefault();

            mobile = $("input[name='mobile']").val();

            $.post("{{ url('/send-otp') }}", {

                _token: "{{ csrf_token() }}",
                mobile: mobile

            }, function (res) {

                alert(res.message);

                if (res.status) {

                    $("#sendOtpForm").hide();
                    $("#verifyOtpForm").fadeIn();

                }

            });

        });


        $("#verifyOtpForm").submit(function (e) {

            e.preventDefault();

            let otp = $("input[name='otp']").val();

            $.post("{{ url('/verify-otp') }}", {

                _token: "{{ csrf_token() }}",
                mobile: mobile,
                otp: otp

            }, function (res) {

                if (res.status) {

                    alert("Login Successful");

                    window.location.href = "{{ url('/') }}";

                } else {

                    alert(res.message);

                }

            });

        });

    </script>
@endsection