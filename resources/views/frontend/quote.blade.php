@extends('layouts.frontend.app')

@section('css')
<style>
    :root {
        --main-color: #89C63E;
        --dark-color: #73a13a;
        --step-color: #ced7e0;
        --step-size: 24px;
        --steps: 4;
        --progress-width: calc((var(--steps) - 1) / var(--steps) * 100%);
    }

    .home-3 .navbar {
        padding: 0px !important;
        border-bottom: 1px solid #d0d5dd;
    }

    .home-3 .navbar .nav-link {
        font-size: 14px !important;
    }

    .home-3.header,
    .footer-area {
        display: none;
    }

    .quote-page-header {
        display: block !important;
    }

    .navbar-brand img {
        width: 95px;
    }

    .main {
        background: #F0F2FE;
        min-height: 100vh;
    }

    .progress-section {
        background: #fff;
        padding-top: 20px;
        padding-bottom: 5px;
        border-bottom: 1px solid #d0d5dd;
    }

    .progress-container {
        position: relative;
    }

    .progress-container::before {
        content: "";
        height: 4px;
        width: var(--progress-width);
        background-color: var(--step-color);
        position: absolute;
        top: calc(var(--step-size) / 2);
        left: 50%;
        translate: -50% -50%;
    }

    .progress-container .progress {
        height: 4px;
        width: var(--progress-width);
        background-color: var(--main-color);
        position: absolute;
        top: calc(var(--step-size) / 2);
        left: 50%;
        translate: -50% -50%;
        z-index: 2;
        transform: scaleX(0);
        transform-origin: left;
        transition: 0.3s;
    }

    .progress-container ol {
        list-style-type: none;
        display: flex;
        align-items: flex-start;
        justify-content: space-between;
        counter-reset: step-number;
        position: relative;
        z-index: 3;
        margin-bottom: 0px;
    }

    .progress-container li {
        flex: 1;
        display: flex;
        flex-direction: column;
        align-items: center;
        color: var(--step-color);
        transition: 0.3s linear 0.3s;
        text-align: center;
        font-size: 14px !important;
        padding-right: 32px;
    }

    .progress-container li::before {
        counter-increment: step-number;
        content: counter(step-number);
        background-color: var(--step-color);
        width: var(--step-size);
        height: var(--step-size);
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        color: #fff;
        transition: 0.3s linear 0.3s;
        font-size: 1rem;
    }

    @media (min-width: 480px) {
        .progress-container li {
            font-size: 1rem;
            gap: 8px;
        }
    }

    .progress-container li:where(.done, .current) {
        color: #333;
        font-weight: 500;
    }

    .progress-container li.done::before {
        background-color: var(--main-color);
    }

    .progress-container li.current::before {
        background-color: var(--main-color);
        box-shadow: 0 0 0 3px rgb(84 104 21 / 25%);
    }

    .steps-container {
        display: flex;
        flex-direction: column;
        /* Stack steps vertically */
        overflow: hidden;
    }

    .step {
        flex: 1 0 100%;
        padding: 24px 8px;
        opacity: 0;
        transition: opacity 0.3s, display 0s 0.3s;
        /* Add display transition */
        height: fit-content;
        display: none !important;
        /* Hide steps by default */
        gap: 8px;
    }

    .step.current {
        opacity: 1;
        display: grid !important;
    }

    .step-1-details {
        max-width: 600px;
    }

    .controls {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 16px;
        margin-top: 16px;
        padding-inline: 8px;
    }

    .controls button {
        flex: 1;
    }

    .completed {
        text-align: center;
    }

    .completed h3 {
        margin-bottom: 8px;
    }

    .completed svg {
        width: 100px;
        height: 100px;
        stroke: yellowgreen;
    }

    .completed:not([hidden])~* {
        display: none;
    }

    .sticky-footer {
        position: fixed;
        bottom: 0;
        left: 0;
        width: 100%;
        background: white;
        padding: 20px;
        z-index: 1000;
        border-top: 1px solid #d0d5dd;
    }

    .sticky-footer .theme-btn {
        padding: 5px 45px !important;
        border-radius: 6px;
    }

    @media (max-width: 991px) {
        .navbar {
            position: relative !important;
        }
    }

    .form-group {
        position: relative;
        margin-bottom: 1.5rem;
        width: 100%;
    }

    .form-group input {
        height: 50px;
        padding-left: 40px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        border: 1px solid #ced4da;
        border-radius: 4px;
        transition: all 0.3s;
        width: 100%;
    }

    .form-group input:focus {
        border-color: var(--main-color);
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
    }

    .form-group label {
        position: absolute;
        top: 50%;
        left: 40px;
        transform: translateY(-50%);
        color: #999;
        pointer-events: none;
        transition: 0.3s ease-in-out;
    }

    .form-group input:focus+label,
    .form-group input:not(:placeholder-shown)+label {
        top: 10px;
        left: 40px;
        font-size: 12px;
        color: var(--main-color);
    }

    .form-group .fa-map-marker-alt {
        position: absolute;
        top: 50%;
        left: 10px;
        transform: translateY(-50%);
        color: #999;
    }

    .add-stop-btn {
        display: flex;
        align-items: center;
        justify-content: center;
        margin-top: 10px;
        cursor: pointer;
        color: var(--main-color);
    }

    .add-stop-btn .fa-plus {
        margin-right: 5px;
    }

    .remove-stop-btn {
        position: absolute;
        top: 50%;
        right: 10px;
        transform: translateY(-50%);
        cursor: pointer;
        color: #999;
    }

    .extra-stop {
        position: relative;
        margin-top: 10px;
    }

    .contact-wrapper {
        padding: 20px 30px !important;
        border-radius: 16px;
    }

    .step-2-details .contact-wrapper .title {
        color: #475467;
        font-weight: 500;
        margin-bottom: 12px !important;
    }

    .step-2-details .contact-wrapper .from-location-name,
    .step-2-details .contact-wrapper .to-location-name {
        font-size: 20px;
        font-weight: 600;
        color: #292767;
    }

    .google-map-container {
        max-height: 160px;
        overflow: hidden;
        margin-top: 20px;
    }

    .property-type-text {
        font-weight: 500;
        font-size: 14px;
        line-height: 20px;
        color: #344054;
    }
