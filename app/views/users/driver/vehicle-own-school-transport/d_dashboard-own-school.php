<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/d_dashboard.css">
  <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/d_sidenavbar.css">
  <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/_base.css">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/handlebars/4.7.7/handlebars.min.js"></script> -->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/css/d_map.css" />
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
            integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.0.1/index.global.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
            crossOrigin="anonymous"></script>

    <title><?php echo SITENAME; ?></title>
  </head>
  <body>

  

<!--navigation bar left-->
<div class="sidebar">
        <div class="logo-details">
            <i><img src="<?php echo URLROOT?>/img/wego_logo.png" class="wego-logo" alt="wego-logo"></i>
            <span class="logo_name">WEGO</span>
        </div>
        <ul class="nav-links">
            <li>
                <a href="<?php echo URLROOT;?>/D_Own_School_Drivers/viewOwnSchoolDashboard">
                    <i class='bx bx-grid-alt'></i>
                    <span class="links_name">Dashboard</span>
                </a>
            </li>

            <li>
                <a href="<?php echo URLROOT;?>/D_Own_School_Drivers/RideRequests">
                    <i class='bx bx-box'></i>
                    <span class="links_name">View Ride Requests</span>
                </a>
            </li>

            <li>
                <a href="<?php echo URLROOT;?>/D_Own_School_Drivers/checkTripInfo">
                    <i class='bx bx-list-ul'></i>
                    <span class="links_name">Check Trip Info</span>
                </a>
            </li>

            
            <li>
                <a href="<?php echo URLROOT;?>/D_Own_School_Drivers/viewEarnings">
                    <i class='bx bx-pie-chart-alt-2'></i>
                    <span class="links_name">View Earnings</span>
                </a>
            </li>
            <li>
                <a href="<?php echo URLROOT;?>/D_Own_School_Drivers/studentsToBeAbsent">
                    <i class='bx bx-coin-stack'></i>
                    <span class="links_name">Students to be Absent</span>
                </a>
            </li>
            <li>
                <a href="<?php echo URLROOT;?>/D_Own_School_Drivers/viewProfile">
                    <i class='bx bx-book-alt'></i>
                    <span class="links_name">View Profile</span>
                </a>
            </li>

            <li>
                <a href="<?php echo URLROOT;?>/D_Own_School_Drivers/addVehicle">
                    <i class='bx bx-user'></i>
                    <span class="links_name">Add Vehicle</span>
                </a>
            </li>

            <li class="log_out">
                <a href="<?php echo URLROOT;?>/Users/logout">
                    <i class='bx bx-log-out'></i>
                    <span class="links_name">Log out</span>
                </a>
            </li>
        </ul>
    </div>





    <section class="home-section">
        <nav>
            <div class="sidebar-button">
                <i class='bx bx-menu sidebarBtn'></i>
                <span class="dashboard">Dashboard</span>
            </div>
            <div class="search-box">
                <input type="text" placeholder="Search...">
                <i class='bx bx-search'></i>
            </div>
            <div class="profile-details">
                <!--<img src="images/profile.jpg" alt="">-->
                <!-- <span class="admin_name">Profile</span>
                <i class='bx bx-chevron-down'></i> -->
                
            </div>
        </nav>
       
    </section>

    <script>
        let sidebar = document.querySelector(".sidebar");
        let sidebarBtn = document.querySelector(".sidebarBtn");
        sidebarBtn.onclick = function () {
            sidebar.classList.toggle("active");
            if (sidebar.classList.contains("active")) {
                sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
            } else
                sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
        }
    </script>

<main class="full-page">
<div class="top-row col-12">
  <div class="btn-1-container col-3">
    <div class="btn-1 col-10">
      <a href="<?php echo URLROOT;?>/D_Own_School_Drivers/studentsToBeAbsent"><h1>Students To Be Absent</h1></a>
    </div>
  </div>

  <div class="btn-1-container col-3">
    <div class="btn-1 col-10">
      <a href="#"><h1>Reservation Requests</h1></a>
    </div>
  </div>

  <div class="btn-1-container col-3">
    <div class="btn-1 col-10">
      <a href="#"><h1>Earnings Statistics</h1></a>
    </div>
  </div>
</div>
<div class="trip-button-div col-12">
      <a href="<?php echo URLROOT;?>/D_Own_School_Drivers/startTrip"><button class="trip-button">
        <h2>Start Trip on <?php $currentDate = date("Y-m-d");
        echo $currentDate;?></h2>
      </button></a>
</div>

<div class="map-div col-12">
  <div class="map-container col-10">
  <div id="map" style="width:100%;height:400px;">
  </div>

<!-- 
  The `defer` attribute causes the callback to execute after the full HTML
  document has been parsed. For non-blocking uses, avoiding race conditions,
  and consistent behavior across browsers, consider loading using Promises.
  See https://developers.google.com/maps/documentation/javascript/load-maps-js-api
  for more information.
  -->

  <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.9029322876!2d79.85896421523185!3d6.9022108205585555!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25963120b1509%3A0x2db2c18a68712863!2sUniversity%20of%20Colombo%20School%20of%20Computing%20(UCSC)!5e0!3m2!1sen!2slk!4v1675998107896!5m2!1sen!2slk" width="1400" height="700" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
  </div>
</div>
</main>


<script
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyANjobudebgCKlFuSSxv-7SSFaQVLUGsfU&callback=initMap&v=weekly"
  defer>
</script>

<script>
  // Note: This example requires that you consent to location sharing when
// prompted by your browser. If you see the error "The Geolocation service
// failed.", it means you probably did not give permission for the browser to
// locate you.
let map, infoWindow;

function initMap() {
  map = new google.maps.Map(document.getElementById("map"), {
    center: { lat: -34.397, lng: 150.644 },
    zoom: 6,
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
    browserHasGeolocation
      ? "Error: The Geolocation service failed."
      : "Error: Your browser doesn't support geolocation."
  );
  infoWindow.open(map);
}

window.initMap = initMap;
</script>


<?php require APPROOT . '/views/inc/footer.php'; ?>
