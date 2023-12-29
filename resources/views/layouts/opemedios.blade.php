<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Opemedios: Tu partner estratégico en soluciones integrales de comunicación. Creamos, gestionamos y amplificamos tu marca en todos los canales.">
    <meta name="keywords" content="Opemedios, marketing, comunicación, empresa, agencia, soluciones, monitoreo">
    <meta name="author" content="Isaac Daniel Batista">
    @yield('metas')
    <title>{{ config('app.name', 'Opemedios') }} @yield('title')</title>
    <!-- Standard Favicon -->
    <link rel="icon" href="img/fav/favicon-96x96.png">

    <!-- Touch Icons - iOS and Android 2.1+ -->
    <link rel="apple-touch-icon" href="{{ asset('assets/img/fav/android-icon-48x48.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('assets/img/fav/android-icon-72x72.png') }}" >
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('assets/img/fav/apple-icon-114x114.png') }}" >
    
    <!--bootstrap v5.2.3 -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!--flag css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/flags.css') }}">
    <!--meanmenu-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/meanmenu.css') }}">
    <!--icons-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/boxicons.min.css') }}">
    <!--aos-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/aos.css') }}">
    <!--slick slider-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/slick.css') }}">
    <!--main style-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    @yield('styles')

    <!--modernizr-->
    <script src="{{ asset('assets/js/vendor/modernizr.js') }}"></script>
    <!-- <script src="js/vendor/modernizr.js"></script> -->

    <!--[if lt IE 9]>
    <script src="{{ asset('assets/js/html5/respond.min.js') }}"></script>
    <![endif]-->
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="60">
    <div class="se-pre-con"></div>

    <!-- main nav start -->
    <header class="header-style-1">
        <div class="top_nav_soc">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-xl-8">
                        <div class="left-content-top">
                            <ul>
                                <li class="d-none d-xl-inline-block">Welcome to Ortencey Digital Market Agency</li>
                                <li>
                                    <a href="#"><i class='bx bxs-phone'></i> +88 ( 5548 ) 6548</a>
                                </li>
                                <li>
                                    <a href="#"><i class='bx bxs-envelope'></i> infoyour@email.com</a>
                                </li>
                            </ul>
                        </div><!--/.left-content-top-->
                    </div>
                    <div class="col-md-4 col-xl-4">
                        <div class="right-content-top">
                            <ul>
                                <li>
                                    <div id="options"
                                         data-input-name="country2"
                                         data-selected-country="US">
                                    </div>
                                </li>
                                <li>
                                    <a href="#"><i class='bx bxl-facebook' ></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class='bx bxl-linkedin' ></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class='bx bxl-twitter' ></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class='bx bxl-youtube' ></i></a>
                                </li>
                            </ul>
                        </div><!--/.right-content-top-->
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar-area">
            <div class="main-responsive-nav">
                <div class="container">
                    <div class="main-responsive-menu">
                        <div class="logo">
                            <a href="/">
                                <img src="{{ asset('assets/img/logo.png') }}"  alt="Opemedios">
                            </a>
                        </div><!--/.logo-->
                    </div>
                </div>
            </div>
            <div class="main-navbar">
                <div class="container">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a class="navbar-brand" href="index.html">
                            <img src="{{ asset('assets/img/logo.png') }}" alt="image">
                        </a>
                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                            <ul class="navbar-nav m-auto">
                                <li class="nav-item">
                                    <a href="#" class="nav-link active"> Home <i class='bx bx-chevron-down'></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="index.html" class="nav-link active">Home Demo - 1</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="index-2.html" class="nav-link ">Home Demo - 2</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="index-3.html" class="nav-link">Home Demo - 3</a>
                                    </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="about.html" class="nav-link">About</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link "> Services <i class='bx bx-chevron-down'></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="service.html" class="nav-link ">Service Page</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="service-details.html" class="nav-link ">Service Details</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link "> Pages <i class='bx bx-chevron-down'></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="team.html" class="nav-link ">Team</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="team-details.html" class="nav-link ">Team Details</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="portfolio.html" class="nav-link ">Portfolio</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="portfolio-details.html" class="nav-link ">Portfolio Details</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="pricing.html" class="nav-link ">Pricing</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="testimonial.html" class="nav-link ">Testimonial</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="faq.html" class="nav-link ">Faq</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="404.html" class="nav-link ">404</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link "> Shop <i class='bx bx-chevron-down'></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="shop.html" class="nav-link ">Shop</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="shop-details.html" class="nav-link ">Shop Details</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="cart.html" class="nav-link ">Cart</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="checkout.html" class="nav-link ">Checkout</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link "> News <i class='bx bx-chevron-down'></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="blog-full.html" class="nav-link ">Blog Full</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="blog-right.html" class="nav-link ">Blog Right</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="blog-left.html" class="nav-link ">Blog Left</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="blog-details.html" class="nav-link ">Blog Details</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="contact.html" class="nav-link">Contact</a>
                                </li>
                            </ul><!--/.navbar-nav -->
                            <div class="others-options d-flex align-items-center">
                                <div class="option-item">
                                    <a class="opt" href="#search"><i class="bx bx-search"></i></a>
                                </div>
                                <div class="option-item">
                                    <a class="opt" href="#ortencySlideCartCanvas"  data-bs-toggle="offcanvas" data-bs-target="#ortencySlideCartCanvas" aria-controls="ortencySlideCartCanvas"><i class='bx bx-shopping-bag' ></i><span class="badge">3</span></a>
                                </div>
                                <div class="option-item d-none d-xl-inline-block">
                                    <a href="contact.html" class="btn">Free Quote <i class='bx bx-right-arrow-alt' ></i></a>
                                </div>
                            </div><!--/.others-options-->
                        </div>
                    </nav><!--/.navbar-->
                </div>
            </div>
    
        </div>
    </header>
    <!-- /.navbar -->

     <!--popup search box-->
    <div id="search">
        <button type="button" class="close">×</button>
        <form>
            <input type="search" value="" placeholder="type keyword(s) here" >
            <button type="submit" class="btn btn-primary">Search</button>
        </form>
    </div>
    <!--popup search box-->
    @yield('content')

    <!--footer area start-->
    <footer class="footers">
        <div class="container">
            <div class="row g-0">
                <div class="col-12">
                    <div class="newsletter-form">
                        <div class="d-md-flex align-items-center justify-content-between">
                            <div class="left-content">
                                <p>For Digital Marketing Agency</p>
                                <h2>Join Our Agency Community</h2>
                            </div>
                            <div class="right-content">
                                <form>
                                    <div class="newslttr-grp">
                                        <input type="email" placeholder="Enter your email address" class="form-control">
                                        <button type="submit" class="btn">Subscribe Now</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div><!--/.newsletter-form-->
                </div>
                <div class="col-12">
                    <div class="footer-widgets-wrap">
                        <div class="row g-4 gy-5">
                            <div class="col-sm-6 col-lg-3">
                                <div class="ftr-widget about">
                                    <h2>About Company</h2>
                                    <p>There are many variations of passages of Lore Ipsum availab but the majority have suffereds alteration in some form, by injected humour a randomised words which</p>
                                    <ul class="socials">
                                        <li><a href="#"><i class="bx bxl-facebook"></i></a></li>
                                        <li><a href="#"><i class="bx bxl-twitter"></i></a></li>
                                        <li><a href="#"><i class="bx bxl-linkedin"></i></a></li>
                                        <li><a href="#"><i class="bx bxl-youtube"></i></a></li>
                                    </ul>
                                </div><!--/.ftr-widget-->
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="ftr-widget">
                                    <h2>Featured Services </h2>
                                    <ul class="navs">
                                        <li><a href="#">Social Media Marketing</a></li>
                                        <li><a href="#">Pay Per Click Management</a></li>
                                        <li><a href="#">Search Engine Optimization</a></li>
                                        <li><a href="#">Free SEO Analysis</a></li>
                                        <li><a href="#">Case Studies</a></li>
                                    </ul>
                                </div><!--/.ftr-widget-->
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="ftr-widget">
                                    <h2>Recent Post </h2>
                                    <ul class="recent-posts">
                                        <li class="d-flex align-items-center">
                                            <div class="flex-grow-0">
                                                <img src="{{ asset('assets/img/blog1.jpg') }}" alt="">
                                            </div>
                                            <div class="flex-shrink-1">
                                                <a href="blog-details.html">Thoughtful man using laptop pondering </a>
                                                <p><i class='bx bx-calendar'></i> 09 Dec 2022</p>
                                            </div>
                                        </li>
                                        <li class="d-flex align-items-center">
                                            <div class="flex-grow-0">
                                                <img src="{{ asset('assets/img/blog2.jpg') }}" alt="">
                                            </div>
                                            <div class="flex-shrink-1">
                                                <a href="blog-details.html">Thoughtful man using laptop pondering </a>
                                                <p><i class='bx bx-calendar'></i> 09 Dec 2022</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div><!--/.ftr-widget-->
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="ftr-widget">
                                    <h2>Contact Us</h2>
                                    <ul class="contacts">
                                        <li>
                                            <i class='bx bxs-phone' ></i>
                                            <a href="tel:7501234">+(323) 750-1234</a>
                                        </li>
                                        <li>
                                            <i class='bx bxs-envelope' ></i>
                                            <a href="mailto:infoyourortencey@email.com">infoyourortencey@email.com</a>
                                        </li>
                                        <li>
                                            <i class='bx bxs-map' ></i>
                                            <address>374 FA Tower, William S Blvd, Melbourne
                                                2721, IL, USA</address>
                                        </li>
                                    </ul>
                                </div><!--/.ftr-widget-->
                            </div>
                        </div>
                    </div><!--/.footer-widgets-wrap-->
                </div>
            </div>
        </div><!--/.container-->
    </footer>
    <div class="copyright-conts">
        <div class="container">
            <div class="row gy-3">
                <div class="col-md-6">
                    <p>2022 © All rights reserved by devsnest-llc</p>
                </div>
                <div class="col-md-6">
                    <ul>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms & Conditions</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--footer area end-->

     <!-- Return to Top -->
    <a href="javascript:" id="return-to-top"><i class="bx bx-chevron-up"></i></a>

    
    <!--jquery-->
    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <!--bootstrap bundle v5.2.3-->
    <script src="{{ asset('assets/js/vendor/bootstrap.bundle.js') }}"></script>
    <!--meanmenu-->
    <script src="{{ asset('assets/js/vendor/jquery.meanmenu.js') }}"></script>
    <!--flag-->
    <script src="{{ asset('assets/js/vendor/jquery.flagstrap.min.js') }}"></script>
    <!--aos-->
    <script src="{{ asset('assets/js/vendor/aos.js') }}"></script>
    <!--slick-->
    <script src="{{ asset('assets/js/vendor/slick.min.js') }}"></script>
    <!--easing js-->
    <script src="{{ asset('assets/js/vendor/easing.js') }}"></script>
    <!--main script-->
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>
</html>