</style>
@endsection

@section('content')
<header class="home-3 header quote-page-header">
    <div class="main-navigation">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="{{ route('frontend.index') }}">
                    <img src="{{ asset('frontend-assets/img/logo/logo.png') }}" alt="logo">
                </a>
                <div class="mobile-menu-right">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"><i class="far fa-stream"></i></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="main_nav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('frontend.index') ? 'active' : '' }}" href="{{ route('frontend.index') }}"> Home </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('frontend.about') ? 'active' : '' }}" href="{{ route('frontend.about') }}"> About </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('frontend.contact') ? 'active' : '' }}" href="{{ route('frontend.contact') }}">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('frontend.faqs') ? 'active' : '' }}" href="{{ route('frontend.faqs') }}">FAQ's</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('frontend.services') ? 'active' : '' }}" href="{{ route('frontend.services') }}">Services</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
<main class="main">
    <div class="container-fluid">
        <div class="row progress-section">
            <div class="col-md-12">
                <div class="progress-container">
                    <div class="progress"></div>

                    <ol>
                        <li class="current">Locations</li>
                        <li>Move Size</li>
                        <li>Date & Time</li>
                        <li>Details</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- contact area -->
    <div class="pt-5 pb-5">
        <div class="container">
            <div class="row">
                <form class="form-wizard">
                    <div class="col-md-12">
                        <!-- .steps-container -->
                        <div class="steps-container">
                            <div class="step current step-1 d-flex justify-content-center align-items-center">
                                <div class="step-1-details">
                                    <h3 class="text-center mb-4">Where are you going?</h3>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <i class="fas fa-map-marker-alt"></i>
                                                <input type="text" class="form-control" id="from-location" required placeholder="">
                                                <label for="from-location">From</label>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <i class="fas fa-map-marker-alt"></i>
                                                <input type="text" class="form-control" id="to-location" required placeholder="">
                                                <label for="to-location">To</label>
                                            </div>
                                        </div>
                                        <div class="col-md-12 add-stop-btn">
                                            <i class="fas fa-plus"></i> Add an extra stop
                                        </div>

                                        <div class="extra-stops-container" style="display: none;">
                                            <div class="form-group">
                                                <i class="fas fa-map-marker-alt"></i>
                                                <input type="text" class="form-control" placeholder="" id="extra-location" required>
                                                <label>Stopped at</label>
                                                <i class="fas fa-minus remove-stop-btn"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="step">
                                <div class="step-2-details">
                                    <h3 class="text-center mb-2">How will we access the properties?</h3>
                                    <p class="text-center mb-1">This helps us to estimate time</p>
                                    <div class="row">
                                        <div class="col-md-6 mt-4">
                                            <div class="contact-wrapper">
                                                <p class="mb-4 title">Pick Up</p>
                                                <h4 class="from-location-name d-flex gap-2">
                                                    <p><i class="fas fa-map-marker-alt"></i></p>
                                                    <p>1234 Street Name, Suburb, State, Postcode</p>
                                                </h4>
                                                <div class="google-map-container">
                                                    <div id="from-map"></div>
                                                </div>
                                                <p class="property-type-text mt-3">What type of property are we picking up from?</p>
                                                <div class="property-types"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mt-4">
                                            <div class="contact-wrapper">
                                                <p class="mb-4 title">Drop Off</p>
                                                <h4 class="to-location-name d-flex gap-2">
                                                    <span><i class="fas fa-map-marker-alt"></i></span>
                                                    <span>1234 Street Name, Suburb, State, Postcode</span>
                                                </h4>
                                                <div class="google-map-container">
                                                    <div id="to-map"></div>
                                                </div>
                                                <p class="property-type-text mt-3">What type of property are we dropping off at?</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- end contact area -->
