<?php require APPROOT . '/views/inc/header.php'; ?>

<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/dashboard.css">
<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/prequest.css">
<script type="text/javascript" src="<?php echo URLROOT; ?>/js/list.js"></script>
<body>
<title><?php echo SITENAME; ?></title>
<html>
</head>




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
          <a href="#" class="active">
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
<button class="tablink" onclick="openPage('workerrequest')" id="defaultOpen" >Office Worker Requests</button>
<button class="tablink" onclick="openPage('WAccepted')" >Accepted Worker Requests</button>

<div id="workerrequest" class="tabcontent">
  <div class="friend-list">
    <div class="friend-card">
      
      <div class="friend-name"><img src="../public/img/p1.png" class="friend-picture" >Michelle Fernando</div>
      <br>
      <br>
      <div class="friend-actions">
        <button class="accept-button">Accept</button>
        <button class="delete-button">Delete</button>
      </div>
    </div>
    <div class="friend-card">
      
      <div class="friend-name"><img src="../public/img/p2.jpg" class="friend-picture" >Gabriella De Silva</div>
      <br>
      <br>
      <div class="friend-actions">
        <button class="accept-button">Accept</button>
        <button class="delete-button">Delete</button>
      </div>
    </div>
    <div class="friend-card">
      
      <div class="friend-name"><img src="../public/img/m1.png" class="friend-picture" >John De Zoysa</div>
      <br>
      <br>
      <div class="friend-actions">
        <button class="accept-button">Accept</button>
        <button class="delete-button">Delete</button>
      </div>
    </div>
    <div class="friend-card">
      
      <div class="friend-name"><img src="../public/img/m2.png" class="friend-picture" >James Perera</div>
      <br>
      <br>
      <div class="friend-actions">
        <button class="accept-button">Accept</button>
        <button class="delete-button">Delete</button>
      </div>
    </div>
    <div class="friend-card">
      
      <div class="friend-name"><img src="../public/img/vs round.png" class="friend-picture" >Zain Malik</div>
      <br>
      <br>
      <div class="friend-actions">
        <button class="accept-button">Accept</button>
        <button class="delete-button">Delete</button>
      </div>
    </div>


  </div>
  
  
  </div>

<div id="WAccepted" class="tabcontent">
  <div class="friend-list">
    <div class="friend-card">
      
      <div class="friend-name"><img src="../public/img/m3.png" class="friend-picture" >Joel De Mel</div>
      <br>
      <br>
      <div class="friend-actions">
        <button class="details-button">View Details</button>
       
      </div>
    </div>
    <div class="friend-card">
      
      <div class="friend-name"><img src="../public/img/m4.png" class="friend-picture" >Sunil Perera</div>
      <br>
      <br>
      <div class="friend-actions">
        <button class="details-button">View Details</button>
      </div>
    </div>
    <div class="friend-card">
      
      <div class="friend-name"><img src="../public/img/ac6.png" class="friend-picture" >Zac Fernando</div>
      <br>
      <br>
      <div class="friend-actions">
        <button class="details-button">View Details</button>
      </div>
    </div>
    <div class="friend-card">
      
      <div class="friend-name"><img src="../public/img/ac7.png" class="friend-picture" >Prakash Sivakumar</div>
      <br>
      <br>
      <div class="friend-actions">
        <button class="details-button">View Details</button>
      </div>
    </div>

    <div class="friend-card">
      
        <div class="friend-name"><img src="../public/img/o3.png" class="friend-picture" >Peter Parker</div>
        <br>
        <br>
        <div class="friend-actions">
          <button class="details-button">View Details</button>
        </div>
      </div>

      <div class="friend-card">
      
        <div class="friend-name"><img src="../public/img/w7.png" class="friend-picture" >Jesica De Silva</div>
        <br>
        <br>
        <div class="friend-actions">
          <button class="details-button">View Details</button>
        </div>
      </div>
  
</div>




         
















   


    </body>




    <!--<?php require APPROOT . '/views/inc/footer.php'; ?>-->