<?php require APPROOT . '/views/inc/header.php'; ?>

<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/dashboard.css">
<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/ongoing.css">
<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/prequest.css">
<script type="text/javascript" src="<?php echo URLROOT; ?>/js/list.js"></script>
<title><?php echo SITENAME; ?></title>
<html>
</head>



<body>

<?php require APPROOT . '/views/inc/sidebarnav.php' ;?>
     
    <div class="home-content">
        <button class="tablink" onclick="openPage('ongoing')" id="defaultOpen" >Ongoing Rides</button>
        <button class="tablink" onclick="openPage('completed')" >Completed Rides</button>
        
        <div id="ongoing" class="tabcontent">
            <div class="card-container">
                <div class="card">
                  <div class="card-header">
                    <h3>Ride ID 005</h3>
                  </div>
                  <div class="card-body">
                    <p>Vehicle No - PA 2456</p>
                    <p>Driver ID  -  008</p>
                    <p>Date  - 2023/02/04</p>
                    <p>End Time  - 8:00 AM</p>
                    <p>Route - Nugegoda, Kirulapana, Thibirigasyaya,Thunmulla </p>
                  </div>
                  <button class="view-btn">View Location</button>
                </div>

                <div class="card">
                    <div class="card-header">
                      <h3>Ride ID 006</h3>
                    </div>
                    <div class="card-body">
                      <p>Vehicle No - HW 5689</p>
                      <p>Driver ID  -  012</p>
                      <p>Date  - 2023/02/04</p>
                      <p>End Time  - 9:00 AM</p>
                      <p>Route - Delkanda,Nugegoda, Kirulapana, Thibirigasyaya </p>
                    </div>
                    <button class="view-btn">View Location</button>
               </div>
                
               <div class="card">
                    <div class="card-header">
                      <h3>Ride ID 007</h3>
                    </div>
                    <div class="card-body">
                      <p>Vehicle No - KE 2097</p>
                      <p>Driver ID  -  001</p>
                      <p>Date  - 2023/02/04</p>
                      <p>End Time  - 8:00 AM</p>
                      <p>Route -Thunmulla,Union Place,Slave Island,Pettah </p>
                    </div>
                    <button class="view-btn">View Location</button>
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
              