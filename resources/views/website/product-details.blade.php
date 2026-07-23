@extends('layouts.website')
@section('content')
    <style>
        .product-single-image-slider {
            width: 145px;
            height: 440px;
            overflow-y: auto;
            overflow-x: hidden;
        }

        @media only screen and (max-width: 767px) {
            .product-single-image-slider {
                width: 100%;
                height: auto;
            }
        }
    </style>
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
                                    <li class="breadcrumb-item"><a href="{{ route('productDetails', ' ') }}">Home</a></li>
                                    <li class="breadcrumb-item"><a href="{{ route('productDetails', ' ') }}">Product</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">{{ $product->title }}</li>
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
                                                <img src="{{ asset($product->image) }}" alt="">
                                            </figure>
                                        </div>
                                        <div class="swiper-slide">
                                            <figure>
                                                <img src="{{ asset($variant->image) }}" alt="">
                                            </figure>
                                        </div>
                                        @foreach($product->images as $image)
                                            <div class="swiper-slide">
                                                <figure>
                                                    <img src="{{ asset($image->url) }}" alt="">
                                                </figure>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <!-- Product Single Image Slider End -->

                                <!-- Product Single Image Item Start -->
                                <div class="swiper product-single-image-item">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <figure class="imgae-anime">
                                                <img src="{{ asset($product->image) }}" alt="">
                                            </figure>
                                        </div>
                                        <div class="swiper-slide">
                                            <figure class="imgae-anime">
                                                <img src="{{ asset($variant->image) }}" alt="">
                                            </figure>
                                        </div>
                                        @foreach($product->images as $image)
                                            <div class="swiper-slide">
                                                <figure class="imgae-anime">
                                                    <img src="{{ asset($image->url) }}" alt="">
                                                </figure>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <!-- Product Single Image Item End -->
                            </div>
                            <!-- Product Single Image Box End -->

                            <!-- Product Single Info Content Start -->
                            <div class="product-single-info-content">
                                <!-- Product Single title Start -->
                                <div class="product-single-title wow fadeInUp">
                                    <h1>{{ $product->title }}</h1>
                                    <span>{{ optional($product->category)->title }}</span>
                                </div>
                                <!-- Product Single title End -->

                                <!-- Product Single Description Start -->
                                <div class="product-single-description wow fadeInUp" data-wow-delay="0.2s">
                                    <p>
                                        {{ $product->short_description }}
                                    </p>
                                </div>
                                <!-- Product Single Description End -->

                                <!-- Product Single Price Start -->
                                <div class="product-single-price wow fadeInUp" data-wow-delay="0.4s">
                                    <h2>₹{{ number_format($variant->price, 2) }}
                                        <sub>₹{{ number_format($variant->actual_price, 2) }}</sub>
                                    </h2>
                                    <span>Inclusive of all taxes*</span>
                                </div>
                                <!-- Product Single Price End -->

                                <div class="product-single-details-list wow fadeInUp" data-wow-delay="0.6s">

                                    @php
                                        $attributes = [];

                                        foreach ($product->variants as $variant) {

                                            foreach ($variant->attributeMappings as $mapping) {

                                                $attributeId = $mapping->attribute->id;
                                                $valueId = $mapping->value->id;

                                                if (!isset($attributes[$attributeId])) {
                                                    $attributes[$attributeId] = [
                                                        'id' => $attributeId,
                                                        'name' => $mapping->attribute->name,
                                                        'values' => []
                                                    ];
                                                }

                                                if (!isset($attributes[$attributeId]['values'][$valueId])) {
                                                    $attributes[$attributeId]['values'][$valueId] = [
                                                        'id' => $valueId,
                                                        'name' => $mapping->value->name,
                                                        'image' => $variant->image,
                                                        'variant_id' => $variant->id,
                                                        'price' => $variant->price,
                                                    ];
                                                }
                                            }
                                        }
                                    @endphp

                                    @foreach($attributes as $attribute)

                                        <h3>{{ $attribute['name'] }}</h3>

                                        <ul class="product-variant-list">
                                            @php
                                                $selectedValueId = request('variant_id');
                                            @endphp
                                            @foreach($attribute['values'] as $value)

                                                                        <li>

                                                                            <input type="radio" id="variant{{ $value['variant_id'] }}"
                                                                                name="attribute_{{ $attribute['id'] }}" value="{{ $value['variant_id'] }}"
                                                                                class="variant-radio" {{ $selectedValueId == $value['variant_id'] ? 'checked'
                                                : '' }} onchange="changeVariant({{ $value['variant_id'] }})">

                                                                            <label for="variant{{ $value['variant_id'] }}">
                                                                                {{ $value['name'] }}
                                                                            </label>

                                                                        </li>

                                            @endforeach

                                        </ul>

                                    @endforeach

                                </div>


                                <div class="product-single-content-body wow fadeInUp" data-wow-delay="0.8s">

                                    <div class="qty-box">

                                        <button class="qty-btn minus">-</button>

                                        <input type="text" class="qty-input" id="quantity" value="1" readonly>

                                        <button class="qty-btn plus">+</button>

                                    </div>
                                    <div class="product-single-content-btn">
                                        <a href="javascript:void(0);" class="btn-default addCartBtn"
                                            data-id="{{ $selectedValueId }}">
                                            Add To Cart
                                        </a>
                                    </div>

                                    <div class="product-single-action">

                                        <ul>
                                            <li class="wishlist">
                                                <a href="javascript:void(0);"
                                                    class="hover-tooltip tooltip-left box-icon wishlistBtn"
                                                    data-id="{{ $selectedValueId }}">

                                                    <img src="{{ asset('website/images/icon-wishlist-primary.svg') }}"
                                                        alt="">
                                                </a>
                                            </li>
                                            <li><a href="#"><img src="{{asset('website')}}/images/icon-compare-primary.svg"
                                                        alt=""></a></li>
                                        </ul>

                                    </div>

                                </div>

                                <!-- Product Single Content Footer Start -->
                                <div class="product-single-content-footer wow fadeInUp" data-wow-delay="0.8s">
                                    <!-- Product Shipping Box Start -->
                                    <div class="product-shipping-box">
                                        <ul>
                                            <li><img src="{{asset('website')}}/images/icon-product-shipping-1.svg"
                                                    alt="">Free Shipping &
                                            <li><img src="{{asset('website')}}/images/icon-product-shipping-1.svg"
                                                    alt="">Free Shipping &
                                                Exchanges</li>
                                            <li><img src="{{asset('website')}}/images/icon-product-shipping-2.svg"
                                                    alt="">Flexible and Secure
                                            <li><img src="{{asset('website')}}/images/icon-product-shipping-2.svg"
                                                    alt="">Flexible and Secure
                                                Payment, Pay on Delivery</li>
                                            <li><img src="{{asset('website')}}/images/icon-product-shipping-3.svg"
                                                    alt="">600,000 Happy Customers
                                            <li><img src="{{asset('website')}}/images/icon-product-shipping-3.svg"
                                                    alt="">600,000 Happy Customers
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
                                        {{-- <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="second-tab" data-bs-toggle="tab"
                                                data-bs-target="#second" type="button" role="tab" aria-controls="second"
                                                aria-selected="false">Additional Information</button>
                                        </li>

                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="third-tab" data-bs-toggle="tab"
                                                data-bs-target="#third" type="button" role="tab" aria-controls="second"
                                                aria-selected="false">Reviews (50)</button>
                                        </li> --}}
                                    </ul>
                                </div>
                                <!-- Product Step Nav End -->

                                <!-- Product Tab Item Box Start -->
                                <div class="product-tab-item-box tab-pane fade show active" id="first" role="tabpanel">
                                    <div class="product-tab-item-content">
                                        <p>
                                            {!! $product->description !!}
                                        </p>
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
                        @foreach($products as $item)
                            <div class="product-item wow fadeInUp" data-wow-delay="0.6s">
                                <!-- Product Item Header Start -->
                                <div class="product-item-header">
                                    <!-- Product Item Image Start -->
                                    <div class="product-item-image">
                                        <a href="{{ route('productDetails', $item->slug) }}">
                                            <figure>
                                                <img src="{{ asset($item->image) }}" alt="">
                                            </figure>
                                        </a>
                                    </div>
                                    <!-- Product Item Image End -->

                                    <!-- Product Item Action Start -->
                                    <div class="product-item-action">
                                        <ul>
                                            <li><a href="#"><img src="{{asset('website')}}/images/icon-wishlist-primary.svg"
                                                        alt=""></a></li>
                                            <li><a href="#"><img src="{{asset('website')}}/images/icon-cart-primary.svg"
                                                        alt=""></a></li>
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
                                                href="{{ route('productDetails', $item->slug) }}">{{ $item->title }}</a>
                                        </h2>
                                    </div>
                                    <!-- Product Item Content End -->

                                    <!-- Product Item Price Start -->
                                    <div class="product-item-price">
                                        <h3>₹{{ $item->variant->price }} <span>₹{{ $item->variant->actual_price }}</span></h3>
                                    </div>
                                    <!-- Product Item Price End -->
                                </div>
                                <!-- Product Item Body End -->
                            </div>
                        @endforeach
                        <!-- Product Item End -->
                    </div>
                    <!-- Related Product Items End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Related Product Section End -->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
                            return false;
                        }
                        $('#cartCount').text(res.count);

                        button.find('.text').text('Added');

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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
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
                }, // <-- Missing comma was here

                error: function (xhr) {
                    console.log(xhr.responseText);
                    toastr.error("Something went wrong");
                }

            });

        });
    </script>

    <script>
        function changeVariant(variantId) {
            const url = new URL(window.location.href);
            url.searchParams.set('variant_id', variantId);
            window.location.href = url;
        }
    </script>
@endsection