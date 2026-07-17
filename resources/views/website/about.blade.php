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
    <!-- Page Header Start -->
    <div class="page-header dark-section parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-3" data-cursor="-opaque">About Us</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">About Us</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- About us Section Start -->
    <div class="about-us">
        <div class="container">
            <div class="row section-row">
                <div class="col-xl-12">
                    <!-- Section Title Start -->
                    <div class="section-title section-title-center">
                        <span class="section-sub-title wow fadeInUp">About Us</span>

                        <h2 class="text-anime-style-3" data-cursor="-opaque">
                            Making Every Jewellery Dream Affordable
                        </h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-xl-12">
                    <!-- Mission Vision Item List Start -->
                    <div class="mission-vision-item-list">
                        <!-- Mission Vision Item Start -->
                        <div class="mission-vision-item wow fadeInUp">
                            <div class="mission-vision-item-image">
                                <figure>
                                    <img src="{{asset('website')}}/images/mission-vision-item-image-1.jpg" alt="">
                                </figure>
                            </div>
                            <div class="mission-vision-item-content">
                                <h3>Our Mission</h3>
                                <p>
                                    Our mission is to make premium jewellery accessible to everyone through trusted
                                    shopping, flexible savings plans, and rewarding jewellery schemes. We are committed to
                                    delivering quality, transparency, and value in every purchase.
                                </p>
                            </div>
                        </div>
                        <!-- Mission Vision Item End -->

                        <!-- Mission Vision Item Start -->
                        <div class="mission-vision-item wow fadeInUp" data-wow-delay="0.2s">
                            <div class="mission-vision-item-image">
                                <figure>
                                    <img src="{{asset('website')}}/images/mission-vision-item-image-2.jpg" alt="">
                                </figure>
                            </div>
                            <div class="mission-vision-item-content">
                                <h3>Our Vision</h3>
                                <p>
                                    Our vision is to become India's most trusted destination for jewellery shopping and
                                    smart savings, empowering every customer to celebrate life's special moments with
                                    confidence and lasting value.
                                </p>
                            </div>
                        </div>
                        <!-- Mission Vision Item End -->
                    </div>
                    <!-- Mission Vision Item List End -->
                </div>

            </div>
        </div>
    </div>
    <!-- About us Section End -->

    <!-- What We Do Section Start -->
    <div class="what-we-do">
        <div class="container">
            <div class="row section-row">
                <div class="col-xl-12">
                    <!-- Section Title Start -->
                    <div class="section-title section-title-center">
                        <span class="section-sub-title wow fadeInUp">what we do</span>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Everything You Need for Jewellery & Smart
                            Savings</h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-xl-4 col-md-6">
                    <!-- What We Item Start -->
                    <div class="what-we-item wow fadeInUp">
                        <div class="icon-box">
                            <img src="{{asset('website')}}/images/icon-what-we-do-1.svg" alt="">
                        </div>
                        <div class="what-we-item-content">
                            <h3>Shop Premium Jewellery</h3>
                            <p>
                                Explore a curated collection of certified Gold, Silver, and Diamond jewellery crafted for
                                every occasion and style.
                            </p>
                        </div>
                    </div>
                    <!-- What We Item End -->
                </div>

                <div class="col-xl-4 col-md-6">
                    <!-- What We Item Start -->
                    <div class="what-we-item wow fadeInUp" data-wow-delay="0.2s">
                        <div class="icon-box">
                            <img src="{{asset('website')}}/images/icon-what-we-do-2.svg" alt="">
                        </div>
                        <div class="what-we-item-content">
                            <h3>Flexible Savings Plans</h3>
                            <p>
                                Save daily or monthly with convenient jewellery savings plans designed to make your dream
                                purchase more affordable.
                            </p>
                        </div>
                    </div>
                    <!-- What We Item End -->
                </div>

                <div class="col-xl-4 col-md-6">
                    <!-- What We Item Start -->
                    <div class="what-we-item wow fadeInUp" data-wow-delay="0.4s">
                        <div class="icon-box">
                            <img src="{{asset('website')}}/images/icon-what-we-do-3.svg" alt="">
                        </div>
                        <div class="what-we-item-content">
                            <h3>Rewarding Jewellery Schemes</h3>
                            <p>
                                Join exclusive jewellery schemes and enjoy added value while planning your next jewellery
                                purchase with confidence.
                            </p>
                        </div>
                    </div>
                    <!-- What We Item End -->
                </div>
            </div>
        </div>
    </div>
    <!-- What We Do Section End -->

    <!-- Why Customer Choose Section Start -->
    <div class="why-customer-choose light-section">
        <div class="container-fluid">
            <div class="row no-gutters">
                <div class="col-xl-6">
                    <div class="why-customer-choose-video">
                        <!-- Video Start -->
                        <div class="why-customer-choose-bg-video">
                            <!-- Selfhosted Video Start -->
                            <!-- <video autoplay muted playsinline loop id="whychoosevideo"><source src="{{asset('website')}}/images/intro-bg-video.mp4" type="video/mp4"></video> -->
                            <video autoplay="" muted="" playsinline="" loop="" id="whychoosevideo">
                                <source src="{{asset('website')}}/videos/why-customer-choose-video.mp4">
                            </video>
                            <!-- Selfhosted Video End -->

                            <!-- Youtube Video Start -->
                            <!-- <div id="myVideo" class="player" data-property="{videoURL:'OjTRVpgtcG4',containment:'.intro-video', showControls:false, autoPlay:true, loop:true, vol:0, mute:false, startAt:0,  stopAt:296, opacity:1, addRaster:true, quality:'large', optimizeDisplay:true}"></div> -->
                            <!-- Youtube Video End -->
                        </div>
                        <!-- Video End -->
                    </div>
                </div>

                <div class="col-xl-6">
                    <!-- Why Customer Choose Content Start -->
                    <div class="why-customer-choose-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <span class="section-sub-title wow fadeInUp">Why Customers Love Us</span>
                            <h2 class="text-anime-style-3" data-cursor="-opaque">Everything You Need to Know Before You Shop
                                & Save</h2>
                        </div>
                        <!-- Section Title End -->

                        <!-- Customer Accordion Start -->
                        <div class="customer-accordion" id="c_accordion">
                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp">
                                <h2 class="accordion-header" id="c_heading1">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#c_collapse1" aria-expanded="false" aria-controls="c_collapse1">
                                        How do the jewellery savings plans work?
                                    </button>
                                </h2>
                                <div id="c_collapse1" class="accordion-collapse collapse show" role="region"
                                    aria-labelledby="c_heading1" data-bs-parent="#c_accordion">
                                    <div class="accordion-body">
                                        <p>
                                            Choose a savings plan that suits your budget and deposit daily or monthly. Once
                                            your plan is complete, you can redeem the accumulated amount towards your
                                            jewellery purchase.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.2s">
                                <h2 class="accordion-header" id="c_heading2">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#c_collapse2" aria-expanded="false" aria-controls="c_collapse2">
                                        Is all jewellery certified?
                                    </button>
                                </h2>
                                <div id="c_collapse2" class="accordion-collapse collapse" role="region"
                                    aria-labelledby="c_heading2" data-bs-parent="#c_accordion">
                                    <div class="accordion-body">
                                        <p>
                                            Yes. Our Gold, Silver, and Diamond jewellery is sourced with quality assurance
                                            and certification wherever applicable, giving you confidence in every purchase.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.4s">
                                <h2 class="accordion-header" id="c_heading3">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#c_collapse3" aria-expanded="true" aria-controls="c_collapse3">
                                        What payment methods are available?
                                    </button>
                                </h2>
                                <div id="c_collapse3" class="accordion-collapse collapse" role="region"
                                    aria-labelledby="c_heading3" data-bs-parent="#c_accordion">
                                    <div class="accordion-body">
                                        <p>
                                            We support secure online payments through UPI, credit cards, debit cards, net
                                            banking, and other trusted payment options for a seamless shopping experience.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.6s">
                                <h2 class="accordion-header" id="c_heading4">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#c_collapse4" aria-expanded="false" aria-controls="c_collapse4">
                                        Can I purchase jewellery without joining a savings plan?
                                    </button>
                                </h2>
                                <div id="c_collapse4" class="accordion-collapse collapse" role="region"
                                    aria-labelledby="c_heading4" data-bs-parent="#c_accordion">
                                    <div class="accordion-body">
                                        <p>
                                            Absolutely. You can shop directly from our jewellery collection or choose a
                                            savings plan if you prefer to purchase later with planned savings.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.8s">
                                <h2 class="accordion-header" id="c_heading5">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#c_collapse5" aria-expanded="false" aria-controls="c_collapse5">
                                        Do you offer jewellery schemes?
                                    </button>
                                </h2>
                                <div id="c_collapse5" class="accordion-collapse collapse" role="region"
                                    aria-labelledby="c_heading5" data-bs-parent="#c_accordion">
                                    <div class="accordion-body">
                                        <p>
                                            Yes. We offer flexible jewellery schemes designed to help you save regularly
                                            while enjoying exclusive benefits when you redeem your savings for jewellery.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->
                        </div>
                        <!-- Customer Accordion End -->
                    </div>
                    <!-- Why Customer Choose Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Why Customer Choose Section End -->

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
@endsection