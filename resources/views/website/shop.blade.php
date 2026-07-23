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
                            @foreach($products as $product)

                                <div class="product-item wow fadeInUp">

                                    <!-- Product Item Header -->
                                    <div class="product-item-header">

                                        <div class="product-item-image">
                                            <a href="{{ route('productDetails', $product->slug) }}">
                                                <figure>
                                                    <img src="{{ asset($product->image) }}" alt="{{ $product->title }}">
                                                </figure>
                                            </a>
                                        </div>

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

                                                        <img src="{{ asset('website/images/icon-cart-primary.svg') }}" alt="">
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>

                                    <!-- Product Item Body -->
                                    <div class="product-item-body">

                                        <div class="product-item-content">
                                            <h2 class="product-item-title">
                                                <a href="{{ route('productDetails', $product->slug) }}">
                                                    {{ $product->title }}
                                                </a>
                                            </h2>
                                        </div>

                                        <div class="product-item-price">


                                            <h3>
                                                ₹{{ number_format($product->variant->price, 2) }}

                                                @if($product->variant->actual_price && $product->variant->actual_price > $product->variant->price)
                                                    <span>₹{{ number_format($product->variant->actual_price, 2) }}</span>
                                                @endif
                                            </h3>

                                        </div>

                                    </div>

                                </div>

                            @endforeach
                            <!-- Product Item End -->
                        </div>
                        <!-- Product item List End -->


                    </div>
                    <!-- Product item List Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Products Section End -->
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

                }, // <-- Missing comma was here

                error: function (xhr) {
                    console.log(xhr.responseText);
                    toastr.error("Something went wrong");
                }

            });

        });
    </script>

@endsection