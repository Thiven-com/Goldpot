@extends('layouts.website')
@section('content')
    <!-- Page Header Start -->
    <div class="page-header dark-section parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-3" data-cursor="-opaque">Our Blog</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Blog</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Page Blog Start -->
    <div class="page-blog">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-md-6">
                    <!-- Post Item Start -->
                    <div class="post-item wow fadeInUp">
                        <!-- Post Featured Image Start-->
                        <div class="post-featured-image">
                            <a href="{{ route('blogDetails') }}" data-cursor-text="View">
                                <figure class="image-anime">
                                    <img src="{{asset('website')}}/images/post-1.jpg" alt="">
                                </figure>
                            </a>
                        </div>
                        <!-- Post Featured Image End -->

                        <!-- Post Item Body Start -->
                        <div class="post-item-body">
                            <!-- Post Item Content Start -->
                            <div class="post-item-content">
                                <h2><a href="{{ route('blogDetails') }}">Bridal Jewellery Guide Complete Your Wedding Look</a></h2>
                            </div>
                            <!-- Post Item Content End -->

                            <!-- Post Item Button Start-->
                            <div class="post-item-btn">
                                <a href="{{ route('blogDetails') }}" class="readmore-btn">read more</a>
                            </div>
                            <!-- Post Item Button End-->
                        </div>
                        <!-- Post Item Body End -->
                    </div>
                    <!-- Post Item End -->
                </div>

                <div class="col-xl-4 col-md-6">
                    <!-- Post Item Start -->
                    <div class="post-item wow fadeInUp" data-wow-delay="0.2s">
                        <!-- Post Featured Image Start-->
                        <div class="post-featured-image">
                            <a href="{{ route('blogDetails') }}" data-cursor-text="View">
                                <figure class="image-anime">
                                    <img src="{{asset('website')}}/images/post-2.jpg" alt="">
                                </figure>
                            </a>
                        </div>
                        <!-- Post Featured Image End -->

                        <!-- Post Item Body Start -->
                        <div class="post-item-body">
                            <!-- Post Item Content Start -->
                            <div class="post-item-content">
                                <h2><a href="{{ route('blogDetails') }}">How to Choose the Perfect Diamond Engagement Ring</a></h2>
                            </div>
                            <!-- Post Item Content End -->

                            <!-- Post Item Button Start-->
                            <div class="post-item-btn">
                                <a href="{{ route('blogDetails') }}" class="readmore-btn">read more</a>
                            </div>
                            <!-- Post Item Button End-->
                        </div>
                        <!-- Post Item Body End -->
                    </div>
                    <!-- Post Item End -->
                </div>

                <div class="col-xl-4 col-md-6">
                    <!-- Post Item Start -->
                    <div class="post-item wow fadeInUp" data-wow-delay="0.4s">
                        <!-- Post Featured Image Start-->
                        <div class="post-featured-image">
                            <a href="{{ route('blogDetails') }}" data-cursor-text="View">
                                <figure class="image-anime">
                                    <img src="{{asset('website')}}/images/post-3.jpg" alt="">
                                </figure>
                            </a>
                        </div>
                        <!-- Post Featured Image End -->

                        <!-- Post Item Body Start -->
                        <div class="post-item-body">
                            <!-- Post Item Content Start -->
                            <div class="post-item-content">
                                <h2><a href="{{ route('blogDetails') }}">Caring for Your Jewellery Tips to Keep It Shining</a></h2>
                            </div>
                            <!-- Post Item Content End -->

                            <!-- Post Item Button Start-->
                            <div class="post-item-btn">
                                <a href="{{ route('blogDetails') }}" class="readmore-btn">read more</a>
                            </div>
                            <!-- Post Item Button End-->
                        </div>
                        <!-- Post Item Body End -->
                    </div>
                    <!-- Post Item End -->
                </div>

                <div class="col-xl-4 col-md-6">
                    <!-- Post Item Start -->
                    <div class="post-item wow fadeInUp" data-wow-delay="0.6s">
                        <!-- Post Featured Image Start-->
                        <div class="post-featured-image">
                            <a href="{{ route('blogDetails') }}" data-cursor-text="View">
                                <figure class="image-anime">
                                    <img src="{{asset('website')}}/images/post-4.jpg" alt="">
                                </figure>
                            </a>
                        </div>
                        <!-- Post Featured Image End -->

                        <!-- Post Item Body Start -->
                        <div class="post-item-body">
                            <!-- Post Item Content Start -->
                            <div class="post-item-content">
                                <h2><a href="{{ route('blogDetails') }}">Timeless Elegance Ring: Where Beauty Meets Simplicity</a>
                                </h2>
                            </div>
                            <!-- Post Item Content End -->

                            <!-- Post Item Button Start-->
                            <div class="post-item-btn">
                                <a href="{{ route('blogDetails') }}" class="readmore-btn">read more</a>
                            </div>
                            <!-- Post Item Button End-->
                        </div>
                        <!-- Post Item Body End -->
                    </div>
                    <!-- Post Item End -->
                </div>

                <div class="col-xl-4 col-md-6">
                    <!-- Post Item Start -->
                    <div class="post-item wow fadeInUp" data-wow-delay="0.8s">
                        <!-- Post Featured Image Start-->
                        <div class="post-featured-image">
                            <a href="{{ route('blogDetails') }}" data-cursor-text="View">
                                <figure class="image-anime">
                                    <img src="{{asset('website')}}/images/post-5.jpg" alt="">
                                </figure>
                            </a>
                        </div>
                        <!-- Post Featured Image End -->

                        <!-- Post Item Body Start -->
                        <div class="post-item-body">
                            <!-- Post Item Content Start -->
                            <div class="post-item-content">
                                <h2><a href="{{ route('blogDetails') }}">The Art of Minimal Luxury: Timeless Elegance Ring Guide</a>
                                </h2>
                            </div>
                            <!-- Post Item Content End -->

                            <!-- Post Item Button Start-->
                            <div class="post-item-btn">
                                <a href="{{ route('blogDetails') }}" class="readmore-btn">read more</a>
                            </div>
                            <!-- Post Item Button End-->
                        </div>
                        <!-- Post Item Body End -->
                    </div>
                    <!-- Post Item End -->
                </div>

                <div class="col-xl-4 col-md-6">
                    <!-- Post Item Start -->
                    <div class="post-item wow fadeInUp" data-wow-delay="1s">
                        <!-- Post Featured Image Start-->
                        <div class="post-featured-image">
                            <a href="{{ route('blogDetails') }}" data-cursor-text="View">
                                <figure class="image-anime">
                                    <img src="{{asset('website')}}/images/post-6.jpg" alt="">
                                </figure>
                            </a>
                        </div>
                        <!-- Post Featured Image End -->

                        <!-- Post Item Body Start -->
                        <div class="post-item-body">
                            <!-- Post Item Content Start -->
                            <div class="post-item-content">
                                <h2><a href="{{ route('blogDetails') }}">Elegance Redefined: Discover the Perfect Everyday Ring</a>
                                </h2>
                            </div>
                            <!-- Post Item Content End -->

                            <!-- Post Item Button Start-->
                            <div class="post-item-btn">
                                <a href="{{ route('blogDetails') }}" class="readmore-btn">read more</a>
                            </div>
                            <!-- Post Item Button End-->
                        </div>
                        <!-- Post Item Body End -->
                    </div>
                    <!-- Post Item End -->
                </div>

                <div class="col-lg-12">
                    <!-- Page Pagination Start -->
                    <div class="page-pagination wow fadeInUp" data-wow-delay="0.4s">
                        <ul class="pagination">
                            <li><a href="#"><i class="fa-solid fa-angle-left"></i></a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#"><i class="fa-solid fa-angle-right"></i></a></li>
                        </ul>
                    </div>
                    <!-- Page Pagination End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Blog End -->
@endsection