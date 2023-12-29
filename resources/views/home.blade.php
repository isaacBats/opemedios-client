@extends('layouts.opemedios')
@section('content')
    <!--slidercart canvas-->
    <div class="offcanvas offcanvas-end slide_cart_ortency" tabindex="-1" id="ortencySlideCartCanvas" aria-labelledby="ortencySlideCartCanvas">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title">Shopping Cart <span class="badge">4</span></h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
        <div class="offcanvas-body">
            <div class="ortency-shopping-cart-slide">
                <div class="single-items-cart d-flex align-items-center">
                    <div class="flex-shrink-0">
                        <div class="imgs">
                            <img src="{{ asset('assets/img/shop/products9.png') }}" alt="">
                        </div>
                    </div>
                    <div class="flex-grow-1">
                        <h4><a href="product-details.html">Affinity Queen Poster Bed</a></h4>
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="quantity d-flex align-items-center justify-content-center">
                                <span class="quantity-remove quantity-button"><i class="bx bx-minus"></i> </span>
                                <input type="number" step="1" min="1" value="1" class="">
                                <span class="quantity-add quantity-button"><i class="bx bx-plus"></i> </span>
                            </div>
                            <p>1x $570</p>
                        </div>
                    </div>
                    <a href="#" class="remote-item-cart"><img src="{{ asset('assets/img/icons/times.svg') }}" alt=""></a>
                </div><!--/.single-items-cart-->
                <div class="single-items-cart d-flex align-items-center">
                    <div class="flex-shrink-0">
                        <div class="imgs">
                            <img src="{{ asset('assets/img/shop/products2.png') }}" alt="">
                        </div>
                    </div>
                    <div class="flex-grow-1">
                        <h4><a href="product-details.html">Affinity Queen Poster Bed</a></h4>
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="quantity d-flex align-items-center justify-content-center">
                                <span class="quantity-remove quantity-button"><i class="bx bx-minus"></i> </span>
                                <input type="number" step="1" min="1" value="1" class="">
                                <span class="quantity-add quantity-button"><i class="bx bx-plus"></i> </span>
                            </div>
                            <p>1x $570</p>
                        </div>
                    </div>
                    <a href="#" class="remote-item-cart"><img src="{{ asset('assets/img/icons/times.svg') }}" alt=""></a>
                </div><!--/.single-items-cart-->
                <div class="single-items-cart d-flex align-items-center">
                    <div class="flex-shrink-0">
                        <div class="imgs">
                            <img src="{{ asset('assets/img/shop/products4.png') }}" alt="">
                        </div>
                    </div>
                    <div class="flex-grow-1">
                        <h4><a href="product-details.html">Affinity Queen Poster Bed</a></h4>
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="quantity d-flex align-items-center justify-content-center">
                                <span class="quantity-remove quantity-button"><i class="bx bx-minus"></i> </span>
                                <input type="number" step="1" min="1" value="1" class="">
                                <span class="quantity-add quantity-button"><i class="bx bx-plus"></i> </span>
                            </div>
                            <p>1x $570</p>
                        </div>
                    </div>
                    <a href="#" class="remote-item-cart"><img src="{{ asset('assets/img/icons/times.svg') }}" alt=""></a>
                </div><!--/.single-items-cart-->
            </div><!--/.ortency-shopping-cart-slide-->
            <div class="ortency-cart-subtotal">
                <div class="d-flex justify-content-between">
                    <h4>Subtotal</h4>
                    <h4 class="price">$920.00</h4>
                </div>
                <p>Taxes and shipping calculated at checkout</p>
                <div class="btns">
                    <a href="cart.html" class="btn view_ct">View Cart</a>
                    <a href="#" class="btn ">Add To Cart</a>
                </div>
                <div class="free_shipping_cart">
                    <div class="d-flex justify-content-between align-items-center">
                        <img src="{{ asset('assets/img/icons/shipping-icon.svg') }}" alt="">
                        <h5>Spend $ 499.00 to Free Shipping</h5>
                    </div>
                </div>
            </div><!--/.ortency-cart-subtotal-->
        </div>
    </div>
    <!--slidercart canvas-->

    <!--hero section start-->
    <section class="banner-area-wrap">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="left-content-hero">
                        <h5>Your Trusted Ortencey Agency</h5>
                        <h1>Our Digital Agency With
                            Excellence Services</h1>
                        <p>The 3 golden rules professional Digital Marketing Agency don’t
                            want you to know about.</p>
                        <a href="#" class="btn btn-default">Discover More</a>
                    </div><!--/.left-content-hero-->
                </div>
                <div class="col-lg-6">
                    <div class="right-content-hero">
                        <div class="imgs">
                            <div class="inner">
                                <img src="{{ asset('assets/img/hero-img.png') }}" alt="">
                            </div>
                        </div>
                    </div><!--/.right-content-hero-->
                </div>
            </div>
        </div><!--/.container-->
        <span class="banner-frame-one"></span>
        <span class="banner-frame-two"></span>
        <span class="banner-frame-three"></span>
        <span class="banner-frame-four"></span>
        <div class="shape-top-left" data-aos="fade-down" data-aos-delay="500"></div>
        <div class="shape-bottom-left" data-aos="fade-up"
        data-aos-anchor-placement="top-bottom" data-aos-delay="1000"></div>
        <div class="shape-bottom-right" data-aos="fade-left"
        data-aos-anchor-placement="top-bottom" data-aos-delay="1500"></div>
    </section>
    <!--hero section end-->

    <!--about ortency start-->
    <section class="about-ortency-v1 pt-120">
        <div class="container">
            <div class="row gy-5 align-items-center">
                <div class="col-md-6">
                    <div class="left-images-about">
                        <div class="inner">
                            <img src="{{ asset('assets/img/about-1.png') }}" data-aos="fade-down" class="img1" alt="">
                            <img src="{{ asset('assets/img/about-2.jpg') }}" class="img2" alt="">
                            <img src="{{ asset('assets/img/about-3.png') }}" data-aos="flip-left" data-aos-delay="800" class="img3" alt="">
                        </div>
                    </div><!--/.left-images-about-->
                </div>
                <div class="col-md-6">
                    <div class="right-content-about">
                        <div class="sec-title">
                            <h3><img src="{{ asset('assets/img/icons/title-icon.svg') }}" alt=""> About Our Company</h3>
                            <h2 class="tag1">Best Digital Marketing Agency For People</h2>
                        </div>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have as suffered alteration in some form, by injected humour, or randomised words which don't a look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything.</p>
                        <ul class="list-icons d-flex flex-wrap align-items-start">
                            <li>Digital Strategy</li>
                            <li>SEO Optimization</li>
                            <li>Marketing</li>
                            <li>First Working Process</li>
                        </ul>
                        <a href="#" class="btn btn-default">Read More</a>
                    </div><!--/.right-content-about-->
                </div>
            </div>
        </div>
    </section>
    <!--about ortency end-->

    <!--our services start-->
    <div class="our-services-sec px-120">
        <div class="container">
            <div class="row g-4 gy-4 justify-content-center">
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="single-services-dv" data-aos="fade-up" data-aos-delay="200">
                        <div class="imgs">
                            <div class="icon">
                                <img src="{{ asset('assets/img/icons/service-icon1.svg') }}" alt="">
                            </div>
                            <img src="{{ asset('assets/img/service1.png') }}" class="mn" alt="">
                        </div>
                        <div class="cont">
                            <h2>Graphics Design</h2>
                            <p>Contrary to popular belief, Lorem Ips is not simply random text. It has root in a piece of classical.</p>
                        </div>
                    </div><!--/.single-services-dv-->
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="single-services-dv" data-aos="fade-up" data-aos-delay="400">
                        <div class="imgs">
                            <div class="icon">
                                <img src="{{ asset('assets/img/icons/service-icon2.svg') }}" alt="">
                            </div>
                            <img src="{{ asset('assets/img/service2.png') }}" class="mn" alt="">
                        </div>
                        <div class="cont">
                            <h2>Web Developer</h2>
                            <p>Contrary to popular belief, Lorem Ips is not simply random text. It has root in a piece of classical.</p>
                        </div>
                    </div><!--/.single-services-dv-->
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="single-services-dv" data-aos="fade-up" data-aos-delay="600">
                        <div class="imgs">
                            <div class="icon">
                                <img src="{{ asset('assets/img/icons/service-icon3.svg') }}" alt="">
                            </div>
                            <img src="{{ asset('assets/img/service3.png') }}" class="mn" alt="">
                        </div>
                        <div class="cont">
                            <h2>Digital Marketing</h2>
                            <p>Contrary to popular belief, Lorem Ips is not simply random text. It has root in a piece of classical.</p>
                        </div>
                    </div><!--/.single-services-dv-->
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="single-services-dv" data-aos="fade-up" data-aos-delay="800">
                        <div class="imgs">
                            <div class="icon">
                                <img src="{{ asset('assets/img/icons/service-icon4.svg') }}" alt="">
                            </div>
                            <img src="{{ asset('assets/img/service4.png') }}" class="mn" alt="">
                        </div>
                        <div class="cont">
                            <h2>App Design</h2>
                            <p>Contrary to popular belief, Lorem Ips is not simply random text. It has root in a piece of classical.</p>
                        </div>
                    </div><!--/.single-services-dv-->
                </div>
            </div>
        </div><!--/.container-->
    </div>
    <!--our services end-->

    <!--why choose us start-->
    <section class="why-choose-us px-120">
        <div class="container">
            <div class="row g-4 gy-5 align-items-center">
                <div class="col-md-6">
                    <div class="left-content-choose">
                        <div class="sec-title">
                            <h3><img src="{{ asset('assets/img/icons/title-icon-infinity.svg') }}" alt="">Why Choose Ortencey</h3>
                            <h2 class="tag1">Reason For Choosing Our Digital Agency</h2>
                        </div>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majori suffered alteration in some form, by injected humour, or randomised word whic look even sligh believable. If you are going to use.</p>
                        <div class="single-progress">
                            <label class="d-flex justify-content-between">
                                <span>Software Development</span>
                                <span>85%</span>
                            </label>
                            <div class="progress">
                                <div class="progress-bar" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1000" data-aos-anchor-placement="top bottom"  role="progressbar" aria-label="Basic example" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>                          
                        </div><!--/.single-progress-->
                        <div class="single-progress">
                            <label class="d-flex justify-content-between">
                                <span>Web Development</span>
                                <span>95%</span>
                            </label>
                            <div class="progress">
                                <div class="progress-bar" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1200" data-aos-anchor-placement="top bottom"  role="progressbar" aria-label="Basic example" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>                          
                        </div><!--/.single-progress-->
                        <div class="single-progress">
                            <label class="d-flex justify-content-between">
                                <span>UL / UX Design</span>
                                <span>80%</span>
                            </label>
                            <div class="progress">
                                <div class="progress-bar" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1400" data-aos-anchor-placement="top bottom"  role="progressbar" aria-label="Basic example" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>                          
                        </div><!--/.single-progress-->
                    </div><!--/.left-content-choose-->
                </div>
                <div class="col-md-6">
                    <div class="right-img-choose">
                        <img src="{{ asset('assets/img/choose-img.jpg') }}" alt="">
                        <div class="exp"><span>25</span> Years Experience</div>
                    </div><!--/.right-img-choose-->
                </div>
            </div>
        </div>
    </section>
    <!--why choose us end-->

    <!--pricing plan start-->
    <section class="pricing-plan-sec pt-120">
        <div class="container">
            <div class="row g-0">
                <div class="col-12">
                    <div class="sec-title text-center mb-50">
                        <h3><img src="{{ asset('assets/img/icons/title-icon-infinity.svg') }}" alt=""> Our Pricing</h3>
                        <h2 class="tag1">Our Best Pricing Plan</h2>
                    </div>
                </div>
                <div class="col-12">
                    <div class="row g-4 justify-content-center">
                        <div class="col-md-6 col-xl-4">
                            <div class="single-plan-area" data-aos="fade-up" data-aos-delay="100">
                                <div class="icons">
                                    <img src="{{ asset('assets/img/icons/plan1.svg') }}" alt="">
                                </div>
                                <div class="plan-hdr">
                                    <h2>Basic Plan</h2>
                                    <h1><sup>$</sup>30<small>Per Month</small></h1>
                                </div>
                                <div class="plan-body">
                                    <ul class="list-icons d-flex flex-column align-items-center">
                                        <li>Free Consultations</li>
                                        <li>Business Planning</li>
                                        <li>Investment Process</li>
                                        <li class="dis">Market Research</li>
                                        <li class="dis">Online Support</li>
                                        <li class="dis">Unlimited Updates</li>
                                    </ul>
                                    <a href="#" class="btn">Choose Plan</a>
                                </div>
                            </div><!--/.single-plan-area-->
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <div class="single-plan-area features" data-aos="fade-up" data-aos-delay="300">
                                <div class="icons">
                                    <img src="{{ asset('assets/img/icons/plan2.svg') }}" alt="">
                                </div>
                                <div class="plan-hdr">
                                    <h2>Gold Plan</h2>
                                    <h1><sup>$</sup>60<small>Per Month</small></h1>
                                </div>
                                <div class="plan-body">
                                    <ul class="list-icons d-flex flex-column align-items-center">
                                        <li>Free Consultations</li>
                                        <li>Business Planning</li>
                                        <li>Investment Process</li>
                                        <li class="dis">Market Research</li>
                                        <li class="dis">Online Support</li>
                                        <li>Unlimited Updates</li>
                                    </ul>
                                    <a href="#" class="btn">Choose Plan</a>
                                </div>
                            </div><!--/.single-plan-area-->
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <div class="single-plan-area" data-aos="fade-up" data-aos-delay="500">
                                <div class="icons">
                                    <img src="{{ asset('assets/img/icons/plan3.svg') }}" alt="">
                                </div>
                                <div class="plan-hdr">
                                    <h2>Silver Plan</h2>
                                    <h1><sup>$</sup>99<small>Per Month</small></h1>
                                </div>
                                <div class="plan-body">
                                    <ul class="list-icons d-flex flex-column align-items-center">
                                        <li>Free Consultations</li>
                                        <li>Business Planning</li>
                                        <li>Investment Process</li>
                                        <li>Market Research</li>
                                        <li>Online Support</li>
                                        <li>Unlimited Updates</li>
                                    </ul>
                                    <a href="#" class="btn">Choose Plan</a>
                                </div>
                            </div><!--/.single-plan-area-->
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/.container-->
    </section>
    <!--pricing plan end-->

    <!--fun fact start-->
    <div class="fun-fact-sec pt-120">
        <div class="container">
            <div class="row g-0">
                <div class="col-12">
                    <div class="fun-fact-wraps">
                        <div class="row g-4 gy-5 align-items-center">
                            <div class="col-md-4">
                                <div class="singl-fact-count" data-aos="fade-in" data-aos-delay="100">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-0">
                                            <div class="icon">
                                                <img src="{{ asset('assets/img/icons/fun1.png') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="flex-shrink-1">
                                            <h2 class="counter">1500</h2>
                                            <p>Project Complete</p>
                                        </div>
                                    </div>
                                </div><!--/.singl-fact-count-->
                            </div>
                            <div class="col-md-4">
                                <div class="singl-fact-count"  data-aos="fade-in" data-aos-delay="200">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-0">
                                            <div class="icon">
                                                <img src="{{ asset('assets/img/icons/fun2.png') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="flex-shrink-1">
                                            <h2 class="counter">8562</h2>
                                            <p>Satisfied Clients</p>
                                        </div>
                                    </div>
                                </div><!--/.singl-fact-count-->
                            </div>
                            <div class="col-md-4">
                                <div class="singl-fact-count"  data-aos="fade-in" data-aos-delay="300">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-0">
                                            <div class="icon">
                                                <img src="{{ asset('assets/img/icons/fun3.png') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="flex-shrink-1">
                                            <h2 class="counter">35</h2>
                                            <p>Award win</p>
                                        </div>
                                    </div>
                                </div><!--/.singl-fact-count-->
                            </div>
                        </div>
                    </div><!--/.fun-fact-wraps-->
                </div>
            </div>
        </div><!--/.container-->
    </div>
    <!--fun fact end-->

    <!--contact area start-->
    <div class="contact-area-sec pb-120">
        <div class="container">
            <div class="row g-0">
                <div class="col-12">
                    <div class="contact-inner-wrap" data-aos="fade-up">
                        <div class="row g-4 gy-5">
                            <div class="col-md-6">
                                <div class="left-content-video-modal d-flex align-items-center flex-column">
                                    <a href="#" class="video-btn" data-bs-toggle="modal" data-bs-target="#myModalVideo" data-src="https://www.youtube.com/embed/bON-KPiiNCk">
                                        <div class="button-outer-circle has-scale-animation"></div>
                                        <div class="button-outer-circle has-scale-animation has-delay-short"></div>
                                        <div class="button-icon is-play">
                                            <svg height="100%" width="100%" fill="#3661FC">
                                                <polygon class="triangle" points="5,0 30,15 5,30" ></polygon>
                                                <path class="path" d="M5,0 L30,15 L5,30z" fill="none" stroke="#3661FC" stroke-width="1"></path>
                                            </svg>
                                        </div>
                                    </a>
                                </div><!--/.left-content-video-modal-->
                            </div>
                            <div class="col-md-6">
                                <div class="right-contact-frm">
                                    <div class="sec-title">
                                        <h3 class="text-white"><img src="{{ asset('assets/img/icons/title-icon-infinity.svg') }}" alt="">Make an Appointment</h3>
                                        <h2 class="text-white tag1">Start New Project With Us</h2>
                                    </div>
                                    <div class="forms-wrap-cont pt-50">
                                        <form>
                                            <div class="row g-3">
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control" placeholder="Your Name">
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="email" class="form-control" placeholder="Email Address">
                                                </div>
                                                <div class="col-md-12">
                                                    <input type="text" class="form-control" placeholder="Business Topic">
                                                </div>
                                                <div class="col-md-12">
                                                    <textarea class="form-control" rows="4" placeholder="Your Message"></textarea>
                                                </div>
                                                <div class="col-md-12">
                                                    <button type="submit" class="btn btn-default">Send Message</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div><!--/.forms-wrap-cont-->
                                </div><!--/.right-contact-frm-->
                            </div>
                        </div>
                    </div><!--/.contact-inner-wrap-->
                </div>
            </div>
        </div><!--/.container-->
    </div>
    <!--contact area end-->
    <!-- video pop -->
    <div class="modal fade video-pop" id="myModalVideo" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    </button>        
                    <!-- 16:9 aspect ratio -->
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="loading" id="video"  allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div> 

    <!--team area start-->
    <section class="team-area-sec px-120">
        <div class="container">
            <div class="row g-0">
                <div class="col-12">
                    <div class="sec-title text-center">
                        <h3><img src="{{ asset('assets/img/icons/title-icon-infinity.svg') }}" alt=""> Team Member</h3>
                        <h2 class="tag1">Creative Team Member</h2>
                    </div>
                </div>
                <div class="col-12 mt-50">
                    <div class="row g-4">
                        <div class="col-md-6 col-lg-3">
                            <div class="team-member-inner" data-aos="flip-left" data-aos-delay="100">
                                <div class="imgs">
                                    <img src="{{ asset('assets/img/team1.jpg') }}" alt="">
                                </div>
                                <div class="cont">
                                    <div class="name">
                                        <h2>Robert Sions</h2>
                                        <p>Business Consultant</p>
                                    </div>
                                    <div class="socials">
                                        <ul>
                                            <li><a href="#"><i class="bx bxl-facebook"></i></a></li>
                                            <li><a href="#"><i class="bx bxl-twitter"></i></a></li>
                                            <li><a href="#"><i class="bx bxl-linkedin"></i></a></li>
                                            <li><a href="#"><i class="bx bxl-youtube"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div><!--/.team-member-inner-->
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="team-member-inner" data-aos="flip-left" data-aos-delay="300">
                                <div class="imgs">
                                    <img src="{{ asset('assets/img/team2.jpg') }}" alt="">
                                </div>
                                <div class="cont">
                                    <div class="name">
                                        <h2>Ross Bing</h2>
                                        <p>App Developer</p>
                                    </div>
                                    <div class="socials">
                                        <ul>
                                            <li><a href="#"><i class="bx bxl-facebook"></i></a></li>
                                            <li><a href="#"><i class="bx bxl-twitter"></i></a></li>
                                            <li><a href="#"><i class="bx bxl-linkedin"></i></a></li>
                                            <li><a href="#"><i class="bx bxl-youtube"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div><!--/.team-member-inner-->
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="team-member-inner" data-aos="flip-left" data-aos-delay="500">
                                <div class="imgs">
                                    <img src="{{ asset('assets/img/team3.jpg') }}" alt="">
                                </div>
                                <div class="cont">
                                    <div class="name">
                                        <h2>Karikok Jahan</h2>
                                        <p>Executive Manager</p>
                                    </div>
                                    <div class="socials">
                                        <ul>
                                            <li><a href="#"><i class="bx bxl-facebook"></i></a></li>
                                            <li><a href="#"><i class="bx bxl-twitter"></i></a></li>
                                            <li><a href="#"><i class="bx bxl-linkedin"></i></a></li>
                                            <li><a href="#"><i class="bx bxl-youtube"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div><!--/.team-member-inner-->
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="team-member-inner" data-aos="flip-left" data-aos-delay="700">
                                <div class="imgs">
                                    <img src="{{ asset('assets/img/team4.jpg') }}" alt="">
                                </div>
                                <div class="cont">
                                    <div class="name">
                                        <h2>Dickerson MH</h2>
                                        <p>Agency Analysis</p>
                                    </div>
                                    <div class="socials">
                                        <ul>
                                            <li><a href="#"><i class="bx bxl-facebook"></i></a></li>
                                            <li><a href="#"><i class="bx bxl-twitter"></i></a></li>
                                            <li><a href="#"><i class="bx bxl-linkedin"></i></a></li>
                                            <li><a href="#"><i class="bx bxl-youtube"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div><!--/.team-member-inner-->
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/.container-->
    </section>
    <!--team area end-->

    <!--testimonial area start-->
    <section class="testimonial-sec px-120">
        <div class="container">
            <div class="row align-items-center align-items-lg-start gy-5">
                
                <div class="col-md-7 col-lg-6 order-md-2">
                    <div class="right-content-testimonial">
                        <div class="sec-title mb-50">
                            <h3><img src="{{ asset('assets/img/icons/title-icon-infinity.svg') }}" alt="">Testimonial</h3>
                            <h2 class="tag1">What Our Client Say</h2>
                        </div>
                        <div class="testimonial-slider-slick">
                            <div class="single">
                                <div class="feedback-inner-single">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="quote">
                                            <i class='bx bxs-quote-left' ></i>
                                        </div>
                                        <div class="ratings d-flex">
                                            <i class='bx bxs-star' ></i>
                                            <i class='bx bxs-star' ></i>
                                            <i class='bx bxs-star' ></i>
                                            <i class='bx bxs-star' ></i>
                                            <i class='bx bxs-star' ></i>
                                        </div>
                                    </div>
                                    <p>There are many variations of passages of Lorem Ipsum availa the majority have suffered alteration in some form by injecte our, or rando word which don't look even slightly a believable. If you are going to use a passage of Lorem Ipsum, you need sure there isn't anything embarrassing.</p>
                                    <h2>Kristin Waon</h2>
                                    <h5>Web Designer</h5>
                                </div><!--/.feedback-inner-single-->
                            </div>
                            <div class="single">
                                <div class="feedback-inner-single">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="quote">
                                            <i class='bx bxs-quote-left' ></i>
                                        </div>
                                        <div class="ratings d-flex">
                                            <i class='bx bxs-star' ></i>
                                            <i class='bx bxs-star' ></i>
                                            <i class='bx bxs-star' ></i>
                                            <i class='bx bxs-star' ></i>
                                            <i class='bx bxs-star' ></i>
                                        </div>
                                    </div>
                                    <p>There are many variations of passages of Lorem Ipsum availa the majority have suffered alteration in some form by injecte our, or rando word which don't look even slightly a believable. If you are going to use a passage of Lorem Ipsum, you need sure there isn't anything embarrassing.</p>
                                    <h2>John Waon</h2>
                                    <h5>App Designer</h5>
                                </div><!--/.feedback-inner-single-->
                            </div>
                            <div class="single">
                                <div class="feedback-inner-single">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="quote">
                                            <i class='bx bxs-quote-left' ></i>
                                        </div>
                                        <div class="ratings d-flex">
                                            <i class='bx bxs-star' ></i>
                                            <i class='bx bxs-star' ></i>
                                            <i class='bx bxs-star' ></i>
                                            <i class='bx bxs-star' ></i>
                                            <i class='bx bxs-star' ></i>
                                        </div>
                                    </div>
                                    <p>There are many variations of passages of Lorem Ipsum availa the majority have suffered alteration in some form by injecte our, or rando word which don't look even slightly a believable. If you are going to use a passage of Lorem Ipsum, you need sure there isn't anything embarrassing.</p>
                                    <h2>Kim dude</h2>
                                    <h5>Web Developer</h5>
                                </div><!--/.feedback-inner-single-->
                            </div>
                            <div class="single">
                                <div class="feedback-inner-single">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="quote">
                                            <i class='bx bxs-quote-left' ></i>
                                        </div>
                                        <div class="ratings d-flex">
                                            <i class='bx bxs-star' ></i>
                                            <i class='bx bxs-star' ></i>
                                            <i class='bx bxs-star' ></i>
                                            <i class='bx bxs-star' ></i>
                                            <i class='bx bxs-star' ></i>
                                        </div>
                                    </div>
                                    <p>There are many variations of passages of Lorem Ipsum availa the majority have suffered alteration in some form by injecte our, or rando word which don't look even slightly a believable. If you are going to use a passage of Lorem Ipsum, you need sure there isn't anything embarrassing.</p>
                                    <h2>Mafia x.</h2>
                                    <h5>Gang</h5>
                                </div><!--/.feedback-inner-single-->
                            </div>
                            <div class="single">
                                <div class="feedback-inner-single">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="quote">
                                            <i class='bx bxs-quote-left' ></i>
                                        </div>
                                        <div class="ratings d-flex">
                                            <i class='bx bxs-star' ></i>
                                            <i class='bx bxs-star' ></i>
                                            <i class='bx bxs-star' ></i>
                                            <i class='bx bxs-star' ></i>
                                            <i class='bx bxs-star' ></i>
                                        </div>
                                    </div>
                                    <p>There are many variations of passages of Lorem Ipsum availa the majority have suffered alteration in some form by injecte our, or rando word which don't look even slightly a believable. If you are going to use a passage of Lorem Ipsum, you need sure there isn't anything embarrassing.</p>
                                    <h2>Sufi star</h2>
                                    <h5>Producer</h5>
                                </div><!--/.feedback-inner-single-->
                            </div>
                            <div class="single">
                                <div class="feedback-inner-single">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="quote">
                                            <i class='bx bxs-quote-left' ></i>
                                        </div>
                                        <div class="ratings d-flex">
                                            <i class='bx bxs-star' ></i>
                                            <i class='bx bxs-star' ></i>
                                            <i class='bx bxs-star' ></i>
                                            <i class='bx bxs-star' ></i>
                                            <i class='bx bxs-star' ></i>
                                        </div>
                                    </div>
                                    <p>There are many variations of passages of Lorem Ipsum availa the majority have suffered alteration in some form by injecte our, or rando word which don't look even slightly a believable. If you are going to use a passage of Lorem Ipsum, you need sure there isn't anything embarrassing.</p>
                                    <h2>Kristin Waon</h2>
                                    <h5>Web Designer</h5>
                                </div><!--/.feedback-inner-single-->
                            </div>
                            <div class="single">
                                <div class="feedback-inner-single">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="quote">
                                            <i class='bx bxs-quote-left' ></i>
                                        </div>
                                        <div class="ratings d-flex">
                                            <i class='bx bxs-star' ></i>
                                            <i class='bx bxs-star' ></i>
                                            <i class='bx bxs-star' ></i>
                                            <i class='bx bxs-star' ></i>
                                            <i class='bx bxs-star' ></i>
                                        </div>
                                    </div>
                                    <p>There are many variations of passages of Lorem Ipsum availa the majority have suffered alteration in some form by injecte our, or rando word which don't look even slightly a believable. If you are going to use a passage of Lorem Ipsum, you need sure there isn't anything embarrassing.</p>
                                    <h2>Kristin Waon</h2>
                                    <h5>Web Designer</h5>
                                </div><!--/.feedback-inner-single-->
                            </div>
                        </div>
                        <div class="custom-paging-testi d-flex justify-content-center flex-column"></div>
                    </div><!--/.right-content-testimonial-->
                </div>
                <div class="col-md-5 col-lg-6 order-md-1">
                    <div class="left-client-images-tbs">
                        <div class="action-hr">
                            <a href="#" class="dts1" data-slide="1"><img src="{{ asset('assets/img/testi1.png') }}" alt=""></a>
                            <a href="#" class="dts2" data-slide="2"><img src="{{ asset('assets/img/testi2.jpg') }}" alt=""></a>
                            <a href="#" class="dts3" data-slide="3"><img src="{{ asset('assets/img/testi3.jpg') }}" alt=""></a>
                            <a href="#" class="dts4" data-slide="4"><img src="{{ asset('assets/img/testi4.jpg') }}" alt=""></a>
                            <a href="#" class="dts5" data-slide="5"><img src="{{ asset('assets/img/testi5.jpg') }}" alt=""></a>
                            <a href="#" class="dts6" data-slide="6"><img src="{{ asset('assets/img/testi6.jpg') }}" alt=""></a>
                            <a href="#" class="dts7" data-slide="7"><img src="{{ asset('assets/img/testi7.jpg') }}" alt=""></a>
                        </div>
                    </div><!--/.left-client-images-tbs-->
                </div>
            </div>
        </div><!--/.container-->
    </section>
    <!--testimonial area end-->

    <!--promo text start-->
    <div class="promo-text-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="inner-promo-txt">
                        <div class="d-md-flex justify-content-between align-items-center">
                            <div class="sec-title">
                                <h3 class="text-white"><img src="{{ asset('assets/img/icons/title-icon-infinity.svg') }}" alt=""> We Are Hire</h3>
                                <h2 class="text-white tag1">Tell us About Your Business, We are Ready to Solve.</h2>
                            </div>
                            <div class="btn-area">
                                <a href="contact.html" class="btn btn-default">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/.container-->
        <span class="banner-frame-one"></span>
        <span class="banner-frame-two"></span>
        <span class="banner-frame-three"></span>
        <span class="banner-frame-four"></span>
        <div class="shape-top-left" data-aos="fade-down" data-aos-delay="500"></div>
        <div class="shape-bottom-right" data-aos="fade-up"
        data-aos-anchor-placement="top-bottom" data-aos-delay="1000"></div>
    </div>
    <!--promo text end-->

    <!--blog area start-->
    <section class="blog-sec px-120">
        <div class="container">
            <div class="row g-0">
                <div class="col-12">
                    <div class="sec-title text-center">
                        <h3><img src="{{ asset('assets/img/icons/title-icon-infinity.svg') }}" alt="">Our Blog</h3>
                        <h2 class="tag1">Latest Blogs & Articles</h2>
                    </div>
                </div>
                <div class="col-12 mt-50">
                    <div class="row justify-content-center g-4 ">
                        <div class="col-md-6 col-lg-4">
                            <div class="single-blog-inner" data-aos="fade-in" data-aos-delay="100">
                                <div class="imgs">
                                    <img src="{{ asset('assets/img/blog1.jpg') }}" alt="">
                                    <span class="date">09 Dec 2022</span>
                                    <span class="cat">Digital Agency</span>
                                    <a href="blog-details.html" class="single-links">hidden link</a>
                                </div>
                                <div class="conts">
                                    <ul class="meta">
                                        <li><img src="{{ asset('assets/img/icons/user.svg') }}" alt=""><span>by Admin</span></li>
                                        <li><img src="{{ asset('assets/img/icons/messages.svg') }}" alt=""> <span>25</span></li>
                                        <li><img src="{{ asset('assets/img/icons/eye.svg') }}" alt=""> <span>120 Views</span></li>
                                    </ul>
                                    <h2><a href="blog-details.html">Successful business partner have a meeting and discussing</a></h2>
                                </div>
                            </div><!--/.single-blog-inner-->
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="single-blog-inner" data-aos="fade-in" data-aos-delay="300">
                                <div class="imgs">
                                    <img src="{{ asset('assets/img/blog2.jpg') }}" alt="">
                                    <span class="date">09 Dec 2022</span>
                                    <span class="cat">Marketing Agency</span>
                                    <a href="blog-details.html" class="single-links">hidden link</a>
                                </div>
                                <div class="conts">
                                    <ul class="meta">
                                        <li><img src="{{ asset('assets/img/icons/user.svg') }}" alt=""><span>by Admin</span></li>
                                        <li><img src="{{ asset('assets/img/icons/messages.svg') }}" alt=""> <span>22</span></li>
                                        <li><img src="{{ asset('assets/img/icons/eye.svg') }}" alt=""> <span>2120 Views</span></li>
                                    </ul>
                                    <h2><a href="blog-details.html">Motivated colleagues celebrating corporate success together</a></h2>
                                </div>
                            </div><!--/.single-blog-inner-->
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="single-blog-inner" data-aos="fade-in" data-aos-delay="500">
                                <div class="imgs">
                                    <img src="{{ asset('assets/img/blog3.jpg') }}" alt="">
                                    <span class="date">09 Nov 2022</span>
                                    <span class="cat">Digital Connect</span>
                                    <a href="blog-details.html" class="single-links">hidden link</a>
                                </div>
                                <div class="conts">
                                    <ul class="meta">
                                        <li><img src="{{ asset('assets/img/icons/user.svg') }}" alt=""><span>by Admin</span></li>
                                        <li><img src="{{ asset('assets/img/icons/messages.svg') }}" alt=""> <span>22</span></li>
                                        <li><img src="{{ asset('assets/img/icons/eye.svg') }}" alt=""> <span>120 Views</span></li>
                                    </ul>
                                    <h2><a href="blog-details.html">Man using a tablet to a work and connect with others</a></h2>
                                </div>
                            </div><!--/.single-blog-inner-->
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/.container-->
    </section>
    <!--blog area end-->
@endsection