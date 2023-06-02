<!--navigation bar left-->
<div class="sidebar">
        <div class="logo-details">
            <i><img src="<?php echo URLROOT?>/img/wego_logo.png" class="wego-logo" alt="wego-logo"></i>
            <span class="logo_name">WEGO</span>
        </div>
        <ul class="nav-links">
            <li>
                <a href="<?php echo URLROOT;?>/Pages/d_dashboard">
                    <i class='bx bx-grid-alt'></i>
                    <span class="links_name">Dashboard</span>
                </a>
            </li>

            <li>
                <a href="<?php echo URLROOT;?>/D_ManageDrivers/getRideRequest">
                    <i class='bx bx-box'></i>
                    <span class="links_name">Accept<?php echo $_SESSION['user_id'] ?> Ride Requests</span>
                </a>
            </li>

            <li>
                <a href="<?php echo URLROOT;?>/D_ManageDrivers/checkTripInfo">
                    <i class='bx bx-list-ul'></i>
                    <span class="links_name">Check Trip Info</span>
                </a>
            </li>
            <li>
                <a href="<?php echo URLROOT;?>/D_ManageDrivers/viewEarnings">
                    <i class='bx bx-pie-chart-alt-2'></i>
                    <span class="links_name">View Earnings</span>
                </a>
            </li>
            <li>
                <a href="<?php echo URLROOT;?>/D_Vehicles/studentsToBeAbsent">
                    <i class='bx bx-coin-stack'></i>
                    <span class="links_name">Students to be Present</span>
                </a>
            </li>
            <li>
                <a href="<?php echo URLROOT;?>/D_ManageDrivers/viewProfile">
                    <i class='bx bx-book-alt'></i>
                    <span class="links_name">View Profile</span>
                </a>
            </li>

            <!-- <li>
                <a href="/D_Vehicles/addVehicle">
                    <i class='bx bx-user'></i>
                    <span class="links_name">Add Another Vehicle</span>
                </a>
            </li> -->

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