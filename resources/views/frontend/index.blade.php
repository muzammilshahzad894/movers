@extends('layouts.frontend.app')

@section('content')
<main class="home-3 main">
	<!-- hero slider -->
	<div class="hero-section hero-slider owl-carousel owl-theme">
		<div class="hero-single hero-single-ani" style="background-image: url('{{ asset('frontend-assets/img/slider/slider-2.jpg') }}')">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-md-7 col-lg-7">
						<div class="hero-content">
							<h6 class="hero-sub-title wow animate__animated animate__fadeInUp"
								data-wow-duration="1s" data-wow-delay=".25s">Smooth Moving For You</h6>
							<h1 class="hero-title wow animate__animated animate__fadeInUp" data-wow-duration="1s"
								data-wow-delay=".50s">
								Moving For Every Customer With Care
							</h1>
							<p class="wow animate__animated animate__fadeInUp" data-wow-duration="1s"
								data-wow-delay=".75s">
								Reliable and professional moving services designed to make your relocation smooth, stress-free, and hassle-free from start to finish.
							</p>
							<div class="hero-btn wow animate__animated animate__fadeInUp" data-wow-duration="1s"
								data-wow-delay="1s">
								<a href="#" class="theme-btn">Start Move<i
										class="far fa-arrow-right"></i></a>
								<a href="{{ route('frontend.about') }}" class="theme-btn theme-btn2">About Us<i
										class="far fa-arrow-right"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="hero-single hero-single-ani" style="background-image: url('{{ asset('frontend-assets/img/slider/slider-3.jpg') }}')">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-md-7 col-lg-7">
						<div class="hero-content">
							<h6 class="hero-sub-title wow animate__animated animate__fadeInUp"
								data-wow-duration="1s" data-wow-delay=".25s">Smooth Moving For You</h6>
							<h1 class="hero-title wow animate__animated animate__fadeInUp" data-wow-duration="1s"
								data-wow-delay=".50s">
								Moving For Every Customer With Care
							</h1>
							<p class="wow animate__animated animate__fadeInUp" data-wow-duration="1s"
								data-wow-delay=".75s">
								Reliable and professional moving services designed to make your relocation smooth, stress-free, and hassle-free from start to finish.
							</p>
							<div class="hero-btn wow animate__animated animate__fadeInUp" data-wow-duration="1s"
								data-wow-delay="1s">
								<a href="#" class="theme-btn">Start Move<i
										class="far fa-arrow-right"></i></a>
								<a href="{{ route('frontend.about') }}" class="theme-btn theme-btn2">About Us<i
										class="far fa-arrow-right"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="hero-single hero-single-ani" style="background-image: url('{{ asset('frontend-assets/img/slider/slider-1.jpg') }}')">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-md-7 col-lg-7">
						<div class="hero-content">
							<h6 class="hero-sub-title wow animate__animated animate__fadeInUp"
								data-wow-duration="1s" data-wow-delay=".25s">Smooth Moving For You</h6>
							<h1 class="hero-title wow animate__animated animate__fadeInUp" data-wow-duration="1s"
								data-wow-delay=".50s">
								Moving For Every Customer With Care
							</h1>
							<p class="wow animate__animated animate__fadeInUp" data-wow-duration="1s"
								data-wow-delay=".75s">
								Reliable and professional moving services designed to make your relocation smooth, stress-free, and hassle-free from start to finish.
							</p>
							<div class="hero-btn wow animate__animated animate__fadeInUp" data-wow-duration="1s"
								data-wow-delay="1s">
								<a href="#" class="theme-btn">Start Move<i
										class="far fa-arrow-right"></i></a>
								<a href="{{ route('frontend.about') }}" class="theme-btn theme-btn2">About Us<i
										class="far fa-arrow-right"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- hero slider end -->

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



	<!-- process area -->
	<div class="process-area pb-120">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 mx-auto">
					<div class="site-heading text-center">
						<span class="site-title-tagline">Working Process</span>
						<h2 class="site-title">How It Works</h2>
						<div class="heading-divider"></div>
						<p>
							Book your move, our experts pack securely, transport safely, and deliver on time for a hassle-free moving experience.
						</p>
					</div>
				</div>
			</div>
			<div class="row justify-content-between">
				<div class="col-lg-3 col-md-6 text-center mb-30">
					<div class="process-single">
						<div class="icon">
							<span>01</span>
							<i class="fal fa-calendar-check"></i>
						</div>
						<h4>Book Your Service</h4>
						<p>Easily schedule your move with our seamless booking process.</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 text-center mb-30">
					<div class="process-single">
						<div class="icon">
							<span>02</span>
							<i class="fal fa-truck-loading"></i>
						</div>
						<h4>Pack And Load</h4>
						<p>Our experts pack and load your belongings securely.</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 text-center mb-30">
					<div class="process-single">
						<div class="icon">
							<span>03</span>
							<i class="fal fa-truck-container"></i>
						</div>
						<h4>Transportation</h4>
						<p>We ensure safe and timely transportation of your items.</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 text-center mb-30">
					<div class="process-single">
						<div class="icon">
							<span>04</span>
							<i class="fal fa-hand-holding-box"></i>
						</div>
						<h4>Safe Dilivery</h4>
						<p>Your belongings arrive safely at your destination, stress-free.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- process area end -->

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
							We provide reliable, efficient moving services with professional packing, secure transport, and delivery for a smooth experience.
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
			</div>
		</div>
	</div>
	<!-- service area end -->
	 
	<!-- gallery area -->
	<div class="gallery-area py-120">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 mx-auto">
					<div class="site-heading text-center">
						<span class="site-title-tagline">Gallery</span>
						<h2 class="site-title">Photo Gallery</h2>
						<div class="heading-divider"></div>
						<p>
							Explore our photo gallery to see our fleet of trucks in action, ensuring safe and efficient transportation of belongings with utmost care. 
						</p>
					</div>
				</div>
			</div>
			<div class="row popup-gallery" data-masonry='{"percentPosition": true }'>
				<div class="col-md-4">
					<div class="gallery-item">
						<img src="{{ asset('frontend-assets/img/gallery/truck-1.jpg') }}" alt="">
						<a class="popup-img" href="{{ asset('frontend-assets/img/gallery/truck-1.jpg') }}"><i class="far fa-plus"></i></a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="gallery-item">
						<img src="{{ asset('frontend-assets/img/gallery/truck-2.jpg') }}" alt="">
						<a class="popup-img" href="{{ asset('frontend-assets/img/gallery/truck-2.jpg') }}"><i class="far fa-plus"></i></a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="gallery-item">
						<img src="{{ asset('frontend-assets/img/gallery/truck-3.jpg') }}" alt="">
						<a class="popup-img" href="{{ asset('frontend-assets/img/gallery/truck-3.jpg') }}"><i class="far fa-plus"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- gallery area end -->

	<!-- faq area -->
	<div class="faq-area pb-120">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="faq-right">
						<div class="site-heading mb-3">
							<span class="site-title-tagline">Faq's</span>
							<h2 class="site-title my-3">General frequently asked questions</h2>
						</div>
						<p class="about-text">There are many variations of passages of Lorem Ipsum available,
							but the majority have suffered alteration in some form, by injected humour, or
							randomised words which don't look even.</p>
						<p>It is a long established fact that a reader will be distracted by the readable content of
							a page when looking at its layout. </p>
						<a href="#" class="theme-btn mt-5">Ask Your Question <i class="far fa-arrow-right"></i></a>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="accordion" id="accordionExample">
						<div class="accordion-item">
							<h2 class="accordion-header" id="headingOne">
								<button class="accordion-button" type="button" data-bs-toggle="collapse"
									data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
									<span><i class="far fa-question"></i></span> Do I Need A Business Plan ?
								</button>
							</h2>
							<div id="collapseOne" class="accordion-collapse collapse show"
								aria-labelledby="headingOne" data-bs-parent="#accordionExample">
								<div class="accordion-body">
									We denounce with righteous indignation and dislike men who
									are so beguiled and demoralized by the charms of pleasure of the moment, so
									blinded by desire.
								</div>
							</div>
						</div>
						<div class="accordion-item">
							<h2 class="accordion-header" id="headingTwo">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
									data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
									<span><i class="far fa-question"></i></span> How Long Should A Business Plan Be
									?
								</button>
							</h2>
							<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
								data-bs-parent="#accordionExample">
								<div class="accordion-body">
									We denounce with righteous indignation and dislike men who
									are so beguiled and demoralized by the charms of pleasure of the moment, so
									blinded by desire.
								</div>
							</div>
						</div>
						<div class="accordion-item">
							<h2 class="accordion-header" id="headingThree">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
									data-bs-target="#collapseThree" aria-expanded="false"
									aria-controls="collapseThree">
									<span><i class="far fa-question"></i></span> What Payment Gateway You Support ?
								</button>
							</h2>
							<div id="collapseThree" class="accordion-collapse collapse"
								aria-labelledby="headingThree" data-bs-parent="#accordionExample">
								<div class="accordion-body">
									We denounce with righteous indignation and dislike men who
									are so beguiled and demoralized by the charms of pleasure of the moment, so
									blinded by desire.
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- faq area end -->

	<!-- blog-area -->
	<div class="blog-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 mx-auto">
					<div class="site-heading text-center">
						<span class="site-title-tagline">Our Blog</span>
						<h2 class="site-title">Latest News & Blog</h2>
						<div class="heading-divider"></div>
						<p>
							It is a long established fact that a reader will be distracted by the readable content
							of a page when looking at its layout.
						</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-lg-4">
					<div class="blog-item">
						<div class="blog-item-img">
							<img src="{{ asset('frontend-assets/img/blog/01.jpg') }}" alt="Thumb">
						</div>
						<div class="blog-item-info">
							<div class="blog-item-meta">
								<ul>
									<li><a href="#"><i class="far fa-user-circle"></i> By Alicia Davis</a></li>
									<li><a href="#"><i class="far fa-calendar-alt"></i> 09 May, 2024</a></li>
								</ul>
							</div>
							<h4 class="blog-title">
								<a href="#">There are many variates of passages alteration</a>
							</h4>
							<a class="blog-btn" href="#">Read More <i class="far fa-arrow-right"></i></a>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-4">
					<div class="blog-item">
						<div class="blog-item-img">
							<img src="{{ asset('frontend-assets/img/blog/02.jpg') }}" alt="Thumb">
						</div>
						<div class="blog-item-info">
							<div class="blog-item-meta">
								<ul>
									<li><a href="#"><i class="far fa-user-circle"></i> By Alicia Davis</a></li>
									<li><a href="#"><i class="far fa-calendar-alt"></i> 09 May, 2024</a></li>
								</ul>
							</div>
							<h4 class="blog-title">
								<a href="#">There are many variates of passages alteration</a>
							</h4>
							<a class="blog-btn" href="#">Read More <i class="far fa-arrow-right"></i></a>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-4">
					<div class="blog-item">
						<div class="blog-item-img">
							<img src="{{ asset('frontend-assets/img/blog/03.jpg') }}" alt="Thumb">
						</div>
						<div class="blog-item-info">
							<div class="blog-item-meta">
								<ul>
									<li><a href="#"><i class="far fa-user-circle"></i> By Alicia Davis</a></li>
									<li><a href="#"><i class="far fa-calendar-alt"></i> 09 May, 2024</a></li>
								</ul>
							</div>
							<h4 class="blog-title">
								<a href="#">There are many variates of passages alteration</a>
							</h4>
							<a class="blog-btn" href="#">Read More <i class="far fa-arrow-right"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- blog-area end -->
</main>
@endsection