@extends('layouts.main')


@section('content')

<section class="flat-slider home-1">
    <div class="container relative">
        <div class="row">    
            <div class="col-lg-12">
                <div class="slider-content">
                    <div class="heading text-center">
                        <h1 class="text-white animationtext slide">
                            Building Dreams, Creating Tranquility
                          
                        </h1>
                        <p class="subtitle text-white body-1 wow fadeIn" data-wow-delay=".8s" data-wow-duration="2000ms">We are a real estate agency that will help you find the best residence you dream of, let’s discuss for your dream house?</p>
                    </div>
                </div>
                
            </div>
                
        </div>
    </div>
    <div class="overlay"></div>
</section> 
<!-- End Slider -->
<!-- Recommended -->
<section class="flat-title-page flat-banner-about">
    <div class="container">
        <div class="text-center wow fadeInUpSmall" data-wow-delay=".2s" data-wow-duration="2000ms">
            {{-- <div class="text-subtitle text-primary">Featured Properties</div> --}}
            <h4 class="mt-4">Our Purpose</h4>
            <div class="text-center">
                <h6 class="mt-4 fs-18">
                    At The Nes Gardens, which stands for The Miracle Gardens, we are dedicated to creating exceptional living spaces that embody unique characteristics and features for every land and garden where our projects are built. Our mission is to profoundly impact and transform the lives of Kenyan citizens by developing and building affordable, high-quality homes that offer unique features and characteristics in tranquil environments. We are committed to providing homes that not only meet the highest standards of quality but also create serene and beautiful living spaces for all.
                </h6>
            </div>
        </div>

    
        <section class="flat-section style-1">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4">
                        <ul class="nav-tab-privacy" role="tablist">
                            <li class="nav-tab-item" role="presentation">   
                                <a href="#vision" class="nav-link-item active" data-bs-toggle="tab">1. Our Vision </a>
                            </li>
                            <li class="nav-tab-item" role="presentation">
                                <a href="#mission" class="nav-link-item " data-bs-toggle="tab">2. Our mission</a>
                            </li>
                            <li class="nav-tab-item" role="presentation">
                                <a href="#corevalues" class="nav-link-item" data-bs-toggle="tab">3.Our Core Values</a>
                            </li>
                        </ul>
                       
                    </div>
                    <div class="col-lg-8">
                        <h5 class="text-capitalize title">What we stand for:</h5>
                        <div class="tab-content content-box-privacy">
                            <div class="tab-pane fade active show" id="vision" role="tabpanel">
                                <h6>Our Vision Statement </h6>
                                    <p>To be the Real Estate developer in Kenya, renowned for transforming lives through the creation of affordable, high-quality homes with unique features in tranquil and beautiful environments.</p>
                            </div>

                            <div class="tab-pane fade " id="mission" role="tabpanel">
                                <h6>Our Mission</h6>
                                <p>
                                    At The Nes Gardens, we are committed to impacting and transforming the lives of every Kenyan citizen by developing and building homes that are both affordable and of superior quality. We strive to create living spaces that offer unique characteristics and features, nestled in serene and tranquil environments, ensuring every family finds their dream home with us.
                                </p>
                            </div>
                            
                            <div class="tab-pane fade" id="corevalues" role="tabpanel">
                                <p> 1. <h7><span class="bolden">Quality:</span></h7> We are committed to delivering the highest standards of construction and design in every project we undertake.</p>
                                <p> 2. <h7><span class="bolden">Affordability:</span></h7> We strive to make homeownership accessible to all by offering competitively priced, yet high-quality homes.</p>
                                <p> 3. <h7><span class="bolden">Innovation:</span></h7> We continuously seek innovative solutions and unique features to enhance the living experience in our developments.</p>
                                <p> 4. <h7><span class="bolden">Customer Focus:</span></h7> We place our clients at the heart of everything we do, ensuring their needs and expectations are met with exceptional service.</p>
                                <p> 5. <h7><span class="bolden">Tranquility:</span></h7> We are dedicated to creating peaceful and serene environments that offer a respite from the hustle and bustle of daily life.</p>
                            </div>
                            
                        </div>
                    </div>
                </div>
                
            </div>
        </section>

        <div class="flat-tab-recommended wow fadeInUpSmall" data-wow-delay=".2s" data-wow-duration="2000ms">
            <div class="tab-content">
                <div class="tab-pane fade active show">
                    <div class="row">
                        <div class="col-xl-8 col-lg-10 col-md-10 offset-xl-2 offset-lg-1 offset-md-1">
                            <div class="homeya-box">
                                <div class="archive-top">
                                    <a href="property-details" class="images-group">
                                        <div class="images-style">
                                            <img src="images/home/house-1.jpg" alt="img">
                                        </div>
                                        <div class="top">
                                            <ul class="d-flex gap-8">
                                                <li class="flag-tag success">Featured</li>
                                                <li class="flag-tag style-1">For Sale</li>
                                            </ul>
                                            <ul class="d-flex gap-4">
                                                <li class="box-icon w-32">
                                                    <span class="icon icon-arrLeftRight"></span>
                                                </li>
                                                <li class="box-icon w-32">
                                                    <span class="icon icon-heart"></span>
                                                </li>
                                                <li class="box-icon w-32">
                                                    <span class="icon icon-eye"></span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="bottom">
                                            <span class="flag-tag style-2">Studio111</span>
                                        </div>
                                    </a>
                                    <div class="content">
                                        <div class="h7 text-capitalize fw-7"><a href="/property-details" class="link"> 123Casa Lomas de Machalí Macharia</a></div>
                                        <div class="desc"><i class="fs-16 icon icon-mapPin"></i><p>33 Maple Street, San Francisco, California</p> </div>
                                        <ul class="meta-list">
                                            <li class="item">
                                                <i class="icon icon-bed"></i>
                                                <span>3</span>
                                            </li>
                                            <li class="item">
                                                <i class="icon icon-bathtub"></i>
                                                <span>2</span>
                                            </li>
                                            <li class="item">
                                                <i class="icon icon-ruler"></i>
                                                <span>600 SqFT</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="archive-bottom d-flex justify-content-between align-items-center">
                                    <div class="d-flex gap-8 align-items-center">
                                        <div class="avatar avt-40 round">
                                            <img src="images/avatar/avt-6.jpg" alt="avt">
                                        </div>
                                        <span>Arlene McCoy</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <h6>$7250,00</h6>
                                        <span class="text-variant-1">/SqFT</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</section>

