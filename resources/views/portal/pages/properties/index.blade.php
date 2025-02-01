@extends('portal.layout.app')
@section('content')
<div class="space-200"></div>

<!-- flat-title -->
<div class="flat-title page-property-list-3">
    <div class="cl-container">
        <div class="row">
            <div class="col-12">
                <div class="content">
                    <h2 class="wow fadeInUp">Real Estate & Homes For Sale</h2>
                    <ul class="breadcrumbs wow fadeInUp">
                        <li><a href="index.html">Home</a></li><li>/</li><li>Property List</li>
                    </ul>
                    <div class="form-filter wow fadeInUp">
                        <form class="form-search-home5">
                            <div class="list">
                                <div class="group-form form-search-content">
                                    <div class="form-style-has-title">
                                        <div class="title">Keyword</div>
                                        <div class="relative">
                                            <fieldset class="name">
                                                <input type="text" placeholder="Enter Keyyword" class="show-search style-default" name="name" tabindex="2" value="" aria-required="true" required="">
                                            </fieldset>
                                            <div class="style-absolute-right">
                                                <div class="style-icon-default"><i class="flaticon-magnifiying-glass"></i></div>
                                            </div>
                                            <div class="box-content-search style-1">
                                                <ul>
                                                    <li>
                                                        <div class="item1">
                                                            <div>
                                                                <div class="image">
                                                                    <img src="{{asset('assets/portal/images/author/avatar-8.png')}}" alt="">
                                                                </div>
                                                                <p>Archer House</p>
                                                            </div>
                                                            <div class="text">For Sale</div>
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
                                                        <div class="item1">
                                                            <div>
                                                                <div class="image">
                                                                    <img src="{{asset('assets/portal/images/author/avatar-9.png')}}" alt="">
                                                                </div>
                                                                <p>Villa One Hyde Park</p>
                                                            </div>
                                                            <div class="text">For Rent</div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="item1">
                                                            <div>
                                                                <div class="image">
                                                                    <img src="{{asset('assets/portal/images/author/avatar-10.png')}}" alt="">
                                                                </div>
                                                                <p>House on the beverly hills</p>
                                                            </div>
                                                            <div class="text">For Sale</div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="divider-1"></div>
                                <div class="group-form">
                                    <div class="form-style-has-title">
                                        <div class="title">Status</div>
                                        <div class="nice-select" tabindex="0">
                                            <span class="current">All Status</span>
                                            <ul class="list style-radio">    
                                                <li data-value="For Sale" class="option selected">For Sale</li>
                                                <li data-value="For Ren" class="option">For Ren</li>
                                                <li data-value="Sold" class="option">Sold</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="divider-1"></div>
                                <div class="group-form">
                                    <div class="form-style-has-title">
                                        <div class="title">Type</div>
                                        <div class="nice-select" tabindex="0">
                                            <span class="current">All Type</span>
                                            <ul class="list">    
                                                <li data-value class="option selected">All Type</li>
                                                <li data-value="Office" class="option">Office</li>
                                                <li data-value="Villa" class="option">Villa</li>
                                                <li data-value="Shop" class="option">Shop</li>
                                                <li data-value="Single Family" class="option">Single Family</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex gap10">
                                <div class="group-form">
                                    <div class="wg-filter">
                                        <div class="tf-button-filter btn-filter"><i class="flaticon-filter"></i>Filter</div>
                                        <div class="open-filter filter-no-content" id="a1">
                                            <div>
                                                <div class="grid-3-cols mb-20">
                                                    <div class="nice-select" tabindex="0">
                                                        <span class="current">City</span>
                                                        <ul class="list">    
                                                            <li data-value class="option selected">City</li>
                                                            <li data-value="New York" class="option">New York</li>
                                                            <li data-value="Paris" class="option">Paris</li>
                                                            <li data-value="Ha Noi" class="option">Ha Noi</li>
                                                        </ul>
                                                    </div>
                                                    <div class="nice-select" tabindex="0">
                                                        <span class="current">Bedrooms</span>
                                                        <ul class="list">    
                                                            <li data-value class="option selected">Bedrooms</li>
                                                            <li data-value="1 Bed" class="option">1 Bed</li>
                                                            <li data-value="2 Bed" class="option">2 Bed</li>
                                                        </ul>
                                                    </div>
                                                    <div class="nice-select" tabindex="0">
                                                        <span class="current">Bathrooms</span>
                                                        <ul class="list">    
                                                            <li data-value class="option selected">Bathrooms</li>
                                                            <li data-value="1 Bath" class="option">1 Bath</li>
                                                            <li data-value="2 Bath" class="option">2 Bath</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="grid-4-cols">
                                                    <fieldset class="name">
                                                        <input type="text" placeholder="Min. Area" class="" name="name" tabindex="2" value="" aria-required="true" required="">
                                                    </fieldset>
                                                    <fieldset class="name">
                                                        <input type="text" placeholder="Max. Area" class="" name="name" tabindex="2" value="" aria-required="true" required="">
                                                    </fieldset>
                                                    <div class="nice-select" tabindex="0">
                                                        <span class="current">Min. Price</span>
                                                        <ul class="list">    
                                                            <li data-value class="option selected">Min. Price</li>
                                                            <li data-value="100 $" class="option">100 $</li>
                                                            <li data-value="150 $" class="option">150 $</li>                                                     
                                                        </ul>
                                                    </div>
                                                    <div class="nice-select" tabindex="0">
                                                        <span class="current">Max. Price</span>
                                                        <ul class="list">    
                                                            <li data-value class="option selected">Max. Price</li>
                                                            <li data-value="1000 $" class="option">1000 $</li>                                                    
                                                            <li data-value="1500 $" class="option">1500 $</li>                                                        
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="title">Amenities</div>  
                                                <ul class="grid-checkbox">
                                                    <li class="checkbox-item">
                                                        <label>
                                                            <p>Air Conditioning</p>
                                                            <input type="checkbox">
                                                            <span class="btn-checkbox"></span>
                                                        </label>
                                                    </li>
                                                    <li class="checkbox-item">
                                                        <label>
                                                            <p>Barbeque</p>
                                                            <input type="checkbox" checked>
                                                            <span class="btn-checkbox"></span>
                                                        </label>
                                                    </li>
                                                    <li class="checkbox-item">
                                                        <label>
                                                            <p>Dryer</p>
                                                            <input type="checkbox">
                                                            <span class="btn-checkbox"></span>
                                                        </label>
                                                    </li>
                                                    <li class="checkbox-item">
                                                        <label>
                                                            <p>Gym</p>
                                                            <input type="checkbox">
                                                            <span class="btn-checkbox"></span>
                                                        </label>
                                                    </li>
                                                    <li class="checkbox-item">
                                                        <label>
                                                            <p>Lawn</p>
                                                            <input type="checkbox">
                                                            <span class="btn-checkbox"></span>
                                                        </label>
                                                    </li>
                                                    <li class="checkbox-item">
                                                        <label>
                                                            <p>Microwave</p>
                                                            <input type="checkbox">
                                                            <span class="btn-checkbox"></span>
                                                        </label>
                                                    </li>
                                                    <li class="checkbox-item">
                                                        <label>
                                                            <p>Refrigerator</p>
                                                            <input type="checkbox">
                                                            <span class="btn-checkbox"></span>
                                                        </label>
                                                    </li>
                                                    <li class="checkbox-item">
                                                        <label>
                                                            <p>Sauna</p>
                                                            <input type="checkbox">
                                                            <span class="btn-checkbox"></span>
                                                        </label>
                                                    </li>
                                                    <li class="checkbox-item">
                                                        <label>
                                                            <p>Swimming Pool</p>
                                                            <input type="checkbox">
                                                            <span class="btn-checkbox"></span>
                                                        </label>
                                                    </li>
                                                    <li class="checkbox-item">
                                                        <label>
                                                            <p>TV Cable</p>
                                                            <input type="checkbox">
                                                            <span class="btn-checkbox"></span>
                                                        </label>
                                                    </li>
                                                    <li class="checkbox-item">
                                                        <label>
                                                            <p>Washer</p>
                                                            <input type="checkbox">
                                                            <span class="btn-checkbox"></span>
                                                        </label>
                                                    </li>
                                                    <li class="checkbox-item">
                                                        <label>
                                                            <p>WiFi</p>
                                                            <input type="checkbox">
                                                            <span class="btn-checkbox"></span>
                                                        </label>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="group-form">
                                    <div class="button-submit">
                                        <button class="" type="submit">Search</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /flat-title -->

