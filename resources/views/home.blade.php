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
                                {{-- <span class="tf-text s1 cd-words-wrapper"> 
                                    <span class="item-text is-visible">Dream Home</span>
                                    <span class="item-text is-hidden">Perfect Home</span>
                                    <span class="item-text is-hidden">Real Estate</span>
                                </span>   --}}
                        </h1>
                        <p class="subtitle text-white body-1 wow fadeIn" data-wow-delay=".8s" data-wow-duration="2000ms">We are a real estate agency that will help you find the best residence you dream of, let’s discuss for your dream house?</p>
                    </div>
                    {{-- <div class="flat-tab flat-tab-form">
                        <ul class="nav-tab-form style-1 justify-content-center" role="tablist">
                            <li class="nav-tab-item" role="presentation">   
                                <a href="#forRent" class="nav-link-item active"  data-bs-toggle="tab">For Rent</a>
                            </li>
                            <li class="nav-tab-item" role="presentation">
                                <a href="#forSale" class="nav-link-item" data-bs-toggle="tab">For Sale</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade active show" role="tabpanel">
                                <div class="form-sl">
                                    <form method="post">
                                        <div class="wd-find-select">
                                            <div class="inner-group">
                                                <div class="form-group-1 search-form form-style">
                                                    <label>Keyword</label>
                                                    <input type="text" class="form-control" placeholder="Search Keyword." value="" name="s" title="Search for" required="">
                                                </div>
                                                <div class="form-group-2 form-style">
                                                    <label>Location</label>
                                                    <div class="group-ip">
                                                        <input type="text" class="form-control" placeholder="Search Location" value="" name="s" title="Search for" required="">
                                                        <a href="#" class="icon icon-location"></a>
                                                    </div>
                                                </div>
                                                <div class="form-group-3 form-style">
                                                    <label>Type</label>
                                                    <div class="group-select">
                                                        <div class="nice-select" tabindex="0"><span class="current">All</span>
                                                            <ul class="list">  
                                                                <li data-value class="option selected">All</li>                                                        
                                                                <li data-value="villa" class="option">Villa</li>
                                                                <li data-value="studio" class="option">Studio</li>
                                                                <li data-value="office" class="option">Office</li>
                                                                <li data-value="house" class="option">House</li>


                                                            </ul>
                                                        </div>
                                                    </div>                                                    
                                                </div>
                                                <div class="form-group-4 box-filter">
                                                    <a class="filter-advanced pull-right">
                                                         <span class="icon icon-faders"></span> 
                                                         <span class="text-1">Advanced</span>                                                                      
                                                    </a>
                                                </div>
                                            </div>
                                            <button type="submit" class="tf-btn primary" href="#">Search</button>
                                        </div>
                                        <div class="wd-search-form">
                                            <div class="grid-2 group-box group-price">
                                                <div class="widget-price">
                                                    <div class="box-title-price">
                                                        <span class="title-price">Price Range</span>
                                                        <div class="caption-price">
                                                            <span>from</span>
                                                            <span id="slider-range-value1" class="fw-7"></span>
                                                            <span>to</span>
                                                            <span id="slider-range-value2" class="fw-7"></span>
                                                        </div>
                                                    </div>
                                                    <div id="slider-range"></div>
                                                    <div class="slider-labels">
                                                        <div>
                                                            <input type="hidden" name="min-value" value="">
                                                            <input type="hidden" name="max-value" value="">                                                                                  
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="widget-price">
                                                    <div class="box-title-price">
                                                        <span class="title-price">Size Range</span>
                                                        <div class="caption-price">
                                                            <span>from</span>
                                                            <span id="slider-range-value01" class="fw-7"></span>
                                                            <span>to</span>
                                                            <span id="slider-range-value02" class="fw-7"></span>
                                                        </div>
                                                    </div>
                                                    <div id="slider-range2"></div>
                                                    <div class="slider-labels">
                                                    <div>                                                                             
                                                        <input type="hidden" name="min-value2" value="">
                                                        <input type="hidden" name="max-value2" value="">      
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="grid-2 group-box">
                                                <div class="group-select grid-2">
                                                    <div class="box-select">
                                                        <label class="title-select text-variant-1">Rooms</label>
                                                        <div class="nice-select" tabindex="0"><span class="current">2</span>
                                                            <ul class="list"> 
                                                                <li data-value="1" class="option">1</li>
                                                                <li data-value="2" class="option selected">2</li>
                                                                <li data-value="3" class="option">3</li>
                                                                <li data-value="4" class="option">4</li>
                                                                <li data-value="5" class="option">5</li>
                                                                <li data-value="6" class="option">6</li>
                                                                <li data-value="7" class="option">7</li>
                                                                <li data-value="8" class="option">8</li>
                                                                <li data-value="9" class="option">9</li>
                                                                <li data-value="10" class="option">10</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="box-select">
                                                        <label class="title-select text-variant-1">Bathrooms</label>
                                                        <div class="nice-select" tabindex="0"><span class="current">2</span>
                                                            <ul class="list"> 
                                                                <li data-value="1" class="option">1</li>
                                                                <li data-value="2" class="option selected">2</li>
                                                                <li data-value="3" class="option">3</li>
                                                                <li data-value="4" class="option">4</li>
                                                                <li data-value="5" class="option">5</li>
                                                                <li data-value="6" class="option">6</li>
                                                                <li data-value="7" class="option">7</li>
                                                                <li data-value="8" class="option">8</li>
                                                                <li data-value="9" class="option">9</li>
                                                                <li data-value="10" class="option">10</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="group-select grid-2">
                                                    <div class="box-select">
                                                        <label class="title-select text-variant-1">Bedrooms</label>
                                                        <div class="nice-select" tabindex="0"><span class="current">2</span>
                                                            <ul class="list"> 
                                                                <li data-value="1" class="option">1</li>
                                                                <li data-value="2" class="option selected">2</li>
                                                                <li data-value="3" class="option">3</li>
                                                                <li data-value="4" class="option">4</li>
                                                                <li data-value="5" class="option">5</li>
                                                                <li data-value="6" class="option">6</li>
                                                                <li data-value="7" class="option">7</li>
                                                                <li data-value="8" class="option">8</li>
                                                                <li data-value="9" class="option">9</li>
                                                                <li data-value="10" class="option">10</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="box-select">
                                                        <label class="title-select fw-5">Type</label>
                                                        <div class="nice-select" tabindex="0"><span class="current">2</span>
                                                            <ul class="list"> 
                                                                <li data-value="1" class="option">1</li>
                                                                <li data-value="2" class="option selected">2</li>
                                                                <li data-value="3" class="option">3</li>
                                                                <li data-value="4" class="option">4</li>
                                                                <li data-value="5" class="option">5</li>
                                                                <li data-value="6" class="option">6</li>
                                                                <li data-value="7" class="option">7</li>
                                                                <li data-value="8" class="option">8</li>
                                                                <li data-value="9" class="option">9</li>
                                                                <li data-value="10" class="option">10</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                               
                                            </div>
                                           
                                            <div class="group-checkbox">
                                                <div class="text-1">Amenities:</div>
                                                <div class="group-amenities mt-8 grid-6">
                                                    <div class="box-amenities">
                                                        <fieldset class="amenities-item">
                                                            <input type="checkbox" class="tf-checkbox style-1" id="cb1" checked> 
                                                            <label for="cb1" class="text-cb-amenities">Air Condition</label>
                                                        </fieldset>
                                                        <fieldset class="amenities-item mt-12">
                                                            <input type="checkbox" class="tf-checkbox style-1" id="cb2"> 
                                                            <label for="cb2" class="text-cb-amenities">Cable TV</label>
                                                        </fieldset>
                                                        <fieldset class="amenities-item mt-12">
                                                            <input type="checkbox" class="tf-checkbox style-1" id="cb3"> 
                                                            <label for="cb3" class="text-cb-amenities">Ceiling Height</label>
                                                        </fieldset>
                                                        <fieldset class="amenities-item mt-12">
                                                            <input type="checkbox" class="tf-checkbox style-1" id="cb4"> 
                                                            <label for="cb4" class="text-cb-amenities">Fireplace</label>
                                                        </fieldset>
                                                    </div>
                                                    <div class="box-amenities">
                                                        <fieldset class="amenities-item">
                                                            <input type="checkbox" class="tf-checkbox style-1" id="cb5"> 
                                                            <label for="cb5" class="text-cb-amenities">Disabled Access</label>
                                                        </fieldset>
                                                        <fieldset class="amenities-item mt-12">
                                                            <input type="checkbox" class="tf-checkbox style-1" id="cb6" checked> 
                                                            <label for="cb6" class="text-cb-amenities">Elevator</label>
                                                        </fieldset>
                                                        <fieldset class="amenities-item mt-12">
                                                            <input type="checkbox" class="tf-checkbox style-1" id="cb7"> 
                                                            <label for="cb7" class="text-cb-amenities">Fence</label>
                                                        </fieldset>
                                                        <fieldset class="amenities-item mt-12">
                                                            <input type="checkbox" class="tf-checkbox style-1" id="cb8"> 
                                                            <label for="cb8" class="text-cb-amenities">Garden</label>
                                                        </fieldset>
                                                    </div>
                                                    <div class="box-amenities">
                                                        <fieldset class="amenities-item">
                                                            <input type="checkbox" class="tf-checkbox style-1" id="cb9" checked> 
                                                            <label for="cb9" class="text-cb-amenities">Floor</label>
                                                        </fieldset>
                                                        <fieldset class="amenities-item mt-12">
                                                            <input type="checkbox" class="tf-checkbox style-1" id="cb10"> 
                                                            <label for="cb10" class="text-cb-amenities">Furnishing</label>
                                                        </fieldset>
                                                        <fieldset class="amenities-item mt-12">
                                                            <input type="checkbox" class="tf-checkbox style-1" id="cb11" checked> 
                                                            <label for="cb11" class="text-cb-amenities">Garage</label>
                                                        </fieldset>
                                                        <fieldset class="amenities-item mt-12">
                                                            <input type="checkbox" class="tf-checkbox style-1" id="cb12"> 
                                                            <label for="cb12" class="text-cb-amenities">Pet Friendly</label>
                                                        </fieldset>
                                                    </div>
                                                    <div class="box-amenities">
                                                        <fieldset class="amenities-item">
                                                            <input type="checkbox" class="tf-checkbox style-1" id="cb13"> 
                                                            <label for="cb13" class="text-cb-amenities">Heating</label>
                                                        </fieldset>
                                                        <fieldset class="amenities-item mt-12">
                                                            <input type="checkbox" class="tf-checkbox style-1" id="cb14"> 
                                                            <label for="cb14" class="text-cb-amenities">Intercom</label>
                                                        </fieldset>
                                                        <fieldset class="amenities-item mt-12">
                                                            <input type="checkbox" class="tf-checkbox style-1" id="cb15"> 
                                                            <label for="cb15" class="text-cb-amenities">Parking</label>
                                                        </fieldset>
                                                        <fieldset class="amenities-item mt-12">
                                                            <input type="checkbox" class="tf-checkbox style-1" id="cb16"> 
                                                            <label for="cb16" class="text-cb-amenities">WiFi</label>
                                                        </fieldset>
                                                    </div>
                                                    <div class="box-amenities">
                                                        <fieldset class="amenities-item">
                                                            <input type="checkbox" class="tf-checkbox style-1" id="cb17"> 
                                                            <label for="cb17" class="text-cb-amenities">Renovation</label>
                                                        </fieldset>
                                                        <fieldset class="amenities-item mt-12">
                                                            <input type="checkbox" class="tf-checkbox style-1" id="cb18"> 
                                                            <label for="cb18" class="text-cb-amenities">Security</label>
                                                        </fieldset>
                                                        <fieldset class="amenities-item mt-12">
                                                            <input type="checkbox" class="tf-checkbox style-1" id="cb19"> 
                                                            <label for="cb19" class="text-cb-amenities">Swimming Pool</label>
                                                        </fieldset>
                                                        
                                                    </div>
                                                    <div class="box-amenities">
                                                        <fieldset class="amenities-item">
                                                            <input type="checkbox" class="tf-checkbox style-1" id="cb20"> 
                                                            <label for="cb20" class="text-cb-amenities">Window Type</label>
                                                        </fieldset>
                                                        <fieldset class="amenities-item mt-12">
                                                            <input type="checkbox" class="tf-checkbox style-1" id="cb21"> 
                                                            <label for="cb21" class="text-cb-amenities">Search property</label>
                                                        </fieldset>
                                                        <fieldset class="amenities-item mt-12">
                                                            <input type="checkbox" class="tf-checkbox style-1" id="cb22"> 
                                                            <label for="cb22" class="text-cb-amenities">Construction Year</label>
                                                        </fieldset>
                                                    </div>

                                                </div>
                                                
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div> --}}
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
            <ul class="nav-tab-recommended justify-content-center" role="tablist">
                <li class="nav-tab-item" role="presentation">   
                    <a href="#viewAll" class="nav-link-item"  data-bs-toggle="tab">View All</a>
                </li>
                <li class="nav-tab-item" role="presentation">
                    <a href="#apartment" class="nav-link-item  active" data-bs-toggle="tab">Apartment</a>
                </li>
                <li class="nav-tab-item" role="presentation">
                    <a href="#villa" class="nav-link-item" data-bs-toggle="tab">Villa</a>
                </li>
                <li class="nav-tab-item" role="presentation">
                    <a href="#studio" class="nav-link-item" data-bs-toggle="tab">Studio</a>
                </li>
                <li class="nav-tab-item" role="presentation">
                    <a href="#house" class="nav-link-item" data-bs-toggle="tab">House</a>
                </li>
                <li class="nav-tab-item" role="presentation">
                    <a href="#office" class="nav-link-item" data-bs-toggle="tab">Office</a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade" id="viewAll" role="tabpanel">
                    <div class="row">
                        <div class="col-xl-4 col-lg-6 col-md-6">
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
                                            <span class="flag-tag style-2">Studio</span>
                                        </div>
                                    </a>
                                    <div class="content">
                                        <div class="h7 text-capitalize fw-7"><a href="property-details" class="link"> Casa Lomas de Machalí Machas</a></div>
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
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="homeya-box">
                                <div class="archive-top">
                                    <a href="property-details" class="images-group">
                                        <div class="images-style">
                                            <img src="images/home/house-2.jpg" alt="img">
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
                                            <span class="flag-tag style-2">Apartment</span>
                                        </div>
                                    </a>
                                    <div class="content">
                                        <div class="h7 text-capitalize fw-7"><a href="property-details" class="link">Villa del Mar Retreat, Malibu</a></div>
                                        <div class="desc"><i class="fs-16 icon icon-mapPin"></i><p>72 Sunset Avenue, Los Angeles, California</p> </div>
                                        <ul class="meta-list">
                                            <li class="item">
                                                <i class="icon icon-bed"></i>
                                                <span>2</span>
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
                                            <img src="images/avatar/avt-7.jpg" alt="avt">
                                        </div>
                                        <span>Annette Black</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <h6>$250,00</h6>
                                        <span class="text-variant-1">/month</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="homeya-box">
                                <div class="archive-top">
                                    <a href="property-details" class="images-group">
                                        <div class="images-style">
                                            <img src="images/home/house-3.jpg" alt="img">
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
                                            <span class="flag-tag style-2">Villa</span>
                                        </div>
                                    </a>
                                    <div class="content">
                                        <div class="h7 text-capitalize fw-7"><a href="property-details" class="link">Rancho Vista Verde, Santa Barbara</a></div>
                                        <div class="desc"><i class="fs-16 icon icon-mapPin"></i><p>33 Maple Street, San Francisco, California</p> </div>
                                        <ul class="meta-list">
                                            <li class="item">
                                                <i class="icon icon-bed"></i>
                                                <span>4</span>
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
                                            <img src="images/avatar/avt-5.jpg" alt="avt">
                                        </div>
                                        <span>Ralph Edwards</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <h6>$5050,00</h6>
                                        <span class="text-variant-1">/SqFT</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="homeya-box">
                                <div class="archive-top">
                                    <a href="property-details" class="images-group">
                                        <div class="images-style">
                                            <img src="images/home/house-4.jpg" alt="img">
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
                                            <span class="flag-tag style-2">House</span>
                                        </div>
                                    </a>
                                    <div class="content">
                                        <div class="h7 text-capitalize fw-7"><a href="property-details" class="link">Sunset Heights Estate, Beverly Hills</a></div>
                                        <div class="desc"><i class="fs-16 icon icon-mapPin"></i><p>1040 Ocean, Santa Monica, California</p> </div>
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
                                            <img src="images/avatar/avt-8.jpg" alt="avt">
                                        </div>
                                        <span>Jacob Jones</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <h6>$250,00</h6>
                                        <span class="text-variant-1">/month</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="homeya-box">
                                <div class="archive-top">
                                    <a href="property-details" class="images-group">
                                        <div class="images-style">
                                            <img src="images/home/house-5.jpg" alt="img">
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
                                            <span class="flag-tag style-2">Office</span>
                                        </div>
                                    </a>
                                    <div class="content">
                                        <div class="h7 text-capitalize fw-7"><a href="property-details" class="link">Coastal Serenity Cottage</a></div>
                                        <div class="desc"><i class="fs-16 icon icon-mapPin"></i><p>21 Hillside Drive, Beverly Hills, California</p> </div>
                                        <ul class="meta-list">
                                            <li class="item">
                                                <i class="icon icon-bed"></i>
                                                <span>4</span>
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
                                            <img src="images/avatar/avt-9.jpg" alt="avt">
                                        </div>
                                        <span>Kathryn Murphy</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <h6>$7250,00</h6>
                                        <span class="text-variant-1">/SqFT</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="homeya-box">
                                <div class="archive-top">
                                    <a href="property-details" class="images-group">
                                        <div class="images-style">
                                            <img src="images/home/house-6.jpg" alt="img">
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
                                            <span class="flag-tag style-2">Studio</span>
                                        </div>
                                    </a>
                                    <div class="content">
                                        <div class="h7 text-capitalize fw-7"><a href="property-details" class="link">Lakeview Haven, Lake Tahoe</a></div>
                                        <div class="desc"><i class="fs-16 icon icon-mapPin"></i><p>8 Broadway, Brooklyn, New York</p> </div>
                                        <ul class="meta-list">
                                            <li class="item">
                                                <i class="icon icon-bed"></i>
                                                <span>2</span>
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
                                        <span>Floyd Miles</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <h6>$250,00</h6>
                                        <span class="text-variant-1">/SqFT</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <a href="#" class="tf-btn primary size-1">View All Properties</a>
                    </div>
                </div>
                <div class="tab-pane fade active show" id="apartment" role="tabpanel">
                    <div class="row">
                        <div class="col-xl-4 col-lg-6 col-md-6">
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
                                            <span class="flag-tag style-2">Studio</span>
                                        </div>
                                    </a>
                                    <div class="content">
                                        <div class="h7 text-capitalize fw-7"><a href="/property-details" class="link"> Casa Lomas de Machalí Machas</a></div>
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
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="homeya-box">
                                <div class="archive-top">
                                    <a href="property-details" class="images-group">
                                        <div class="images-style">
                                            <img src="images/home/house-2.jpg" alt="img">
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
                                            <span class="flag-tag style-2">Apartment</span>
                                        </div>
                                    </a>
                                    <div class="content">
                                        <div class="h7 text-capitalize fw-7"><a href="property-details" class="link">Villa del Mar Retreat, Malibu</a></div>
                                        <div class="desc"><i class="fs-16 icon icon-mapPin"></i><p>72 Sunset Avenue, Los Angeles, California</p> </div>
                                        <ul class="meta-list">
                                            <li class="item">
                                                <i class="icon icon-bed"></i>
                                                <span>2</span>
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
                                            <img src="images/avatar/avt-7.jpg" alt="avt">
                                        </div>
                                        <span>Annette Black</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <h6>$250,00</h6>
                                        <span class="text-variant-1">/month</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="homeya-box">
                                <div class="archive-top">
                                    <a href="property-details" class="images-group">
                                        <div class="images-style">
                                            <img src="images/home/house-3.jpg" alt="img">
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
                                            <span class="flag-tag style-2">Villa</span>
                                        </div>
                                    </a>
                                    <div class="content">
                                        <div class="h7 text-capitalize fw-7"><a href="property-details" class="link">Rancho Vista Verde, Santa Barbara</a></div>
                                        <div class="desc"><i class="fs-16 icon icon-mapPin"></i><p>33 Maple Street, San Francisco, California</p> </div>
                                        <ul class="meta-list">
                                            <li class="item">
                                                <i class="icon icon-bed"></i>
                                                <span>4</span>
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
                                            <img src="images/avatar/avt-5.jpg" alt="avt">
                                        </div>
                                        <span>Ralph Edwards</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <h6>$5050,00</h6>
                                        <span class="text-variant-1">/SqFT</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="homeya-box">
                                <div class="archive-top">
                                    <a href="property-details" class="images-group">
                                        <div class="images-style">
                                            <img src="images/home/house-4.jpg" alt="img">
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
                                            <span class="flag-tag style-2">House</span>
                                        </div>
                                    </a>
                                    <div class="content">
                                        <div class="h7 text-capitalize fw-7"><a href="property-details" class="link">Sunset Heights Estate, Beverly Hills</a></div>
                                        <div class="desc"><i class="fs-16 icon icon-mapPin"></i><p>1040 Ocean, Santa Monica, California</p> </div>
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
                                            <img src="images/avatar/avt-8.jpg" alt="avt">
                                        </div>
                                        <span>Jacob Jones</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <h6>$250,00</h6>
                                        <span class="text-variant-1">/month</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="homeya-box">
                                <div class="archive-top">
                                    <a href="property-details" class="images-group">
                                        <div class="images-style">
                                            <img src="images/home/house-5.jpg" alt="img">
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
                                            <span class="flag-tag style-2">Office</span>
                                        </div>
                                    </a>
                                    <div class="content">
                                        <div class="h7 text-capitalize fw-7"><a href="property-details" class="link">Coastal Serenity Cottage</a></div>
                                        <div class="desc"><i class="fs-16 icon icon-mapPin"></i><p>21 Hillside Drive, Beverly Hills, California</p> </div>
                                        <ul class="meta-list">
                                            <li class="item">
                                                <i class="icon icon-bed"></i>
                                                <span>4</span>
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
                                            <img src="images/avatar/avt-9.jpg" alt="avt">
                                        </div>
                                        <span>Kathryn Murphy</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <h6>$7250,00</h6>
                                        <span class="text-variant-1">/SqFT</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="homeya-box">
                                <div class="archive-top">
                                    <a href="property-details" class="images-group">
                                        <div class="images-style">
                                            <img src="images/home/house-6.jpg" alt="img">
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
                                            <span class="flag-tag style-2">Studio</span>
                                        </div>
                                    </a>
                                    <div class="content">
                                        <div class="h7 text-capitalize fw-7"><a href="property-details" class="link">Lakeview Haven, Lake Tahoe</a></div>
                                        <div class="desc"><i class="fs-16 icon icon-mapPin"></i><p>8 Broadway, Brooklyn, New York</p> </div>
                                        <ul class="meta-list">
                                            <li class="item">
                                                <i class="icon icon-bed"></i>
                                                <span>2</span>
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
                                        <span>Floyd Miles</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <h6>$250,00</h6>
                                        <span class="text-variant-1">/SqFT</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <a href="#" class="tf-btn primary size-1">View All Properties</a>
                    </div>
                </div>
                <div class="tab-pane fade" id="villa" role="tabpanel">
                    <div class="row">
                        <div class="col-xl-4 col-lg-6 col-md-6">
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
                                            <span class="flag-tag style-2">Studio</span>
                                        </div>
                                    </a>
                                    <div class="content">
                                        <div class="h7 text-capitalize fw-7"><a href="property-details" class="link"> Casa Lomas de Machalí Machas</a></div>
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
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="homeya-box">
                                <div class="archive-top">
                                    <a href="property-details" class="images-group">
                                        <div class="images-style">
                                            <img src="images/home/house-2.jpg" alt="img">
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
                                            <span class="flag-tag style-2">Apartment</span>
                                        </div>
                                    </a>
                                    <div class="content">
                                        <div class="h7 text-capitalize fw-7"><a href="property-details" class="link">Villa del Mar Retreat, Malibu</a></div>
                                        <div class="desc"><i class="fs-16 icon icon-mapPin"></i><p>72 Sunset Avenue, Los Angeles, California</p> </div>
                                        <ul class="meta-list">
                                            <li class="item">
                                                <i class="icon icon-bed"></i>
                                                <span>2</span>
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
                                            <img src="images/avatar/avt-7.jpg" alt="avt">
                                        </div>
                                        <span>Annette Black</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <h6>$250,00</h6>
                                        <span class="text-variant-1">/month</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="homeya-box">
                                <div class="archive-top">
                                    <a href="property-details" class="images-group">
                                        <div class="images-style">
                                            <img src="images/home/house-3.jpg" alt="img">
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
                                            <span class="flag-tag style-2">Villa</span>
                                        </div>
                                    </a>
                                    <div class="content">
                                        <div class="h7 text-capitalize fw-7"><a href="property-details" class="link">Rancho Vista Verde, Santa Barbara</a></div>
                                        <div class="desc"><i class="fs-16 icon icon-mapPin"></i><p>33 Maple Street, San Francisco, California</p> </div>
                                        <ul class="meta-list">
                                            <li class="item">
                                                <i class="icon icon-bed"></i>
                                                <span>4</span>
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
                                            <img src="images/avatar/avt-5.jpg" alt="avt">
                                        </div>
                                        <span>Ralph Edwards</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <h6>$5050,00</h6>
                                        <span class="text-variant-1">/SqFT</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="homeya-box">
                                <div class="archive-top">
                                    <a href="property-details" class="images-group">
                                        <div class="images-style">
                                            <img src="images/home/house-4.jpg" alt="img">
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
                                            <span class="flag-tag style-2">House</span>
                                        </div>
                                    </a>
                                    <div class="content">
                                        <div class="h7 text-capitalize fw-7"><a href="property-details" class="link">Sunset Heights Estate, Beverly Hills</a></div>
                                        <div class="desc"><i class="fs-16 icon icon-mapPin"></i><p>1040 Ocean, Santa Monica, California</p> </div>
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
                                            <img src="images/avatar/avt-8.jpg" alt="avt">
                                        </div>
                                        <span>Jacob Jones</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <h6>$250,00</h6>
                                        <span class="text-variant-1">/month</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="homeya-box">
                                <div class="archive-top">
                                    <a href="property-details" class="images-group">
                                        <div class="images-style">
                                            <img src="images/home/house-5.jpg" alt="img">
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
                                            <span class="flag-tag style-2">Office</span>
                                        </div>
                                    </a>
                                    <div class="content">
                                        <div class="h7 text-capitalize fw-7"><a href="property-details" class="link">Coastal Serenity Cottage</a></div>
                                        <div class="desc"><i class="fs-16 icon icon-mapPin"></i><p>21 Hillside Drive, Beverly Hills, California</p> </div>
                                        <ul class="meta-list">
                                            <li class="item">
                                                <i class="icon icon-bed"></i>
                                                <span>4</span>
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
                                            <img src="images/avatar/avt-9.jpg" alt="avt">
                                        </div>
                                        <span>Kathryn Murphy</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <h6>$7250,00</h6>
                                        <span class="text-variant-1">/SqFT</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="homeya-box">
                                <div class="archive-top">
                                    <a href="property-details" class="images-group">
                                        <div class="images-style">
                                            <img src="images/home/house-6.jpg" alt="img">
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
                                            <span class="flag-tag style-2">Studio</span>
                                        </div>
                                    </a>
                                    <div class="content">
                                        <div class="h7 text-capitalize fw-7"><a href="property-details" class="link">Lakeview Haven, Lake Tahoe</a></div>
                                        <div class="desc"><i class="fs-16 icon icon-mapPin"></i><p>8 Broadway, Brooklyn, New York</p> </div>
                                        <ul class="meta-list">
                                            <li class="item">
                                                <i class="icon icon-bed"></i>
                                                <span>2</span>
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
                                        <span>Floyd Miles</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <h6>$250,00</h6>
                                        <span class="text-variant-1">/SqFT</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <a href="#" class="tf-btn primary size-1">View All Properties</a>
                    </div>
                </div>
                <div class="tab-pane fade" id="studio" role="tabpanel">
                    <div class="row">
                        <div class="col-xl-4 col-lg-6 col-md-6">
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
                                            <span class="flag-tag style-2">Studio</span>
                                        </div>
                                    </a>
                                    <div class="content">
                                        <div class="h7 text-capitalize fw-7"><a href="property-details" class="link"> Casa Lomas de Machalí Machas</a></div>
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
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="homeya-box">
                                <div class="archive-top">
                                    <a href="property-details" class="images-group">
                                        <div class="images-style">
                                            <img src="images/home/house-2.jpg" alt="img">
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
                                            <span class="flag-tag style-2">Apartment</span>
                                        </div>
                                    </a>
                                    <div class="content">
                                        <div class="h7 text-capitalize fw-7"><a href="property-details" class="link">Villa del Mar Retreat, Malibu</a></div>
                                        <div class="desc"><i class="fs-16 icon icon-mapPin"></i><p>72 Sunset Avenue, Los Angeles, California</p> </div>
                                        <ul class="meta-list">
                                            <li class="item">
                                                <i class="icon icon-bed"></i>
                                                <span>2</span>
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
                                            <img src="images/avatar/avt-7.jpg" alt="avt">
                                        </div>
                                        <span>Annette Black</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <h6>$250,00</h6>
                                        <span class="text-variant-1">/month</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="homeya-box">
                                <div class="archive-top">
                                    <a href="property-details" class="images-group">
                                        <div class="images-style">
                                            <img src="images/home/house-3.jpg" alt="img">
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
                                            <span class="flag-tag style-2">Villa</span>
                                        </div>
                                    </a>
                                    <div class="content">
                                        <div class="h7 text-capitalize fw-7"><a href="property-details" class="link">Rancho Vista Verde, Santa Barbara</a></div>
                                        <div class="desc"><i class="fs-16 icon icon-mapPin"></i><p>33 Maple Street, San Francisco, California</p> </div>
                                        <ul class="meta-list">
                                            <li class="item">
                                                <i class="icon icon-bed"></i>
                                                <span>4</span>
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
                                            <img src="images/avatar/avt-5.jpg" alt="avt">
                                        </div>
                                        <span>Ralph Edwards</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <h6>$5050,00</h6>
                                        <span class="text-variant-1">/SqFT</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="homeya-box">
                                <div class="archive-top">
                                    <a href="property-details" class="images-group">
                                        <div class="images-style">
                                            <img src="images/home/house-4.jpg" alt="img">
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
                                            <span class="flag-tag style-2">House</span>
                                        </div>
                                    </a>
                                    <div class="content">
                                        <div class="h7 text-capitalize fw-7"><a href="property-details" class="link">Sunset Heights Estate, Beverly Hills</a></div>
                                        <div class="desc"><i class="fs-16 icon icon-mapPin"></i><p>1040 Ocean, Santa Monica, California</p> </div>
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
                                            <img src="images/avatar/avt-8.jpg" alt="avt">
                                        </div>
                                        <span>Jacob Jones</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <h6>$250,00</h6>
                                        <span class="text-variant-1">/month</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="homeya-box">
                                <div class="archive-top">
                                    <a href="property-details" class="images-group">
                                        <div class="images-style">
                                            <img src="images/home/house-5.jpg" alt="img">
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
                                            <span class="flag-tag style-2">Office</span>
                                        </div>
                                    </a>
                                    <div class="content">
                                        <div class="h7 text-capitalize fw-7"><a href="property-details" class="link">Coastal Serenity Cottage</a></div>
                                        <div class="desc"><i class="fs-16 icon icon-mapPin"></i><p>21 Hillside Drive, Beverly Hills, California</p> </div>
                                        <ul class="meta-list">
                                            <li class="item">
                                                <i class="icon icon-bed"></i>
                                                <span>4</span>
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
                                            <img src="images/avatar/avt-9.jpg" alt="avt">
                                        </div>
                                        <span>Kathryn Murphy</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <h6>$7250,00</h6>
                                        <span class="text-variant-1">/SqFT</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="homeya-box">
                                <div class="archive-top">
                                    <a href="property-details" class="images-group">
                                        <div class="images-style">
                                            <img src="images/home/house-6.jpg" alt="img">
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
                                            <span class="flag-tag style-2">Studio</span>
                                        </div>
                                    </a>
                                    <div class="content">
                                        <div class="h7 text-capitalize fw-7"><a href="property-details" class="link">Lakeview Haven, Lake Tahoe</a></div>
                                        <div class="desc"><i class="fs-16 icon icon-mapPin"></i><p>8 Broadway, Brooklyn, New York</p> </div>
                                        <ul class="meta-list">
                                            <li class="item">
                                                <i class="icon icon-bed"></i>
                                                <span>2</span>
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
                                        <span>Floyd Miles</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <h6>$250,00</h6>
                                        <span class="text-variant-1">/SqFT</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <a href="#" class="tf-btn primary size-1">View All Properties</a>
                    </div>
                </div>
                <div class="tab-pane fade" id="house" role="tabpanel">
                    <div class="row">
                        <div class="col-xl-4 col-lg-6 col-md-6">
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
                                            <span class="flag-tag style-2">Studio</span>
                                        </div>
                                    </a>
                                    <div class="content">
                                        <div class="h7 text-capitalize fw-7"><a href="property-details" class="link"> Casa Lomas de Machalí Machas</a></div>
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
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="homeya-box">
                                <div class="archive-top">
                                    <a href="property-details" class="images-group">
                                        <div class="images-style">
                                            <img src="images/home/house-2.jpg" alt="img">
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
                                            <span class="flag-tag style-2">Apartment</span>
                                        </div>
                                    </a>
                                    <div class="content">
                                        <div class="h7 text-capitalize fw-7"><a href="property-details" class="link">Villa del Mar Retreat, Malibu</a></div>
                                        <div class="desc"><i class="fs-16 icon icon-mapPin"></i><p>72 Sunset Avenue, Los Angeles, California</p> </div>
                                        <ul class="meta-list">
                                            <li class="item">
                                                <i class="icon icon-bed"></i>
                                                <span>2</span>
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
                                            <img src="images/avatar/avt-7.jpg" alt="avt">
                                        </div>
                                        <span>Annette Black</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <h6>$250,00</h6>
                                        <span class="text-variant-1">/month</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="homeya-box">
                                <div class="archive-top">
                                    <a href="property-details" class="images-group">
                                        <div class="images-style">
                                            <img src="images/home/house-3.jpg" alt="img">
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
                                            <span class="flag-tag style-2">Villa</span>
                                        </div>
                                    </a>
                                    <div class="content">
                                        <div class="h7 text-capitalize fw-7"><a href="property-details" class="link">Rancho Vista Verde, Santa Barbara</a></div>
                                        <div class="desc"><i class="fs-16 icon icon-mapPin"></i><p>33 Maple Street, San Francisco, California</p> </div>
                                        <ul class="meta-list">
                                            <li class="item">
                                                <i class="icon icon-bed"></i>
                                                <span>4</span>
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
                                            <img src="images/avatar/avt-5.jpg" alt="avt">
                                        </div>
                                        <span>Ralph Edwards</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <h6>$5050,00</h6>
                                        <span class="text-variant-1">/SqFT</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="homeya-box">
                                <div class="archive-top">
                                    <a href="property-details" class="images-group">
                                        <div class="images-style">
                                            <img src="images/home/house-4.jpg" alt="img">
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
                                            <span class="flag-tag style-2">House</span>
                                        </div>
                                    </a>
                                    <div class="content">
                                        <div class="h7 text-capitalize fw-7"><a href="property-details" class="link">Sunset Heights Estate, Beverly Hills</a></div>
                                        <div class="desc"><i class="fs-16 icon icon-mapPin"></i><p>1040 Ocean, Santa Monica, California</p> </div>
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
                                            <img src="images/avatar/avt-8.jpg" alt="avt">
                                        </div>
                                        <span>Jacob Jones</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <h6>$250,00</h6>
                                        <span class="text-variant-1">/month</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="homeya-box">
                                <div class="archive-top">
                                    <a href="property-details" class="images-group">
                                        <div class="images-style">
                                            <img src="images/home/house-5.jpg" alt="img">
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
                                            <span class="flag-tag style-2">Office</span>
                                        </div>
                                    </a>
                                    <div class="content">
                                        <div class="h7 text-capitalize fw-7"><a href="property-details" class="link">Coastal Serenity Cottage</a></div>
                                        <div class="desc"><i class="fs-16 icon icon-mapPin"></i><p>21 Hillside Drive, Beverly Hills, California</p> </div>
                                        <ul class="meta-list">
                                            <li class="item">
                                                <i class="icon icon-bed"></i>
                                                <span>4</span>
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
                                            <img src="images/avatar/avt-9.jpg" alt="avt">
                                        </div>
                                        <span>Kathryn Murphy</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <h6>$7250,00</h6>
                                        <span class="text-variant-1">/SqFT</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="homeya-box">
                                <div class="archive-top">
                                    <a href="property-details" class="images-group">
                                        <div class="images-style">
                                            <img src="images/home/house-6.jpg" alt="img">
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
                                            <span class="flag-tag style-2">Studio</span>
                                        </div>
                                    </a>
                                    <div class="content">
                                        <div class="h7 text-capitalize fw-7"><a href="property-details" class="link">Lakeview Haven, Lake Tahoe</a></div>
                                        <div class="desc"><i class="fs-16 icon icon-mapPin"></i><p>8 Broadway, Brooklyn, New York</p> </div>
                                        <ul class="meta-list">
                                            <li class="item">
                                                <i class="icon icon-bed"></i>
                                                <span>2</span>
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
                                        <span>Floyd Miles</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <h6>$250,00</h6>
                                        <span class="text-variant-1">/SqFT</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <a href="#" class="tf-btn primary size-1">View All Properties</a>
                    </div>
                </div>
                <div class="tab-pane fade" id="office" role="tabpanel">
                    <div class="row">
                        <div class="col-xl-4 col-lg-6 col-md-6">
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
                                            <span class="flag-tag style-2">Studio</span>
                                        </div>
                                    </a>
                                    <div class="content">
                                        <div class="h7 text-capitalize fw-7"><a href="property-details" class="link"> Casa Lomas de Machalí Machas</a></div>
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
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="homeya-box">
                                <div class="archive-top">
                                    <a href="property-details" class="images-group">
                                        <div class="images-style">
                                            <img src="images/home/house-2.jpg" alt="img">
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
                                            <span class="flag-tag style-2">Apartment</span>
                                        </div>
                                    </a>
                                    <div class="content">
                                        <div class="h7 text-capitalize fw-7"><a href="property-details" class="link">Villa del Mar Retreat, Malibu</a></div>
                                        <div class="desc"><i class="fs-16 icon icon-mapPin"></i><p>72 Sunset Avenue, Los Angeles, California</p> </div>
                                        <ul class="meta-list">
                                            <li class="item">
                                                <i class="icon icon-bed"></i>
                                                <span>2</span>
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
                                            <img src="images/avatar/avt-7.jpg" alt="avt">
                                        </div>
                                        <span>Annette Black</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <h6>$250,00</h6>
                                        <span class="text-variant-1">/month</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="homeya-box">
                                <div class="archive-top">
                                    <a href="property-details" class="images-group">
                                        <div class="images-style">
                                            <img src="images/home/house-3.jpg" alt="img">
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
                                            <span class="flag-tag style-2">Villa</span>
                                        </div>
                                    </a>
                                    <div class="content">
                                        <div class="h7 text-capitalize fw-7"><a href="property-details" class="link">Rancho Vista Verde, Santa Barbara</a></div>
                                        <div class="desc"><i class="fs-16 icon icon-mapPin"></i><p>33 Maple Street, San Francisco, California</p> </div>
                                        <ul class="meta-list">
                                            <li class="item">
                                                <i class="icon icon-bed"></i>
                                                <span>4</span>
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
                                            <img src="images/avatar/avt-5.jpg" alt="avt">
                                        </div>
                                        <span>Ralph Edwards</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <h6>$5050,00</h6>
                                        <span class="text-variant-1">/SqFT</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="homeya-box">
                                <div class="archive-top">
                                    <a href="property-details" class="images-group">
                                        <div class="images-style">
                                            <img src="images/home/house-4.jpg" alt="img">
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
                                            <span class="flag-tag style-2">House</span>
                                        </div>
                                    </a>
                                    <div class="content">
                                        <div class="h7 text-capitalize fw-7"><a href="property-details" class="link">Sunset Heights Estate, Beverly Hills</a></div>
                                        <div class="desc"><i class="fs-16 icon icon-mapPin"></i><p>1040 Ocean, Santa Monica, California</p> </div>
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
                                            <img src="images/avatar/avt-8.jpg" alt="avt">
                                        </div>
                                        <span>Jacob Jones</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <h6>$250,00</h6>
                                        <span class="text-variant-1">/month</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="homeya-box">
                                <div class="archive-top">
                                    <a href="property-details" class="images-group">
                                        <div class="images-style">
                                            <img src="images/home/house-5.jpg" alt="img">
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
                                            <span class="flag-tag style-2">Office</span>
                                        </div>
                                    </a>
                                    <div class="content">
                                        <div class="h7 text-capitalize fw-7"><a href="property-details" class="link">Coastal Serenity Cottage</a></div>
                                        <div class="desc"><i class="fs-16 icon icon-mapPin"></i><p>21 Hillside Drive, Beverly Hills, California</p> </div>
                                        <ul class="meta-list">
                                            <li class="item">
                                                <i class="icon icon-bed"></i>
                                                <span>4</span>
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
                                            <img src="images/avatar/avt-9.jpg" alt="avt">
                                        </div>
                                        <span>Kathryn Murphy</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <h6>$7250,00</h6>
                                        <span class="text-variant-1">/SqFT</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="homeya-box">
                                <div class="archive-top">
                                    <a href="property-details" class="images-group">
                                        <div class="images-style">
                                            <img src="images/home/house-6.jpg" alt="img">
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
                                            <span class="flag-tag style-2">Studio</span>
                                        </div>
                                    </a>
                                    <div class="content">
                                        <div class="h7 text-capitalize fw-7"><a href="property-details" class="link">Lakeview Haven, Lake Tahoe</a></div>
                                        <div class="desc"><i class="fs-16 icon icon-mapPin"></i><p>8 Broadway, Brooklyn, New York</p> </div>
                                        <ul class="meta-list">
                                            <li class="item">
                                                <i class="icon icon-bed"></i>
                                                <span>2</span>
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
                                        <span>Floyd Miles</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <h6>$250,00</h6>
                                        <span class="text-variant-1">/SqFT</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <a href="#" class="tf-btn primary size-1">View All Properties</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    

</section>


<!-- End Recommended -->

@endsection