<?php require APPROOT . '/views/inc/header.php'; ?>

<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/admin_dashboard.css">
<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/vehicle.css">
<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/completed.css">
<script type="text/javascript" src="<?php echo URLROOT; ?>/js/list.js"></script>
<title><?php echo SITENAME; ?></title>
<html>
</head>



<body>

<?php require APPROOT . '/views/inc/admin_sidenavbar.php' ;?>
     
    <div class="home-content">
    <div class="tab">
        <button class="tablink" onclick="openPage('ongoing')" id="defaultOpen" >Ongoing Rides</button>
        <button class="tablink" onclick="openPage('pending')" >Pending Rides</button>
        <button class="tablink" onclick="openPage('completed')" >Completed Rides</button>
    </div>   
    <div class="search-box">
        <input type="text" placeholder="Search...">
        <div class='bx bx-search' ></div>
      </div>
        <div id="ongoing" class="tabcontent">
        <div class="friend-list">
    <div class="friend-card">
      
      <div class="friend-name"><img src="../public/img/v5.png" class="friend-picture" >Route : Kandy-Galle</div>
      <br>
      <br>
      <div class="friend-actions">
        <button class="accept-button"><a href="<?php echo URLROOT?>/Admin/viewride"> View </a></button>
      </div>
    </div>
    <div class="friend-card">
      
      <div class="friend-name"><img src="../public/img/v2.png" class="friend-picture" >Route : Kaluthara-Panadura</div>
      <br>
      <br>
      <div class="friend-actions">
        <button class="accept-button">View</button>
      </div>
    </div>
    <div class="friend-card">
      
      <div class="friend-name"><img src="../public/img/v6.png" class="friend-picture" >Route : Pettah-Nugegoda</div>
      <br>
      <br>
      <div class="friend-actions">
        <button class="accept-button">View</button>
      </div>
    </div>
    <div class="friend-card">
      
      <div class="friend-name"><img src="../public/img/v11.png" class="friend-picture" >Route : Nugegoda-Colombo</div>
      <br>
      <br>
      <div class="friend-actions">
        <button class="accept-button">View</button>
      </div>
    </div>

</div>
</div>

<div id="pending" class="tabcontent">
        <div class="friend-list">
    <div class="friend-card">
      
      <div class="friend-name"><img src="../public/img/v3.png" class="friend-picture" >Route : Panadura-Dehiwala</div>
      <br>
      <br>
      <div class="friend-actions">
        <button class="accept-button">View</button>
      </div>
    </div>

    <div class="friend-card">
      
      <div class="friend-name"><img src="../public/img/v9.png" class="friend-picture" >Route : Negombo-Pettah</div>
      <br>
      <br>
      <div class="friend-actions">
        <button class="accept-button">View</button>
      </div>
    </div>
    <div class="friend-card">
      
      <div class="friend-name"><img src="../public/img/v9.png" class="friend-picture" >Route : Negombo-Pettah</div>
      <br>
      <br>
      <div class="friend-actions">
        <button class="accept-button">View</button>
      </div>
    </div>
    <div class="friend-card">
      
      <div class="friend-name"><img src="../public/img/v9.png" class="friend-picture" >Route : Negombo-Pettah</div>
      <br>
      <br>
      <div class="friend-actions">
        <button class="accept-button">View</button>
      </div>
    </div>
  </div>
</div>

        

<div id="completed" class="tabcontent">
        
<div class="friend-list">
    <div class="friend-card">
      
      <div class="friend-name"><img src="../public/img/v6.png" class="friend-picture" >Route : Colombo-Kandy</div>
      <br>
      <br>
      <div class="friend-actions">
        <button class="accept-button"><a href="<?php echo URLROOT?>/Viewsentrequests/viewsentrequest"> View</a></button>
        
      </div>
    </div>
    <div class="friend-card">
      
      <div class="friend-name"><img src="../public/img/v7.png" class="friend-picture" >Route : Galle-Kandy</div>
      <br>
      <br>
      <div class="friend-actions">
        <button class="accept-button">View</button>
        
      </div>
    </div>
    <div class="friend-card">
      
      <div class="friend-name"><img src="../public/img/v8.png" class="friend-picture" >Route : Pettah-Nugegoda</div>
      <br>
      <br>
      <div class="friend-actions">
        <button class="accept-button">View</button>
        
      </div>
    </div>
    <div class="friend-card">
      
      <div class="friend-name"><img src="../public/img/v9.png" class="friend-picture" >Route : Kandy-Colombo</div>
      <br>
      <br>
      <div class="friend-actions">
        <button class="accept-button">View</button>
        
      </div>
    </div>
    <div class="friend-card">
      
      <div class="friend-name"><img src="../public/img/v10.png" class="friend-picture" >Route : Negombo-Kandy</div>
      <br>
      <br>
      <div class="friend-actions">
        <button class="accept-button">View</button>
        
      </div>
    </div>

    <div class="friend-card">
      
      <div class="friend-name"><img src="../public/img/v12.png" class="friend-picture" >Route : Pettah-Negombo</div>
      <br>
      <br>
      <div class="friend-actions">
        <button class="accept-button">View</button>
       
      </div>
    </div>
  </div>
  
  
</div>
               
            </div>
        </div>
              