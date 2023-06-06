<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://unpkg.com/sweetalert@2/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/d_sidenavbar.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/d_dashboard_own_school.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/_base.css">
    <script src="https://unpkg.com/sweetalert@2/dist/sweetalert.min.js"></script>
    <title><?php echo SITENAME; ?></title>
</head>

<body>
    <?php require APPROOT . '/views/inc/d_sidenavbar-own-school.php'; ?>

    <main class="full-page">
        <div class="col-12 top">
            <!-- <div class="top-left col-6">
                
            </div>
            <div class="top-right col-6">
                 
            </div> -->
            <div class="trip-button-div col-6" id="trip-button-div">

            </div>
            <hr>
            <div class="trip-button-div col-6" id="return-trip-button-div">

            </div>
            <script>
                const btnDiv = document.getElementById('trip-button-div');
                const returntripBtnDiv = document.getElementById('return-trip-button-div');
                document.addEventListener('DOMContentLoaded', checkTripsOnSameDate());

                function checkTripsOnSameDate() {
                    checkMorningTripsOnSameDate().then(
                    checkReturnTripsOnSameDate());

                    //check whether the morning trip is completed
                    //if not completed, disable the start return trip button
                }

                async function checkMorningTripsOnSameDate() {

                    const response = await fetch(`<?php echo URLROOT; ?>/D_Own_School_Drivers/checkMorningTripsOnSameDate`);
                    if (response.status == 200) {
                        let data = await response.json();
                        console.log(data);
                        if (data.length == 0) {
                            btnDiv.innerHTML = `<button id="start-trip-btn" class="trip-button" onclick="startTrip(<?php echo $_SESSION['vehicle_id'] ?>)" value="start">
                            Start morning trip on <?php $currentDate = date("Y-m-d");
                                        echo $currentDate; ?>
                      </button>`;
                        } else if (data[0].trip_status == 'Ongoing') {
                            btnDiv.innerHTML = `<button id="start-trip-btn" class="trip-button" onclick="startTrip(<?php echo $_SESSION['vehicle_id'] ?>)" value="end">
                                End morning trip on <?php $currentDate = date("Y-m-d");
                                                echo $currentDate; ?></button>`;
                            var btn = document.getElementById("start-trip-btn");
                            btn.style.backgroundColor = "#f02e44";
                        } else {
                            btnDiv.innerHTML = `<button id="start-trip-btn" class="trip-button">
                                Your morning ride on <?php $currentDate = date("Y-m-d");
                                                    echo $currentDate; ?> is successfully completed!</button>`;
                            var btn = document.getElementById("start-trip-btn");
                            btn.style.backgroundColor = "#396dbd";
                        }
                    }

                }

                async function checkReturnTripsOnSameDate() {

                    const response = await fetch(`<?php echo URLROOT; ?>/D_Own_School_Drivers/checkReturnTripsOnSameDate`);
                    if (response.status == 200) {
                        let returnData = await response.json();
                        console.log(returnData);
                        if (returnData.length == 0) {
                            returntripBtnDiv.innerHTML = `<button id="start-return-trip-btn" class="trip-button" onclick="startReturnTrip(<?php echo $_SESSION['vehicle_id'] ?>)" value="start">
                    Start Return Trip on <?php $currentDate = date("Y-m-d");
                                        echo $currentDate; ?>
                    </button>`;
                        } else if (returnData[0].trip_status == 'Ongoing') {
                            returntripBtnDiv.innerHTML = `<button id="start-return-trip-btn" class="trip-button" onclick="startReturnTrip(<?php echo $_SESSION['vehicle_id'] ?>)" value="end">
                                End Return Trip on <?php $currentDate = date("Y-m-d");
                                                echo $currentDate; ?></button>`;
                            var returnBtn = document.getElementById("start-return-trip-btn");
                            returnBtn.style.backgroundColor = "#f02e44";
                        } else {
                            returntripBtnDiv.innerHTML = `<button id="start-return-trip-btn" class="trip-button">
                                Your return ride on <?php $currentDate = date("Y-m-d");
                                                    echo $currentDate; ?> is successfully completed!</button>`;
                            var returnBtn = document.getElementById("start-return-trip-btn");
                            returnBtn.style.backgroundColor = "#396dbd";
                        }
                    }

                    }



                function startTrip(vehicleId) {
                    // Change button text and color
                    var btn = document.getElementById("start-trip-btn");
                    if (btn.value == 'start') {
                        swal({
                            title: "Are you sure to start the trip?",
                            text: "Your trip will be started",
                            icon: "warning",
                            buttons: ["Cancel", "Start"],
                            dangerMode: true,
                        }).then((confirm) => {
                            if (confirm) {
                                swal("Trip Started", "Your today's trip is started.. Keep safe driving", "success")
                                btn.innerHTML = "End Trip on <?php $currentDate = date("Y-m-d");
                                                                    echo $currentDate; ?>";
                                btn.style.backgroundColor = "#f02e44";
                                const xhr = new XMLHttpRequest();
                                xhr.open('POST', '<?php echo URLROOT; ?>/D_Own_School_Drivers/startMorningTrip', true);
                                xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

                                xhr.onload = function() {
                                    if (xhr.status === 200) {
                                        const response = xhr.responseText;
                                        console.log(response);

                                        // displayQueryResults(response);
                                    } else {
                                        console.error('Error running the SQL query: ', xhr.responseText);
                                    }
                                };

                                const data = 'runQuery=true&pvehicleid='.vehicleId; // POST parameter to indicate that the query should be executed
                                xhr.send(data);
                                btn.value = 'end';
                            }
                        });

                    } else if (btn.value == 'end') {
                        swal({
                            title: "Are you sure to end the today's trip?",
                            text: "Your trip will be ended for today",
                            icon: "warning",
                            buttons: ["Cancel", "End"],
                            dangerMode: true,
                        }).then((confirm) => {
                            if (confirm) {
                                swal("Trip Ended", "Your today's trip is ended.. View completed trips for more details", "success")
                                btn.innerHTML = "Your ride on <?php $currentDate = date("Y-m-d");
                                                                    echo $currentDate; ?> is successfully completed!";
                                btn.style.backgroundColor = "#396dbd";
                                const xhr = new XMLHttpRequest();
                                xhr.open('POST', '<?php echo URLROOT; ?>/D_Own_School_Drivers/endMorningTrip', true);
                                xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                                xhr.onload = function() {
                                    if (xhr.status === 200) {
                                        const response = xhr.responseText;
                                        console.log(response);

                                        // displayQueryResults(response);
                                    } else {
                                        console.error('Error running the SQL query: ', xhr.responseText);
                                    }
                                };

                                const data = 'runQuery=true&pvehicleid='.vehicleId; // POST parameter to indicate that the query should be executed
                                xhr.send(data);
                                btn.value = 'completed';
                            }
                        });

                    } else {

                    }
                }

                function startReturnTrip(vehicleId) {
                    // Change button text and color
                    var btn = document.getElementById("start-return-trip-btn");
                    if (btn.value == 'start') {
                        swal({
                            title: "Are you sure to start the return trip?",
                            text: "Your return trip will be started",
                            icon: "warning",
                            buttons: ["Cancel", "Start"],
                            dangerMode: true,
                        }).then((confirm) => {
                            if (confirm) {
                                swal("Trip Started", "Your today's return trip is started.. Keep safe driving", "success")
                                btn.innerHTML = "End return trip on <?php $currentDate = date("Y-m-d");
                                                                    echo $currentDate; ?>";
                                btn.style.backgroundColor = "#f02e44";
                                const xhr = new XMLHttpRequest();
                                xhr.open('POST', '<?php echo URLROOT; ?>/D_Own_School_Drivers/startReturnTrip', true);
                                xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

                                xhr.onload = function() {
                                    if (xhr.status === 200) {
                                        const response = xhr.responseText;
                                        console.log(response);

                                        // displayQueryResults(response);
                                    } else {
                                        console.error('Error running the SQL query: ', xhr.responseText);
                                    }
                                };

                                const data = 'runQuery=true&pvehicleid='.vehicleId; // POST parameter to indicate that the query should be executed
                                xhr.send(data);
                                btn.value = 'end';
                            }
                        });

                    } else if (btn.value == 'end') {
                        swal({
                            title: "Are you sure to end today's return trip?",
                            text: "Your return trip will be ended for today",
                            icon: "warning",
                            buttons: ["Cancel", "End"],
                            dangerMode: true,
                        }).then((confirm) => {
                            if (confirm) {
                                swal("Trip Ended", "Your today's return trip is ended.. View completed trips for more details", "success")
                                btn.innerHTML = "Your return ride on <?php $currentDate = date("Y-m-d");
                                                                    echo $currentDate; ?> is successfully completed!";
                                btn.style.backgroundColor = "#396dbd";
                                const xhr = new XMLHttpRequest();
                                xhr.open('POST', '<?php echo URLROOT; ?>/D_Own_School_Drivers/endReturnTrip', true);
                                xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                                xhr.onload = function() {
                                    if (xhr.status === 200) {
                                        const response = xhr.responseText;
                                        console.log(response);

                                        // displayQueryResults(response);
                                    } else {
                                        console.error('Error running the SQL query: ', xhr.responseText);
                                    }
                                };

                                const data = 'runQuery=true&pvehicleid='.vehicleId; // POST parameter to indicate that the query should be executed
                                xhr.send(data);
                                btn.value = 'completed';
                            }
                        });

                    } else {

                    }
                }

            </script>

        </div>
        <div class="bottom col-12">
            <div class="bottom-left-container col-4">
                <div class="bottom-left col-12" id="bottom-left">
                    
                </div>
            </div>
            <div class="bottom-right col-8">
                <div class="map-div col-12">
                    <div class="map-container col-10">
                        <div id="map" style="width:100%;height:400px;">
                        </div>
                    </div>
                </div>
                <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA9dw4OZzvDlq6z8TBvgTSk0lvtpsY9jv0&callback=initMap&v=weekly" async>
                </script>

                <script>
                    let map, infoWindow;

                    function initMap() {
                        map = new google.maps.Map(document.getElementById("map"), {
                            center: {
                                lat: 6.0329,
                                lng: 80.2168
                            },
                            zoom: 8,
                        });
                        infoWindow = new google.maps.InfoWindow();

                        const locationButton = document.createElement("button");

                        locationButton.textContent = "Pan to Current Location";
                        locationButton.classList.add("custom-map-control-button");
                        map.controls[google.maps.ControlPosition.TOP_CENTER].push(locationButton);
                        locationButton.addEventListener("click", () => {
                            // Try HTML5 geolocation.
                            if (navigator.geolocation) {
                                navigator.geolocation.getCurrentPosition(
                                    (position) => {
                                        const pos = {
                                            lat: position.coords.latitude,
                                            lng: position.coords.longitude,
                                        };

                                        infoWindow.setPosition(pos);
                                        infoWindow.setContent("Location found.");
                                        infoWindow.open(map);
                                        map.setCenter(pos);
                                    },
                                    () => {
                                        handleLocationError(true, infoWindow, map.getCenter());
                                    }
                                );
                            } else {
                                // Browser doesn't support Geolocation
                                handleLocationError(false, infoWindow, map.getCenter());
                            }
                        });
                    }

                    function handleLocationError(browserHasGeolocation, infoWindow, pos) {
                        infoWindow.setPosition(pos);
                        infoWindow.setContent(
                            browserHasGeolocation ?
                            "Error: The Geolocation service failed." :
                            "Error: Your browser doesn't support geolocation."
                        );
                        infoWindow.open(map);
                    }

                    window.initMap = initMap;
                </script>
            </div>
        </div>

        <script>
            let studentListDiv = document.getElementById('bottom-left');
            document.addEventListener("DOMContentLoaded", callToGetPresentStudents());
            async function callToGetPresentStudents() {
                let code = `
                    <div class="col-12 div-heading">Students to be Present</div>
                    <br>
                    <div class="student-list-wrapper">
                        <div class="heading-row">
                        <span class="col-4 left-column heading">Name</span>
                        <span class="col-8 right-column heading">Pickup Location</span>
                        </div>
                    `
                const response = await fetch(`<?php echo URLROOT; ?>/D_Own_School_Drivers/getPresentStudentsForDashboard`);
                if (response.status == 200) {
                    let data = await response.json();
                    console.log(data);
                    data.forEach(element => {
                        code += `
                    
                            <div class="col-12 detail-row">
                            <span class="col-4 left-column">${element.child_name}</span>
                            <span class="col-8 right-column">${element.location}</span>
                            </div>`;
                    });
                    code += `</div>`;
                    studentListDiv.innerHTML = code;

                }
            }
        </script>
    </main>

    <?php require APPROOT . '/views/inc/footer.php'; ?>