@extends('layouts.app')

@section('title', 'Blog Details - Farmix')

@section('content')
    <!--==============================
    Breadcumb
    ============================== -->
    <div class="breadcumb-wrapper" data-bg-src="https://html.vecurosoft.com/farmix/demo/assets/img/breadcumb/breadcumb-bg.jpg">
        <div class="container z-index-common">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">BLOG DETAILS</h1>
            </div>
            <div class="breadcumb-menu-wrap">
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('blog') }}">Blog</a></li>
                    <li>Blog Details</li>
                </ul>
            </div>
        </div>
    </div>

    <!--==============================
    Blog Details Area
    ==============================-->
    <section class="vs-blog-wrapper blog-details space-top space-extra-bottom">
        <div class="container">
            <div class="row gx-60">
                <div class="col-lg-8">
                    <div class="vs-blog">
                        <div class="blog-content">
                            <div class="mb-30">
                                <img src="https://html.vecurosoft.com/farmix/demo/assets/img/blog/blog-d-1-1.jpg" alt="blog image">
                            </div>
                            <div class="blog-meta">
                                <a href="#"><i class="fal fa-tag"></i>Fresh Vegetables</a>
                            </div>
                            <h2 class="blog-title"><a href="{{ route('blog-details') }}">Sustainable Agriculture: Building a Greener Future Through Modern Farming</a></h2>
                            <p class="blog-text">From the overarching goal of sustainable farming, to the innovative techniques and technologies within it, each element influences how farmers perceive and implement eco-friendly practices. However, even with the most advanced equipment or profound knowledge, if the overall approach feels disconnected from environmental goals, then farmers lower their chances of achieving true sustainability. From the overarching goal of sustainable farming, to the innovative techniques and technologies within it, each element influences how farmers perceive and implement eco-friendly practices.</p>
                            <p class="blog-text">Modern sustainable agriculture focuses on creating systems that are environmentally sound, economically viable, and socially responsible. This approach ensures that farming practices meet current food production needs while preserving resources for future generations.</p>
                            
                            <h4 class="blog-title">Key Principles of Sustainable Farming</h4>
                            <div class="list-style1">
                                <ul class="list-unstyled">
                                    <li><span class="icon"><img src="https://html.vecurosoft.com/farmix/demo/assets/img/icon/list-icon.png" alt="icon"></span>Implementing crop rotation to maintain soil health and fertility</li>
                                    <li><span class="icon"><img src="https://html.vecurosoft.com/farmix/demo/assets/img/icon/list-icon.png" alt="icon"></span>Using integrated pest management to reduce chemical dependency</li>
                                    <li><span class="icon"><img src="https://html.vecurosoft.com/farmix/demo/assets/img/icon/list-icon.png" alt="icon"></span>Adopting water conservation techniques for efficient irrigation</li>
                                    <li><span class="icon"><img src="https://html.vecurosoft.com/farmix/demo/assets/img/icon/list-icon.png" alt="icon"></span>Promoting biodiversity through companion planting and habitat preservation</li>
                                    <li><span class="icon"><img src="https://html.vecurosoft.com/farmix/demo/assets/img/icon/list-icon.png" alt="icon"></span>Minimizing carbon footprint through renewable energy adoption</li>
                                    <li><span class="icon"><img src="https://html.vecurosoft.com/farmix/demo/assets/img/icon/list-icon.png" alt="icon"></span>Building strong relationships with local communities and markets</li>
                                </ul>
                            </div>

                            <blockquote class="vs-quote">
                                <p>"Sustainable agriculture is not just about growing food; it's about growing a future where both people and planet can thrive together in harmony."</p>
                            </blockquote>

                            <p>The transition to sustainable farming practices requires careful planning and gradual implementation. Farmers must consider factors such as soil health, water availability, local climate conditions, and market demands when developing their sustainability strategies.</p>
                            
                            <h4>Technology Integration in Sustainable Farming</h4>
                            <p>Modern technology plays a crucial role in advancing sustainable agriculture. Precision farming tools, drone technology, and smart irrigation systems help farmers optimize resource use while minimizing environmental impact.</p>
                            <p>IoT sensors and data analytics enable real-time monitoring of soil conditions, weather patterns, and crop health, allowing for more informed decision-making and efficient resource allocation.</p>
                            
                            <div class="row mt-30">
                                <div class="col-md-6 mb-30"><img src="https://html.vecurosoft.com/farmix/demo/assets/img/blog/blog-d-1-2.jpg" alt=""></div>
                                <div class="col-md-6 mb-30"><img src="https://html.vecurosoft.com/farmix/demo/assets/img/blog/blog-d-1-3.jpg" alt=""></div>
                            </div>
                            
                            <h4>Building Resilient Farming Communities</h4>
                            <p>Sustainable agriculture extends beyond individual farms to encompass entire agricultural communities. Collaborative efforts, knowledge sharing, and support networks are essential for widespread adoption of sustainable practices. Farmers working together can share resources, exchange best practices, and collectively address challenges such as climate change, market fluctuations, and resource scarcity. This community-based approach strengthens the agricultural sector while promoting environmental stewardship and economic stability.</p>
                        </div>

                        <div class="share-links clearfix">
                            <div class="row justify-content-between">
                                <div class="col-xl-auto">
                                    <span class="share-links-title">Tags:</span>
                                    <div class="tagcloud">
                                        <a href="{{ route('blog') }}">Sustainable Agriculture</a>
                                        <a href="{{ route('blog') }}">Organic Farming</a>
                                        <a href="{{ route('blog') }}">Environmental</a>
                                    </div>
                                </div>
                                <div class="col-xl-auto text-xl-end">
                                    <span class="share-links-title">Share:</span>
                                    <ul class="social-links">
                                        <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="vs-comments-wrap">
                            <h2 class="blog-inner-title">3 Comments</h2>
                            <ul class="comment-list">
                                <li class="vs-comment-item">
                                    <div class="vs-post-comment">
                                        <div class="comment-avater">
                                            <img src="https://html.vecurosoft.com/farmix/demo/assets/img/blog/comment-author-1.jpg" alt="Comment Author">
                                        </div>
                                        <div class="comment-content">
                                            <h4 class="name h4">Sarah Martinez</h4>
                                            <span class="commented-on"><i class="fal fa-calendar-alt"></i> Dec 15, 2024</span>
                                            <p class="text">This article provides excellent insights into sustainable farming practices. As a small-scale farmer, I've been implementing some of these techniques and have already seen improvements in soil health and crop yields.</p>
                                            <div class="reply_and_edit">
                                                <a href="{{ route('blog-details') }}" class="replay-btn">Reply</a>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="children">
                                        <li class="vs-comment-item">
                                            <div class="vs-post-comment">
                                                <div class="comment-avater">
                                                    <img src="https://html.vecurosoft.com/farmix/demo/assets/img/blog/comment-author-2.jpg" alt="Comment Author">
                                                </div>
                                                <div class="comment-content">
                                                    <h4 class="name h4">Michael Green</h4>
                                                    <span class="commented-on"><i class="fal fa-calendar-alt"></i> Dec 16, 2024</span>
                                                    <p class="text">@Sarah, that's great to hear! Crop rotation has been a game-changer for our farm as well. The long-term benefits are definitely worth the initial investment.</p>
                                                    <div class="reply_and_edit">
                                                        <a href="{{ route('blog-details') }}" class="replay-btn">Reply</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="vs-comment-item">
                                    <div class="vs-post-comment">
                                        <div class="comment-avater">
                                            <img src="https://html.vecurosoft.com/farmix/demo/assets/img/blog/comment-author-3.jpg" alt="Comment Author">
                                        </div>
                                        <div class="comment-content">
                                            <h4 class="name h4">Dr. Emily Chen</h4>
                                            <span class="commented-on"><i class="fal fa-calendar-alt"></i> Dec 17, 2024</span>
                                            <p class="text">As an agricultural researcher, I appreciate how this article emphasizes the importance of technology integration. Precision farming tools are revolutionizing how we approach sustainable agriculture.</p>
                                            <div class="reply_and_edit">
                                                <a href="{{ route('blog-details') }}" class="replay-btn">Reply</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <!-- Comment Form -->
                        <div class="vs-comment-form">
                            <div id="respond" class="comment-respond">
                                <div class="form-title">
                                    <h3 class="blog-inner-title">Leave a Comment</h3>
                                    <p class="form-text">Your email address will not be published. Required fields are marked*</p>
                                </div>
                                <div class="row gx-20">
                                    <div class="col-md-6 form-group">
                                        <input type="text" class="form-control" placeholder="Complete Name">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <input type="email" class="form-control" placeholder="Email Address">
                                    </div>
                                    <div class="col-12 form-group">
                                        <textarea class="form-control" placeholder="Comment"></textarea>
                                    </div>
                                    <div class="col-12">
                                        <div class="custom-checkbox notice">
                                            <input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes">
                                            <label for="wp-comment-cookies-consent">Save my name, email, and website in this browser for the next time I comment.</label>
                                        </div>
                                    </div>
                                    <div class="col-12 form-group mb-0">
                                        <button class="vs-btn">Post Comment</button>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                                        <h4 class="post-title"><a class="text-inherit" href="{{ route('blog-details') }}">Modern Irrigation Techniques for Efficient Farming</a></h4>
                                    </div>
                                </div>
                                <div class="recent-post">
                                    <div class="media-img">
                                        <a href="{{ route('blog-details') }}"><img src="https://html.vecurosoft.com/farmix/demo/assets/img/blog/recent-post-1-2.jpg" alt="Blog Image"></a>
                                    </div>
                                    <div class="media-body">
                                        <div class="recent-post-meta">
                                            <a href="{{ route('blog') }}">Dec 10, 2024</a>
                                        </div>
                                        <h4 class="post-title"><a class="text-inherit" href="{{ route('blog-details') }}">Organic Pest Control Methods</a></h4>
                                    </div>
                                </div>
                                <div class="recent-post">
                                    <div class="media-img">
                                        <a href="{{ route('blog-details') }}"><img src="https://html.vecurosoft.com/farmix/demo/assets/img/blog/recent-post-1-3.jpg" alt="Blog Image"></a>
                                    </div>
                                    <div class="media-body">
                                        <div class="recent-post-meta">
                                            <a href="{{ route('blog') }}">Dec 07, 2024</a>
                                        </div>
                                        <h4 class="post-title"><a class="text-inherit" href="{{ route('blog-details') }}">Soil Health Management Strategies</a></h4>
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
