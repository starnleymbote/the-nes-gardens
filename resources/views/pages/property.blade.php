@extends('layouts.main')
@section('content')
<section class="flat-location flat-slider-detail-v1">
    <div class="swiper tf-sw-location" data-preview-lg="2.03" data-preview-md="2" data-preview-sm="2" data-space="20" data-centered="true" data-loop="true">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <a href="images/banner/banner-property-1.jpg" data-fancybox="gallery" class="box-imgage-detail d-block">
                    <img src="images/banner/banner-property-1.jpg" alt="img-property">
                </a>
            </div>
            <div class="swiper-slide">
                <a href="images/banner/banner-property-3.jpg" data-fancybox="gallery" class="box-imgage-detail d-block">
                    <img src="images/banner/banner-property-3.jpg" alt="img-property">
                </a>
            </div>
            <div class="swiper-slide">
                <a href="images/banner/banner-property-2.jpg" data-fancybox="gallery" class="box-imgage-detail d-block">
                    <img src="images/banner/banner-property-2.jpg" alt="img-property">
                </a>
            </div>
        </div>
        <div class="box-navigation">
            <div class="navigation swiper-nav-next nav-next-location"><span class="icon icon-arr-l"></span></div>
            <div class="navigation swiper-nav-prev nav-prev-location"><span class="icon icon-arr-r"></span></div> 
        </div>
        <!-- <div class="icon-box">
            <a href="#" class="item"><span class="icon icon-map-trifold"></span></a>
            <a href="images/banner/banner-property-1.jpg" class="item active" data-fancybox="gallery"><span class="icon icon-images"></span></a>
        </div> -->
    </div>
</section>

