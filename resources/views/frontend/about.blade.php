@extends('layouts.frontend.app')

@section('content')
<main class="home-3 main">

    <!-- breadcrumb -->
    <div class="site-breadcrumb" style="background: url('{{ asset('frontend-assets/img/breadcrumb/breadcrumb.jpg') }}')">
        <div class="container">
            <h2 class="breadcrumb-title">About Us</h2>
            <ul class="breadcrumb-menu">
                <li><a href="index-2.html">Home</a></li>
                <li class="active">About Us</li>
            </ul>
        </div>
    </div>
    <!-- breadcrumb end -->

    <!-- about area -->
    <div class="about-area py-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-left">
                        <div class="about-img">
                            <img src="{{ asset('frontend-assets/img/about/about.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-right">
                        <div class="site-heading mb-3">
                            <span class="site-title-tagline">About Us</span>
                            <h2 class="site-title">Moving With Nexus Movers Is Always Easy And Fast</h2>
                        </div>
                        <p class="about-text">At Nexus Movers, we provide stress-free and reliable moving services. With experienced professionals, we ensure safe packing, secure transportation, and timely delivery. Whether moving locally or long-distance, we handle every detail with care, making your relocation smooth, hassle-free, and affordable. Our customer-focused approach guarantees excellent service and personalized solutions.</p>
                        <div class="about-list-wrapper">
                            <ul class="about-list list-unstyled">
                                <li>
                                    <div class="icon"><span class="fas fa-check-circle"></span></div>
                                    <div class="text">
                                        <p>Take a look at our round up of the best shows</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon"><span class="fas fa-check-circle"></span></div>
                                    <div class="text">
                                        <p>It has survived not only five centuries</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon"><span class="fas fa-check-circle"></span></div>
                                    <div class="text">
                                        <p>Lorem Ipsum has been the ndustry standard dummy text</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about area end -->

    <!-- counter area -->
    <div class="counter-area pt-50 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="counter-box">
                        <div class="icon"><i class="fal fa-layer-group"></i></div>
                        <div>
                            <span class="counter" data-count="+" data-to="500" data-speed="3000">500</span>
                            <h6 class="title">+ Project Done</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="counter-box">
                        <div class="icon"><i class="fal fa-truck-loading"></i></div>
                        <div>
                            <span class="counter" data-count="+" data-to="250" data-speed="3000">250</span>
                            <h6 class="title">+ TONS OF GOODS</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="counter-box">
                        <div class="icon"><i class="fal fa-user-friends"></i></div>
                        <div>
                            <span class="counter" data-count="+" data-to="120" data-speed="3000">120</span>
                            <h6 class="title">+ Total Employee</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="counter-box">
                        <div class="icon"><i class="fal fa-award"></i></div>
                        <div>
                            <span class="counter" data-count="+" data-to="50" data-speed="3000">50</span>
                            <h6 class="title">+ Win Awards</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- counter area end -->


    <!-- service area -->
    <div class="service-area bg py-120">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 mx-auto">
					<div class="site-heading text-center">
						<span class="site-title-tagline">Services</span>
						<h2 class="site-title">Best Services</h2>
						<div class="heading-divider"></div>
						<p>
							It is a long established fact that a reader will be distracted by the readable content
							of a page when looking at its layout.
						</p>
					</div>
				</div>
			</div>
			<div class="row g-1">
                <div class="col-md-6 col-lg-3">
					<div class="service-item">
						<div class="service-icon">
							<i class="fal fa-map-marker-alt"></i>
						</div>
						<div class="service-icon-shadow"></div>
						<h3 class="service-title">
							<a href="#">Local Moving</a>
						</h3>
						<p class="service-text">
							Safe, efficient, and hassle-free relocation within your city with expert movers.
						</p>
						<div class="service-arrow">
							<a href="#" class="theme-btn">Read More <span class="far fa-arrow-right"></span></a>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="service-item">
						<div class="service-icon">
							<i class="fal fa-box-alt"></i>
						</div>
						<div class="service-icon-shadow"></div>
						<h3 class="service-title">
							<a href="#">Box Delivery</a>
						</h3>
						<p class="service-text">
							Get durable moving boxes delivered to your doorstep for easy packing convenience.
						</p>
						<div class="service-arrow">
							<a href="#" class="theme-btn">Read More <span class="far fa-arrow-right"></span></a>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="service-item">
						<div class="service-icon">
							<i class="fal fa-route"></i>
						</div>
						<div class="service-icon-shadow"></div>
						<h3 class="service-title">
							<a href="#">Long Distance</a>
						</h3>
						<p class="service-text">
							Reliable, secure, and timely transportation for stress-free long-distance relocations.
						</p>
						<div class="service-arrow">
							<a href="#" class="theme-btn">Read More <span class="far fa-arrow-right"></span></a>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="service-item">
						<div class="service-icon">
							<i class="fal fa-boxes-alt"></i>
						</div>
						<div class="service-icon-shadow"></div>
						<h3 class="service-title">
							<a href="#">Loading & Unloading</a>
						</h3>
						<p class="service-text">
							Professional handling ensures your belongings are safely loaded and unloaded.
						</p>
						<div class="service-arrow">
							<a href="#" class="theme-btn">Read More <span class="far fa-arrow-right"></span></a>
						</div>
					</div>
				</div>
                <div class="col-md-6 col-lg-3">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="fal fa-globe-europe"></i>
                        </div>
                        <div class="service-icon-shadow"></div>
                        <h3 class="service-title">
                            <a href="#">International Moving</a>
                        </h3>
                        <p class="service-text">
                            Seamless and secure global relocation with expert customs handling and logistics.
                        </p>
                        <div class="service-arrow">
                            <a href="#" class="theme-btn">Read More <span class="far fa-arrow-right"></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="fal fa-building"></i>
                        </div>
                        <div class="service-icon-shadow"></div>
                        <h3 class="service-title">
                            <a href="#">Office Relocation</a>
                        </h3>
                        <p class="service-text">
                            Efficient office moves with minimal downtime for a smooth business transition.
                        </p>
                        <div class="service-arrow">
                            <a href="#" class="theme-btn">Read More <span class="far fa-arrow-right"></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="fal fa-warehouse-alt"></i>
                        </div>
                        <div class="service-icon-shadow"></div>
                        <h3 class="service-title">
                            <a href="#">Storage Units</a>
                        </h3>
                        <p class="service-text">
                            Secure, climate-controlled storage solutions for short- and long-term needs.
                        </p>
                        <div class="service-arrow">
                            <a href="#" class="theme-btn">Read More <span class="far fa-arrow-right"></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="fal fa-city"></i>
                        </div>
                        <div class="service-icon-shadow"></div>
                        <h3 class="service-title">
                            <a href="#">Corporate Moving</a>
                        </h3>
                        <p class="service-text">
                            Tailored relocation services to meet business needs with precision and care.
                        </p>
                        <div class="service-arrow">
                            <a href="#" class="theme-btn">Read More <span class="far fa-arrow-right"></span></a>
                        </div>
                    </div>
                </div>
            </div>
		</div>
	</div>
	<!-- service area end -->

    <!-- testimonial-area -->
    <div class="testimonial-area testimonial-bg py-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <div class="site-heading text-center">
                        <span class="site-title-tagline">Testimonials</span>
                        <h2 class="site-title text-white">What Client Say's</h2>
                        <div class="heading-divider"></div>
                        <p class="text-white">
                            It is a long established fact that a reader will be distracted by the readable content
                            of a page when looking at its layout.
                        </p>
                    </div>
                </div>
            </div>
            <div class="testimonial-slider owl-carousel owl-theme">
                <div class="testimonial-single">
                    <div class="testimonial-quote">
                        <span class="testimonial-quote-icon"><i class="fal fa-quote-right"></i></span>
                        <p>
                            There are many variations of passages of Lorem Ipsum available, but the majority have
                            suffered alteration in some form, by injected humour.
                        </p>
                    </div>
                    <div class="testimonial-content">
                        <div class="testimonial-author-img">
                            <img src="{{ asset('frontend-assets/img/testimonial/01.jpg') }}" alt="">
                        </div>
                        <div class="testimonial-author-info">
                            <h4>Sylvia H Green</h4>
                            <p>Customer</p>
                            <div class="testimonial-rate">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-single">
                    <div class="testimonial-quote">
                        <span class="testimonial-quote-icon"><i class="fal fa-quote-right"></i></span>
                        <p>
                            There are many variations of passages of Lorem Ipsum available, but the majority have
                            suffered alteration in some form, by injected humour.
                        </p>
                    </div>
                    <div class="testimonial-content">
                        <div class="testimonial-author-img">
                            <img src="{{ asset('frontend-assets/img/testimonial/04.jpg') }}" alt="">
                        </div>
                        <div class="testimonial-author-info">
                            <h4>Gordon D Novak</h4>
                            <p>Customer</p>
                            <div class="testimonial-rate">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-single">
                    <div class="testimonial-quote">
                        <span class="testimonial-quote-icon"><i class="fal fa-quote-right"></i></span>
                        <p>
                            There are many variations of passages of Lorem Ipsum available, but the majority have
                            suffered alteration in some form, by injected humour.
                        </p>
                    </div>
                    <div class="testimonial-content">
                        <div class="testimonial-author-img">
                            <img src="{{ asset('frontend-assets/img/testimonial/05.jpg') }}" alt="">
                        </div>
                        <div class="testimonial-author-info">
                            <h4>Reid E Butt</h4>
                            <p>Customer</p>
                            <div class="testimonial-rate">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-single">
                    <div class="testimonial-quote">
                        <span class="testimonial-quote-icon"><i class="fal fa-quote-right"></i></span>
                        <p>
                            There are many variations of passages of Lorem Ipsum available, but the majority have
                            suffered alteration in some form, by injected humour.
                        </p>
                    </div>
                    <div class="testimonial-content">
                        <div class="testimonial-author-img">
                            <img src="{{ asset('frontend-assets/img/testimonial/02.jpg') }}" alt="">
                        </div>
                        <div class="testimonial-author-info">
                            <h4>Parker Jimenez</h4>
                            <p>Customer</p>
                            <div class="testimonial-rate">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- testimonial-area end -->
</main>
@endsection