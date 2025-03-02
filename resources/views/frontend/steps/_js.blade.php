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
    
    var stepNumber = 1;
    document.querySelector('.next-btn').addEventListener('click', function() {
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
    
    // Move Size Step JS Start
    const moveSizes = [
        { id: 1, name: "Bed & Mattress - King", type: "bedroom" },
        { id: 2, name: "Bed & Mattress - Queen", type: "bedroom" },
        { id: 3, name: "Bed & Mattress - Double", type: "bedroom" },
        { id: 4, name: "Bed & Mattress - Single", type: "bedroom" },
        { id: 5, name: "Bed & Mattress - Bunks", type: "bedroom" },
        { id: 6, name: "Bedside Table", type: "bedroom" },
        { id: 7, name: "Chest of Drawers", type: "bedroom" },
        { id: 8, name: "Tallboy", type: "bedroom" },
        { id: 9, name: "Wardrobe", type: "bedroom" },
        { id: 10, name: "Cupboard", type: "bedroom" },
        { id: 11, name: "Bookcase", type: "bedroom" },
        { id: 12, name: "Dressing Table", type: "bedroom" },
        { id: 13, name: "Storage Cube Shelf", type: "bedroom" },
        { id: 14, name: "Cot", type: "bedroom" },
        { id: 15, name: "Mirror (small)", type: "bedroom" },
        { id: 16, name: "Mirror (large)", type: "bedroom" },
        { id: 17, name: "Picture / Artwork", type: "bedroom" },
        { id: 18, name: "Suitcase", type: "bedroom" },

        { id: 19, name: "Sofa (2 seater)", type: "living-room" },
        { id: 20, name: "Sofa (3 seater)", type: "living-room" },
        { id: 21, name: "Sofa (L shaped / modular)", type: "living-room" },
        { id: 22, name: "Arm Chair (single)", type: "living-room" },
        { id: 23, name: "Ottoman", type: "living-room" },
        { id: 24, name: "TV / Entertainment Unit", type: "living-room" },
        { id: 25, name: "Coffee Table", type: "living-room" },
        { id: 26, name: "Buffet / Sideboard", type: "living-room" },
        { id: 27, name: "Bookcase (Living Room)", type: "living-room" },
        { id: 28, name: "China cabinet", type: "living-room" },
        { id: 29, name: "Storage Cube Shelf (Living Room)", type: "living-room" },
        { id: 30, name: "TV (Small)", type: "living-room" },
        { id: 31, name: "TV (Medium)", type: "living-room" },
        { id: 32, name: "TV (Large)", type: "living-room" },
        { id: 33, name: "Picture / Artwork (Living Room)", type: "living-room" },
        { id: 34, name: "Rug", type: "living-room" },
        { id: 35, name: "Electric Organ", type: "living-room" },
        { id: 36, name: "Piano Stool", type: "living-room" },
        { id: 37, name: "Piano (upright - additional $120 fee)", type: "living-room" },
        { id: 38, name: "Pool Table (Small up to 6 foot - additional $150 fee)", type: "living-room" },
        { id: 39, name: "Pool Table (Medium 7 foot - additional $150 fee)", type: "living-room" },
        { id: 40, name: "Pool Table (Large 8-9 foot - additional $150 fee)", type: "living-room" },
        
        { id: 41, name: "Washing Machine (Top Load)", type: "laundry" },
        { id: 42, name: "Washing Machine (Front Load)", type: "laundry" },
        { id: 43, name: "Tumble Dryer", type: "laundry" },
        { id: 44, name: "Tumble Dryer Cabinet", type: "laundry" },
        { id: 45, name: "Laundry Cupboard", type: "laundry" },
        { id: 46, name: "Broom or Mop", type: "laundry" },
        { id: 47, name: "Clothes Basket", type: "laundry" },
        { id: 48, name: "Clothes Horse", type: "laundry" },
        { id: 49, name: "Vacuum Cleaner", type: "laundry" },
        { id: 50, name: "Ironing Board", type: "laundry" },
        
        { id: 51, name: "Desk", type: "study-office" },
        { id: 52, name: "Computer / Monitor", type: "study-office" },
        { id: 53, name: "Office Chair", type: "study-office" },
        { id: 54, name: "Printer", type: "study-office" },
        { id: 55, name: "Filing Cabinet", type: "study-office" },
        { id: 56, name: "Bookcase (Study / Office)", type: "study-office" },
        { id: 57, name: "Storage Cube Shelf (Study / Office)", type: "study-office" },
        
        { id: 58, name: "Hall Stand / Table", type: "hall-entry" },
        { id: 59, name: "Hat Rack / Coat Stand", type: "hall-entry" },
        { id: 60, name: "Grand Father Clock", type: "hall-entry" },
        { id: 61, name: "Hall Mirror (small)", type: "hall-entry" },
        { id: 62, name: "Hall Mirror (large)", type: "hall-entry" },
        { id: 63, name: "Hall Picture / Artwork", type: "hall-entry" },
        { id: 64, name: "Hall Rug", type: "hall-entry" },
        
        { id: 65, name: "Outdoor Chair", type: "outdoor-garden" },
        { id: 66, name: "Pot Plant (Small)", type: "outdoor-garden" },
        { id: 67, name: "Pot Plant (Large)", type: "outdoor-garden" },
        { id: 68, name: "Trampoline (Dismantled)", type: "outdoor-garden" },
        { id: 69, name: "Outdoor Table (no chairs)", type: "outdoor-garden" },
        { id: 70, name: "Outdoor Table (+2 chairs)", type: "outdoor-garden" },
        { id: 71, name: "Outdoor Table (+4 chairs)", type: "outdoor-garden" },
        { id: 72, name: "Outdoor Table (+6 chairs)", type: "outdoor-garden" },
        { id: 73, name: "Outdoor Table (+8 chairs)", type: "outdoor-garden" },
        { id: 74, name: "Barbeque", type: "outdoor-garden" },
        { id: 75, name: "Webber", type: "outdoor-garden" },
        { id: 76, name: "Garden Seat", type: "outdoor-garden" },
        { id: 77, name: "Garden Hose", type: "outdoor-garden" },
        
        { id: 78, name: "Bike", type: "garage-shed" },
        { id: 79, name: "Lawn Mower", type: "garage-shed" },
        { id: 80, name: "Whipper Snipper", type: "garage-shed" },
        { id: 81, name: "Wheel Barrow", type: "garage-shed" },
        { id: 82, name: "Ladder", type: "garage-shed" },
        { id: 83, name: "Work Bench", type: "garage-shed" },
        { id: 84, name: "Tool Cupboard", type: "garage-shed" },
        { id: 85, name: "Garage Shelving (disassembled)", type: "garage-shed" },
        { id: 86, name: "Garage Shelving (assembled)", type: "garage-shed" },
        
        { id: 87, name: "Bike (gym)", type: "fitness-gym" },
        { id: 88, name: "Swing (Dismantled)", type: "fitness-gym" },
        { id: 89, name: "Table Tennis Table", type: "fitness-gym" },
        { id: 90, name: "Weights Bench", type: "fitness-gym" },
        { id: 91, name: "Weights Set", type: "fitness-gym" },
        { id: 92, name: "Treadmill", type: "fitness-gym" },
        
        { id: 93, name: "Medium Box", type: "boxes-storage" },
        { id: 94, name: "Small Box (Book & Wine)", type: "boxes-storage" },
        { id: 95, name: "Large Box (Tea Chest)", type: "boxes-storage" },
        { id: 96, name: "Plastic Tub", type: "boxes-storage" },
        { id: 97, name: "Striped Bag", type: "boxes-storage" },
    ];

    let moveSizeQuantities = {};
    let typeWiseQuantities = {};

    function renderMoveSizeItems(filter = "") {
        const moveSizeList = document.getElementById("moveSizeDropdown");
        moveSizeList.innerHTML = "";

        moveSizes.forEach(size => {
            if (size.name.toLowerCase().includes(filter.toLowerCase())) {
                moveSizeList.innerHTML += createMoveSizeItem(size.name, size.type);
            }
        });

        attachMoveSizeEventListeners();
    }

    function renderBedroomItems() {
        const bedroomItems = document.getElementById("bedroomItems");
        bedroomItems.innerHTML = "";

        moveSizes.filter(size => size.type === "bedroom").forEach(size => {
            bedroomItems.innerHTML += createMoveSizeItem(size.name, size.type);
        });

        attachMoveSizeEventListeners();
    }
    
    // renderlivingRoomItems
    function renderLivingRoomItems() {
        const livingRoomItems = document.getElementById("livingRoomItems");
        livingRoomItems.innerHTML = "";

        moveSizes.filter(size => size.type === "living-room").forEach(size => {
            livingRoomItems.innerHTML += createMoveSizeItem(size.name, size.type);
        });

        attachMoveSizeEventListeners();
    }
    
    // renderLaundryItems
    function renderLaundryItems() {
        const laundryItems = document.getElementById("laundryItems");
        laundryItems.innerHTML = "";

        moveSizes.filter(size => size.type === "laundry").forEach(size => {
            laundryItems.innerHTML += createMoveSizeItem(size.name, size.type);
        });

        attachMoveSizeEventListeners();
    }
    
    // renderStudyOffice
    function renderStudyOfficeItems() {
        const studyOfficeItems = document.getElementById("studyOfficeItems");
        studyOfficeItems.innerHTML = "";

        moveSizes.filter(size => size.type === "study-office").forEach(size => {
            studyOfficeItems.innerHTML += createMoveSizeItem(size.name, size.type);
        });

        attachMoveSizeEventListeners();
    }
    
    // renderHallEntryItems
    function renderHallEntryItems() {
        const hallEntryItems = document.getElementById("hallEntryItems");
        hallEntryItems.innerHTML = "";

        moveSizes.filter(size => size.type === "hall-entry").forEach(size => {
            hallEntryItems.innerHTML += createMoveSizeItem(size.name, size.type);
        });

        attachMoveSizeEventListeners();
    }
    
    // renderOutdoorGardenItems
    function renderOutdoorGardenItems() {
        const outdoorGardenItems = document.getElementById("outdoorGardenItems");
        outdoorGardenItems.innerHTML = "";

        moveSizes.filter(size => size.type === "outdoor-garden").forEach(size => {
            outdoorGardenItems.innerHTML += createMoveSizeItem(size.name, size.type);
        });

        attachMoveSizeEventListeners();
    }
    
    // renderGarageShedItems
    function renderGarageShedItems() {
        const garageShedItems = document.getElementById("garageShedItems");
        garageShedItems.innerHTML = "";

        moveSizes.filter(size => size.type === "garage-shed").forEach(size => {
            garageShedItems.innerHTML += createMoveSizeItem(size.name, size.type);
        });

        attachMoveSizeEventListeners();
    }
    
    // renderFitnessGymItems
    function renderFitnessGymItems() {
        const fitnessGymItems = document.getElementById("fitnessGymItems");
        fitnessGymItems.innerHTML = "";

        moveSizes.filter(size => size.type === "fitness-gym").forEach(size => {
            fitnessGymItems.innerHTML += createMoveSizeItem(size.name, size.type);
        });

        attachMoveSizeEventListeners();
    }
    
    // render box storage items
    function renderBoxStorageItems() {
        const boxStorageItems = document.getElementById("boxesStorageItems");
        boxStorageItems.innerHTML = "";

        moveSizes.filter(size => size.type === "boxes-storage").forEach(size => {
            boxStorageItems.innerHTML += createMoveSizeItem(size.name, size.type);
        });

        attachMoveSizeEventListeners();
    }

    function createMoveSizeItem(name, type) {
        const quantity = moveSizeQuantities[name] || 0;
        return `
            <div class="move-size-item">
                <span class="item-name">${name}</span>
                <div class="move-size-qty-btn">
                    ${quantity > 0 ? `<button class="btn btn-sm move-size-decrease" data-name="${name}" data-type="${type}">-</button>` : ""}
                    <span class="mx-2">${quantity}</span>
                    <button class="btn btn-sm move-size-increase" data-name="${name}" data-type="${type}">+</button>
                </div>
            </div>
        `;
    }

    function updateQuantities(name, change, type) {
        moveSizeQuantities[name] = (moveSizeQuantities[name] || 0) + change;
        if (moveSizeQuantities[name] < 1) delete moveSizeQuantities[name];

        console.log("Updated Quantities:", moveSizeQuantities);
        renderMoveSizeItems(document.getElementById("moveSizeSearch").value);
        if(type == "bedroom") {
            renderBedroomItems(name, change, type);
        }
        if(type == "living-room") {
            renderLivingRoomItems(name, change, type);
        }
        if(type == "laundry") {
            renderLaundryItems(name, change, type);
        }
        if(type == "study-office") {
            renderStudyOfficeItems(name, change, type);
        }
        if(type == "hall-entry") {
            renderHallEntryItems(name, change, type);
        }
        if(type == "outdoor-garden") {
            renderOutdoorGardenItems(name, change, type);
        }
        if(type == "garage-shed") {
            renderGarageShedItems(name, change, type);
        }
        if(type == "fitness-gym") {
            renderFitnessGymItems(name, change, type);
        }
        if(type == "boxes-storage") {
            renderBoxStorageItems(name, change, type);
        }
        // set quantity in typeWiseQuantities object for each type
        if (typeWiseQuantities[type]) {
            typeWiseQuantities[type] += change;
        } else {
            typeWiseQuantities[type] = change;
        }
        console.log("typeWiseQuantities", typeWiseQuantities);
        // set total-bedrooms-count by filtering bedroom type from typeWiseQuantities object
        let typeId = "total-" + type + "-count";
        document.getElementById(typeId).innerText = typeWiseQuantities[type] || 0;
    }

    function attachMoveSizeEventListeners() {
        document.querySelectorAll(".move-size-increase, .move-size-decrease").forEach(btn => {
            let newBtn = btn.cloneNode(true); // Clone the button to remove previous listeners
            btn.replaceWith(newBtn); // Replace old button to remove old event listeners

            newBtn.addEventListener("click", function(event) {
                event.stopPropagation();
                const name = this.getAttribute("data-name");
                const type = this.getAttribute("data-type");
                const change = this.classList.contains("move-size-increase") ? 1 : -1;
                updateQuantities(name, change, type);
            });
        });
    }


    document.getElementById("moveSizeSearch").addEventListener("focus", function() {
        document.getElementById("moveSizeDropdown").style.display = "block";
        renderMoveSizeItems(this.value);
    });

    document.getElementById("moveSizeSearch").addEventListener("input", function() {
        renderMoveSizeItems(this.value);
    });

    document.addEventListener("click", function(event) {
        if (!document.querySelector(".move-size-container").contains(event.target)) {
            document.getElementById("moveSizeDropdown").style.display = "none";
        }
    });

    // Toggle bedroom section
    function toggleSection(sectionId) {
        const sections = ["bedroom", "livingRoom", "laundry", "studyOffice", "hallEntry", "outdoorGarden", "garageShed", "fitnessGym", "boxesStorage"]; // Add more sections as needed

        sections.forEach(id => {
            const section = document.getElementById(`${id}Items`);
            const icon = document.getElementById(`${id}Icon`);

            if (id === sectionId) {
                // Toggle the clicked section
                if (section.style.maxHeight === "0px" || section.style.maxHeight === "") {
                    section.style.maxHeight = "fit-content";
                    icon.classList.add("open");
                } else {
                    section.style.maxHeight = "0px";
                    icon.classList.remove("open");
                }
            } else {
                // Close other sections
                section.style.maxHeight = "0px";
                icon.classList.remove("open");
            }
        });
    }

    // Attach event listeners dynamically
    ["bedroom", "livingRoom", "laundry", "studyOffice", "hallEntry", "outdoorGarden", "garageShed", "fitnessGym", "boxesStorage"].forEach(sectionId => {
        document.getElementById(`${sectionId}Toggle`).addEventListener("click", () => toggleSection(sectionId));
    });


    renderBedroomItems();
    renderLivingRoomItems();
    renderLaundryItems();
    renderStudyOfficeItems();
    renderHallEntryItems();
    renderOutdoorGardenItems();
    renderGarageShedItems();
    renderFitnessGymItems();
    renderBoxStorageItems();
    // Move Size Step JS End
    
    // Date Time JS Start
    $(document).ready(function() {
        // Single Date Picker
        $('#singleDate').daterangepicker({
            singleDatePicker: true,
            showDropdowns: true,
            autoApply: true,
            opens: 'right',
            locale: {
                format: 'YYYY-MM-DD'
            }
        });

        // Date Range Picker
        $('#daterange').daterangepicker({
            opens: 'right',
            autoUpdateInput: false,
            showDropdowns: true,
            autoApply: true,
        });

        // Update input value when date range is selected
        $('#daterange').on('apply.daterangepicker', function(ev, picker) {
            $(this).val(picker.startDate.format('YYYY-MM-DD') + ' - ' + picker.endDate.format('YYYY-MM-DD'));
        });
    });
    
    // wehn value of move_date_type change check using name attribute on radio
    $('input[name="move_date_type"]').change(function() {
        console.log(this.value);
        if (this.value == 'on' || this.value == 'on_or_before') {
            $('#select-date-section').removeClass('d-none');
            $('#singleDateSection').removeClass('d-none');
            $('#dateRangeSection').addClass('d-none');
        } else if (this.value == 'between') {
            $('#select-date-section').removeClass('d-none');
            $('#singleDateSection').addClass('d-none');
            $('#dateRangeSection').removeClass('d-none');
        } else {
            $('#select-date-section').addClass('d-none');
            $('#singleDateSection').addClass('d-none');
            $('#dateRangeSection').addClass('d-none');
        }
    });
    // Date Time JS End
</script>