<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">


<!-- Mirrored from themesflat.co/html/homzen/reviews.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 May 2024 06:23:15 GMT -->

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
                    <div class="main-content-inner">
                        <div class="button-show-hide show-mb">
                            <span class="body-1">Show Dashboard</span>
                        </div>
                        <div class="widget-box-3 mess-box">
                            <h6>Messages</h6>
                            <span class="text-variant-1">No message</span>
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


<!-- Mirrored from themesflat.co/html/homzen/reviews.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 May 2024 06:23:15 GMT -->

</html>
