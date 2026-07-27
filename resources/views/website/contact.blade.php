@extends('layouts.website')
@section('content')

    <!-- Page Header Start -->
    <div class="page-header dark-section parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-3" data-cursor="-opaque">Contact Us</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Contact us</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Page Contact Us Section Start -->
    <div class="page-contact-us">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title section-title-center">
                        <span class="section-sub-title wow fadeInUp">Contact Us</span>
                        <h2 class="text-anime-style-3" data-cursor="-opaque"> Let's Help You Find Your Perfect Jewellery
                        </h2>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">
                            Whether you have questions about our jewellery collections, savings plans,
                            jewellery schemes, or orders, our team is here to help. Get in touch and we'll
                            be happy to assist you.
                        </p>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-xl-6">
                    <!-- Google Map Start -->
                    <div class="google-map-iframe wow fadeInUp">
                        {{-- <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d248815.85822883708!2d77.62197175!3d12.987977!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae1670c9b44e6d%3A0xf8dfc3e8517e4fe0!2sBengaluru%2C%20Karnataka!5e0!3m2!1sen!2sin!4v1784279941639!5m2!1sen!2sin"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="strict-origin-when-cross-origin"></iframe> --}}
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d497428.8116807678!2d77.583195!3d13.08888!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae1868489f9cb3%3A0x4da39eb79875fe5c!2s761%2C%2014th%20Main%20Rd%2C%20Judicial%20Layout%2C%20Yelahanka%2C%20Bengaluru%2C%20Karnataka%20560065%2C%20India!5e0!3m2!1sen!2sus!4v1785153465852!5m2!1sen!2sus"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="strict-origin-when-cross-origin"></iframe>
                    </div>
                    <!-- Google Map End -->
                </div>

                <div class="col-xl-6">
                    <!-- Contact Form Start -->
                    <div class="contact-form">
                        <form id="contactForm" action="#" method="POST" data-toggle="validator" class="wow fadeInUp"
                            data-wow-delay="0.2s">
                            <div class="row">
                                <div class="form-group col-md-6 mb-4">
                                    <label>Full Name*</label>
                                    <input type="text" name="fname" class="form-control" id="fname"
                                        placeholder="Enter First Name *" required="">
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-6 mb-4">
                                    <label>Last Name*</label>
                                    <input type="text" name="lname" class="form-control" id="lname"
                                        placeholder="Enter Last Name *" required="">
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-6 mb-4">
                                    <label>Email Address*</label>
                                    <input type="email" name="email" class="form-control" id="email"
                                        placeholder="Enter Email Address *" required="">
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-6 mb-4">
                                    <label>Phone Number*</label>
                                    <input type="text" name="phone" class="form-control" id="phone"
                                        placeholder="Enter Phone Number *" required="">
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-12 mb-4">
                                    <label>Message*</label>
                                    <textarea name="message" class="form-control" id="message" rows="5"
                                        placeholder="Any Additional Message..."></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="col-md-12">
                                    <div class="contact-form-btn">
                                        <button type="submit" class="btn-default">Send Message</button>
                                        <div id="msgSubmit" class="h3 hidden"></div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- Contact Form End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Contact Us End -->

    <!-- Contact Info Box Start -->
    <div class="contact-info-box">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title section-title-center">
                        <span class="section-sub-title wow fadeInUp">CONTACT INFORMATION</span>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">We're Here to Help You</h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <!-- Contact Info Item Start -->
                    <div class="contact-info-item wow fadeInUp">
                        <div class="icon-box">
                            <img src="{{asset('website')}}/images/icon-phone-white.svg" alt="">
                        </div>
                        <div class="contact-info-content">
                            <p>Phone Number</p>
                            <ul>
                                <li><a href="tel:{{$site->phone}}">{{$site->phone}}</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Contact Info Item End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Contact Info Item Start -->
                    <div class="contact-info-item wow fadeInUp" data-wow-delay="0.2s">
                        <div class="icon-box">
                            <img src="{{asset('website')}}/images/icon-mail-white.svg" alt="">
                        </div>
                        <div class="contact-info-content">
                            <p>Email Address</p>
                            <ul>
                                <li><a href="mailto:{{ $site->email }}">{{ $site->email }}</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Contact Info Item End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Contact Info Item Start -->
                    <div class="contact-info-item wow fadeInUp" data-wow-delay="0.4s">
                        <div class="icon-box">
                            <img src="{{asset('website')}}/images/icon-location-white.svg" alt="">
                        </div>
                        <div class="contact-info-content">
                            <p>Our Location</p>
                            <ul>
                                <li>
                                    {{$site->address}}
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Contact Info Item End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Info Box End -->
@endsection