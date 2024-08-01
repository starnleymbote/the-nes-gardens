@extends('layouts.main')
@section('content')
    <!-- Page Title -->
    <section class="flat-title-page">
        <div class="container">
            <h2 class="text-center">Latest News</h2>

            <ul class="breadcrumb">
                <li><a href="index-2.html">Home</a></li>
                <li>/ Blog</li>
            </ul>

        </div>
    </section>
    <!-- End Page Title -->

    <!-- Section Blog List -->
    <section class="flat-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="flat-blog-list">
                        <div class="flat-blog-item">
                            <div class="img-style">
                                <img src="images/blog/blog-lg-1.jpg" alt="img-blog">
                                <span class="date-post">January 28, 2024</span>
                            </div>
                            <div class="content-box">
                                <div class="post-author">
                                    <span class="text-black fw-7">Esther</span>
                                    <span>Furniture</span>
                                </div>
                                <h5 class="title">Building gains into housing stocks and how to trade the sector</h5>
                                <p class="description body-1">The average contract interest rate for 30-year fixed-rate
                                    mortgages with conforming loan balances...</p>
                                <a href="{{ route('blog-details') }}" class="btn-read-more">Read More</a>
                            </div>

                        </div>
                        <div class="flat-blog-item">
                            <div class="img-style">
                                <img src="images/blog/blog-lg-2.jpg" alt="img-blog">
                                <span class="date-post">January 28, 2024</span>
                            </div>
                            <div class="content-box">
                                <div class="post-author">
                                    <span class="text-black fw-7">Angel</span>
                                    <span>Interior</span>
                                </div>
                                <h5 class="title">92% of millennial homebuyers say inflation has impacted their plans</h5>
                                <p class="description body-1">Delve into the art of home staging as an effective strategy to
                                    attract buyers and sell your home...</p>
                                <a href="{{ route('blog-details') }}" class="btn-read-more">Read More</a>
                            </div>

                        </div>
                        <div class="flat-blog-item">
                            <div class="img-style">
                                <img src="images/blog/blog-lg-3.jpg" alt="img-blog">
                                <span class="date-post">January 28, 2024</span>
                            </div>
                            <div class="content-box">
                                <div class="post-author">
                                    <span class="text-black fw-7">Eduardo</span>
                                    <span>Realtor</span>
                                </div>
                                <h5 class="title">The Art of Staging: How to Sell Your Home Quickly at a High Price.</h5>
                                <p class="description body-1">Delve into the art of home staging as an effective strategy to
                                    attract buyers and sell your home...</p>
                                <a href="{{ route('blog-details') }}" class="btn-read-more">Read More</a>
                            </div>

                        </div>
                        <ul class="flat-pagination">
                            <li><a href="#" class="page-numbers current">1</a></li>
                            <li><a href="#" class="page-numbers">2</a></li>
                            <li><a href="#" class="page-numbers">3</a></li>
                            <li><a href="#" class="page-numbers"><i class="icon icon-arr-r"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <aside class="sidebar-blog fixed-sidebar">
                        <div class="widget-search">
                            <div class="h7 fw-7 text-black">Search</div>
                            <div class="search-box">
                                <input class="search-field" type="text" placeholder="Search">
                                <a href="#" class="right-icon icon-search"></a>
                            </div>
                        </div>
                        <div class="widget-box bg-surface recent">
                            <div class="h7 fw-7 text-black">Recent Posts</div>
                            <ul>
                                <li>
                                    <a href="blog-detail-2.html" class="recent-post-item not-overlay hover-img">
                                        <div class="img-style">
                                            <img src="images/blog/post-recent-1.jpg" alt="post-recent">
                                        </div>
                                        <div class="content">
                                            <span class="subtitle">February 16, 2024</span>
                                            <div class="title">Key Real Estate Trends to Watch in 2024</div>
                                        </div>

                                    </a>
                                </li>
                                <li>
                                    <a href="blog-detail-2.html" class="recent-post-item not-overlay hover-img">
                                        <div class="img-style">
                                            <img src="images/blog/post-recent-2.jpg" alt="post-recent">
                                        </div>
                                        <div class="content">
                                            <span class="subtitle">February 16, 2024</span>
                                            <div class="title">Expert Tips for Profitable Real Estate Investments.</div>
                                        </div>

                                    </a>
                                </li>
                                <li>
                                    <a href="blog-detail-2.html" class="recent-post-item not-overlay hover-img">
                                        <div class="img-style">
                                            <img src="images/blog/post-recent-3.jpg" alt="post-recent">
                                        </div>
                                        <div class="content">
                                            <span class="subtitle">February 16, 2024</span>
                                            <div class="title">10 Steps to Prepare for a Successful Real Estate...</div>
                                        </div>

                                    </a>
                                </li>
                            </ul>

                        </div>
                        <div class="widget-box bg-surface categories">
                            <div class="h7 fw-7 text-black">By Categories</div>
                            <ul>
                                <li><a href="#" class="categories-item"><span>Market
                                            Updates</span><span>(112)</span></a></li>
                                <li><a href="#" class="categories-item"><span>Buying Tips</span><span>(13)</span></a>
                                </li>
                                <li><a href="#" class="categories-item current"><span>Interior
                                            Inspiration</span><span>(42)</span></a></li>
                                <li><a href="#" class="categories-item"><span>Investment
                                            Insights</span><span>(32)</span></a></li>
                                <li><a href="#" class="categories-item"><span>Legal
                                            Guidance</span><span>(54)</span></a></li>
                                <li><a href="#" class="categories-item"><span>Home
                                            Construction</span><span>(93)</span></a></li>
                                <li><a href="#" class="categories-item"><span>Community
                                            Spotlight</span><span>(52)</span></a></li>
                                <li><a href="#" class="categories-item"><span>Trend
                                            Watch</span><span>(14)</span></a></li>
                            </ul>


                        </div>
                        <div class="widget-box bg-surface tag">
                            <div class="h7 fw-7 text-black">Popular Tag</div>
                            <ul>
                                <li><a href="#" class="tag-item">Property</a></li>
                                <li><a href="#" class="tag-item current">Realty</a></li>
                                <li><a href="#" class="tag-item">Finance</a></li>
                                <li><a href="#" class="tag-item">Design</a></li>
                                <li><a href="#" class="tag-item">Invest</a></li>
                                <li><a href="#" class="tag-item">Legal</a></li>
                                <li><a href="#" class="tag-item">Renovate</a></li>
                                <li><a href="#" class="tag-item">Neighborhood</a></li>
                                <li><a href="#" class="tag-item">Market</a></li>
                            </ul>

                        </div>

                    </aside>
                </div>
            </div>
        </div>
    </section>
    <!--End Section Blog List -->
@endsection
