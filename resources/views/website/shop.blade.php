@extends('layouts.website')
@section('content')

    @php
        $wishlistIds = auth()->check()
            ? \App\Models\WishlistItem::where('user_id', auth()->id())
                ->pluck('product_variant_id')
                ->toArray()
            : [];
    @endphp
    <!-- Page Header Start -->
    <div class="page-header dark-section parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-3" data-cursor="-opaque">Premium Jewellery</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Premium jewellery</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Page Products Section Start -->
    <div class="page-products">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-4">
                    <!-- Page Single Sidebar Start -->
                    <div class="page-single-sidebar">
                        <!-- Page Category Filter Header Start -->
                        <div class="product-category-filter-header wow fadeInUp">
                            <div class="product-category-filter-title">
                                <img src="{{asset('website')}}/images/icon-filter.svg" alt="">
                                <h2>Filter By</h2>
                            </div>
                            <div class="product-category-filter-clear-btn">
                                <a href="#">Clear All</a>
                            </div>
                        </div>
                        <!-- Page Category Filter Header End -->

                        <!-- Product Category Item List Start -->
                        <div class="product-category-item-list">
                            <!-- Product Category Item Start -->
                            <div class="product-category-item wow fadeInUp" data-wow-delay="0.2s">
                                <h2 class="product-category-item-title">Categories</h2>
                                <ul>
                                    @foreach($categories as $category)

                                        <li>
                                            <input type="checkbox" id="Rings" name="interest" value="Rings">
                                            <label for="Rings" style="color: black;">{{ $category->title }}</label>
                                        </li>
                                    @endforeach
                                   
                                </ul>
                            </div>
                            <!-- Product Category Item End -->

                          

                            <!-- Product Category Item Start -->
                            {{-- <div class="product-category-item wow fadeInUp" data-wow-delay="0.6s">
                                <h2 class="product-category-item-title">Stone Type</h2>
                                <ul>
                                    <li>
                                        <input type="checkbox" id="Diamond" name="interest" value="Diamond">
                                        <label for="Diamond">Diamond</label>
                                    </li>
                                    <li>
                                        <input type="checkbox" id="Pearl" name="interest" value="Pearl">
                                        <label for="Pearl">Pearl</label>
                                    </li>
                                    <li>
                                        <input type="checkbox" id="Ruby" name="interest" value="Ruby">
                                        <label for="Ruby">Ruby</label>
                                    </li>
                                    <li>
                                        <input type="checkbox" id="Emerald" name="interest" value="Emerald">
                                        <label for="Emerald">Emerald</label>
                                    </li>
                                    <li>
                                        <input type="checkbox" id="Sapphire" name="interest" value="Sapphire">
                                        <label for="Sapphire">Sapphire</label>
                                    </li>
                                </ul>
                            </div> --}}
                            <!-- Product Category Item End -->
                        </div>
                        <!-- Product Category Item List End -->
                    </div>
                    <!-- Page Single Sidebar End -->
                </div>

                <div class="col-xl-9 col-lg-8">
                    <!-- Product item List Box Start -->
                    <div class="product-item-list-box">
                        <!-- Product Category Filter Header Start -->
                        {{-- <div class="product-category-filter-header wow fadeInUp">
                            <div class="product-category-filter-title">
                                <h2>Showing all results</h2>
                            </div>
                            <div class="product-category-result-info">
                                <div class="product-category-result-pagination">
                                    <ul>
                                        <li><a href="#">1</a></li>
                                        <li><a href="#">9</a></li>
                                        <li><a href="#">12</a></li>
                                        <li><a href="#">15</a></li>
                                    </ul>
                                </div>
                                <div class="product-category-sorting-list">
                                    <select name="sorting_list" class="form-control form-select" id="sorting_list"
                                        required="">
                                        <option value="" disabled="" selected="">Default Sorting</option>
                                        <option value="Low_to_High">Low to High</option>
                                        <option value="High_to_Low">High to Low</option>
                                        <option value="Popularity">Popularity</option>
                                        <option value="Best_Sellers">Best Sellers</option>
                                        <option value="Trending">Trending</option>
                                        <option value="Most_Reviewed">Most Reviewed</option>
                                    </select>
                                </div>
                            </div>
                        </div> --}}
                        <!-- Product Category Filter Header End -->

                        <!-- Product item List Start -->
                        <div class="product-item-list">
                            <!-- Product Item Start -->
                            <div class="product-item wow fadeInUp">
                                <!-- Product Item Header Start -->
                                <div class="product-item-header">
                                    <!-- Product Item Image Start -->
                                    <div class="product-item-image">
                                        <a href="{{ route('productDetails') }}">
                                            <figure>
                                                <img src="{{asset('website')}}/images/product-image-1.png" alt="">
                                            </figure>
                                        </a>
                                    </div>
                                    <!-- Product Item Image End -->

                                    <!-- Product Item Action Start -->
                                    <div class="product-item-action">
                                        <ul>
                                            <li><a href="#"><img src="{{asset('website')}}/images/icon-wishlist-primary.svg"
                                                        alt=""></a></li>
                                            <li><a href="#"><img src="{{asset('website')}}/images/icon-preview-primary.svg"
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
                                        <h2 class="product-item-title"><a href="{{ route('productDetails') }}">Timeless
                                                Elegance
                                                Ring</a></h2>
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
                                        <a href="{{ route('productDetails') }}">
                                            <figure>
                                                <img src="{{asset('website')}}/images/product-image-2.png" alt="">
                                            </figure>
                                        </a>
                                    </div>
                                    <!-- Product Item Image End -->

                                    <!-- Product Item Action Start -->
                                    <div class="product-item-action">
                                        <ul>
                                            <li><a href="#"><img src="{{asset('website')}}/images/icon-wishlist-primary.svg"
                                                        alt=""></a></li>
                                            <li><a href="#"><img src="{{asset('website')}}/images/icon-preview-primary.svg"
                                                        alt=""></a></li>
                                            <li><a href="#"><img src="{{asset('website')}}/images/icon-cart-primary.svg"
                                                        alt=""></a></li>
                                            <li><a href="#"><img src="{{asset('website')}}/images/icon-compare-primary.svg"
                                                        alt=""></a></li>
                                            <li><a href="#"><img src="{{asset('website')}}/images/icon-payment-primary.svg"
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
                                        <h2 class="product-item-title"><a href="{{ route('productDetails') }}">Kundan Curve
                                                Necklace</a></h2>
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
                                        <a href="{{ route('productDetails') }}">
                                            <figure>
                                                <img src="{{asset('website')}}/images/product-image-3.png" alt="">
                                            </figure>
                                        </a>
                                    </div>
                                    <!-- Product Item Image End -->

                                    <!-- Product Item Action Start -->
                                    <div class="product-item-action">
                                        <ul>
                                            <li><a href="#"><img src="{{asset('website')}}/images/icon-wishlist-primary.svg"
                                                        alt=""></a></li>
                                            <li><a href="#"><img src="{{asset('website')}}/images/icon-preview-primary.svg"
                                                        alt=""></a></li>
                                            <li><a href="#"><img src="{{asset('website')}}/images/icon-cart-primary.svg"
                                                        alt=""></a></li>
                                            <li><a href="#"><img src="{{asset('website')}}/images/icon-compare-primary.svg"
                                                        alt=""></a></li>
                                            <li><a href="#"><img src="{{asset('website')}}/images/icon-payment-primary.svg"
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
                                        <h2 class="product-item-title"><a href="{{ route('productDetails') }}">Gold
                                                Solitaire
                                                Earrings</a></h2>
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
                                        <a href="{{ route('productDetails') }}">
                                            <figure>
                                                <img src="{{asset('website')}}/images/product-image-4.png" alt="">
                                            </figure>
                                        </a>
                                    </div>
                                    <!-- Product Item Image End -->

                                    <!-- Product Item Action Start -->
                                    <div class="product-item-action">
                                        <ul>
                                            <li><a href="#"><img src="{{asset('website')}}/images/icon-wishlist-primary.svg"
                                                        alt=""></a></li>
                                            <li><a href="#"><img src="{{asset('website')}}/images/icon-preview-primary.svg"
                                                        alt=""></a></li>
                                            <li><a href="#"><img src="{{asset('website')}}/images/icon-cart-primary.svg"
                                                        alt=""></a></li>
                                            <li><a href="#"><img src="{{asset('website')}}/images/icon-compare-primary.svg"
                                                        alt=""></a></li>
                                            <li><a href="#"><img src="{{asset('website')}}/images/icon-payment-primary.svg"
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
                                        <h2 class="product-item-title"><a href="{{ route('productDetails') }}">Bridal Gold
                                                Hoop
                                                Earrings</a></h2>
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
                            <div class="product-item wow fadeInUp" data-wow-delay="0.8s">
                                <!-- Product Item Header Start -->
                                <div class="product-item-header">
                                    <!-- Product Item Image Start -->
                                    <div class="product-item-image">
                                        <a href="{{ route('productDetails') }}">
                                            <figure>
                                                <img src="{{asset('website')}}/images/product-image-5.png" alt="">
                                            </figure>
                                        </a>
                                    </div>
                                    <!-- Product Item Image End -->

                                    <!-- Product Item Action Start -->
                                    <div class="product-item-action">
                                        <ul>
                                            <li><a href="#"><img src="{{asset('website')}}/images/icon-wishlist-primary.svg"
                                                        alt=""></a></li>
                                            <li><a href="#"><img src="{{asset('website')}}/images/icon-preview-primary.svg"
                                                        alt=""></a></li>
                                            <li><a href="#"><img src="{{asset('website')}}/images/icon-cart-primary.svg"
                                                        alt=""></a></li>
                                            <li><a href="#"><img src="{{asset('website')}}/images/icon-compare-primary.svg"
                                                        alt=""></a></li>
                                            <li><a href="#"><img src="{{asset('website')}}/images/icon-payment-primary.svg"
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
                                        <h2 class="product-item-title"><a href="{{ route('productDetails') }}">Diamond Hoop
                                                Earrings</a></h2>
                                    </div>
                                    <!-- Product Item Content End -->

                                    <!-- Product Item Price Start -->
                                    <div class="product-item-price">
                                        <h3>₹5000.00 <span>₹8000.00</span></h3>
                                    </div>
                                    <!-- Product Item Price End -->
                                </div>
                                <!-- Product Item Body End -->
                            </div>
                            <!-- Product Item End -->

                            <!-- Product Item Start -->
                            <div class="product-item wow fadeInUp" data-wow-delay="1s">
                                <!-- Product Item Header Start -->
                                <div class="product-item-header">
                                    <!-- Product Item Image Start -->
                                    <div class="product-item-image">
                                        <a href="{{ route('productDetails') }}">
                                            <figure>
                                                <img src="{{asset('website')}}/images/product-image-6.png" alt="">
                                            </figure>
                                        </a>
                                    </div>
                                    <!-- Product Item Image End -->

                                    <!-- Product Item Action Start -->
                                    <div class="product-item-action">
                                        <ul>
                                            <li><a href="#"><img src="{{asset('website')}}/images/icon-wishlist-primary.svg"
                                                        alt=""></a></li>
                                            <li><a href="#"><img src="{{asset('website')}}/images/icon-preview-primary.svg"
                                                        alt=""></a></li>
                                            <li><a href="#"><img src="{{asset('website')}}/images/icon-cart-primary.svg"
                                                        alt=""></a></li>
                                            <li><a href="#"><img src="{{asset('website')}}/images/icon-compare-primary.svg"
                                                        alt=""></a></li>
                                            <li><a href="#"><img src="{{asset('website')}}/images/icon-payment-primary.svg"
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
                                        <h2 class="product-item-title"><a href="{{ route('productDetails') }}">Wavy Diamond
                                                Gold
                                                Band</a></h2>
                                    </div>
                                    <!-- Product Item Content End -->

                                    <!-- Product Item Price Start -->
                                    <div class="product-item-price">
                                        <h3>₹2000.00 <span>₹8000.00</span></h3>
                                    </div>
                                    <!-- Product Item Price End -->
                                </div>
                                <!-- Product Item Body End -->
                            </div>
                            <!-- Product Item End -->

                            <!-- Product Item Start -->
                            <div class="product-item wow fadeInUp" data-wow-delay="1.2s">
                                <!-- Product Item Header Start -->
                                <div class="product-item-header">
                                    <!-- Product Item Image Start -->
                                    <div class="product-item-image">
                                        <a href="{{ route('productDetails') }}">
                                            <figure>
                                                <img src="{{asset('website')}}/images/product-image-7.png" alt="">
                                            </figure>
                                        </a>
                                    </div>
                                    <!-- Product Item Image End -->

                                    <!-- Product Item Action Start -->
                                    <div class="product-item-action">
                                        <ul>
                                            <li><a href="#"><img src="{{asset('website')}}/images/icon-wishlist-primary.svg"
                                                        alt=""></a></li>
                                            <li><a href="#"><img src="{{asset('website')}}/images/icon-preview-primary.svg"
                                                        alt=""></a></li>
                                            <li><a href="#"><img src="{{asset('website')}}/images/icon-cart-primary.svg"
                                                        alt=""></a></li>
                                            <li><a href="#"><img src="{{asset('website')}}/images/icon-compare-primary.svg"
                                                        alt=""></a></li>
                                            <li><a href="#"><img src="{{asset('website')}}/images/icon-payment-primary.svg"
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
                                        <h2 class="product-item-title"><a href="{{ route('productDetails') }}">Zinzi Silver
                                                Style
                                                Earrings</a></h2>
                                    </div>
                                    <!-- Product Item Content End -->

                                    <!-- Product Item Price Start -->
                                    <div class="product-item-price">
                                        <h3>₹10000.00 <span>₹15000.00</span></h3>
                                    </div>
                                    <!-- Product Item Price End -->
                                </div>
                                <!-- Product Item Body End -->
                            </div>
                            <!-- Product Item End -->

                            <!-- Product Item Start -->
                            <div class="product-item wow fadeInUp" data-wow-delay="1.4s">
                                <!-- Product Item Header Start -->
                                <div class="product-item-header">
                                    <!-- Product Item Image Start -->
                                    <div class="product-item-image">
                                        <a href="{{ route('productDetails') }}">
                                            <figure>
                                                <img src="{{asset('website')}}/images/product-image-8.png" alt="">
                                            </figure>
                                        </a>
                                    </div>
                                    <!-- Product Item Image End -->

                                    <!-- Product Item Action Start -->
                                    <div class="product-item-action">
                                        <ul>
                                            <li><a href="#"><img src="{{asset('website')}}/images/icon-wishlist-primary.svg"
                                                        alt=""></a></li>
                                            <li><a href="#"><img src="{{asset('website')}}/images/icon-preview-primary.svg"
                                                        alt=""></a></li>
                                            <li><a href="#"><img src="{{asset('website')}}/images/icon-cart-primary.svg"
                                                        alt=""></a></li>
                                            <li><a href="#"><img src="{{asset('website')}}/images/icon-compare-primary.svg"
                                                        alt=""></a></li>
                                            <li><a href="#"><img src="{{asset('website')}}/images/icon-payment-primary.svg"
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
                                        <h2 class="product-item-title"><a href="{{ route('productDetails') }}">Diamond
                                                Engagement
                                                Ring</a></h2>
                                    </div>
                                    <!-- Product Item Content End -->

                                    <!-- Product Item Price Start -->
                                    <div class="product-item-price">
                                        <h3>₹8000.00 <span>₹15000.00</span></h3>
                                    </div>
                                    <!-- Product Item Price End -->
                                </div>
                                <!-- Product Item Body End -->
                            </div>
                            <!-- Product Item End -->

                            <!-- Product Item Start -->
                            <div class="product-item wow fadeInUp" data-wow-delay="1.6s">
                                <!-- Product Item Header Start -->
                                <div class="product-item-header">
                                    <!-- Product Item Image Start -->
                                    <div class="product-item-image">
                                        <a href="{{ route('productDetails') }}">
                                            <figure>
                                                <img src="{{asset('website')}}/images/product-image-9.png" alt="">
                                            </figure>
                                        </a>
                                    </div>
                                    <!-- Product Item Image End -->

                                    <!-- Product Item Action Start -->
                                    <div class="product-item-action">
                                        <ul>
                                            <li><a href="#"><img src="{{asset('website')}}/images/icon-wishlist-primary.svg"
                                                        alt=""></a></li>
                                            <li><a href="#"><img src="{{asset('website')}}/images/icon-preview-primary.svg"
                                                        alt=""></a></li>
                                            <li><a href="#"><img src="{{asset('website')}}/images/icon-cart-primary.svg"
                                                        alt=""></a></li>
                                            <li><a href="#"><img src="{{asset('website')}}/images/icon-compare-primary.svg"
                                                        alt=""></a></li>
                                            <li><a href="#"><img src="{{asset('website')}}/images/icon-payment-primary.svg"
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
                                        <h2 class="product-item-title"><a href="{{ route('productDetails') }}"> Locking
                                                Diamond Orbit
                                                Ring</a></h2>
                                    </div>
                                    <!-- Product Item Content End -->

                                    <!-- Product Item Price Start -->
                                    <div class="product-item-price">
                                        <h3>₹6000.00 <span>₹12000.00</span></h3>
                                    </div>
                                    <!-- Product Item Price End -->
                                </div>
                                <!-- Product Item Body End -->
                            </div>
                            <!-- Product Item End -->
                        </div>
                        <!-- Product item List End -->

                        <!-- Product Leader More Button Start -->
                        <div class="product-learn-more-btn wow fadeInUp" data-wow-delay="0.2s">
                            <a href="#" class="btn-default">Load More</a>
                        </div>
                        <!-- Product Leader More Button End -->
                    </div>
                    <!-- Product item List Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Products Section End -->
@endsection