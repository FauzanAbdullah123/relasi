<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>@yield('title')</title>

    <!-- Favicon -->
    <link rel="icon" href="/frontend/index/assets/img/core-img/favicon.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="/frontend/index/assets/style.css">

</head>

<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
	@include('layouts.frontend.header')
    

    <!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img bg-overlay" style="background-image: url(/frontend/index/assets/img/bg-img/breadcumb3.jpg);">
        <div class="bradcumbContent">
            <p>See what’s new</p>
            <h2>BLOG</h2>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Blog Area Start ##### -->
    <div class="blog-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-9">

                    <!-- Single Post Start -->
                    <div class="single-blog-post mb-100 wow fadeInUp" data-wow-delay="100ms">

                        <!-- Blog Content -->
                        <div class="blog-content">
                            @yield('content')
                        </div>
                        <div class="col-12 col-lg-3">
                            <div class="blog-sidebar-area">
                        <div class="single-widget-area mb-30">
                            <div class="widget-content">
                                @yield('search')
                            </div>
                        </div>
                        <!-- Widget Area -->
                        <div class="single-widget-area mb-30">
                            <div class="widget-title">
                                <h5>Categories</h5>
                            </div>
                            <div class="widget-content">
                                @yield('kategori')
                            </div>
                        </div>

                        <!-- Widget Area -->
                        <div class="single-widget-area mb-30">
                            <div class="widget-title">
                                <h5>Recent Posts</h5>
                            </div>
                            <div class="widget-content">
                                @yield('recent')
                            </div>
                        </div>

                        <!-- Widget Area -->
                        <div class="single-widget-area mb-30">
                            <div class="widget-title">
                                <h5>Tags</h5>
                            </div>
                            <div class="widget-content">
                                @yield('tag')
                            </div>
                        </div>
                    </div>
						</div>  
					</div>
				</div>
			</div>
		</div>
	</div>

    <!-- ##### Contact Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <div class="container">
            <div class="row d-flex flex-wrap align-items-center">
                <div class="col-12 col-md-6">
                    <a href="#"><img src="/frontend/index/assets/img/core-img/logo.png" alt=""></a>
                    <p class="copywrite-text"><a href="#"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                </div>

                <div class="col-12 col-md-6">
                    <div class="footer-nav">
                        <ul>
                            <li><a class="nav-link" href="{{ url('/') }}"><span>Home</span></a></li>
                            <li><a class="nav-link" href="{{ url('/blog') }}"><span>Blog</span></a></li>
                            <li><a href="{{ url('/albums') }}">Albums</a></li>
                            <li><a href="{{ url('/event') }}">Events</a></li>
                            <li><a href="{{ url('/elements') }}">News</a></li>
                            <li><a href="{{ url('/contact') }}">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="/frontend/index/assets/js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="/frontend/index/assets/js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="/frontend/index/assets/js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="/frontend/index/assets/js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="/frontend/index/assets/js/active.js"></script>
</body>

</html>