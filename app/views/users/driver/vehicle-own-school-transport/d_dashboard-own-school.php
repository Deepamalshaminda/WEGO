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
            <div class="trip-button-div col-12" id="trip-button-div">

            </div>
            <script>
                const btnDiv = document.getElementById('trip-button-div');
                document.addEventListener('DOMContentLoaded', callTocheckTripsOnSameDate());

                async function callTocheckTripsOnSameDate() {

                    const response = await fetch(`<?php echo URLROOT; ?>/D_Own_School_Drivers/checkTripsOnSameDate`);
                    if (response.status == 200) {
                        let data = await response.json();
                        console.log(data);
                        if (data.length == 0) {
                            btnDiv.innerHTML = `<button id="start-trip-btn" class="trip-button" onclick="startTrip(<?php echo $_SESSION['vehicle_id'] ?>)" value="start">
                      <h2>Start Trip on <?php $currentDate = date("Y-m-d");
                                        echo $currentDate; ?></h2>
                      </button>`;
                        } else if (data[0].trip_status == 'Ongoing') {
                            btnDiv.innerHTML = `<button id="start-trip-btn" class="trip-button" onclick="startTrip(<?php echo $_SESSION['vehicle_id'] ?>)" value="end">
                                <h2>End Trip on <?php $currentDate = date("Y-m-d");
                                                echo $currentDate; ?></h2></button>`;
                            var btn = document.getElementById("start-trip-btn");
                            btn.style.backgroundColor = "red";
                        } else {
                            btnDiv.innerHTML = `<button id="start-trip-btn" class="trip-button">
                                <h2>Your ride on <?php $currentDate = date("Y-m-d");
                                                    echo $currentDate; ?> is successfully completed!</h2></button>`;
                            var btn = document.getElementById("start-trip-btn");
                            btn.style.backgroundColor = "blue";
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
                                btn.innerHTML = "<h2>End Trip on <?php $currentDate = date("Y-m-d");
                                                                    echo $currentDate; ?></h2>";
                                btn.style.backgroundColor = "red";
                                const xhr = new XMLHttpRequest();
                                xhr.open('POST', '<?php echo URLROOT; ?>/D_Own_School_Drivers/startTrip', true);
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
                                btn.innerHTML = "<h2>Your ride on <?php $currentDate = date("Y-m-d");
                                                                    echo $currentDate; ?> is successfully completed!</h2>";
                                btn.style.backgroundColor = "blue";
                                const xhr = new XMLHttpRequest();
                                xhr.open('POST', '<?php echo URLROOT; ?>/D_Own_School_Drivers/endTrip', true);
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
            <div class="bottom-left-container col-4" id="bottom-left">
                <div class="bottom-left col-12">

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
                let code = `<h2 class="col-12 div-heading">Students to be present</h2><br><table>`
                const response = await fetch(`<?php echo URLROOT; ?>/D_Own_School_Drivers/getPresentStudentsForDashboard`);
                if (response.status == 200) {
                    let data = await response.json();
                    console.log(data);
                    data.forEach(element => {
                        code += `<tr><td><h4>${element.child_name}</h4></td></tr>`;
                    });
                    code += `</table>`
                    studentListDiv.innerHTML = code;

                }
            }
        </script>
    </main>

    <?php require APPROOT . '/views/inc/footer.php'; ?>