</main>
<div class="sticky-footer text-right">
    <div class="container">
        <button type="button" class="theme-btn next-btn">Next</button>
    </div>
</div>
@endsection

@section('javascript')
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyACdLAZZHH4VMhmN1s-vb_Y4DnOnlbJK2U&libraries=places&components=country:AU"></script>
<script>
    $(document).ready(function() {
        ['from-location', 'to-location', 'extra-location'].forEach(id => {
            new google.maps.places.Autocomplete(document.getElementById(id));
        });
    });

    document.querySelector('.add-stop-btn').addEventListener('click', function() {
        const extraStopContainer = document.querySelector('.extra-stops-container');
        extraStopContainer.style.display = 'block';
        this.style.display = 'none';

        extraStopContainer.querySelector('.remove-stop-btn').addEventListener('click', function() {
            extraStopContainer.style.display = 'none';
            document.querySelector('.add-stop-btn').style.display = 'flex';
        });
    });

    document.querySelector('.next-btn').addEventListener('click', function() {
        let stepNumber = 1;
        const currentStep = document.querySelector('.step.current');
        const nextStep = currentStep.nextElementSibling;
        if (nextStep) {
            currentStep.classList.remove('current');
            nextStep.classList.add('current');

            const currentProgress = document.querySelector('.progress-container li.current');
            const nextProgress = currentProgress.nextElementSibling;
            if (nextProgress && stepNumber !== 1) {
                currentProgress.classList.remove('current');
                currentProgress.classList.add('done');
                nextProgress.classList.add('current');

                const progressBar = document.querySelector('.progress-container .progress');
                const progressWidth = (Array.from(document.querySelectorAll('.progress-container li')).indexOf(nextProgress) / (document.querySelectorAll('.progress-container li').length - 1)) * 100;
                progressBar.style.transform = `scaleX(${progressWidth / 100})`;
            }
            // check if stepNumber is 2 then show the map in from-map and to-map
            if (stepNumber === 1) {
                console.log('setting up map');
                var apiKey = "AIzaSyACdLAZZHH4VMhmN1s-vb_Y4DnOnlbJK2U";

                // Address of the location
                var address = "4 Seacombe Grove, Brighton";

                // Generate Static Maps URL
                var mapImageUrl = `https://maps.googleapis.com/maps/api/staticmap?center=${encodeURIComponent(address)}&zoom=15&size=600x190&maptype=roadmap&markers=color:red%7C${encodeURIComponent(address)}&key=${apiKey}`;
                console.log(mapImageUrl);

                // Set the image to the map container
                document.getElementById('from-map').innerHTML = `<img src="${mapImageUrl}" alt="Map Image">`;
                document.getElementById('to-map').innerHTML = `<img src="${mapImageUrl}" alt="Map Image">`;
            }
            console.log(stepNumber);
            stepNumber++;
        }
    });
</script>
@endsection