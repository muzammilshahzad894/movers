@extends('layouts.frontend.app')

@section('css')
<link rel="stylesheet" href="{{ asset('frontend-assets/css/quote-page.css') }}">
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
                                @include('frontend.steps.locations-step')
                            </div>
                            <div class="step">
                                @include('frontend.steps.property-access-step')
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
@endsection