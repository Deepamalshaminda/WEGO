<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/p_dashboard.css">
<link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
<title><?php echo SITENAME; ?></title>
</head>

<body>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>

  <body>
    <div class="sidebar">
      <div class="logo-details">
      <i><img src="<?php echo URLROOT?>/img/wego_logo.png" class="wego-logo" alt="wego-logo"></i>
       
        <span class="logo_name">&nbsp; WeGo</span>
      </div>
      <ul class="nav-links">
        <li>
          <a href="<?php echo URLROOT ?>/Dashboard/dashboard" class="">
            <i class='bx bx-grid-alt'></i>
            <span class="links_name">&nbsp;Dashboard</span>
          </a>
        </li>
        <li>
          <a href="<?php echo URLROOT ?>/Sendrequests/sendrequest">
            <i class='bx bx-box'></i>
            <span class="links_name">&nbsp;Send requests</span>
          </a>
        </li>
        <li>
          <a href="<?php echo URLROOT ?>/Makereservations/makereservation">
            <i class='bx bx-list-ul'></i>
            <span class="links_name">&nbsp;Make reservations</span>
          </a>
        </li>
        <li>
          <a href="<?php echo URLROOT ?>/Complaints">
            <i class='bx bx-list-ul'></i>
            <span class="links_name">&nbsp;Create Complaints</span>
          </a>
        </li>
        <li>
          <a href="<?php echo URLROOT ?>/Payments">
            <i class='bx bx-pie-chart-alt-2'></i>
            <span class="links_name">&nbsp;Payments</span>
          </a>
        </li>
        <li>
          <a href="<?php echo URLROOT ?>/Attendencechildren/attendencechild">
            <i class='bx bx-coin-stack'></i>
            <span class="links_name">&nbsp;Student attendence</span>
          </a>
        </li>
        <!--<li>
          <a href="#">
            <div class='bx bx-book-alt' ></div>
            <span class="links_name">&nbsp; My added children</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-user'></i>
            <span class="links_name">&nbsp; </span>
          </a>
        </li>-->

        <li class="log_out">
          <a href="<?php echo URLROOT ?>/Users/logout">
            <i class='bx bx-log-out'></i>
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
          <div class='bx bx-search'></div>
        </div>
        <div class="profile-details">
          <!-- //<img src="../public/img/images.png" alt=""> -->
          <span class="admin_name">Melissa Perera</span>
          <div class='bx bx-chevron-down'></div>
        </div>
      </nav>