<section class="flat-section pt-0 flat-property-detail">
    <div class="container">
        <div class="header-property-detail">
            <div class="content-top d-flex justify-content-between align-items-center">
                <div class="box-name">
                    <a href="#" class="flag-tag primary">For Rent</a>
                    <h4 class="title link">Lakeview Haven, Lake Tahoe</h4>
                </div>
                <div class="box-price d-flex align-items-center">
                    <h4>$250,00</h4>
                    <span class="body-1 text-variant-1">/month</span>
                </div>
            </div>
            <div class="content-bottom">
                <div class="info-box">
                    <div class="label">FEATUREs:</div>
                    <ul class="meta">
                        <li class="meta-item"><span class="icon icon-bed"></span> 2 Bedroom</li>
                        <li class="meta-item"><span class="icon icon-bathtub"></span> 2 Bathroom</li>
                        <li class="meta-item"><span class="icon icon-ruler"></span> 6,000 SqFT</li>
                    </ul>
                </div>
                <div class="info-box">
                    <div class="label">LOCATION:</div>
                    <p class="meta-item"><span class="icon icon-mapPin"></span> 8 Broadway, Brooklyn, New York</p>
                </div>
                <ul class="icon-box">
                    <li><a href="#" class="item"><span class="icon icon-arrLeftRight"></span> </a></li>
                    <li><a href="#" class="item"><span class="icon icon-share"></span></a></li>
                    <li><a href="#" class="item"><span class="icon icon-heart"></span></a></li>
                </ul>

            </div>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <div class="single-property-element single-property-desc">
                    <div class="h7 title fw-7">Description</div>
                    <p class="body-2 text-variant-1">Located around an hour away from Paris, between the Perche and the Iton valley, in a beautiful wooded park bordered by a charming stream, this country property immediately seduces with its bucolic and soothing environment.</p>
                    <p class="mt-8 body-2 text-variant-1">An ideal choice for sports and leisure enthusiasts who will be able to take advantage of its swimming pool (11m x 5m), tennis court, gym and sauna.</p>
                    <a href="#" class="btn-view"><span class="text">View More</span> </a>
                </div>
                <div class="single-property-element single-property-overview">
                    <div class="h7 title fw-7">Overview</div>
                    <ul class="info-box">
                        <li class="item">
                            <a href="#" class="box-icon w-52"><i class="icon icon-house-line"></i></a>
                            <div class="content">
                                <span class="label">ID:</span>
                                <span>2297</span>
                            </div>
                        </li>
                        <li class="item">
                            <a href="#" class="box-icon w-52"><i class="icon icon-arrLeftRight"></i></a>
                            <div class="content">
                                <span class="label">Type:</span>
                                <span>House</span>
                            </div>
                        </li>
                        <li class="item">
                            <a href="#" class="box-icon w-52"><i class="icon icon-bed"></i></a>
                            <div class="content">
                                <span class="label">Bedrooms:</span>
                                <span>2 Rooms</span>
                            </div>
                        </li>
                        <li class="item">
                            <a href="#" class="box-icon w-52"><i class="icon icon-bathtub"></i></a>
                            <div class="content">
                                <span class="label">Bathrooms:</span>
                                <span>2 Rooms</span>
                            </div>
                        </li>
                        <li class="item">
                            <a href="#" class="box-icon w-52"><i class="icon icon-garage"></i></a>
                            <div class="content">
                                <span class="label">Garages:</span>
                                <span>2 Rooms</span>
                            </div>
                        </li>
                        <li class="item">
                            <a href="#" class="box-icon w-52"><i class="icon icon-ruler"></i></a>
                            <div class="content">
                                <span class="label">Size:</span>
                                <span>900 SqFt</span>
                            </div>
                        </li>
                        <li class="item">
                            <a href="#" class="box-icon w-52"><i class="icon icon-crop"></i></a>
                            <div class="content">
                                <span class="label">Land Size:</span>
                                <span>2,000 SqFt</span>
                            </div>
                        </li>
                        <li class="item">
                            <a href="#" class="box-icon w-52"><i class="icon icon-hammer"></i></a>
                            <div class="content">
                                <span class="label">Year Built:</span>
                                <span>2024</span>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="single-property-element single-property-video">
                    <div class="h7 title fw-7">Video</div>
                    <div class="img-video">
                        <img src="images/banner/img-video.jpg" alt="img-video">
                        <a href="https://youtu.be/MLpWrANjFbI" data-fancybox="gallery2" class="btn-video"> <span class="icon icon-play"></span></a>
                    </div>
                </div>
                <div class="single-property-element single-property-info">
                    <div class="h7 title fw-7">Property Details</div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="inner-box">
                                <span class="label">Property ID:</span>
                                <div class="content fw-7">AVT1020</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="inner-box">
                                <span class="label">Bedrooms:</span>
                                <div class="content fw-7">4</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="inner-box">
                                <span class="label">Price:</span>
                                <div class="content fw-7">$250,00<span class="caption-1 fw-4 text-variant-1">/month</span></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="inner-box">
                                <span class="label">Bedrooms:</span>
                                <div class="content fw-7">1</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="inner-box">
                                <span class="label">Property Size:</span>
                                <div class="content fw-7">1200 SqFt</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="inner-box">
                                <span class="label">Bathsrooms:</span>
                                <div class="content fw-7">1</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="inner-box">
                                <span class="label">Year built:</span>
                                <div class="content fw-7">2023 - 12 - 11</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="inner-box">
                                <span class="label">Bathsrooms:</span>
                                <div class="content fw-7">3</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="inner-box">
                                <span class="label">Property Type:</span>
                                <div class="content fw-7">House, Apartment</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="inner-box">
                                <span class="label">Garage:</span>
                                <div class="content fw-7">1</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="inner-box">
                                <span class="label">Property Status:</span>
                                <div class="content fw-7">For Rent</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="inner-box">
                                <span class="label">Garage Size:</span>
                                <div class="content fw-7">1200 SqFt</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-property-element single-property-feature">
                    <div class="h7 title fw-7">Amenities and features</div>
                    <div class="wrap-feature">
                        <div class="box-feature">
                            <div class="fw-7">Home safety:</div>
                            <ul>
                                <li class="feature-item">
                                    <span class="icon icon-smoke-alarm"></span>
                                    Smoke alarm
                                </li>
                                <li class="feature-item">
                                    <span class="icon icon-carbon"></span>
                                    Carbon monoxide alarm
                                </li>
                                <li class="feature-item">
                                    <span class="icon icon-kit"></span>
                                    First aid kit
                                </li>
                                <li class="feature-item">
                                    <span class="icon icon-lockbox"></span>
                                    Self check-in with lockbox
                                </li>
                                <li class="feature-item">
                                    <span class="icon icon-security"></span>
                                    Security cameras
                                </li>
                            </ul>
                        </div>
                        <div class="box-feature">
                            <div class="fw-7">Bedroom:</div>
                            <ul>
                                <li class="feature-item">
                                    <span class="icon icon-hanger"></span>
                                    Hangers
                                </li>
                                <li class="feature-item">
                                    <span class="icon icon-bed-line"></span>
                                    Bed linens
                                </li>
                                <li class="feature-item">
                                    <span class="icon icon-pillows"></span>
                                    Extra pillows & blankets
                                </li>
                                <li class="feature-item">
                                    <span class="icon icon-iron"></span>
                                    Iron
                                </li>
                                <li class="feature-item">
                                    <span class="icon icon-tv"></span>
                                    TV with standard cable
                                </li>
                            </ul>
                        </div>
                        <div class="box-feature">
                            <div class="fw-7">Kitchen:</div>
                            <ul>
                                <li class="feature-item">
                                    <span class="icon icon-refrigerator"></span>
                                    Refrigerator
                                </li>
                                <li class="feature-item">
                                    <span class="icon icon-microwave"></span>
                                    Microwave
                                </li>
                                <li class="feature-item">
                                    <span class="icon icon-microwave"></span>
                                    Dishwasher
                                </li>
                                <li class="feature-item">
                                    <span class="icon icon-coffee"></span>
                                    Coffee maker
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="single-property-element single-property-map">
                    <div class="h7 title fw-7">Map</div>
                    <div id="map-single" class="map-single"  data-map-zoom="16" data-map-scroll="true"></div>
                    <ul class="info-map">
                        <li>
                            <div class="fw-7">Address</div>
                            <span class="mt-4 text-variant-1">8 Broadway, Brooklyn, New York</span>
                        </li>
                        <li>
                            <div class="fw-7">Downtown</div>
                            <span class="mt-4 text-variant-1">5 min</span>

                        </li>
                        <li>
                            <div class="fw-7">FLL</div>
                            <span class="mt-4 text-variant-1">15 min</span>
                        </li>
                    </ul>
                </div>
                <div class="single-property-element single-property-floor">
                    <div class="h7 title fw-7">Floor plans</div>
                    <ul class="box-floor" id="parent-floor">
                        <li class="floor-item">
                            <div class="floor-header" data-bs-target="#floor-one" data-bs-toggle="collapse" aria-expanded="false" aria-controls="floor-one">
                                <div class="inner-left">
                                    <i class="icon icon-arr-r"></i>
                                    <span class="fw-7">First Floor</span>
                                </div>
                                <ul class="inner-right">
                                    <li class="d-flex align-items-center gap-8">
                                        <i class="icon icon-bed"></i>
                                        2 Bedroom
                                    </li>
                                    <li class="d-flex align-items-center gap-8">
                                        <i class="icon icon-bathtub"></i>
                                        2 Bathroom
                                    </li>
                                </ul>
                            </div>
                            <div id="floor-one" class="collapse show" data-bs-parent="#parent-floor">
                                <div class="faq-body">
                                    <div class="box-img">
                                        <img src="images/banner/floor.png" alt="img-floor">
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="floor-item">
                            <div class="floor-header collapsed" data-bs-target="#floor-two" data-bs-toggle="collapse" aria-expanded="false" aria-controls="floor-two">
                                <div class="inner-left">
                                    <i class="icon icon-arr-r"></i>
                                    <span class="fw-7">Second Floor</span>
                                </div>
                                <ul class="inner-right">
                                    <li class="d-flex align-items-center gap-8">
                                        <i class="icon icon-bed"></i>
                                        2 Bedroom
                                    </li>
                                    <li class="d-flex align-items-center gap-8">
                                        <i class="icon icon-bathtub"></i>
                                        2 Bathroom
                                    </li>
                                </ul>
                            </div>
                            <div id="floor-two" class="collapse" data-bs-parent="#parent-floor">
                                <div class="faq-body">
                                    <div class="box-img">
                                        <img src="images/banner/floor.png" alt="img-floor">
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div> 
                <div class="single-property-element single-property-attachments">
                    <div class="h7 title fw-7">File Attachments</div>
                    <div class="row">
                        <div class="col-sm-6">
                            <a href="#" target="_blank" class="attachments-item">
                                <div class="box-icon w-60">
                                    <img src="images/home/file-1.png" alt="file">
                                </div>
                                <span>Villa-Document.pdf</span>
                                <i class="icon icon-download"></i>
                            </a>
                        </div>
                        <div class="col-sm-6">
                            <a href="#" target="_blank" class="attachments-item">
                                <div class="box-icon w-60">
                                    <img src="images/home/file-2.png" alt="file">
                                </div>
                                <span>Villa-Document.pdf</span>
                                <i class="icon icon-download"></i>
                            </a>
                        </div>
                    </div>
                </div> 
                <div class="single-property-element single-property-explore">
                    <div class="h7 title fw-7">Explore Property</div>
                    <div class="box-img">
                        <img src="images/banner/img-explore.jpg" alt="img">
                        <div class="box-icon w-80">
                            <span class="icon icon-360"></span>
                        </div>
                    </div>
                </div>
                <div class="single-property-element single-property-loan">
                    <div class="h7 title fw-7">Loan Calculator</div>
                    <form action="#" class="box-loan-calc">
                        <div class="box-top">
                            <div class="item-calc">
                                <label for="loan1" class="label">Total Amount:</label>
                                <input type="number" id="loan1" placeholder="10,000" class="form-control">
                            </div>
                            <div class="item-calc">
                                <label for="loan1" class="label">Down Payment:</label>
                                <input type="number" id="loan1" placeholder="3000" class="form-control">
                            </div>
                            <div class="item-calc">
                                <label for="loan1" class="label">Amortization Period (months):</label>
                                <input type="number" id="loan1" placeholder="12" class="form-control">
                            </div>
                            <div class="item-calc">
                                <label for="loan1" class="label">Interest rate (%):</label>
                                <input type="number" id="loan1" placeholder="5" class="form-control">
                            </div>
                        </div>
                        <div class="box-bottom">
                            <button class="tf-btn primary">Calculator</button>
                            <div class="d-flex gap-4">
                                <span class="h7 fw-7">Monthly Payment:</span>
                                <span class="result h7 fw-7">$599.25</span>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="single-property-element single-property-nearby">
                    <div class="h7 title fw-7">What’s nearby?</div>
                    <p class="body-2">Explore nearby amenities to precisely locate your property and identify surrounding conveniences, providing a comprehensive overview of the living environment and the property's convenience.</p>
                    <div class="grid-2 box-nearby">
                        <ul class="box-left">
                            <li class="item-nearby">
                                <span class="label">School:</span>
                                <span class="fw-7">0.7 km</span>
                            </li>
                            <li class="item-nearby">
                                <span class="label">University:</span>
                                <span class="fw-7">1.3 km</span>
                            </li>
                            <li class="item-nearby">
                                <span class="label">Grocery center:</span>
                                <span class="fw-7">0.6 km</span>
                            </li>
                            <li class="item-nearby">
                                <span class="label">Market:</span>
                                <span class="fw-7">1.1 km</span>
                            </li>
                        </ul>
                        <ul class="box-right">
                            <li class="item-nearby">
                                <span class="label">Hospital:</span>
                                <span class="fw-7">0.4 km</span>
                            </li>
                            <li class="item-nearby">
                                <span class="label">Metro station:</span>
                                <span class="fw-7">1.8 km</span>
                            </li>
                            <li class="item-nearby">
                                <span class="label">Gym, wellness:</span>
                                <span class="fw-7">1.3 km</span>
                            </li>
                            <li class="item-nearby">
                                <span class="label">River:</span>
                                <span class="fw-7">2.1 km</span>
                            </li>
                        </ul>
                    </div>
                    
                </div>
                <div class="single-property-element single-wrapper-review">
                    <div class="box-title-review d-flex justify-content-between align-items-center flex-wrap gap-20">
                        <div class="h7 fw-7">Guest Reviews</div>
                        <a href="#" class="tf-btn">View All Reviews</a>
                    </div>
                    <div class="wrap-review">
                        <ul class="box-review">
                            <li class="list-review-item">
                                <div class="avatar avt-60 round">
                                    <img src="images/avatar/avt-2.jpg" alt="avatar">
                                </div>
                                <div class="content">
                                    <div class="name h7 fw-7 text-black">Viola Lucas
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M0 8C0 12.4112 3.5888 16 8 16C12.4112 16 16 12.4112 16 8C16 3.5888 12.4112 0 8 0C3.5888 0 0 3.5888 0 8ZM12.1657 6.56569C12.4781 6.25327 12.4781 5.74673 12.1657 5.43431C11.8533 5.1219 11.3467 5.1219 11.0343 5.43431L7.2 9.26863L5.36569 7.43431C5.05327 7.12189 4.54673 7.12189 4.23431 7.43431C3.9219 7.74673 3.9219 8.25327 4.23431 8.56569L6.63432 10.9657C6.94673 11.2781 7.45327 11.2781 7.76569 10.9657L12.1657 6.56569Z"
                                                fill="#198754" />
                                        </svg>
                                    </div>
                                    <span class="mt-4 d-inline-block  date body-3 text-variant-2">August 13,
                                        2023</span>
                                    <ul class="mt-8 list-star">
                                        <li class="icon-star"></li>
                                        <li class="icon-star"></li>
                                        <li class="icon-star"></li>
                                        <li class="icon-star"></li>
                                        <li class="icon-star"></li>
                                    </ul>
                                    <p class="mt-12 body-2 text-black">It's really easy to use and it is
                                        exactly what I am looking for. A lot of good looking templates &
                                        it's highly customizable. Live support is helpful, solved my issue
                                        in no time.</p>
                                    <ul class="box-img-review">
                                        <li>
                                            <a href="#" class="img-review">
                                                <img src="images/blog/review1.jpg" alt="img-review">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="img-review">
                                                <img src="images/blog/review2.jpg" alt="img-review">

                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="img-review">
                                                <img src="images/blog/review3.jpg" alt="img-review">

                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="img-review">
                                                <img src="images/blog/review4.jpg" alt="img-review">

                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="img-review">
                                                <span class="fw-7">+12</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="list-review-item">
                                <div class="avatar avt-60 round">
                                    <img src="images/avatar/avt-3.jpg" alt="avatar">
                                </div>
                                <div class="content">
                                    <div class="name h7 fw-7 text-black">Viola Lucas
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M0 8C0 12.4112 3.5888 16 8 16C12.4112 16 16 12.4112 16 8C16 3.5888 12.4112 0 8 0C3.5888 0 0 3.5888 0 8ZM12.1657 6.56569C12.4781 6.25327 12.4781 5.74673 12.1657 5.43431C11.8533 5.1219 11.3467 5.1219 11.0343 5.43431L7.2 9.26863L5.36569 7.43431C5.05327 7.12189 4.54673 7.12189 4.23431 7.43431C3.9219 7.74673 3.9219 8.25327 4.23431 8.56569L6.63432 10.9657C6.94673 11.2781 7.45327 11.2781 7.76569 10.9657L12.1657 6.56569Z"
                                                fill="#198754" />
                                        </svg>
                                    </div>
                                    <span class="mt-4 d-inline-block  date body-3 text-variant-2">August 13,
                                        2023</span>
                                    <ul class="mt-8 list-star">
                                        <li class="icon-star"></li>
                                        <li class="icon-star"></li>
                                        <li class="icon-star"></li>
                                        <li class="icon-star"></li>
                                        <li class="icon-star"></li>
                                    </ul>
                                    <p class="mt-12 body-2 text-black">It's really easy to use and it is
                                        exactly what I am looking for. A lot of good looking templates &
                                        it's highly customizable. Live support is helpful, solved my issue
                                        in no time.</p>
                                    
                                </div>
                            </li>
                            <li class="list-review-item">
                                <div class="avatar avt-60 round">
                                    <img src="images/avatar/avt-4.jpg" alt="avatar">
                                </div>
                                <div class="content">
                                    <div class="name h7 fw-7 text-black">Darlene Robertson
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M0 8C0 12.4112 3.5888 16 8 16C12.4112 16 16 12.4112 16 8C16 3.5888 12.4112 0 8 0C3.5888 0 0 3.5888 0 8ZM12.1657 6.56569C12.4781 6.25327 12.4781 5.74673 12.1657 5.43431C11.8533 5.1219 11.3467 5.1219 11.0343 5.43431L7.2 9.26863L5.36569 7.43431C5.05327 7.12189 4.54673 7.12189 4.23431 7.43431C3.9219 7.74673 3.9219 8.25327 4.23431 8.56569L6.63432 10.9657C6.94673 11.2781 7.45327 11.2781 7.76569 10.9657L12.1657 6.56569Z"
                                                fill="#198754" />
                                        </svg>
                                    </div>
                                    <span class="mt-4 d-inline-block  date body-3 text-variant-2">August 13, 2023</span>
                                    <ul class="mt-8 list-star">
                                        <li class="icon-star"></li>
                                        <li class="icon-star"></li>
                                        <li class="icon-star"></li>
                                        <li class="icon-star"></li>
                                        <li class="icon-star"></li>
                                    </ul>
                                    <p class="mt-12 body-2 text-black">It's really easy to use and it is
                                        exactly what I am looking for. A lot of good looking templates &
                                        it's highly customizable. Live support is helpful, solved my issue
                                        in no time.</p>
                                  
                                </div>
                            </li>
                            <li class="list-review-item">
                                <div class="avatar avt-60 round">
                                    <img src="images/avatar/avt-2.jpg" alt="avatar">
                                </div>
                                <div class="content">
                                    <div class="name h7 fw-7 text-black">Viola Lucas
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M0 8C0 12.4112 3.5888 16 8 16C12.4112 16 16 12.4112 16 8C16 3.5888 12.4112 0 8 0C3.5888 0 0 3.5888 0 8ZM12.1657 6.56569C12.4781 6.25327 12.4781 5.74673 12.1657 5.43431C11.8533 5.1219 11.3467 5.1219 11.0343 5.43431L7.2 9.26863L5.36569 7.43431C5.05327 7.12189 4.54673 7.12189 4.23431 7.43431C3.9219 7.74673 3.9219 8.25327 4.23431 8.56569L6.63432 10.9657C6.94673 11.2781 7.45327 11.2781 7.76569 10.9657L12.1657 6.56569Z"
                                                fill="#198754" />
                                        </svg>
                                    </div>
                                    <span class="mt-4 d-inline-block  date body-3 text-variant-2">August 13,
                                        2023</span>
                                    <ul class="mt-8 list-star">
                                        <li class="icon-star"></li>
                                        <li class="icon-star"></li>
                                        <li class="icon-star"></li>
                                        <li class="icon-star"></li>
                                        <li class="icon-star"></li>
                                    </ul>
                                    <p class="mt-12 body-2 text-black">It's really easy to use and it is
                                        exactly what I am looking for. A lot of good looking templates &
                                        it's highly customizable. Live support is helpful, solved my issue
                                        in no time.</p>
                                    <ul class="box-img-review">
                                        <li>
                                            <a href="#" class="img-review">
                                                <img src="images/blog/review1.jpg" alt="img-review">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="img-review">
                                                <img src="images/blog/review2.jpg" alt="img-review">

                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="img-review">
                                                <img src="images/blog/review3.jpg" alt="img-review">

                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="img-review">
                                                <img src="images/blog/review4.jpg" alt="img-review">

                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="img-review">
                                                <span class="fw-7">+12</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <a href="#" class="view-question">See more answered questions (719)</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="wrap-form-comment">
                        <div class="h7">Leave A Reply</div>
                        <div id="comments" class="comments">
                            <div class="respond-comment">
                                <form method="post" id="contactform" class="comment-form form-submit"
                                    action="https://themesflat.co/html/homzen/contact/contact-process.php" accept-charset="utf-8"
                                    novalidate="novalidate">
                                    
                                    <div class="form-wg group-ip">
                                        <fieldset>
                                            <label class="sub-ip">Name</label>
                                            <input type="text" class="form-control" name="text" placeholder="Your name" required="">
                                        </fieldset>
                                        <fieldset>
                                            <label class="sub-ip">Email</label>
                                            <input type="email" class="form-control" name="email" placeholder="Your email" required="">
                                        </fieldset>
                                    </div>
                                    <fieldset class="form-wg d-flex align-items-center gap-8">
                                        <input type="checkbox" class="tf-checkbox" id="cb-ip"> 
                                        <label for="cb-ip" class="text-black text-checkbox">Save your name, email for the next time review </label>
                                    </fieldset>
                                    <fieldset class="form-wg">
                                        <label class="sub-ip">Review</label>
                                        <textarea id="comment-message" name="message" rows="4" tabindex="4"
                                            placeholder="Write comment " aria-required="true"></textarea>
                                    </fieldset> 
                                    <button class="form-wg tf-btn primary" name="submit" type="submit">
                                        <span>Post Comment</span>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="widget-sidebar fixed-sidebar wrapper-sidebar-right">
                    <div class="widget-box single-property-contact bg-surface">
                        <div class="h7 title fw-7">Contact Sellers</div>
                        <div class="box-avatar">
                            <div class="avatar avt-100 round">
                                <img src="images/avatar/avt-12.jpg" alt="avatar">
                            </div>
                            <div class="info">
                                <div class="text-1 name">Shara Conner</div>
                                <span>1-333-345-6868 themesflat@gmail.com</span>
                            </div>
                        </div>
                        <form action="#" class="contact-form">
                            <div class="ip-group">
                                <label for="fullname">Full Name:</label>
                                <input type="text" placeholder="Jony Dane" class="form-control">
                            </div>
                            <div class="ip-group">
                                <label for="phone">Phone Number:</label>
                                <input type="text" placeholder="ex 0123456789" class="form-control">
                            </div>
                            <div class="ip-group">
                                <label for="email">Email Address:</label>
                                <input type="text" placeholder="themesflat@gmail.com" class="form-control">
                            </div>
                            <div class="ip-group">
                                <label for="message">Your Message:</label>
                                <textarea id="comment-message" name="message" rows="4" tabindex="4"
                                placeholder="Message" aria-required="true"></textarea>
                            </div>
                            <button class="tf-btn primary w-100">Send Message</button>
                        </form>
                    </div>
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
                    <div class="widget-box single-property-whychoose bg-surface">
                        <div class="h7 title fw-7">Why Choose Us?</div>
                        <ul class="box-whychoose">
                            <li class="item-why">
                                <i class="icon icon-secure"></i>
                                Secure Booking
                            </li>
                            <li class="item-why">
                                <i class="icon icon-guarantee"></i>
                                Best Price Guarantee
                            </li>
                            <li class="item-why">
                                <i class="icon icon-booking"></i>
                                Easy Booking Process
                            </li>
                            <li class="item-why">
                                <i class="icon icon-support"></i>
                                Available Support 24/7
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>

