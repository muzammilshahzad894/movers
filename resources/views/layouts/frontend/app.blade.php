<!DOCTYPE html>
<html lang="en">

<head>
    <!-- meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- title -->
    <title>Moverx - Moving Company HTML5 Template</title>

    <!-- favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('frontend-assets/img/logo/favicon.png') }}">

    <!-- css -->
    <link rel="stylesheet" href="{{ asset('frontend-assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend-assets/css/all-fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend-assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend-assets/css/magnific-popup.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend-assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend-assets/css/style.css') }}">
    
    @yield('css')

</head>

<body>

    <!-- preloader -->
    <div class="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader end -->


    <!-- header area -->
    <header class="home-3 header">

        <!-- header top -->
        <!-- <div class="header-top">
            <div class="container">
                <div class="header-top-wrapper">
                    <div class="header-top-left">
                        <div class="header-top-contact">
                            <ul>
                                <li><a href="#"><i class="far fa-map-marker-alt"></i>25/B Milford Road, New York</a></li>
                                <li><a href="#"><i class="far fa-clock"></i>Sun - Fri (08AM - 10PM)</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="header-top-right">
                        <div class="header-top-social">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="fab fa-whatsapp"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

        <div class="main-navigation">
            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <a class="navbar-brand" href="index-2.html">
                        <img src="{{ asset('frontend-assets/img/logo/nexus-logo.png') }}" alt="logo">
                    </a>
                    <div class="mobile-menu-right">
                        <a href="#" class="mobile-search-btn search-box-outer"><i class="far fa-search"></i></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"><i class="far fa-stream"></i></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="main_nav">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle active" href="#" data-bs-toggle="dropdown">Home</a>
                                <ul class="dropdown-menu fade-up">
                                    <li><a class="dropdown-item" href="index-2.html">Home Page 01</a></li>
                                    <li><a class="dropdown-item" href="index-3.html">Home Page 02</a></li>
                                    <li><a class="dropdown-item" href="index-4.html">Home Page 03</a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="about.html"> About </a></li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Pages</a>
                                <ul class="dropdown-menu fade-up">
                                    <li><a class="dropdown-item" href="about.html">About Us</a></li>
                                    <li><a class="dropdown-item" href="team.html">Team Members</a></li>
                                    <li><a class="dropdown-item" href="pricing.html">Our Pricing</a></li>
                                    <li><a class="dropdown-item" href="contact.html">Contact Us</a></li>
                                    <li><a class="dropdown-item" href="testimonial.html">Testimonials</a></li>
                                    <li><a class="dropdown-item" href="faq.html">Faq</a></li>
                                    <li><a class="dropdown-item" href="login.html">Login</a></li>
                                    <li><a class="dropdown-item" href="register.html">Register</a></li>
                                    <li><a class="dropdown-item" href="forgot-password.html">Forgot Password</a></li>
                                    <li><a class="dropdown-item" href="404.html">404 Error</a></li>
                                    <li><a class="dropdown-item" href="coming-soon.html">Coming Soon</a></li>
                                    <li><a class="dropdown-item" href="terms.html">Terms Of Service</a></li>
                                    <li><a class="dropdown-item" href="privacy.html">Privacy Policy</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Service</a>
                                <ul class="dropdown-menu fade-up">
                                    <li><a class="dropdown-item" href="service.html">Services</a></li>
                                    <li><a class="dropdown-item" href="service-single.html">Service Details</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Feature</a>
                                <ul class="dropdown-menu fade-up">
                                    <li><a class="dropdown-item" href="request-quote.html">Request A Quote</a></li>
                                    <li><a class="dropdown-item" href="global-location.html">Global Location</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Blog</a>
                                <ul class="dropdown-menu fade-up">
                                    <li><a class="dropdown-item" href="blog.html">Blog</a></li>
                                    <li><a class="dropdown-item" href="blog-single.html">Blog Single</a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
                        </ul>
                        <div class="header-nav-right">
                            <div class="header-nav-search">
                                <a href="#" class="search-box-outer"><i class="far fa-search"></i></a>
                            </div>
                            <div class="header-btn">
                                <a href="#" class="theme-btn">GET QUOTE<i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!-- header area end -->


    <!-- popup search -->
    <div class="search-popup">
        <button class="close-search"><span class="far fa-times"></span></button>
        <form action="#">
            <div class="form-group">
                <input type="search" name="search-field" placeholder="Search Here..." required>
                <button type="submit"><i class="far fa-search"></i></button>
            </div>
        </form>
    </div>
    <!-- popup search end -->

    @yield('content')

    <!-- footer area -->
    <footer class="footer-area">
        <div class="footer-widget">
            <div class="container">
                <div class="row footer-widget-wrapper pt-100 pb-70">
                    <div class="col-md-6 col-lg-4">
                        <div class="footer-widget-box about-us">
                            <a href="#" class="footer-logo">
                                <img src="{{ asset('frontend-assets/img/logo/logo-light.png') }}" alt="">
                            </a>
                            <p class="mb-20">
                                We are many variations of passages available but the majority have suffered alteration
                                in some form by injected humour words which don't look even slightly believable.
                            </p>
                            <ul class="footer-social">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="footer-widget-box">
                            <h4 class="footer-widget-title">Contact Us</h4>
                            <ul class="footer-contact">
                                <li><i class="far fa-map-marker-alt"></i>25/B Milford Road, New York</li>
                                <li><a href="tel:+21236547898"><i class="far fa-phone"></i>+2 123 654 7898</a></li>
                                <li><a href="https://live.themewild.com/cdn-cgi/l/email-protection#771e19111837120f161a071b125914181a"><i
                                            class="far fa-envelope"></i><span class="__cf_email__" data-cfemail="6a03040c052a0f120b071a060f44090507">[email&#160;protected]</span></a>
                                </li>
                                <li><i class="far fa-clock"></i>Sun - Fri (08AM - 10PM)</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-2">
                        <div class="footer-widget-box list">
                            <h4 class="footer-widget-title">Quick Links</h4>
                            <ul class="footer-list">
                                <li><a href="#"><i class="fas fa-caret-right"></i> About Us</a></li>
                                <li><a href="#"><i class="fas fa-caret-right"></i> FAQ's</a></li>
                                <li><a href="#"><i class="fas fa-caret-right"></i> Terms Of Service</a></li>
                                <li><a href="#"><i class="fas fa-caret-right"></i> Privacy policy</a></li>
                                <li><a href="#"><i class="fas fa-caret-right"></i> Our Services</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="footer-widget-box list">
                            <h4 class="footer-widget-title">Newsletter</h4>
                            <div class="footer-newsletter">
                                <p>Subscribe Our Newsletter To Get Latest Update And News</p>
                                <div class="subscribe-form">
                                    <form action="#">
                                        <input type="email" class="form-control" placeholder="Your Email">
                                        <button class="theme-btn" type="submit">
                                            <i class="far fa-paper-plane"></i> Subscribe Now
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 align-self-center">
                        <p class="copyright-text">
                            &copy; Copyright <span id="date"></span> <a href="#"> MOVERX </a> All
                            Rights Reserved.
                        </p>
                    </div>
                    <div class="col-lg-6 align-self-center">
                        <ul class="footer-menu">
                            <li><a href="#">Support</a></li>
                            <li><a href="#">Terms Of Services</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer area end -->

    <!-- scroll-top -->
    <a href="#" id="scroll-top"><i class="far fa-long-arrow-up"></i></a>
    <!-- scroll-top end -->

    <!-- js -->
    <script src="{{ asset('frontend-assets/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('frontend-assets/js/modernizr.min.js') }}"></script>
    <script src="{{ asset('frontend-assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend-assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('frontend-assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('frontend-assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('frontend-assets/js/jquery.appear.min.js') }}"></script>
    <script src="{{ asset('frontend-assets/js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('frontend-assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend-assets/js/counter-up.js') }}"></script>
    <script src="{{ asset('frontend-assets/js/masonry.pkgd.min.js') }}"></script>
    <script src="{{ asset('frontend-assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('frontend-assets/js/main.js') }}"></script>
</body>

</html>