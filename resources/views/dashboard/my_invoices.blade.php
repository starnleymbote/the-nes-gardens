<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">


<!-- Mirrored from themesflat.co/html/homzen/my-invoices.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 May 2024 06:23:15 GMT -->

<head>
    @include('components.head')

</head>

<body class="body bg-surface">

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
                    <div class="main-content-inner wrap-dashboard-content">
                        <div class="button-show-hide show-mb">
                            <span class="body-1">Show Dashboard</span>
                        </div>
                        <div class="row">
                            <div class="col-xl-3 col-sm-6">
                                <fieldset class="box-fieldset">
                                    <div class="nice-select" tabindex="0"><span class="current">All Payment
                                            Status</span>
                                        <ul class="list">
                                            <li data-value="1" class="option selected">All Payment Status</li>
                                            <li data-value="2" class="option">Paid</li>
                                            <li data-value="3" class="option">Not Paid</li>
                                        </ul>
                                    </div>
                                </fieldset>
                            </div>
                            <div class="col-xl-3 col-sm-6">
                                <fieldset class="box-fieldset">
                                    <div class="nice-select" tabindex="0"><span class="current">All Payment
                                            Method</span>
                                        <ul class="list">
                                            <li data-value="1" class="option">All Payment Method</li>
                                            <li data-value="2" class="option">Paypal</li>
                                            <li data-value="3" class="option">Wire Transfer</li>
                                            <li data-value="4" class="option">Free Package</li>
                                        </ul>
                                    </div>
                                </fieldset>
                            </div>
                            <div class="col-xl-2 col-sm-6">
                                <div class="box-fieldset">
                                    <div class="ip-group icon">
                                        <input type="text" id="datepicker1" class="ip-datepicker icon"
                                            placeholder="Start Date">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-sm-6">
                                <div class="box-fieldset">
                                    <div class="ip-group icon">
                                        <input type="text" id="datepicker2" class="ip-datepicker icon"
                                            placeholder="End Date">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2">
                                <a href="#" class="tf-btn primary">Search</a>
                            </div>
                        </div>
                        <div class="widget-box-2 wd-listing">
                            <h6 class="title">My Invoice</h6>
                            <div class="wrap-table">
                                <div class="table-responsive">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>Invoice ID</th>
                                                <th>Package Name</th>
                                                <th>Price ($)</th>
                                                <th>Payment Method</th>
                                                <th>Payment Status</th>
                                                <th>Purchase Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <span class="text-center">
                                                        1524
                                                    </span>
                                                </td>
                                                <td>
                                                    <span>Free</span>
                                                </td>
                                                <td>
                                                    <span>$5050,00</span>
                                                </td>
                                                <td>
                                                    <span>Free Package</span>
                                                </td>
                                                <td>
                                                    <span>Paid</span>
                                                </td>
                                                <td>
                                                    <span>April 9, 2024</span>
                                                </td>
                                                <td class="box-action-print">
                                                    <a href="#" class="icon icon-eye"></a>
                                                </td>
                                            </tr>
                                            <!-- col 2 -->
                                            <tr>
                                                <td>
                                                    <span class="text-center">
                                                        1525
                                                    </span>
                                                </td>
                                                <td>
                                                    <span>Free</span>
                                                </td>
                                                <td>
                                                    <span>$5050,00</span>
                                                </td>
                                                <td>
                                                    <span>Free Package</span>
                                                </td>
                                                <td>
                                                    <span>Not Paid</span>
                                                </td>
                                                <td>
                                                    <span>February 18, 2024</span>
                                                </td>
                                                <td class="box-action-print">
                                                    <a href="#" class="icon icon-eye"></a>
                                                </td>
                                            </tr>
                                            <!-- col 3 -->
                                            <tr>
                                                <td>
                                                    <span class="text-center">
                                                        1526
                                                    </span>
                                                </td>
                                                <td>
                                                    <span>Free</span>
                                                </td>
                                                <td>
                                                    <span>$5050,00</span>
                                                </td>
                                                <td>
                                                    <span>Free Package</span>
                                                </td>
                                                <td>
                                                    <span>Paid</span>
                                                </td>
                                                <td>
                                                    <span>April 9, 2024</span>
                                                </td>
                                                <td class="box-action-print">
                                                    <a href="#" class="icon icon-eye"></a>
                                                </td>
                                            </tr>
                                            <!-- col 4 -->

                                        </tbody>
                                    </table>
                                </div>

                                <ul class="wd-navigation">
                                    <li><a href="#" class="nav-item active">1</a></li>
                                    <li><a href="#" class="nav-item">2</a></li>
                                    <li><a href="#" class="nav-item">3</a></li>
                                    <li><a href="#" class="nav-item"><i class="icon icon-arr-r"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="footer-dashboard footer-dashboard-2">
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


<!-- Mirrored from themesflat.co/html/homzen/my-invoices.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 May 2024 06:23:15 GMT -->

</html>