<!-- Location -->
<section class="flat-title-page flat-banner-about">
    <div class="container">
        <div class="box-title text-center wow fadeInUpSmall" data-wow-delay=".2s" data-wow-duration="2000ms">
            <div class="text-subtitle text-primary">Building dreams....</div>
            <h4 class="mt-4">Our Project</h4>
        </div>
        <div class="flat-tab-recommended wow fadeInUpSmall" data-wow-delay=".2s" data-wow-duration="2000ms">
            <div class="tab-content">
                <div class="tab-pane fade active show">
                    <div class="row">
                        <div class="col-xl-8 col-lg-10 col-md-10 offset-xl-2 offset-lg-1 offset-md-1">
                            <div class="homeya-box">
                                <div class="archive-top">
                                    <a href="property-details" class="images-group">
                                        <div class="images-style">
                                            <img src="images/home/house-1.jpg" alt="img">
                                        </div>
                                        <div class="top">
                                            <ul class="d-flex flex-column gap-8">
                                                <li class="flag-tag success">Nes Ville Gardens</li>
                                                {{-- <li class="flag-tag style-1">Nestled at <span class="icon icon-heart" style="color: green"></span> of Kiambu County --}}
                                            </ul>
                                            <ul class="d-flex flex-column gap-4">
                                                <li class="flag-tag success">
                                                    Our Homes
                                                </li>
                                                <li class="flag-tag style-1">3 Bedrooms + DSQ (Family and Study Focused)</li>
                                                <li class="flag-tag style-1">3 Bedrooms + DSQ (Master Suite Focused)</li>
                                                <li class="flag-tag style-1">4 Bedrooms + DSQ
                                                   
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="bottom">
                                            <span class="flag-tag style-2">Home of Tranquility</span>
                                        </div>
                                    </a>
                                    <div class="content">
                                        <div class="h7 text-capitalize fw-7"><a href="/property-details" class="link"> Nes Ville Garden</a></div>
                                        <div class="desc"><i class="fs-16 icon icon-mapPin"></i><p>Kiambu, 13km from Nairobi CBD</p> </div>
                                        <ul class="meta-list">
                                            <li class="item">
                                                <i class="icon icon-secure"></i>
                                                <span>Secure place</span>
                                            </li>
                                            <li class="item">
                                                <i class="icon icon-townhouse"></i>
                                                <span>65 units</span>
                                            </li>
                                            <li class="item">
                                                <i class="icon icon-dishwasher"></i>
                                                <span>Ample Laundry Area</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                {{-- <div class="archive-bottom d-flex justify-content-between align-items-center">
                                    <div class="d-flex gap-8 align-items-center">
                                        <div class="avatar avt-40 round">
                                            <img src="images/avatar/avt-6.jpg" alt="avt">
                                        </div>
                                        <span>Arlene McCoy</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <h6>$7250,00</h6>
                                        <span class="text-variant-1">/SqFT</span>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Location -->


<!-- End Recommended -->

@endsection