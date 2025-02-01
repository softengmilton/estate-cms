@extends('portal.layout.app')
@section('content')
                <!-- slider -->
                <section class="slider home4">
                    <div class="wrap-slider">
                        <div class="slider-item">
                            <div class="cl-container">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="slider-content">
                                            <div class="sub wow fadeInUp">LET US GUIDE YOUR HOME</div>
                                            <div class="text-content wow fadeInUp">We’ve more than 745,000 apartments, place & plot.</div>
                                            <h1 class="wow fadeInUp">Find Your Perfect Home</h1>
                                            <form class="form-search-content flex-grow wow fadeInUp">
                                                <fieldset class="name">
                                                    <input type="text" placeholder="Enter key word" class="show-search style-2" name="name" tabindex="2" value="" aria-required="true" required="">
                                                </fieldset>
                                                <div class="button-submit style-absolute-right">
                                                    <button class="style-icon-bg" type="submit"><i class="flaticon-magnifiying-glass"></i></button>
                                                </div>
                                                <div class="box-content-search">
                                                    <ul>
                                                        <li>
                                                            <div class="heading">Recent Search</div>
                                                        </li>
                                                        <li>
                                                            <div class="item">
                                                                <i class="flaticon-time"></i>
                                                                <p>New York</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="item">
                                                                <i class="flaticon-time"></i>
                                                                <p>Los Angeles</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="item1">
                                                                <div>
                                                                    <div class="image">
                                                                        <img src="{{asset('assets/portal/images/author/avatar-7.png')}}" alt="">
                                                                    </div>
                                                                    <p>Home Pitt Street</p>
                                                                </div>
                                                                <div class="text">For Rent</div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="item">
                                                                <i class="flaticon-time"></i>
                                                                <p>Manhattan</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="item">
                                                                <i class="flaticon-time"></i>
                                                                <p>Brooklyn</p>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </form>
                                            <div class="text-1 wow fadeInUp">Explore all things property</div>
                                            <div class="list-links wow fadeInUp">
                                                <a href="#">Buying</a>
                                                <a href="#">Renting</a>
                                                <a href="#">Selling</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /slider -->

                <!-- flat-brand -->
                <section class="tf-section-default flat-brand bg-fourth">
                    <div class="cl-container">
                        <div class="row">
                            <div class="col-12">
                                <p class="wow fadeInUp">Trusted by the world’s best</p>
                            </div>
                            <div class="col-12">
                                <div class="swiper-container slider-brand">                            
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="slogan-logo">
                                                <a href="#">
                                                    <img src="{{asset('assets/portal/images/image-box/brand-7.png')}}" alt="">
                                                </a>
                                            </div>                         
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="slogan-logo">
                                                <a href="#">
                                                    <img src="{{asset('assets/portal/images/image-box/brand-8.png')}}" alt="">
                                                </a>
                                            </div>                         
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="slogan-logo">
                                                <a href="#">
                                                    <img src="{{asset('assets/portal/images/image-box/brand-9.png')}}" alt="">
                                                </a>
                                            </div>                         
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="slogan-logo">
                                                <a href="#">
                                                    <img src="{{asset('assets/portal/images/image-box/brand-10.png')}}" alt="image">
                                                </a>
                                            </div>                         
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="slogan-logo">
                                                <a href="#">
                                                    <img src="{{asset('assets/portal/images/image-box/brand-11.png')}}" alt="image">
                                                </a>
                                            </div>                         
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="slogan-logo">
                                                <a href="#">
                                                    <img src="{{asset('assets/portal/images/image-box/brand-12.png')}}" alt="image">
                                                </a>
                                            </div>                         
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /flat-brand -->

                <!-- work-with-us -->
                <section class="tf-section work-with-us style-1">
                    <div class="cl-container">
                        <div class="row">
                            <div class="col-12">
                                <div class="heading-section text-center">
                                    <h2 class="wow fadeInUp">Find Your Dream House as Easy as 1,2,3</h2>
                                    <div class="text wow fadeInUp">Based on your view history</div>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-center">
                           <div class="col-xl-10">
                            <div class="wrap">
                                <div class="box-icon style-3 wow fadeInUp">
                                    <div class="image">
                                        <img src="{{asset('assets/portal/images/image-box/img-find-1.svg')}}" alt="">
                                    </div>
                                    <div class="content">
                                        <a href="#" class="h4">1. Search for you favorite house <br> in your location</a> 
                                        <div class="text-content">Pellentesque egestas elementum  <br>
                                            egestas faucibus sem. </div>
                                    </div>
                                </div>
                                <div class="box-icon style-3 wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="image">
                                        <img src="{{asset('assets/portal/images/image-box/img-find-2.svg')}}" alt="">
                                    </div>
                                    <div class="content">
                                        <a href="#" class="h4">2. Make a visit appointment with <br> one of your agents</a> 
                                        <div class="text-content">Pellentesque egestas elementum  <br>
                                            egestas faucibus sem. </div>
                                    </div>
                                </div>
                                <div class="box-icon style-3 wow fadeInUp" data-wow-delay="0.15s">
                                    <div class="image">
                                        <img src="{{asset('assets/portal/images/image-box/img-find-3.svg')}}" alt="">
                                    </div>
                                    <div class="content">
                                        <a href="#" class="h4">3. Get your dream house in <br> 
                                            a month, or less</a> 
                                        <div class="text-content">Pellentesque egestas elementum  <br>
                                            egestas faucibus sem. </div>
                                    </div>
                                </div>
                            </div>
                           </div>
                        </div>
                    </div>
                </section>
                <!-- /work-with-us -->
                
                <!-- featured-categories -->
                <section class="tf-section featured-categories">
                    <div class="cl-container">
                        <div class="row">
                            <div class="col-12">
                                <div class="heading-section text-center">
                                    <h2 class="wow fadeInUp">Featured Categories</h2>
                                    <div class="text wow fadeInUp">Based on your view history</div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="swiper-container padding-bottom-80 slider-recent-properties pagination-style-2">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="categories-item wow fadeInUp">
                                                <div class="icon">
                                                    <i class="flaticon-building"></i>
                                                </div>
                                                <div>
                                                    <div class="name">
                                                        <a href="#">Town House</a>
                                                    </div>
                                                    <div class="text">20 Properties</div>
                                                </div>
                                                <a href="#" class="button-arrow-right"><i class="icon-arrow-right-add"></i></a>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="categories-item wow fadeInUp" data-wow-delay="0.1s">
                                                <div class="icon">
                                                    <i class="flaticon-cottage"></i>
                                                </div>
                                                <div>
                                                    <div class="name">
                                                        <a href="#">Modern Villa</a>
                                                    </div>
                                                    <div class="text">20 Properties</div>
                                                </div>
                                                <a href="#" class="button-arrow-right"><i class="icon-arrow-right-add"></i></a>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="categories-item wow fadeInUp" data-wow-delay="0.15s">
                                                <div class="icon">
                                                    <i class="flaticon-buildings"></i>
                                                </div>
                                                <div>
                                                    <div class="name">
                                                        <a href="#">Apartment</a>
                                                    </div>
                                                    <div class="text">20 Properties</div>
                                                </div>
                                                <a href="#" class="button-arrow-right"><i class="icon-arrow-right-add"></i></a>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="categories-item wow fadeInUp" data-wow-delay="0.15s">
                                                <div class="icon">
                                                    <i class="flaticon-office-building"></i>
                                                </div>
                                                <div>
                                                    <div class="name">
                                                        <a href="#">Office</a>
                                                    </div>
                                                    <div class="text">20 Properties</div>
                                                </div>
                                                <a href="#" class="button-arrow-right"><i class="icon-arrow-right-add"></i></a>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="categories-item">
                                                <div class="icon">
                                                    <i class="flaticon-buildings"></i>
                                                </div>
                                                <div>
                                                    <div class="name">
                                                        <a href="#">Apartment</a>
                                                    </div>
                                                    <div class="text">20 Properties</div>
                                                </div>
                                                <a href="#" class="button-arrow-right"><i class="icon-arrow-right-add"></i></a>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="categories-item">
                                                <div class="icon">
                                                    <i class="flaticon-office-building"></i>
                                                </div>
                                                <div>
                                                    <div class="name">
                                                        <a href="#">Office</a>
                                                    </div>
                                                    <div class="text">20 Properties</div>
                                                </div>
                                                <a href="#" class="button-arrow-right"><i class="icon-arrow-right-add"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-pagination recent-properties-pagination"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /featured-categories -->

                <!-- recent-properties -->
                <section class="tf-section recent-properties pb-200">
                    <div class="cl-container">
                        <div class="row">
                            <div class="col-12">
                                <div class="heading-section text-center ps-0">
                                    <h2 class="wow fadeInUp">Recent Properties for Rent</h2>
                                    <div class="text wow fadeInUp">Based on your view history</div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="swiper-container slider-recent-properties padding-bottom-80 pagination-style-2">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="box-dream style-3 wow fadeInUp">
                                                <div class="image">
                                                    <div class="list-tags">
                                                        <a href="#" class="tags-item for-sell">FOR RENT</a>
                                                        <a href="#" class="tags-item featured">FEATURED</a>
                                                    </div>
                                                    <div class="swiper-container slider-box-dream arrow-style-1 pagination-style-1">
                                                        <div class="swiper-wrapper">
                                                            <div class="swiper-slide">
                                                                <div class="w-full">
                                                                    <img class="w-full" src="{{asset('assets/portal/images/house/home-1.jpg')}}" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <div class="w-full">
                                                                    <img class="w-full" src="{{asset('assets/portal/images/house/home-2.jpg')}}" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <div class="w-full">
                                                                    <img class="w-full" src="{{asset('assets/portal/images/house/home-3.jpg')}}" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <div class="w-full">
                                                                    <img class="w-full" src="{{asset('assets/portal/images/house/home-4.jpg')}}" alt="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="swiper-pagination box-dream-pagination"></div>
                                                        <div class="box-dream-next swiper-button-next"></div>
                                                        <div class="box-dream-prev swiper-button-prev"></div>
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <div class="head">
                                                        <div class="title">
                                                            <a href="property-single-v1.html">Archer House</a>
                                                        </div>
                                                    </div>
                                                    <div class="location">
                                                        <div class="icon">
                                                            <i class="flaticon-location"></i>
                                                        </div>
                                                        <p>148-37 88th Ave, Jamaica, NY 11435</p>
                                                    </div>
                                                    <div class="icon-box style-border">
                                                        <div class="item">
                                                            <i class="flaticon-hotel"></i>
                                                            <p>4</p>
                                                        </div>
                                                        <div class="item">
                                                            <i class="flaticon-bath-tub"></i>
                                                            <p>3</p>
                                                        </div>
                                                        <div class="item">
                                                            <i class="flaticon-minus-front"></i>
                                                            <p>2660</p>
                                                        </div>
                                                    </div>
                                                    <div class="bot">
                                                        <div class="price">$815,000</div>
                                                        <div class="button-heart style-1"><i class="flaticon-heart-1"></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="box-dream style-3 wow fadeInUp" data-wow-delay="0.1s">
                                                <div class="image">
                                                    <div class="list-tags">
                                                        <a href="#" class="tags-item for-sell">FOR SELL</a>
                                                    </div>
                                                    <div class="swiper-container slider-box-dream arrow-style-1 pagination-style-1">
                                                        <div class="swiper-wrapper">
                                                            <div class="swiper-slide">
                                                                <div class="w-full">
                                                                    <img class="w-full" src="{{asset('assets/portal/images/house/home-2.jpg')}}" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <div class="w-full">
                                                                    <img class="w-full" src="{{asset('assets/portal/images/house/home-1.jpg')}}" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <div class="w-full">
                                                                    <img class="w-full" src="{{asset('assets/portal/images/house/home-3.jpg')}}" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <div class="w-full">
                                                                    <img class="w-full" src="{{asset('assets/portal/images/house/home-4.jpg')}}" alt="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="swiper-pagination box-dream-pagination"></div>
                                                        <div class="box-dream-next swiper-button-next"></div>
                                                        <div class="box-dream-prev swiper-button-prev"></div>
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <div class="head">
                                                        <div class="title">
                                                            <a href="property-single-v1.html">Villa One Hyde Park</a>
                                                        </div>
                                                    </div>
                                                    <div class="location">
                                                        <div class="icon">
                                                            <i class="flaticon-location"></i>
                                                        </div>
                                                        <p>148-37 88th Ave, Jamaica, NY 11435</p>
                                                    </div>
                                                    <div class="icon-box style-border">
                                                        <div class="item">
                                                            <i class="flaticon-hotel"></i>
                                                            <p>4</p>
                                                        </div>
                                                        <div class="item">
                                                            <i class="flaticon-bath-tub"></i>
                                                            <p>3</p>
                                                        </div>
                                                        <div class="item">
                                                            <i class="flaticon-minus-front"></i>
                                                            <p>2660</p>
                                                        </div>
                                                    </div>
                                                    <div class="bot">
                                                        <div class="price">$815,000</div>
                                                        <div class="button-heart style-1"><i class="flaticon-heart-1"></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="box-dream style-3 wow fadeInUp" data-wow-delay="0.15s">
                                                <div class="image">
                                                    <div class="list-tags">
                                                        <a href="#" class="tags-item for-sell">FOR SELL</a>
                                                    </div>
                                                    <div class="swiper-container slider-box-dream arrow-style-1 pagination-style-1">
                                                        <div class="swiper-wrapper">
                                                            <div class="swiper-slide">
                                                                <div class="w-full">
                                                                    <img class="w-full" src="{{asset('assets/portal/images/house/home-3.jpg')}}'" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <div class="w-full">
                                                                    <img class="w-full" src="{{asset('assets/portal/images/house/home-1.jpg')}}" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <div class="w-full">
                                                                    <img class="w-full" src="{{asset('assets/portal/images/house/home-2.jpg')}}" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <div class="w-full">
                                                                    <img class="w-full" src="{{asset('assets/portal/images/house/home-4.jpg')}}" alt="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="swiper-pagination box-dream-pagination"></div>
                                                        <div class="box-dream-next swiper-button-next"></div>
                                                        <div class="box-dream-prev swiper-button-prev"></div>
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <div class="head">
                                                        <div class="title">
                                                            <a href="property-single-v1.html">Home Pitt Street</a>
                                                        </div>
                                                    </div>
                                                    <div class="location">
                                                        <div class="icon">
                                                            <i class="flaticon-location"></i>
                                                        </div>
                                                        <p>148-37 88th Ave, Jamaica, NY 11435</p>
                                                    </div>
                                                    <div class="icon-box style-border">
                                                        <div class="item">
                                                            <i class="flaticon-hotel"></i>
                                                            <p>4</p>
                                                        </div>
                                                        <div class="item">
                                                            <i class="flaticon-bath-tub"></i>
                                                            <p>3</p>
                                                        </div>
                                                        <div class="item">
                                                            <i class="flaticon-minus-front"></i>
                                                            <p>2660</p>
                                                        </div>
                                                    </div>
                                                    <div class="bot">
                                                        <div class="price">$815,000</div>
                                                        <div class="button-heart style-1"><i class="flaticon-heart-1"></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="box-dream style-3 wow fadeInUp" data-wow-delay="0.2s">
                                                <div class="image">
                                                    <div class="list-tags">
                                                        <a href="#" class="tags-item for-sell">FOR SELL</a>
                                                    </div>
                                                    <div class="swiper-container slider-box-dream arrow-style-1 pagination-style-1">
                                                        <div class="swiper-wrapper">
                                                            <div class="swiper-slide">
                                                                <div class="w-full">
                                                                    <img class="w-full" src="{{asset('assets/portal/images/house/home-3.jpg')}}" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <div class="w-full">
                                                                    <img class="w-full" src="{{asset('assets/portal/images/house/home-1.jpg')}}" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <div class="w-full">
                                                                    <img class="w-full" src="{{asset('assets/portal/images/house/home-2.jpg')}}" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <div class="w-full">
                                                                    <img class="w-full" src="{{asset('assets/portal/images/house/home-4.jpg')}}" alt="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="swiper-pagination box-dream-pagination"></div>
                                                        <div class="box-dream-next swiper-button-next"></div>
                                                        <div class="box-dream-prev swiper-button-prev"></div>
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <div class="head">
                                                        <div class="title">
                                                            <a href="property-single-v1.html">Home Pitt Street</a>
                                                        </div>
                                                    </div>
                                                    <div class="location">
                                                        <div class="icon">
                                                            <i class="flaticon-location"></i>
                                                        </div>
                                                        <p>148-37 88th Ave, Jamaica, NY 11435</p>
                                                    </div>
                                                    <div class="icon-box style-border">
                                                        <div class="item">
                                                            <i class="flaticon-hotel"></i>
                                                            <p>4</p>
                                                        </div>
                                                        <div class="item">
                                                            <i class="flaticon-bath-tub"></i>
                                                            <p>3</p>
                                                        </div>
                                                        <div class="item">
                                                            <i class="flaticon-minus-front"></i>
                                                            <p>2660</p>
                                                        </div>
                                                    </div>
                                                    <div class="bot">
                                                        <div class="price">$815,000</div>
                                                        <div class="button-heart style-1"><i class="flaticon-heart-1"></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="box-dream style-3">
                                                <div class="image">
                                                    <div class="list-tags">
                                                        <a href="#" class="tags-item for-sell">FOR RENT</a>
                                                        <a href="#" class="tags-item featured">FEATURED</a>
                                                    </div>
                                                    <div class="swiper-container slider-box-dream arrow-style-1 pagination-style-1">
                                                        <div class="swiper-wrapper">
                                                            <div class="swiper-slide">
                                                                <div class="w-full">
                                                                    <img class="w-full" src="{{asset('assets/portal/images/house/home-1.jpg')}}" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <div class="w-full">
                                                                    <img class="w-full" src="{{asset('assets/portal/images/house/home-2.jpg')}}" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <div class="w-full">
                                                                    <img class="w-full" src="{{asset('assets/portal/images/house/home-3.jpg')}}" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <div class="w-full">
                                                                    <img class="w-full" src="{{asset('assets/portal/images/house/home-4.jpg')}}" alt="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="swiper-pagination box-dream-pagination"></div>
                                                        <div class="box-dream-next swiper-button-next"></div>
                                                        <div class="box-dream-prev swiper-button-prev"></div>
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <div class="head">
                                                        <div class="title">
                                                            <a href="property-single-v1.html">Archer House</a>
                                                        </div>
                                                    </div>
                                                    <div class="location">
                                                        <div class="icon">
                                                            <i class="flaticon-location"></i>
                                                        </div>
                                                        <p>148-37 88th Ave, Jamaica, NY 11435</p>
                                                    </div>
                                                    <div class="icon-box style-border">
                                                        <div class="item">
                                                            <i class="flaticon-hotel"></i>
                                                            <p>4</p>
                                                        </div>
                                                        <div class="item">
                                                            <i class="flaticon-bath-tub"></i>
                                                            <p>3</p>
                                                        </div>
                                                        <div class="item">
                                                            <i class="flaticon-minus-front"></i>
                                                            <p>2660</p>
                                                        </div>
                                                    </div>
                                                    <div class="bot">
                                                        <div class="price">$815,000</div>
                                                        <div class="button-heart style-1"><i class="flaticon-heart-1"></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="box-dream style-3">
                                                <div class="image">
                                                    <div class="list-tags">
                                                        <a href="#" class="tags-item for-sell">FOR SELL</a>
                                                    </div>
                                                    <div class="swiper-container slider-box-dream arrow-style-1 pagination-style-1">
                                                        <div class="swiper-wrapper">
                                                            <div class="swiper-slide">
                                                                <div class="w-full">
                                                                    <img class="w-full" src="{{asset('assets/portal/images/house/home-2.jpg')}}" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <div class="w-full">
                                                                    <img class="w-full" src="{{asset('assets/portal/images/house/home-1.jpg')}}" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <div class="w-full">
                                                                    <img class="w-full" src="{{asset('assets/portal/images/house/home-3.jpg')}}" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <div class="w-full">
                                                                    <img class="w-full" src="{{asset('assets/portal/images/house/home-4.jpg')}}" alt="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="swiper-pagination box-dream-pagination"></div>
                                                        <div class="box-dream-next swiper-button-next"></div>
                                                        <div class="box-dream-prev swiper-button-prev"></div>
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <div class="head">
                                                        <div class="title">
                                                            <a href="property-single-v1.html">Villa One Hyde Park</a>
                                                        </div>
                                                    </div>
                                                    <div class="location">
                                                        <div class="icon">
                                                            <i class="flaticon-location"></i>
                                                        </div>
                                                        <p>148-37 88th Ave, Jamaica, NY 11435</p>
                                                    </div>
                                                    <div class="icon-box style-border">
                                                        <div class="item">
                                                            <i class="flaticon-hotel"></i>
                                                            <p>4</p>
                                                        </div>
                                                        <div class="item">
                                                            <i class="flaticon-bath-tub"></i>
                                                            <p>3</p>
                                                        </div>
                                                        <div class="item">
                                                            <i class="flaticon-minus-front"></i>
                                                            <p>2660</p>
                                                        </div>
                                                    </div>
                                                    <div class="bot">
                                                        <div class="price">$815,000</div>
                                                        <div class="button-heart style-1"><i class="flaticon-heart-1"></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-pagination recent-properties-pagination"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /recent-properties -->

                <!-- perfect-home -->
                <section class="tf-section perfect-home style-2">
                    <div class="cl-container">
                        <div class="row">
                            <div class="col-xl-7">
                                <div class="wrap-image">
                                    <div>
                                        <div class="image item-1  wow fadeInUp" data-wow-delay="0.1s">
                                            <img src="{{asset('assets/portal/images/section/perfect-home-4.jpg')}}" alt="">
                                        </div>
                                        <div class="box  wow fadeInUp" data-wow-delay="0.1s">
                                            <div class="icon">
                                                <i class="flaticon-buy-home"></i>
                                            </div>
                                            <div>
                                                <p>Properties For Sel</p>
                                                <h4>14K</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="image item-2  wow fadeInUp" data-wow-delay="0.1s">
                                        <img src="{{asset('assets/portal/images/section/perfect-home-5.jpg')}}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-5">
                                <div class="content-right">
                                    <h2 class="wow fadeInUp">Why You Should Work <br> With Us</h2>
                                    <div class="text-content wow fadeInUp">Pellentesque egestas elementum egestas faucibus sem. Velit <br> nunc egestas ut morbi. Leo diam diam.</div>
                                    <ul class="list">
                                        <li class="check-ellipse-item style-1 wow fadeInUp">
                                            <div class="icon">
                                                <i class="flaticon-check"></i>
                                            </div>
                                            <p>100% Secure</p>
                                        </li>
                                        <li class="check-ellipse-item style-1 wow fadeInUp">
                                            <div class="icon">
                                                <i class="flaticon-check"></i>
                                            </div>
                                            <p>Wide Range of Properties</p>
                                        </li>
                                        <li class="check-ellipse-item style-1 wow fadeInUp">
                                            <div class="icon">
                                                <i class="flaticon-check"></i>
                                            </div>
                                            <p>Buy or Rent Homes</p>
                                        </li>
                                        <li class="check-ellipse-item style-1 wow fadeInUp">
                                            <div class="icon">
                                                <i class="flaticon-check"></i>
                                            </div>
                                            <p>Truested by Thousands</p>
                                        </li>
                                    </ul>
                                    <a href="#" class="tf-button-primary style-blue wow fadeInUp">Learn More<i class="icon-arrow-right-add"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /perfect-home -->

                <!-- flat-testimonial -->
                <section class="tf-section flat-testimonial style-2">
                    <div class="testimonials">
                        <div class="cl-container">
                            <div class="row justify-between">
                                <div class="col-xl-4 col-md-6">
                                    <div class="testimonials-inner">
                                        <h2 class="wow fadeInUp">What our customers are saying us?</h2>
                                        <div class="text wow fadeInUp">Various versions have evolved over the years, sometimes by accident, sometimes on purpose injected humour <br> and the like.</div>
                                        <div class="list">
                                            <div class="item wow fadeInUp">
                                                <h3>13m+</h3>
                                                <p>Happy People</p>
                                            </div>
                                            <div class="item wow fadeInUp" data-wow-delay="0.1s">
                                                <h3>4.88</h3>
                                                <p>Overall rating</p>
                                                <div class="ratings">
                                                    <i class="flaticon-star-1"></i>
                                                    <i class="flaticon-star-1"></i>
                                                    <i class="flaticon-star-1"></i>
                                                    <i class="flaticon-star-1"></i>
                                                    <i class="flaticon-star-1"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-5 col-md-6">
                                    <div class="swiper-container padding-bottom-80 slider-testimonials arrow-style-1 pagination-style-number">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="testimonials-item style-white">
                                                    <div class="head">
                                                        <div class="image wow fadeInLeft">
                                                            <img src="{{asset('assets/portal/images/author/author-1.png')}}" alt="">
                                                        </div>
                                                        <div>
                                                            <div class="title wow fadeInUp">
                                                                <a href="#">Cameron Williamson</a>
                                                            </div>
                                                            <p class="wow fadeInUp">Designer</p>
                                                        </div>
                                                    </div>
                                                    <div class="description">Searches for multiplexes, property comparisons, and the loan estimator. Works great. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dores.</div>
                                                    <svg xmlns="http://www.w3.org/2000/svg')}}" width="45" height="44" viewBox="0 0 45 44" fill="none">
                                                        <g filter="url(#filter0_d_249_14836)">
                                                        <path d="M9.67883 38C6.64234 38 4.27007 36.9524 2.56204 34.8571C0.854015 32.6667 0 29.4286 0 25.1429C0 20.6667 0.99635 16.381 2.98905 12.2857C5.07664 8.19048 8.01825 4.14286 11.8139 0.142864C11.9088 0.0476213 12.0511 0 12.2409 0C12.5255 0 12.7153 0.142858 12.8102 0.428574C13 0.619048 13.0474 0.857143 12.9526 1.14286C10.6752 4.19048 9.10949 7.14286 8.25548 10C7.49635 12.7619 7.11679 15.8571 7.11679 19.2857C7.11679 21.8571 7.44891 23.8571 8.11314 25.2857C8.77737 26.7143 9.67883 28 10.8175 29.1429L5.40876 30.1429C5.31387 28.5238 5.74088 27.2857 6.68978 26.4286C7.73358 25.5714 9.06205 25.1429 10.6752 25.1429C12.6679 25.1429 14.1861 25.7143 15.2299 26.8571C16.3686 28 16.938 29.5714 16.938 31.5714C16.938 33.6667 16.2737 35.2857 14.9453 36.4286C13.7117 37.4762 11.9562 38 9.67883 38ZM31.5985 38C28.562 38 26.1898 36.9524 24.4818 34.8571C22.8686 32.6667 22.062 29.4286 22.062 25.1429C22.062 20.5714 23.0584 16.2381 25.0511 12.1429C27.0438 8.04762 29.9854 4.04762 33.8759 0.142864C33.9708 0.0476213 34.1131 0 34.3029 0C34.5876 0 34.7774 0.142858 34.8723 0.428574C35.062 0.619048 35.1095 0.857143 35.0146 1.14286C32.7372 4.19048 31.1715 7.14286 30.3175 10C29.5584 12.7619 29.1788 15.8571 29.1788 19.2857C29.1788 21.8571 29.4635 23.9048 30.0328 25.4286C30.6971 26.8571 31.5985 28.0952 32.7372 29.1429L27.4708 30.1429C27.3759 28.5238 27.8029 27.2857 28.7518 26.4286C29.7007 25.5714 31.0292 25.1429 32.7372 25.1429C34.7299 25.1429 36.2482 25.7143 37.292 26.8571C38.4307 28 39 29.5714 39 31.5714C39 33.6667 38.3358 35.2857 37.0073 36.4286C35.7737 37.4762 33.9708 38 31.5985 38Z" fill="#1A1A1A"></path>
                                                        </g>
                                                        <defs>
                                                        <filter id="filter0_d_249_14836" x="0" y="0" width="45" height="44" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                        <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                                                        <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
                                                        <feOffset dx="6" dy="6"></feOffset>
                                                        <feComposite in2="hardAlpha" operator="out"></feComposite>
                                                        <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"></feColorMatrix>
                                                        <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_249_14836"></feBlend>
                                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_249_14836" result="shape"></feBlend>
                                                        </filter>
                                                        </defs>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="testimonials-item style-white">
                                                    <div class="head">
                                                        <div class="image">
                                                            <img src="{{asset('assets/portal/images/author/author-1.png')}}" alt="">
                                                        </div>
                                                        <div>
                                                            <div class="title">
                                                                <a href="#">Cameron Williamson</a>
                                                            </div>
                                                            <p>Designer</p>
                                                        </div>
                                                    </div>
                                                    <div class="description">Searches for multiplexes, property comparisons, and the loan estimator. Works great. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dores.</div>
                                                    <svg xmlns="http://www.w3.org/2000/svg')}}" width="45" height="44" viewBox="0 0 45 44" fill="none">
                                                        <g filter="url(#filter0_d_249_14836)">
                                                        <path d="M9.67883 38C6.64234 38 4.27007 36.9524 2.56204 34.8571C0.854015 32.6667 0 29.4286 0 25.1429C0 20.6667 0.99635 16.381 2.98905 12.2857C5.07664 8.19048 8.01825 4.14286 11.8139 0.142864C11.9088 0.0476213 12.0511 0 12.2409 0C12.5255 0 12.7153 0.142858 12.8102 0.428574C13 0.619048 13.0474 0.857143 12.9526 1.14286C10.6752 4.19048 9.10949 7.14286 8.25548 10C7.49635 12.7619 7.11679 15.8571 7.11679 19.2857C7.11679 21.8571 7.44891 23.8571 8.11314 25.2857C8.77737 26.7143 9.67883 28 10.8175 29.1429L5.40876 30.1429C5.31387 28.5238 5.74088 27.2857 6.68978 26.4286C7.73358 25.5714 9.06205 25.1429 10.6752 25.1429C12.6679 25.1429 14.1861 25.7143 15.2299 26.8571C16.3686 28 16.938 29.5714 16.938 31.5714C16.938 33.6667 16.2737 35.2857 14.9453 36.4286C13.7117 37.4762 11.9562 38 9.67883 38ZM31.5985 38C28.562 38 26.1898 36.9524 24.4818 34.8571C22.8686 32.6667 22.062 29.4286 22.062 25.1429C22.062 20.5714 23.0584 16.2381 25.0511 12.1429C27.0438 8.04762 29.9854 4.04762 33.8759 0.142864C33.9708 0.0476213 34.1131 0 34.3029 0C34.5876 0 34.7774 0.142858 34.8723 0.428574C35.062 0.619048 35.1095 0.857143 35.0146 1.14286C32.7372 4.19048 31.1715 7.14286 30.3175 10C29.5584 12.7619 29.1788 15.8571 29.1788 19.2857C29.1788 21.8571 29.4635 23.9048 30.0328 25.4286C30.6971 26.8571 31.5985 28.0952 32.7372 29.1429L27.4708 30.1429C27.3759 28.5238 27.8029 27.2857 28.7518 26.4286C29.7007 25.5714 31.0292 25.1429 32.7372 25.1429C34.7299 25.1429 36.2482 25.7143 37.292 26.8571C38.4307 28 39 29.5714 39 31.5714C39 33.6667 38.3358 35.2857 37.0073 36.4286C35.7737 37.4762 33.9708 38 31.5985 38Z" fill="#1A1A1A"></path>
                                                        </g>
                                                        <defs>
                                                        <filter id="filter0_d_249_14836" x="0" y="0" width="45" height="44" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                        <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                                                        <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
                                                        <feOffset dx="6" dy="6"></feOffset>
                                                        <feComposite in2="hardAlpha" operator="out"></feComposite>
                                                        <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"></feColorMatrix>
                                                        <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_249_14836"></feBlend>
                                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_249_14836" result="shape"></feBlend>
                                                        </filter>
                                                        </defs>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bottom-wrap">
                                            <div class="testimonials-prev type-white has-border swiper-button-prev"></div>
                                            <div class="swiper-pagination type-white testimonials-pagination"></div>
                                            <div class="testimonials-next type-white has-border swiper-button-next"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /flat-testimonial -->
                
                <!-- flat-partner -->
                <section class="tf-section flat-partner">
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
                                                        <img src="{{asset('assets/portal/images/image-box/brand-1.png')}}" alt="image">
                                                    </a>
                                                </div>                         
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="slogan-logo">
                                                    <a href="#">
                                                        <img src="{{asset('assets/portal/images/image-box/brand-2.png')}}" alt="image">
                                                    </a>
                                                </div>                         
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="slogan-logo">
                                                    <a href="#">
                                                        <img src="{{asset('assets/portal/images/image-box/brand-3.png')}}" alt="image">
                                                    </a>
                                                </div>                         
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="slogan-logo">
                                                    <a href="#">
                                                        <img src="{{asset('assets/portal/images/image-box/brand-4.png')}}" alt="image">
                                                    </a>
                                                </div>                         
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="slogan-logo">
                                                    <a href="#">
                                                        <img src="{{asset('assets/portal/images/image-box/brand-5.png')}}" alt="image">
                                                    </a>
                                                </div>                         
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="slogan-logo">
                                                    <a href="#">
                                                        <img src="{{asset('assets/portal/images/image-box/brand-6.png')}}" alt="image">
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

                <!-- flat-area -->
                <section class="tf-section flat-area">
                    <div class="cl-container">
                        <div class="row">
                            <div class="col-12">
                                <div class="heading-section text-center">
                                    <h2 class="wow fadeInUp">Properties by Area</h2>
                                    <div class="text wow fadeInUp">Based on your view history</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-6">
                                <div class="area-item wow fadeInUp">
                                    <div class="image">
                                        <img src="{{asset('assets/portal/images/image-box/area-1.jpg')}}" alt="">
                                    </div>
                                    <div>
                                        <div class="name">
                                            <a href="property-map-v1.html">New York</a>
                                        </div>
                                        <div class="text">20 Properties</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-6">
                                <div class="area-item wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="image">
                                        <img src="{{asset('assets/portal/images/image-box/area-2.jpg')}}" alt="">
                                    </div>
                                    <div>
                                        <div class="name">
                                            <a href="#">San Dieago</a>
                                        </div>
                                        <div class="text">20 Properties</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-6">
                                <div class="area-item wow fadeInUp" data-wow-delay="0.15s">
                                    <div class="image">
                                        <img src="{{asset('assets/portal/images/image-box/area-3.jpg')}}" alt="">
                                    </div>
                                    <div>
                                        <div class="name">
                                            <a href="#">Arizona</a>
                                        </div>
                                        <div class="text">20 Properties</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-6">
                                <div class="area-item wow fadeInUp">
                                    <div class="image">
                                        <img src="{{asset('assets/portal/images/image-box/area-4.jpg')}}" alt="">
                                    </div>
                                    <div>
                                        <div class="name">
                                            <a href="property-map-v1.html">Miami</a>
                                        </div>
                                        <div class="text">20 Properties</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-6">
                                <div class="area-item wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="image">
                                        <img src="{{asset('assets/portal/images/image-box/area-5.jpg')}}" alt="">
                                    </div>
                                    <div>
                                        <div class="name">
                                            <a href="#">Los Angeles</a>
                                        </div>
                                        <div class="text">20 Properties</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-6">
                                <div class="area-item wow fadeInUp" data-wow-delay="0.15s">
                                    <div class="image">
                                        <img src="{{asset('assets/portal/images/image-box/area-6.jpg')}}" alt="">
                                    </div>
                                    <div>
                                        <div class="name">
                                            <a href="#">Hawaii</a>
                                        </div>
                                        <div class="text">20 Properties</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-6">
                                <div class="area-item wow fadeInUp">
                                    <div class="image">
                                        <img src="{{asset('assets/portal/images/image-box/area-7.jpg')}}" alt="">
                                    </div>
                                    <div>
                                        <div class="name">
                                            <a href="#">Florida</a>
                                        </div>
                                        <div class="text">20 Properties</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-6">
                                <div class="area-item wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="image">
                                        <img src="{{asset('assets/portal/images/image-box/area-8.jpg')}}" alt="">
                                    </div>
                                    <div>
                                        <div class="name">
                                            <a href="property-map-v1.html">Chicago</a>
                                        </div>
                                        <div class="text">20 Properties</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-6">
                                <div class="area-item wow fadeInUp" data-wow-delay="0.15s">
                                    <div class="image">
                                        <img src="{{asset('assets/portal/images/image-box/area-9.jpg')}}" alt="">
                                    </div>
                                    <div>
                                        <div class="name">
                                            <a href="#">Washington</a>
                                        </div>
                                        <div class="text">20 Properties</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /flat-area -->

                <!-- flat-news -->
                <section class="tf-section flat-news style-1">
                    <div class="cl-container">
                        <div class="row">
                            <div class="col-12">
                                <div class="heading-section text-center">
                                    <h2 class="wow fadeInUp">Recent Articles & News</h2>
                                    <div class="text wow fadeInUp">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="swiper-container slider-news slider-auto">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="wg-blog wow fadeInUp">
                                                <div class="image">
                                                    <img src="{{asset('assets/portal/images/blog/blog-grid-1.jpg')}}" alt="">
                                                </div>
                                                <div class="content">
                                                    <div class="sub-blog">
                                                        <div>Tips &amp; Tricks</div>
                                                        <div>April 26, 2024</div>
                                                    </div>
                                                    <div class="name">
                                                        <a href="blog-single.html">Chip and Joanna Gaines’ Latest Fixer-Upper Is Open for Visitors</a>
                                                    </div>
                                                    <a href="#" class="tf-button-no-bg">
                                                        Read More 
                                                        <i class="icon-arrow-right-add"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="wg-blog wow fadeInUp" data-wow-delay="0.1s">
                                                <div class="image">
                                                    <img src="{{asset('assets/portal/images/blog/blog-grid-2.jpg')}}" alt="">
                                                </div>
                                                <div class="content">
                                                    <div class="sub-blog">
                                                        <div>Tips &amp; Tricks</div>
                                                        <div>April 26, 2024</div>
                                                    </div>
                                                    <div class="name">
                                                        <a href="blog-single.html">Homebuyers Will Be So Thankful To Hear These </a>
                                                    </div>
                                                    <a href="#" class="tf-button-no-bg">
                                                        Read More 
                                                        <i class="icon-arrow-right-add"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="wg-blog wow fadeInUp" data-wow-delay="0.15s">
                                                <div class="image">
                                                    <img src="{{asset('assets/portal/images/blog/blog-grid-3.jpg')}}" alt="">
                                                </div>
                                                <div class="content">
                                                    <div class="sub-blog">
                                                        <div>Tips &amp; Tricks</div>
                                                        <div>April 26, 2024</div>
                                                    </div>
                                                    <div class="name">
                                                        <a href="blog-single.html">That’s Life! Frank Sinatra’s Former Los Angeles-Area </a>
                                                    </div>
                                                    <a href="#" class="tf-button-no-bg">
                                                        Read More 
                                                        <i class="icon-arrow-right-add"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="wg-blog wow fadeInUp" data-wow-delay="0.2s">
                                                <div class="image">
                                                    <img src="{{asset('assets/portal/images/blog/blog-grid-4.jpg')}}" alt="">
                                                </div>
                                                <div class="content">
                                                    <div class="sub-blog">
                                                        <div>Tips &amp; Tricks</div>
                                                        <div>April 26, 2024</div>
                                                    </div>
                                                    <div class="name">
                                                        <a href="blog-single.html">Affordability crisis buyers and renters turn to tiny living</a>
                                                    </div>
                                                    <a href="#" class="tf-button-no-bg">
                                                        Read More 
                                                        <i class="icon-arrow-right-add"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="wg-blog">
                                                <div class="image">
                                                    <img src="{{asset('assets/portal/images/blog/blog-grid-3.jpg')}}" alt="">
                                                </div>
                                                <div class="content">
                                                    <div class="sub-blog">
                                                        <div>Tips &amp; Tricks</div>
                                                        <div>April 26, 2024</div>
                                                    </div>
                                                    <div class="name">
                                                        <a href="blog-single.html">That’s Life! Frank Sinatra’s Former Los Angeles-Area </a>
                                                    </div>
                                                    <a href="#" class="tf-button-no-bg">
                                                        Read More 
                                                        <i class="icon-arrow-right-add"></i>
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
                <!-- /flat-news -->

                <!-- group-icon -->
                <section class="tf-section">
                    <div class="cl-container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="group-icon">
                                    <h3 class="wow fadeInUp">Looking for the new <br> home?</h3>
                                    <div class="text-content wow fadeInUp">10 new offers every day. 350 offers on site, trusted by <br> a community of thousands of users.</div>
                                    <a href="#" class="tf-button-primary style-blue wow fadeInUp">Get Started<i class="icon-arrow-right-add"></i></a>
                                    <div class="image wow fadeInUp"><img src="{{asset('assets/portal/images/image-box/img-1.svg')}}" alt=""></div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="group-icon style-1">
                                    <h3 class="wow fadeInUp">Want to sell your <br> home?</h3>
                                    <div class="text-content wow fadeInUp">10 new offers every day. 350 offers on site, trusted by <br> a community of thousands of users.</div>
                                    <a href="#" class="tf-button-primary style-blue wow fadeInUp">Get Started<i class="icon-arrow-right-add"></i></a>
                                    <div class="image wow fadeInUp"><img src="{{asset('assets/portal/images/image-box/img-2.svg')}}" alt=""></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
  <!-- /group-icon -->

@endsection