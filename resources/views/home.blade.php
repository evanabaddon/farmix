@extends('layouts.app')

@section('content')
<!--==============================
Hero Area
============================== -->
<div class="hero-layout2">
    <div class="container position-relative">
        <div class="vs-carousel" data-dots="true" data-slide-show="1" data-autoplay="true" data-fade="true">
            @foreach($sliders as $slide)
            <div class="hero-slide">
                <div class="container">
                    <div class="row g-5 align-items-center justify-content-between">
                        <div class="col-lg-6">
                            <div class="hero-content">
                                <h1 class="hero-title">{{ $slide->title }}</h1>
                                <p class="hero-text">{{ $slide->subtitle }}</p>
                                <div class="hero-bottom">
                                    @if($slide->button_url)
                                        <a href="{{ url($slide->button_url) }}" class="vs-btn">{{ $slide->button_text }}</a>
                                    @endif
                                    @if($slide->logo_image)
                                        <img src="{{ asset('storage/'.$slide->logo_image) }}" alt="brand-logo">
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="hero-img">
                                @if($slide->badge_image)
                                    <div class="batch"><img src="{{ asset('storage/'.$slide->badge_image) }}" alt="batch"></div>
                                @endif
                                @if($slide->main_image)
                                    <img src="{{ asset('storage/'.$slide->main_image) }}" alt="hero-slider">
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="shape-mockup moving z-index d-none d-xl-block" style="left: 0%; bottom: 10%;"><img src="{{ asset('assets/img/shep/hero-shep-1.png') }}" alt="shapes"></div>
</div>

<!--==============================
Categories Area
============================== -->
<section class="categorie-layout1 space">
    <div class="container">
        <div class="title-area text-center wow fadeInUp wow-animated" data-wow-delay="0.3s">
            <div class="title-img">
                <img src="{{ asset('assets/img/icon/title-logo.png') }}" alt="title logo">
            </div>
            <span class="sec-subtitle">{{ $settings->categories_subtitle }}</span>
            <h2 class="sec-title">{{ $settings->categories_title }}</h2>
        </div>

        <div class="row justify-content-center vs-carousel" 
             data-slide-show="5" 
             data-lg-slide-show="4" 
             data-md-slide-show="3" 
             data-center-mode="true" 
             data-autoplay="true" 
             data-dots="true" 
             data-arrows="false">

            @foreach ($categories as $category)
                <div class="col-auto">
                    <div class="categorie-style1">
                        <div class="categorie-img">
                            <img src="{{ $category->image ? asset('storage/' . $category->image) : asset('assets/img/default-category.png') }}" 
                                 alt="{{ $category->name }}">
                        </div>
                        <div class="categorie-content">
                            <h3 class="categorie-title h5">
                                <a href="{{ route('products.byCategory', $category->slug) }}">
                                    {{ $category->name }}
                                </a>
                            </h3>
                            <p class="categorie-text">{{ $category->products_count }} items</p>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</section>

<!--==============================
About Area
============================== -->
<section class="about-layout2 space-bottom">
    <div class="container">
        <div class="row gx-5">
            <div class="col-lg-6">
                <div class="about-content">
                    <div class="title-area wow fadeInUp wow-animated" data-wow-delay="0.3s">
                        <span class="sec-subtitle">{{ $settings->about_title }}</span>
                        <h2 class="sec-title">{{ $settings->about_subtitle }}</h2>
                    </div>

                    <p class="about-text">{!! nl2br(e($settings->about_content)) !!}</p>

                    {{-- Percentage items --}}
                    @foreach($settings->percentage_items as $item)
                        <div class="progress-box">
                            <h3 class="progress-box__title">{{ $item['title'] }}</h3>
                            <span class="progress-box__number">{{ $item['percent'] }}%</span>
                            <div class="progress-box__progress">
                                <div class="progress-box__bar"
                                     role="progressbar"
                                     style="width: {{ $item['percent'] }}%;"
                                     aria-valuenow="{{ $item['percent'] }}"
                                     aria-valuemin="0"
                                     aria-valuemax="100">
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <div class="bottom-info">
                        @if($settings->experience_enabled)
                            <div class="text-box">
                                <h6 class="nunber">{{ $settings->experience_years }}+</h6>
                                <span class="experience">years of <br> experience</span>
                            </div>
                        @endif

                        @if($settings->signature_image)
                            <div class="author-signature">
                                <img src="{{ asset('storage/' . $settings->signature_image) }}" alt="Signature">
                            </div>
                        @endif
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="about-img">
                    @if($settings->about_image1)
                        <img src="{{ asset('storage/' . $settings->about_image1) }}" alt="About Image 1" class="img1">
                    @endif
                    @if($settings->about_image2)
                        <img src="{{ asset('storage/' . $settings->about_image2) }}" alt="About Image 2" class="img2">
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>

