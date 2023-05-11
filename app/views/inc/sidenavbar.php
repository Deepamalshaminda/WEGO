
<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/p_dashboard.css">
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
          <a href="<?php echo URLROOT?>/Dashboard/dashboard" class="">
            <div class='bx bx-grid-alt' ></div>
            <span class="links_name">&nbsp; Dashboard</span>
          </a>
        </li>
        <li>
          <a href="<?php echo URLROOT?>/Sendrequests/sendrequest">
            <div class='bx bx-box' ></div>
            <span class="links_name">&nbsp;Send requests</span>
          </a>
        </li>
        <li>
          <a href="<?php echo URLROOT?>/Makereservations/makereservation">
            <div class='bx bx-list-ul' ></div>
            <span class="links_name">&nbsp; Make reservations</span>
          </a>
        </li>
        <li>
          <a href="<?php echo URLROOT?>/Payments/payment">
            <div class='bx bx-pie-chart-alt-2' ></div>
            <span class="links_name">&nbsp; Payments</span>
          </a>
        </li>
        <li>
          <a href="<?php echo URLROOT?>/Attendencechildren/attendencechild">
            <div class='bx bx-coin-stack' ></div>
            <span class="links_name">&nbsp; Student attendence</span>
          </a>
        </li>
        <!--<li>
          <a href="#">
            <div class='bx bx-book-alt' ></div>
            <span class="links_name">&nbsp; My added children</span>
          </a>
        </li>-->
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
        <span class="admin_name">Melissa Perera</span>
        <div class='bx bx-chevron-down' ></div>
      </div>
    </nav>
