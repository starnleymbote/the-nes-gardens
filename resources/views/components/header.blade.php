<header class="main-header fixed-header">
    <!-- Header Lower -->
    <div class="header-lower">
        <div class="row">
            <div class="col-lg-12">
                <div class="inner-container d-flex justify-content-between align-items-center">
                    <!-- Logo Box -->
                    <div class="logo-box">
                        <div class="logo"><a href="index-2.html"><img src="images/logo/new_logo.png" alt="logo"
                                    width="174" height="30"></a></div>
                    </div>
                    <div class="nav-outer">
                        <!-- Main Menu -->
                        <nav class="main-menu show navbar-expand-md">
                            <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li class=""><a href="{{ route('home') }}">Home</a>
                                        {{-- <ul>
                                            <li class="current"><a href="index-2.html">Homepage 01</a></li>
                                            <li><a href="home-02.html">Homepage 02</a></li>
                                            <li><a href="home-03.html">Homepage 03</a></li>
                                            <li><a href="home-04.html">Homepage 04</a></li>
                                            <li><a href="home-05.html">Homepage 05</a></li>
                                            <li><a href="home-06.html">Homepage 06</a></li>

                                        </ul> --}}
                                    </li>
                                    <li class=""><a href="{{ route('listings') }}">Listing</a>
                                        {{-- <ul>
                                            <li><a href="property-halfmap-grid.html">Property Half Map
                                                    Grid</a>

                                            </li>
                                            <li><a href="property-halfmap-list.html">Property Half Map
                                                    List</a></li>
                                            <li><a href="topmap-grid.html">Find Topmap Grid</a></li>
                                            <li><a href="topmap-list.html">Find Topmap List</a></li>
                                            <li><a href="sidebar-grid.html">Find Sidebar Grid</a></li>
                                            <li><a href="sidebar-list.html">Find Sidebar List</a></li>

                                        </ul> --}}
                                    </li>
                                    <li class=""><a href="{{ route('property') }}">Properties</a>
                                        {{-- <ul>
                                            <li><a href="property-details-v1.html">Property Details 1</a>
                                            </li>
                                            <li><a href="property-details-v2.html">Property Details 2</a>
                                            </li>
                                            <li><a href="property-details-v3.html">Property Details 3</a>
                                            </li>
                                            <li><a href="property-details-v4.html">Property Details 4</a>
                                            </li>
                                        </ul> --}}
                                    </li>
                                    <li class="dropdown2"><a href="#">Pages</a>
                                        <ul>
                                            <li><a href="{{ route('about') }}">About Us</a></li>
                                            <li><a href="{{ route('services') }}">Our Services</a></li>
                                            <li><a href="{{ route('pricing') }}">Pricing</a></li>
                                            <li><a href="{{ route('contact') }}">Contact Us</a></li>
                                            <li><a href="{{ route('faq') }}">FAQs</a></li>
                                            <li><a href="{{ route('policy') }}">Privacy Policy</a></li>
                                        </ul>
                                    </li>
                                    <li class=""><a href="{{ route('blog') }}">Blog</a>
                                        {{-- <ul>
                                            <li><a href="blog.html">Blog Default</a></li>
                                            <li><a href="blog-grid.html">Blog Grid</a></li>
                                            <li><a href="blog-detail.html">Blog Post Details</a></li>
                                        </ul> --}}
                                    </li>

                                    <li class="dropdown2"><a href="#">Dashboard</a>
                                        <ul>
                                            <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                                            <li><a href="my-favorites.html">My Properties</a></li>
                                            <li><a href="my-invoices.html">My Invoices</a></li>
                                            <li><a href="my-favorites.html">My Favorites</a></li>
                                            <li><a href="reviews.html">Reviews</a></li>
                                            <li><a href="my-profile.html">My Profile</a></li>
                                            <li><a href="add-property.html">Add Property</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                        <!-- Main Menu End-->
                    </div>
                    <div class="header-account">
                        <div class="register">
                            <ul class="d-flex">
                                <li><a href="#modalLogin" data-bs-toggle="modal">Login</a></li>
                                <li>/</li>
                                <li><a href="#modalRegister" data-bs-toggle="modal">Register</a></li>
                            </ul>
                        </div>
                        <div class="flat-bt-top">
                            <a class="tf-btn primary" href="{{ route('add-property') }}">Submit Property</a>
                        </div>
                    </div>

                    <div class="mobile-nav-toggler mobile-button"><span></span></div>

                </div>
            </div>
        </div>
    </div>
    <!-- End Header Lower -->

    <!-- Mobile Menu  -->
    <div class="close-btn"><span class="icon flaticon-cancel-1"></span></div>
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <nav class="menu-box">
            <div class="nav-logo"><a href="index-2.html"><img src="images/logo/logo%402x.png" alt="nav-logo"
                        width="174" height="44"></a></div>
            <div class="bottom-canvas">
                <div class="login-box flex align-items-center">
                    <a href="#modalLogin" data-bs-toggle="modal">Login</a>
                    <span>/</span>
                    <a href="#modalRegister" data-bs-toggle="modal">Register</a>
                </div>
                <div class="menu-outer"></div>
                <div class="button-mobi-sell">
                    <a class="tf-btn primary" href="add-property.html">Submit Property</a>
                </div>
                <div class="mobi-icon-box">
                    <div class="box d-flex align-items-center">
                        <span class="icon icon-phone2"></span>
                        <div>1-333-345-6868</div>
                    </div>
                    <div class="box d-flex align-items-center">
                        <span class="icon icon-mail"></span>
                        <div>themesflat@gmail.com</div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <!-- End Mobile Menu -->

</header>