<!-- property-grid -->
<div class="property-list-wrap-v3">
    <div class="cl-container">
        <div class="row">
            <div class="col-lg-8">
                <div class="top">
                    <div class="sub">
                        <p class="wow fadeInUp">9,998 results</p>
                        <div class="sort-wrap wow fadeInUp" data-wow-delay="0.1s">
                            <p>Sort by</p>
                            <div class="nice-select default" tabindex="0">
                                <span class="current">Newest listings</span>
                                <ul class="list">    
                                    <li data-value class="option selected">Newest</li>
                                    <li data-value="For Ren" class="option">Oldest</li>
                                    <li data-value="Sold" class="option">3 days</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row list">
                    <div class="col-xl-6">
                        <div class="box-dream has-border wow fadeInUp">
                            <div class="image">
                                <div class="list-tags">
                                    <a href="#" class="tags-item for-sell">FOR RENT</a>
                                    <a href="#" class="tags-item featured">FEATURED</a>
                                </div>
                                <div class="button-heart"><i class="flaticon-heart-1"></i></div>
                                <div class="swiper-container slider-box-dream arrow-style-1 pagination-style-1">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="">
                                                <img class="" src="{{asset('assets/portal/images/house/property-listing-1.jpg')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="">
                                                <img class="" src="{{asset('assets/portal/images/house/property-listing-2.jpg')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="">
                                                <img class="" src="{{asset('assets/portal/images/house/property-listing-3.jpg')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="">
                                                <img class="" src="{{asset('assets/portal/images/house/property-listing-4.jpg')}}" alt="">
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
                                        <a href="{{route('property.details')}}">Archer House</a>
                                    </div>
                                    <div class="price">$815,000</div>
                                </div>
                                <div class="location">
                                    <div class="icon">
                                        <i class="flaticon-location"></i>
                                    </div>
                                    <p>148-37 88th Ave, Jamaica, NY 11435</p>
                                </div>
                                <div class="icon-box">
                                    <div class="item">
                                        <i class="flaticon-hotel"></i>
                                        <p>4 Beds</p>
                                    </div>
                                    <div class="item">
                                        <i class="flaticon-bath-tub"></i>
                                        <p>3 Baths</p>
                                    </div>
                                    <div class="item">
                                        <i class="flaticon-minus-front"></i>
                                        <p>2660 Sqft</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="box-dream has-border wow fadeInUp" data-wow-delay="0.1s">
                            <div class="image">
                                <div class="list-tags">
                                    <a href="#" class="tags-item for-sell">FOR SELL</a>
                                </div>
                                <div class="button-heart"><i class="flaticon-heart-1"></i></div>
                                <div class="swiper-container slider-box-dream arrow-style-1 pagination-style-1">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="">
                                                <img class="" src="{{asset('assets/portal/images/house/property-listing-2.jpg')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="">
                                                <img class="" src="{{asset('assets/portal/images/house/property-listing-2.jpg')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="">
                                                <img class="" src="{{asset('assets/portal/images/house/property-listing-3.jpg')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="">
                                                <img class="" src="{{asset('assets/portal/images/house/property-listing-4.jpg')}}" alt="">
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
                                        <a href="{{route('property.details')}}">Villa One Hyde Park</a>
                                    </div>
                                    <div class="price">$815,000</div>
                                </div>
                                <div class="location">
                                    <div class="icon">
                                        <i class="flaticon-location"></i>
                                    </div>
                                    <p>148-37 88th Ave, Jamaica, NY 11435</p>
                                </div>
                                <div class="icon-box">
                                    <div class="item">
                                        <i class="flaticon-hotel"></i>
                                        <p>4 Beds</p>
                                    </div>
                                    <div class="item">
                                        <i class="flaticon-bath-tub"></i>
                                        <p>3 Baths</p>
                                    </div>
                                    <div class="item">
                                        <i class="flaticon-minus-front"></i>
                                        <p>2660 Sqft</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="box-dream has-border wow fadeInUp">
                            <div class="image">
                                <div class="list-tags">
                                    <a href="#" class="tags-item for-sell">FOR SELL</a>
                                </div>
                                <div class="button-heart"><i class="flaticon-heart-1"></i></div>
                                <div class="swiper-container slider-box-dream arrow-style-1 pagination-style-1">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="">
                                                <img class="" src="{{asset('assets/portal/images/house/property-listing-3.jpg')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="">
                                                <img class="" src="{{asset('assets/portal/images/house/property-listing-2.jpg')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="">
                                                <img class="" src="{{asset('assets/portal/images/house/property-listing-3.jpg')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="">
                                                <img class="" src="{{asset('assets/portal/images/house/property-listing-4.jpg')}}" alt="">
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
                                        <a href="{{route('property.details')}}">Home Pitt Street</a>
                                    </div>
                                    <div class="price">$815,000</div>
                                </div>
                                <div class="location">
                                    <div class="icon">
                                        <i class="flaticon-location"></i>
                                    </div>
                                    <p>148-37 88th Ave, Jamaica, NY 11435</p>
                                </div>
                                <div class="icon-box">
                                    <div class="item">
                                        <i class="flaticon-hotel"></i>
                                        <p>4 Beds</p>
                                    </div>
                                    <div class="item">
                                        <i class="flaticon-bath-tub"></i>
                                        <p>3 Baths</p>
                                    </div>
                                    <div class="item">
                                        <i class="flaticon-minus-front"></i>
                                        <p>2660 Sqft</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="box-dream has-border wow fadeInUp" data-wow-delay="0.1s">
                            <div class="image">
                                <div class="list-tags">
                                    <a href="#" class="tags-item for-sell">FOR SELL</a>
                                </div>
                                <div class="button-heart"><i class="flaticon-heart-1"></i></div>
                                <div class="swiper-container slider-box-dream arrow-style-1 pagination-style-1">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="">
                                                <img class="" src="{{asset('assets/portal/images/house/property-listing-4.jpg')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="">
                                                <img class="" src="{{asset('assets/portal/images/house/property-listing-2.jpg')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="">
                                                <img class="" src="{{asset('assets/portal/images/house/property-listing-3.jpg')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="">
                                                <img class="" src="{{asset('assets/portal/images/house/property-listing-4.jpg')}}" alt="">
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
                                        <a href="{{route('property.details')}}">Relaxing Villa</a>
                                    </div>
                                    <div class="price">$815,000</div>
                                </div>
                                <div class="location">
                                    <div class="icon">
                                        <i class="flaticon-location"></i>
                                    </div>
                                    <p>148-37 88th Ave, Jamaica, NY 11435</p>
                                </div>
                                <div class="icon-box">
                                    <div class="item">
                                        <i class="flaticon-hotel"></i>
                                        <p>4 Beds</p>
                                    </div>
                                    <div class="item">
                                        <i class="flaticon-bath-tub"></i>
                                        <p>3 Baths</p>
                                    </div>
                                    <div class="item">
                                        <i class="flaticon-minus-front"></i>
                                        <p>2660 Sqft</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="box-dream has-border wow fadeInUp">
                            <div class="image">
                                <div class="list-tags">
                                    <a href="#" class="tags-item for-sell">FOR SELL</a>
                                </div>
                                <div class="button-heart"><i class="flaticon-heart-1"></i></div>
                                <div class="swiper-container slider-box-dream arrow-style-1 pagination-style-1">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="">
                                                <img class="" src="{{asset('assets/portal/images/house/property-listing-5.jpg')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="">
                                                <img class="" src="{{asset('assets/portal/images/house/property-listing-2.jpg')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="">
                                                <img class="" src="{{asset('assets/portal/images/house/property-listing-3.jpg')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="">
                                                <img class="" src="{{asset('assets/portal/images/house/property-listing-4.jpg')}}" alt="">
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
                                        <a href="{{route('property.details')}}">Luxury Mansion</a>
                                    </div>
                                    <div class="price">$815,000</div>
                                </div>
                                <div class="location">
                                    <div class="icon">
                                        <i class="flaticon-location"></i>
                                    </div>
                                    <p>148-37 88th Ave, Jamaica, NY 11435</p>
                                </div>
                                <div class="icon-box">
                                    <div class="item">
                                        <i class="flaticon-hotel"></i>
                                        <p>4 Beds</p>
                                    </div>
                                    <div class="item">
                                        <i class="flaticon-bath-tub"></i>
                                        <p>3 Baths</p>
                                    </div>
                                    <div class="item">
                                        <i class="flaticon-minus-front"></i>
                                        <p>2660 Sqft</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="box-dream has-border wow fadeInUp" data-wow-delay="0.1s">
                            <div class="image">
                                <div class="list-tags">
                                    <a href="#" class="tags-item for-sell">FOR SELL</a>
                                </div>
                                <div class="button-heart"><i class="flaticon-heart-1"></i></div>
                                <div class="swiper-container slider-box-dream arrow-style-1 pagination-style-1">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="">
                                                <img class="" src="{{asset('assets/portal/images/house/property-listing-6.jpg')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="">
                                                <img class="" src="{{asset('assets/portal/images/house/property-listing-2.jpg')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="">
                                                <img class="" src="{{asset('assets/portal/images/house/property-listing-3.jpg')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="">
                                                <img class="" src="{{asset('assets/portal/images/house/property-listing-4.jpg')}}" alt="">
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
                                        <a href="{{route('property.details')}}">Home in Merrick Way</a>
                                    </div>
                                    <div class="price">$815,000</div>
                                </div>
                                <div class="location">
                                    <div class="icon">
                                        <i class="flaticon-location"></i>
                                    </div>
                                    <p>148-37 88th Ave, Jamaica, NY 11435</p>
                                </div>
                                <div class="icon-box">
                                    <div class="item">
                                        <i class="flaticon-hotel"></i>
                                        <p>4 Beds</p>
                                    </div>
                                    <div class="item">
                                        <i class="flaticon-bath-tub"></i>
                                        <p>3 Baths</p>
                                    </div>
                                    <div class="item">
                                        <i class="flaticon-minus-front"></i>
                                        <p>2660 Sqft</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="box-dream has-border wow fadeInUp">
                            <div class="image">
                                <div class="list-tags">
                                    <a href="#" class="tags-item for-sell">FOR SELL</a>
                                </div>
                                <div class="button-heart"><i class="flaticon-heart-1"></i></div>
                                <div class="swiper-container slider-box-dream arrow-style-1 pagination-style-1">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="">
                                                <img class="" src="{{asset('assets/portal/images/house/property-listing-7.jpg')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="">
                                                <img class="" src="{{asset('assets/portal/images/house/property-listing-2.jpg')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="">
                                                <img class="" src="{{asset('assets/portal/images/house/property-listing-3.jpg')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="">
                                                <img class="" src="{{asset('assets/portal/images/house/property-listing-4.jpg')}}" alt="">
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
                                        <a href="{{route('property.details')}}">Villa in Coral Gables</a>
                                    </div>
                                    <div class="price">$815,000</div>
                                </div>
                                <div class="location">
                                    <div class="icon">
                                        <i class="flaticon-location"></i>
                                    </div>
                                    <p>148-37 88th Ave, Jamaica, NY 11435</p>
                                </div>
                                <div class="icon-box">
                                    <div class="item">
                                        <i class="flaticon-hotel"></i>
                                        <p>4 Beds</p>
                                    </div>
                                    <div class="item">
                                        <i class="flaticon-bath-tub"></i>
                                        <p>3 Baths</p>
                                    </div>
                                    <div class="item">
                                        <i class="flaticon-minus-front"></i>
                                        <p>2660 Sqft</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="box-dream has-border wow fadeInUp" data-wow-delay="0.1s">
                            <div class="image">
                                <div class="list-tags">
                                    <a href="#" class="tags-item for-sell">FOR SELL</a>
                                </div>
                                <div class="button-heart"><i class="flaticon-heart-1"></i></div>
                                <div class="swiper-container slider-box-dream arrow-style-1 pagination-style-1">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="">
                                                <img class="" src="{{asset('assets/portal/images/house/property-listing-8.jpg')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="">
                                                <img class="" src="{{asset('assets/portal/images/house/property-listing-2.jpg')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="">
                                                <img class="" src="{{asset('assets/portal/images/house/property-listing-3.jpg')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="">
                                                <img class="" src="{{asset('assets/portal/images/house/property-listing-4.jpg')}}" alt="">
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
                                        <a href="{{route('property.details')}}">Modern House in Greenville</a>
                                    </div>
                                    <div class="price">$815,000</div>
                                </div>
                                <div class="location">
                                    <div class="icon">
                                        <i class="flaticon-location"></i>
                                    </div>
                                    <p>148-37 88th Ave, Jamaica, NY 11435</p>
                                </div>
                                <div class="icon-box">
                                    <div class="item">
                                        <i class="flaticon-hotel"></i>
                                        <p>4 Beds</p>
                                    </div>
                                    <div class="item">
                                        <i class="flaticon-bath-tub"></i>
                                        <p>3 Baths</p>
                                    </div>
                                    <div class="item">
                                        <i class="flaticon-minus-front"></i>
                                        <p>2660 Sqft</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <ul class="wg-pagination justify-center wow fadeInUp mb-5">
                    <li>
                        <a href="#"><i class="icon-keyboard_arrow_left"></i></a>
                    </li>
                    <li>
                        <a href="#">1</a>
                    </li>
                    <li class="active">
                        <a href="#">2</a>
                    </li>
                    <li>
                        <a href="#">3</a>
                    </li>
                    <li>
                        <a href="#">4</a>
                    </li>
                    <li>
                        <a href="#">...</a>
                    </li>
                    <li>
                        <a href="#">20</a>
                    </li>
                    <li>
                        <a href="#"><i class="icon-keyboard_arrow_right"></i></a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-4">
                <div class="sidebar">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5243.65626084817!2d-0.18055453125493498!3d51.516585113232004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48761aad72f39303%3A0x74926f3ec36c2314!2sPaddington!5e1!3m2!1sen!2sbd!4v1738342803649!5m2!1sen!2sbd"  style="border:0; height:75vh;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /property-grid -->

@endsection