@extends('layouts.frontend.app')

@section('content')
<main class="main">

    <!-- breadcrumb -->
    <div class="site-breadcrumb" style="background: url('{{ asset('frontend-assets/img/breadcrumb/breadcrumb.jpg') }}">
        <div class="container">
            <h2 class="breadcrumb-title">Contact Us</h2>
            <ul class="breadcrumb-menu">
                <li><a href="index-2.html">Home</a></li>
                <li class="active">Contact Us</li>
            </ul>
        </div>
    </div>
    <!-- breadcrumb end -->

    <!-- contact area -->
    <div class="contact-area py-120">
        <div class="container">
            <div class="contact-wrapper">
                <div class="row">
                    <div class="col-md-8 align-self-center">
                        <div class="contact-form">
                            <div class="contact-form-header">
                                <h2>Get In Touch</h2>
                                <p>Feel free to contact us, we are here to help you.</p>
                            </div>
                            <form method="post" action="https://live.themewild.com/moverx/assets/php/contact.php" id="contact-form">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name"
                                                placeholder="Your Name" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email"
                                                placeholder="Your Email" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="subject"
                                        placeholder="Your Subject" required>
                                </div>
                                <div class="form-group">
                                    <textarea name="message" cols="30" rows="5" class="form-control"
                                        placeholder="Write Your Message"></textarea>
                                </div>
                                <button type="submit" class="theme-btn"> <i class="far fa-paper-plane"></i> Send
                                    Message</button>
                                <div class="col-md-12 mt-3">
                                    <div class="form-messege text-success"></div>
                                </div>
                            </form>

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="contact-content">
                            <div class="contact-info">
                                <div class="contact-info-icon">
                                    <i class="fal fa-map-marker-alt"></i>
                                </div>
                                <div class="contact-info-content">
                                    <h5>Office Address</h5>
                                    <p>1234 Elm Street, Springfield, AUS</p>
                                </div>
                            </div>
                            <div class="contact-info">
                                <div class="contact-info-icon">
                                    <i class="fal fa-phone"></i>
                                </div>
                                <div class="contact-info-content">
                                    <h5>Call Us</h5>
                                    <p>+1 123 456 7898</p>
                                </div>
                            </div>
                            <div class="contact-info">
                                <div class="contact-info-icon">
                                    <i class="fal fa-envelope"></i>
                                </div>
                                <div class="contact-info-content">
                                    <h5>Email Us</h5>
                                    <p>
                                        <a href="#">[email&#160;protected]</a>
                                    </p>
                                </div>
                            </div>
                            <div class="contact-info">
                                <div class="contact-info-icon">
                                    <i class="fal fa-clock"></i>
                                </div>
                                <div class="contact-info-content">
                                    <h5>Office Open</h5>
                                    <p>Mon - Fri (08AM - 10PM)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end contact area -->
</main>
@endsection