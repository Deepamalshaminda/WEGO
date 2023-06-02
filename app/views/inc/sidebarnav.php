<script src="https://unpkg.com/sweetalert@2/dist/sweetalert.min.js"></script>
<div class="sidebar">
    <div class="logo-details">
    <i><img src="<?php echo URLROOT?>/img/wego_logo.png" class="wego-logo" alt="wego-logo"></i>
      
      <span class="logo_name">&nbsp; WeGo</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="<?php echo URLROOT?>/vdashboard/viewDashboard">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">&nbsp; Dashboard</span>
          </a>
        </li>
        <li>
          <a href="<?php echo URLROOT?>/prequests/viewParentRequest">
            <i class='bx bx-user-circle' ></i>
            <span class="links_name">&nbsp; Parents</span>
          </a>
        </li>
        <li>
          <a href="<?php echo URLROOT?>/wrequests/viewWorkerRequest">
            <i class='bx bx-user-pin' ></i>
            <span class="links_name">&nbsp; Office Workers</span>
          </a>
        </li>
        <li>
          <a href="<?php echo URLROOT?>/rides/viewRides">
            <i class='bx bx-taxi' ></i>
            <span class="links_name">&nbsp; Assign Drivers</span>
          </a>
        </li>
        <li>
          <a href="<?php echo URLROOT?>/driver/viewDrivers">
            <i class='bx bx-user' ></i>
            <span class="links_name">&nbsp; Drivers</span>
          </a>
        </li>
        <li>
          <a href="<?php echo URLROOT?>/Earningschart/viewEarnings">
            <i class='bx bx-data' ></i>
            <span class="links_name">&nbsp; Earnings</span>
          </a>
        </li>
        <li>
          <a href="<?php echo URLROOT?>/reports/viewReports">
            <i class='bx bx-spreadsheet' ></i>
            <span class="links_name">&nbsp; Reports</span>
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
        
        <!-- <li class="log_out">
          <a href="<?php echo URLROOT?>/Users/logout">
            <i class='bx bx-log-out'></i>
            <span class="links_name">&nbsp; Log out</span>
          </a>
        </li>
         -->
        
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