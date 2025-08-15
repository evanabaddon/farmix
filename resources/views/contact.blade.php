@extends('layouts.app')

@section('title', 'Contact Us - ' . $generalSettings->site_name)

@section('content')
    <!--==============================
    Breadcumb
    ============================== -->
    <div class="breadcumb-wrapper" data-bg-src="https://html.vecurosoft.com/farmix/demo/assets/img/breadcumb/breadcumb-bg.png">
        <div class="container z-index-common">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Contact</h1>
            </div>
            <div class="breadcumb-menu-wrap">
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Contact</li>
                </ul>
            </div>
        </div>
    </div>

    <!--==============================
    Contact Area
    ============================== -->
    <section class="contact-layout1 space">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-7">
                    <div class="title-area wow fadeInUp wow-animated" data-wow-delay="0.3s">
                        <span class="sec-subtitle">CONTACT US</span>
                        <h2 class="sec-title">We're Here to Help You. Get in Touch with Our Team!</h2>
                    </div>
                    <div class="vs-comment-form">
                        <div id="respond" class="comment-respond">
                            <div class="form-title">
                                <p class="form-text">Please fill out the form below and one of our agricultural specialists will get back in touch shortly.</p>
                            </div>
                            <form action="{{ route('contact.store') }}" method="post" class="form-style3">
                                @csrf
                                <div class="row">
                                    <div class="col-12 form-group">
                                        <textarea name="message" class="form-control" placeholder="Your Message" required></textarea>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <input name="name" type="text" class="form-control" placeholder="Your Name" required>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <input name="email" type="email" class="form-control" placeholder="Email Address" required>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <input name="phone" type="tel" class="form-control" placeholder="Phone Number">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <select name="subject" class="form-control" required>
                                            <option value="">Select Subject</option>
                                            <option value="general">General Inquiry</option>
                                            <option value="products">Product Information</option>
                                            <option value="services">Agricultural Services</option>
                                            <option value="partnership">Partnership Opportunities</option>
                                            <option value="support">Customer Support</option>
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <div class="custom-checkbox notice">
                                            <input id="newsletter-consent" name="newsletter_consent" type="checkbox" value="yes">
                                            <label for="newsletter-consent">Subscribe to our newsletter for farming tips and product updates.</label>
                                        </div>
                                    </div>
                                    <div class="col-12 form-group">
                                        <button class="vs-btn" type="submit">
                                            Send Message
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5">
                    <div class="contact-left">
                        <div class="auther-inner">
                            <div class="auther-img">
                                <img src="{{ asset('storage/' . $generalSettings->ceo_photo) }}" alt="about">
                            </div>
                            <div class="auther-content">
                                <h6 class="name">{{ $generalSettings->ceo_name ?? 'CEO Name' }}</h6>
                                <span class="designation">{{ $generalSettings->ceo_designation ?? 'CEO Designation' }}</span>
                                <img src="{{ asset('storage/' . $generalSettings->ceo_signature) }}" alt="contact">
                            </div>
                        </div>
                        <div class="team-media">
                            <h2 class="contact-title">Get In Touch</h2>
                            <div class="media-style1">
                                <div class="media-icon"><img src="https://html.vecurosoft.com/farmix/demo/assets/img/icon/icon-1-1.png" alt="icon"></div>
                                <div class="media-body">
                                    <h3 class="media-title">Phone Number:</h3>
                                    <p class="media-info">
                                        <a href="tel:{{ $generalSettings->site_phone }}">{{ $generalSettings->site_phone }}</a>
                                    </p>
                                </div>
                            </div>
                            <div class="media-style1">
                                <div class="media-icon"><img src="https://html.vecurosoft.com/farmix/demo/assets/img/icon/icon-1-2.png" alt="icon"></div>
                                <div class="media-body">
                                    <h3 class="media-title">Email Address:</h3>
                                    <p class="media-info">
                                        <a href="mailto:{{ $generalSettings->site_email }}">{{ $generalSettings->site_email }}</a>
                                    </p>
                                </div>
                            </div>
                            <div class="media-style1">
                                <div class="media-icon"><img src="https://html.vecurosoft.com/farmix/demo/assets/img/icon/icon-1-3.png" alt="icon"></div>
                                <div class="media-body">
                                    <h3 class="media-title">Location:</h3>
                                    <p class="media-info">{{ $generalSettings->site_address }}</p>
                                </div>
                            </div>
                            <div class="media-style1">
                                <div class="media-icon"><img src="https://html.vecurosoft.com/farmix/demo/assets/img/icon/icon-1-1.png" alt="icon"></div>
                                <div class="media-body">
                                    <h3 class="media-title">Working Hours:</h3>
                                    <p class="media-info">
                                        @foreach ($generalSettings->working_hours as $index => $item)
                                            {{ $item['day'] }}: {{ $item['hours'] }}@if (!$loop->last)<br>@endif
                                        @endforeach
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="map">
                @if ($generalSettings->google_map_iframe)
                    {!! $generalSettings->google_map_iframe !!}
                @else
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.721462002364!2d106.82087531476906!3d-6.19502999550989!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f44482c3c1d9%3A0x6e7892a06f3630f5!2sMonumen%20Nasional!5e0!3m2!1sid!2sid!4v1628178123456!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                @endif
            </div>
        </div>
    </section>

    <!--==============================
    FAQ Area
    ============================== -->
    <section class="faq-layout1 space-bottom">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-12">
                    <div class="title-area text-center wow fadeInUp wow-animated" data-wow-delay="0.3s">
                        <span class="sec-subtitle">Any Question Please?</span>
                        <h2 class="sec-title">Frequently Asked Questions</h2>
                    </div>
                    <div class="accordion-style1">
                        <div class="accordion" id="accordionExample">
                            @foreach ($homepageSettings->faqs as $index => $faq)
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $index }}" aria-expanded="false" aria-controls="collapse{{ $index }}">
                                            {{ $faq['question'] }}
                                        </button>
                                    </h2>
                                    <div id="collapse{{ $index }}" class="accordion-collapse collapse @if($index === 0) show @endif" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            {{ $faq['answer'] }}
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
