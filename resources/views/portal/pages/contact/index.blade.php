@extends('portal.layout.app')
@section('content')
<div class="space-200"></div>
<div class="wrap-map-v5">
    <div id="map-2" class="row-height" data-map-zoom="16" data-map-scroll="true" style="height: 300px">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d879.7955087162624!2d-0.11190769692568782!3d51.520424583870124!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48761b495593610d%3A0x4c0edc3c846f00b8!2s60%20Grays%20Inn%20Rd%2C%20London%20WC1X%208AQ%2C%20UK!5e1!3m2!1sen!2sbd!4v1738164623008!5m2!1sen!2sbd" class="w-100 h-100" height="1000" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="grid-contact mt-5">
        <div class="contact-item wow fadeInUp">
            <div class="icon">
                <i class="flaticon-location-pin"></i>
            </div>
            <div class="content">
                <h4>Our Address</h4>
                <p>
                    90 Fifth Avenue, 3rd Floor <br>
                    San Francisco, CA 1980
                </p>
            </div>
            <div class="bot">
                <div class="text-content">See on Map</div>
            </div>
        </div>
        <div class="contact-item wow fadeInUp" data-wow-delay="0.1s">
            <div class="icon">
                <i class="flaticon-phone"></i>
            </div>
            <div class="content">
                <h4>Contact Info</h4>
                <p>
                    +088 (246) 642-27-10
                </p>
            </div>
            <div class="bot">
                <div class="text-content">Give us a call</div>
            </div>
        </div>
        <div class="contact-item wow fadeInUp" data-wow-delay="0.2s">
            <div class="icon">
                <i class="flaticon-video-chat"></i>
            </div>
            <div class="content">
                <h4>Live Support</h4>
                <p>
                    example@gmail.com
                </p>
            </div>
            <div class="bot">
                <div class="text-content">Open Live Chat</div>
            </div>
        </div>
    </div>
</div>

<!-- send-message -->
<section class="tf-section send-message">
    <div class="cl-container">
        <div class="row">
            <div class="col-12">
                <div class="heading-section text-center">
                    <h2 class="wow fadeInUp">Send Us a Message</h2>
                    <div class="text wow fadeInUp">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
                </div>
            </div>
        </div>
        <div class="row justify-center">
            <div class="col-xxl-8">
                <form class="form-send-message">
                    <div class="cols">
                        <fieldset class="name wow fadeInUp has-top-title">
                            <input type="text" placeholder="Name" class="" name="text" tabindex="2" value="Ali Tufan" aria-required="true" required="">
                            <label for="">Name</label>
                        </fieldset>
                        <fieldset class="phone wow fadeInUp has-top-title">
                            <input type="number" placeholder="Phone" class="" name="phone" tabindex="2" value="" aria-required="true" required="">
                            <label for="">Phone</label>
                        </fieldset>
                    </div>
                    <fieldset class="email wow fadeInUp has-top-title">
                        <input type="email" placeholder="Email" class="" name="email" tabindex="2" value="themesflat@gmail.com" aria-required="true" required="">
                        <label for="">Email</label>
                    </fieldset>
                    <fieldset class="message wow fadeInUp has-top-title">
                        <textarea name="message" rows="4" placeholder="Your Message" class="" tabindex="2" aria-required="true" required="">Lorem Ipsum</textarea>
                        <label for="">Your Message</label>
                  </fieldset>
                    <div class="checkbox-item wow fadeInUp">
                        <label>
                            <p>I consent to having this website store my submitted information</p>
                            <input type="checkbox">
                            <span class="btn-checkbox"></span>
                        </label>
                    </div>
                    <div class="button-submit wow fadeInUp">
                        <button class="tf-button-primary w-full" type="submit">Send Message<i class="icon-arrow-right-add"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- /send-message -->

<!-- flat-partner -->
<section class="tf-section flat-partner style-1 pt-0">
    <div class="cl-container">
        <div class="row">
            <div class="col-12">
                <div class="heading-section text-center">
                    <div class="text wow fadeInUp">Thousands of world’s leading companies trust Space</div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="flat-brand">
                    <div class="swiper-container slider-brand">                            
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="slogan-logo">
                                    <a href="#">
                                        <img src="{{asset('assets/portal/images/image-box/brand-1.png')}}" alt="">
                                    </a>
                                </div>                         
                            </div>
                            <div class="swiper-slide">
                                <div class="slogan-logo">
                                    <a href="#">
                                        <img src="{{asset('assets/portal/images/image-box/brand-2.png')}}" alt="">
                                    </a>
                                </div>                         
                            </div>
                            <div class="swiper-slide">
                                <div class="slogan-logo">
                                    <a href="#">
                                        <img src="{{asset('assets/portal/images/image-box/brand-3.png')}}" alt="">
                                    </a>
                                </div>                         
                            </div>
                            <div class="swiper-slide">
                                <div class="slogan-logo">
                                    <a href="#">
                                        <img src="{{asset('assets/portal/images/image-box/brand-4.png')}}" alt="">
                                    </a>
                                </div>                         
                            </div>
                            <div class="swiper-slide">
                                <div class="slogan-logo">
                                    <a href="#">
                                        <img src="{{asset('assets/portal/images/image-box/brand-5.png')}}" alt="">
                                    </a>
                                </div>                         
                            </div>
                            <div class="swiper-slide">
                                <div class="slogan-logo">
                                    <a href="#">
                                        <img src="{{asset('assets/portal/images/image-box/brand-6.png')}}" alt="">
                                    </a>
                                </div>                         
                            </div>
                     
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /flat-partner -->

<!-- account-bar -->
<section class="account-bar">
    <div class="cl-container">
        <div class="row">
            <div class="col-12">
                <div class="flex justify-between items-center flex-wrap gap15">
                    <div>
                        <h3 class="wow fadeInUp">Become a Real Estate Agent</h3>
                        <div class="text wow fadeInUp">We only work with the best companies around the globe</div>
                    </div>
                    <a href="#" class="tf-button-primary wow fadeInUp">Register Now<i class="icon-arrow-right-add"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /account-bar -->

@endsection