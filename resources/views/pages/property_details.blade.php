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
                    <h5 class="title link">Nes Ville Gardens</h5>
                </div>
                
                    <div class="round">
                        <img src="images/logo/nesville-footer.png" width="70px" height="60px">
                    </div>
                

            </div>
            <div class="content-bottom">
                <div class="info-box">
                    <div class="label">LOCATION:</div>
                    <p class="meta-item"><span class="icon icon-mapPin"></span>Kiambu County, 13 kilometers from Nairobi's CDB</p>
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
                    <div class="h7 title fw-7">Discover NesVille – Luxury Living in Kiambu County</div>
                    <p class="body-2 text-variant-1">Located just 13 kilometers from Nairobi’s bustling CBD, NesVille is a premier gated community in Kiambu County, offering 65 exquisitely designed townhouses in a secure, serene environment. Whether you’re a young family, a professional, or looking to invest, NesVille provides the perfect balance of luxury, comfort, and convenience.</p>
                    
                </div>
                <div class="single-property-element single-property-desc">
                    <div class="h7 title fw-7">Our Homes</div>
                    <p class="body-2 text-variant-1 mt-8">- 
                        <span class="bolden">3 Bedrooms + DSQ (Master Suite Focused): </span>
                        Enjoy the ultimate privacy with a master suite occupying the entire second floor, complete with a spacious walk-in closet.
                    </p>
                    
                    <p class="body-2 text-variant-1 mt-8">- 
                        <span class="bolden">3 Bedrooms + DSQ (Family and Study Focused): </span>
                        Ideal for growing families, featuring a family room, study area, and a well-appointed master bedroom on the first floor.
                    </p>
                  
                    <p class="body-2 text-variant-1 mt-8">- 
                        <span class="bolden">4 Bedrooms + DSQ: </span>
                        Perfect for larger families, offering generous living spaces and all the modern amenities you could desire.
                    </p>
                      
                </div>
                <div class="single-property-element single-property-overview">
                    <div class="h7 title fw-7">Overview</div>
                    <ul class="info-box">
                        <li class="item">
                            <a href="#" class="box-icon w-52"><i class="icon icon-garage"></i></a>
                            <div class="content">
                                <span >Ample parking</span>
                                
                            </div>
                        </li>
                        <li class="item">
                            <a href="#" class="box-icon w-52"><i class="icon icon-tv"></i></a>
                            <div class="content">
                                <span>Expansive living room/dining area</span>
                                
                            </div>
                        </li>
                        <li class="item">
                            <a href="#" class="box-icon w-52"><i class="icon icon-bed"></i></a>
                            <div class="content">
                                <span>Guest powder room</span>
                                
                            </div>
                        </li>
                        <li class="item">
                            <a href="#" class="box-icon w-52"><i class="icon icon-refrigerator"></i></a>
                            <div class="content">
                                <span>spacious Kitchen</span>
                                <span>with pantry</span>
                            </div>
                        </li>
                        <li class="item">
                            <a href="#" class="box-icon w-52"><i class="icon icon-garage"></i></a>
                            <div class="content">
                                <span>Functional Laundry</span>
                                <span>area</span>
                            </div>
                        </li>
                        <li class="item">
                            <a href="#" class="box-icon w-52"><i class="icon icon-farm"></i></a>
                            <div class="content">
                                <span>Green spaces</span>
                            </div>
                        </li>
                        <li class="item">
                            <a href="#" class="box-icon w-52"><i class="icon icon-home-location"></i></a>
                            <div class="content">
                                <span>Detached DSQ </span>
                                
                            </div>
                        </li>
                        <li class="item">
                            <a href="#" class="box-icon w-52"><i class="icon icon-home"></i></a>
                            <div class="content">
                                <span>Ensuite bedrooms </span>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="single-property-element single-property-desc">
                    <div class="h7 title fw-7">Location Advantages</div>
                    <p class="body-2 text-variant-1 mt-8">
                        <span class="bolden">NesVille </span> is strategically situated on Kiambu Road, a location known for its upscale living and convenience. Close to elite shopping malls like Ciata and Ridgeways, prestigious estates like Muthaiga and Runda, and top international schools including Braeburn. Medical facilities such as Gertrude’s Children’s Hospital and Aga Khan are within reach, making NesVille an ideal place to call home. Enjoy the vibrant social scene with the best clubs and hotels just minutes away.
                    </p>
                       
                </div>
                <div class="single-property-element single-property-video">
                    <div class="h7 title fw-7">Video</div>
                    <div class="img-video">
                        <img src="images/banner/img-video.jpg" alt="img-video">
                        <a href="https://youtu.be/MLpWrANjFbI" data-fancybox="gallery2" class="btn-video"> <span class="icon icon-play"></span></a>
                    </div>
                </div>
                <div class="single-property-element single-property-floor">
                    <div class="h7 title fw-7">Nesvile Plans</div>
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
                                        4 Bedroom
                                    </li>
                                    <li class="d-flex align-items-center gap-8">
                                        <i class="icon icon-bathtub"></i>
                                        3 Bathroom
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
                                        3 Bedroom
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
                <div class="single-property-element single-property-nearby">
                    <div class="h7 title fw-7">What’s nearby?</div>
                    <p class="body-2">Explore nearby amenities to precisely locate your property and identify surrounding conveniences, providing a comprehensive overview of the living environment and the property's convenience.</p>
                    <div class="grid-2 box-nearby">
                        <ul class="box-left">
                            <li class="item-nearby">
                                <span class="label fw-7">Braeburn School:</span>
                                <span class="fw-7">2.0 km</span>
                            </li>
                            <li class="item-nearby">
                                <span class="label fw-7">Getrude Children Hospital:</span>
                                <span class="fw-7">1.3 km</span>
                            </li>
                            <li class="item-nearby">
                                <span class="label fw-7">Aghan Hospital:</span>
                                <span class="fw-7">4.6 km</span>
                            </li>
                            <li class="item-nearby">
                                <span class="label fw-7">Ciata Mall:</span>
                                <span class="fw-7">1.1 km</span>
                            </li>
                        </ul>
                        <ul class="box-right">
                            <li class="item-nearby">
                                <span class="label fw-7">Ridgeways:</span>
                                <span class="fw-7">6.4 km</span>
                            </li>
                        </ul>
                    </div>
                    
                </div>

            </div>
            <div class="col-lg-4">
                <div class="widget-sidebar fixed-sidebar wrapper-sidebar-right">
                    <div class="widget-box single-property-whychoose bg-surface">
                        <div class="h7 title fw-7">Join the NesVille Community.</div>
                        <ul class="box-whychoose">
                            <li class="item-why">
                                <i class="icon icon-secure"></i>
                                County’s most sought-after developments.
                            </li>
                            <li class="item-why">
                                <i class="icon icon-guarantee"></i>
                                Experience luxury and comfort.
                            </li>
                            <li class="item-why">
                                <i class="icon icon-booking"></i>
                                A sense of belonging in NesVille.
                            </li>
                        </ul>
                    </div>
                    <div class="widget-box single-property-whychoose bg-surface">
                        <div class="h7 title fw-7">Why Choose Us?</div>
                        <ul class="box-whychoose">
                            <li class="item-why">
                                Proximity to Ciata and Ridgeways malls
                            </li>
                            <li class="item-why">
                                Top-tier international schools such Braebun
                            </li>
                            <li class="item-why">
                                Hospitals such as Aga Khan
                            </li>
                            <li class="item-why">
                                Premium entertainment joints
                            </li>
                        </ul>
                    </div>
                   
                </div>
            </div>
        </div>

    </div>

</section>

@endsection