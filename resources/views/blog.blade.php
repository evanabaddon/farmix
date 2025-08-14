@extends('layouts.app')

@section('title', 'Our Blogs - Farmix')

@section('content')
    <!--==============================
    Breadcumb
    ============================== -->
    <div class="breadcumb-wrapper" data-bg-src="https://html.vecurosoft.com/farmix/demo/assets/img/breadcumb/breadcumb-bg.png">
        <div class="container z-index-common">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Our Blogs</h1>
            </div>
            <div class="breadcumb-menu-wrap">
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Our Blogs</li>
                </ul>
            </div>
        </div>
    </div>

    <!--==============================
    Blog Area
    ==============================-->
    <section class="vs-blog-wrapper space-top space-extra-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="vs-blog blog-single">
                        <div class="blog-img">
                            <a href="{{ route('blog-details') }}"><img src="https://html.vecurosoft.com/farmix/demo/assets/img/blog/blog-s-1-1.png" alt="Blog Image"></a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="#"><i class="fal fa-tag"></i>Fresh Vegetables</a>
                            </div>
                            <h2 class="blog-title"><a href="{{ route('blog-details') }}">Harvest London Publishes Its First Annual Report</a></h2>
                            <p class="blog-text">Suspendisse potenti. Maecenas dapibus ac tellus sed pulvinar ulum bib volutpat. Sociis, a eget mollis, exercitationem famesSu dapibus ac tellus.</p>
                            <div class="blog-inner-author">
                                <img src="https://html.vecurosoft.com/farmix/demo/assets/img/blog/blog-auth-1-1.png" alt="blog author">
                                by <a href="{{ route('blog') }}">Jakki James</a>
                                <a href="{{ route('blog') }}" class="blog-date">Dec 13, 2024</a>
                            </div>
                        </div>
                    </div>
                    <div class="vs-blog blog-single">
                        <div class="blog-img vs-carousel" data-arrows="true" data-autoplay="true" data-slide-show="1" data-fade="true">
                            <a href="{{ route('blog-details') }}"><img src="https://html.vecurosoft.com/farmix/demo/assets/img/blog/blog-s-1-2.png" alt="Blog Image"></a>
                            <a href="{{ route('blog-details') }}"><img src="https://html.vecurosoft.com/farmix/demo/assets/img/blog/blog-s-1-3.png" alt="Blog Image"></a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="#"><i class="fal fa-tag"></i>Organic Farming</a>
                            </div>
                            <h2 class="blog-title"><a href="{{ route('blog-details') }}">Sustainable Agriculture Practices for Modern Farming</a></h2>
                            <p class="blog-text">Suspendisse potenti. Maecenas dapibus ac tellus sed pulvinar ulum bib volutpat. Sociis, a eget mollis, exercitationem famesSu dapibus ac tellus.</p>
                            <div class="blog-inner-author">
                                <img src="https://html.vecurosoft.com/farmix/demo/assets/img/blog/blog-auth-1-1.png" alt="blog author">
                                by <a href="{{ route('blog') }}">Sarah Johnson</a>
                                <a href="{{ route('blog') }}" class="blog-date">Dec 10, 2024</a>
                            </div>
                        </div>
                    </div>
                    <div class="vs-blog blog-single">
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="#"><i class="fal fa-tag"></i>Agriculture Tips</a>
                            </div>
                            <h2 class="blog-title"><a href="{{ route('blog-details') }}">10 Essential Tips for Successful Crop Rotation</a></h2>
                            <p class="blog-text">Suspendisse potenti. Maecenas dapibus ac tellus sed pulvinar ulum bib volutpat. Sociis, a eget mollis, exercitationem famesSu dapibus ac tellus.</p>
                            <div class="blog-inner-author">
                                <img src="https://html.vecurosoft.com/farmix/demo/assets/img/blog/blog-auth-1-1.png" alt="blog author">
                                by <a href="{{ route('blog') }}">Michael Green</a>
                                <a href="{{ route('blog') }}" class="blog-date">Dec 08, 2024</a>
                            </div>
                        </div>
                    </div>
                    <div class="vs-blog blog-single">
                        <div class="blog-img">
                            <a href="{{ route('blog-details') }}"><img src="https://html.vecurosoft.com/farmix/demo/assets/img/blog/blog-s-1-3.png" alt="Blog Image"></a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="#"><i class="fal fa-tag"></i>Farm Equipment</a>
                            </div>
                            <h2 class="blog-title"><a href="{{ route('blog-details') }}">Modern Farm Equipment: Technology Meets Agriculture</a></h2>
                            <p class="blog-text">Suspendisse potenti. Maecenas dapibus ac tellus sed pulvinar ulum bib volutpat. Sociis, a eget mollis, exercitationem famesSu dapibus ac tellus.</p>
                            <div class="blog-inner-author">
                                <img src="https://html.vecurosoft.com/farmix/demo/assets/img/blog/blog-auth-1-1.png" alt="blog author">
                                by <a href="{{ route('blog') }}">David Miller</a>
                                <a href="{{ route('blog') }}" class="blog-date">Dec 05, 2024</a>
                            </div>
                        </div>
                    </div>
                    <div class="vs-blog blog-single">
                        <div class="blog-img">
                            <a href="{{ route('blog-details') }}"><img src="https://html.vecurosoft.com/farmix/demo/assets/img/blog/blog-s-1-4.png" alt="Blog Image"></a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="#"><i class="fal fa-tag"></i>Seasonal Farming</a>
                            </div>
                            <h2 class="blog-title"><a href="{{ route('blog-details') }}">Winter Farming: Maximizing Productivity in Cold Months</a></h2>
                            <p class="blog-text">Suspendisse potenti. Maecenas dapibus ac tellus sed pulvinar ulum bib volutpat. Sociis, a eget mollis, exercitationem famesSu dapibus ac tellus.</p>
                            <div class="blog-inner-author">
                                <img src="https://html.vecurosoft.com/farmix/demo/assets/img/blog/blog-auth-1-1.png" alt="blog author">
                                by <a href="{{ route('blog') }}">Emma Wilson</a>
                                <a href="{{ route('blog') }}" class="blog-date">Dec 02, 2024</a>
                            </div>
                        </div>
                    </div>
                    <div class="vs-blog blog-single">
                        <div class="blog-img">
                            <a href="{{ route('blog-details') }}"><img src="https://html.vecurosoft.com/farmix/demo/assets/img/blog/blog-s-1-5.png" alt="Blog Image"></a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="#"><i class="fal fa-tag"></i>Soil Health</a>
                            </div>
                            <h2 class="blog-title"><a href="{{ route('blog-details') }}">Soil Testing and Nutrient Management Strategies</a></h2>
                            <p class="blog-text">Suspendisse potenti. Maecenas dapibus ac tellus sed pulvinar ulum bib volutpat. Sociis, a eget mollis, exercitationem famesSu dapibus ac tellus.</p>
                            <div class="blog-inner-author">
                                <img src="https://html.vecurosoft.com/farmix/demo/assets/img/blog/blog-auth-1-1.png" alt="blog author">
                                by <a href="{{ route('blog') }}">Robert Taylor</a>
                                <a href="{{ route('blog') }}" class="blog-date">Nov 28, 2024</a>
                            </div>
                        </div>
                    </div>
                    <div class="vs-pagination">
                        <ul>
                            <li class="arrow"><a href="#"><i class="fal fa-long-arrow-left"></i></a></li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">...</a></li>
                            <li><a href="#">6</a></li>
                            <li class="arrow"><a href="#"><i class="fal fa-long-arrow-right"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <aside class="sidebar-area">
                        <div class="widget">
                            <h3 class="widget_title">Recent Posts</h3>
                            <div class="recent-post-wrap">
                                <div class="recent-post">
                                    <div class="media-img">
                                        <a href="{{ route('blog-details') }}"><img src="https://html.vecurosoft.com/farmix/demo/assets/img/blog/recent-post-1-1.jpg" alt="Blog Image"></a>
                                    </div>
                                    <div class="media-body">
                                        <div class="recent-post-meta">
                                            <a href="{{ route('blog') }}">Dec 13, 2024</a>
                                        </div>
                                        <h4 class="post-title"><a class="text-inherit" href="{{ route('blog-details') }}">Best Practices for Organic Vegetable Farming</a></h4>
                                    </div>
                                </div>
                                <div class="recent-post">
                                    <div class="media-img">
                                        <a href="{{ route('blog-details') }}"><img src="https://html.vecurosoft.com/farmix/demo/assets/img/blog/recent-post-1-2.jpg" alt="Blog Image"></a>
                                    </div>
                                    <div class="media-body">
                                        <div class="recent-post-meta">
                                            <a href="{{ route('blog') }}">Jan 08, 2024</a>
                                        </div>
                                        <h4 class="post-title"><a class="text-inherit" href="{{ route('blog-details') }}">Smart Irrigation Systems for Modern Farms</a></h4>
                                    </div>
                                </div>
                                <div class="recent-post">
                                    <div class="media-img">
                                        <a href="{{ route('blog-details') }}"><img src="https://html.vecurosoft.com/farmix/demo/assets/img/blog/recent-post-1-3.jpg" alt="Blog Image"></a>
                                    </div>
                                    <div class="media-body">
                                        <div class="recent-post-meta">
                                            <a href="{{ route('blog') }}">Nov 07, 2024</a>
                                        </div>
                                        <h4 class="post-title"><a class="text-inherit" href="{{ route('blog-details') }}">Greenhouse Farming: Year-Round Production</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="widget widget_categories">
                            <h3 class="widget_title">Categories</h3>
                            <ul>
                                <li>
                                    <a href="{{ route('blog') }}">Dairy farms</a>
                                    <span>23</span>
                                </li>
                                <li>
                                    <a href="{{ route('blog') }}">Grain</a>
                                    <span>10</span>
                                </li>
                                <li>
                                    <a href="{{ route('blog') }}">Agriculture</a>
                                    <span>09</span>
                                </li>
                                <li>
                                    <a href="{{ route('blog') }}">Fruit farming</a>
                                    <span>14</span>
                                </li>
                                <li>
                                    <a href="{{ route('blog') }}">Livestock farms</a>
                                    <span>12</span>
                                </li>
                                <li>
                                    <a href="{{ route('blog') }}">Mixed farming</a>
                                    <span>12</span>
                                </li>
                            </ul>
                        </div>
                        <div class="widget widget_nav_menu">
                            <h3 class="widget_title">Useful Services</h3>
                            <div class="menu-all-pages-container footer-menu">
                                <ul class="menu">
                                    <li><a href="{{ route('about') }}">About Us</a></li>
                                    <li><a href="#">Meet Our Team</a></li>
                                    <li><a href="{{ route('service') }}">Services</a></li>
                                    <li><a href="{{ route('blog') }}">News & Media</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="widget widget_meta">
                            <h3 class="widget_title">Meta</h3>
                            <ul>
                                <li><a href="#">Log in</a></li>
                                <li><a href="#">Entries feed</a></li>
                                <li><a href="#">Comments feed</a></li>
                                <li><a href="#">WordPress.org</a></li>
                            </ul>
                        </div>
                        <div class="widget widget_newsletter">
                            <h4 class="widget_title">Newsletter</h4>
                            <form class="newsletter-form">
                                <p class="form_text">Enter your email and get recent news & recent offers update.</p>
                                <input class="form-control" type="email" placeholder="Enter your email....">
                                <button type="submit" class="vs-btn">Subscribe</button>
                            </form>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
@endsection
