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
                <div class="grid-three-one-responsive mt-2">
                    <label class="form-check form-check-inline" for="pickup-house">
                        <input class="form-check-input" type="radio" name="pickup-property-type" value="house" id="pickup-house">
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
                            <input class="form-check-input" type="radio" name="pickup-house-levels" value="single" id="pickup-house-single">
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
                            <input class="form-check-input" type="radio" name="pickup-storage-walking-distance" value="1" id="pickup-storage-walking-distance-1">
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
                            <input class="form-check-input" type="radio" name="pickup-truck-parking" value="driverway" id="pickup-driverway">
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
                <div class="grid-three-one-responsive mt-2">
                    <label class="form-check form-check-inline" for="dropoff-house">
                        <input class="form-check-input" type="radio" name="drop-property-type" value="house" id="dropoff-house">
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
                            <input class="form-check-input" type="radio" name="dropoff-house-levels" value="single" id="dropoff-house-single">
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
                            <input class="form-check-input" type="radio" name="dropoff-storage-walking-distance" value="1" id="dropoff-storage-walking-distance-1">
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
                            <input class="form-check-input" type="radio" name="dropoff-truck-parking" value="driverway" id="dropoff-driverway">
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