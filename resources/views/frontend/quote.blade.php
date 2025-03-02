@extends('layouts.frontend.app')

@section('css')
<link rel="stylesheet" href="{{ asset('frontend-assets/css/quote-page.css') }}">
<!-- Date Range Picker CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css">
@endsection

@section('content')
@include('partials.frontend.quote-page-header')
<main class="main">
    <div class="container-fluid">
        <div class="row progress-section">
            <div class="col-md-12">
                <div class="progress-container">
                    <div class="progress"></div>

                    <ol>
                        <li class="current">
                            <span class="step-text">Locations</span>
                            <span class="step-icon d-none"><i class="fas fa-map-marker-alt"></i></span>
                        </li>
                        <li>
                            <span class="step-text">Move Size</span>
                            <span class="step-icon d-none"><i class="fas fa-dolly"></i></span>
                        </li>
                        <li>
                            <span class="step-text">Date & Time</span>
                            <span class="step-icon d-none"><i class="far fa-calendar-alt"></i></span>
                        </li>
                        <li>
                            <span class="step-text">Details</span>
                            <span class="step-icon d-none"><i class="fas fa-info-circle"></i></span>
                        </li>
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
                                @include('frontend.steps.locations-step')
                            </div>
                            <div class="step">
                                @include('frontend.steps.property-access-step')
                            </div>
                            <div class="step">
                                @include('frontend.steps.move-and-size-step')
                            </div>
                            <div class="step">
                                @include('frontend.steps.date-time-step')
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
    @include('frontend.steps._js')
    <script src="https://cdn.jsdelivr.net/npm/moment/min/moment.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.js"></script>
@endsection