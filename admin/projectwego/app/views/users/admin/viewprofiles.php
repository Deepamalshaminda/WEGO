<?php require APPROOT . '/views/inc/header.php'; ?>

<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/admin_dashboard.css">
<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/viewprofiles.css">

<<<<<<< Updated upstream:admin/projectwego/app/views/users/admin/viewprofiles.php
<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/tranaction.css">
<link rel="stylesheet" href="<?php echo URLROOT; ?>/js/list.js">
=======
>>>>>>> Stashed changes:app/views/users/admin/viewprofiles.php
<title><?php echo SITENAME; ?></title>
<html>
</head>



<meta name="viewport" content="width=device-width, initial-scale=1.0">
<body>


<<<<<<< Updated upstream:admin/projectwego/app/views/users/admin/viewprofiles.php
<?php require APPROOT . '/views/inc/sidenavbar.php' ;?>
<div class="wrapper">
    <div class="left">
        <img src ="../public/img/ch2.png" 
        alt="user" width="100">
        <h4>Kevin Fernando</h4>
         <p>Student</p>
    </div>
    <div class="right">
        <div class="info">
            <h2>Information</h2>
            <br>
            <div class="info_data">
                 <div class="data">
                    <h4>Name : Kevin Fernando</h4>
                    <br>
                    <h4>School : Royal College, Colombo</h4>
                    <br>
                    <h4>Address : 16/B, Colombo 07</h4>
                    <br>
                    <h4>Age : 12 yrs</h4>
                    <br>
                    <h4>Gender : Male</h4>
                    




                    <!--<p>Kevin Fernando</p>-->
                 </div>
                <!-- <div class="data">
                   <h4>Phone</h4>
                    <p>0001-213-998761</p>
              </div>-->
            </div>
        </div>
        <br>
      
      <div class="projects">
            
            <div class="projects_data">
                 <div class="data">
                    <button class="edit">Edit</button>
                    
                 </div>
                 
            </div>
        </div>
      
        
    </div>
</div>

</body>
</html>


         

















    </body>




    <!--<?php require APPROOT . '/views/inc/footer.php'; ?>--><?php require APPROOT . '/views/inc/header.php'; ?>

<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/dashboard.css">
<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/prequest.css">
<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/viewvehicle.css">
<link rel="stylesheet" href="<?php echo URLROOT; ?>/js/list.js">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
          <a href="parent.html" class="active">
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
          <a href="reserve.html">
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
            <span class="links_name">&nbsp; Student attendence</span>
          </a>
        </li>
        <li>
          <a href="#">
            <div class='bx bx-book-alt' ></div>
            <span class="links_name">&nbsp; My added children</span>
          </a>
        </li>
        <li>
          
        
        
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
=======
<?php require APPROOT . '/views/inc/admin_sidenavbar.php' ;?>
>>>>>>> Stashed changes:app/views/users/admin/viewprofiles.php
     
    <div class="home-content">
<div class="tab">
        <button class="tablink" onclick="openPage('drivers')" id="defaultOpen" >Drivers</button>
        <button class="tablink" onclick="openPage('Vehicle Suppliers')" >Vehicle Suppliers</button>
        <button class="tablink" onclick="openPage('parents')" >Parents</button>
        <button class="tablink" onclick="openPage('officeworkers')" >Office Workers</button>
    </div>   

<div id="drivers" class="tabcontent">
  <div class="friend-list">
    <div class="friend-card">
      
      <div class="friend-name"><img src="../public/img/us1.jpg" class="friend-picture" > Dinidu Pathirana </div>
      <br>
      <br>
      <div class="friend-actions">
      <button class="details-button"><a href="<?php echo URLROOT?>/Admin/viewuser"> View details</a></button>
        
      </div>
    </div>
    <div class="friend-card">
      
      <div class="friend-name"><img src="../public/img/us2.jpg" class="friend-picture" > Dan Fernando </div>
      <br>
      <br>
      <div class="friend-actions">
      <button class="details-button"> View details</button>
        
      </div>
    </div>
    <div class="friend-card">
      
      <div class="friend-name"><img src="../public/img/us3.jpg" class="friend-picture" > Sophia Aluthgama </div>
      <br>
      <br>
      <div class="friend-actions">
      <button class="details-button"> View details</button>
        
      </div>
    </div>
    <div class="friend-card">
      
      <div class="friend-name"><img src="../public/img/us4.jpg" class="friend-picture" > Minoli Perera </div>
      <br>
      <br>
      <div class="friend-actions">
      <button class="details-button"> View details</button>
        
      </div>
    </div>
    <div class="friend-card">
      
      <div class="friend-name"><img src="../public/img/us5.jpg" class="friend-picture" > Suchi Siriwardhana </div>
      <br>
      <br>
      <div class="friend-actions">
      <button class="details-button"> View details</button>
        
      </div>
    </div>

    <div class="friend-card">
      
      <div class="friend-name"><img src="../public/img/us6.jpg" class="friend-picture" > Wikim Gunathilaka </div>
      <br>
      <br>
      <div class="friend-actions">
      <button class="details-button"> View details</button>
        
      </div>
    </div>
  </div>
  
  
  </div>
  
</div>

    </body>




    <!--<?php require APPROOT . '/views/inc/footer.php'; ?>-->