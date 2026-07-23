@extends('layouts.website')
@section('content')
    <style>
        .user-icon {
            width: 45px;
            height: 45px;
            border-radius: 50%;
            background: #f5f5f5;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 2px solid #d4af37;
        }

        .user-icon i {
            font-size: 30px;
            color: #d4af37;
        }
    </style>
    <style>
        .scheme-section {
            background: #faf7f2;
        }

        .scheme-subtitle {
            color: #C8A13A;
            font-weight: 600;
            letter-spacing: 2px;
            text-transform: uppercase;
        }

        .scheme-title {
            font-size: 42px;
            font-weight: 700;
            margin-top: 10px;
            color: #1d1d1d;
        }

        .scheme-desc {
            color: #666;
            max-width: 700px;
            margin: auto;
        }

        .scheme-card {
            background: #fff;
            border-radius: 22px;
            overflow: hidden;
            transition: .4s;
            box-shadow: 0 15px 35px rgba(0, 0, 0, .08);
            height: 100%;
        }

        .scheme-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 30px 60px rgba(0, 0, 0, .15);
        }

        .scheme-image {
            overflow: hidden;
        }

        .scheme-image img {
            width: 100%;
            height: 280px;
            object-fit: cover;
            transition: .5s;
        }

        .scheme-card:hover img {
            transform: scale(1.08);
        }

        .scheme-content {
            padding: 30px;
        }

        .scheme-badge {
            display: inline-block;
            padding: 8px 18px;
            border-radius: 30px;
            color: #fff;
            font-size: 14px;
            margin-bottom: 18px;
        }

        .gold {
            background: #dea54a;
        }

        .blue {
            background: #173d72;
        }

        .red {
            background: #8c1d2d;
        }

        .scheme-content h3 {
            font-weight: 700;
            margin-bottom: 20px;
        }

        .scheme-content ul {
            list-style: none;
            padding: 0;
            margin-bottom: 25px;
        }

        .scheme-content li {
            padding: 8px 0;
            color: #555;
        }

        .btn-gold {
            background: #dea54a;
            color: #fff;
            border-radius: 40px;
            padding: 12px;
        }

        .btn-blue {
            background: #dea54a;
            color: #fff;
            border-radius: 40px;
            padding: 12px;
        }

        .btn-red {
            background: #dea54a;
            color: #fff;
            border-radius: 40px;
            padding: 12px;
        }

        .btn:hover {
            background: #000;
            color: #fff;
            opacity: .9;
        }
    </style>

    <!-- Hero Section Start -->
    <div class="hero dark-section parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-xl-7">
                    <!-- Hero Content Start -->
                    <div class="hero-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <span class="section-sub-title wow fadeInUp">Shop • Save • Shine</span>
                            <h1 class="text-anime-style-3" data-cursor="-opaque">Shop Jewellery, Save Daily & Enjoy Smart
                                Gold Schemes</h1>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Discover premium Gold, Silver, and Diamond jewellery while enjoying flexible daily savings
                                and exclusive jewellery schemes designed to make every purchase more rewarding.
                            </p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Hero Content List Start -->
                        <div class="hero-content-list wow fadeInUp" data-wow-delay="0.4s">
                            <ul>
                                <li>Daily Savings Plans</li>
                                <li>Jewellery Purchase Schemes</li>
                                <li>Gold, Silver & Diamond Collections</li>
                            </ul>
                        </div>
                        <!-- Hero Content List End -->
                        <!-- Hero Content Body Start -->
                        <div class="hero-content-body wow fadeInUp" data-wow-delay="0.6s">
                            <!-- Hero Button Start -->
                            <div class="hero-btn">
                                <a href="{{ route('shop') }}" class="btn-default btn-highlighted">Explore Now</a>
                            </div>
                            <!-- Hero Button End -->
                        </div>
                        <!-- Hero Content Body End -->
                    </div>
                    <!-- Hero Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Hero Section End -->
    <!-- Our Best Sellers Section Start -->
    <div class="our-best-sellers">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-xl-6">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <span class="section-sub-title wow fadeInUp">Best Seller</span>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Top Selling Jewelry Collection</h2>
                    </div>
                    <!-- Section Title End -->
                </div>

                <div class="col-xl-6">
                    <!-- Section Button Start -->
                    <div class="section-btn wow fadeInUp" data-wow-delay="0.4s">
                        <a href="{{ route('shop') }}" class="btn-default">View All Collection</a>
                    </div>
                    <!-- Section Button End -->
                </div>
            </div>

            <div class="row">
                <div class="col-xl-12">
                    <!-- Top Selling Item List Start -->
                    <div class="top-selling-item-list">
                        <!-- Top Selling Item Start -->
                        @foreach($categories as $category)
                            <div class="top-selling-item wow fadeInUp">
                                <div class="top-selling-item-image">
                                    <a href="{{ route('shop', ['category[]' => $category->id]) }}" data-cursor-text="View">
                                        <figure class="image-anime">
                                            <img src="{{ asset($category->image) }}" alt="">
                                        </figure>
                                    </a>
                                </div>
                                <div class="top-selling-item-content">
                                    <h3><a href="{{ route('shop', ['category[]' => $category->id]) }}">{{$category->title}}</a>
                                    </h3>
                                </div>
                            </div>
                        @endforeach
                        <!-- Top Selling Item End -->
                    </div>
                    <!-- Top Selling Item List End -->
                </div>

                <div class="col-xl-12">
                    <!-- Top Offer Item List Start -->
                    <div class="top-offer-item-list">
                        <!-- Top offer Item Start -->
                        <div class="top-offer-item wow fadeInUp">
                            <div class="top-offer-item-content">
                                <span class="top-offer-item-title">Flat 15% Off</span>
                                <h3>Brilliant Gold Ring Collec3ion</h3>
                                <div class="top-offer-item-btn">
                                    <a href="{{ route('shop') }}" class="readmore-btn">View Collection</a>
                                </div>
                            </div>
                            <div class="top-offer-item-image">
                                <figure>
                                    <img src="{{asset('website')}}/images/top-offer-item-image-1.png" alt="">
                                </figure>
                            </div>
                        </div>
                        <!-- Top offer Item End -->

                        <!-- Top offer Item Start -->
                        <div class="top-offer-item wow fadeInUp" data-wow-delay="0.2s">
                            <div class="top-offer-item-content">
                                <span class="top-offer-item-title">Flat 15% Off</span>
                                <h3>Golden Eleganc Bracelet</h3>
                                <div class="top-offer-item-btn">
                                    <a href="{{ route('shop') }}" class="readmore-btn">View Collection</a>
                                </div>
                            </div>
                            <div class="top-offer-item-image">
                                <figure>
                                    <img src="{{asset('website')}}/images/top-offer-item-image-2.png" alt="">
                                </figure>
                            </div>
                        </div>
                        <!-- Top offer Item End -->

                        <!-- Top offer Item Start -->
                        <div class="top-offer-item wow fadeInUp" data-wow-delay="0.4s">
                            <div class="top-offer-item-content">
                                <span class="top-offer-item-title">Flat 15% Off</span>
                                <h3>Chic Necklaces for Her</h3>
                                <div class="top-offer-item-btn">
                                    <a href="{{ route('shop') }}" class="readmore-btn">View Collection</a>
                                </div>
                            </div>
                            <div class="top-offer-item-image">
                                <figure>
                                    <img src="{{asset('website')}}/images/top-offer-item-image-3.png" alt="">
                                </figure>
                            </div>
                        </div>
                        <!-- Top offer Item End -->
                    </div>
                    <!-- Top Offer Item List End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Best Sellers Section End -->

    <!-- Our Products Section Start -->
    <div class="our-products">
        <div class="container">
            <div class="row section-row">
                <div class="col-xl-12">
                    <!-- Section Title Start -->
                    <div class="section-title section-title-center">
                        <span class="section-sub-title wow fadeInUp">Our Products</span>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Explore Our Signature Jewellery Pieces</h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <!-- Product Slider Start -->
                    <div class="product-slider">
                        <div class="swiper">
                            <div class="swiper-wrapper">
                                <!-- Product Slide Start -->
                                @foreach ($products as $product)
                                    <div class="swiper-slide">
                                        <!-- Product Item Start -->
                                        <div class="product-item">
                                            <!-- Product Item Header Start -->
                                            <div class="product-item-header">
                                                <!-- Product Item Image Start -->
                                                <div class="product-item-image">
                                                    <a href="{{ route('productDetails', $product->slug) }}">
                                                        <figure>
                                                            <img src="{{ asset($product->image) }}" alt="">
                                                        </figure>
                                                    </a>
                                                </div>
                                                <!-- Product Item Image End -->

                                                <!-- Product Item Action Start -->
                                                <div class="product-item-action">
                                                    <ul>
                                                        <li class="wishlist">
                                                            <a href="javascript:void(0);"
                                                                class="hover-tooltip tooltip-left box-icon wishlistBtn"
                                                                data-id="{{ $product->variant->id }}">

                                                                <img src="{{ asset('website/images/icon-wishlist-primary.svg') }}"
                                                                    alt="">
                                                            </a>
                                                        </li>

                                                        <li class="cart">
                                                            <a href="javascript:void(0);"
                                                                class="hover-tooltip tooltip-left box-icon addCartBtn"
                                                                data-id="{{ $product->variant->id }}">

                                                                <img src="{{ asset('website/images/icon-cart-primary.svg') }}"
                                                                    alt="">
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- Product Item Action End -->
                                            </div>
                                            <!-- Product Item Header End -->

                                            <!-- Product Item Body Start -->
                                            <div class="product-item-body">
                                                <!-- Product Item Content Start -->
                                                <div class="product-item-content">
                                                    <h2 class="product-item-title"><a
                                                            href="{{ route('productDetails', $product->slug) }}">{{ $product->title }}</a>
                                                    </h2>
                                                </div>
                                                <!-- Product Item Content End -->

                                                <!-- Product Item Price Start -->
                                                <div class="product-item-price">
                                                    <h3>₹{{ $product->variant->price }}
                                                        <span>₹{{ $product->variant->actual_price }}</span>
                                                    </h3>
                                                </div>
                                                <!-- Product Item Price End -->
                                            </div>
                                            <!-- Product Item Body End -->
                                        </div>
                                        <!-- Product Item End -->
                                    </div>
                                @endforeach

                                <!-- Product Slide End -->

                            </div>
                            <div class="product-slider-btn">
                                <div class="product-slider-button-prev"></div>
                                <div class="product-slider-button-next"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Product Slider End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Products Section End -->

    <!-- Intro Video Section Start -->
    <div class="intro-video">
        <!-- Video Start -->
        <div class="intro-bg-video dark-section">
            <!-- Selfhosted Video Start -->
            <!-- <video autoplay muted playsinline loop id="introvideo"><source src="{{asset('website')}}/images/intro-bg-video.mp4" type="video/mp4"></video> -->
            <video autoplay="" muted="" playsinline="" loop="" id="introvideo">
                <source src="{{asset('website')}}/videos/intro-video.mp4">
            </video>
            <!-- Selfhosted Video End -->

            <!-- Youtube Video Start -->
            <!-- <div id="introvideo" class="player" data-property="{videoURL:'OjTRVpgtcG4',containment:'.intro-video', showControls:false, autoPlay:true, loop:true, vol:0, mute:false, startAt:0,  stopAt:296, opacity:1, addRaster:true, quality:'large', optimizeDisplay:true}"></div> -->
            <!-- Youtube Video End -->
        </div>
        <!-- Video End -->

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Intro Video Content Start -->
                    <div class="intro-video-content-box">
                        <!-- Video Play Button Start -->
                        <div class="video-play-button" data-cursor-text="Play">
                            <a href="{{asset('website')}}/videos/intro-video.mp4" class="popup-video">
                                <span class="bg-effect"><i class="fa-solid fa-play"></i></span>
                            </a>
                        </div>
                        <!-- Video Play Button End -->

                        <!-- Intro Video Item List Start -->
                        <div class="intro-video-item-list wow fadeInUp" data-wow-delay="0.2s">
                            <!-- Intro Video Item Start -->
                            <div class="intro-video-item">
                                <div class="icon-box" style="font-size: 35px">
                                    {{-- <img src="{{asset('website')}}/images/icon-intro-video-item-1.svg" alt=""> --}}
                                    🔄
                                </div>
                                <div class="intro-video-item-content">
                                    <h3>Daily Savings Plans</h3>
                                </div>
                            </div>
                            <!-- Intro Video Item End -->

                            <!-- Intro Video Item Start -->
                            <div class="intro-video-item">
                                <div class="icon-box" style="font-size: 35px">
                                    {{-- <img src="{{asset('website')}}/images/icon-intro-video-item-2.svg" alt=""> --}}
                                    🎁
                                </div>
                                <div class="intro-video-item-content">
                                    <h3>Exclusive Jewellery Schemes</h3>
                                </div>
                            </div>
                            <!-- Intro Video Item End -->

                            <!-- Intro Video Item Start -->
                            <div class="intro-video-item">
                                <div class="icon-box" style="font-size: 35px">
                                    {{-- <img src="{{asset('website')}}/images/icon-intro-video-item-3.svg" alt=""> --}}
                                    💎
                                </div>
                                <div class="intro-video-item-content">
                                    <h3>Certified Gold & Diamond</h3>
                                </div>
                            </div>
                            <!-- Intro Video Item End -->

                            <!-- Intro Video Item Start -->
                            <div class="intro-video-item">
                                <div class="icon-box" style="font-size: 35px">
                                    {{-- <img src="{{asset('website')}}/images/icon-intro-video-item-4.svg" alt=""> --}}
                                    🛡️
                                </div>
                                <div class="intro-video-item-content">
                                    <h3>Secure & Transparent Shopping</h3>
                                </div>
                            </div>
                            <!-- Intro Video Item End -->
                        </div>
                        <!-- Intro Video Item List End -->
                    </div>
                    <!-- Intro Video Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Intro Video Section End -->

    <!-- Our Promise Section Start -->
    <div class="our-promise">
        <div class="container">
            <div class="row section-row">
                <div class="col-xl-12">
                    <!-- Section Title Start -->
                    <div class="section-title section-title-center">
                        <span class="section-sub-title wow fadeInUp">Why Choose Us</span>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Trusted Jewellery. Smart Savings.</h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <!-- Promise Item List Start -->
                    <div class="promise-item-list">
                        <!-- Promise Item Start -->
                        <div class="promise-item wow fadeInUp">
                            <div class="icon-box">
                                <img src="{{asset('website')}}/images/icon-promise-item-1.svg" alt="">
                            </div>
                            <div class="promise-item-content">
                                <h3>Transparent Pricing</h3>
                            </div>
                        </div>
                        <!-- Promise Item End -->

                        <!-- Promise Item Start -->
                        <div class="promise-item wow fadeInUp" data-wow-delay="0.2s">
                            <div class="icon-box">
                                <img src="{{asset('website')}}/images/icon-promise-item-2.svg" alt="">
                            </div>
                            <div class="promise-item-content">
                                <h3>Secure Online Payments</h3>
                            </div>
                        </div>
                        <!-- Promise Item End -->

                        <!-- Promise Item Start -->
                        <div class="promise-item wow fadeInUp" data-wow-delay="0.4s">
                            <div class="icon-box">
                                <img src="{{asset('website')}}/images/icon-promise-item-3.svg" alt="">
                            </div>
                            <div class="promise-item-content">
                                <h3>Certified Gold & Diamonds</h3>
                            </div>
                        </div>
                        <!-- Promise Item End -->

                        <!-- Promise Item Start -->
                        <div class="promise-item wow fadeInUp" data-wow-delay="0.6s">
                            <div class="icon-box">
                                <img src="{{asset('website')}}/images/icon-promise-item-4.svg" alt="">
                            </div>
                            <div class="promise-item-content">
                                <h3>Flexible Savings Plans</h3>
                            </div>
                        </div>
                        <!-- Promise Item End -->

                        <!-- Promise Item Start -->
                        <div class="promise-item wow fadeInUp" data-wow-delay="0.8s">
                            <div class="icon-box">
                                <img src="{{asset('website')}}/images/icon-promise-item-5.svg" alt="">
                            </div>
                            <div class="promise-item-content">
                                <h3>Rewarding Jewellery Schemes</h3>
                            </div>
                        </div>
                        <!-- Promise Item End -->
                    </div>
                    <!-- Promise Item List End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Promise Section End -->

    <!-- Jewellery Schemes Start -->
    <section class="scheme-section py-5">
        <div class="container">

            <div class="text-center mb-5">
                <span class="scheme-subtitle">JEWELLERY SAVINGS PLANS</span>
                <h2 class="scheme-title">
                    Save Today. Own Your Dream Jewellery Tomorrow.
                </h2>
                <p class="scheme-desc">
                    Choose a jewellery savings plan that fits your budget and enjoy exclusive
                    benefits on your favourite jewellery.
                </p>
            </div>

            <div class="row g-4">

                <!-- Gold Scheme -->
                <div class="col-lg-4">
                    <div class="scheme-card">

                        <div class="scheme-image">
                            <img src="{{ asset('website') }}/images/schemes/gold-plan.png" class="img-fluid">
                        </div>

                        <div class="scheme-content">

                            <span class="scheme-badge gold">
                                Gold Saver Plan
                            </span>

                            <h3>₹500 / Month</h3>

                            <ul>
                                <li>✔ Save for 11 Months</li>
                                <li>✔ Exclusive Bonus</li>
                                <li>✔ 100% Secure</li>
                                <li>✔ Redeem on Gold Jewellery</li>
                            </ul>

                            <a href="#" class="btn btn-gold w-100">
                                Join Now
                            </a>

                        </div>

                    </div>
                </div>

                <!-- Diamond -->
                <div class="col-lg-4">
                    <div class="scheme-card">

                        <div class="scheme-image">
                            <img src="{{ asset('website') }}/images/schemes/diamond-plan.png" class="img-fluid">
                        </div>

                        <div class="scheme-content">

                            <span class="scheme-badge blue">
                                Diamond Saver
                            </span>

                            <h3>₹1000 / Month</h3>

                            <ul>
                                <li>✔ Flexible Installments</li>
                                <li>✔ Certified Diamond</li>
                                <li>✔ Premium Rewards</li>
                                <li>✔ Lifetime Support</li>
                            </ul>

                            <a href="#" class="btn btn-blue w-100">
                                Explore Plan
                            </a>

                        </div>

                    </div>
                </div>

                <!-- Wedding -->
                <div class="col-lg-4">
                    <div class="scheme-card">

                        <div class="scheme-image">
                            <img src="{{ asset('website') }}/images/schemes/wedding-plan.png" class="img-fluid">
                        </div>

                        <div class="scheme-content">

                            <span class="scheme-badge red">
                                Wedding Plan
                            </span>

                            <h3>Flexible Savings</h3>

                            <ul>
                                <li>✔ Perfect for Weddings</li>
                                <li>✔ Gold & Diamond Jewellery</li>
                                <li>✔ Easy Monthly Savings</li>
                                <li>✔ Easy Redemption</li>
                            </ul>

                            <a href="#" class="btn btn-red w-100">
                                Start Saving
                            </a>

                        </div>

                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- Jewellery Schemes End -->

    <!-- Our Products Section Start -->
    <div class="our-products">
        <div class="container">
            <div class="row section-row">
                <div class="col-xl-12">
                    <!-- Section Title Start -->
                    <div class="section-title section-title-center">
                        <span class="section-sub-title wow fadeInUp">Featured products</span>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Explore Our Signature Jewellery Pieces</h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <!-- Product Slider Start -->
                    <div class="product-slider">
                        <div class="swiper">
                            <div class="swiper-wrapper">
                                @foreach ($featured_products as $product)
                                    <!-- Product Slide Start -->
                                    <div class="swiper-slide">
                                        <!-- Product Item Start -->
                                        <div class="product-item">
                                            <!-- Product Item Header Start -->
                                            <div class="product-item-header">
                                                <!-- Product Item Image Start -->
                                                <div class="product-item-image">
                                                    <a href="{{ route('productDetails', $product->slug) }}">
                                                        <figure>
                                                            <img src="{{ asset($product->image) }}" alt="">
                                                        </figure>
                                                    </a>
                                                </div>
                                                <!-- Product Item Image End -->

                                                <!-- Product Item Action Start -->
                                                <div class="product-item-action">
                                                    <ul>

                                                        <li class="wishlist">
                                                            <a href="javascript:void(0);"
                                                                class="hover-tooltip tooltip-left box-icon wishlistBtn"
                                                                data-id="{{ $product->variant->id }}">

                                                                <img src="{{ asset('website/images/icon-wishlist-primary.svg') }}"
                                                                    alt="">
                                                            </a>
                                                        </li>
                                                        <li class="cart">
                                                            <a href="javascript:void(0);"
                                                                class="hover-tooltip tooltip-left box-icon addCartBtn"
                                                                data-id="{{ $product->variant->id }}">

                                                                <img src="{{ asset('website/images/icon-cart-primary.svg') }}"
                                                                    alt="">
                                                            </a>
                                                        </li>

                                                    </ul>
                                                </div>
                                                <!-- Product Item Action End -->
                                            </div>
                                            <!-- Product Item Header End -->

                                            <!-- Product Item Body Start -->
                                            <div class="product-item-body">
                                                <!-- Product Item Content Start -->
                                                <div class="product-item-content">
                                                    <h2 class="product-item-title"><a
                                                            href="{{ route('productDetails', $product->slug) }}">{{ $product->title }}</a>
                                                    </h2>
                                                </div>
                                                <!-- Product Item Content End -->

                                                <!-- Product Item Price Start -->
                                                <div class="product-item-price">
                                                    <h3>₹{{ $product->variant->price }}
                                                        <span>₹{{ $product->variant->actual_price }}</span>
                                                    </h3>
                                                </div>
                                                <!-- Product Item Price End -->
                                            </div>
                                            <!-- Product Item Body End -->
                                        </div>
                                        <!-- Product Item End -->
                                    </div>
                                @endforeach
                            </div>
                            <div class="product-slider-btn">
                                <div class="product-slider-button-prev"></div>
                                <div class="product-slider-button-next"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Product Slider End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Products Section End -->

    <!-- Our Testimonials Section Start -->
    <div class="our-testimonials dark-section parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <!-- Testimonials Content Box Start -->
                    <div class="testimonials-content-box">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <span class="section-sub-title wow fadeInUp">Testimonials</span>
                            <h2 class="text-anime-style-3" data-cursor="-opaque">TTrusted by Jewellery Lovers Across India
                            </h2>
                        </div>
                        <!-- Section Title End -->

                        <!-- Testimonial Slider Start -->
                        <div class="testimonial-slider">
                            <div class="swiper">
                                <div class="swiper-wrapper" data-cursor-text="Drag">
                                    <!-- Testimonial Slide Start -->
                                    <div class="swiper-slide">
                                        <!-- Testimonial Item Start -->
                                        <div class="testimonial-item">
                                            <div class="testimonial-item-content-box">
                                                <div class="testimonial-item-rating">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                </div>
                                                <div class="testimonial-item-content">
                                                    <p>
                                                        "The savings plan made it easy to buy the jewellery I had always
                                                        wanted. The process was smooth, pricing was transparent, and the
                                                        quality exceeded my expectations."
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="testimonial-item-author">
                                                <div class="testimonial-author-image">
                                                    <div class="user-icon">
                                                        <i class="fa-solid fa-user"></i>
                                                    </div>
                                                </div>
                                                <div class="testimonial-author-content">
                                                    <h2>Priya Reddy</h2>
                                                    <p>Hyderabad</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Testimonial Item End -->
                                    </div>
                                    <!-- Testimonial Slide End -->

                                    <!-- Testimonial Slide Start -->
                                    <div class="swiper-slide">
                                        <!-- Testimonial Item Start -->
                                        <div class="testimonial-item">
                                            <div class="testimonial-item-content-box">
                                                <div class="testimonial-item-rating">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                </div>
                                                <div class="testimonial-item-content">
                                                    <p>
                                                        "I joined a jewellery savings scheme and had a wonderful experience.
                                                        Secure payments, beautiful designs, and excellent customer support
                                                        made the entire journey hassle-free."
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="testimonial-item-author">
                                                <div class="testimonial-author-image">
                                                    <div class="user-icon">
                                                        <i class="fa-solid fa-user"></i>
                                                    </div>
                                                </div>
                                                <div class="testimonial-author-content">
                                                    <h2>Anjali Sharma</h2>
                                                    <p>Bengaluru</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Testimonial Item End -->
                                    </div>
                                    <!-- Testimonial Slide End -->
                                </div>
                                <div class="testimonial-btn">
                                    <div class="testimonial-button-prev"></div>
                                    <div class="testimonial-button-next"></div>
                                </div>
                            </div>
                        </div>
                        <!-- Testimonial Slider End -->
                    </div>
                    <!-- Testimonials Content Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Testimonials Section End -->

    <!-- Our Blog Section Start -->
    <div class="our-blog">
        <div class="container">
            <div class="row section-row">
                <div class="col-xl-12">
                    <!-- Section Title Start -->
                    <div class="section-title section-title-center">
                        <span class="section-sub-title wow fadeInUp">Latest Blog</span>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Explore Our Latest Fashion Blogs</h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                @foreach ($blogs as $blog)
                    <div class="col-xl-4 col-md-6">
                        <!-- Post Item Start -->
                        <div class="post-item wow fadeInUp">
                            <!-- Post Featured Image Start-->
                            <div class="post-featured-image">
                                <a href="{{ route('blogDetails', $blog->slug) }}" data-cursor-text="View">
                                    <figure class="image-anime">
                                        <img src="{{ asset($blog->image) }}" alt="">
                                    </figure>
                                </a>
                            </div>
                            <!-- Post Featured Image End -->

                            <!-- Post Item Body Start -->
                            <div class="post-item-body">
                                <!-- Post Item Content Start -->
                                <div class="post-item-content">
                                    <h2><a href="{{ route('blogDetails', $blog->slug) }}">{{ $blog->title }}</a></h2>
                                </div>
                                <!-- Post Item Content End -->

                                <!-- Post Item Button Start-->
                                <div class="post-item-btn">
                                    <a href="{{ route('blogDetails', $blog->slug) }}" class="readmore-btn">read more</a>
                                </div>
                                <!-- Post Item Button End-->
                            </div>
                            <!-- Post Item Body End -->
                        </div>
                        <!-- Post Item End -->
                    </div>


                @endforeach
            </div>
        </div>
    </div>
    <!-- Our Blog Section End -->
    <!-- Hero Info Box Start -->
    <div class="key-benefit-box">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <!-- Hero Info Item List Start -->
                    <div class="key-benefit-item-list">
                        <!-- Hero Info Item Start -->
                        <div class="key-benefit-item wow fadeInUp">
                            <div class="icon-box">
                                <img src="{{asset('website')}}/images/icon-key-benefit-item-1.svg" alt="">
                            </div>
                            <div class="key-benefit-item-content">
                                <h3>Trusted Support</h3>
                                <p>Friendly assistance whenever you need it.</p>
                            </div>
                        </div>
                        <!-- Hero Info Item End -->

                        <!-- Hero Info Item Start -->
                        <div class="key-benefit-item wow fadeInUp" data-wow-delay="0.2s">
                            <div class="icon-box">
                                <img src="{{asset('website')}}/images/icon-key-benefit-item-2.svg" alt="">
                            </div>
                            <div class="key-benefit-item-content">
                                <h3>Secure Payments</h3>
                                <p>Safe and hassle-free online transactions.</p>
                            </div>
                        </div>
                        <!-- Hero Info Item End -->

                        <!-- Hero Info Item Start -->
                        <div class="key-benefit-item wow fadeInUp" data-wow-delay="0.4s">
                            <div class="icon-box">
                                <img src="{{asset('website')}}/images/icon-key-benefit-item-3.svg" alt="">
                            </div>
                            <div class="key-benefit-item-content">
                                <h3>Certified Jewellery</h3>
                                <p>BIS Hallmarked & certified quality.</p>
                            </div>
                        </div>
                        <!-- Hero Info Item End -->

                        <!-- Hero Info Item Start -->
                        <div class="key-benefit-item wow fadeInUp" data-wow-delay="0.6s">
                            <div class="icon-box">
                                <img src="{{asset('website')}}/images/icon-key-benefit-item-4.svg" alt="">
                            </div>
                            <div class="key-benefit-item-content">
                                <h3>Flexible Savings</h3>
                                <p>Save daily or monthly at your convenience.</p>
                            </div>
                        </div>
                        <!-- Hero Info Item End -->
                    </div>
                    <!-- Hero Info Item List End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Hero Info Box End -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        $(document).on('click', '.addCartBtn', function () {

            let button = $(this);
            let variantId = button.data('id');

            $.ajax({
                url: "{{ route('customer.cart.add') }}",
                type: "POST",
                data: {
                    _token: "{{ csrf_token() }}",
                    product_variant_id: variantId,
                    quantity: 1
                },

                beforeSend: function () {
                    button.find('.text').text('Adding...');
                },

                success: function (res) {
                    if (res.status == true) {
                        if (res.stock_error == true) {
                            alert(res.message);
                            button.find('.text').text('Add To Cart');
                            location.reload();

                            return false;
                        }
                        $('#cartCount').text(res.count);

                        button.find('.text').text('Added');
                        toastr.success(res.message);

                        setTimeout(function () {
                            button.find('.text').text('Add To Cart');
                        }, 1500);
                        location.reload();
                    } else {
                        window.location.href = "/login";
                    }
                },

                error: function (xhr) {

                    if (xhr.status == 401) {
                        window.location.href = "/login";
                    }

                }
            });

        });
    </script>
    <script>
        $(document).on('click', '.wishlistBtn', function (e) {

            e.preventDefault();

            let button = $(this);
            let variantId = button.data('id');

            $.ajax({
                url: "{{ route('customer.wishlist.add') }}",
                type: "POST",
                data: {
                    _token: "{{ csrf_token() }}",
                    product_variant_id: variantId
                },

                success: function (res) {
                    if (res.status == true) {

                        if (res.type == 'added') {
                            button.find('.wishlist-icon').addClass('text-danger');
                        } else {
                            button.find('.wishlist-icon').removeClass('text-danger');
                        }

                        if ($('#wishlistCount').length) {
                            $('#wishlistCount').text(res.count);
                        }

                        toastr.success(res.message);
                        location.reload();
                    } else {
                        window.location.href = "/login";
                    }

                },

                error: function (xhr) {
                    console.log(xhr.responseText);
                    toastr.error("Something went wrong");
                }

            });

        });
    </script>
@endsection