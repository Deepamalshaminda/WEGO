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
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert@2/dist/sweetalert.min.js"></script>
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
                <a href="<?php echo URLROOT;?>/D_Own_School_Drivers/getPresentStudentForVehicle">
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
              <a href="#" onclick="confirmLogout()">
                <i class='bx bx-log-out'></i>
                <span class="links_name">Log out</span>
              </a>
            </li>

            <script>
            function confirmLogout() {
              swal({
                title: "Are you sure?",
                text: "You will be logged out",
                icon: "warning",
                buttons: ["Cancel", "Logout"],
                dangerMode: true,
              }).then((confirm) => {
                if (confirm) {
                  window.location.href = '<?php echo URLROOT; ?>/Users/logout';
                }
              });
            }
            </script>

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

<!--    <script>-->
<!--        const startButton = document.querySelector("#start");-->
<!--        const endButton = document.querySelector("#end");-->
<!---->
<!--        startButton.addEventListener('click', () => {-->
<!--            startTrip();-->
<!--            startButton.classList.remove('start-button');-->
<!--            btnSuggessions.classList.add('end-button')-->
<!--        });-->
<!--        endButton.addEventListener('click', () => endTrip());-->
<!---->
<!--        let start = null;-->
<!--        let end = null;-->
<!---->
<!--        const startTrip = async() => {-->
<!--            const response = await fetch('http://localhost/projectwego/D_Own_School_Drivers/startTrip');-->
<!--            if(response.status == 200){-->
<!--                start = await response.json();-->
<!--                loadReceivedRequests(received_requests);-->
<!--            }-->
<!--        }-->
<!---->
<!--        const endTrip = async() => {-->
<!--            const response = await fetch('http://localhost/projectwego/D_Own_School_Drivers/endTrip');-->
<!--            if(response.status == 200){-->
<!--                sent_requests = await response.json();-->
<!--                loadSentRequests(sent_requests);-->
<!--            }-->
<!--        }-->
<!--    </script>-->

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
</div>

<?php function callTocheckTripsOnSameDate(){
  
}?>

    <div class="trip-button-div col-12" id="trip-button-div">
  
    </div>
    


    <script>
      const btnDiv = document.getElementById('trip-button-div');
      document.addEventListener('DOMContentLoaded',callTocheckTripsOnSameDate());

      async function callTocheckTripsOnSameDate(){

        const response = await fetch(`<?php echo URLROOT;?>/D_Own_School_Drivers/checkTripsOnSameDate`);
        if(response.status == 200){
          let data = await response.json();
          console.log(data);
          if(data.length == 0){
            btnDiv.innerHTML = `<button id="start-trip-btn" class="trip-button" onclick="startTrip(<?php echo $_SESSION['vehicle_id'] ?>)" value="start">
                      <h2>Start Trip on <?php $currentDate = date("Y-m-d"); echo $currentDate;?></h2>
                      </button>`;
          }else if(data[0].trip_status == 'Ongoing'){
            btnDiv.innerHTML = `<button id="start-trip-btn" class="trip-button" onclick="startTrip(<?php echo $_SESSION['vehicle_id'] ?>)" value="end">
            <h2>End Trip on <?php $currentDate = date("Y-m-d"); echo $currentDate;?></h2></button>`;
            var btn = document.getElementById("start-trip-btn");
            btn.style.backgroundColor = "red";
          }else{
            btnDiv.innerHTML = `<button id="start-trip-btn" class="trip-button">
            <h2>Your ride on <?php $currentDate = date("Y-m-d"); echo $currentDate;?> is successfully completed!</h2></button>`;
            var btn = document.getElementById("start-trip-btn");
            btn.style.backgroundColor = "blue";
          }
        }

      }



        function startTrip(vehicleId) {
            // Change button text and color
            var btn = document.getElementById("start-trip-btn");
            if(btn.value == 'start'){
              swal({
                title: "Are you sure to start the trip?",
                text: "Your trip will be started",
                icon: "warning",
                buttons: ["Cancel", "Start"],
                dangerMode: true,
              }).then((confirm) => {
                if (confirm) {
                  swal("Trip Started", "Your today's trip is started.. Keep safe driving", "success")
                  btn.innerHTML = "<h2>End Trip on <?php $currentDate = date("Y-m-d"); echo $currentDate;?></h2>";
                  btn.style.backgroundColor = "red";
                  const xhr = new XMLHttpRequest();
                  xhr.open('POST', '<?php echo URLROOT;?>/D_Own_School_Drivers/startTrip', true);
                  xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

                  xhr.onload = function () {
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
              
            }else if(btn.value == 'end'){
              swal({
                title: "Are you sure to end the today's trip?",
                text: "Your trip will be ended for today",
                icon: "warning",
                buttons: ["Cancel", "End"],
                dangerMode: true,
              }).then((confirm) => {
                if (confirm) {
                  swal("Trip Ended", "Your today's trip is ended.. View completed trips for more details", "success")
                  btn.innerHTML = "<h2>Your ride on <?php $currentDate = date("Y-m-d"); echo $currentDate;?> is successfully completed!</h2>";
                  btn.style.backgroundColor = "blue";
                  const xhr = new XMLHttpRequest();
                  xhr.open('POST', '<?php echo URLROOT;?>/D_Own_School_Drivers/endTrip', true);
                  xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                  xhr.onload = function () {
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
              
            }
            else{

            }  
        }
       
    </script>

<div class="map-div col-12">
  <div class="map-container col-10">
  <div id="map" style="width:100%;height:400px;">
  </div>
  </div>
</div>
</main>


<script
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyANjobudebgCKlFuSSxv-7SSFaQVLUGsfU&callback=initMap&v=weekly"
  defer>
</script>

<script>
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
