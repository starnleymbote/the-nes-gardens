<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">


<!-- Mirrored from themesflat.co/html/homzen/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 May 2024 06:23:06 GMT -->

<head>
    @include('components.head')

</head>

<body class="body bg-surface counter-scroll">

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
        <div id="page" class="clearfix">
            <div class="layout-wrap">
                <!-- header -->
                @include('components.header')
                <!-- end header -->
                <!-- sidebar dashboard -->
                @include('dashboard.sidebar')
                <!-- end sidebar dashboard -->
                <div class="main-content">
                    <div class="main-content-inner">
                        <div class="button-show-hide show-mb">
                            <span class="body-1">Show Dashboard</span>
                        </div>
                        <div class="flat-counter-v2 tf-counter">
                            <div class="counter-box">
                                <div class="box-icon w-68 round">
                                    <span class="icon icon-list-dashes"></span>
                                </div>
                                <div class="content-box">
                                    <div class="title-count">your Listing</div>
                                    <div class="d-flex align-items-end">
                                        <h6 class="number" data-speed="2000" data-to="17" data-inviewport="yes">17
                                        </h6>
                                        <span class="fw-7 text-variant-2">/17 remaining</span>
                                    </div>

                                </div>
                            </div>
                            <div class="counter-box">
                                <div class="box-icon w-68 round">
                                    <span class="icon icon-clock-countdown"></span>
                                </div>
                                <div class="content-box">
                                    <div class="title-count">Pending</div>
                                    <div class="d-flex align-items-end">
                                        <h6 class="number" data-speed="2000" data-to="0" data-inviewport="yes">0
                                        </h6>
                                    </div>

                                </div>
                            </div>
                            <div class="counter-box">
                                <div class="box-icon w-68 round">
                                    <span class="icon icon-bookmark"></span>
                                </div>
                                <div class="content-box">
                                    <div class="title-count">Favorite</div>
                                    <div class="d-flex align-items-end">
                                        <h6 class="number" data-speed="2000" data-to="1" data-inviewport="yes">1
                                        </h6>
                                    </div>

                                </div>
                            </div>
                            <div class="counter-box">
                                <div class="box-icon w-68 round">
                                    <span class="icon icon-review"></span>
                                </div>
                                <div class="content-box">
                                    <div class="title-count">Reviews</div>
                                    <div class="d-flex align-items-end">
                                        <h6 class="number" data-speed="2000" data-to="17" data-inviewport="yes">0
                                        </h6>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="wrapper-content row">
                            <div class="col-xl-9">
                                <div class="widget-box-2 wd-listing">
                                    <h6 class="title">New Listing</h6>
                                    <div class="wd-filter">
                                        <div class="ip-group">
                                            <input type="text" placeholder="Search">
                                        </div>
                                        <div class="ip-group icon">
                                            <input type="text" id="datepicker1" class="ip-datepicker icon"
                                                placeholder="From Date">
                                        </div>
                                        <div class="ip-group icon">
                                            <input type="text" id="datepicker2" class="ip-datepicker icon"
                                                placeholder="To Date">
                                        </div>
                                        <div class="ip-group">
                                            <div class="nice-select" tabindex="0"><span class="current">Select</span>
                                                <ul class="list">
                                                    <li data-value="1" class="option selected">Select</li>
                                                    <li data-value="2" class="option">Today</li>
                                                    <li data-value="3" class="option">Yesterday</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex gap-4"><span class="text-primary fw-7">17</span><span
                                            class="text-variant-1">Results found</span></div>
                                    <div class="wrap-table">
                                        <div class="table-responsive">

                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th>Listing</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="file-delete">
                                                        <td>
                                                            <div class="listing-box">
                                                                <div class="images">
                                                                    <img src="images/home/house-1.jpg" alt="images">
                                                                </div>
                                                                <div class="content">
                                                                    <div class="title"><a
                                                                            href="property-details-v1.html"
                                                                            class="link">Gorgeous Apartment
                                                                            Building</a> </div>
                                                                    <div class="text-date">
                                                                        <p class="fw-5"><span
                                                                                class="fw-4 text-variant-1">Posting
                                                                                date:</span> March 22, 2023</p>
                                                                    </div>
                                                                    <div class="text-1 fw-7">$5050,00</div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="status-wrap">
                                                                <a href="#" class="btn-status"> Approved</a>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <ul class="list-action">
                                                                <li><a class="item"><i
                                                                            class="icon icon-edit"></i>Edit</a></li>
                                                                <li><a class="item"><i
                                                                            class="icon icon-sold"></i>Sold</a></li>
                                                                <li><a class="remove-file item"><i
                                                                            class="icon icon-trash"></i>Delete</a></li>
                                                            </ul>
                                                        </td>
                                                    </tr>
                                                    <!-- col 2 -->
                                                    <tr class="file-delete">
                                                        <td>
                                                            <div class="listing-box">
                                                                <div class="images">
                                                                    <img src="images/home/house-2.jpg" alt="images">
                                                                </div>
                                                                <div class="content">
                                                                    <div class="title"><a
                                                                            href="property-details-v1.html"
                                                                            class="link">Mountain Mist Retreat,
                                                                            Aspen</a> </div>
                                                                    <div class="text-date">
                                                                        <p class="fw-5"><span
                                                                                class="fw-4 text-variant-1">Posting
                                                                                date:</span> March 22, 2023</p>
                                                                    </div>
                                                                    <div class="text-1 fw-7">$5050,00</div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="status-wrap">
                                                                <a href="#" class="btn-status"> Approved</a>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <ul class="list-action">
                                                                <li><a class="item"><i
                                                                            class="icon icon-edit"></i>Edit</a></li>
                                                                <li><a class="item"><i
                                                                            class="icon icon-sold"></i>Sold</a></li>
                                                                <li><a class="remove-file item"><i
                                                                            class="icon icon-trash"></i>Delete</a></li>
                                                            </ul>
                                                        </td>
                                                    </tr>
                                                    <!-- col 3 -->
                                                    <tr class="file-delete">
                                                        <td>
                                                            <div class="listing-box">
                                                                <div class="images">
                                                                    <img src="images/home/house-3.jpg" alt="images">
                                                                </div>
                                                                <div class="content">
                                                                    <div class="title"><a
                                                                            href="property-details-v1.html"
                                                                            class="link">Lakeview Haven, Lake
                                                                            Tahoe</a> </div>
                                                                    <div class="text-date">
                                                                        <p class="fw-5"><span
                                                                                class="fw-4 text-variant-1">Posting
                                                                                date:</span> March 22, 2023</p>
                                                                    </div>
                                                                    <div class="text-1 fw-7">$5050,00</div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="status-wrap">
                                                                <a href="#" class="btn-status"> Approved</a>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <ul class="list-action">
                                                                <li><a class="item"><i
                                                                            class="icon icon-edit"></i>Edit</a></li>
                                                                <li><a class="item"><i
                                                                            class="icon icon-sold"></i>Sold</a></li>
                                                                <li><a class="remove-file item"><i
                                                                            class="icon icon-trash"></i>Delete</a></li>
                                                            </ul>
                                                        </td>
                                                    </tr>
                                                    <!-- col 4 -->
                                                    <tr class="file-delete">
                                                        <td>
                                                            <div class="listing-box">
                                                                <div class="images">
                                                                    <img src="images/home/house-4.jpg" alt="images">
                                                                </div>
                                                                <div class="content">
                                                                    <div class="title"><a
                                                                            href="property-details-v1.html"
                                                                            class="link">Coastal Serenity Cottage</a>
                                                                    </div>
                                                                    <div class="text-date">
                                                                        <p class="fw-5"><span
                                                                                class="fw-4 text-variant-1">Posting
                                                                                date:</span> March 22, 2023</p>
                                                                    </div>
                                                                    <div class="text-1 fw-7">$5050,00</div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="status-wrap">
                                                                <a href="#" class="btn-status"> Approved</a>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <ul class="list-action">
                                                                <li><a class="item"><i
                                                                            class="icon icon-edit"></i>Edit</a></li>
                                                                <li><a class="item"><i
                                                                            class="icon icon-sold"></i>Sold</a></li>
                                                                <li><a class="remove-file item"><i
                                                                            class="icon icon-trash"></i>Delete</a></li>
                                                            </ul>
                                                        </td>
                                                    </tr>
                                                    <!-- col 5 -->
                                                    <tr class="file-delete">
                                                        <td>
                                                            <div class="listing-box">
                                                                <div class="images">
                                                                    <img src="images/home/house-5.jpg" alt="images">
                                                                </div>
                                                                <div class="content">
                                                                    <div class="title"><a
                                                                            href="property-details-v1.html"
                                                                            class="link">Sunset Heights Estate</a>
                                                                    </div>
                                                                    <div class="text-date">
                                                                        <p class="fw-5"><span
                                                                                class="fw-4 text-variant-1">Posting
                                                                                date:</span> March 22, 2023</p>
                                                                    </div>
                                                                    <div class="text-1 fw-7">$5050,00</div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="status-wrap">
                                                                <a href="#" class="btn-status"> Approved</a>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <ul class="list-action">
                                                                <li><a class="item"><i
                                                                            class="icon icon-edit"></i>Edit</a></li>
                                                                <li><a class="item"><i
                                                                            class="icon icon-sold"></i>Sold</a></li>
                                                                <li><a class="remove-file item"><i
                                                                            class="icon icon-trash"></i>Delete</a></li>
                                                            </ul>
                                                        </td>
                                                    </tr>
                                                    <!-- col 6 -->
                                                    <tr class="file-delete">
                                                        <td>
                                                            <div class="listing-box">
                                                                <div class="images">
                                                                    <img src="images/home/house-8.jpg" alt="images">
                                                                </div>
                                                                <div class="content">
                                                                    <div class="title"><a
                                                                            href="property-details-v1.html"
                                                                            class="link">Casa Lomas de Machalí
                                                                            Machas</a> </div>
                                                                    <div class="text-date">
                                                                        <p class="fw-5"><span
                                                                                class="fw-4 text-variant-1">Posting
                                                                                date:</span> March 22, 2023</p>
                                                                    </div>
                                                                    <div class="text-1 fw-7">$5050,00</div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="status-wrap">
                                                                <a href="#" class="btn-status"> Approved</a>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <ul class="list-action">
                                                                <li><a class="item"><i
                                                                            class="icon icon-edit"></i>Edit</a></li>
                                                                <li><a class="item"><i
                                                                            class="icon icon-sold"></i>Sold</a></li>
                                                                <li><a class="remove-file item"><i
                                                                            class="icon icon-trash"></i>Delete</a></li>
                                                            </ul>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <ul class="wd-navigation">
                                            <li><a href="#" class="nav-item active">1</a></li>
                                            <li><a href="#" class="nav-item">2</a></li>
                                            <li><a href="#" class="nav-item">3</a></li>
                                            <li><a href="#" class="nav-item"><i
                                                        class="icon icon-arr-r"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="widget-box-2 wd-chart">
                                    <h6 class="title">Page Inside</h6>
                                    <div class="wd-filter-date">
                                        <div class="left">
                                            <div class="dates active">Day</div>
                                            <div class="dates">Week</div>
                                            <div class="dates">Month</div>
                                            <div class="dates">Year</div>
                                        </div>
                                        <div class="right">
                                            <div class="ip-group icon">
                                                <input type="text" id="datepicker3" class="ip-datepicker icon"
                                                    placeholder="From Date">
                                            </div>
                                            <div class="ip-group icon">
                                                <input type="text" id="datepicker4" class="ip-datepicker icon"
                                                    placeholder="To Date">
                                            </div>
                                        </div>


                                    </div>
                                    <div class="chart-box">
                                        <canvas id="lineChart"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3">
                                <div class="widget-box-3 mess-box">
                                    <h6>Messages</h6>
                                    <span class="text-variant-1">No message</span>
                                </div>
                                <div class="widget-box-3 recent-box">
                                    <h6>Recent Reviews</h6>
                                    <div class="box-tes-item">
                                        <div class="box-avt d-flex align-items-center gap-12">
                                            <div class="avatar avt-40 round">
                                                <img src="images/avatar/avt-2.jpg" alt="avatar">
                                            </div>
                                            <p>February 18, 2024</p>
                                        </div>
                                        <p class="note p-16">
                                            The housing sector has long been a focal point for investors seeking
                                            stability and growth. Understanding the dynamics of housing stocks and
                                            effectively trading within this sector can lead to substantial gains.
                                        </p>
                                        <ul class="list-star">
                                            <li class="icon icon-star"></li>
                                            <li class="icon icon-star"></li>
                                            <li class="icon icon-star"></li>
                                            <li class="icon icon-star"></li>
                                            <li class="icon icon-star"></li>
                                        </ul>


                                    </div>
                                    <div class="box-tes-item">
                                        <div class="box-avt d-flex align-items-center gap-12">
                                            <div class="avatar avt-40 round">
                                                <img src="images/avatar/avt-2.jpg" alt="avatar">
                                            </div>
                                            <p>February 18, 2024</p>
                                        </div>
                                        <p class="note p-16">
                                            The housing sector has long been a focal point for investors seeking
                                            stability and growth. Understanding the dynamics of housing stocks and
                                            effectively trading within this sector can lead to substantial gains.
                                        </p>
                                        <ul class="list-star">
                                            <li class="icon icon-star"></li>
                                            <li class="icon icon-star"></li>
                                            <li class="icon icon-star"></li>
                                            <li class="icon icon-star"></li>
                                            <li class="icon icon-star"></li>
                                        </ul>


                                    </div>
                                    <div class="box-tes-item">
                                        <div class="box-avt d-flex align-items-center gap-12">
                                            <div class="avatar avt-40 round">
                                                <img src="images/avatar/avt-2.jpg" alt="avatar">
                                            </div>
                                            <p>February 18, 2024</p>
                                        </div>
                                        <p class="note p-16">
                                            The housing sector has long been a focal point for investors seeking
                                            stability and growth. Understanding the dynamics of housing stocks and
                                            effectively trading within this sector can lead to substantial gains.
                                        </p>
                                        <ul class="list-star">
                                            <li class="icon icon-star"></li>
                                            <li class="icon icon-star"></li>
                                            <li class="icon icon-star"></li>
                                            <li class="icon icon-star"></li>
                                            <li class="icon icon-star"></li>
                                        </ul>


                                    </div>
                                    <div class="box-tes-item">
                                        <div class="box-avt d-flex align-items-center gap-12">
                                            <div class="avatar avt-40 round">
                                                <img src="images/avatar/avt-2.jpg" alt="avatar">
                                            </div>
                                            <p>February 18, 2024</p>
                                        </div>
                                        <p class="note p-16">
                                            The housing sector has long been a focal point for investors seeking
                                            stability and growth. Understanding the dynamics of housing stocks and
                                            effectively trading within this sector can lead to substantial gains.
                                        </p>
                                        <ul class="list-star">
                                            <li class="icon icon-star"></li>
                                            <li class="icon icon-star"></li>
                                            <li class="icon icon-star"></li>
                                            <li class="icon icon-star"></li>
                                            <li class="icon icon-star"></li>
                                        </ul>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footer-dashboard">
                        <p class="text-variant-2">©2024 Homzen. All Rights Reserved.</p>
                    </div>
                </div>

                <div class="overlay-dashboard"></div>

            </div>
        </div>
        <!-- /#page -->

    </div>
    <!-- go top -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
                style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 286.138;">
            </path>
        </svg>
    </div>

    <!-- Javascript -->

    @include('components.scripts')
</body>

</html>
