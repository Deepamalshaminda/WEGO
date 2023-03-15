<?php require APPROOT . '/views/inc/header.php'; ?>

<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/admin_dashboard.css">
<<<<<<< Updated upstream:admin/projectwego/app/views/users/admin/rideschedule.php
<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/rideschedule.css">
<link rel="stylesheet" href="<?php echo URLROOT; ?>/js/list.js">
=======
<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/vehicle.css">
<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/completed.css">
<script type="text/javascript" src="<?php echo URLROOT; ?>/js/list.js"></script>
>>>>>>> Stashed changes:app/views/users/admin/rideschedule.php
<title><?php echo SITENAME; ?></title>
<html>
</head>



<body>

<<<<<<< Updated upstream:admin/projectwego/app/views/users/admin/rideschedule.php

<?php require APPROOT . '/views/inc/sidenavbar.php' ;?>
=======
<?php require APPROOT . '/views/inc/admin_sidenavbar.php' ;?>
>>>>>>> Stashed changes:app/views/users/admin/rideschedule.php
     
    <div class="home-content">
    <div class="tab">
        <button class="tablink" onclick="openPage('ongoing')" id="defaultOpen" >Ongoing Rides</button>
        <button class="tablink" onclick="openPage('pending')" >Pending Rides</button>
        <button class="tablink" onclick="openPage('completed')" >Completed Rides</button>
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
        
            <div class="card-container">
                <div class="ccard">
                  <div class="card-header">
                    <h3>Ride ID 001</h3>
                  </div>
                  <div class="card-body">
                    <p>Vehicle No - WA 6789</p>
                    <p>Driver ID  -  011</p>
                    <p>Date  - 2023/02/02</p>
                    <p>Start Time  - 7:00 AM</p>
                    <p>End Time  - 8:00 AM</p>
                    <p>Route - Nugegoda, Kirulapana, Thibirigasyaya,Thunmulla </p>
                    <p>Ride Status: Successfully Completed</p>
                    <p>Complaints : No </p>
                  </div>
                  
                </div>
            
                    <div class="ccard">
                      <div class="card-header">
                        <h3>Ride ID 002</h3>
                      </div>
                      <div class="card-body">
                        <p>Vehicle No - SF 9078</p>
                        <p>Driver ID  -  001</p>
                        <p>Date  - 2023/02/02</p>
                        <p>Start Time  - 6:00 AM</p>
                        <p>End Time  - 7:00 AM</p>
                        <p>Route -  Delkanda,Nugegoda, Kirulapana, Thibirigasyaya</p>
                        <p>Ride Status: Successfully Completed</p>
                        <p>Complaints : No </p>
                      </div>
                      
                    </div>

                   
                        <div class="ccard">
                          <div class="card-header">
                            <h3>Ride ID 003</h3>
                          </div>
                          <div class="card-body">
                            <p>Vehicle No - JK 5543</p>
                            <p>Driver ID  -  004</p>
                            <p>Date  - 2023/02/03</p>
                            <p>Start Time  - 6:00 AM</p>
                            <p>End Time  - 8:00 AM</p>
                            <p>Route -  Delkanda,Nugegoda, Kirulapana, Thibirigasyaya</p>
                            <p>Ride Status: Successfully Completed</p>
                            <p>Complaints : <u>1 complaint </u></p>
                          </div>
                          
                        </div>
                        
                            <div class="ccard">
                              <div class="card-header">
                                <h3>Ride ID 004</h3>
                              </div>
                              <div class="card-body">
                                <p>Vehicle No - WR 7812</p>
                                <p>Driver ID  -  009</p>
                                <p>Date  - 2023/02/02</p>
                                <p>Start Time  - 7:00 AM</p>
                                <p>End Time  - 9:00 AM</p>
                                <p>Route -  ,Maharagama,Delkanda,Nugegoda, Kirulapana, Thibirigasyaya</p>
                                <p>Ride Status: Successfully Completed</p>
                                <p>Complaints : No </p>
                              </div>
                              
                            </div>
               
            </div>
        </div>
              