<!--==============================
Product Area
============================== -->
<section class="product-layout1 bg-smoke space">
    <div class="container">
        <div class="title-area text-center wow fadeInUp wow-animated" data-wow-delay="0.3s">
            <div class="title-img">
                <img src="{{ asset('assets/img/icon/title-logo.png') }}" alt="title logo">
            </div>
            <span class="sec-subtitle">{{ $settings->products_subtitle }}</span>
            <h2 class="sec-title">{{ $settings->products_title }}</h2>
        </div>
        <div class="row vs-carousel" data-slide-show="4" data-lg-slide-show="3" data-md-slide-show="2" data-autoplay="true" data-arrows="false" data-dots="true" data-center-mode="true">
            @foreach ($products as $product)
            <div class="col-lg-3">
                <div class="product-style1">
                    <div class="product-img">
                        {{-- Cek apakah array images tidak kosong sebelum mengaksesnya --}}
                        @if (is_array($product->images) && count($product->images) > 0)
                            <img src="{{ asset('storage/' . $product->images[0]) }}" alt="product img">
                        @else
                            {{-- Tampilkan gambar placeholder jika tidak ada gambar --}}
                            <img src="{{ asset('path/to/placeholder.jpg') }}" alt="No image available">
                        @endif
                    </div>
                    <div class="product-about">
                        <h2 class="product-title"><a href="{{ url('/product') }}">{{ $product->name }}</a></h2>
                        {{-- <span class="price">Rp. {{ number_format($product->price, 0, ',', '.') }}</span> --}}
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
        </div>
    </div>
</section>

<!--==============================
Provide Area
============================== -->
<section class="provide-layout1 space" data-bg-src="{{ asset('assets/img/bg/provide-bg-1.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-12">
                <div class="provide-style1">
                    <div class="title-area wow fadeInUp wow-animated" data-wow-delay="0.3s">
                        <span class="sec-subtitle">{{ $settings->provide_subtitle }}</span>
                        <h2 class="sec-title">{{ $settings->provide_title }}</h2>
                    </div>
                    <div class="row g-5">
                        <div class="col-lg-6">
                            @foreach ($leftItems as $item)
                            <div class="provide-item">
                                <div class="provide-icon">
                                    <img src="{{ asset('storage/' . $item['icon']) }}" alt="provide icon">
                                </div>
                                <div class="provide-content">
                                    <h2 class="title h6"><a href="{{ url('/service') }}">{{ $item['title'] }}</a></h2>
                                    <p class="text">{{ $item['description'] }}</p>
                                </div>
                            </div>
                            @endforeach
                            
                        </div>
                        <div class="col-lg-6">
                            @foreach ($rightItems as $item)
                            <div class="provide-item">
                                <div class="provide-icon">
                                    <img src="{{ asset('storage/' . $item['icon']) }}" alt="provide icon">
                                </div>
                                <div class="provide-content">
                                    <h2 class="title h6"><a href="{{ url('/service') }}">{{ $item['title'] }}</a></h2>
                                    <p class="text">{{ $item['description'] }}</p>
                                </div>
                            </div>
                            @endforeach
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--==============================
Team Area
============================== -->
<section class="team-layout1 space">
    <div class="container">
        <div class="title-area text-center wow fadeInUp wow-animated" data-wow-delay="0.3s">
            <div class="title-img">
                <img src="{{ asset('assets/img/icon/title-logo.png') }}" alt="title logo">
            </div>
            <span class="sec-subtitle">{{ $settings->team_subtitle }}</span>
            <h2 class="sec-title">{{ $settings->team_title }}</h2>
        </div>
        <div class="row vs-carousel" data-slide-show="3" data-lg-slide-show="2" data-md-slide-show="2" data-autoplay="true" data-arrows="true" data-dots="false" data-center-mode="true">
            @foreach ($teams as $team)
            <div class="col-lg-4">
                <div class="team-style1">
                    <div class="team-content">
                        <h4 class="team-name">{{ $team->name }}</h4>
                        <span class="team-degi">{{ $team->designation }}</span>
                        @if ($team->phone_number)
                            <a href="tel:{{ $team->phone_number }}" class="team-contact">{{ $team->phone_number }}</a>
                        @endif
                        <div class="social-style1">
                            @if ($team->facebook_link)
                                <a href="{{ $team->facebook_link }}" target="_blank"><i class="fab fa-facebook-f"></i></a>
                            @endif
                            @if ($team->instagram_link)
                                <a href="{{ $team->instagram_link }}" target="_blank"><i class="fab fa-instagram"></i></a>
                            @endif
                            {{-- Tambahkan link media sosial lainnya jika diperlukan --}}
                        </div>
                    </div>
                    <div class="team-img">
                        @if ($team->photo)
                            <img src="{{ asset('storage/' . $team->photo) }}" alt="{{ $team->name }}">
                        @else
                            <img src="{{ asset('assets/img/team/placeholder.png') }}" alt="Placeholder Image">
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!--==============================
Faq Area
============================== -->
<section class="faq-layout1 space-bottom">
    <div class="container">
        <div class="row gx-5">
            <div class="col-lg-6">
                <div class="title-area wow fadeInUp wow-animated" data-wow-delay="0.3s">
                    <span class="sec-subtitle">{{ $settings->faq_subtitle }}</span>
                    <h2 class="sec-title">{{ $settings->faq_title }}</h2>
                </div>
                <div class="accordion-style1">
                    <div class="accordion" id="accordionExample">
                        @foreach ($settings->faqs as $faq)
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-{{ $loop->index }}" aria-expanded="false" aria-controls="collapse-{{ $loop->index }}">
                                    {{ $faq['question'] }}
                                </button>
                            </h2>
                            <div id="collapse-{{ $loop->index }}" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    {{ $faq['answer'] }}
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="faq-img">
                    <div class="faq-img1">
                        @if($settings->faq_image1)
                        <img src="{{ asset('storage/' . $settings->faq_image1) }}" alt="faq 1">
                        @endif
                    </div>
                    <div class="faq-img2">
                        @if($settings->faq_image2)
                        <img src="{{ asset('storage/' . $settings->faq_image2) }}" alt="faq 1">
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--==============================
Testimonial Area
============================== -->
<section class="testimonial-layout2 space" data-bg-src="{{ asset('assets/img/bg/testi-bg-1.jpg') }}">
    <div class="container">
        <div class="title-area text-center wow fadeInUp wow-animated" data-wow-delay="0.3s">
            <span class="sec-subtitle">{{ $settings->testimonial_subtitle }}</span>
            <h2 class="sec-title">{{ $settings->testimonial_title }}</h2>
        </div>
        <div class="row justify-content-center ">
            <div class="col-lg-10">
                <div class="vs-carousel" data-arrows="false" data-center-mode="left" data-dots="true" data-autoplay="true" data-slide-show="1">
                    @foreach ($settings->testimonials as $testimonial)
                    <div class="testi-style2">
                        <p class="testi-text">
                           {{ $testimonial['testimonial'] }}
                        </p>
                        <div class="auther-inner">
                            <div class="auther-img">
                                <img src="{{ asset('storage/' . $testimonial['image']) }}" alt="testimonial">
                                <div class="testi-icon"><i class="far fa-quote-left"></i></div>
                            </div>
                            <div class="auther-content">
                                <h3 class="name h5">{{ $testimonial['name'] }}</h3>
                                <span class="designation">{{ $testimonial['position'] }}</span>
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
                </div>
            </div>
        </div>
    </div>
