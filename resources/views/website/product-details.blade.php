@extends('layouts.website')
@section('content')
    <!-- Page Product Single Start -->
    <div class="page-product-single">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Product Single Content Start -->
                    <div class="page-product-single-content">
                        <!-- Product Single Breadcrumb List Start -->
                        <div class="product-single-breadcrumb-list wow fadeInUp">
                            <nav>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('productDetails',' ') }}">Home</a></li>
                                    <li class="breadcrumb-item"><a href="{{ route('productDetails',' ') }}">Women</a></li>
                                    <li class="breadcrumb-item"><a href="{{ route('productDetails',' ') }}">Jewelry</a></li>
                                    <li class="breadcrumb-item"><a href="{{ route('productDetails',' ') }}">Rings</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Timeless Elegance Ring</li>
                                </ol>
                            </nav>
                        </div>
                        <!-- Product Single Breadcrumb List End -->

                        <!-- Product Single Info Box Start -->
                        <div class="product-single-info-box">
                            <!-- Product Single Image Box Start -->
                            <div class="product-single-image-box wow fadeInUp">
                                <!-- Product Single Image Slider Start -->
                                <div class="swiper product-single-image-slider">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <figure>
                                                <img src="{{asset('website')}}/images/product-image-1.png" alt="">
                                            </figure>
                                        </div>
                                        <div class="swiper-slide">
                                            <figure>
                                                <img src="{{asset('website')}}/images/product-image-2.png" alt="">
                                            </figure>
                                        </div>
                                        <div class="swiper-slide">
                                            <figure>
                                                <img src="{{asset('website')}}/images/product-image-3.png" alt="">
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product Single Image Slider End -->

                                <!-- Product Single Image Item Start -->
                                <div class="swiper product-single-image-item">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <figure class="imgae-anime">
                                                <img src="{{asset('website')}}/images/product-image-1.png" alt="">
                                            </figure>
                                        </div>
                                        <div class="swiper-slide">
                                            <figure class="imgae-anime">
                                                <img src="{{asset('website')}}/images/product-image-2.png" alt="">
                                            </figure>
                                        </div>
                                        <div class="swiper-slide">
                                            <figure class="imgae-anime">
                                                <img src="{{asset('website')}}/images/product-image-3.png" alt="">
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product Single Image Item End -->
                            </div>
                            <!-- Product Single Image Box End -->

                            <!-- Product Single Info Content Start -->
                            <div class="product-single-info-content">
                                <!-- Product Single title Start -->
                                <div class="product-single-title wow fadeInUp">
                                    <h1>Timeless Elegance Ring</h1>
                                    <span>Rings</span>
                                </div>
                                <!-- Product Single title End -->

                                <!-- Product Single Description Start -->
                                <div class="product-single-description wow fadeInUp" data-wow-delay="0.2s">
                                    <p>Experience the perfect blend of luxury, beauty, and craftsmanship with our Timeless
                                        Elegance Ring collection. Designed to capture attention and celebrate unforgettable
                                        moments, each ring offers a graceful touch of sophistication and lasting shine.</p>
                                </div>
                                <!-- Product Single Description End -->

                                <!-- Product Single Price Start -->
                                <div class="product-single-price wow fadeInUp" data-wow-delay="0.4s">
                                    <h2>₹4000.00 <sub>₹6000.00</sub></h2>
                                    <span>Inclusive of all taxes*</span>
                                </div>
                                <!-- Product Single Price End -->

                                <!-- Product Single Details Start -->
                                <div class="product-single-details-list wow fadeInUp" data-wow-delay="0.6s">
                                    <h3>Carat</h3>
                                    <ul>
                                        <li><input type="radio" id="14KT" name="Size" value="14KT" checked=""><label
                                                for="14KT">14KT</label></li>
                                        <li><input type="radio" id="18KT" name="Size" value="18KT"><label
                                                for="18KT">18KT</label></li>
                                        <li><input type="radio" id="22KT" name="Size" value="22KT"><label
                                                for="22KT">22KT</label></li>
                                        <li><input type="radio" id="24KT" name="Size" value="24KT"><label
                                                for="24KT">24KT</label></li>
                                    </ul>
                                </div>
                                <!-- Product Single Details End -->

                                <!-- Product Single Content Body Start -->
                                <div class="product-single-content-body wow fadeInUp" data-wow-delay="0.6s">
                                    <div class="qty-box">
                                        <button class="qty-btn minus">-</button>
                                        <input type="text" class="qty-input" value="01" readonly="">
                                        <button class="qty-btn plus">+</button>
                                    </div>
                                    <div class="product-single-content-btn">
                                        <a href="javascript:void(0)" class="btn-default">Add To cart</a>
                                    </div>
                                    <div class="product-single-action">
                                        <ul>
                                            <li><a href="#"><img src="{{asset('website')}}/images/icon-wishlist-primary.svg" alt=""></a></li>
                                            <li><a href="#"><img src="{{asset('website')}}/images/icon-compare-primary.svg" alt=""></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Product Single Content Body End -->

                                <!-- Product Single Content Footer Start -->
                                <div class="product-single-content-footer wow fadeInUp" data-wow-delay="0.8s">
                                    <!-- Product Shipping Box Start -->
                                    <div class="product-shipping-box">
                                        <ul>
                                            <li><img src="{{asset('website')}}/images/icon-product-shipping-1.svg" alt="">Free Shipping &
                                                Exchanges</li>
                                            <li><img src="{{asset('website')}}/images/icon-product-shipping-2.svg" alt="">Flexible and Secure
                                                Payment, Pay on Delivery</li>
                                            <li><img src="{{asset('website')}}/images/icon-product-shipping-3.svg" alt="">600,000 Happy Customers
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- Product Shipping Box End -->
                                </div>
                                <!-- Product Single Content Footer End -->
                            </div>
                            <!-- Product Single Info Content End -->
                        </div>
                        <!-- Product Single Info Box End -->

                        <!-- Product Single Info Start -->
                        <div class="product-single-review-box wow fadeInUp" data-wow-delay="0.2s">
                            <!-- Product Single Box Start -->
                            <div class="product-single-review-tab tab-content" id="missionvision">
                                <!-- Product Step Nav start -->
                                <div class="product-step-nav">
                                    <ul class="nav nav-tabs" id="mvTab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="first-tab" data-bs-toggle="tab"
                                                data-bs-target="#first" type="button" role="tab" aria-controls="first"
                                                aria-selected="true">Product Description</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="second-tab" data-bs-toggle="tab"
                                                data-bs-target="#second" type="button" role="tab" aria-controls="second"
                                                aria-selected="false">Additional Information</button>
                                        </li>

                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="third-tab" data-bs-toggle="tab"
                                                data-bs-target="#third" type="button" role="tab" aria-controls="second"
                                                aria-selected="false">Reviews (50)</button>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Product Step Nav End -->

                                <!-- Product Tab Item Box Start -->
                                <div class="product-tab-item-box tab-pane fade show active" id="first" role="tabpanel">
                                    <div class="product-tab-item-content">
                                        <p>The Timeless Elegance Ring is a beautifully crafted piece that embodies grace,
                                            simplicity, and everlasting charm. Designed with a sleek and modern touch, it
                                            enhances your natural style while adding a subtle hint of luxury. Perfect for
                                            everyday wear or special occasions,</p>
                                        <p>Its smooth finish and elegant silhouette create a subtle yet captivating shine
                                            that enhances your overall look without being overpowering. Whether worn alone
                                            for a clean, minimalist style or paired with other jewelry for a layered fashion
                                            statement, it always stands out effortlessly. Made with high-quality,
                                            skin-friendly materials, the ring ensures long-lasting durability, comfort, and
                                            resistance to tarnish. It is lightweight, easy to wear throughout the day, and
                                            designed to maintain its brilliance over time.</p>
                                        <ul>
                                            <li>Crafted with a clean, refined look that represents simplicity and luxury
                                                together, making it suitable for both modern and traditional styles.</li>
                                            <li>deal for daily wear, office use, parties, weddings, engagements, and special
                                                celebrations, making it a versatile jewelry piece.</li>
                                            <li>Designed with a smooth inner finish and lightweight structure so you can
                                                wear it comfortably throughout the day without irritation.</li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Product Tab Item End -->

                                <!-- Product Tab Item Box Start -->
                                <div class="product-tab-item-box tab-pane fade" id="second" role="tabpanel">
                                    <div class="product-additional-content">
                                        <!-- Product Additional Content Title Start -->
                                        <div class="product-additional-content-title">
                                            <h2>Additional Information</h2>
                                        </div>
                                        <!-- Product Additional Content Title End -->

                                        <!-- Product Additional Info Table Start -->
                                        <div class="product-additional-info-table">
                                            <table>
                                                <tr>
                                                    <td><b>Product Type</b></td>
                                                    <td>Ring</td>
                                                </tr>
                                                <tr>
                                                    <td><b>Carat</b></td>
                                                    <td>22K</td>
                                                </tr>
                                                <tr>
                                                    <td><b>Material</b></td>
                                                    <td>Gold</td>
                                                </tr>
                                                <tr>
                                                    <td><b>Weight</b></td>
                                                    <td>10gm</td>
                                                </tr>
                                            </table>
                                        </div>
                                        <!-- Product Additional Info Table End -->
                                    </div>
                                </div>
                                <!-- Product Tab Item Box End -->

                                <!-- Product Tab Item Box Start -->
                                <div class="product-tab-item-box tab-pane fade" id="third" role="tabpanel">
                                    <div class="product-review-from-content">
                                        <!-- Customer Review List Start -->
                                        <div class="customer-review-list">
                                            <!-- Customer Review Item Start -->
                                            <div class="customer-review-item">
                                                <div class="icon-box">
                                                    <img src="{{asset('website')}}/images/author-1.jpg" alt="">
                                                </div>
                                                <div class="customer-review-item-body">
                                                    <div class="customer-review-item-content">
                                                        <p><span>Author</span> - May 18, 2026</p>
                                                        <p>Beautiful craftsmanship with a timeless look.</p>
                                                    </div>
                                                    <div class="customer-review-item-rating">
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Customer Review Item End -->

                                            <!-- Customer Review Item Start -->
                                            <div class="customer-review-item">
                                                <div class="icon-box">
                                                    <img src="{{asset('website')}}/images/author-2.jpg" alt="">
                                                </div>
                                                <div class="customer-review-item-body">
                                                    <div class="customer-review-item-content">
                                                        <p>Author - May 15, 2026</p>
                                                        <p>Perfect gift with amazing shine and finish.</p>
                                                    </div>
                                                    <div class="customer-review-item-rating">
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Customer Review Item End -->
                                        </div>
                                        <!-- Customer Review List End -->

                                        <!-- Contact Form Start -->
                                        <div class="review-form">
                                            <div class="review-form-content">
                                                <h3>Add a review</h3>
                                                <p>Your email address will not be published. Required fields are marked Your
                                                    rating</p>
                                            </div>
                                            <form id="reviewForm" action="#" method="POST" data-toggle="validator">
                                                <div class="row">
                                                    <div class="form-group col-md-12 mb-4">
                                                        <input type="text" name="review" class="form-control" id="review"
                                                            placeholder="Your review" required="">
                                                        <div class="help-block with-errors"></div>
                                                    </div>

                                                    <div class="form-group col-md-6 mb-4">
                                                        <input type="text" name="name" class="form-control" id="name"
                                                            placeholder="Full Name" required="">
                                                        <div class="help-block with-errors"></div>
                                                    </div>

                                                    <div class="form-group col-md-6 mb-4">
                                                        <input type="email" name="email" class="form-control" id="email"
                                                            placeholder="Email" required="">
                                                        <div class="help-block with-errors"></div>
                                                    </div>

                                                    <div class="form-group review-form-note">
                                                        <input type="checkbox" id="#" name="#">
                                                        <label class="form-label">Save my name, email, and website in this
                                                            browser for the next time I comment.</label>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <button type="submit" class="btn-default">Submit Message</button>
                                                        <div id="msgSubmit" class="h3 hidden"></div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- Contact Form End -->
                                    </div>
                                </div>
                                <!-- Product Tab Item Box End -->
                            </div>
                            <!-- Product Single Box End -->
                        </div>
                        <!-- Product Single Info End -->
                    </div>
                    <!-- Page Product Single Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Products Single End -->

    <!-- Related Product Section Start -->
    <div class="related-products">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
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
                    <!-- Related Product Items Start -->
                    <div class="related-product-items-list">
                        <!-- Product Item Start -->
                        <div class="product-item wow fadeInUp">
                            <!-- Product Item Header Start -->
                            <div class="product-item-header">
                                <!-- Product Item Image Start -->
                                <div class="product-item-image">
                                    <a href="{{ route('productDetails',' ') }}">
                                        <figure>
                                            <img src="{{asset('website')}}/images/product-image-1.png" alt="">
                                        </figure>
                                    </a>
                                </div>
                                <!-- Product Item Image End -->

                                <!-- Product Item Action Start -->
                                <div class="product-item-action">
                                    <ul>
                                        <li><a href="#"><img src="{{asset('website')}}/images/icon-wishlist-primary.svg" alt=""></a></li>
                                        <li><a href="#"><img src="{{asset('website')}}/images/icon-preview-primary.svg" alt=""></a></li>
                                        <li><a href="#"><img src="{{asset('website')}}/images/icon-cart-primary.svg" alt=""></a></li>
                                        <li><a href="#"><img src="{{asset('website')}}/images/icon-compare-primary.svg" alt=""></a></li>
                                        <li><a href="#"><img src="{{asset('website')}}/images/icon-payment-primary.svg" alt=""></a></li>
                                    </ul>
                                </div>
                                <!-- Product Item Action End -->
                            </div>
                            <!-- Product Item Header End -->

                            <!-- Product Item Body Start -->
                            <div class="product-item-body">
                                <!-- Product Item Content Start -->
                                <div class="product-item-content">
                                    <h2 class="product-item-title"><a href="{{ route('productDetails',' ') }}">Timeless Elegance Ring</a>
                                    </h2>
                                </div>
                                <!-- Product Item Content End -->

                                <!-- Product Item Price Start -->
                                <div class="product-item-price">
                                    <h3>₹4000.00 <span>₹8000.00</span></h3>
                                </div>
                                <!-- Product Item Price End -->
                            </div>
                            <!-- Product Item Body End -->
                        </div>
                        <!-- Product Item End -->

                        <!-- Product Item Start -->
                        <div class="product-item wow fadeInUp" data-wow-delay="0.2s">
                            <!-- Product Item Header Start -->
                            <div class="product-item-header">
                                <!-- Product Item Image Start -->
                                <div class="product-item-image">
                                    <a href="{{ route('productDetails',' ') }}">
                                        <figure>
                                            <img src="{{asset('website')}}/images/product-image-2.png" alt="">
                                        </figure>
                                    </a>
                                </div>
                                <!-- Product Item Image End -->

                                <!-- Product Item Action Start -->
                                <div class="product-item-action">
                                    <ul>
                                        <li><a href="#"><img src="{{asset('website')}}/images/icon-wishlist-primary.svg" alt=""></a></li>
                                        <li><a href="#"><img src="{{asset('website')}}/images/icon-preview-primary.svg" alt=""></a></li>
                                        <li><a href="#"><img src="{{asset('website')}}/images/icon-cart-primary.svg" alt=""></a></li>
                                        <li><a href="#"><img src="{{asset('website')}}/images/icon-compare-primary.svg" alt=""></a></li>
                                        <li><a href="#"><img src="{{asset('website')}}/images/icon-payment-primary.svg" alt=""></a></li>
                                    </ul>
                                </div>
                                <!-- Product Item Action End -->
                            </div>
                            <!-- Product Item Header End -->

                            <!-- Product Item Body Start -->
                            <div class="product-item-body">
                                <!-- Product Item Content Start -->
                                <div class="product-item-content">
                                    <h2 class="product-item-title"><a href="{{ route('productDetails',' ') }}">Kundan Necklace</a></h2>
                                </div>
                                <!-- Product Item Content End -->

                                <!-- Product Item Price Start -->
                                <div class="product-item-price">
                                    <h3>₹6000.00 <span>₹8000.00</span></h3>
                                </div>
                                <!-- Product Item Price End -->
                            </div>
                            <!-- Product Item Body End -->
                        </div>
                        <!-- Product Item End -->

                        <!-- Product Item Start -->
                        <div class="product-item wow fadeInUp" data-wow-delay="0.4s">
                            <!-- Product Item Header Start -->
                            <div class="product-item-header">
                                <!-- Product Item Image Start -->
                                <div class="product-item-image">
                                    <a href="{{ route('productDetails',' ') }}">
                                        <figure>
                                            <img src="{{asset('website')}}/images/product-image-3.png" alt="">
                                        </figure>
                                    </a>
                                </div>
                                <!-- Product Item Image End -->

                                <!-- Product Item Action Start -->
                                <div class="product-item-action">
                                    <ul>
                                        <li><a href="#"><img src="{{asset('website')}}/images/icon-wishlist-primary.svg" alt=""></a></li>
                                        <li><a href="#"><img src="{{asset('website')}}/images/icon-preview-primary.svg" alt=""></a></li>
                                        <li><a href="#"><img src="{{asset('website')}}/images/icon-cart-primary.svg" alt=""></a></li>
                                        <li><a href="#"><img src="{{asset('website')}}/images/icon-compare-primary.svg" alt=""></a></li>
                                        <li><a href="#"><img src="{{asset('website')}}/images/icon-payment-primary.svg" alt=""></a></li>
                                    </ul>
                                </div>
                                <!-- Product Item Action End -->
                            </div>
                            <!-- Product Item Header End -->

                            <!-- Product Item Body Start -->
                            <div class="product-item-body">
                                <!-- Product Item Content Start -->
                                <div class="product-item-content">
                                    <h2 class="product-item-title"><a href="{{ route('productDetails',' ') }}">Gold Solitaire Earrings</a>
                                    </h2>
                                </div>
                                <!-- Product Item Content End -->

                                <!-- Product Item Price Start -->
                                <div class="product-item-price">
                                    <h3>₹10000.00 <span>₹20000.00</span></h3>
                                </div>
                                <!-- Product Item Price End -->
                            </div>
                            <!-- Product Item Body End -->
                        </div>
                        <!-- Product Item End -->

                        <!-- Product Item Start -->
                        <div class="product-item wow fadeInUp" data-wow-delay="0.6s">
                            <!-- Product Item Header Start -->
                            <div class="product-item-header">
                                <!-- Product Item Image Start -->
                                <div class="product-item-image">
                                    <a href="{{ route('productDetails',' ') }}">
                                        <figure>
                                            <img src="{{asset('website')}}/images/product-image-4.png" alt="">
                                        </figure>
                                    </a>
                                </div>
                                <!-- Product Item Image End -->

                                <!-- Product Item Action Start -->
                                <div class="product-item-action">
                                    <ul>
                                        <li><a href="#"><img src="{{asset('website')}}/images/icon-wishlist-primary.svg" alt=""></a></li>
                                        <li><a href="#"><img src="{{asset('website')}}/images/icon-preview-primary.svg" alt=""></a></li>
                                        <li><a href="#"><img src="{{asset('website')}}/images/icon-cart-primary.svg" alt=""></a></li>
                                        <li><a href="#"><img src="{{asset('website')}}/images/icon-compare-primary.svg" alt=""></a></li>
                                        <li><a href="#"><img src="{{asset('website')}}/images/icon-payment-primary.svg" alt=""></a></li>
                                    </ul>
                                </div>
                                <!-- Product Item Action End -->
                            </div>
                            <!-- Product Item Header End -->

                            <!-- Product Item Body Start -->
                            <div class="product-item-body">
                                <!-- Product Item Content Start -->
                                <div class="product-item-content">
                                    <h2 class="product-item-title"><a href="{{ route('productDetails',' ') }}">Bridal Gold Earrings</a>
                                    </h2>
                                </div>
                                <!-- Product Item Content End -->

                                <!-- Product Item Price Start -->
                                <div class="product-item-price">
                                    <h3>₹4000.00 <span>₹8000.00</span></h3>
                                </div>
                                <!-- Product Item Price End -->
                            </div>
                            <!-- Product Item Body End -->
                        </div>
                        <!-- Product Item End -->
                    </div>
                    <!-- Related Product Items End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Related Product Section End -->
@endsection