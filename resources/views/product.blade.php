@extends('layouts.app')

@section('title', ($currentCategory->name ?? 'Our Products') . ' - ' . $generalSettings->site_name)

@section('content')
    <div class="breadcumb-wrapper" data-bg-src="https://html.vecurosoft.com/farmix/demo/assets/img/breadcumb/breadcumb-bg.png">
        <div class="container z-index-common">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Our Products</h1>
            </div>
            <div class="breadcumb-menu-wrap">
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>{{ $currentCategory->name ?? 'Our Products' }}</li>
                </ul>
            </div>
        </div>
    </div>

    <section class="products space">
        <div class="container">
            <div class="vs-sort-bar">
                <div class="row justify-content-between align-items-center">
                    <div class="col-md-auto">
                        <div class="col-auto">
                            {{-- Tampilkan jumlah produk secara dinamis --}}
                            <p class="woocommerce-result-count">Showing {{ $products->firstItem() }}–{{ $products->lastItem() }} of {{ $products->total() }} results</p>
                        </div>
                    </div>
                    <div class="col-md-auto">
                        <div class="row justify-content-center">
                            <div class="col-sm-auto">
                                <form class="woocommerce-ordering" method="get">
                                    <select name="orderby" class="orderby" aria-label="Shop order">
                                        <option value="menu_order" selected="selected">Default Sorting</option>
                                        <option value="popularity">Sort by popularity</option>
                                        <option value="rating">Sort by average rating</option>
                                        <option value="date">Sort by latest</option>
                                        <option value="price">Sort by price: low to high</option>
                                        <option value="price-desc">Sort by price: high to low</option>
                                    </select>
                                </form>
                            </div>
                            <div class="col-auto">
                                <div class="nav" role=tablist>
                                    <a href="#" class="icon-btn" id="tab-shop-list" data-bs-toggle="tab" data-bs-target="#tab-list" role="tab" aria-controls="tab-grid" aria-selected="false"><i class="fas fa-list"></i></a>
                                    <a href="#" class="icon-btn active" id="tab-shop-grid" data-bs-toggle="tab" data-bs-target="#tab-grid" role="tab" aria-controls="tab-grid" aria-selected="true"><i class="fas fa-th"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                {{-- Mulai perulangan untuk setiap produk --}}
                @foreach ($products as $product)
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="product-style1">
                        <div class="product-img">
                            {{-- Cek apakah ada gambar dan ambil gambar pertama --}}
                            @if (is_array($product->images) && count($product->images) > 0)
                                <img src="{{ asset('storage/' . $product->images[0]) }}" alt="{{ $product->name }}">
                            @else
                                <img src="{{ asset('path/to/placeholder.jpg') }}" alt="No image available">
                            @endif
                        </div>
                        {{-- <div class="product-meta">30% Off</div> --}}
                        <div class="product-about">
                            {{-- <p class="text">800 ML</p> --}}
                            {{-- Tampilkan nama produk dan buat tautan dinamis --}}
                            <h2 class="product-title"><a href="{{ route('product-details', ['slug' => $product->slug]) }}">{{ $product->name }}</a></h2>
                            {{-- Tampilkan harga produk --}}
                            <span class="price">{{ formatCurrency($product->price) }}</span>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                {{-- Akhir perulangan --}}
            </div>

            {{-- Render pagination secara dinamis --}}
            <div class="vs-pagination text-center mb-0 mt-4">
                {{ $products->links() }}
            </div>
        </div>
    </section>

    <div class="space-bottom">
        <div class="container">
            <div class="row">
                <div class="offer-deal">
                    <div class="row gy-5 gx-5 align-items-center">
                        {{-- Banner Pertama --}}
                        @if(isset($deal1))
                        <div class="col-lg-6">
                            <div class="row align-items-center" data-bg-src="{{ asset('storage/' . $deal1->background_image) }}">
                                <div class="col-lg-6 col-md-6 px-0">
                                    <div class="deal-offer white-style">
                                        <span class="offer-subtitle">{{ $deal1->subtitle }}</span>
                                        <h2 class="offer-title h3">{{ $deal1->title }}</h2>
                                        <p class="offer-text">{{ $deal1->text }}</p>
                                        <span class="price">
                                            @if($deal1->price_old) <del>{{ $deal1->price_old }}</del> @endif
                                            {{ $deal1->price_new }}
                                        </span>
                                        <a href="{{ $deal1->link }}" class="vs-btn">Shop Now</a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 px-0">
                                    <div class="offer-img">
                                        <img src="{{ asset('storage/' . $deal1->offer_image) }}" alt="offer">
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif

                        {{-- Banner Kedua --}}
                        @if(isset($deal2))
                        <div class="col-lg-6">
                            <div class="row align-items-center" data-bg-src="{{ asset('storage/' . $deal2->background_image) }}">
                                <div class="col-lg-6 col-md-6 px-0">
                                    <div class="deal-offer">
                                        <span class="offer-subtitle">{{ $deal2->subtitle }}</span>
                                        <h2 class="offer-title h3">{{ $deal2->title }}</h2>
                                        <p class="offer-text">{{ $deal2->text }}</p>
                                        <span class="price">
                                            @if($deal2->price_old) <del>{{ $deal2->price_old }}</del> @endif
                                            {{ $deal2->price_new }}
                                        </span>
                                        <a href="{{ $deal2->link }}" class="vs-btn">Shop Now</a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 px-0">
                                    <div class="offer-img">
                                        <img src="{{ asset('storage/' . $deal2->offer_image) }}" alt="offer">
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
                 </div>
            </div>
        </div>
    </div>
@endsection