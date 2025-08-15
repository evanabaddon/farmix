<!--==============================
    Footer Area
==============================-->
<footer class="footer-wrapper footer-layout1" data-bg-src="{{ asset('assets/img/bg/footer-bg-1-1.jpg') }}">
    <div class="footer-top">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-4 col-md-6">
                    <div class="media-style1">
                        <div class="media-icon"><img src="{{ asset('assets/img/icon/icon-1-1.png') }}" alt="icon"></div>
                        <div class="media-body">
                            <h3 class="media-title">Phone No:</h3>
                            <p class="media-info"><a href="tel:{{ $generalSettings->site_phone }}">{{ $generalSettings->site_phone }}</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="media-style1">
                        <div class="media-icon"><img src="{{ asset('assets/img/icon/icon-1-2.png') }}" alt="icon"></div>
                        <div class="media-body">
                            <h3 class="media-title">Email Address:</h3>
                            <p class="media-info"><a href="mailto:{{ $generalSettings->site_email }}">{{ $generalSettings->site_email }}</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="media-style1">
                        <div class="media-icon"><img src="{{ asset('assets/img/icon/icon-1-3.png') }}" alt="icon"></div>
                        <div class="media-body">
                            <h3 class="media-title">Location:</h3>
                            <p class="media-info">{{ $generalSettings->site_address }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="widget-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-4 col-md-6">
                    <div class="widget footer-widget">
                        <div class="vs-widget-about">
                            <div class="footer-logo">
                                <a href="{{ url('/') }}"><img src="{{ asset('storage/' . $generalSettings->site_logo) }}" alt="{{ $generalSettings->site_name }}"></a>
                            </div>
                            <p class="footer-text">{{ $generalSettings->site_description }}</p>
                            <div class="footer-social">
                                @foreach($generalSettings->social_media as $platform => $url)
                            @php
                                // Map platform ke class Font Awesome
                                $icons = [
                                    'facebook' => 'fab fa-facebook-f',
                                    'instagram' => 'fab fa-instagram',
                                    'twitter' => 'fab fa-twitter',
                                    'tiktok' => 'fab fa-tiktok',
                                    'youtube' => 'fab fa-youtube',
                                ];
                                $iconClass = $icons[$platform] ?? 'fab fa-question';
                            @endphp
                
                            <a href="{{ $url }}" target="_blank" rel="noopener">
                                <i class="{{ $iconClass }}"></i>
                            </a>
                        @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-md-3">
                    <div class="widget widget_categories footer-widget">
                        <h3 class="widget_title">Company</h3>
                        <ul>
                            <li><a href="{{ url('/about') }}">About</a></li>
                            <li><a href="{{ url('/product') }}">Our products</a></li>
                            <li><a href="{{ url('/service') }}">Our cases</a></li>
                            <li><a href="{{ url('/blog') }}">News & events</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-md-3">
                    <div class="widget widget_categories footer-widget">
                        <h3 class="widget_title">Categories</h3>
                        <ul>
                            @foreach ($categories as $category)
                                <li><a href="{{ url('/product?category=' . $category->id) }}">{{ $category->name }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="widget widget_newsletter footer-widget">
                        <h4 class="widget_title">Subscribe Newsletter</h4>
                        <form class="newsletter-form">
                            <p class="form_text">Enter your email and get recent news & recent offers update.</p>
                            <div class="search-btn">
                                <input class="form-control" type="email" placeholder="Enter your email....">
                                <button type="submit" class="icon-btn"><i class="fas fa-paper-plane"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-wrap">
        <div class="container">
            <div class="row justify-content-xl-between justify-content-center align-items-center">
                <div class="col-auto">
                    <p class="copyright-text">Copyright <i class="fal fa-copyright"></i> 2025 <a href="{{ url('/') }}">{{ $generalSettings->site_name }}</a>. All Rights Reserved By <a href="#">QTeam</a></p>
                </div>
                <div class="col-auto">
                    <div class="copyright-menu">
                        <ul class="list-unstyled">
                            <li><a href="#">Sitemap</a></li>
                            <li><a href="{{ url('/contact') }}">Contact</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer> 

<!-- Scroll To Top -->
<a href="#" class="scrollToTop scroll-btn"><i class="far fa-arrow-up"></i></a>
