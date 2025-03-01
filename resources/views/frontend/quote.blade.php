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
        font-size: 15px;
        line-height: 20px;
        color: #344054;
    }
    
    .grid-three-one {
        display: grid;
        background-color: rgba(0, 0, 0, .06);
        grid-gap: 1px;
        border-radius: 8px;
        border: 1px solid rgba(0, 0, 0, .06);
        overflow: auto;
        grid-template-columns: repeat(3, 1fr);
    }
    
    .grid-two-one {
        display: grid;
        background-color: rgba(0, 0, 0, .06);
        grid-gap: 1px;
        border-radius: 8px;
        border: 1px solid rgba(0, 0, 0, .06);
        overflow: auto;
        grid-template-columns: repeat(2, 1fr);
    }
    
    .grid-one-one {
        display: grid;
        background-color: rgba(0, 0, 0, .06);
        grid-gap: 1px;
        border-radius: 8px;
        border: 1px solid rgba(0, 0, 0, .06);
        overflow: auto;
        grid-template-columns: repeat(1, 1fr);
    }
    
    .grid-three-one .form-check, .grid-two-one .form-check, .grid-one-one .form-check {
        background-color: #fff;
        margin: 0;
        align-items: flex-start;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
        padding: 15px 34px;
    }
    
    .form-check-inline:has(input:checked) {
        background-color: #f6f8fe;
    }
    .grid-three-one .form-check:hover, .grid-two-one .form-check:hover, .grid-one-one .form-check:hover {
        background-color: #f6f8fe;
    }
    
    .form-check-input {
        font-size: 18px;
    }
    
    #pickup-storage-company-name:focus, #pickup-storage-unit-number:focus {
        outline: none;
        box-shadow: none !important;
        border: 1px solid #89C63E;
    }
    
    #pickup-storage-company-name, #pickup-storage-unit-number {
        padding: 10px 14px !important;
    }
    
    .fs-14 {
        font-size: 14px;
    }
    
    .fs-15 {
        font-size: 15px;
    }
    
    .lh-22 {
        line-height: 22px;
    }
    
    .fw-500 {
        font-weight: 500;
    }
    
    .help-text-style {
        font-size: 15px;
        color: rgba(0, 0, 0, .85098);
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
                                                <p class="property-type-text mt-4">What type of property are we picking up from?</p>
                                                <div class="grid-three-one mt-2">
                                                    <label class="form-check form-check-inline" for="pickup-house">
                                                        <input class="form-check-input" type="radio" name="pickup-property-type" value="house" id="pickup-house" checked>
                                                        House
                                                    </label>
                                                    <label class="form-check form-check-inline" for="pickup-unit">
                                                        <input class="form-check-input" type="radio" name="pickup-property-type" value="unit" id="pickup-unit">
                                                        Unit
                                                    </label>
                                                    <label class="form-check form-check-inline" for="pickup-townhouse">
                                                        <input class="form-check-input" type="radio" name="pickup-property-type" value="townhouse" id="pickup-townhouse">
                                                        Townhouse
                                                    </label>
                                                    <label class="form-check form-check-inline" for="pickup-apartment">
                                                        <input class="form-check-input" type="radio" name="pickup-property-type" value="apartment" id="pickup-apartment">
                                                        Apartment
                                                    </label>
                                                    <label class="form-check form-check-inline" for="pickup-storage">
                                                        <input class="form-check-input" type="radio" name="pickup-property-type" value="storage" id="pickup-storage">
                                                        Storage
                                                    </label>
                                                    <label class="form-check form-check-inline" for="pickup-commercial">
                                                        <input class="form-check-input" type="radio" name="pickup-property-type" value="commercial" id="pickup-commercial">
                                                        Commercial
                                                    </label>
                                                </div>
                                                <div id="pickup-house-sub-levels">
                                                    <p class="property-type-text mt-4">Number of levels in this house?</p>
                                                    <div class="grid-three-one mt-2">
                                                        <label class="form-check form-check-inline" for="pickup-house-single">
                                                            <input class="form-check-input" type="radio" name="pickup-house-levels" value="single" id="pickup-house-single" checked>
                                                            Single
                                                        </label>
                                                        <label class="form-check form-check-inline" for="pickup-house-double">
                                                            <input class="form-check-input" type="radio" name="pickup-house-levels" value="double" id="pickup-house-double">
                                                            Double
                                                        </label>
                                                        <label class="form-check form-check-inline" for="pickup-house-triple">
                                                            <input class="form-check-input" type="radio" name="pickup-house-levels" value="triple" id="pickup-house-triple">
                                                            Triple
                                                        </label>
                                                    </div>
                                                </div>
                                                <div id="pickup-unit-sub-levels" class="d-none">
                                                    <div>
                                                        <p class="property-type-text mt-4">Are stairs or a lift required to reach your unit?</p>
                                                        <div class="grid-three-one mt-2">
                                                            <label class="form-check form-check-inline" for="pickup-no-stairs-lift">
                                                                <input class="form-check-input" type="radio" name="pickup-stairs-or-lift" value="no" id="pickup-no-stairs-lift">
                                                                No
                                                            </label>
                                                            <label class="form-check form-check-inline" for="pickup-stairs">
                                                                <input class="form-check-input" type="radio" name="pickup-stairs-or-lift" value="stairs" id="pickup-stairs">
                                                                Yes - Stairs
                                                            </label>
                                                            <label class="form-check form-check-inline" for="pickup-lift">
                                                                <input class="form-check-input" type="radio" name="pickup-stairs-or-lift" value="lift" id="pickup-lift">
                                                                Yes - Lift
                                                            </label>
                                                        </div>
                                                        <div id="pickup-lift-stairs-sub-levels" class="d-none">
                                                            <div id="pickup-flight-stairs">
                                                                <p class="property-type-text mt-4">How many flights of stairs?</p>
                                                                <div class="grid-three-one mt-2">
                                                                    <label class="form-check form-check-inline" for="pickup-stairs-one">
                                                                        <input class="form-check-input" type="radio" name="pickup-stairs-or-lift-count" value="one" id="pickup-stairs-one">
                                                                        1 Flight
                                                                    </label>
                                                                    <label class="form-check form-check-inline" for="pickup-stairs-two">
                                                                        <input class="form-check-input" type="radio" name="pickup-stairs-or-lift-count" value="two" id="pickup-stairs-two">
                                                                        2 Flights
                                                                    </label>
                                                                    <label class="form-check form-check-inline" for="pickup-stairs-three">
                                                                        <input class="form-check-input" type="radio" name="pickup-stairs-or-lift-count" value="three" id="pickup-stairs-three">
                                                                        3 Flights
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div id="pickup-flight" class="d-none">
                                                                <div class="alert alert-info mt-4 d-flex gap-2" role="alert">
                                                                    <div><i class="fas fa-info-circle"></i></div>
                                                                    <div>
                                                                        <p class="fw-500">Do you have a lift booking?</p>
                                                                        <p class="fs-15 lh-22 mt-2">If you have a lift booking or set time to access your lift, please tell us in the comments below.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <p class="property-type-text mt-4">Are all the rooms on the same level inside your unit?</p>
                                                        <div class="grid-one-one mt-2">
                                                            <label class="form-check form-check-inline" for="pickup-unit-single-level">
                                                                <input class="form-check-input" type="radio" name="pickup-unit-levels" value="single" id="pickup-unit-single-level">
                                                                Yes, all rooms are on the same level
                                                            </label>
                                                            <label class="form-check form-check-inline" for="pickup-unit-multiple-levels">
                                                                <input class="form-check-input" type="radio" name="pickup-unit-levels" value="multiple" id="pickup-unit-multiple-levels">
                                                                No, there’s multiple levels inside my unit
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="pickup-townhouse-sub-levels" class="d-none">
                                                    <p class="property-type-text mt-4">Number of levels in this townhouse?</p>
                                                    <div class="grid-three-one mt-2">
                                                        <label class="form-check form-check-inline" for="pickup-townhouse-single">
                                                            <input class="form-check-input" type="radio" name="pickup-townhouse-levels" value="single" id="pickup-townhouse-single">
                                                            Single
                                                        </label>
                                                        <label class="form-check form-check-inline" for="pickup-townhouse-double">
                                                            <input class="form-check-input" type="radio" name="pickup-townhouse-levels" value="double" id="pickup-townhouse-double">
                                                            Double
                                                        </label>
                                                        <label class="form-check form-check-inline" for="pickup-townhouse-triple">
                                                            <input class="form-check-input" type="radio" name="pickup-townhouse-levels" value="triple" id="pickup-townhouse-triple">
                                                            Triple
                                                        </label>
                                                    </div>
                                                </div>
                                                <div id="pickup-apartment-sub-levels" class="d-none">
                                                    <p class="property-type-text mt-4">Are stairs or a lift required to reach your apartment?</p>
                                                    <div class="grid-three-one mt-2">
                                                        <label class="form-check form-check-inline" for="pickup-apartment-no-stairs-lift">
                                                            <input class="form-check-input" type="radio" name="pickup-apartment-stairs-or-lift" value="no" id="pickup-apartment-no-stairs-lift">
                                                            No
                                                        </label>
                                                        <label class="form-check form-check-inline" for="pickup-apartment-stairs">
                                                            <input class="form-check-input" type="radio" name="pickup-apartment-stairs-or-lift" value="stairs" id="pickup-apartment-stairs">
                                                            Yes - Stairs
                                                        </label>
                                                        <label class="form-check form-check-inline" for="pickup-apartment-lift">
                                                            <input class="form-check-input" type="radio" name="pickup-apartment-stairs-or-lift" value="lift" id="pickup-apartment-lift">
                                                            Yes - Lift
                                                        </label>
                                                    </div>
                                                    <div id="pickup-apartment-lift-stairs-sub-levels" class="d-none">
                                                        <div id="pickup-apartment-flight-stairs">
                                                            <p class="property-type-text mt-4">How many flights of stairs?</p>
                                                            <div class="grid-three-one mt-2">
                                                                <label class="form-check form-check-inline" for="pickup-apartment-stairs-one">
                                                                    <input class="form-check-input" type="radio" name="pickup-apartment-stairs-or-lift-count" value="one" id="pickup-apartment-stairs-one">
                                                                    1 Flight
                                                                </label>
                                                                <label class="form-check form-check-inline" for="pickup-apartment-stairs-two">
                                                                    <input class="form-check-input" type="radio" name="pickup-apartment-stairs-or-lift-count" value="two" id="pickup-apartment-stairs-two">
                                                                    2 Flights
                                                                </label>
                                                                <label class="form-check form-check-inline" for="pickup-apartment-stairs-three">
                                                                    <input class="form-check-input" type="radio" name="pickup-apartment-stairs-or-lift-count" value="three" id="pickup-apartment-stairs-three">
                                                                    3 Flights
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div id="pickup-apartment-flight" class="d-none">
                                                            <div class="alert alert-info mt-4 d-flex gap-2" role="alert">
                                                                <div><i class="fas fa-info-circle"></i></div>
                                                                <div>
                                                                    <p class="fw-500">Do you have a lift booking?</p>
                                                                    <p class="fs-15 lh-22 mt-2">If you have a lift booking or set time to access your lift, please tell us in the comments below.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>          
                                                </div>
                                                <div id="pickup-storage-sub-levels" class="d-none">
                                                    <div class="mt-2">
                                                        <div class="mb-3 mt-4">
                                                            <label for="pickup-storage-company-name" class="property-type-text form-label">Storage company name</label>
                                                            <input type="text" name="pickup-storage-company-name" id="pickup-storage-company-name" class="form-control" placeholder="">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="pickup-storage-unit-number" class="property-type-text form-label">Storage unit number (if known)</label>
                                                            <input type="text" name="pickup-storage-unit-number" id="pickup-storage-unit-number" class="form-control" placeholder="">
                                                        </div>
                                                    </div>
                                                    <p class="property-type-text mt-4">What’s the walking distance from our truck to your storage unit?</p>
                                                    <div class="grid-one-one mt-2">
                                                        <label class="form-check form-check-inline" for="pickup-storage-walking-distance-1">
                                                            <input class="form-check-input" type="radio" name="pickup-storage-walking-distance" value="1" id="pickup-storage-walking-distance-1" checked>
                                                            You can drive up to the door (< 10m walk)
                                                        </label>
                                                        <label class="form-check form-check-inline" for="pickup-storage-walking-distance-2">
                                                            <input class="form-check-input" type="radio" name="pickup-storage-walking-distance" value="2" id="pickup-storage-walking-distance-2">
                                                            You can’t drive near to the door (> 20m walk)
                                                        </label>
                                                        <label class="form-check form-check-inline" for="pickup-storage-walking-distance-3">
                                                            <input class="form-check-input" type="radio" name="pickup-storage-walking-distance" value="3" id="pickup-storage-walking-distance-3">
                                                            Use a lift to access storage unit
                                                        </label>
                                                        <label class="form-check form-check-inline" for="pickup-storage-walking-distance-4">
                                                            <input class="form-check-input" type="radio" name="pickup-storage-walking-distance" value="4" id="pickup-storage-walking-distance-4">
                                                            I don't know
                                                        </label>
                                                    </div>
                                                </div>
                                                <div id="pickup-commercial-sub-levels" class="d-none">
                                                    <p class="property-type-text mt-4">What type of commercial property are we picking up from?</p>
                                                    <div class="grid-two-one mt-2">
                                                        <label class="form-check form-check-inline" for="pickup-commercial-office">
                                                            <input class="form-check-input" type="radio" name="pickup-commercial-property-type" value="office" id="pickup-commercial-office">
                                                            Office
                                                        </label>
                                                        <label class="form-check form-check-inline" for="pickup-commercial-industrial">
                                                            <input class="form-check-input" type="radio" name="pickup-commercial-property-type" value="industrial" id="pickup-commercial-industrial">
                                                            Industrial
                                                        </label>
                                                        <label class="form-check form-check-inline" for="pickup-commercial-shop">
                                                            <input class="form-check-input" type="radio" name="pickup-commercial-property-type" value="shop" id="pickup-commercial-shop">
                                                            Shop / Retail
                                                        </label>
                                                        <label class="form-check form-check-inline" for="pickup-commercial-other">
                                                            <input class="form-check-input" type="radio" name="pickup-commercial-property-type" value="other" id="pickup-commercial-other">
                                                            Other
                                                        </label>
                                                    </div>
                                                    <p class="property-type-text mt-4">Are stairs or a lift required to reach your commercial property?</p>
                                                    <div class="grid-three-one mt-2">
                                                        <label class="form-check form-check-inline" for="pickup-commercial-no-stairs-lift">
                                                            <input class="form-check-input" type="radio" name="pickup-commercial-stairs-or-lift" value="no" id="pickup-commercial-no-stairs-lift">
                                                            No
                                                        </label>
                                                        <label class="form-check form-check-inline" for="pickup-commercial-stairs">
                                                            <input class="form-check-input" type="radio" name="pickup-commercial-stairs-or-lift" value="stairs" id="pickup-commercial-stairs">
                                                            Yes - Stairs
                                                        </label>
                                                        <label class="form-check form-check-inline" for="pickup-commercial-lift">
                                                            <input class="form-check-input" type="radio" name="pickup-commercial-stairs-or-lift" value="lift" id="pickup-commercial-lift">
                                                            Yes - Lift
                                                        </label>
                                                    </div>
                                                    <div id="pickup-commercial-lift-stairs-sub-levels" class="d-none">
                                                        <div id="pickup-commercial-flight-stairs">
                                                            <p class="property-type-text mt-4">How many flights of stairs?</p>
                                                            <div class="grid-three-one mt-2">
                                                                <label class="form-check form-check-inline" for="pickup-commercial-stairs-one">
                                                                    <input class="form-check-input" type="radio" name="pickup-commercial-stairs-or-lift-count" value="one" id="pickup-commercial-stairs-one">
                                                                    1 Flight
                                                                </label>
                                                                <label class="form-check form-check-inline" for="pickup-commercial-stairs-two">
                                                                    <input class="form-check-input" type="radio" name="pickup-commercial-stairs-or-lift-count" value="two" id="pickup-commercial-stairs-two">
                                                                    2 Flights
                                                                </label>
                                                                <label class="form-check form-check-inline" for="pickup-commercial-stairs-three">
                                                                    <input class="form-check-input" type="radio" name="pickup-commercial-stairs-or-lift-count" value="three" id="pickup-commercial-stairs-three">
                                                                    3 Flights
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                    
                                                <div id="pickup-truck-parking">
                                                    <p class="property-type-text mt-4">Where will our truck be parked?</p>
                                                    <div class="grid-two-one mt-2">
                                                        <label class="form-check form-check-inline" for="pickup-driverway">
                                                            <input class="form-check-input" type="radio" name="pickup-truck-parking" value="driverway" id="pickup-driverway" checked>
                                                            Driverway
                                                        </label>
                                                        <label class="form-check form-check-inline" for="pickup-street">
                                                            <input class="form-check-input" type="radio" name="pickup-truck-parking" value="street" id="pickup-street">
                                                            Street
                                                        </label>
                                                    </div>
                                                </div>
                                                <div id="pickup-comments">
                                                    <p class="property-type-text mt-4">Comments?</p>
                                                    <p class="fs-14">Anything we should know about access to this property?</p>
                                                    <textarea class="form-control" name="pickup-comments" rows="3"></textarea>
                                                </div>
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
                                                <p class="property-type-text mt-4">What type of property are we dropping off at?</p>
                                                <div class="grid-three-one mt-2">
                                                    <label class="form-check form-check-inline" for="dropoff-house">
                                                        <input class="form-check-input" type="radio" name="drop-property-type" value="house" id="dropoff-house" checked>
                                                        House
                                                    </label>
                                                    <label class="form-check form-check-inline" for="dropoff-unit">
                                                        <input class="form-check-input" type="radio" name="drop-property-type" value="unit" id="dropoff-unit">
                                                        Unit
                                                    </label>
                                                    <label class="form-check form-check-inline" for="dropoff-townhouse">
                                                        <input class="form-check-input" type="radio" name="drop-property-type" value="townhouse" id="dropoff-townhouse">
                                                        Townhouse
                                                    </label>
                                                    <label class="form-check form-check-inline" for="dropoff-apartment">
                                                        <input class="form-check-input" type="radio" name="drop-property-type" value="apartment" id="dropoff-apartment">
                                                        Apartment
                                                    </label>
                                                    <label class="form-check form-check-inline" for="dropoff-storage">
                                                        <input class="form-check-input" type="radio" name="drop-property-type" value="storage" id="dropoff-storage">
                                                        Storage
                                                    </label>
                                                    <label class="form-check form-check-inline" for="dropoff-commercial">
                                                        <input class="form-check-input" type="radio" name="drop-property-type" value="commercial" id="dropoff-commercial">
                                                        Commercial
                                                    </label>
                                                </div>
                                                <div id="dropoff-house-sub-levels">
                                                    <p class="property-type-text mt-4">Number of levels in this house?</p>
                                                    <div class="grid-three-one mt-2">
                                                        <label class="form-check form-check-inline" for="dropoff-house-single">
                                                            <input class="form-check-input" type="radio" name="dropoff-house-levels" value="single" id="dropoff-house-single" checked>
                                                            Single
                                                        </label>
                                                        <label class="form-check form-check-inline" for="dropoff-house-double">
                                                            <input class="form-check-input" type="radio" name="dropoff-house-levels" value="double" id="dropoff-house-double">
                                                            Double
                                                        </label>
                                                        <label class="form-check form-check-inline" for="dropoff-house-triple">
                                                            <input class="form-check-input" type="radio" name="dropoff-house-levels" value="triple" id="dropoff-house-triple">
                                                            Triple
                                                        </label>
                                                    </div>
                                                </div>
                                                <div id="dropoff-unit-sub-levels" class="d-none">
                                                    <div>
                                                        <p class="property-type-text mt-4">Are stairs or a lift required to reach your unit?</p>
                                                        <div class="grid-three-one mt-2">
                                                            <label class="form-check form-check-inline" for="dropoff-no-stairs-lift">
                                                                <input class="form-check-input" type="radio" name="dropoff-stairs-or-lift" value="no" id="dropoff-no-stairs-lift">
                                                                No
                                                            </label>
                                                            <label class="form-check form-check-inline" for="dropoff-stairs">
                                                                <input class="form-check-input" type="radio" name="dropoff-stairs-or-lift" value="stairs" id="dropoff-stairs">
                                                                Yes - Stairs
                                                            </label>
                                                            <label class="form-check form-check-inline" for="dropoff-lift">
                                                                <input class="form-check-input" type="radio" name="dropoff-stairs-or-lift" value="lift" id="dropoff-lift">
                                                                Yes - Lift
                                                            </label>
                                                        </div>
                                                        <div id="dropoff-lift-stairs-sub-levels" class="d-none">
                                                            <div id="dropoff-flight-stairs">
                                                                <p class="property-type-text mt-4">How many flights of stairs?</p>
                                                                <div class="grid-three-one mt-2">
                                                                    <label class="form-check form-check-inline" for="dropoff-stairs-one">
                                                                        <input class="form-check-input" type="radio" name="dropoff-stairs-or-lift-count" value="one" id="dropoff-stairs-one">
                                                                        1 Flight
                                                                    </label>
                                                                    <label class="form-check form-check-inline" for="dropoff-stairs-two">
                                                                        <input class="form-check-input" type="radio" name="dropoff-stairs-or-lift-count" value="two" id="dropoff-stairs-two">
                                                                        2 Flights
                                                                    </label>
                                                                    <label class="form-check form-check-inline" for="dropoff-stairs-three">
                                                                        <input class="form-check-input" type="radio" name="dropoff-stairs-or-lift-count" value="three" id="dropoff-stairs-three">
                                                                        3 Flights
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div id="dropoff-flight" class="d-none">
                                                                <div class="alert alert-info mt-4 d-flex gap-2" role="alert">
                                                                    <div><i class="fas fa-info-circle"></i></div>
                                                                    <div>
                                                                        <p class="fw-500">Do you have a lift booking?</p>
                                                                        <p class="fs-15 lh-22 mt-2">If you have a lift booking or set time to access your lift, please tell us in the comments below.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <p class="property-type-text mt-4">Are all the rooms on the same level inside your unit?</p>
                                                        <div class="grid-one-one mt-2">
                                                            <label class="form-check form-check-inline" for="dropoff-unit-single-level">
                                                                <input class="form-check-input" type="radio" name="dropoff-unit-levels" value="single" id="dropoff-unit-single-level">
                                                                Yes, all rooms are on the same level
                                                            </label>
                                                            <label class="form-check form-check-inline" for="dropoff-unit-multiple-levels">
                                                                <input class="form-check-input" type="radio" name="dropoff-unit-levels" value="multiple" id="dropoff-unit-multiple-levels">
                                                                No, there’s multiple levels inside my unit
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="dropoff-townhouse-sub-levels" class="d-none">
                                                    <p class="property-type-text mt-4">Number of levels in this townhouse?</p>
                                                    <div class="grid-three-one mt-2">
                                                        <label class="form-check form-check-inline" for="dropoff-townhouse-single">
                                                            <input class="form-check-input" type="radio" name="dropoff-townhouse-levels" value="single" id="dropoff-townhouse-single">
                                                            Single
                                                        </label>
                                                        <label class="form-check form-check-inline" for="dropoff-townhouse-double">
                                                            <input class="form-check-input" type="radio" name="dropoff-townhouse-levels" value="double" id="dropoff-townhouse-double">
                                                            Double
                                                        </label>
                                                        <label class="form-check form-check-inline" for="dropoff-townhouse-triple">
                                                            <input class="form-check-input" type="radio" name="dropoff-townhouse-levels" value="triple" id="dropoff-townhouse-triple">
                                                            Triple
                                                        </label>
                                                    </div>
                                                </div>
                                                <div id="dropoff-apartment-sub-levels" class="d-none">
                                                    <p class="property-type-text mt-4">Are stairs or a lift required to reach your apartment?</p>
                                                    <div class="grid-three-one mt-2">
                                                        <label class="form-check form-check-inline" for="dropoff-apartment-no-stairs-lift">
                                                            <input class="form-check-input" type="radio" name="dropoff-apartment-stairs-or-lift" value="no" id="dropoff-apartment-no-stairs-lift">
                                                            No
                                                        </label>
                                                        <label class="form-check form-check-inline" for="dropoff-apartment-stairs">
                                                            <input class="form-check-input" type="radio" name="dropoff-apartment-stairs-or-lift" value="stairs" id="dropoff-apartment-stairs">
                                                            Yes - Stairs
                                                        </label>
                                                        <label class="form-check form-check-inline" for="dropoff-apartment-lift">
                                                            <input class="form-check-input" type="radio" name="dropoff-apartment-stairs-or-lift" value="lift" id="dropoff-apartment-lift">
                                                            Yes - Lift
                                                        </label>
                                                    </div>
                                                    <div id="dropoff-apartment-lift-stairs-sub-levels" class="d-none">
                                                        <div id="dropoff-apartment-flight-stairs">
                                                            <p class="property-type-text mt-4">How many flights of stairs?</p>
                                                            <div class="grid-three-one mt-2">
                                                                <label class="form-check form-check-inline" for="dropoff-apartment-stairs-one">
                                                                    <input class="form-check-input" type="radio" name="dropoff-apartment-stairs-or-lift-count" value="one" id="dropoff-apartment-stairs-one">
                                                                    1 Flight
                                                                </label>
                                                                <label class="form-check form-check-inline" for="dropoff-apartment-stairs-two">
                                                                    <input class="form-check-input" type="radio" name="dropoff-apartment-stairs-or-lift-count" value="two" id="dropoff-apartment-stairs-two">
                                                                    2 Flights
                                                                </label>
                                                                <label class="form-check form-check-inline" for="dropoff-apartment-stairs-three">
                                                                    <input class="form-check-input" type="radio" name="dropoff-apartment-stairs-or-lift-count" value="three" id="dropoff-apartment-stairs-three">
                                                                    3 Flights
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div id="dropoff-apartment-flight" class="d-none">
                                                            <div class="alert alert-info mt-4 d-flex gap-2" role="alert">
                                                                <div><i class="fas fa-info-circle"></i></div>
                                                                <div>
                                                                    <p class="fw-500">Do you have a lift booking?</p>
                                                                    <p class="fs-15 lh-22 mt-2">If you have a lift booking or set time to access your lift, please tell us in the comments below.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="dropoff-storage-sub-levels" class="d-none">
                                                    <div class="mt-2">
                                                        <div class="mb-3 mt-4">
                                                            <label for="dropoff-storage-company-name" class="property-type-text form-label">Storage company name</label>
                                                            <input type="text" name="dropoff-storage-company-name" id="dropoff-storage-company-name" class="form-control" placeholder="">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="dropoff-storage-unit-number" class="property-type-text form-label">Storage unit number (if known)</label>
                                                            <input type="text" name="dropoff-storage-unit-number" id="dropoff-storage-unit-number" class="form-control" placeholder="">
                                                        </div>
                                                    </div>
                                                    <p class="property-type-text mt-4">What’s the walking distance from our truck to your storage unit?</p>
                                                    <div class="grid-one-one mt-2">
                                                        <label class="form-check form-check-inline" for="dropoff-storage-walking-distance-1">
                                                            <input class="form-check-input" type="radio" name="dropoff-storage-walking-distance" value="1" id="dropoff-storage-walking-distance-1" checked>
                                                            You can drive up to the door (< 10m walk)
                                                        </label>
                                                        <label class="form-check form-check-inline" for="dropoff-storage-walking-distance-2">
                                                            <input class="form-check-input" type="radio" name="dropoff-storage-walking-distance" value="2" id="dropoff-storage-walking-distance-2">
                                                            You can’t drive near to the door (> 20m walk)
                                                        </label>
                                                        <label class="form-check form-check-inline" for="dropoff-storage-walking-distance-3">
                                                            <input class="form-check-input" type="radio" name="dropoff-storage-walking-distance" value="3" id="dropoff-storage-walking-distance-3">
                                                            Use a lift to access storage unit
                                                        </label>
                                                        <label class="form-check form-check-inline" for="dropoff-storage-walking-distance-4">
                                                            <input class="form-check-input" type="radio" name="dropoff-storage-walking-distance" value="4" id="dropoff-storage-walking-distance-4">
                                                            I don't know
                                                        </label>
                                                    </div>
                                                </div>
                                                <div id="dropoff-commercial-sub-levels" class="d-none">
                                                    <p class="property-type-text mt-4">What type of commercial property are we dropping off at?</p>
                                                    <div class="grid-two-one mt-2">
                                                        <label class="form-check form-check-inline" for="dropoff-commercial-office">
                                                            <input class="form-check-input" type="radio" name="dropoff-commercial-property-type" value="office" id="dropoff-commercial-office">
                                                            Office
                                                        </label>
                                                        <label class="form-check form-check-inline" for="dropoff-commercial-industrial">
                                                            <input class="form-check-input" type="radio" name="dropoff-commercial-property-type" value="industrial" id="dropoff-commercial-industrial">
                                                            Industrial
                                                        </label>
                                                        <label class="form-check form-check-inline" for="dropoff-commercial-shop">
                                                            <input class="form-check-input" type="radio" name="dropoff-commercial-property-type" value="shop" id="dropoff-commercial-shop">
                                                            Shop / Retail
                                                        </label>
                                                        <label class="form-check form-check-inline" for="dropoff-commercial-other">
                                                            <input class="form-check-input" type="radio" name="dropoff-commercial-property-type" value="other" id="dropoff-commercial-other">
                                                            Other
                                                        </label>
                                                    </div>
                                                    <p class="property-type-text mt-4">Are stairs or a lift required to reach your commercial property?</p>
                                                    <div class="grid-three-one mt-2">
                                                        <label class="form-check form-check-inline" for="dropoff-commercial-no-stairs-lift">
                                                            <input class="form-check-input" type="radio" name="dropoff-commercial-stairs-or-lift" value="no" id="dropoff-commercial-no-stairs-lift">
                                                            No
                                                        </label>
                                                        <label class="form-check form-check-inline" for="dropoff-commercial-stairs">
                                                            <input class="form-check-input" type="radio" name="dropoff-commercial-stairs-or-lift" value="stairs" id="dropoff-commercial-stairs">
                                                            Yes - Stairs
                                                        </label>
                                                        <label class="form-check form-check-inline" for="dropoff-commercial-lift">
                                                            <input class="form-check-input" type="radio" name="dropoff-commercial-stairs-or-lift" value="lift" id="dropoff-commercial-lift">
                                                            Yes - Lift
                                                        </label>
                                                    </div>
                                                    <div id="dropoff-commercial-lift-stairs-sub-levels" class="d-none">
                                                        <div id="dropoff-commercial-flight-stairs">
                                                            <p class="property-type-text mt-4">How many flights of stairs?</p>
                                                            <div class="grid-three-one mt-2">
                                                                <label class="form-check form-check-inline" for="dropoff-commercial-stairs-one">
                                                                    <input class="form-check-input" type="radio" name="dropoff-commercial-stairs-or-lift-count" value="one" id="dropoff-commercial-stairs-one">
                                                                    1 Flight
                                                                </label>
                                                                <label class="form-check form-check-inline" for="dropoff-commercial-stairs-two">
                                                                    <input class="form-check-input" type="radio" name="dropoff-commercial-stairs-or-lift-count" value="two" id="dropoff-commercial-stairs-two">
                                                                    2 Flights
                                                                </label>
                                                                <label class="form-check form-check-inline" for="dropoff-commercial-stairs-three">
                                                                    <input class="form-check-input" type="radio" name="dropoff-commercial-stairs-or-lift-count" value="three" id="dropoff-commercial-stairs-three">
                                                                    3 Flights
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="dropoff-truck-parking">
                                                    <p class="property-type-text mt-4">Where will our truck be parked?</p>
                                                    <div class="grid-two-one mt-2">
                                                        <label class="form-check form-check-inline" for="dropoff-driverway">
                                                            <input class="form-check-input" type="radio" name="dropoff-truck-parking" value="driverway" id="dropoff-driverway" checked>
                                                            Driverway
                                                        </label>
                                                        <label class="form-check form-check-inline" for="dropoff-street">
                                                            <input class="form-check-input" type="radio" name="dropoff-truck-parking" value="street" id="dropoff-street">
                                                            Street
                                                        </label>
                                                    </div>
                                                </div>
                                                <div id="dropoff-comments">
                                                    <p class="property-type-text mt-4">Comments?</p>
                                                    <p class="fs-14">Anything we should know about access to this property?</p>
                                                    <textarea class="form-control" name="dropoff-comments" rows="3"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-5 mb-5">
                                        <div class="col-md-12">
                                            <div class="text-center">
                                                <h6 class="mb-2">Complex Moving Requirements?</h6>
                                                <p class="help-text-style">
                                                    Is your move a little out of the ordinary? Need packing help, rubbish removal or storage?
                                                </p>
                                                <p class="help-text-style">
                                                    Call our office on <a href="tel:1300988114" style="color: #4c47e1;">1300 988 114</a> today.
                                                </p>
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
                // var apiKey = "AIzaSyACdLAZZHH4VMhmN1s-vb_Y4DnOnlbJK2U";

                // // Address of the location
                // var address = "4 Seacombe Grove, Brighton";

                // // Generate Static Maps URL
                // var mapImageUrl = `https://maps.googleapis.com/maps/api/staticmap?center=${encodeURIComponent(address)}&zoom=15&size=600x190&maptype=roadmap&markers=color:red%7C${encodeURIComponent(address)}&key=${apiKey}`;
                // console.log(mapImageUrl);
                
                var mapImageUrl = "https://maps.googleapis.com/maps/api/staticmap?center=4%20Seacombe%20Grove%2C%20Brighton&zoom=15&size=600x190&maptype=roadmap&markers=color:red%7C4%20Seacombe%20Grove%2C%20Brighton&key=AIzaSyACdLAZZHH4VMhmN1s-vb_Y4DnOnlbJK2U";

                // Set the image to the map container
                document.getElementById('from-map').innerHTML = `<img src="${mapImageUrl}" alt="Map Image">`;
                document.getElementById('to-map').innerHTML = `<img src="${mapImageUrl}" alt="Map Image">`;
            }
            console.log(stepNumber);
            stepNumber++;
        }
    });
    
    
    // propery access pickup JS Start
    document.querySelectorAll('input[name="pickup-property-type"]').forEach(input => {
        input.addEventListener('change', function() {
            if (this.value === 'house') {
                document.getElementById('pickup-house-sub-levels').classList.remove('d-none');
                document.getElementById('pickup-unit-sub-levels').classList.add('d-none');
                document.getElementById('pickup-townhouse-sub-levels').classList.add('d-none');
                document.getElementById('pickup-apartment-sub-levels').classList.add('d-none');
                document.getElementById('pickup-storage-sub-levels').classList.add('d-none');
                document.getElementById('pickup-commercial-sub-levels').classList.add('d-none');
            } else if (this.value === 'unit') {
                document.getElementById('pickup-unit-sub-levels').classList.remove('d-none');
                document.getElementById('pickup-house-sub-levels').classList.add('d-none');
                document.getElementById('pickup-townhouse-sub-levels').classList.add('d-none');
                document.getElementById('pickup-apartment-sub-levels').classList.add('d-none');
                document.getElementById('pickup-storage-sub-levels').classList.add('d-none');
                document.getElementById('pickup-commercial-sub-levels').classList.add('d-none');
            } else if (this.value === 'townhouse') {
                document.getElementById('pickup-townhouse-sub-levels').classList.remove('d-none');
                document.getElementById('pickup-house-sub-levels').classList.add('d-none');
                document.getElementById('pickup-unit-sub-levels').classList.add('d-none');
                document.getElementById('pickup-apartment-sub-levels').classList.add('d-none');
                document.getElementById('pickup-storage-sub-levels').classList.add('d-none');
                document.getElementById('pickup-commercial-sub-levels').classList.add('d-none');
            } else if (this.value === 'apartment') {
                document.getElementById('pickup-apartment-sub-levels').classList.remove('d-none');
                document.getElementById('pickup-house-sub-levels').classList.add('d-none');
                document.getElementById('pickup-unit-sub-levels').classList.add('d-none');
                document.getElementById('pickup-townhouse-sub-levels').classList.add('d-none');
                document.getElementById('pickup-storage-sub-levels').classList.add('d-none');
                document.getElementById('pickup-commercial-sub-levels').classList.add('d-none');
            } else if (this.value === 'storage') {
                document.getElementById('pickup-storage-sub-levels').classList.remove('d-none');
                document.getElementById('pickup-house-sub-levels').classList.add('d-none');
                document.getElementById('pickup-unit-sub-levels').classList.add('d-none');
                document.getElementById('pickup-townhouse-sub-levels').classList.add('d-none');
                document.getElementById('pickup-apartment-sub-levels').classList.add('d-none');
                document.getElementById('pickup-commercial-sub-levels').classList.add('d-none');
            } else if (this.value === 'commercial') {
                document.getElementById('pickup-commercial-sub-levels').classList.remove('d-none');
                document.getElementById('pickup-house-sub-levels').classList.add('d-none');
                document.getElementById('pickup-unit-sub-levels').classList.add('d-none');
                document.getElementById('pickup-townhouse-sub-levels').classList.add('d-none');
                document.getElementById('pickup-apartment-sub-levels').classList.add('d-none');
                document.getElementById('pickup-storage-sub-levels').classList.add('d-none');
            }
        });
    });
    
    document.querySelectorAll('input[name="pickup-stairs-or-lift"]').forEach(input => {
        input.addEventListener('change', function() {
            if (this.value === 'stairs') {
                document.getElementById('pickup-lift-stairs-sub-levels').classList.remove('d-none');
                document.getElementById('pickup-flight-stairs').classList.remove('d-none');
                document.getElementById('pickup-flight').classList.add('d-none');
            } else if(this.value === 'lift') {
                document.getElementById('pickup-lift-stairs-sub-levels').classList.remove('d-none');
                document.getElementById('pickup-flight').classList.remove('d-none');
                document.getElementById('pickup-flight-stairs').classList.add('d-none');
            } else {
                document.getElementById('pickup-lift-stairs-sub-levels').classList.add('d-none');
                document.getElementById('pickup-flight').classList.add('d-none');
                document.getElementById('pickup-flight-stairs').classList.add('d-none');
            }
        });
    });
    
    document.querySelectorAll('input[name="pickup-apartment-stairs-or-lift"]').forEach(input => {
        input.addEventListener('change', function() {
            if (this.value === 'stairs') {
                document.getElementById('pickup-apartment-lift-stairs-sub-levels').classList.remove('d-none');
                document.getElementById('pickup-apartment-flight-stairs').classList.remove('d-none');
                document.getElementById('pickup-apartment-flight').classList.add('d-none');
            } else if(this.value === 'lift') {
                document.getElementById('pickup-apartment-lift-stairs-sub-levels').classList.remove('d-none');
                document.getElementById('pickup-apartment-flight').classList.remove('d-none');
                document.getElementById('pickup-apartment-flight-stairs').classList.add('d-none');
            } else {
                document.getElementById('pickup-apartment-lift-stairs-sub-levels').classList.add('d-none');
                document.getElementById('pickup-apartment-flight').classList.add('d-none');
                document.getElementById('pickup-apartment-flight-stairs').classList.add('d-none');
            }
        });
    });
    
    document.querySelectorAll('input[name="pickup-commercial-stairs-or-lift"]').forEach(input => {
        input.addEventListener('change', function() {
            if (this.value === 'stairs') {
                document.getElementById('pickup-commercial-lift-stairs-sub-levels').classList.remove('d-none');
                document.getElementById('pickup-commercial-flight-stairs').classList.remove('d-none');
            } else if(this.value === 'lift') {
                document.getElementById('pickup-commercial-lift-stairs-sub-levels').classList.remove('d-none');
                document.getElementById('pickup-commercial-flight-stairs').classList.add('d-none');
            } else {
                document.getElementById('pickup-commercial-lift-stairs-sub-levels').classList.add('d-none');
                document.getElementById('pickup-commercial-flight-stairs').classList.add('d-none');
            }
        });
    });
    // propery access pickup JS End
    
    // propery access dropoff JS Start
    document.querySelectorAll('input[name="drop-property-type"]').forEach(input => {
        input.addEventListener('change', function() {
            if (this.value === 'house') {
                document.getElementById('dropoff-house-sub-levels').classList.remove('d-none');
                document.getElementById('dropoff-unit-sub-levels').classList.add('d-none');
                document.getElementById('dropoff-townhouse-sub-levels').classList.add('d-none');
                document.getElementById('dropoff-apartment-sub-levels').classList.add('d-none');
                document.getElementById('dropoff-storage-sub-levels').classList.add('d-none');
                document.getElementById('dropoff-commercial-sub-levels').classList.add('d-none');
            } else if (this.value === 'unit') {
                document.getElementById('dropoff-unit-sub-levels').classList.remove('d-none');
                document.getElementById('dropoff-house-sub-levels').classList.add('d-none');
                document.getElementById('dropoff-townhouse-sub-levels').classList.add('d-none');
                document.getElementById('dropoff-apartment-sub-levels').classList.add('d-none');
                document.getElementById('dropoff-storage-sub-levels').classList.add('d-none');
                document.getElementById('dropoff-commercial-sub-levels').classList.add('d-none');
            } else if (this.value === 'townhouse') {
                document.getElementById('dropoff-townhouse-sub-levels').classList.remove('d-none');
                document.getElementById('dropoff-house-sub-levels').classList.add('d-none');
                document.getElementById('dropoff-unit-sub-levels').classList.add('d-none');
                document.getElementById('dropoff-apartment-sub-levels').classList.add('d-none');
                document.getElementById('dropoff-storage-sub-levels').classList.add('d-none');
                document.getElementById('dropoff-commercial-sub-levels').classList.add('d-none');
            } else if (this.value === 'apartment') {
                document.getElementById('dropoff-apartment-sub-levels').classList.remove('d-none');
                document.getElementById('dropoff-house-sub-levels').classList.add('d-none');
                document.getElementById('dropoff-unit-sub-levels').classList.add('d-none');
                document.getElementById('dropoff-townhouse-sub-levels').classList.add('d-none');
                document.getElementById('dropoff-storage-sub-levels').classList.add('d-none');
                document.getElementById('dropoff-commercial-sub-levels').classList.add('d-none');
            } else if (this.value === 'storage') {
                document.getElementById('dropoff-storage-sub-levels').classList.remove('d-none');
                document.getElementById('dropoff-house-sub-levels').classList.add('d-none');
                document.getElementById('dropoff-unit-sub-levels').classList.add('d-none');
                document.getElementById('dropoff-townhouse-sub-levels').classList.add('d-none');
                document.getElementById('dropoff-apartment-sub-levels').classList.add('d-none');
                document.getElementById('dropoff-commercial-sub-levels').classList.add('d-none');
            } else if (this.value === 'commercial') {
                document.getElementById('dropoff-commercial-sub-levels').classList.remove('d-none');
                document.getElementById('dropoff-house-sub-levels').classList.add('d-none');
                document.getElementById('dropoff-unit-sub-levels').classList.add('d-none');
                document.getElementById('dropoff-townhouse-sub-levels').classList.add('d-none');
                document.getElementById('dropoff-apartment-sub-levels').classList.add('d-none');
                document.getElementById('dropoff-storage-sub-levels').classList.add('d-none');
            }
        });
    });
    
    document.querySelectorAll('input[name="dropoff-stairs-or-lift"]').forEach(input => {
        input.addEventListener('change', function() {
            if (this.value === 'stairs') {
                document.getElementById('dropoff-lift-stairs-sub-levels').classList.remove('d-none');
                document.getElementById('dropoff-flight-stairs').classList.remove('d-none');
                document.getElementById('dropoff-flight').classList.add('d-none');
            } else if(this.value === 'lift') {
                document.getElementById('dropoff-lift-stairs-sub-levels').classList.remove('d-none');
                document.getElementById('dropoff-flight').classList.remove('d-none');
                document.getElementById('dropoff-flight-stairs').classList.add('d-none');
            } else {
                document.getElementById('dropoff-lift-stairs-sub-levels').classList.add('d-none');
                document.getElementById('dropoff-flight').classList.add('d-none');
                document.getElementById('dropoff-flight-stairs').classList.add('d-none');
            }
        });
    });
    
    document.querySelectorAll('input[name="dropoff-apartment-stairs-or-lift"]').forEach(input => {
        input.addEventListener('change', function() {
            if (this.value === 'stairs') {
                document.getElementById('dropoff-apartment-lift-stairs-sub-levels').classList.remove('d-none');
                document.getElementById('dropoff-apartment-flight-stairs').classList.remove('d-none');
                document.getElementById('dropoff-apartment-flight').classList.add('d-none');
            } else if(this.value === 'lift') {
                document.getElementById('dropoff-apartment-lift-stairs-sub-levels').classList.remove('d-none');
                document.getElementById('dropoff-apartment-flight').classList.remove('d-none');
                document.getElementById('dropoff-apartment-flight-stairs').classList.add('d-none');
            } else {
                document.getElementById('dropoff-apartment-lift-stairs-sub-levels').classList.add('d-none');
                document.getElementById('dropoff-apartment-flight').classList.add('d-none');
                document.getElementById('dropoff-apartment-flight-stairs').classList.add('d-none');
            }
        });
    });
    
    document.querySelectorAll('input[name="dropoff-commercial-stairs-or-lift"]').forEach(input => {
        input.addEventListener('change', function() {
            if (this.value === 'stairs') {
                document.getElementById('dropoff-commercial-lift-stairs-sub-levels').classList.remove('d-none');
                document.getElementById('dropoff-commercial-flight-stairs').classList.remove('d-none');
            } else if(this.value === 'lift') {
                document.getElementById('dropoff-commercial-lift-stairs-sub-levels').classList.remove('d-none');
                document.getElementById('dropoff-commercial-flight-stairs').classList.add('d-none');
            } else {
                document.getElementById('dropoff-commercial-lift-stairs-sub-levels').classList.add('d-none');
                document.getElementById('dropoff-commercial-flight-stairs').classList.add('d-none');
            }
        });
    });
    // propery access dropoff JS End
</script>
@endsection