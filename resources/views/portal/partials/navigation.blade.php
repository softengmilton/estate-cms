            <!-- header -->
            <header id="header_main" class="header header-fixed style-no-bg style-absolute type-home4">
                <div class="header-inner"> 
                    <div class="header-inner-wrap">
                        <div id="site-logo">
                            <a href="index.html" rel="home">
                                {{-- <img id="logo-header" class="d-block w-25 h-25" src="{{asset('assets/portal/images/logo/logo.png')}}" alt=""> --}}
                                <h4 class="text-secondary">Express Home</h4>
                            </a>
                        </div>
                        <nav class="main-menu style-blue">
                            @php
                            $navigation = config('site.navigation'); // Load the navigation configuration
                            @endphp
                            
                            <ul class="navigation">
                                @foreach ($navigation as $navItem)
                                    @if (isset($navItem['children']) && is_array($navItem['children']))
                                        <li class="has-children">
                                            <a href="javascript:void(0);">{{ $navItem['name'] }}</a>
                                            <ul>
                                                @foreach ($navItem['children'] as $child)
                                                    <li>
                                                        <a href="{{ url($child['url']) }}">{{ $child['name'] }}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </li>
                                    @else
                                        <li>
                                            <a href="{{ url($navItem['url']) }}">{{ $navItem['name'] }}</a>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                            
                        </nav>
                        <div class="header-right">
                            <div class="header-call style-blue">
                                <div class="icon">
                                    <i class="flaticon-phone"></i>
                                </div>
                                <div class="number">800-555-6789</div>
                            </div>
                            <div data-bs-toggle="modal" data-bs-target="#modallogin" class="header-user style-blue">
                                <div class="icon">
                                    <i class="flaticon-user"></i>
                                </div>
                            </div>
                            <div class="header-btn">
                                <a href="dashboard-add-properties.html" class="tf-button-default style-blue active">Add Listing</a>
                            </div>
                        </div>
                        <a class="mobile-nav-toggler mobile-button" href="#menu"></a>
                    </div>
                </div>
                <nav id="menu">
                    <a class="close" aria-label="Close menu" href="#mm-22">
                        <i class="icon-close"></i>
                    </a>
                    <ul>
                        <li class="current">
                            <span>Home</span>
                            <ul>
                                <li><a href="index.html">Home Page 01</a></li>
                                <li><a href="home-02.html">Home Page 02</a></li>
                                <li><a href="home-03.html">Home Page 03</a></li>
                                <li class="current"><a href="home-04.html">Home Page 04</a></li>
                                <li><a href="home-05.html">Home Page 05</a></li>
                                <li><a href="home-06.html">Home Page 06</a></li>
                                <li><a href="home-07.html">Home Page 07</a></li>
                                <li><a href="home-08.html">Home Page 08</a></li>
                                <li><a href="home-09.html">Home Page 09</a></li>
                                <li><a href="home-10.html">Home Page 10</a></li>
                            </ul>
                        </li>
                        <li>
                            <span>Property</span>
                            <ul>
                                <li>
                                    <span>List view</span>
                                    <ul>
                                        <li>
                                            <a href="property-list-v1.html">Property List 01</a>
                                        </li>
                                        <li>
                                            <a href="property-list-v2.html">Property List 02</a>
                                        </li>
                                        <li>
                                            <a href="property-list-v3.html">Property List 03</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <span>Grid view</span>
                                    <ul>
                                        <li>
                                            <a href="property-grid-v1.html">Property Grid 01</a>
                                        </li>
                                        <li>
                                            <a href="property-grid-v2.html">Property Grid 02</a>
                                        </li>
                                        <li>
                                            <a href="property-grid-v3.html">Property Grid 03</a>
                                        </li>
                                        <li>
                                            <a href="property-grid-v4.html">Property Grid 04</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <span>Single view</span>
                                    <ul>
                                        <li>
                                            <a href="property-single-v1.html">Property Single 01</a>
                                        </li>
                                        <li>
                                            <a href="property-single-v2.html">Property Single 02</a>
                                        </li>
                                        <li>
                                            <a href="property-single-v3.html">Property Single 03</a>
                                        </li>
                                        <li>
                                            <a href="property-single-v4.html">Property Single 04</a>
                                        </li>
                                        <li>
                                            <a href="property-single-v5.html">Property Single 05</a>
                                        </li>
                                        <li>
                                            <a href="property-single-v6.html">Property Single 06</a>
                                        </li>
                                        <li>
                                            <a href="property-single-v7.html">Property Single 07</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <span>Map Style</span>
                                    <ul>
                                        <li>
                                            <a href="property-map-v1.html">Property Map 01</a>
                                        </li>
                                        <li>
                                            <a href="property-map-v2.html">Property Map 02</a>
                                        </li>
                                        <li>
                                            <a href="property-map-v3.html">Property Map 03</a>
                                        </li>
                                        <li>
                                            <a href="property-map-v4.html">Property Map 04</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <span>Realtor</span>
                            <ul>
                                <li><a href="agent-list.html">Agent List</a></li>
                                <li><a href="agent-single.html">Agent Single</a></li>
                                <li><a href="agency-list.html">Agency List</a></li>
                                <li><a href="agency-single.html">Agency Single</a></li>
                            </ul>
                        </li>
                        <li>
                            <span>Pages</span>
                            <ul>
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="compare.html">Compare</a></li>
                                <li><a href="pricing.html">Pricing Packages</a></li>
                                <li><a href="faq.html">FAQ Page</a></li>
                                <li><a href="404.html">404 Page</a></li>
                                <li><a href="ui-elements.html">UI Elements</a></li>
                                <li><a href="dashboard.html">Dashboard</a></li>
                            </ul>
                        </li>
                        <li>
                            <span>Shop</span>
                            <ul>
                                <li><a href="shop-list.html">Shop List</a></li>
                                <li><a href="shop-single.html">Shop Single</a></li>
                                <li><a href="shop-cart.html">Shop Cart</a></li>
                                <li><a href="shop-checkout.html">Shop Checkout</a></li>
                                <li><a href="shop-order.html">Shop Order</a></li>
                            </ul>
                        </li>
                        <li>
                            <span>Blog</span>
                            <ul>
                                <li><a href="blog-list-v1.html">Blog List 01</a></li>
                                <li><a href="blog-list-v2.html">Blog List 02</a></li>
                                <li><a href="blog-list-v3.html">Blog List 03</a></li>
                                <li><a href="blog-single.html">Blog Single</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </nav>
            </header>
            <!-- /header -->