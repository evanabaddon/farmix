@extends('layouts.app')

@section('title', $post->title . ' - ' . $generalSettings->site_name)

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
                    <li>{{ $post->title }}</li>
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
                            @if ($post->featured_image)
                                <div class="mb-30">
                                    <img src="{{ asset('storage/' . $post->featured_image) }}" alt="{{ $post->title }}">
                                </div>
                            @endif
                            <div class="blog-meta">
                                @if ($post->category)
                                    <a href="{{ route('blog.category', $post->category->slug) }}"><i class="fal fa-tag"></i>{{ $post->category->name }}</a>
                                @endif
                            </div>
                            <h2 class="blog-title">{{ $post->title }}</h2>
                            <p class="blog-text">{!! $post->body !!}</p>
                        </div>
                        <div class="share-links clearfix">
                            <div class="row justify-content-between">
                                <div class="col-xl-auto">
                                    <span class="share-links-title">Tags:</span>
                                    <div class="tagcloud">
                                        @foreach ($tags as $tag)
                                            <a href="{{ route('blog.tag', $tag->slug) }}">{{ $tag->name }}</a>
                                        @endforeach
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
                    </div>
                </div>
                <div class="col-lg-4">
                    <aside class="sidebar-area">
                        <div class="widget">
                            <h3 class="widget_title">Recent Posts</h3>
                            <div class="recent-post-wrap">
                                @foreach ($recentPosts as $post)
                                <div class="recent-post">
                                    <div class="media-img">
                                        <a href="{{ route('blog.details', $post->slug) }}">
                                            @if ($post->featured_image)
                                                <img src="{{ asset('storage/' . $post->featured_image) }}" alt="{{ $post->title }}">
                                            @endif
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <div class="recent-post-meta">
                                            <a href="{{ route('blog.details', $post->slug) }}">
                                                {{ $post->published_at?->translatedFormat('M d, Y') ?? 'N/A' }}
                                            </a>
                                        </div>
                                        <h4 class="post-title">
                                            <a class="text-inherit" href="{{ route('blog.details', $post->slug) }}">{{ $post->title }}</a>
                                        </h4>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="widget widget_categories">
                            <h3 class="widget_title">Categories</h3>
                            <ul>
                                @foreach ($categories as $category)
                                    <li>
                                        <a href="{{ route('blog.category', $category->slug) }}">{{ $category->name }}</a>
                                        <span>{{ $category->posts_count }}</span>
                                    </li>
                                @endforeach
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
