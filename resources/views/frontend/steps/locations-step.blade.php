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