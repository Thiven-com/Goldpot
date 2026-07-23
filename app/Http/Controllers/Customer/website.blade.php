<!DOCTYPE html>
<html lang="zxx">

<head>
    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="eCommerce,shop,fashion">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--====== Title ======-->
    <title>Veena Silks</title>
    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{ asset($site->site_logo) }}" type="image/png">
    <!--====== Google Fonts ======-->
    <link
        href="https://fonts.googleapis.com/css2?family=Aoboshi+One&family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap"
        rel="stylesheet">
    <!--====== Flaticon css ======-->
    <link rel="stylesheet" href="{{ asset('website') }}/assets/fonts/flaticon/flaticon_pesco.css">
    <!--====== FontAwesome css ======-->
    <link rel="stylesheet" href="{{ asset('website') }}/assets/fonts/fontawesome/css/all.min.css">
    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="{{ asset('website') }}/assets/vendor/bootstrap/css/bootstrap.min.css">
    <!--====== Slick-popup css ======-->
    <link rel="stylesheet" href="{{ asset('website') }}/assets/vendor/slick/slick.css">
    <!--====== Nice Select css ======-->
    <link rel="stylesheet" href="{{ asset('website') }}/assets/vendor/nice-select/css/nice-select.css">
    <!--====== Magnific-popup css ======-->
    <link rel="stylesheet" href="{{ asset('website') }}/assets/vendor/magnific-popup/dist/magnific-popup.css">
    <!--====== Jquery UI css ======-->
    <link rel="stylesheet" href="{{ asset('website') }}/assets/vendor/jquery-ui/jquery-ui.min.css">
    <!--====== Animate css ======-->
    <link rel="stylesheet" href="{{ asset('website') }}/assets/vendor/aos/aos.css">
    <!--====== Default css ======-->
    <link rel="stylesheet" href="{{ asset('website') }}/assets/css/default.css">
    <!--====== Style css ======-->
    <link rel="stylesheet" href="{{ asset('website') }}/assets/css/style.css">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

    <style>
        .bottom-nav {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 65px;
            /* background: #c62d83; */
            border-top: 1px solid #ddd;
            display: flex;
            justify-content: space-around;
            align-items: center;
            z-index: 9999;
            background: linear-gradient(135deg, #c62d83, #a61d6d);
            border-radius: 18px;
            box-shadow: 0 6px 18px rgba(198, 45, 131, 0.35);
            border: 1px solid rgba(255, 255, 255, 0.15);
        }

        .bottom-nav .nav-item {
            text-decoration: none;
            color: white;
            display: flex;
            flex-direction: column;
            align-items: center;
            font-size: 12px;
            position: relative;
        }

        .bottom-nav .nav-item i {
            font-size: 22px;
            margin-top: 10px;
        }

        .cart-count {
            position: absolute;
            top: -2px;
            right: -10px;
            background: red;
            color: #fff;
            border-radius: 50%;
            width: 18px;
            height: 18px;
            font-size: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        body {
            padding-bottom: 70px;
        }

        /* Hide on desktop */
        @media(min-width:768px) {
            .bottom-nav {
                display: none;
            }
        }
    </style>




    <style>
        .current {
            width: 150px;
        }

        .swal2-popup.swal2-toast>* {
            display: none;
        }
    </style>
    <style>
        #toast-message {
            opacity: 1;
            transition: opacity 0.5s ease;
        }

        .fade-out {
            opacity: 0;
        }
    </style>
    <style>
        .search-header-main {
            background: #1c2029;
            /* background: #282d31; */
        }

        .product-search-category form {
            background: white;
        }

        .hotline-support .icon {
            color: white;
        }

        .header-navigation .main-menu ul>li>a {
            color: white;
        }

        .header-navigation .main-menu ul>li>a:hover {
            color: white;
        }

        .nav-right-item.style-one i {
            color: white;
        }

        .nav-right-item.style-one ul li:not(:last-child):after {
            color: white;
        }

        .nav-right-item.style-one .pro-count {
            color: white;
        }

        @media (max-width: 991px) {
            .header-navigation .pesco-nav-menu .main-menu ul li a {
                color: #c62d83;
            }

            .nav-right-item.style-one i {
                color: #c62d83;

            }
        }
    </style>

    <style>
        .products-grid {
            display: grid !important;
            grid-template-columns: repeat(6, 1fr);
            gap: 10px;
            margin: 20px;
            padding-left: 70px;
            padding-right: 70px;
        }

        .products-item {
            border: 1px solid #eee;
            border-radius: 10px;
            padding: 10px;
            background: #fff;
            width: 100%;
            height: fit-content;
        }

        /* Mobile View */
        @media (max-width:768px) {

            .products-grid {
                grid-template-columns: repeat(2, 1fr) !important;
                gap: 8px;
                margin: 10px;
                padding-left: 10px;
                padding-right: 10px;
            }

            .products-item {
                padding: 6px;
            }

            .products-item p {
                font-size: 11px !important;
            }

            .products-item span {
                font-size: 10px !important;
            }
        }
    </style>

    <style>
        .products-grid {
            display: flex;
            gap: 10px;
            overflow-x: auto;
            scroll-behavior: smooth;
            padding: 10px;
            scrollbar-width: none;
        }

        .products-item {
            border: 1px solid #eee;
            border-radius: 10px;
            padding: 10px;
            background: #fff;
            min-width: 16%;
            flex-shrink: 0;
        }

        /* Mobile View */
        @media (max-width:768px) {

            .products-item {
                min-width: 48%;
            }

            .products-item p {
                font-size: 12px !important;
            }

            .products-item span {
                font-size: 11px !important;
            }
        }
    </style>
    @php
        $categories = App\Models\Category::latest()->take(6)->get();
    @endphp
    <!--====== Preloader ======-->
    <div class="preloader">
        <div class="loader">
            <img src="{{ asset('website') }}/assets/images/loader.gif" alt="Loader">
        </div>
    </div>
    <!--====== Start Overlay ======-->
    <div class="offcanvas__overlay"></div>
    <!--====== Start Sidemenu-wrapper-cart Area ======-->
    <div class="sidemenu-wrapper-cart">
        <div class="sidemenu-content">
            <div class="widget widget-shopping-cart">
                <h4>My cart</h4>
                <div class="sidemenu-cart-close"><i class="far fa-times"></i></div>
                <div class="widget-shopping-cart-content">
                    <ul class="pesco-mini-cart-list">
                        <li class="sidebar-cart-item">
                            <a href="#" class="remove-cart"><i class="far fa-trash-alt"></i></a>
                            <a href="{{ route('shop') }}">
                                <img src="{{ asset('website') }}/assets/images/products/cart-1.jpg" alt="cart image">
                                leggings with mesh panels
                            </a>
                            <span class="quantity">1 × <span><span class="currency">$</span>940.00</span></span>
                        </li>
                        <li class="sidebar-cart-item">
                            <a href="#" class="remove-cart"><i class="far fa-trash-alt"></i></a>
                            <a href="{{ route('shop') }}">
                                <img src="{{ asset('website') }}/assets/images/products/cart-2.jpg" alt="cart image">
                                Summer dress with belt
                            </a>
                            <span class="quantity">1 × <span><span class="currency">$</span>940.00</span></span>
                        </li>
                        <li class="sidebar-cart-item">
                            <a href="#" class="remove-cart"><i class="far fa-trash-alt"></i></a>
                            <a href="{{ route('shop') }}">
                                <img src="{{ asset('website') }}/assets/images/products/cart-3.jpg" alt="cart image">
                                Floral print sundress
                            </a>
                            <span class="quantity">1 × <span><span class="currency">$</span>940.00</span></span>
                        </li>
                        <li class="sidebar-cart-item">
                            <a href="#" class="remove-cart"><i class="far fa-trash-alt"></i></a>
                            <a href="{{ route('shop') }}">
                                <img src="{{ asset('website') }}/assets/images/products/cart-4.jpg" alt="cart image">
                                Sheath Gown Red Colors
                            </a>
                            <span class="quantity">1 × <span><span class="currency">$</span>940.00</span></span>
                        </li>
                    </ul>
                    <div class="cart-mini-total">
                        <div class="cart-total">
                            <span><strong>Subtotal:</strong></span> <span class="amount">1 × <span><span
                                        class="currency">$</span>940.00</span></span>
                        </div>
                    </div>
                    <div class="cart-button-box">
                        <a href="{{ url('checkout') }}" class="theme-btn style-one">Proceed to checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </div><!--====== End Sidemenu-wrapper-cart Area ======-->
    <!--====== Start Header Section ======-->
    <header class="header-area">
        <!--===  Search Header Main  ===-->
        <div class="search-header-main">
            <div class="container">
                <!--===  Search Header Inner  ===-->
                <div class="search-header-inner">
                    <!--=== Site Branding  ===-->
                    <div class="site-branding">
                        <a href="{{ url('/') }}" class="brand-logo"><img src="{{ asset($site->logo) }}"
                                style="max-width: 155px;" alt="Logo"></a>
                    </div>
                    <!--===  Product Search Category  ===-->
                    <div class="product-search-category">
                        <form action="{{ route('shop') }}">
                            <select class="shops current" name="category[]">
                                <option>All Categories</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->title }}</option>
                                @endforeach
                            </select>

                            <div class="form-group">
                                <input type="text" name="search" value="{{ request('search') }}"
                                    placeholder="Enter Search Products" onclick="openSearch()" readonly>
                                <button class="search-btn"><i class="far fa-search"></i></button>
                            </div>
                        </form>
                    </div>
                    <!--===  Hotline Support  ===-->
                    <div class="hotline-support item-ltr">
                        <div class="icon">
                            <i class="flaticon-support"></i>
                        </div>
                        <div class="info">
                            <span class="text-white">24/7 Support</span>
                            <h5 class="text-white"><a href="tel:{{ $site->phone ?? '' }}">{{ $site->phone ?? '' }}</a>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--===  Header Navigation  ===-->
        <div class="header-navigation style-one">
            <div class="container">
                <!--=== Primary Menu ===-->
                <div class="primary-menu">
                    <div class="site-branding d-lg-none d-block">
                        <a href="{{ route('home') }}" class="brand-logo"><img src="{{ asset($site->logo) }}"
                                style="max-width: 155px;" alt="Logo"></a>
                    </div>
                    <!--=== Nav Inner Menu ===-->
                    <div class="nav-inner-menu">
                        <!--=== Main Category ===-->
                        <div class="main-categories-wrap d-none d-lg-block">
                            <a class="categories-btn-active" href="#">
                                <span class="fas fa-list"></span><span class="text">Products Category<i
                                        class="fas fa-angle-down"></i></span>
                            </a>
                            <div class="categories-dropdown-wrap categories-dropdown-active">
                                <div class="categori-dropdown-item">

                                    <ul>
                                        @foreach ($categories as $category)
                                            <li>
                                                <a href="{{ route('shop', ['category[]' => $category->id]) }}"><img
                                                        src="{{ asset($category->image) }}"
                                                        alt="Shirts">{{ $category->title }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>

                            </div>
                        </div>
                        <!--=== Pesco Nav Main ===-->
                        <div class="pesco-nav-main">
                            <!--=== Pesco Nav Menu ===-->
                            <div class="pesco-nav-menu">
                                <!--=== Responsive Menu Search ===-->
                                {{-- <div class="nav-search mb-40 d-block d-lg-none">
                                    <div class="form-group">
                                        <input type="search" class="form_control" placeholder="Search Here"
                                            name="search">
                                        <button class="search-btn"><i class="far fa-search"></i></button>
                                    </div>
                                </div> --}}
                                <!--=== Responsive Menu Tab ===-->
                                <div class="pesco-tabs style-three d-block d-lg-none">
                                    <ul class="nav nav-tabs mb-30">
                                        <li>
                                            <button class="nav-link active" data-bs-toggle="tab"
                                                data-bs-target="#nav1">Menu</button>
                                        </li>
                                        <li>
                                            <button class="nav-link" data-bs-toggle="tab"
                                                data-bs-target="#nav2">Category</button>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="nav1">
                                            <nav class="main-menu">
                                                <ul>
                                                    <li class="menu-item has-children"><a href="{{ url('/') }}">Home</a>

                                                    </li>
                                                    <li class="menu-item has-children"><a
                                                            href="{{ route('shop') }}">Shop</a>
                                                    </li>
                                                    <li class="menu-item has-children"><a
                                                            href="{{ url('blog') }}">Blog</a>
                                                    </li>
                                                    <li class="menu-item has-children"><a href="#">Pages</a>
                                                        <ul class="sub-menu">
                                                            <li><a href="{{ url('about') }}">About Us</a></li>
                                                            <li><a href="{{ url('faq') }}">Faqs</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="menu-item"><a href="{{ url('contact') }}">Contact</a>
                                                    </li>
                                                    @php
                                                        $customer = \App\Models\Customer::where('id', Auth::guard('customer')->id())->first();
                                                    @endphp
                                                    @if (isset($customer->id))

                                                        <li class="menu-item has-children"><a href="#">Account</a>
                                                            <ul class="sub-menu">
                                                                <li><a href="{{ route('customer.orders') }}">Orders</a></li>
                                                                <li><a
                                                                        href="{{ route('customer.addresses') }}">Addresses</a>
                                                                </li>
                                                                <li><a href="{{ route('logout') }}">Logout</a></li>
                                                            </ul>
                                                        </li>
                                                    @else
                                                        <li class="menu-item has-children"><a
                                                                href="{{ route('login') }}">Login</a>
                                                        </li>
                                                    @endif
                                                </ul>
                                            </nav>
                                        </div>
                                        <div class="tab-pane fade" id="nav2">
                                            <div class="categori-dropdown-item">
                                                <ul>
                                                    @foreach ($categories as $category)
                                                        <li>
                                                            <a href="{{ route('shop', ['category[]' => $category->id]) }}">
                                                                <img src="{{ asset($category->image) }}"
                                                                    alt="Shirts">{{ $category->title }}</a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--===  Hotline Support  ===-->
                                <div class="hotline-support d-flex d-lg-none mt-30">

                                    <div class="icon">
                                        <i class="flaticon-support"></i>
                                    </div>
                                    <div class="info">
                                        {{-- <span>24/7 Support</span> --}}
                                        <h5><a href="tel:{{ $site->phone ?? '' }}">{{ $site->phone ?? '' }}</a></h5>
                                    </div>
                                </div>
                                @php
                                    use Illuminate\Support\Facades\Auth;
                                    $wishlistCount = Auth::guard('customer')->check()
                                        ? \App\Models\WishlistItem::where('user_id', Auth::guard('customer')->id())
                                            ->count()
                                        : 0;
                                    $cartCount = Auth::guard('customer')->check()
                                        ? \App\Models\CartItem::where('user_id', Auth::guard('customer')->id())
                                            ->count()
                                        : 0;
                                    $customer = \App\Models\Customer::where('id', Auth::guard('customer')->id())->first();
                                @endphp
                                <!--=== Main Menu ===-->
                                <nav class="main-menu d-none d-lg-block">
                                    <ul>
                                        <li class="menu-item has-children"><a href="{{ url('/') }}">Home</a>

                                        </li>
                                        <li class="menu-item has-children"><a href="{{ route('shop') }}">Shop</a>

                                        </li>
                                        <li class="menu-item has-children"><a href="{{ url('blog') }}">Blog</a>

                                        </li>
                                        <li class="menu-item has-children"><a href="#">Pages</a>
                                            <ul class="sub-menu">
                                                <li><a href="{{ url('about') }}">About Us</a></li>
                                                <li><a href="{{ url('faq') }}">Faqs</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item"><a href="{{ url('contact') }}">Contact</a></li>
                                        @if (isset($customer->id))

                                            <li class="menu-item has-children"><a href="#">Account</a>
                                                <ul class="sub-menu">
                                                    <li><a href="{{ route('customer.orders') }}">Orders</a></li>
                                                    <li><a href="{{ route('customer.addresses') }}">Addresses</a></li>
                                                    <li><a href="{{ route('logout') }}">Logout</a></li>
                                                </ul>
                                            </li>
                                        @else
                                            <li class="menu-item has-children"><a href="{{ route('login') }}">Login</a>
                                            </li>
                                        @endif
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <!--=== Nav Right Item ===-->
                    <div class="nav-right-item style-one">

                        <ul>
                            <li>
                                <a href="{{ route('wishlist') }}" class="wishlist-btn d-lg-block d-none">
                                    <i class="far fa-heart"></i>
                                    <span class="pro-count">{{ $wishlistCount ?? 0 }}</span>
                                </a>
                            </li>
                            {{-- <li><i class="far fa-search">search</i></li> --}}
                            {{-- <li>
                                <div class="cart-button d-flex d-lg-none md-block">
                                    <a class="icon" value="{{ request('search') }}" onclick="openSearch()">
                                        <i class="far fa-search"></i>
                                    </a>
                                </div>
                            </li> --}}

                            <li>
                                <div class="cart-button d-flex d-none d-lg-block align-items-center">
                                    <a href="{{ url('cart') }}" class="icon">
                                        <i class="fas fa-shopping-cart"></i>
                                        <span class="pro-count">{{ $cartCount ?? 0 }}</span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                        <div class="navbar-toggler d-block d-lg-none">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header><!--====== End Header Section ======-->



    @yield('content')


    @include('sweetalert::alert')



    <!--====== Start Footer Main  ======-->
    <footer class="footer-main">
        <!--=== Footer Bg Wrapper  ===-->
        <div class="footer-bg-wrapper gray-bg" style="padding-top: 30px;">
            <div class="footer-shape shape-one"><span></span></div>
            <svg id="footer-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1920 75" fill="none">
                <path
                    d="M1888.99 40.9061C1901.65 33.5506 1917.87 10.0999 1920 0.000160217L2.48878 0.110695C-18.5686 5.37782 100.829 31.8098 104.136 32.5745C126.908 37.8407 182.163 45.7157 196.02 59.5798C199.049 62.6106 214.802 72.2205 222.15 72.2205C228.696 72.2205 237.893 62.3777 241.388 59.5798C254.985 48.6964 317.621 62.748 338.154 55.5577C378.089 41.5729 396.6 21.3246 452.148 27.4033C469.55 29.3076 497.787 39.4201 516.467 36.022C529.695 33.6155 539.612 26.7953 554.369 23.9558C576.978 19.6057 584.786 12.6555 612.371 13.0388C629.18 13.2724 648.084 27.6499 658.6 33.8673C672.059 41.8242 673.268 47.0554 692.77 41.4805C711.954 35.9964 746.756 38.27 766.852 40.0441C779.483 41.1593 819.866 52.3111 831.458 47.8009C837.236 45.5528 840.64 43.5162 847.537 41.3369C869.486 34.402 905.397 34.0022 929.946 38.6077C947.224 41.8489 987.666 45.9365 999.721 52.9722C1005.16 56.1489 1004.78 60.6539 1010.35 63.6019C1018.09 67.7037 1021.56 68.3083 1029.01 67.4803C1042.77 65.9505 1045.29 61.7272 1056.86 58.1434C1090.94 47.59 1121.71 32.7536 1160.52 26.5415C1182.98 22.9457 1193.92 36.1401 1209.04 41.4806C1240.16 52.468 1262.92 57.9972 1299.78 49.2374C1331.73 41.6466 1369.13 23.3813 1405.73 23.3813C1419.55 23.3813 1427.96 32.734 1435.31 37.4585C1451.38 47.7919 1467 56.9943 1493.89 56.9943C1532.36 56.9943 1544.2 49.9853 1574.29 39.0386C1588.58 33.8384 1616.86 22.826 1635.73 23.3813C1651.4 23.8424 1656.97 43.603 1667.89 48.6629C1683.26 55.7835 1710.61 49.5903 1723.88 43.7789C1736.22 38.3771 1758.43 20.6985 1777.29 30.1327C1788.48 35.7274 1794.71 53.9926 1801.12 61.5909C1815.62 78.7687 1819.96 77.5598 1843.05 68.4859C1861.58 61.2028 1873.63 49.8315 1888.99 40.9061Z"
                    fill="#FFFAF3" />
            </svg>
            <!--=== Footer Widget Area  ===-->
            <div class="footer-widget-area pb-20">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3 col-sm-6">
                            <!--=== Footer Widget  ===-->
                            <div class="footer-widget about-company-widget mb-40" data-aos="fade-up" data-aos-delay="10"
                                data-aos-duration="1000">
                                <div class="widget-content">
                                    <a href="{{ url('/') }}" class="footer-logo"><img
                                            src="{{ asset($site->site_logo) }}" alt="Brand Logo"></a>
                                    <p>{{ $site->address ?? '' }}</p>
                                    <ul class="ct-info-list mb-30">
                                        <li>
                                            <i class="fas fa-envelope"></i>
                                            <a href="mailto:{{ $site->email ?? '' }}">{{ $site->email ?? '' }}</a>
                                        </li>
                                        <li>
                                            <i class="fas fa-phone-alt"></i>
                                            <a href="tel:{{ $site->phone ?? '' }}">{{ $site->phone ?? '' }}</a>
                                        </li>
                                    </ul>
                                    <ul class="social-link">
                                        <li>
                                            <span>Find Us:</span>
                                        </li>
                                        <li>
                                            <a href="{{ url('https://www.facebook.com/people/Veena-silks/61560708047099/') }}"
                                                target="_blank"><i class="fab fa-facebook-f"></i></a>
                                        </li>
                                        <li>
                                            <a href="{{ url('https://www.instagram.com/veena__silks/') }}"
                                                target="_blank"><i class="fab fa-instagram"></i></a>
                                        </li>
                                        <li>
                                            <a href="{{ url('https://www.youtube.com/@veenasilk') }}" target="_blank"><i
                                                    class="fab fa-youtube"></i></a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 col-sm-6">
                            <!--=== Footer Widget ===-->
                            <div class="footer-widget footer-nav-widget mb-40" data-aos="fade-up" data-aos-delay="15"
                                data-aos-duration="1200">
                                <div class="widget-content">
                                    <h4 class="widget-title">Social</h4>
                                    <ul class="widget-menu">
                                        <li><img src="{{ asset('website') }}/assets/images/icon/star-3.svg"
                                                alt="star icon"><a
                                                href="{{ url('https://www.instagram.com/veena__silks/') }}"
                                                target="_blank">Instagram</a></li>
                                        <li><img src="{{ asset('website') }}/assets/images/icon/star-3.svg"
                                                alt="star icon"><a
                                                href="{{ url('https://www.facebook.com/people/Veena-silks/61560708047099/') }}"
                                                target="_blank">Facebook</a></li>
                                        <li><img src="{{ asset('website') }}/assets/images/icon/star-3.svg"
                                                alt="star icon"><a
                                                href="{{ url('https://www.youtube.com/@veenasilk') }}"
                                                target="_blank">YouTube</a></li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 col-sm-6">
                            <!--=== Footer Widget ===-->
                            <div class="footer-widget footer-nav-widget mb-40" data-aos="fade-up" data-aos-delay="20"
                                data-aos-duration="1400">
                                <div class="widget-content">
                                    <h4 class="widget-title">Usefull Link</h4>
                                    <ul class="widget-menu">
                                        <li><img src="{{ asset('website') }}/assets/images/icon/star-3.svg"
                                                alt="star icon"><a href="{{ route('privacy') }}">Privacy Policy</a></li>
                                        <li><img src="{{ asset('website') }}/assets/images/icon/star-3.svg"
                                                alt="star icon"><a href="{{ route('refund') }}">Returns</a></li>
                                        <li><img src="{{ asset('website') }}/assets/images/icon/star-3.svg"
                                                alt="star icon"><a href="{{ route('terms') }}">Terms & Conditions</a>
                                        </li>
                                        <li><img src="{{ asset('website') }}/assets/images/icon/star-3.svg"
                                                alt="star icon"><a href="{{ route('contact') }}">Contact Us</a></li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6">
                            <!--=== Footer Widget  ===-->
                            <div class="footer-widget footer-recent-post-widget" data-aos="fade-up" data-aos-delay="25"
                                data-aos-duration="1600">
                                <h4 class="widget-title">Recent Post</h4>
                                <div class="widget-content">
                                    @php
                                        $blogs = \App\Models\Blog::inRandomOrder()->take(3)->get();
                                    @endphp
                                    @foreach ($blogs as $blog)
                                        <div class="recent-post-item">
                                            <div class="thumb">
                                                <img src="{{ asset($blog->image) }}" alt="post thumb">
                                            </div>
                                            <div class="content">
                                                <h4><a
                                                        href="javascript:void(0)">{{ mb_strimwidth($blog->title, 0, 50, '..') }}</a>
                                                </h4>
                                                <span><a
                                                        href="javascript:void(0)">{{ Carbon\Carbon::parse($blog->created_at)->format('F d,Y') }}</a></span>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--=== Footer Copyright  ===-->
            <div class="copyright-area">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="copyright-text">
                                <p>&copy; {{ Carbon\Carbon::now()->format('Y') }}. All rights reserved by
                                    <span>{{ $site->site_name ?? '' }}</span> , Developed By <a
                                        href="https://www.thiven.com/" target="_blank"
                                        rel="noopener noreferrer"><span>Thiven</span></a>
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="payment-method text-lg-end">
                                <a href="#"><img src="{{ asset('website') }}/assets/images/footer/payment-method.png"
                                        alt="payment-method"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer><!--====== End Footer Main  ======-->

    <div id="searchBackdrop" style="
    position:fixed;
    top:0;
    left:0;
    width:100%;
    height:1000vh;
    background:rgba(0, 0, 0, 0.78);
    z-index:9998;
    display:none;
"></div>

    <!-- SEARCH OVERLAY -->
    <div id="searchOverlay" style="
  position:fixed;
  top:0;
  left:0;
  width:100%;
  height:80vh;
  background:#fff;
  z-index:9999;
  display:none;
  padding:10px;
  overflow-y:auto;
  border-radius:0 0 20px 20px;
">

        <div style="max-width:1200px;margin:auto;">

            <!-- Header -->
            <div style="display:flex;justify-content:space-between;align-items:center;">
                <h2 class="d-md-block d-none">What are you looking for?</h2>
                <span onclick="closeSearch()" style="font-size:24px;cursor:pointer;">✕</span>
            </div>

            <!-- Search Box -->
            <form action="{{ route('shop') }}">
                <div style="margin:10px 0;position:relative;">
                    <input type="text" name="search" placeholder="Search for products"
                        value="{{ old('search', request('search')) }}"
                        style="width:100%;padding:10px;border:1px solid #ddd;border-radius:5px;" autofocus>
                    <button type="submit" style="
                position:absolute;
                right:10px;
                top:2px;
                padding:10px 20px;
                border:none;
                background:none;
                cursor:pointer;
            ">
                        <i class="far fa-search mb-2px"></i>
                    </button>
                </div>
            </form>
        </div><br>


        {{-- <!-- Popular Searches -->
        <div style="margin-bottom:20px;">
            <span>Popular Searches:</span>
            <a href="{{ route('shop', ['search' => 'saree']) }}" style="margin-left:10px;">Saree</a>
            <a href="{{ route('shop', ['search' => 'silk']) }}" style="margin-left:10px;">Silks</a>
            <a href="{{ route('shop', ['search' => 'kanchipuram']) }}" style="margin-left:10px;">Kanchipuram</a>
        </div> --}}

        <!-- Products (Dynamic Laravel) -->
        <h5 class="product-grid" style="
    grid-template-columns:repeat(6,1fr);
    gap:10px;
    max-width:1200px;
    margin:0 auto;
">Popular Products</h5>

        <div class="products-grid">

            @php
                $myproducts = App\Models\Product::where('title', 'like', '%' . request('search') . '%')->latest()->take(6)->get();
            @endphp

            @foreach ($myproducts->shuffle() as $product)

                <div class="product-item">

                    <!-- Image -->
                    <div style="position:relative;">
                        <a href="{{ route('product-details', $product->slug) }}">
                            <img src="{{ asset($product->image) }}" style="width:100%;border-radius:8px;">
                        </a>
                    </div>

                    <!-- Info -->
                    <div style="margin-top:8px;">

                        <a href="{{ route('product-details', $product->slug) }}" style="text-decoration:none;color:#000;">

                            <p style="font-size:14px;margin:0;">
                                {{ $product->title }}
                            </p>

                        </a>

                        <div style="margin-top:5px;">

                            <span style="color:#999;text-decoration:line-through;font-size:13px;">
                                ₹{{ $product->variant->actual_price ?? '' }}
                            </span>

                            <span style="color:#ff6600;font-weight:bold;margin-left:5px;">
                                ₹{{ $product->variant->price ?? '' }}
                            </span>

                        </div>

                    </div>

                </div>

            @endforeach

        </div>

    </div>
    </div>

    <!---buttom bar---->
    <div class="bottom-nav">

        <a href="{{ route('home') }}" class="nav-item active">
            <i class="bi bi-house"></i>
            <span>Home</span>
        </a>

        <!-- Search Button -->
        <a href="javascript:void(0)" class="nav-item" onclick="openSearch()">
            <i class="bi bi-search"></i>
            <span>Search</span>
        </a>

        <!-- Cart -->
        <a href="{{ url('cart') }}" class="nav-item">
            <div style="position:relative;">
                <i class="bi bi-cart"></i>
            </div>

            <span>Cart</span>
        </a>

    </div>


    <script>
        function openSearch() {
            document.getElementById("searchOverlay").style.display = "block";
            document.body.style.overflow = "hidden"; // disable scroll
        }

        function closeSearch() {
            document.getElementById("searchOverlay").style.display = "none";
            document.body.style.overflow = "auto";
        }
    </script>
    <script>
        function openSearch() {
            document.getElementById("searchOverlay").style.display = "block";
            document.getElementById("searchBackdrop").style.display = "block";
            document.body.style.overflow = "hidden";
        }

        function closeSearch() {
            document.getElementById("searchOverlay").style.display = "none";
            document.getElementById("searchBackdrop").style.display = "none";
            document.body.style.overflow = "auto";
        }
    </script>

    <!--====== Back To Top  ======-->
    <div class="back-to-top"><i class="far fa-angle-up"></i></div>
    <!--====== Jquery js ======-->
    <script src="{{ asset('website') }}/assets/vendor/jquery-3.7.1.min.js"></script>
    <!--====== Bootstrap js ======-->
    <script src="{{ asset('website') }}/assets/vendor/popper/popper.min.js"></script>
    <!--====== Bootstrap js ======-->
    <script src="{{ asset('website') }}/assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--====== Slick js ======-->
    <script src="{{ asset('website') }}/assets/vendor/slick/slick.min.js"></script>
    <!--====== Magnific js ======-->
    <script src="{{ asset('website') }}/assets/vendor/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
    <!--====== Nice-select js ======-->
    <script src="{{ asset('website') }}/assets/vendor/nice-select/js/jquery.nice-select.min.js"></script>
    <!--====== Jquery Ui js ======-->
    <script src="{{ asset('website') }}/assets/vendor/jquery-ui/jquery-ui.min.js"></script>
    <!--====== SimplyCountdown js ======-->
    <script src="{{ asset('website') }}/assets/vendor/simplyCountdown.min.js"></script>
    <!--====== Aos js ======-->
    <script src="{{ asset('website') }}/assets/vendor/aos/aos.js"></script>
    <!--====== Main js ======-->
    <script src="{{ asset('website') }}/assets/js/theme.js"></script>
</body>

</html>