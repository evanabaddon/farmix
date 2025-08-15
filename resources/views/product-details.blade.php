@extends('layouts.app')

@section('title', $product->name . ' - ' . $generalSettings->site_name)

@section('content')
    <!--==============================
    Cart Side bar
    ============================== -->
    <div class="sideCart-wrapper offcanvas-wrapper d-none d-lg-block">
        <div class="sidemenu-content">
        <button class="closeButton border-theme bg-theme-hover sideMenuCls2"><i class="far fa-times"></i></button>
        <div class="widget widget_shopping_cart">
            <h3 class="widget_title">Shopping cart</h3>
            <div class="widget_shopping_cart_content">
            <ul class="cart_list">
                <li class="mini_cart_item">
                <a href="{{ route('product') }}" class="remove"><i class="fal fa-trash-alt"></i></a> <a href="{{ route('product') }}">
                    <img src="https://html.vecurosoft.com/farmix/demo/assets/img/product/product-1-1.png" alt="Cart-Image">Coconut Oil Jar</a>
                <span class="quantity">
                    1 × <span class="amount"><span>$</span>155.00</span>
                </span>
                </li>
                <li class="mini_cart_item">
                <a href="{{ route('product') }}" class="remove"><i class="fal fa-trash-alt"></i></a> <a href="{{ route('product') }}">
                    <img src="https://html.vecurosoft.com/farmix/demo/assets/img/product/product-1-2.png" alt="Cart-Image">PureFroots Jar</a>
                <span class="quantity">
                    1 × <span class="amount"><span>$</span>14.00</span>
                </span>
                </li>
                <li class="mini_cart_item">
                <a href="{{ route('product') }}" class="remove"><i class="fal fa-trash-alt"></i></a> <a href="{{ route('product') }}">
                    <img src="https://html.vecurosoft.com/farmix/demo/assets/img/product/product-1-3.png" alt="Cart-Image">Nature's Bounty</a>
                <span class="quantity">
                    1 × <span class="amount"><span>$</span>14.00</span>
                </span>
                </li>
            </ul>
            <div class="total">
                <strong>Subtotal:</strong> <span class="amount"><span>$</span>183.00</span>
            </div>
            <div class="buttons">
                <a href="#" class="vs-btn">View cart</a>
                <a href="#" class="vs-btn">Checkout</a>
            </div>
            </div>
        </div>
        </div>
    </div>

    <!--==============================
    Breadcumb
    ============================== -->
    <div class="breadcumb-wrapper" data-bg-src="https://html.vecurosoft.com/farmix/demo/assets/img/breadcumb/breadcumb-bg.png">
        <div class="container z-index-common">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Product Details</h1>
            </div>
            <div class="breadcumb-menu-wrap">
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('product') }}">Products</a></li>
                    <li>{{ $product->name }}</li>
                </ul>
            </div>
        </div>
    </div>

    <!--==============================
    Products-details area
    ============================== -->
    <div class="vs-product-wrapper product-details space-top space-extra-bottom">
        <div class="container">
          <div class="row g-5">
            <div class="col-lg-6">
              <div class="product-slide-row row">
                <div class="col-lg-2 col-md-3">
                    <div class="product-thumb-slide vs-carousel" data-slide-show="6" data-md-slide-show="3" data-sm-slide-show="3" data-xs-slide-show="3" data-asnavfor=".product-big-img" data-vertical="true" data-md-vertical="true" data-sm-vertical="false">
                        @foreach ($product->images as $key => $image)
                        <div>
                          <div class="thumb"><img src="{{ asset('storage/' . $image) }}" alt="Product Image"></div>
                        </div>
                        @endforeach

                    </div>
                </div>
                <div class="col-lg-10 col-md-9">
                    <div class="product-big-img vs-carousel" data-slide-show="1" data-fade="true" data-asnavfor=".product-thumb-slide">
                      @foreach ($product->images as $key => $image)
                        <div class="img"><img src="{{ asset('storage/' . $image) }}" alt="Product Image"></div>
                        @endforeach
                    </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="product-about">
                <div class="product-rating">
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                  <span class="available"><i class="far fa-check"></i>Available</span>
                </div>
                <h2 class="product-title">{{ $product->name }}</h2>
                <div class="actions">
                    <p class="product-price">Rp. {{ number_format($product->price, 0, ',', '.') }}</p>
                </div>
                <div class="product_meta">
                  <span class="sku_wrapper">
                  <p>SKU:</p> <span class="sku">{{ $product->sku }}</span>
                  </span>
                  <span class="posted_in">
                  <p>Category:</p> <a href="{{ route('product') }}" rel="tag">{{ $product->category->name ?? 'Uncategorized' }}</a>
                </span>
                </div>
              </div>
            </div>
          </div>
          <div class="product-description">
            <div class="product-description__tab">
              <ul class="nav nav-pills" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Product Description</button>
                </li>
              </ul>
            </div>
            <div class="tab-content" id="pills-tabContent">
              <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="description">
                  <p class="text">
                    {!! $product->description !!}
                  </p>
                </div>
              </div>
             
            </div>
          </div>
        </div>
    </div>
@endsection
