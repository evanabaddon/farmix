<!--==============================
Mobile Menu
============================== -->
<div class="vs-menu-wrapper">
    <div class="vs-menu-area text-center">
        <button class="vs-menu-toggle"><i class="fal fa-times"></i></button>
        <div class="mobile-logo">
            <a href="{{ route('home') }}"><img src="{{ asset('assets/img/logo.png') }}" alt="Farmix"></a>
        </div>
        <div class="vs-mobile-menu">
            <ul>
                <li>
                    <a href="{{ route('home') }}">Home</a>
                </li>
                <li>
                    <a href="{{ route('about') }}">About Us</a>
                </li>
                <li>
                    <a href="{{ route('service') }}">Service</a>
                </li>
                <li>
                    <a href="{{ route('blog') }}">Blog</a>
                </li>
                <li>
                    <a href="{{ route('product') }}">Product</a>
                </li>
                <li>
                    <a href="{{ route('contact') }}">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</div>

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
            <a href="#" class="remove"><i class="fal fa-trash-alt"></i></a> <a href="#">
                <img src="{{ asset('assets/img/product/product-1-1.png') }}" alt="Cart-Image">Fishing Reels Spin</a>
            <span class="quantity">
                1 × <span class="amount"><span>$</span>100.00</span>
            </span>
            </li>
            <li class="mini_cart_item">
            <a href="#" class="remove"><i class="fal fa-trash-alt"></i></a> <a href="#">
                <img src="{{ asset('assets/img/cart/cart-img-2.png') }}" alt="Cart-Image">Spoon lure tackle Baits</a>
            <span class="quantity">
                1 × <span class="amount"><span>$</span>19.00</span>
            </span>
            </li>
            <li class="mini_cart_item">
            <a href="#" class="remove"><i class="fal fa-trash-alt"></i></a> <a href="#">
                <img src="{{ asset('assets/img/cart/cart-img-3.png') }}" alt="Cart-Image">Fishing Reels Globeride</a>
            <span class="quantity">
                1 × <span class="amount"><span>$</span>10.00</span>
            </span>
            </li>
        </ul>
        <div class="total">
            <strong>Subtotal:</strong> <span class="amount"><span>$</span>129.00</span>
        </div>
        <div class="buttons">
            <a href="{{ url('/cart') }}" class="vs-btn">View cart</a>
            <a href="{{ url('/checkout') }}" class="vs-btn">Checkout</a>
        </div>
        </div>
    </div>
    </div>
</div>

<!--==============================
Header Area
==============================-->
<header class="vs-header header-layout1">
    <div class="header-top">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-auto">
                    <div class="header-links">
                        <ul>
                            <li><i class="far fa-map-marker-alt"></i>California, TX 70240</li>
                            <li><i class="far fa-envelope"></i><a href="mailto:info@example.com">info@example.com</a></li>
                            <li><i class="far fa-phone-alt"></i><a href="tel:+4733378901">+473 3378 901</a></li>
                            <li><i class="far fa-clock"></i>Mon - Sat: 09.00 to 06.00</li>
                        </ul>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="social-style1">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sticky-wrapper">
        <div class="sticky-active">
            <div class="menu-area">
                <div class="container">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto">
                            <div class="header-logo">
                                <a href="{{ route('home') }}">
                                    <img src="{{ asset('assets/img/logo.png') }}" alt="logo">
                                </a>
                            </div>
                        </div>
                        <div class="col">
                            <nav class="main-menu menu-style1 d-none d-lg-block">
                                <ul>
                                    <li>
                                        <a href="{{ route('home') }}">Home</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('about') }}">About Us</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('service') }}">Service</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('blog') }}">Blog</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('product') }}">Product</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('contact') }}">Contact</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="col-auto d-lg-none">
                            <button class="vs-menu-toggle d-inline-block">
                                <i class="fal fa-bars"></i>                                           
                           </button>
                        </div>
                        <div class="col-auto d-xl-block d-none">
                            <div class="header-icons">
                                <a href="#" class="link-btn"><i class="fal fa-user"></i>Login</a>
                                <a href="#" class="icon-btn"><i class="far fa-heart"></i></a>
                                <a href="#" class="icon-btn style2 sideCartToggler sideCartToggler">
                                    <i class="fal fa-shopping-cart"></i>
                                    <span class="badge">0</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
