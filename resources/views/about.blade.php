@extends('layouts.app', ['generalSettings' => $generalSettings])

@section('title', 'About Us - ' . $generalSettings->site_name)


@section('content')
{{-- Breadcumb Section --}}
<div class="breadcumb-wrapper" @if($about->breadcumb_bg_image) data-bg-src="{{ asset('storage/' . $about->breadcumb_bg_image) }}" @endif>
    <div class="container z-index-common">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">{{ $about->breadcumb_title ?? 'About Us' }}</h1>
        </div>
        <div class="breadcumb-menu-wrap">
            <ul class="breadcumb-menu">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>About Us</li>
            </ul>
        </div>
    </div>
</div>

{{-- About Section --}}
<section class="about-layout1 space-top">
    <div class="container">
        <div class="row gx-5 justify-content-end">
            <div class="col-lg-6">
                <div class="about-img">
                    @if($about->about_image)
                        <img src="{{ asset('storage/' . $about->about_image) }}" alt="about-image">
                    @endif
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-content">
                    <div class="title-area wow fadeInUp wow-animated" data-wow-delay="0.3s">
                        @if($about->about_subtitle)
                            <span class="sec-subtitle">{{ $about->about_subtitle }}</span>
                        @endif
                        @if($about->about_title)
                            <h2 class="sec-title">{{ $about->about_title }}</h2>
                        @endif
                    </div>
                    @if($about->about_text)
                        <div class="about-text">
                            {!! $about->about_text !!}
                        </div>
                    @endif
                </div>
                <div class="auther-info">
                    @if($about->author_image || $about->author_name)
                        <div class="auther-inner">
                            @if($about->author_image)
                                <div class="auther-img">
                                    <img src="{{ asset('storage/' . $about->author_image) }}" alt="about">
                                </div>
                            @endif
                            <div class="auther-content">
                                @if($about->author_name)
                                    <h6 class="name">{{ $about->author_name }}</h6>
                                @endif
                                @if($about->author_designation)
                                    <span class="designation">{{ $about->author_designation }}</span>
                                @endif
                            </div>
                        </div>
                    @endif
                    @if($about->author_signature_image)
                        <div class="author-signature">
                            <img src="{{ asset('storage/' . $about->author_signature_image) }}" alt="about-signature">
                        </div>
                    @endif
                </div>
            </div>
            <div class="col-xl-10 col-lg-12 col-md-12">
                <div class="about-bottom">
                    <div class="row">
                        <div class="col-lg-4">
                            @if($about->about_video_image)
                                <div class="item-img">
                                    <img src="{{ asset('storage/' . $about->about_video_image) }}" alt="about img">
                                    @if($about->about_video_url)
                                        <a href="{{ $about->about_video_url }}" class="play-btn popup-video">
                                            <i class="fas fa-play"></i>
                                        </a>
                                    @endif
                                </div>
                            @endif
                        </div>
                        {{-- About Features Repeater --}}
                        @foreach($about->about_features ?? [] as $feature)
                            <div class="col-lg-4">
                                <div class="about-style1">
                                    <div class="about-inner">
                                        @if($feature['icon'] ?? false)
                                            <div class="about-icon"><img src="{{ asset('storage/' . $feature['icon']) }}" alt="icon"></div>
                                        @endif
                                        <h3 class="about-title"><a href="#">{{ $feature['title'] ?? '' }}</a></h3>
                                        @if($feature['text'] ?? false)
                                            <p class="about-text">{{ $feature['text'] }}</p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="shape-mockup moving z-index-n1 d-none d-lg-block" style="right: 9%; bottom: 22%;"><img src="https://html.vecurosoft.com/farmix/demo/assets/img/shep/about-shep-1.png" alt="shapes"></div>
</section>

{{-- Langkah Kerja Section --}}
<section class="process-layout1 space">
    <div class="container">
        <div class="title-area text-center wow fadeInUp wow-animated" data-wow-delay="0.3s">
            <div class="title-img">
                <img src="https://html.vecurosoft.com/farmix/demo/assets/img/icon/title-logo.png" alt="title logo">
            </div>
            @if($about->process_subtitle)
                <span class="sec-subtitle">{{ $about->process_subtitle }}</span>
            @endif
            @if($about->process_title)
                <h2 class="sec-title">{{ $about->process_title }}</h2>
            @endif
        </div>
        <div class="row vs-carousel" data-slide-show="4" data-lg-slide-show="3" data-md-slide-show="2" data-autoplay="true" data-arrows="true">
            {{-- Agricultural Work Steps Repeater --}}
            @foreach($about->agricultural_work_steps ?? [] as $step)
                <div class="col-lg-3">
                    <div class="process-style1">
                        @if($step['image'] ?? false)
                            <div class="process-img">
                                <img src="{{ asset('storage/' . $step['image']) }}" alt="process-image">
                            </div>
                        @endif
                        <div class="process-content">
                            <h3 class="process-title h5"><a href="{{ route('service-details') }}">{{ $step['title'] ?? '' }}</a></h3>
                            @if($step['text'] ?? false)
                                <p class="process-text">{{ $step['text'] }}</p>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="shape-mockup moving z-index d-none d-xl-block" style="left: 0%; top: 5%;"><img src="https://html.vecurosoft.com/farmix/demo/assets/img/shep/process-shep-1.png" alt="shapes"></div>
</section>

