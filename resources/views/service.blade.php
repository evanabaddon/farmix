@extends('layouts.app')

@section('title', 'Our Service - ' . $generalSettings->site_name)

@section('content')
    @if ($service->breadcumb_bg_image)
        <div class="breadcumb-wrapper" data-bg-src="{{ asset('storage/' . $service->breadcumb_bg_image) }}">
    @else
        <div class="breadcumb-wrapper" data-bg-src="https://html.vecurosoft.com/farmix/demo/assets/img/breadcumb/breadcumb-bg.png">
    @endif
        <div class="container z-index-common">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">{{ $service->breadcumb_title ?? 'Our Service' }}</h1>
            </div>
            <div class="breadcumb-menu-wrap">
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Our Service</li>
                </ul>
            </div>
        </div>
    </div>

    <section class="selling-layout1 bg-white space-bottom">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-6">
                    <div class="selling-style1 space-top">
                        <div class="title-area wow fadeInUp wow-animated" data-wow-delay="0.3s">
                            <span class="sec-subtitle">{{ $service->selling_subtitle ?? 'Welcome to Farmix' }}</span>
                            <h2 class="sec-title">{{ $service->selling_title ?? 'Agriculture & Organic Product Farm' }}</h2>
                        </div>
                        @if (is_array($service->selling_features) && count($service->selling_features) > 0)
                            <div class="list-style1">
                                <ul class="list-unstyled">
                                    @foreach ($service->selling_features as $feature)
                                        <li><span class="icon"><i class="far fa-check-circle"></i></span>{{ $feature['text'] ?? '' }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @if (is_array($service->selling_images) && count($service->selling_images) > 0)
                            <div class="row g-3 vs-carousel" data-arrows="false" data-dots="true" data-autoplay="true" data-slide-show="2">
                                @foreach ($service->selling_images as $image)
                                    <div class="col-auto">
                                        <img src="{{ asset('storage/' . $image['image']) }}" alt="Blog Image">
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="selling-img">
                        @if ($service->selling_main_image)
                            <img src="{{ asset('storage/' . $service->selling_main_image) }}" alt="selling-img">
                        @endif
                        @if ($service->selling_secondary_image)
                            <div class="img1">
                                <img src="{{ asset('storage/' . $service->selling_secondary_image) }}" alt="selling-img">
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-mockup moving z-index d-none d-lg-block" style="right: 0%; bottom: 22%;"><img src="https://html.vecurosoft.com/farmix/demo/assets/img/shep/selling-shep-1.png" alt="shapes"></div>
    </section>

    <div class="service-layout1 space-bottom mt-0">
        <div class="container">
            @if (is_array($service->services) && count($service->services) > 0)
                <div class="row vs-carousel" data-slide-show="4" data-lg-slide-show="3" data-md-slide-show="2" data-autoplay="true" data-arrows="false">
                    @foreach ($service->services as $service_item)
                        <div class="col-auto">
                            <div class="service-style1">
                                @if ($service_item['image'])
                                    <div class="service-img2"><img src="{{ asset('storage/' . $service_item['image']) }}" alt="service thumbnail"></div>
                                    <div class="service-img"><img src="{{ asset('storage/' . $service_item['image']) }}" alt="service thumbnail"></div>
                                @endif
                                <div class="service-inner">
                                    @if ($service_item['icon'])
                                        <div class="service-icon"><img src="{{ asset('storage/' . $service_item['icon']) }}" alt="icon"></div>
                                    @endif
                                    <h3 class="service-title h5"><a href="#">{{ $service_item['title'] ?? '' }}</a></h3>
                                    <p class="service-text">{{ $service_item['text'] ?? '' }}</p>
                                </div>
                                {{-- <div class="link-btn">
                                    <a href="#">Read More <i class="far fa-arrow-right"></i></a>
                                </div> --}}
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </div>
@endsection