
<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/admin_dashboard.css">
<link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
  <title><?php echo SITENAME; ?></title>
</head>
<body>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
    <i><img src="../img/wego_logo.png" class="wego-logo" alt="wego-logo"></i>
      <span class="logo_name">&nbsp; WeGo</span>
    </div>
      <ul class="nav-links">
      <li>
        <a href="<?php echo URLROOT?>/Admin/a_dashboard">
            <div class='bx bx-grid-alt' ></div>
            <span class="links_name">&nbsp; Dashboard</span>
          </a>
        </li>
        <li>
          <a href="<?php echo URLROOT?>/Admin/viewprofile">
            <div class='bx bx-list-ul' ></div>
            <span class="links_name">&nbsp; View Users</span>
          </a>
        </li>
        
        <li>
          <a href="<?php echo URLROOT?>/Admin/rideschedule">
            <div class='bx bx-box' ></div>
            <span class="links_name">&nbsp; Rides</span>
          </a>
        </li>
        <li>
          <a href="<?php echo URLROOT?>/Admin/vehicle">
            <div class='bx bx-box' ></div>
            <span class="links_name">&nbsp; Vehicles</span>
          </a>
        </li>
        <li>
          <a href="<?php echo URLROOT?>/Admin/transactions">
            <div class='bx bx-pie-chart-alt-2' ></div>
            <span class="links_name">&nbsp; Transactions</span>
          </a>
        </li>
        <li>
        <a href="<?php echo URLROOT?>/Admin/complaints">
            <div class='bx bx-coin-stack' ></div>
            <span class="links_name">&nbsp; Complaints</span>
          </a>
        </li>
       
        
        
        <li class="log_out">
          <a href="<?php echo URLROOT?>/users/login">
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
      
      <div class="profile-details">
        <!-- //<img src="../public/img/images.png" alt=""> -->
        <span class="admin_name"> Priyantha Gamlath </span>
        <div class='bx bx-chevron-down' ></div>
      </div>
    </nav>
  