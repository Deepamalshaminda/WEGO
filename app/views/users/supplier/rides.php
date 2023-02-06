<?php require APPROOT . '/views/inc/header.php'; ?>

<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/dashboard.css">
<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/rides.css">
<script type="text/javascript" src="<?php echo URLROOT; ?>/js/list.js"></script>
<title><?php echo SITENAME; ?></title>
<html>
</head>


<body>


<div class="sidebar">
    <div class="logo-details">
      <div class='bx bxl-c-plus-plus'></div>
      <span class="logo_name">&nbsp; WeGo</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="#">
            <div class='bx bx-grid-alt' ></div>
            <span class="links_name">&nbsp; Dashboard</span>
          </a>
        </li>
        <li>
          <a href="#" >
            <div class='bx bx-box' ></div>
            <span class="links_name">&nbsp; Parents</span>
          </a>
        </li>
        <li>
          <a href="#" >
            <div class='bx bx-list-ul' ></div>
            <span class="links_name">&nbsp; Office Workers</span>
          </a>
        </li>
        <li>
          <a href="#" class="active">
            <div class='bx bx-pie-chart-alt-2' ></div>
            <span class="links_name">&nbsp; Rides</span>
          </a>
        </li>
        <li>
          <a href="#">
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
  <div class="home-section">
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
 <h2>Choose your rider and view your rides</h2>
 <div class="list">
 <div class="card">
<a href="<?php echo URLROOT?>/rides/assignChangeDrivers">
  <div class="details">Assign Drivers for Rides</div>
</a> 
</div>
<div class="card">
<a href="<?php echo URLROOT?>/rides/viewRideInfo">    
  <div class="details">View Rides</div>
  
</div>
<div class="ride-image"><img src="../public/img/image1.svg"></div>

</div>







</body>




<!--<?php require APPROOT . '/views/inc/footer.php'; ?>-->