{{-- Proyek & Sejarah Section --}}
<section class="history-layout1 space" @if($about->history_bg_image) data-bg-src="{{ asset('storage/' . $about->history_bg_image) }}" @endif>
    <div class="container">
        <div class="title-area wow fadeInUp wow-animated" data-wow-delay="0.3s">
            <div class="d-flex justify-content-between align-items-center">
                <div class="title-left">
                    @if($about->history_subtitle)
                        <span class="sec-subtitle">{{ $about->history_subtitle }}</span>
                    @endif
                    @if($about->history_title)
                        <h2 class="sec-title">{{ $about->history_title }}</h2>
                    @endif
                </div>
                <div class="title-arraw">
                    <button class="icon-btn slick-prev" data-slick-prev=".project-slider"><i class="fas fa-angle-double-left"></i></button>
                    <button class="icon-btn slick-next" data-slick-next=".project-slider"><i class="fas fa-angle-double-right"></i></button>
                </div>
            </div>
        </div>
        <div class="row vs-carousel project-slider" data-slide-show="3" data-lg-slide-show="3" data-md-slide-show="2" data-autoplay="true" data-arrows="false" data-center-mode="true">
            {{-- History Works Repeater --}}
            @foreach($about->history_works ?? [] as $work)
                <div class="col-lg-4">
                    <div class="history-style1">
                        <h2 class="history-title">{{ $work['title'] ?? '' }}</h2>
                        @if($work['text'] ?? false)
                            <p class="history-text">
                                {{ $work['text'] }}
                            </p>
                        @endif
                        @if($work['year'] ?? false)
                            <span class="year">{{ $work['year'] }}</span>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
        <div class="border-shep">
            <img src="https://html.vecurosoft.com/farmix/demo/assets/img/shep/history-border.png" alt="shep">
        </div>
    </div>
</section>

{{-- Counter & Statistik Section --}}
<section class="counter-layout1 space" @if($about->counter_bg_image) data-bg-src="{{ asset('storage/' . $about->counter_bg_image) }}" @endif>
    <div class="container">
        <div class="row justify-content-center ">
            <div class="col-lg-7">
                <div class="title-area text-center wow fadeInUp wow-animated" data-wow-delay="0.3s">
                    <div class="title-img">
                        <img src="https://html.vecurosoft.com/farmix/demo/assets/img/icon/title-logo.png" alt="title logo">
                    </div>
                    @if($about->counter_title)
                        <h2 class="sec-title">{{ $about->counter_title }}</h2>
                    @endif
                    @if($about->counter_subtitle)
                        <span class="sec-subtitle">{{ $about->counter_subtitle }}</span>
                    @endif
                    @if($about->counter_button_url)
                        <a href="{{ $about->counter_button_url }}" class="vs-btn">{{ $about->counter_button_text ?? 'Start Discussion!' }}</a>
                    @endif
                </div>
            </div>
        </div>
        <div class="row z-index-common g-5 justify-content-lg-between justify-content-center">
            {{-- Counters Repeater --}}
            @foreach($about->counters ?? [] as $counter)
                <div class="col-xl-auto col-lg-4 col-md-6">
                    <div class="media-style">
                        <div class="media-inner">
                            <div class="media-icon">
                                @if($counter['icon'] ?? false)
                                    <div class="icon">
                                        <img src="{{ asset('storage/' . $counter['icon']) }}" alt="counter-icon">
                                    </div>
                                @endif
                            </div>
                            <div class="media-counter">
                                <div class="media-count">
                                    <h2 class="media-title counter-number" data-count="{{ $counter['count'] ?? 0 }}">00</h2>
                                    <span class="media-count_icon"><i class="far fa-plus"></i></span>
                                </div>
                                <p class="media-text">{{ $counter['text'] ?? '' }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="shape-mockup moving z-index d-none d-lg-block" style="right: 8%; bottom: 22%;"><img src="https://html.vecurosoft.com/farmix/demo/assets/img/shep/about-shep-1.png" alt="shapes"></div>
</section>

{{-- Testimonial Section --}}
<section class="testimonial-layout1 space">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="title-area wow fadeInUp wow-animated" data-wow-delay="0.3s">
                    @if($about->testimonial_subtitle)
                        <span class="sec-subtitle">{{ $about->testimonial_subtitle }}</span>
                    @endif
                    @if($about->testimonial_title)
                        <h2 class="sec-title">{{ $about->testimonial_title }}</h2>
                    @endif
                </div>
                <div class="vs-carousel" data-arrows="false" data-center-mode="left" data-dots="true" data-autoplay="true" data-slide-show="1">
                    {{-- Testimonials Repeater --}}
                    @foreach($about->testimonials ?? [] as $testimonial)
                        <div class="testi-style1">
                            <div class="auther-inner">
                                @if($testimonial['author_image'] ?? false)
                                    <div class="auther-img">
                                        <img src="{{ asset('storage/' . $testimonial['author_image']) }}" alt="testimonial">
                                        <div class="testi-icon"><i class="far fa-quote-left"></i></div>
                                    </div>
                                @endif
                                <div class="auther-content">
                                    @if($testimonial['author_name'] ?? false)
                                        <h6 class="name">{{ $testimonial['author_name'] }}</h6>
                                    @endif
                                    @if($testimonial['author_designation'] ?? false)
                                        <span class="designation">{{ $testimonial['author_designation'] }}</span>
                                    @endif
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            @if($testimonial['text'] ?? false)
                                <p class="testi-text">
                                    {!! $testimonial['text'] !!}
                                </p>
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-6">
                @if($about->testimonial_image)
                    <div class="testi-img">
                        <img src="{{ asset('storage/' . $about->testimonial_image) }}" alt="testimonial">
                    </div>
                @endif
            </div>
        </div>
    </div>
    <div class="shape-mockup moving z-index-n1 d-none d-xl-block" style="right: 0%; bottom: 5%;"><img src="https://html.vecurosoft.com/farmix/demo/assets/img/shep/testmonial-shep-1.png" alt="shapes"></div>
</section>
@endsection