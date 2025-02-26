@extends('layouts.frontend.app')

@section('content')
<main class="main">

    <!-- breadcrumb -->
    <div class="site-breadcrumb" style="background: url('{{ asset('frontend-assets/img/breadcrumb/breadcrumb.jpg') }}">
        <div class="container">
            <h2 class="breadcrumb-title">Privacy Policy</h2>
            <ul class="breadcrumb-menu">
                <li><a href="index-2.html">Home</a></li>
                <li class="active">Services</li>
            </ul>
        </div>
    </div>
    <!-- breadcrumb end -->

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
			<div class="row g-3">
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
							Get durable moving boxes delivered to your doorstep for easy packing.
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
							Reliable, secure, and timely transportation for stress-free long-distance.
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
                            Seamless and secure global relocation with expert customs handling.
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
</main>
@endsection