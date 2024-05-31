<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">


<!-- Mirrored from themesflat.co/html/homzen/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 May 2024 06:20:09 GMT -->

<head>
    <meta charset="utf-8">
    <title>Homzen - Real Estate HTML Template</title>

    <meta name="author" content="themesflat.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- font -->
    <link rel="stylesheet" href="fonts/fonts.css">
    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('/fonts/font-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/animate.css') }}">
    <link rel="stylesheet"type="text/css" href="{{ 'css/styles.css' }}" />

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="images/logo/new_logo.png">
    <link rel="apple-touch-icon-precomposed" href="images/logo/new_logo.png">

</head>

<body class="body counter-scroll">

    <div class="preload preload-container">
        <div class="boxes ">
            <div class="box">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
            <div class="box">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
            <div class="box">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
            <div class="box">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>

    <!-- /preload -->

    <div id="wrapper">
        <div id="pagee" class="clearfix">

            <!-- Main Header -->
            <header class="main-header fixed-header">
                <!-- Header Lower -->
                <div class="header-lower">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="inner-container d-flex justify-content-between align-items-center">
                                <!-- Logo Box -->
                                <div class="logo-box">
                                    <div class="logo"><a href="index-2.html"><img src="images/logo/new_logo.png"
                                                alt="logo" width="174" height="30"></a></div>
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
                                        <a class="tf-btn primary" href="add-property.html">Submit Property</a>
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
            <!-- End Main Header -->
            <!-- Slider -->
            <div class="sidebar-menu-dashboard">
                <ul class="box-menu-dashboard">
                    <li class="nav-menu-item "><a class="nav-menu-link" href="{{ route('dashboard') }}"><span
                                class="icon icon-dashboard"></span> Dashboards</a></li>
                    <li class="nav-menu-item"><a class="nav-menu-link" href="{{ route('properties') }}"><span
                                class="icon icon-list-dashes"></span>My Properties</a></li>
                    <li class="nav-menu-item"><a class="nav-menu-link" href="{{ route('invoices') }}"><span
                                class="icon icon-file-text"></span> My Invoices</a></li>
                    <li class="nav-menu-item"><a class="nav-menu-link" href="{{ route('favorites') }}"><span
                                class="icon icon-heart"></span>My Favorites</a></li>
                    <li class="nav-menu-item"><a class="nav-menu-link" href="{{ route('reviews') }}"><span
                                class="icon icon-review"></span> Reviews</a></li>
                    <li class="nav-menu-item"><a class="nav-menu-link" href="{{ route('profile') }}"><span
                                class="icon icon-profile"></span> My Profile</a></li>
                    <li class="nav-menu-item"><a class="nav-menu-link" href="{{ route('add-property') }}">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M19.5 3H4.5C4.10218 3 3.72064 3.15804 3.43934 3.43934C3.15804 3.72064 3 4.10218 3 4.5V19.5C3 19.8978 3.15804 20.2794 3.43934 20.5607C3.72064 20.842 4.10218 21 4.5 21H19.5C19.8978 21 20.2794 20.842 20.5607 20.5607C20.842 20.2794 21 19.8978 21 19.5V4.5C21 4.10218 20.842 3.72064 20.5607 3.43934C20.2794 3.15804 19.8978 3 19.5 3ZM19.5 19.5H4.5V4.5H19.5V19.5ZM16.5 12C16.5 12.1989 16.421 12.3897 16.2803 12.5303C16.1397 12.671 15.9489 12.75 15.75 12.75H12.75V15.75C12.75 15.9489 12.671 16.1397 12.5303 16.2803C12.3897 16.421 12.1989 16.5 12 16.5C11.8011 16.5 11.6103 16.421 11.4697 16.2803C11.329 16.1397 11.25 15.9489 11.25 15.75V12.75H8.25C8.05109 12.75 7.86032 12.671 7.71967 12.5303C7.57902 12.3897 7.5 12.1989 7.5 12C7.5 11.8011 7.57902 11.6103 7.71967 11.4697C7.86032 11.329 8.05109 11.25 8.25 11.25H11.25V8.25C11.25 8.05109 11.329 7.86032 11.4697 7.71967C11.6103 7.57902 11.8011 7.5 12 7.5C12.1989 7.5 12.3897 7.57902 12.5303 7.71967C12.671 7.86032 12.75 8.05109 12.75 8.25V11.25H15.75C15.9489 11.25 16.1397 11.329 16.2803 11.4697C16.421 11.6103 16.5 11.8011 16.5 12Z"
                                    fill="#A3ABB0" />
                            </svg>
                            Add Property</a></li>
                    <li class="nav-menu-item"><a class="nav-menu-link" href={{ route('home') }}><span
                                class="icon icon-sign-out"></span> Logout</a></li>
                </ul>
            </div>
            <!-- end sidebar dashboard -->
            {{-- @yields('dashboard-content') --}}
            @include('layouts/footer')
