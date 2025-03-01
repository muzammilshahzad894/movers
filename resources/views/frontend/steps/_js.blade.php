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