</section>

<!--==============================
Blog Area
============================== -->
<section class="blog-layout1 space-bottom">
    <div class="container">
        <div class="title-area text-center wow fadeInUp wow-animated" data-wow-delay="0.3s">
            <div class="title-img">
                <img src="{{ asset('assets/img/icon/title-logo.png') }}" alt="title logo">
            </div>
            <span class="sec-subtitle">Latest News and Updates</span>
            <h2 class="sec-title">Our Latest News</h2>
        </div>
        <div class="row vs-carousel" data-slide-show="3" data-lg-slide-show="2" data-md-slide-show="2" data-autoplay="true" data-arrows="false" data-dots="true" data-center-mode="true">
            @foreach ($latestPosts as $post)
            <div class="col-lg-4">
                <div class="vs-blog blog-single">
                    @if ($post->featured_image)
                    <div class="blog-img">
                        <a href="{{ route('blog.details', $post->slug) }}"><img src="{{ asset('storage/' . $post->featured_image) }}" alt="Blog Image"></a>
                    </div>
                    @endif
                    <div class="blog-content">
                        <div class="blog-meta">
                            @if ($post->category)
                            <a href="{{ route('blog.category', $post->category->slug) }}"><i class="fal fa-tag"></i>{{ $post->category->name }}</a>
                            @endif
                        </div>
                        <h2 class="blog-title"><a href="{{ route('blog.details', $post->slug) }}">{{ $post->title }}</a></h2>
                        <div class="blog-inner-author">
                            <img src="https://www.iconpacks.net/icons/2/free-user-icon-3297-thumb.png" alt="blog author">
                            <div class="text">
                                by <a href="#">{{ $post->author ?? 'Admin' }}</a>
                                <a href="#" class="blog-date">{{ $post->published_at?->translatedFormat('M d, Y') ?? 'N/A' }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="blog-btn">
            <a href="{{ url('/blog') }}" class="vs-btn">View All News</a>
        </div>
    </div>
</section>

<!--==============================
Brand Area
============================== -->
<div class="brand-layout1 space-bottom">
    <div class="container">
        <div class="row vs-carousel z-index-common" data-arrows="false" data-wow-delay="0.4s" data-slide-show="6"
            data-lg-slide-show="4" data-md-slide-show="4" data-xs-slide-show="2" data-center-mode="true" data-autoplay="true">
            @foreach($brands as $brand)
                <div class="col-auto">
                    <div class="bran-img">
                        <img src="{{ asset('storage/' . $brand->image) }}" alt="{{ $brand->name }}">
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
