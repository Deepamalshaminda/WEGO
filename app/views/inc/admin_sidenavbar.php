
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
    <img src="../img/wego_logo.png" class="wego-logo" alt="wego-logo">
      <span class="logo_name">&nbsp; WeGo</span>
    </div>
      <ul class="nav-links">
      <li>
        <a href="<?php echo URLROOT?>/Admin/a_dashboard">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">&nbsp; Dashboard</span>
          </a>
        </li>
        <li>
          <a href="<?php echo URLROOT?>/Admin/viewprofile">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">&nbsp; View Users</span>
          </a>
        </li>
        
        <li>
          <a href="<?php echo URLROOT?>/Admin/rideschedule">
            <i class='bx bx-box' ></i>
            <span class="links_name">&nbsp; Rides</span>
          </a>
        </li>
        <li>
          <a href="<?php echo URLROOT?>/Admin/vehicle">
            <i class='bx bx-box' ></i>
            <span class="links_name">&nbsp; Add Vehicles</span>
          </a>
        </li>
        <li>
          <a href="<?php echo URLROOT?>/Admin/vehicles">
            <i class='bx bx-box' ></i>
            <span class="links_name">&nbsp; View Vehicles</span>
          </a>
        </li>
        <li>
          <a href="<?php echo URLROOT?>/Admin/transactions">
            <i class='bx bx-pie-chart-alt-2' ></i>
            <span class="links_name">&nbsp; Transactions</span>
          </a>
        </li>
        <li>
        <a href="<?php echo URLROOT?>/Admin/complaints">
            <i class='bx bx-coin-stack' ></i>
            <span class="links_name">&nbsp; Complaints</span>
          </a>
        </li>
       
        
        
        <li class="log_out">
          <a href="<?php echo URLROOT?>/users/login">
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
      
      <div class="profile-details">
        <!-- //<img src="../public/img/images.png" alt=""> -->
        <span class="admin_name"> Priyantha Gamlath </span>
        <div class='bx bx-chevron-down' ></div>
      </div>
    </nav>
  