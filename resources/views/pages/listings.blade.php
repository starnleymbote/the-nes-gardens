@extends('layouts.main')
@section('content')
<section class="flat-section-v6 flat-recommended flat-sidebar">
    <div class="container">
        <div class="box-title-listing">
            <h5>Property listing</h5>
            <div class="box-filter-tab">
                <ul class="nav-tab-filter" role="tablist">
                    <li class="nav-tab-item" role="presentation">   
                        <a href="#gridLayout" class="nav-link-item active" data-bs-toggle="tab"><i class="icon icon-grid"></i></a>
                    </li>
                    <li class="nav-tab-item" role="presentation">
                        <a href="#listLayout" class="nav-link-item" data-bs-toggle="tab"><i class="icon icon-list"></i></a>
                    </li>
                </ul>
                <div class="nice-select list-page" tabindex="0"><span class="current">12 Per Page</span>
                    <ul class="list">  
                        <li data-value="1" class="option">10 Per Page</li>                                                        
                        <li data-value="2" class="option">11 Per Page</li>
                        <li data-value="3" class="option selected">12 Per Page</li>
                    </ul>
                </div>
                <div class="nice-select list-sort" tabindex="0"><span class="current">Sort by (Default)</span>
                    <ul class="list">  
                        <li data-value="default" class="option selected">Sort by (Default)</li>                                                        
                        <li data-value="new" class="option">Newest</li>
                        <li data-value="old" class="option">Oldest</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-5">
                <div class="widget-sidebar fixed-sidebar">
                    <div class="flat-tab flat-tab-form widget-filter-search widget-box bg-surface">
                        <div class="h7 title fw-7">Search</div>
                        <ul class="nav-tab-form" role="tablist">
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
                                        <div class="wd-filter-select">
                                            <div class="inner-group inner-filter">
                                                <div class="form-style">
                                                    <label class="title-select">Keyword</label>
                                                    <input type="text" class="form-control" placeholder="Search Keyword." value="" name="s" title="Search for" required="">
                                                </div>
                                                <div class="form-style">
                                                    <label class="title-select">Location</label>
                                                    <div class="group-ip ip-icon">
                                                        <input type="text" class="form-control" placeholder="Search Location" value="" name="s" title="Search for" required="">
                                                        <a href="#" class="icon-right icon-location"></a>
                                                    </div>
                                                </div>
                                                <div class="form-style">
                                                    <label class="title-select">Type</label>
                                                    <div class="group-select">
                                                        <div class="nice-select" tabindex="0"><span class="current">All</span>
                                                            <ul class="list">  
                                                                <li data-value class="option selected">All</li>                                                        
                                                                <li data-value="villa" class="option">Villa</li>
                                                                <li data-value="studio" class="option">Studio</li>
                                                                <li data-value="office" class="option">Office</li>
                                                            </ul>
                                                        </div>
                                                    </div>                                                    
                                                </div>
                                                <div class="form-style box-select">
                                                    <label class="title-select">Rooms</label>
                                                    <div class="nice-select" tabindex="0"><span class="current">2</span>
                                                        <ul class="list"> 
                                                            <li data-value="2" class="option">1</li>
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
                                                <div class="form-style box-select">
                                                    <label class="title-select">Bathrooms</label>
                                                    <div class="nice-select" tabindex="0"><span class="current">4</span>
                                                        <ul class="list"> 
                                                            <li data-value="all" class="option">All</li>
                                                            <li data-value="1" class="option">1</li>
                                                            <li data-value="2" class="option">2</li>
                                                            <li data-value="3" class="option">3</li>
                                                            <li data-value="4" class="option selected">4</li>
                                                            <li data-value="5" class="option">5</li>
                                                            <li data-value="6" class="option">6</li>
                                                            <li data-value="7" class="option">7</li>
                                                            <li data-value="8" class="option">8</li>
                                                            <li data-value="9" class="option">9</li>
                                                            <li data-value="10" class="option">10</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="form-style box-select">
                                                    <label class="title-select">Bedrooms</label>
                                                    <div class="nice-select" tabindex="0"><span class="current">4</span>
                                                        <ul class="list"> 
                                                            <li data-value="1" class="option">All</li>
                                                            <li data-value="1" class="option">1</li>
                                                            <li data-value="2" class="option">2</li>
                                                            <li data-value="3" class="option">3</li>
                                                            <li data-value="4" class="option selected">4</li>
                                                            <li data-value="5" class="option">5</li>
                                                            <li data-value="6" class="option">6</li>
                                                            <li data-value="7" class="option">7</li>
                                                            <li data-value="8" class="option">8</li>
                                                            <li data-value="9" class="option">9</li>
                                                            <li data-value="10" class="option">10</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="form-style widget-price">
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
                                                        <input type="hidden" name="min-value" value="">
                                                        <input type="hidden" name="max-value" value="">                                                                                  
                                                    </div>
                                                </div>
                                                <div class="form-style widget-price wd-price-2">
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
                                                        <input type="hidden" name="min-value2" value="">
                                                        <input type="hidden" name="max-value2" value="">      
                                                    </div>
                                                </div>
                                                <div class="form-style btn-show-advanced">
                                                    <a class="filter-advanced pull-right">
                                                         <span class="icon icon-faders"></span> 
                                                         <span class="text-advanced">Show Advanced</span>                                                                      
                                                    </a>
                                                </div>
                                                <div class="form-style wd-amenities">
                                                    <div class="group-checkbox">
                                                        <div class="text-1">Amenities:</div>
                                                        <div class="group-amenities">
                                                            <fieldset class="amenities-item">
                                                                <input type="checkbox" class="tf-checkbox style-1" id="cb1" checked> 
                                                                <label for="cb1" class="text-cb-amenities">Air Condition</label>
                                                            </fieldset>
                                                            <fieldset class="amenities-item">
                                                                <input type="checkbox" class="tf-checkbox style-1" id="cb2"> 
                                                                <label for="cb2" class="text-cb-amenities">Disabled Access</label>
                                                            </fieldset>
                                                            <fieldset class="amenities-item">
                                                                <input type="checkbox" class="tf-checkbox style-1" id="cb3"> 
                                                                <label for="cb3" class="text-cb-amenities">Ceiling Height</label>
                                                            </fieldset>
                                                            <fieldset class="amenities-item">
                                                                <input type="checkbox" class="tf-checkbox style-1" id="cb4" checked> 
                                                                <label for="cb4" class="text-cb-amenities">Floor</label>
                                                            </fieldset>
                                                            <fieldset class="amenities-item">
                                                                <input type="checkbox" class="tf-checkbox style-1" id="cb5"> 
                                                                <label for="cb5" class="text-cb-amenities">Heating</label>
                                                            </fieldset>
                                                            <fieldset class="amenities-item">
                                                                <input type="checkbox" class="tf-checkbox style-1" id="cb6"> 
                                                                <label for="cb6" class="text-cb-amenities">Renovation</label>
                                                            </fieldset>
                                                            <fieldset class="amenities-item">
                                                                <input type="checkbox" class="tf-checkbox style-1" id="cb7"> 
                                                                <label for="cb7" class="text-cb-amenities">Window Type</label>
                                                            </fieldset>
                                                            <fieldset class="amenities-item">
                                                                <input type="checkbox" class="tf-checkbox style-1" id="cb8"> 
                                                                <label for="cb8" class="text-cb-amenities">Cable TV</label>
                                                            </fieldset>
                                                            <fieldset class="amenities-item">
                                                                <input type="checkbox" class="tf-checkbox style-1" id="cb9" checked> 
                                                                <label for="cb9" class="text-cb-amenities">Elevator</label>
                                                            </fieldset>
                                                            <fieldset class="amenities-item">
                                                                <input type="checkbox" class="tf-checkbox style-1" id="cb10"> 
                                                                <label for="cb10" class="text-cb-amenities">Furnishing</label>
                                                            </fieldset>
                                                            <fieldset class="amenities-item">
                                                                <input type="checkbox" class="tf-checkbox style-1" id="cb11"> 
                                                                <label for="cb11" class="text-cb-amenities">Intercom</label>
                                                            </fieldset>
                                                            <fieldset class="amenities-item">
                                                                <input type="checkbox" class="tf-checkbox style-1" id="cb12"> 
                                                                <label for="cb12" class="text-cb-amenities">Security</label>
                                                            </fieldset>
                                                            <fieldset class="amenities-item">
                                                                <input type="checkbox" class="tf-checkbox style-1" id="cb13"> 
                                                                <label for="cb13" class="text-cb-amenities">Search property</label>
                                                            </fieldset>
                                                            <fieldset class="amenities-item">
                                                                <input type="checkbox" class="tf-checkbox style-1" id="cb14"> 
                                                                <label for="cb14" class="text-cb-amenities">Ceiling Height</label>
                                                            </fieldset>
                                                            <fieldset class="amenities-item">
                                                                <input type="checkbox" class="tf-checkbox style-1" id="cb15"> 
                                                                <label for="cb15" class="text-cb-amenities">Fence</label>
                                                            </fieldset>
                                                            <fieldset class="amenities-item">
                                                                <input type="checkbox" class="tf-checkbox style-1" id="cb16"> 
                                                                <label for="cb16" class="text-cb-amenities">Fence</label>
                                                            </fieldset>
                                                            <fieldset class="amenities-item">
                                                                <input type="checkbox" class="tf-checkbox style-1" id="cb17" checked> 
                                                                <label for="cb17" class="text-cb-amenities">Garage</label>
                                                            </fieldset>
                                                            <fieldset class="amenities-item">
                                                                <input type="checkbox" class="tf-checkbox style-1" id="cb18"> 
                                                                <label for="cb18" class="text-cb-amenities">Parking</label>
                                                            </fieldset>
                                                            <fieldset class="amenities-item">
                                                                <input type="checkbox" class="tf-checkbox style-1" id="cb19"> 
                                                                <label for="cb19" class="text-cb-amenities">Swimming Pool</label>
                                                            </fieldset>
                                                            <fieldset class="amenities-item">
                                                                <input type="checkbox" class="tf-checkbox style-1" id="cb20"> 
                                                                <label for="cb20" class="text-cb-amenities">Construction Year</label>
                                                            </fieldset>
                                                            <fieldset class="amenities-item">
                                                                <input type="checkbox" class="tf-checkbox style-1" id="cb21"> 
                                                                <label for="cb21" class="text-cb-amenities">Fireplace</label>
                                                            </fieldset>
                                                            <fieldset class="amenities-item">
                                                                <input type="checkbox" class="tf-checkbox style-1" id="cb22"> 
                                                                <label for="cb22" class="text-cb-amenities">Garden</label>
                                                            </fieldset>
                                                            <fieldset class="amenities-item">
                                                                <input type="checkbox" class="tf-checkbox style-1" id="cb23"> 
                                                                <label for="cb23" class="text-cb-amenities">Pet Friendly</label>
                                                            </fieldset>
                                                            <fieldset class="amenities-item">
                                                                <input type="checkbox" class="tf-checkbox style-1" id="cb24"> 
                                                                <label for="cb24" class="text-cb-amenities">WiFi</label>
                                                            </fieldset>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                                <div class="form-style btn-hide-advanced">
                                                    <a class="filter-advanced pull-right">
                                                         <span class="icon icon-faders"></span> 
                                                         <span class="text-advanced">Hide Advanced</span>                                                                      
                                                    </a>
                                                </div>
                                                <div class="form-style">
                                                    <button type="submit" class="tf-btn primary" href="#">Find Properties</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="widget-box bg-surface box-latest-property">
                        <div class="h7 fw-7 title">Latest Propeties</div>
                        <ul>
                            <li class="latest-property-item">
                                <a href="property-details-v1.html" class="images-style">
                                    <img src="images/home/house-sm-3.jpg" alt="img">
                                </a>
                                <div class="content">
                                    <div class="h7 text-capitalize fw-7"><a href="property-details-v1.html" class="link">Casa Lomas de Mach...</a></div>
                                    <ul class="meta-list">
                                        <li class="item">
                                            <span>Bed:</span>
                                            <span class="fw-7">4</span>
                                        </li>
                                        <li class="item">
                                            <span>Bath:</span>
                                            <span class="fw-7">2</span>
                                        </li>
                                        <li class="item">
                                            <span class="fw-7">600 SqFT</span>
                                        </li>
                                    </ul>
                                    <div class="d-flex align-items-center">
                                        <div class="h7 fw-7">$5050,00</div>
                                        <span class="text-variant-1">/SqFT</span>
                                    </div>
                                </div>
                            </li>
                            <li class="latest-property-item">
                                <a href="property-details-v1.html" class="images-style">
                                    <img src="images/home/house-sm-9.jpg" alt="img">
                                </a>
                                <div class="content">
                                    <div class="h7 text-capitalize fw-7"><a href="property-details-v1.html" class="link">Lakeview Haven...</a></div>
                                    <ul class="meta-list">
                                        <li class="item">
                                            <span>Bed:</span>
                                            <span class="fw-7">4</span>
                                        </li>
                                        <li class="item">
                                            <span>Bath:</span>
                                            <span class="fw-7">2</span>
                                        </li>
                                        <li class="item">
                                            <span class="fw-7">600 SqFT</span>
                                        </li>
                                    </ul>
                                    <div class="d-flex align-items-center">
                                        <div class="h7 fw-7">$5050,00</div>
                                        <span class="text-variant-1">/SqFT</span>
                                    </div>
                                </div>
                            </li>
                            <li class="latest-property-item">
                                <a href="property-details-v1.html" class="images-style">
                                    <img src="images/home/house-sm-1.jpg" alt="img">
                                </a>
                                <div class="content">
                                    <div class="h7 text-capitalize fw-7"><a href="property-details-v1.html" class="link">Sunset Heights Estate</a></div>
                                    <ul class="meta-list">
                                        <li class="item">
                                            <span>Bed:</span>
                                            <span class="fw-7">4</span>
                                        </li>
                                        <li class="item">
                                            <span>Bath:</span>
                                            <span class="fw-7">2</span>
                                        </li>
                                        <li class="item">
                                            <span class="fw-7">600 SqFT</span>
                                        </li>
                                    </ul>
                                    <div class="d-flex align-items-center">
                                        <div class="h7 fw-7">$5050,00</div>
                                        <span class="text-variant-1">/SqFT</span>
                                    </div>
                                </div>
                            </li>
                            <li class="latest-property-item">
                                <a href="property-details-v1.html" class="images-style">
                                    <img src="images/home/house-sm-4.jpg" alt="img">
                                </a>
                                <div class="content">
                                    <div class="h7 text-capitalize fw-7"><a href="property-details-v1.html" class="link">de Machalí Machas...</a></div>
                                    <ul class="meta-list">
                                        <li class="item">
                                            <span>Bed:</span>
                                            <span class="fw-7">4</span>
                                        </li>
                                        <li class="item">
                                            <span>Bath:</span>
                                            <span class="fw-7">2</span>
                                        </li>
                                        <li class="item">
                                            <span class="fw-7">600 SqFT</span>
                                        </li>
                                    </ul>
                                    <div class="d-flex align-items-center">
                                        <div class="h7 fw-7">$5050,00</div>
                                        <span class="text-variant-1">/SqFT</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        
                        
                    </div>
                </div>
                
            </div>
            <div class="col-xl-8 col-lg-7">
                <div class="tab-content">
                    <div class="tab-pane fade active show" id="gridLayout" role="tabpanel">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="homeya-box">
                                    <div class="archive-top">
                                        <a href="property-details-v1.html" class="images-group">
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
                                            <div class="h7 text-capitalize fw-7"><a href="property-details-v1.html" class="link"> Casa Lomas de Machalí Machas</a></div>
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
                            <div class="col-md-6">
                                <div class="homeya-box">
                                    <div class="archive-top">
                                        <a href="property-details-v1.html" class="images-group">
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
                                            <div class="h7 text-capitalize fw-7"><a href="property-details-v1.html" class="link">Villa del Mar Retreat, Malibu</a></div>
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
                            <div class="col-md-6">
                                <div class="homeya-box">
                                    <div class="archive-top">
                                        <a href="property-details-v1.html" class="images-group">
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
                                            <div class="h7 text-capitalize fw-7"><a href="property-details-v1.html" class="link">Rancho Vista Verde, Santa Barbara</a></div>
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
                            <div class="col-md-6">
                                <div class="homeya-box">
                                    <div class="archive-top">
                                        <a href="property-details-v1.html" class="images-group">
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
                                            <div class="h7 text-capitalize fw-7"><a href="property-details-v1.html" class="link">Sunset Heights Estate, Beverly Hills</a></div>
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
                            <div class="col-md-6">
                                <div class="homeya-box">
                                    <div class="archive-top">
                                        <a href="property-details-v1.html" class="images-group">
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
                                            <div class="h7 text-capitalize fw-7"><a href="property-details-v1.html" class="link">Coastal Serenity Cottage</a></div>
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
                            <div class="col-md-6">
                                <div class="homeya-box">
                                    <div class="archive-top">
                                        <a href="property-details-v1.html" class="images-group">
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
                                            <div class="h7 text-capitalize fw-7"><a href="property-details-v1.html" class="link">Lakeview Haven, Lake Tahoe</a></div>
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
                            <div class="col-md-6">
                                <div class="homeya-box">
                                    <div class="archive-top">
                                        <a href="property-details-v1.html" class="images-group">
                                            <div class="images-style">
                                                <img src="images/home/house-11.jpg" alt="img">
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
                                            <div class="h7 text-capitalize fw-7"><a href="property-details-v1.html" class="link">Sunset Heights Estate, Beverly Hills</a></div>
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
                            <div class="col-md-6">
                                <div class="homeya-box">
                                    <div class="archive-top">
                                        <a href="property-details-v1.html" class="images-group">
                                            <div class="images-style">
                                                <img src="images/home/house-12.jpg" alt="img">
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
                                            <div class="h7 text-capitalize fw-7"><a href="property-details-v1.html" class="link">Coastal Serenity Cottage</a></div>
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
                                                <img src="images/avatar/avt-12.jpg" alt="avt">
                                            </div>
                                            <span>Kathryn Murphy</span>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <h6>$2050,00</h6>
                                            <span class="text-variant-1">/SqFT</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <ul class="wd-navigation">
                            <li><a href="#" class="nav-item active">1</a></li>
                            <li><a href="#" class="nav-item">2</a></li>
                            <li><a href="#" class="nav-item">3</a></li>
                            <li><a href="#" class="nav-item"><i class="icon icon-arr-r"></i></a></li>
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="listLayout" role="tabpanel">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="homeya-box list-style-1 list-style-2">
                                    <a href="property-details-v1.html" class="images-group">
                                        <div class="images-style">
                                            <img src="images/home/house-9.jpg" alt="img">
                                        </div>
                                        <div class="top">
                                            <ul class="d-flex gap-4 flex-wrap">
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
                                        <div class="archive-top">
                                            <div class="h7 text-capitalize fw-7"><a href="property-details-v1.html" class="link">Casa Lomas de Machalí Machas</a></div>
                                            <div class="desc"><i class="icon icon-mapPin"></i><p>145 Brooklyn Ave, Califonia, New York</p> </div>
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
                                        <div class="d-flex justify-content-between align-items-center archive-bottom">
                                            <div class="d-flex gap-8 align-items-center">
                                                <div class="avatar avt-40 round">
                                                    <img src="images/avatar/avt-8.jpg" alt="avt">
                                                </div>
                                                <span>Jacob Jones</span>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <div class="h7 fw-7">$5050,00</div>
                                                <span class="text-variant-1">/SqFT</span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="homeya-box list-style-1 list-style-2">
                                    <a href="property-details-v1.html" class="images-group">
                                        <div class="images-style">
                                            <img src="images/home/house-10.jpg" alt="img">
                                        </div>
                                        <div class="top">
                                            <ul class="d-flex">
                                                <li class="flag-tag style-1">For Rent</li>
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
                                        <div class="archive-top">
                                            <div class="h7 text-capitalize fw-7"><a href="property-details-v1.html" class="link">Lakeview Haven, Lake Tahoe </a></div>
                                            <div class="desc"><i class="icon icon-mapPin"></i><p>145 Brooklyn Ave, Califonia, New York</p> </div>
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
                                        <div class="d-flex justify-content-between align-items-center archive-bottom">
                                            <div class="d-flex gap-8 align-items-center">
                                                <div class="avatar avt-40 round">
                                                    <img src="images/avatar/avt-10.jpg" alt="avt">
                                                </div>
                                                <span>Floyd Miles</span>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <div class="h7 fw-7">$250,00</div>
                                                <span class="text-variant-1">/month</span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="homeya-box list-style-1 list-style-2">
                                    <a href="property-details-v1.html" class="images-group">
                                        <div class="images-style">
                                            <img src="images/home/house-6.jpg" alt="img">
                                        </div>
                                        <div class="top">
                                            <ul class="d-flex">
                                             
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
                                        <div class="archive-top">
                                            <div class="h7 text-capitalize fw-7"><a href="property-details-v1.html" class="link">Sunset Heights Estate, Beverly Hills</a></div>
                                            <div class="desc"><i class="icon icon-mapPin"></i><p>145 Brooklyn Ave, Califonia, New York</p> </div>
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
                                        <div class="d-flex justify-content-between align-items-center archive-bottom">
                                            <div class="d-flex gap-8 align-items-center">
                                                <div class="avatar avt-40 round">
                                                    <img src="images/avatar/avt-5.jpg" alt="avt">
                                                </div>
                                                <span>Ralph Edwards</span>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <div class="h7 fw-7">$5050,00</div>
                                                <span class="text-variant-1">/SqFT</span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="homeya-box list-style-1 list-style-2">
                                    <a href="property-details-v1.html" class="images-group">
                                        <div class="images-style">
                                            <img src="images/home/house-5.jpg" alt="img">
                                        </div>
                                        <div class="top">
                                            <ul class="d-flex">
                                                <li class="flag-tag style-1">For Rent</li>
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
                                            <span class="flag-tag style-2">apartment</span>
                                        </div>
                                    </a>
                                    <div class="content">
                                        <div class="archive-top">
                                            <div class="h7 text-capitalize fw-7"><a href="property-details-v1.html" class="link">Lakeview Haven, Lake Tahoe</a></div>
                                            <div class="desc"><i class="icon icon-mapPin"></i><p>145 Brooklyn Ave, Califonia, New York</p> </div>
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
                                        <div class="d-flex justify-content-between align-items-center archive-bottom">
                                            <div class="d-flex gap-8 align-items-center">
                                                <div class="avatar avt-40 round">
                                                    <img src="images/avatar/avt-9.jpg" alt="avt">
                                                </div>
                                                <span>Annette Black</span>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <div class="h7 fw-7">$250,00</div>
                                                <span class="text-variant-1">/month</span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="homeya-box list-style-1 list-style-2">
                                    <a href="property-details-v1.html" class="images-group">
                                        <div class="images-style">
                                            <img src="images/home/house-1.jpg" alt="img">
                                        </div>
                                        <div class="top">
                                            <ul class="d-flex">
                                             
                                                <li class="flag-tag style-1">For Rent</li>
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
                                            <span class="flag-tag style-2">apartment</span>
                                        </div>
                                    </a>
                                    <div class="content">
                                        <div class="archive-top">
                                            <div class="h7 text-capitalize fw-7"><a href="property-details-v1.html" class="link">Casa Lomas de Machalí Machas</a></div>
                                            <div class="desc"><i class="icon icon-mapPin"></i><p>145 Brooklyn Ave, Califonia, New York</p> </div>
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
                                        <div class="d-flex justify-content-between align-items-center archive-bottom">
                                            <div class="d-flex gap-8 align-items-center">
                                                <div class="avatar avt-40 round">
                                                    <img src="images/avatar/avt-8.jpg" alt="avt">
                                                </div>
                                                <span>Jacob Jones</span>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <div class="h7 fw-7">$5050,00</div>
                                                <span class="text-variant-1">/SqFT</span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="homeya-box list-style-1 list-style-2">
                                    <a href="property-details-v1.html" class="images-group">
                                        <div class="images-style">
                                            <img src="images/home/house-13.jpg" alt="img">
                                        </div>
                                        <div class="top">
                                            <ul class="d-flex">
                                                <li class="flag-tag style-1">For Rent</li>
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
                                            <span class="flag-tag style-2">apartment</span>
                                        </div>
                                    </a>
                                    <div class="content">
                                        <div class="archive-top">
                                            <div class="h7 text-capitalize fw-7"><a href="property-details-v1.html" class="link">Lakeview Haven, Lake Tahoe</a></div>
                                            <div class="desc"><i class="icon icon-mapPin"></i><p>145 Brooklyn Ave, Califonia, New York</p> </div>
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
                                        <div class="d-flex justify-content-between align-items-center archive-bottom">
                                            <div class="d-flex gap-8 align-items-center">
                                                <div class="avatar avt-40 round">
                                                    <img src="images/avatar/avt-9.jpg" alt="avt">
                                                </div>
                                                <span>Annette Black</span>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <div class="h7 fw-7">$250,00</div>
                                                <span class="text-variant-1">/month</span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="homeya-box list-style-1 list-style-2">
                                    <a href="property-details-v1.html" class="images-group">
                                        <div class="images-style">
                                            <img src="images/home/house-4.jpg" alt="img">
                                        </div>
                                        <div class="top">
                                            <ul class="d-flex">
                                                <li class="flag-tag style-1">For Rent</li>
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
                                        <div class="archive-top">
                                            <div class="h7 text-capitalize fw-7"><a href="property-details-v1.html" class="link">Lakeview Haven, Lake Tahoe</a></div>
                                            <div class="desc"><i class="icon icon-mapPin"></i><p>145 Brooklyn Ave, Califonia, New York</p> </div>
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
                                        <div class="d-flex justify-content-between align-items-center archive-bottom">
                                            <div class="d-flex gap-8 align-items-center">
                                                <div class="avatar avt-40 round">
                                                    <img src="images/avatar/avt-9.jpg" alt="avt">
                                                </div>
                                                <span>Kathryn Murphy</span>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <div class="h7 fw-7">$250,00</div>
                                                <span class="text-variant-1">/month</span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <ul class="justify-content-center wd-navigation">
                            <li><a href="#" class="nav-item active">1</a></li>
                            <li><a href="#" class="nav-item">2</a></li>
                            <li><a href="#" class="nav-item">3</a></li>
                            <li><a href="#" class="nav-item"><i class="icon icon-arr-r"></i></a></li>
                        </ul>
                    </div>
                </div> 
            </div>
        </div>

        
        
    </div>
</section>
@endsection
