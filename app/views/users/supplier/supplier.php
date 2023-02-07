<?php require APPROOT . '/views/inc/header.php'; ?>
<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/dashboard.css">
  <title><?php echo SITENAME; ?></title>
</head>
<body>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <div class='bx bxl-c-plus-plus'></div>
      <span class="logo_name">&nbsp; WeGo</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="#" class="active">
            <div class='bx bx-grid-alt' ></div>
            <span class="links_name">&nbsp; Dashboard</span>
          </a>
        </li>
        <li>
          <a href="<?php echo URLROOT?>/prequests/viewParentRequest">
            <div class='bx bx-box' ></div>
            <span class="links_name">&nbsp; Parents</span>
          </a>
        </li>
        <li>
          <a href="<?php echo URLROOT?>/wrequests/viewWorkerRequest">
            <div class='bx bx-list-ul' ></div>
            <span class="links_name">&nbsp; Office Workers</span>
          </a>
        </li>
        <li>
          <a href="<?php echo URLROOT?>/rides/viewRides">
            <div class='bx bx-pie-chart-alt-2' ></div>
            <span class="links_name">&nbsp; Rides</span>
          </a>
        </li>
        <li>
          <a href="<?php echo URLROOT?>/driver/viewDrivers">
            <div class='bx bx-coin-stack' ></div>
            <span class="links_name">&nbsp; Drivers</span>
          </a>
        </li>
        <li>
          <a href="<?php echo URLROOT?>/Earningschart/viewEarnings">
            <div class='bx bx-book-alt' ></div>
            <span class="links_name">&nbsp; Earnings</span>
          </a>
        </li>
        <li>
          <a href="<?php echo URLROOT?>/Salarydetails/viewSalaryInfo">
            <div class='bx bx-user' ></div>
            <span class="links_name">&nbsp; Salaries</span>
          </a>
        </li>
        <li>
          <a href="<?php echo URLROOT?>/reports/viewReports">
            <div class='bx bx-user' ></div>
            <span class="links_name">&nbsp; Reports</span>
          </a>
        </li>
        <li>
          <a href="<?php echo URLROOT?>/Documents/viewDocuments">
            <div class='bx bx-user' ></div>
            <span class="links_name">&nbsp; Vehicle Documents</span>
          </a>
        </li>
        <li>
          <a href="<?php echo URLROOT?>/Vmaintenance/viewMaintenanceDetails">
            <div class='bx bx-user' ></div>
            <span class="links_name">&nbsp; Vehicle Maintenance</span>
          </a>
        </li>
        <li>
          <a href="<?php echo URLROOT?>/DriverAttendance/viewDriverAttendance">
            <div class='bx bx-user' ></div>
            <span class="links_name">&nbsp; Driver Attendace</span>
          </a>
        </li>
        
        
        
        <!--<li class="log_out">
          <a href="#">
            <div class='bx bx-log-out'></div>
            <span class="links_name">&nbsp; Log out</span>
          </a>
        </li>-->
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <div class='bx bx-menu sidebarBtn'></div>
        
      </div>
      <div class="search-box">
        <input type="text" placeholder="Search...">
        <div class='bx bx-search' ></div>
      </div>
      <div class="profile-details">
        <!-- //<img src="../public/img/images.png" alt=""> -->
        <span class="admin_name">Adam Fernando</span>
        <div class='bx bx-chevron-down' ></div>
      </div>
    </nav>

    <div class="home-content">
      <div class="overview-boxes">
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Drivers working today</div>
            <div class="number">10</div>
            
        </div>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">New Ride Requests</div>
            <div class="number">12</div>
          
          </div>
          
          
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">New Parent Requests</div>
            <div class="number">10</div>
            
          </div>
          
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">New Worker Requests</div>
            <div class="number">15</div>
        
          </div>
          
        </div>
      </div>

      <div class="sales-boxes">
        <div class="recent-sales box">
          <div class="title">Earnings & Expenses Summary</div>
          <div><img class="earn" src="../public/img/graph.png"></div>
        </div>
        
        <div class="map-card">
  <div class="driver-topic">
    Vehicle locations
  </div>
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126743.63162574056!2d79.78616450128246!3d6.921833528266875!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae253d10f7a7003%3A0x320b2e4d32d3838d!2sColombo!5e0!3m2!1sen!2slk!4v1675796781445!5m2!1sen!2slk" width="420" height="450" style="border:0;" allowfullscreen></iframe>
</div>

           <!-- <div><img class="map" src="../public/img/gmap.png "></div>-->
            
            <!--<div class="driver-details">
                <div class="driver-img">
                    <img class="profile-img" src="../public/img/profile.png">
                </div>
                <div class="driver-name">
                    <label>Sheron Kingsley</label>
                </div>
            </div>

            <div class="driver-details">
                <div class="driver-img">
                    <img class="profile-img" src="../public/img/profile.png">
                </div>
                <div class="driver-name">
                    <label>Roshen Perera</label>
                </div>
            </div>

            <div class="driver-details">
                <div class="driver-img">
                    <img class="profile-img" src="../public/img/profile.png">
                </div>
                <div class="driver-name">
                    <label>Razal Mohomed</label>
                </div>
            </div>

            <div class="driver-details">
                <div class="driver-img">
                    <img class="profile-img" src="../public/img/profile.png">
                </div>
                <div class="driver-name">
                    <label>Dave Fernando</label>
                </div>
            </div>

            <div class="driver-details">
                <div class="driver-img">
                    <img class="profile-img" src="../public/img/profile.png">
                </div>
                <div class="driver-name">
                    <label>Chamel Perera</label>
                </div>
            </div>

            <div class="driver-details">
                <div class="driver-img">
                    <img class="profile-img" src="../public/img/profile.png">
                </div>
                <div class="driver-name">
                    <label>Troy Bolton</label>
                </div>
            </div>-->
        </div>
    </div>
                
          

            
        </div>  
</div>
<div class="join">
   <div class="card2">
            <a href="<?php echo URLROOT?>/Vehicles/addvehicle"><button class="addfunctions"  >Add a new vehicle</button></a><br>
            <br>
            <div><img class="add" src="../public/img/add ve.jpg"></div>
    </div>
        <!-- </div> -->
    <div class="card2">
            <a href="<?php echo URLROOT?>/myvehicles/viewMyVehicles">
            <button class="addfunctions">My Vehicles</button>
            </a>
           
            <div><img class="add" src="../public/img/car.png"></div>
            
          </div>
          
          
      
   </div>
         
      </div>
    </div>
</div>
  </section>

  

</body>
<?php require APPROOT . '/views/inc/footer.php'; ?>

 
   