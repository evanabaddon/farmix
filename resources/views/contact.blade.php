@extends('layouts.app')

@section('title', 'Contact Us - Farmix')

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
                            <form action="#" method="post" class="form-style3">
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
                                <img src="https://html.vecurosoft.com/farmix/demo/assets/img/about/about-author.png" alt="about">
                            </div>
                            <div class="auther-content">
                                <h6 class="name">Thomas Walker</h6>
                                <span class="designation">Founder - CEO</span>
                                <img src="https://html.vecurosoft.com/farmix/demo/assets/img/about/contact-signature.png" alt="contact">
                            </div>
                        </div>
                        <div class="team-media">
                            <h2 class="contact-title">Get In Touch</h2>
                            <div class="media-style1">
                                <div class="media-icon"><img src="https://html.vecurosoft.com/farmix/demo/assets/img/icon/icon-1-1.png" alt="icon"></div>
                                <div class="media-body">
                                    <h3 class="media-title">Phone Number:</h3>
                                    <p class="media-info"><a href="tel:+88013004451">+88 013 00 44 51</a> <br> Mon - Sat: 09.00 to 06.00</p>
                                </div>
                            </div>
                            <div class="media-style1">
                                <div class="media-icon"><img src="https://html.vecurosoft.com/farmix/demo/assets/img/icon/icon-1-2.png" alt="icon"></div>
                                <div class="media-body">
                                    <h3 class="media-title">Email Address:</h3>
                                    <p class="media-info"><a href="mailto:info@farmix.com">info@farmix.com</a> <br> <a href="mailto:support@farmix.com">support@farmix.com</a></p>
                                </div>
                            </div>
                            <div class="media-style1">
                                <div class="media-icon"><img src="https://html.vecurosoft.com/farmix/demo/assets/img/icon/icon-1-3.png" alt="icon"></div>
                                <div class="media-body">
                                    <h3 class="media-title">Location:</h3>
                                    <p class="media-info">5919 Trussville Crossings Pkwy, Birmingham, United Kingdom</p>
                                </div>
                            </div>
                            <div class="media-style1">
                                <div class="media-icon"><img src="https://html.vecurosoft.com/farmix/demo/assets/img/icon/icon-1-1.png" alt="icon"></div>
                                <div class="media-body">
                                    <h3 class="media-title">Working Hours:</h3>
                                    <p class="media-info">Monday - Friday: 8:00 AM - 6:00 PM<br>Saturday: 9:00 AM - 4:00 PM<br>Sunday: Closed</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.3186960737993!2d106.80730731476831!3d-6.175392995528009!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f5d2e764b12d%3A0x3d2ad6e1e0e9bcc8!2sJakarta%2C%20Indonesia!5e0!3m2!1sen!2sus!4v1703011234567!5m2!1sen!2sus" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Are your products 100% natural and organic?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Yes, all our products are 100% natural and certified organic. We use sustainable farming practices and never use harmful pesticides or chemicals. Our products are certified by recognized organic certification bodies to ensure the highest quality and purity.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        What agricultural products do you produce?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        We produce a wide range of organic agricultural products including fresh vegetables, fruits, grains, dairy products, coconut oil, honey, and various herbs and spices. All our products are grown using sustainable farming methods and are available year-round.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Do you offer delivery services?
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Yes, we offer delivery services to most areas within a 50-mile radius of our farm. For orders over $50, delivery is free. We also have partnerships with local stores and farmers markets where you can find our products.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        Can I visit your farm for a tour?
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Absolutely! We offer guided farm tours every weekend from 10 AM to 4 PM. You can see our organic farming processes, meet our animals, and learn about sustainable agriculture. Please contact us in advance to schedule your visit and ensure availability.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        Do you offer wholesale pricing for bulk orders?
                                    </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Yes, we offer competitive wholesale pricing for restaurants, grocery stores, and other businesses. Minimum order quantities apply, and we can customize packages based on your specific needs. Contact our sales team for detailed pricing information.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                        What is your return and refund policy?
                                    </button>
                                </h2>
                                <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        We stand behind the quality of our products. If you're not completely satisfied with your purchase, please contact us within 48 hours of delivery. We offer full refunds or replacements for any products that don't meet our quality standards.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
