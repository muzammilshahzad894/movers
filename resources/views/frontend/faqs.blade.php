@extends('layouts.frontend.app')

@section('content')
<main class="main">
    <!-- breadcrumb -->
    <div class="site-breadcrumb" style="background: url('{{ asset('frontend-assets/img/breadcrumb/breadcrumb.jpg') }}">
        <div class="container">
            <h2 class="breadcrumb-title">Faq</h2>
            <ul class="breadcrumb-menu">
                <li><a href="index-2.html">Home</a></li>
                <li class="active">Faq</li>
            </ul>
        </div>
    </div>
    <!-- breadcrumb end -->

    <!-- faq area -->
    <div class="faq-area pt-5">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-12">
                    <h2 class="site-title my-3">Frequently Asked Moving Questions</h2>
                </div>
            </div>
            <div class="row pt-3">
                <div class="col-lg-12">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <span><i class="far fa-question"></i></span> I have a simultaneous settlement, what should I do?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show"
                                aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Please let our team know if you have a simultaneous settlement, as we'll give priority to coordinating your move accordingly. We allocate a single dedicated truck for settlement moves so your crew will only handle one move for the day.
                                    <br /><br />
                                    Your start time will be planned based on your settlement time. For instance, if we estimate that your move will take 2-3 hours, we'll commence three hours prior to settlement to ensure the truck is fully loaded prior to the settlement occurring.
                                    <br /><br />
                                    If you're unsure about the settlement time (often lawyers only confirm a few days before), please inform us at the time of booking. We'll make adjustments as the day gets closer. If property access is flexible around the settlement time, do let us know, as it eases the pressure.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <span><i class="far fa-question"></i></span> I’ll need to book a lift, what should I do?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    We do a lot of moves that are dependent on lift bookings and can tailor our loading or unloading times to suit. You’ll generally be given a 2hr window for your move by the building manager. 
                                    <br /><br />
                                    
                                    If you’re moving out of a building that requires a lift booking, you’ll generally want a lift booking early in the morning. If you’re moving into a building with a lift you’ll want to make your booking early in the afternoon. 
                                    
                                    <br /><br />
                                    We suggest you secure your lift booking a week or more in advance and call our office to arrange a move specifically timed for that booking. 
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <span><i class="far fa-question"></i></span> What happens if it’s raining on the day of my move?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    We move rain, hail or shine! Our trucks are equipped with furniture pads, ties, trolleys and dollies. We only ask that you secure your property and make sure there is a clear path for our removalists to move your items.
                                    <br /><br />
                                    If it’s raining, we’ll ensure your property is protected with furniture pads and shrink wrap where necessary. We’ll also lay down floor runners to protect your flooring.
                                    <br /><br />
                                    If you’re moving in the rain, please make sure there is a designated area for the truck to park. It’s also a good idea to lay down some old towels to prevent water from being tracked through your home.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- faq area end -->
</main>
@endsection