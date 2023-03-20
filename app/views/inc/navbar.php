
<!-- <div id="mySidenav" class="sidenav">
    <a class = "navbar-brand" href="<?php echo URLROOT; ?>"> <?php echo SITENAME;?>
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="<?php echo URLROOT; ?> /pages/dashboard">Dashboard</a>
  <a href="<?php echo URLROOT; ?>">Ride Schedule</a>
  <a href="<?php echo URLROOT; ?>">View User Profile</a>
  <a href="<?php echo URLROOT; ?>">Transactions</a>
  <a href="<?php echo URLROOT; ?>/drivers/addDrivers">Add Drivers</a>
  <a href="<?php echo URLROOT; ?>">Add Vehicle Suppliers</a>
  <a href="<?php echo URLROOT; ?>">Complaints</a>
  <a href="<?php echo URLROOT; ?>/pages/viewAddedDrivers"> View Added Users</a>
</div>
<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span> -->

<div class="sidebar">
    <div class="logo-details">
      <div class='bx bxl-c-plus-plus'></div>
      <span class="logo_name">&nbsp; WeGo</span>
    </div>
      <ul class="nav-links">
        <li>
        <a href="<?php echo URLROOT?>/Pages/dashboard">
            <div class='bx bx-grid-alt' ></div>
            <span class="links_name">&nbsp; Dashboard</span>
          </a>
        </li>
        <li>
          <a href="<?php echo URLROOT?>/  OW_Sendrequests/sendrequest">
            <div class='bx bx-box' ></div>
            <span class="links_name">&nbsp;Send requests</span>
          </a>
        </li>
        <li>
          <a href="<?php echo URLROOT?>/OW_Makereservations/makereservation">
            <div class='bx bx-list-ul' ></div>
            <span class="links_name">&nbsp; Make reservations</span>
          </a>
        </li>
        <li>
          <a href="<?php echo URLROOT?>/OW_Payments/payment">
            <div class='bx bx-pie-chart-alt-2' ></div>
            <span class="links_name">&nbsp; Payments</span>
          </a>
        </li>
        <li>
        <a href="<?php echo URLROOT?>/OW_Attendance/attendance">
            <div class='bx bx-coin-stack' ></div>
            <span class="links_name">&nbsp; Attendence</span>
          </a>
        </li>
        <!-- <li>
          <a href="#">
            <div class='bx bx-book-alt' ></div>
            <span class="links_name">&nbsp; My added children</span>
          </a>
        </li> -->
        <li>
          <a href="#">
            <div class='bx bx-user' ></div>
            <span class="links_name">&nbsp; </span>
          </a>
        </li>
        
        <li class="log_out">
          <a href="<?php echo URLROOT?>/Users/logout">
            <div class='bx bx-log-out'></div>
            <span class="links_name">&nbsp; Log out</span>
          </a>
        </li>
      </ul>
  </div>