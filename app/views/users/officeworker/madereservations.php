<?php require APPROOT . '/views/inc/header.php'; ?>

<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/dashboard.css">
<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/prequest.css">
<link rel="stylesheet" href="<?php echo URLROOT; ?>/js/list.js">
<title><?php echo SITENAME; ?></title>
<html>
</head>



<meta name="viewport" content="width=device-width, initial-scale=1.0">
<body>


<div class="sidebar">
    <div class="logo-details">
      <div class='bx bxl-c-plus-plus'></div>
      <span class="logo_name">&nbsp; WeGo</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="#"class="active">
            <div class='bx bx-grid-alt' ></div>
            <span class="links_name">&nbsp; Dashboard</span>
          </a>
        </li>
        <li>
          <a href="#" >
            <div class='bx bx-box' ></div>
            <span class="links_name">&nbsp; Send requests</span>
          </a>
        </li>
        <li>
          <a href="#" >
            <div class='bx bx-list-ul' ></div>
            <span class="links_name">&nbsp; Make reservations</span>
          </a>
        </li>
        <li>
          <a href="#">
            <div class='bx bx-pie-chart-alt-2' ></div>
            <span class="links_name">&nbsp; Payments</span>
          </a>
        </li>
        <li>
          <a href="#">
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
<button class="tablink" onclick="openPage('sendrequests')" id="defaultOpen" >Reservations you made..</button>
<!--<button class="tablink" onclick="openPage('PAccepted')" >Sent Requests</button>-->

<div id="Parentrequests" class="tabcontent">
  <div class="friend-list">
    <div class="friend-card">
      
      <div class="friend-name"><img src="../public/img/v6.png" class="friend-picture" >Route : Colombo-Kandy</div>
      <br>
      <br>
      <div class="friend-actions">
        <button class="details-button">View details</button>
        <!--<button class="delete-button">Delete</button>-->
      </div>
    </div>
    <div class="friend-card">
      
      <div class="friend-name"><img src="../public/img/v7.png" class="friend-picture" >Route : Galle-Kandy</div>
      <br>
      <br>
      <div class="friend-actions">
      <button class="details-button">View details</button>
        
      </div>
    </div>
    <div class="friend-card">
      
      <div class="friend-name"><img src="../public/img/v8.png" class="friend-picture" >Route : Pettah-Nugegoda</div>
      <br>
      <br>
      <div class="friend-actions">
      <button class="details-button">View details</button>
        
      </div>
    </div>
    <div class="friend-card">
      
      <div class="friend-name"><img src="../public/img/v9.png" class="friend-picture" >Route : Kandy-Colombo</div>
      <br>
      <br>
      <div class="friend-actions">
      <button class="details-button">View details</button>
        
      </div>
    </div>
    <div class="friend-card">
      
      <div class="friend-name"><img src="../public/img/v10.png" class="friend-picture" >Route : Negombo-Kandy</div>
      <br>
      <br>
      <div class="friend-actions">
      <button class="details-button">View details</button>
        
      </div>
    </div>

    <div class="friend-card">
      
      <div class="friend-name"><img src="../public/img/v12.png" class="friend-picture" >Route : Pettah-Negombo</div>
      <br>
      <br>
      <div class="friend-actions">
      <button class="details-button">View details</button>
       
      </div>
    </div>
  </div>
  
  
  </div>

<!--<div id="PAccepted" class="tabcontent">
  <div class="friend-list">
    <div class="friend-card">
      
      <div class="friend-name"><img src="p4.png" class="friend-picture" >Adam Awishka</div>
      <br>
      <br>
      <div class="friend-actions">
        <button class="details-button">View Details</button>
       
      </div>
    </div>
    <div class="friend-card">
      
      <div class="friend-name"><img src="p8.png" class="friend-picture" >Susan Perera</div>
      <br>
      <br>
      <div class="friend-actions">
        <button class="details-button">View Details</button>
      </div>
    </div>
    <div class="friend-card">
      
      <div class="friend-name"><img src="p7.png" class="friend-picture" >Arthur Fernando</div>
      <br>
      <br>
      <div class="friend-actions">
        <button class="details-button">View Details</button>
      </div>
    </div>
    <div class="friend-card">
      
      <div class="friend-name"><img src="ac4.png" class="friend-picture" >Peter Perera</div>
      <br>
      <br>
      <div class="friend-actions">
        <button class="details-button">View Details</button>
      </div>
    </div>-->
  
</div>


         

















    </body>




    <!--<?php require APPROOT . '/views/inc/footer.php'; ?>-->