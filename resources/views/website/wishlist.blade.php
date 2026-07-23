@extends('layouts.website')
@section('content')

<style>
    .addCartBtn{
    min-width:160px;
    height:45px;
    border-radius:8px;
    transition:.3s;
}

.addCartBtn:hover{
    transform:translateY(-2px);
}

.addCartBtn i{
    font-size:14px;
}

.addCartBtn .text{
    font-weight:600;
}

.btn-default.disabled{
    color:#777;
    opacity:1;
}
</style>

    <!-- Page Header Start -->
    <div class="page-header dark-section parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-3" data-cursor="-opaque">Wishlist</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Wishlist</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Page Account Wishlist Start -->
    <div class="page-account-wishlist">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Wishlist Content Box Start -->
                    <div class="wishlist-item-table wow fadeInUp">

                        <div class="wishlist-item-header">
                            <span class="wishlist-product-tag">Product</span>
                            <span class="wishlist-price-tag">Unit Price</span>
                            <span class="wishlist-status-tag">Stock Status</span>
                            <span class="wishlist-action-tag">Action</span>
                        </div>

                        @forelse($wishlistItems as $item)

                            @php
                                $variant = $item->variant;
                                $product = $variant?->product;
                            @endphp

                            @if($variant && $product)

                                <div class="wishlist-item">

                                    <div class="wishlist-item-image-content">

                                        <div class="wishlist-item-image">
                                            <figure>
                                                <a href="{{ route('productDetails', $product->slug) }}">
                                                    <img src="{{ asset($variant->image) }}" alt="{{ $product->title }}">
                                                </a>
                                            </figure>
                                        </div>

                                        <div class="wishlist-item-info-content">

                                            <div class="wishlist-item-title">
                                                <p>{{ $product->title }}</p>
                                            </div>

                                            <div class="wishlist-item-price">

                                                <p>

                                                    @if($variant->actual_price > $variant->price)
                                                        <span>
                                                            ₹{{ number_format($variant->actual_price, 2) }}
                                                        </span>
                                                    @endif

                                                    ₹{{ number_format($variant->price, 2) }}

                                                </p>

                                                @if($variant->actual_price > $variant->price)
                                                    <p>
                                                        {{ round((($variant->actual_price - $variant->price) / $variant->actual_price) * 100) }}%
                                                        OFF
                                                    </p>
                                                @endif

                                            </div>

                                        </div>

                                    </div>

                                    <div class="wishlist-item-status-action">

                                        <div class="wishlist-item-status">

                                            @if($variant->stock > 0)
                                                <p class="text-success">In Stock</p>
                                            @else
                                                <p class="text-danger">Out Of Stock</p>
                                            @endif

                                        </div>

                                        <div class="wishlist-item-action d-flex align-items-center gap-2">

                                            @if($variant->stock > 0)
                                                 <a href="javascript:void(0);"
                                                                class="hover-tooltip tooltip-left box-icon addCartBtn"
                                                                data-id="{{ $product->variant->id }}">

        <i class="fa-solid fa-cart-shopping me-2"></i>

        <span class="text">Add To Cart</span>

    </a>
                                            @endif

                                            <form action="{{ route('customer.wishlist.remove', $item->id) }}" method="POST">

                                                @csrf
                                                @method('DELETE')

                                                <button type="submit" class="border-0 bg-transparent text-danger">
                                                    <i class="fa-regular fa-trash-can"></i>
                                                </button>

                                            </form>

                                        </div>

                                    </div>

                                </div>

                            @endif

                        @empty

                            <div class="text-center py-5">

                                {{-- <img src="{{ asset('website/images/empty-wishlist.png') }}" width="150"> --}}

                                <h4 class="mt-3">
                                    Nothing Saved Yet
                                </h4>

                                <a href="{{ route('shop') }}" class="btn-default mt-3">
                                    Start Shopping
                                </a>

                            </div>

                        @endforelse

                    </div>
                    <!-- Wishlist Content Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Account Wishlist End -->
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

@endsection