<div class="step-2-details">
    <h3 class="text-center mb-2">When would you like to move?</h3>
    <div class="row d-flex justify-content-center align-items-center">
        <div class="col-md-8 mt-4">
            <div class="contact-wrapper">
                <p class="property-type-text">When do you need to move?</p>
                <div>
                    <input type="radio" id="move_date_type_0" name="move_date_type" class="btn-check" value="urgently">
                    <label class="form-check-label btn btn-outline-secondary btn-radio-check date_type_radio" for="move_date_type_0">Urgently</label>
                    <input type="radio" id="move_date_type_1" name="move_date_type" class="btn-check" value="on">
                    <label class="form-check-label btn btn-outline-secondary btn-radio-check date_type_radio" for="move_date_type_1">On</label>
                    <input type="radio" id="move_date_type_2" name="move_date_type" class="btn-check" value="between">
                    <label class="form-check-label btn btn-outline-secondary btn-radio-check date_type_radio" for="move_date_type_2">Between</label>
                    <input type="radio" id="move_date_type_3" name="move_date_type" class="btn-check" value="on_or_before">
                    <label class="form-check-label btn btn-outline-secondary btn-radio-check date_type_radio" for="move_date_type_3">On or Before</label>
                </div>
                <div id="select-date-section" class="d-none">
                    <p class="property-type-text mt-4 mb-2">Select date</p>
                    <!-- // input date field -->
                    <div class="input-group" id="singleDateSection">
                        <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                        <input type="text" id="singleDate" name="move_size_date" class="form-control date-input" placeholder="Select date" autocomplete="off">
                    </div>
                    <div class="input-group" id="dateRangeSection">
                        <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                        <input type="text" id="daterange" name="move_size_date" class="form-control date-input" placeholder="Select date range" autocomplete="off">
                    </div>
                </div>
                <div>
                    <p class="property-type-text mt-4 mb-2">Do you require any of the below additional services?</p>
                    <!-- // these with checkboxes, I would like help packing, I would like help unpacking, I require storage, I am interested in end-of-lease / move-out cleaning services -->
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="packingHelp" name="packing_help">
                        <label class="form-check-label" for="packingHelp">I would like help packing</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="unpackingHelp" name="unpacking_help">
                        <label class="form-check-label" for="unpackingHelp">I would like help unpacking</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="storageHelp" name="storage_help">
                        <label class="form-check-label" for="storageHelp">I require storage</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="cleaningHelp" name="cleaning_help">
                        <label class="form-check-label" for="cleaningHelp">I am interested in end-of-lease / move-out cleaning services</label>
                    </div>    
                </div>
                <div>
                    <p class="property-type-text mt-4 mb-2">Any other important details?</p>
                    <textarea class="form-control" id="moveSizeDetails" name="move_size_details" rows="3"></textarea>
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
                    Call our office on <a href="tel:+61400982424" style="color: #4c47e1;">+61400982424</a> today.
                </p>
            </div>
        </div>
    </div>
</div>