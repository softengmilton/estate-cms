<!-- Header -->
<header id="header_main" class="header header-fixed style-no-bg style-absolute type-home4">
    <div class="header-inner">
        <div class="header-inner-wrap">
            <!-- Logo -->
            <div id="site-logo">
                <a href="index.html" rel="home">
                    <h4 class="text-secondary">Express Home</h4>
                </a>
            </div>

            <!-- Desktop Navigation -->
            <nav class="main-menu style-blue d-none d-lg-block">
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

            <!-- Header Right Section -->
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

            <!-- Mobile Toggle Button -->
            <button class="navbar-toggler d-block d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#mobileNav" aria-controls="mobileNav" aria-expanded="false" aria-label="Toggle navigation">
                <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="30" height="4" rx="2" fill="#333"/>
                    <rect y="10" width="30" height="4" rx="2" fill="#333"/>
                    <rect y="20" width="30" height="4" rx="2" fill="#333"/>
                </svg>
            </button>
        </div>
    </div>

    <!-- Mobile Navigation Menu -->
    <div class="collapse navbar-collapse mobile-nav-overlay" id="mobileNav">
        <div class="mobile-nav-header">
            <h4 class="text-secondary">Express Home</h4>
            <button class="close-btn" type="button" data-bs-toggle="collapse" data-bs-target="#mobileNav" aria-controls="mobileNav" aria-expanded="false" aria-label="Close navigation">
                <i class="icon-close"></i>
            </button>
        </div>
        <ul class="navbar-nav">
            @foreach ($navigation as $navItem)
                <li class="nav-item">
                    <a class="nav-link" href="{{ url($navItem['url']) }}">{{ $navItem['name'] }}</a>
                </li>
            @endforeach
        </ul>
    </div>
</header>
<!-- /Header -->

<style>
    /* Mobile Navigation Overlay */
.mobile-nav-overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 80%;
    height: 100%;
    background-color: rgba(255, 255, 255, 0.98);
    z-index: 1000;
    overflow-y: auto;
    padding: 20px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    display: none; /* Hidden by default, shown when toggled */
}

.mobile-nav-overlay.collapse.show {
    display: block; /* Show when toggled */
}

/* Mobile Nav Header */
.mobile-nav-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 20px;
}

.mobile-nav-header .close-btn {
    background: none;
    border: none;
    font-size: 24px;
    cursor: pointer;
    color: #333;
}

/* Mobile Nav Links */
.mobile-nav-overlay .navbar-nav {
    list-style: none;
    padding: 0;
    margin: 0;
}

.mobile-nav-overlay .nav-item {
    margin-bottom: 15px;
}

.mobile-nav-overlay .nav-link {
    font-size: 18px;
    color: #333;
    text-decoration: none;
    transition: color 0.3s ease;
}

.mobile-nav-overlay .nav-link:hover {
    color: #007bff;
}
</style>