@extends('layouts.app')

@section('title', 'Our Blogs - ' . $generalSettings->site_name)

@section('content')
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

    <section class="vs-blog-wrapper space-top space-extra-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    {{-- Loop untuk menampilkan semua postingan --}}
                    @foreach ($posts as $post)
                        <div class="vs-blog blog-single">
                            @if ($post->featured_image)
                                <div class="blog-img">
                                    <a href="{{ route('blog.details', $post->slug) }}">
                                        <img src="{{ asset('storage/' . $post->featured_image) }}" alt="Blog Image">
                                    </a>
                                </div>
                            @endif
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <a href="{{ route('blog.category', $post->category->slug) }}">
                                        <i class="fal fa-tag"></i>{{ $post->category->name ?? 'Uncategorized' }}
                                    </a>
                                </div>
                                <h2 class="blog-title"><a href="{{ route('blog.details', $post->slug) }}">{{ $post->title }}</a></h2>
                                <p class="blog-text">{{ Str::limit(strip_tags($post->body), 200) }}</p>
                                <div class="blog-inner-author">
                                    by <a href="#">{{ $post->author ?? 'Admin' }}</a>
                                    <a href="#" class="blog-date">{{ $post->published_at?->translatedFormat('F d, Y') ?? 'N/A' }}</a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    {{-- Pagination --}}
                    {{ $posts->links() }}
                </div>
                <div class="col-lg-4">
                    <aside class="sidebar-area">
                        {{-- Postingan Terbaru --}}
                        <div class="widget widget_vs_recent_post">
                            <h3 class="widget_title">Recent Posts</h3>
                            <div class="recent-post-wrap">
                                @foreach ($recentPosts as $recentPost)
                                    <div class="recent-post">
                                        <div class="media-img">
                                            <a href="{{ route('blog.details', $recentPost->slug) }}"><img src="{{ asset('storage/' . $recentPost->featured_image) }}" alt="Blog Image"></a>
                                        </div>
                                        <div class="media-body">
                                            <div class="recent-post-meta">
                                                <a href="#">{{ $recentPost->published_at?->translatedFormat('F d, Y') ?? 'N/A' }}</a>
                                            </div>
                                            <h4 class="post-title"><a class="text-inherit" href="{{ route('blog.details', $recentPost->slug) }}">{{ $recentPost->title }}</a></h4>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        {{-- Kategori --}}
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
                        {{-- Tags --}}
                        <div class="widget widget_tag_cloud">
                            <h3 class="widget_title">Tags</h3>
                            <div class="tagcloud">
                                @foreach ($tags as $tag)
                                    <a href="{{ route('blog.tag', $tag->slug) }}">{{ $tag->name }}</a>
                                @endforeach
                            </div>
                        </div>
                        {{-- Widget lainnya dihilangkan untuk fokus pada konten dinamis --}}
                    </aside>
                </div>
            </div>
        </div>
    </section>
@endsection