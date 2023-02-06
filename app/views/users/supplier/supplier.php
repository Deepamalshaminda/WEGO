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
          <a href="#">
            <div class='bx bx-book-alt' ></div>
            <span class="links_name">&nbsp; Earnings</span>
          </a>
        </li>
        <li>
          <a href="#">
            <div class='bx bx-user' ></div>
            <span class="links_name">&nbsp; Salaries</span>
          </a>
        </li>
        <li>
          <a href="#">
            <div class='bx bx-user' ></div>
            <span class="links_name">&nbsp; Reports</span>
          </a>
        </li>
        <li>
          <a href="#">
            <div class='bx bx-user' ></div>
            <span class="links_name">&nbsp; Vehicle Documents</span>
          </a>
        </li>
        <li>
          <a href="#">
            <div class='bx bx-user' ></div>
            <span class="links_name">&nbsp; Vehicle Maintenance</span>
          </a>
        </li>
        <li>
          <a href="#">
            <div class='bx bx-user' ></div>
            <span class="links_name">&nbsp; Driver Attendace</span>
          </a>
        </li>
        <li>
          <a href="#">
            <div class='bx bx-user' ></div>
            <span class="links_name">&nbsp; Vehicle Status</span>
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
        
        <div class="card">
            <div class="driver-topic">
               Vehicle locations
            </div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.9029768541595!2d79.85896421459267!3d6.902205495012633!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25963120b1509%3A0x2db2c18a68712863!2sUniversity%20of%20Colombo%20School%20of%20Computing%20(UCSC)!5e0!3m2!1sen!2slk!4v1675683519781!5m2!1sen!2slk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
            <div class="addfunctions">My Vehicles</div>
            </a>
            <div class="number">06</div>
            <div><img class="add" src="../public/img/car.png"></div>
            
          </div>
          
          
      
   </div>
         
      </div>
    </div>
</div>
  </section>

  

</body>
<?php require APPROOT . '/views/inc/footer.php'; ?>

 
   