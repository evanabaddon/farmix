@extends('layouts.app')

@section('title', 'Product Details - Farmix')

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
                    <li>Product Details</li>
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
                        <div>
                          <div class="thumb"><img src="https://html.vecurosoft.com/farmix/demo/assets/img/product/product-d-1-1.png" alt="Product Image"></div>
                        </div>
                        <div>
                          <div class="thumb"><img src="https://html.vecurosoft.com/farmix/demo/assets/img/product/product-d-1-2.png" alt="Product Image"></div>
                        </div>
                        <div>
                          <div class="thumb"><img src="https://html.vecurosoft.com/farmix/demo/assets/img/product/product-d-1-3.png" alt="Product Image"></div>
                        </div>
                        <div>
                          <div class="thumb"><img src="https://html.vecurosoft.com/farmix/demo/assets/img/product/product-d-1-4.png" alt="Product Image"></div>
                        </div>
                        <div>
                          <div class="thumb"><img src="https://html.vecurosoft.com/farmix/demo/assets/img/product/product-d-1-5.png" alt="Product Image"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-10 col-md-9">
                    <div class="product-big-img vs-carousel" data-slide-show="1" data-fade="true" data-asnavfor=".product-thumb-slide">
                        <div class="img"><img src="https://html.vecurosoft.com/farmix/demo/assets/img/product/product-d-1-1.png" alt="Product Image"></div>
                        <div class="img"><img src="https://html.vecurosoft.com/farmix/demo/assets/img/product/product-d-1-2.png" alt="Product Image"></div>
                        <div class="img"><img src="https://html.vecurosoft.com/farmix/demo/assets/img/product/product-d-1-3.png" alt="Product Image"></div>
                        <div class="img"><img src="https://html.vecurosoft.com/farmix/demo/assets/img/product/product-d-1-4.png" alt="Product Image"></div>
                        <div class="img"><img src="https://html.vecurosoft.com/farmix/demo/assets/img/product/product-d-1-5.png" alt="Product Image"></div>
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
                  <span class="product-rating__total">Review (03)</span>
                  <span class="available"><i class="far fa-check"></i>Available</span>
                </div>
                <h2 class="product-title">Premium Organic Coconut Oil Jar</h2>
                <div class="actions">
                    <div class="quantity">
                      <div class="quantity__field quantity-container">
                        <input type="number" id="quantity" class="qty-input" step="1" min="1" max="100" name="quantity" value="01" title="Qty">
                        <div class="quantity__buttons">
                          <button class="quantity-plus qty-btn"><i class="fal fa-plus"></i></button>
                          <button class="quantity-minus qty-btn"><i class="fal fa-minus"></i></button>
                        </div>
                      </div>
                    </div>
                    <p class="product-price">$155.00 <del>$189.00</del></p>
                    <p>Free Shipping On This Item</p>
                    <a href="#" class="vs-btn"><i class="far fa-shopping-basket"></i>Add to Cart</a>
                    <a href="#" class="icon-btn"><i class="far fa-heart"></i></a>
                </div>
                <div class="product_meta">
                  <span class="sku_wrapper">
                  <p>SKU:</p> <span class="sku">#CO001</span>
                  </span>
                  <span class="posted_in">
                  <p>Category:</p> <a href="{{ route('product') }}" rel="tag">organic</a>, <a href="{{ route('product') }}" rel="tag">food</a>, <a href="{{ route('product') }}" rel="tag">natural</a>
                </span>
                </div>
                <div class="shep-img">
                    <img src="https://html.vecurosoft.com/farmix/demo/assets/img/service/selling-img-1-2.png" alt="selling-img">
                </div>
              </div>
            </div>
          </div>
          <div class="product-description">
            <div class="product-description__tab">
              <ul class="nav nav-pills" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Description</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-information-tab" data-bs-toggle="pill" data-bs-target="#pills-information" type="button" role="tab" aria-controls="pills-information" aria-selected="false">Additional Information</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Reviews (03)</button>
                </li>
              </ul>
            </div>
            <div class="tab-content" id="pills-tabContent">
              <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="description">
                    <h3 class="description-title h5">Product Description</h3>
                  <p class="text">
                    Our Premium Organic Coconut Oil is extracted from the finest coconuts using cold-pressed methods to preserve all natural nutrients and flavors. This pure, unrefined coconut oil is perfect for cooking, baking, and beauty applications. Rich in medium-chain fatty acids (MCFAs), it provides numerous health benefits including improved metabolism, skin hydration, and hair nourishment.
                  </p>
                  <p class="text mb-5">This versatile coconut oil maintains its natural coconut aroma and taste, making it an excellent choice for both culinary and cosmetic uses. Our sustainable sourcing ensures that every jar supports local coconut farmers while delivering the highest quality product to your table. Free from chemicals, additives, and artificial preservatives.</p>
                     
                    <div class="d-flex mb-5">
                        <div class="list-style1 me-5">
                            <h3 class="description-title h5">Health Benefits</h3>
                            <ul class="list-unstyled">
                                <li><span class="icon"><i class="far fa-check-circle"></i></span>Rich in healthy medium-chain fatty acids (MCFAs)</li>
                                <li><span class="icon"><i class="far fa-check-circle"></i></span>Supports healthy metabolism and weight management</li>
                                <li><span class="icon"><i class="far fa-check-circle"></i></span>Natural antimicrobial and antiviral properties</li>
                            </ul>
                        </div>
                        <div class="list-style1">
                            <h3 class="description-title h5">Uses & Applications</h3>
                            <ul class="list-unstyled">
                                <li><span class="icon"><i class="far fa-check-circle"></i></span>Perfect for high-heat cooking and baking</li>
                                <li><span class="icon"><i class="far fa-check-circle"></i></span>Natural moisturizer for skin and hair care</li>
                                <li><span class="icon"><i class="far fa-check-circle"></i></span>Ideal for smoothies and health drinks</li>
                            </ul>
                        </div>
                    </div>
                    <div class="description-img">
                        <img src="https://html.vecurosoft.com/farmix/demo/assets/img/bg/product-details-bg.jpg" alt="product-details">
                    </div>
                </div>
              </div>
              <div class="tab-pane fade" id="pills-information" role="tabpanel" aria-labelledby="pills-information-tab">
                <div class="product-information">
                    <h3 class="description-title h5">Additional Information</h3>
                    <table class="product-information__item table">
                        <tbody>
                          <tr>
                            <th class="product-information__name" scope="row">Type</th>
                            <td>Virgin Coconut Oil, Organic</td>
                          </tr>
                          <tr>
                            <th class="product-information__name" scope="row">Size</th>
                            <td>500ml (16.9 fl oz)</td>
                          </tr>
                          <tr>
                            <th class="product-information__name" scope="row">Brand</th>
                            <td colspan="2">Farmix Organic</td>
                          </tr>
                          <tr>
                            <th class="product-information__name" scope="row">Organic Certification</th>
                            <td colspan="2">USDA Organic, Non-GMO</td>
                          </tr>
                          <tr>
                            <th class="product-information__name" scope="row">Extraction Method</th>
                            <td colspan="2">Cold-Pressed</td>
                          </tr>
                          <tr>
                            <th class="product-information__name" scope="row">Shelf Life</th>
                            <td colspan="2">24 months from manufacture date</td>
                          </tr>
                          <tr>
                            <th class="product-information__name" scope="row">Storage</th>
                            <td colspan="2">Store in cool, dry place</td>
                          </tr>
                        </tbody>
                    </table>
                  </div>
              </div>
              <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                <h3 class="description-title h5">Customer Reviews</h3>
                <div class="row woocommerce-reviews">
                    <h2 class="h5 mt-4">4.8 out of 5 stars</h2>
                    <div class="product-rating">
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                      <span class="product-rating__total">Based on 3 reviews</span>
                    </div>
                    <div class="col-lg-6">
                        <div class="vs-comments-wrap">
                            <ul class="comment-list">
                              <li class="review vs-comment-item">
                                <div class="vs-post-comment">
                                  <div class="comment-avater">
                                    <img src="https://html.vecurosoft.com/farmix/demo/assets/img/blog/comment-author-1.jpg" alt="Comment Author">
                                  </div>
                                  <div class="comment-content">
                                    <div class="comment-content__header">
                                      <div class="review-rating">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                      </div>
                                      <h4 class="name h4">Sarah Johnson</h4>
                                      <span class="commented-on"><i class="fal fa-calendar-alt"></i> Dec 20, 2024</span>
                                    </div>
                                    <p class="text">Excellent quality coconut oil! I use it for cooking and skincare. The taste is pure and natural, and it works wonders for my dry skin. Highly recommended!</p>
                                  </div>
                                </div>
                              </li>
                              <li class="review vs-comment-item">
                                <div class="vs-post-comment">
                                  <div class="comment-avater">
                                    <img src="https://html.vecurosoft.com/farmix/demo/assets/img/blog/comment-author-2.jpg" alt="Comment Author">
                                  </div>
                                  <div class="comment-content">
                                    <div class="comment-content__header">
                                      <div class="review-rating">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                      </div>
                                      <h4 class="name h4">Michael Green</h4>
                                      <span class="commented-on"><i class="fal fa-calendar-alt"></i> Dec 15, 2024</span>
                                    </div>
                                    <p class="text">Perfect for baking and cooking. The coconut flavor is subtle but adds great taste to my recipes. Great value for organic quality.</p>
                                  </div>
                                </div>
                              </li>
                              <li class="review vs-comment-item">
                                <div class="vs-post-comment">
                                  <div class="comment-avater">
                                    <img src="https://html.vecurosoft.com/farmix/demo/assets/img/blog/comment-author-3.jpg" alt="Comment Author">
                                  </div>
                                  <div class="comment-content">
                                    <div class="comment-content__header">
                                      <div class="review-rating">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                      </div>
                                      <h4 class="name h4">Emma Wilson</h4>
                                      <span class="commented-on"><i class="fal fa-calendar-alt"></i> Dec 10, 2024</span>
                                    </div>
                                    <p class="text">Very good coconut oil. I've been using it for hair treatment and it makes my hair so soft and shiny. Will definitely order again.</p>
                                  </div>
                                </div>
                              </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="vs-comment-form review-form">
                            <div id="respond" class="comment-respond">
                              <div class="form-title mb-4">
                                <h3 class="description-title h5">Write a Review</h3>
                                <div class="rating-select">
                                  <label>Your Rating</label>
                                  <p class="stars">
                                    <span>
                                    <a class="star-1" href="#">1</a>
                                    <a class="star-2" href="#">2</a>
                                    <a class="star-3" href="#">3</a>
                                    <a class="star-4" href="#">4</a>
                                    <a class="star-5" href="#">5</a>
                                  </span>
                                  </p>
                                </div>
                              </div>
                              <div class="row">
                                    <div class="col-md-12 form-group">
                                    <input type="text" class="form-control" placeholder="Your Name">
                                    </div>
                                    <div class="col-md-12 form-group">
                                    <input type="email" class="form-control" placeholder="Email Address">
                                    </div>
                                    <div class="col-12 form-group">
                                    <textarea class="form-control" placeholder="Write your review..."></textarea>
                                    </div>
                                    <div class="col-12 form-group mb-0">
                                    <div class="custom-checkbox notice">
                                        <input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes">
                                        <label for="wp-comment-cookies-consent">Save my name, email, and website in this browser for the next time I comment.</label>
                                    </div>
                                    <button class="vs-btn"><span class="vs-btn__bar"></span>Submit Review</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
@endsection
