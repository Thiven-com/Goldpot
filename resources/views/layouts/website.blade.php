<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <meta name="description" content="Goldpot - Premium Jewellery Store">
    <meta name="keywords" content="Goldpot, Jewellery, Rings, Necklaces, Bracelets, Earrings, Fashion, Luxury">
    <meta name="author" content="Awaiken">
    <!-- Page Title -->
    <title>Goldpot - Premium Jewellery Store</title>
    <!-- Favicon Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('website')}}/images/favicon.png">
    <!-- Google Fonts Css-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link
        href="{{ asset('website') }}/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <!-- Bootstrap Css -->
    <link href="{{asset('website')}}/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <!-- SlickNav Css -->
    <link href="{{asset('website')}}/css/slicknav.min.css" rel="stylesheet">
    <!-- Swiper Css -->
    <link rel="stylesheet" href="{{asset('website')}}/css/swiper-bundle.min.css">
    <!-- Font Awesome Icon Css-->
    <link href="{{asset('website')}}/css/all.min.css" rel="stylesheet" media="screen">
    <!-- Animated Css -->
    <link href="{{asset('website')}}/css/animate.css" rel="stylesheet">
    <!-- Magnific Popup Core Css File -->
    <link rel="stylesheet" href="{{asset('website')}}/css/magnific-popup.css">
    <!-- Mouse Cursor Css File -->
    <link rel="stylesheet" href="{{asset('website')}}/css/mousecursor.css">
    <!-- Main Custom Css -->
    <link href="{{asset('website')}}/css/custom.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <style>
        /* User Dropdown */
        .main-menu ul li.menu-item.has-children {
            position: relative;
        }

        .main-menu ul li.menu-item.has-children .sub-menu {
            position: absolute;
            top: 120%;
            right: 0;
            left: auto;
            min-width: 180px;
            background: #fff;
            border-radius: 10px;
            padding: 8px 0;
            box-shadow: 0 10px 30px rgba(0, 0, 0, .12);
            opacity: 0;
            visibility: hidden;
            transform: translateY(10px);
            transition: all .3s ease;
            z-index: 9999;
        }

        .main-menu ul li.menu-item.has-children:hover .sub-menu {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }

        .main-menu ul li.menu-item.has-children .sub-menu li {
            display: block;
            width: 100%;
        }

        .main-menu ul li.menu-item.has-children .sub-menu li a {
            display: block;
            padding: 10px 18px;
            color: #333;
            font-size: 15px;
            font-weight: 500;
            text-decoration: none;
            transition: all .3s;
        }

        .main-menu ul li.menu-item.has-children .sub-menu li a:hover {
            background: #dea54a;
            color: #fff;
        }

        .main-menu ul li.menu-item.has-children>a img {
            width: 24px;
            height: 24px;
            transition: .3s;
        }

        .main-menu ul li.menu-item.has-children:hover>a img {
            transform: scale(1.1);
        }

        /* Mobile */
        @media (max-width: 991px) {

            .main-menu ul li.menu-item.has-children .sub-menu {
                position: static;
                opacity: 1;
                visibility: visible;
                transform: none;
                box-shadow: none;
                border-radius: 0;
                padding-left: 15px;
                display: none;
            }

            .main-menu ul li.menu-item.has-children:hover .sub-menu {
                display: block;
            }
        }
    </style>

    <!-- Preloader Start -->
    <div class="preloader">
        <div class="loading-container">
            <div class="loading"></div>
            <div id="loading-icon"><img src="{{asset('website')}}/images/logo.png" alt=""></div>
        </div>
    </div>
    <!-- Preloader End -->

    <!-- Topbar Section Start -->
    <div class="topbar">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-3 col-7">
                    <!-- Topbar Social List Start -->
                    <div class="topbar-social-list">
                        <ul>
                            {{-- <li><a href="#"><i class="fa-brands fa-pinterest-p"></i></a></li> --}}
                            <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <!-- Topbar Social List End -->
                </div>

                <div class="col-md-6 col-0">
                    <!-- Topbar Info Content Start -->
                    <div class="topbar-info-content">
                        <p>💎 Shop Jewellery • 💰 Save Daily • 🎁 Enjoy Exclusive Jewellery Schemes</p>
                    </div>
                    <!-- Topbar Info Content End -->
                </div>

                <div class="col-md-3 col-5">
                    {{-- <div class="topbar-currency-list">
                        <select name="currency_list" class="form-control form-select" id="currency_list">
                            <option value="usd">USD $</option>
                            <option value="eur">EUR €</option>
                            <option value="inr">INR $</option>
                            <option value="amd">AMD ֏</option>
                            <option value="gbp">GBP £</option>
                        </select>
                    </div> --}}
                </div>
                <!-- Topbar Content Box End -->
            </div>
        </div>
    </div>
    <!-- Topbar Section End -->

    <!-- Header Start -->
    <header class="main-header">
        <div class="header-sticky">
            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <!-- Logo Start -->
                    <a class="navbar-brand" href="{{ route('home') }}">
                        <img src="{{asset('website')}}/images/logo.png" alt="Logo">
                    </a>
                    <!-- Logo End -->

                    <!-- Main Menu Start -->
                    <div class="main-menu">
                        <!-- Navbar Collapse Start -->
                        <div class="collapse navbar-collapse">
                            <div class="nav-menu-wrapper">
                                <ul class="navbar-nav" id="menu">
                                    <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('shop') }}">Shop</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('schemes') }}">Schemes</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('blog') }}">Blog</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact
                                            Us</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="navbar-toggle"></div>
                        <!-- Navbar Collapse End -->


                        <!-- Header Action Details Start -->
                        <div class="header-action-details">
                            <ul>
                                <li>
                                    <!-- Header Search Form Start -->
                                    <form action="{{ route('shop') }}" method="GET" class="header-search-form">
                                        <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            <img src="{{asset('website')}}/images/icon-search-gold.svg" alt="">
                                        </button>
                                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <button type="button" class="close" data-bs-dismiss="modal"
                                                        aria-label="Close">
                                                        <i class="fa-solid fa-xmark"></i>
                                                    </button>
                                                    <div class="modal-search-form">
                                                        <input type="text" name="search" class="form-control"
                                                            id="search" placeholder="Search Your Product">
                                                        <button type="submit" class="modal-search-btn"><i
                                                                class="fa-solid fa-magnifying-glass"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- Header Search Form End -->
                                </li>
                                <li class="menu-item has-children">
                                    <a href="javascript:void(0)">
                                        <img src="{{ asset('website/images/icon-user-gold.svg') }}" alt="User">
                                    </a>

                                    <ul class="sub-menu">

                                        @if (Auth::guard('customer')->check())

                                            <li>
                                                <a href="{{ route('dashboard') }}">Dashboard</a>
                                            </li>

                                            <li>
                                                <a href="{{ route('customer.orders') }}">Orders</a>
                                            </li>

                                            <li>
                                                <a href="{{ route('profile') }}">Account</a>
                                            </li>

                                            <li>
                                                <a href="{{ route('logout') }}" style="color: red;">Logout</a>
                                            </li>

                                        @else

                                            <li>
                                                <a href="{{ route('login') }}">Login</a>
                                            </li>

                                        @endif

                                    </ul>
                                </li>
                                <li><a href="{{ route('wishlist') }}"><img
                                            src="{{asset('website')}}/images/icon-wishlist-gold.svg" alt=""></a></li>
                                <li><a href="{{ route('cart') }}"><img
                                            src="{{asset('website')}}/images/icon-cart-gold.svg" alt=""></a>
                                </li>
                            </ul>
                        </div>
                        <!-- Header Action Details End -->
                    </div>
                    <!-- Main Menu End -->
                </div>
            </nav>
            <div class="responsive-menu"></div>
        </div>
    </header>
    <!-- Header End -->

    @yield('content')
    @include('sweetalert::alert')
    <!-- Main Footer Start -->
    <footer class="main-footer dark-section">
        <div class="container">
            <div class="row">
                <div class="col-xl-4">
                    <!-- Aobut Footer Start -->
                    <div class="about-footer">
                        <!-- Footer Logo Start -->
                        <div class="footer-logo">
                            <img src="{{asset('website')}}/images/logo.png" alt="">
                        </div>
                        <!-- Footer Logo End -->

                        <!-- About Footer Content Start -->
                        <div class="about-footer-content">
                            <p>
                                Discover certified Gold, Silver, and Diamond jewellery along with flexible savings plans
                                and rewarding jewellery schemes designed for every occasion.
                            </p>
                        </div>
                        <!-- About Footer Content End -->

                        <!-- Footer Newsletter Form Start -->
                        {{-- <div class="footer-newsletter-form">
                            <form id="newslettersForm" action="#" method="POST">
                                <div class="form-group">
                                    <input type="email" name="mail" class="form-control" id="mail"
                                        placeholder="Enter Your E-mail " required="">
                                    <button type="submit" class="newsletter-btn"><img
                                            src="{{asset('website')}}/images/arrow-primary.svg" alt=""></button>
                                </div>
                            </form>
                        </div> --}}
                        <!-- Footer Newsletter Form End -->
                    </div>
                    <!-- Aobut Footer End -->
                </div>

                <div class="col-xl-8">
                    <!-- Footer Links Box Start -->
                    <div class="footer-links-box">
                        <!-- Footer Links Start -->
                        <div class="footer-links">
                            <h2>Quick Links</h2>
                            <ul>
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li><a href="{{ route('about') }}">About Us</a></li>
                                <li><a href="{{ route('shop') }}">Our Collection</a></li>
                                <li><a href="{{ route('blog') }}">Blog</a></li>
                                <li><a href="{{ route('schemes') }}">Schemes</a></li>
                                <li><a href="{{ route('contact') }}">Contact Us</a></li>
                            </ul>
                        </div>
                        <!-- Footer Links End -->

                        <!-- Footer Links Start -->
                        <div class="footer-links">
                            <h2>Customer Support</h2>
                            <ul>
                                <li><a href="javascript:void(0);">Shipping & Delivery</a></li>
                                <li><a href="javascript:void(0);">Returns & Exchanges</a></li>
                                <li><a href="javascript:void(0);">Cancellation Policy</a></li>
                                <li><a href="javascript:void(0);">Privacy Policy</a></li>
                                <li><a href="javascript:void(0);">Terms & Conditions</a></li>
                            </ul>
                        </div>
                        <!-- Footer Links End -->

                        <!-- Footer Links Start -->
                        <div class="footer-links footer-contact-box">
                            <h2>Contact Information</h2>
                            <!-- Footer Contact Item List Start -->
                            <div class="footer-contact-items-list">
                                <!-- Footer Contact Item Start -->
                                <div class="footer-contact-item">
                                    <div class="icon-box">
                                        <img src="{{asset('website')}}/images/icon-phone-white.svg" alt="">
                                    </div>
                                    <div class="footer-contact-item-content">
                                        <h3>Phone:</h3>
                                        <p><a href="tel:9876543210">9876543210</a></p>
                                    </div>
                                </div>
                                <!-- Footer Contact Item End -->

                                <!-- Footer Contact Item Start -->
                                <div class="footer-contact-item">
                                    <div class="icon-box">
                                        <img src="{{asset('website')}}/images/icon-location-white.svg" alt="">
                                    </div>
                                    <div class="footer-contact-item-content">
                                        <h3>Email:</h3>
                                        <p><a href="mailto:goldpot@gmail.com">goldpot@gmail.com</a></p>
                                    </div>
                                </div>
                                <!-- Footer Contact Item End -->
                            </div>
                            <!-- Footer Contact Item List End -->
                        </div>
                        <!-- Footer Links End -->
                    </div>
                    <!-- Footer Links Box End -->
                </div>
            </div>
        </div>

        <!-- Footer Copyright Start -->
        <div class="footer-copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Footer Copyright Text Start -->
                        <div class="footer-copyright-text">
                            <p>Copyright © 2026 All Rights Reserved.</p>
                        </div>
                        <!-- Footer Copyright Text End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Copyright End -->
    </footer>
    <!-- Main Footer End -->

    <!-- Jquery Library File -->
    <script src="{{asset('website')}}/js/jquery-3.7.1.min.js"></script>
    <!-- Bootstrap js file -->
    <script src="{{asset('website')}}/js/bootstrap.min.js"></script>
    <!-- Validator js file -->
    <script src="{{asset('website')}}/js/validator.min.js"></script>
    <!-- SlickNav js file -->
    <script src="{{asset('website')}}/js/jquery.slicknav.js"></script>
    <!-- Swiper js file -->
    <script src="{{asset('website')}}/js/swiper-bundle.min.js"></script>
    <!-- Counter js file -->
    <script src="{{asset('website')}}/js/jquery.waypoints.min.js"></script>
    <script src="{{asset('website')}}/js/jquery.counterup.min.js"></script>
    <!-- Magnific js file -->
    <script src="{{asset('website')}}/js/jquery.magnific-popup.min.js"></script>
    <!-- SmoothScroll -->
    <script src="{{asset('website')}}/js/SmoothScroll.js"></script>
    <!-- Parallax js -->
    <script src="{{asset('website')}}/js/parallaxie.js"></script>
    <!-- MagicCursor js file -->
    <script src="{{asset('website')}}/js/gsap.min.js"></script>
    <script src="{{asset('website')}}/js/magiccursor.js"></script>
    <!-- Text Effect js file -->
    <script src="{{asset('website')}}/js/SplitText.min.js"></script>
    <script src="{{asset('website')}}/js/ScrollTrigger.min.js"></script>
    <!-- YTPlayer js File -->
    <script src="{{asset('website')}}/js/jquery.mb.YTPlayer.min.js"></script>
    <!-- Wow js file -->
    <script src="{{asset('website')}}/js/wow.min.js"></script>
    <!-- Main Custom js file -->
    <script src="{{asset('website')}}/js/function.js"></script>
</body>

</html>