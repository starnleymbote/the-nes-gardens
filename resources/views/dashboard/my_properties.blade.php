<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">


<!-- Mirrored from themesflat.co/html/homzen/my-property.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 May 2024 06:23:17 GMT -->

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
                            <div class="col-md-3">
                                <fieldset class="box-fieldset">
                                    <label for="title">
                                        Post Status:<span>*</span>
                                    </label>
                                    <div class="nice-select" tabindex="0"><span class="current">Select</span>
                                        <ul class="list">
                                            <li data-value="1" class="option selected">Select</li>
                                            <li data-value="2" class="option">Publish</li>
                                            <li data-value="3" class="option">Pending</li>
                                            <li data-value="3" class="option">Hidden</li>
                                            <li data-value="3" class="option">Sold</li>
                                        </ul>
                                    </div>
                                </fieldset>
                            </div>
                            <div class="col-md-9">
                                <fieldset class="box-fieldset">
                                    <label for="title">
                                        Post Status:<span>*</span>
                                    </label>
                                    <input type="text" class="form-control style-1" placeholder="Search by title">
                                </fieldset>
                            </div>
                        </div>
                        <div class="widget-box-2 wd-listing">
                            <h6 class="title">My Properties</h6>
                            <div class="wrap-table">
                                <div class="table-responsive">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>Title</th>
                                                <th>Date Published</th>
                                                <th>Status</th>
                                                <th>Feature</th>
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
                                                            <div class="title"><a href="property-details-v1.html"
                                                                    class="link">Gorgeous Apartment Building</a>
                                                            </div>
                                                            <div class="text-date">12 Lowell Road, Port Washington
                                                            </div>
                                                            <div class="text-1 fw-7">$5050,00</div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span>April 9, 2024</span>
                                                </td>
                                                <td>
                                                    <div class="status-wrap">
                                                        <a href="#" class="btn-status">Published</a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span>No</span>
                                                </td>
                                                <td>
                                                    <ul class="list-action">
                                                        <li><a class="item"><i class="icon icon-edit"></i>Edit</a>
                                                        </li>
                                                        <li><a class="item"><i class="icon icon-sold"></i>Sold</a>
                                                        </li>
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
                                                            <div class="title"><a href="property-details-v1.html"
                                                                    class="link">Mountain Mist Retreat, Aspen</a>
                                                            </div>
                                                            <div class="text-date">Brian Drive, Montvale, New Jersey
                                                            </div>

                                                            <div class="text-1 fw-7">$5050,00</div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span>April 9, 2024</span>
                                                </td>
                                                <td>
                                                    <div class="status-wrap">
                                                        <a href="#" class="btn-status">Published</a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span>No</span>
                                                </td>
                                                <td>
                                                    <ul class="list-action">
                                                        <li><a class="item"><i class="icon icon-edit"></i>Edit</a>
                                                        </li>
                                                        <li><a class="item"><i class="icon icon-sold"></i>Sold</a>
                                                        </li>
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
                                                            <div class="title"><a href="property-details-v1.html"
                                                                    class="link">Lakeview Haven, Lake Tahoe</a>
                                                            </div>
                                                            <div class="text-date">12 Lowell Road, Port Washington
                                                            </div>

                                                            <div class="text-1 fw-7">$5050,00</div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span>April 9, 2024</span>
                                                </td>
                                                <td>
                                                    <div class="status-wrap">
                                                        <a href="#" class="btn-status">Published</a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span>No</span>
                                                </td>
                                                <td>
                                                    <ul class="list-action">
                                                        <li><a class="item"><i class="icon icon-edit"></i>Edit</a>
                                                        </li>
                                                        <li><a class="item"><i class="icon icon-sold"></i>Sold</a>
                                                        </li>
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
                                                            <div class="title"><a href="property-details-v1.html"
                                                                    class="link">Coastal Serenity Cottage</a> </div>
                                                            <div class="text-date">Brian Drive, Montvale, New Jersey
                                                            </div>
                                                            <div class="text-1 fw-7">$5050,00</div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span>April 9, 2024</span>
                                                </td>
                                                <td>
                                                    <div class="status-wrap">
                                                        <a href="#" class="btn-status">Published</a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span>No</span>
                                                </td>
                                                <td>
                                                    <ul class="list-action">
                                                        <li><a class="item"><i class="icon icon-edit"></i>Edit</a>
                                                        </li>
                                                        <li><a class="item"><i class="icon icon-sold"></i>Sold</a>
                                                        </li>
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
                                    <li><a href="#" class="nav-item"><i class="icon icon-arr-r"></i></a></li>
                                </ul>
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


<!-- Mirrored from themesflat.co/html/homzen/my-property.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 May 2024 06:23:17 GMT -->

</html>
