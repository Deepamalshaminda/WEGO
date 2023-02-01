<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <link rel="stylesheet" href="--><?php echo URLROOT; ?>/css/style.css">
  <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/main.css">
  <title><?php echo SITENAME; ?></title>
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
            <a href="#">
                <div class='bx bx-box' ></div>
                <span class="links_name">&nbsp; Parents</span>
            </a>
        </li>
        <li>
            <a href="#">
                <div class='bx bx-list-ul' ></div>
                <span class="links_name">&nbsp; Office Workers</span>
            </a>
        </li>
        <li>
            <a href="#">
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
                <span class="links_name">&nbsp; Expenses</span>
            </a>
        </li>

        <li class="log_out">
            <a href="#">
                <div class='bx bx-log-out'></div>
                <span class="links_name">&nbsp; Log out</span>
            </a>
        </li>
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

        </div>




    </div>
    </div>
    <div class="join">
        <div class="card2">
            <a href="<?php echo URLROOT?>/Vehicles/addVehicle"><button class="addfunctions"  >Add a new vehicle</button></a><br>
            <br>
            <div><img class="add" src="../public/img/add ve.jpg"></div>
        </div>
        <!-- </div> -->
        <div class="card2">
            <div class="addfunctions">My Vehicles</div>
            <div class="number">06</div>
            <div><img class="add" src="../public/img/car.png"></div>

        </div>



    </div>

    </div>
    </div>
    </div>
</section>

</body>