</section>
<section class="flat-section pt-0 flat-latest-property">
    <div class="container">
        <div class="box-title">
            <div class="text-subtitle text-primary">Featured properties</div>
            <h4 class="mt-4">The Most Recent Estate</h4>
        </div>
        <div class="swiper tf-latest-property" data-preview-lg="3" data-preview-md="2" data-preview-sm="2" data-space="30" data-loop="true">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="homeya-box style-2">
                        <div class="archive-top">
                            <a href="#" class="images-group">
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
                                <div class="h7 text-capitalize fw-7"><a href="#" class="link"> Sunset Heights Estate, Beverly Hills</a></div>
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
                <div class="swiper-slide">
                    <div class="homeya-box style-2">
                        <div class="archive-top">
                            <a href="#" class="images-group">
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
                                <div class="h7 text-capitalize fw-7"><a href="#" class="link">Coastal Serenity Cottage</a></div>
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
                                    <img src="images/avatar/avt-6.jpg" alt="avt">
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
                <div class="swiper-slide">
                    <div class="homeya-box style-2">
                        <div class="archive-top">
                            <a href="#" class="images-group">
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
                                <div class="h7 text-capitalize fw-7"><a href="#" class="link">Lakeview Haven, Lake Tahoe</a></div>
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
                                    <img src="images/avatar/avt-10.jpg" alt="avt">
                                </div>
                                <span>Floyd Miles</span>
                            </div>
                            <div class="d-flex align-items-center">
                                <h6>$250,00</h6>
                                <span class="text-variant-1">/month</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="homeya-box style-2">
                        <div class="archive-top">
                            <a href="#" class="images-group">
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
                                <div class="h7 text-capitalize fw-7"><a href="#" class="link"> Casa Lomas de Machalí Machas</a></div>
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
</section>

@endsection