<header class="main-header fixed-header">
    <!-- Header Lower -->
    <div class="header-lower">
        <div class="row">
            <div class="col-lg-12">
                <div class="inner-container d-flex justify-content-between align-items-center">
                    <!-- Logo Box -->
                    <div class="logo-box">
                        <div class="logo"><a href="index-2.html"><img src="images/logo/logo-header.png" alt="logo"
                                    width="174" height="30"></a></div>
                    </div>
                    <div class="nav-outer">
                        <!-- Main Menu -->
                        <nav class="main-menu show navbar-expand-md">
                            <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li class="">
                                        <a href="{{ route('home') }}">Home</a>
                                    </li>
                                    <li class="">
                                        <a href="{{ route('listings') }}">Listing</a>                         
                                    </li>
                                    <li class="">
                                        <a href="{{ route('about') }}">About Us</a>                         
                                    </li>
                                    <li class="">
                                        <a href="{{ route('contact') }}">Contact</a>                         
                                    </li>
                                    <li class="">
                                        <a href="{{ route('property') }}">Properties</a>
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
                                    <li class="">
                                        <a href="{{ route('blog') }}">Blog</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                        <!-- Main Menu End-->
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
