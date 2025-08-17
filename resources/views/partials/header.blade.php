<!--==============================
Mobile Menu
============================== -->
<div class="vs-menu-wrapper">
    <div class="vs-menu-area text-center">
        <button class="vs-menu-toggle"><i class="fal fa-times"></i></button>
        <div class="mobile-logo">
            <a href="{{ route('home') }}"><img src="{{ asset('storage/' . $generalSettings->site_logo) }}" alt="{{ $generalSettings->site_name }}"></a>
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
Header Area
==============================-->
<header class="vs-header header-layout1">
    <div class="header-top">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-auto">
                    <div class="header-links">
                        <ul>
                            <li><i class="far fa-map-marker-alt"></i>{{ $generalSettings->site_address }}</li>
                            <li><i class="far fa-envelope"></i><a href="mailto:{{ $generalSettings->site_email }}">{{ $generalSettings->site_email }}</a></li>
                            <li><i class="far fa-phone-alt"></i><a href="tel:{{ $generalSettings->site_phone }}">{{ $generalSettings->site_phone }}</a></li>
                            @if(isset($generalSettings->working_hours) && count($generalSettings->working_hours) > 0)
                                <li>
                                    <i class="far fa-clock"></i>
                                    {{ $generalSettings->working_hours[0]['day'] }}: {{ $generalSettings->working_hours[0]['hours'] }}
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="social-style1">
                        @if(!empty($generalSettings->social_media['facebook']))
                            <a href="{{ $generalSettings->social_media['facebook'] }}" target="_blank" rel="noopener">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        @endif
                    
                        @if(!empty($generalSettings->social_media['instagram']))
                            <a href="{{ $generalSettings->social_media['instagram'] }}" target="_blank" rel="noopener">
                                <i class="fab fa-instagram"></i>
                            </a>
                        @endif
                    
                        @if(!empty($generalSettings->social_media['twitter']))
                            <a href="{{ $generalSettings->social_media['twitter'] }}" target="_blank" rel="noopener">
                                <i class="fab fa-twitter"></i>
                            </a>
                        @endif
                    
                        @if(!empty($generalSettings->social_media['youtube']))
                            <a href="{{ $generalSettings->social_media['youtube'] }}" target="_blank" rel="noopener">
                                <i class="fab fa-youtube"></i>
                            </a>
                        @endif
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
                                    <img src="{{ asset('storage/' . $generalSettings->site_logo) }}" alt="{{ $generalSettings->site_name }}">
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
                        {{-- <div class="col-auto d-xl-block d-none">
                            <div class="header-icons">
                                <a href="#" class="link-btn"><i class="fal fa-user"></i>Login</a>
                                <a href="#" class="icon-btn"><i class="far fa-heart"></i></a>
                                <a href="#" class="icon-btn style2 sideCartToggler sideCartToggler">
                                    <i class="fal fa-shopping-cart"></i>
                                    <span class="badge">0</span>
                                </a>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
