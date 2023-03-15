<?php require APPROOT . '/views/inc/header.php'; ?>

<<<<<<< Updated upstream:admin/projectwego/app/views/users/admin/transaction.php
<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/dashboard.css">
<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/rideschedule.css">
<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/transaction.css">
<link rel="stylesheet" href="<?php echo URLROOT; ?>/js/list.js">
=======
<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/admin_dashboard.css">
<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/vehicle.css">
<link rel="stylesheet" href="<?php echo URLROOT; ?>/js/tab.js">



>>>>>>> Stashed changes:app/views/users/admin/transaction.php
<title><?php echo SITENAME; ?></title>
<html>
</head>



<meta name="viewport" content="width=device-width, initial-scale=1.0">
<body>


<<<<<<< Updated upstream:admin/projectwego/app/views/users/admin/transaction.php
<?php require APPROOT . '/views/inc/sidenavbar.php' ;?>
  


<div class="wrapper">
    <div class="left">
        <img src ="../public/img/v2.png" 
        alt="user" width="100">
        <h4> David Piris </h4>
         
    </div>
    <div class="right">
        <div class="info">
            <h2>Information</h2>
            <br>
            <div class="info_data">
                 <div class="data">
                    <h4>Vehicle ID : CBK 2345</h4>
                    <br>
                    <h4>Supplier ID : 776</h4>
                    <br>
                    <h4>No of Passengers : 25</h4>
                    <br>
                    <h4>Amount : Rs 145,000</h4>
                    
                    




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
                    <button class="edit">View</button>
                    
                 </div>
                 
            </div>
        </div>
      
=======
<?php require APPROOT . '/views/inc/admin_sidenavbar.php' ;?>
     
    <div class="home-content">
    <div class="tab">
        <button class="tablink" onclick="openPage('rides')" id="defaultOpen" >Rides</button>
        <button class="tablink" onclick="openPage('reservations')" >Reservations</button>
>>>>>>> Stashed changes:app/views/users/admin/transaction.php
        
    </div>
    

<div id="rides" class="tabcontent">
  <div class="friend-list">
    <!-- <div class="friend-card">
      
      <div class="friend-name"><img src="../public/img/v1.png" class="friend-picture" >
      <div class="details">
      <p> Reservation Id : 001 </p> 
      <p>Driver Id : 030 </p> 
      <p>Vehicle Id : KT 8976 </p>
      <p>Payments : Rs 2500.00 </p>
      </div>
      </div>
      <br>
      <br>
      
    </div> -->
    <div class="friend-card">
      
      <div class="friend-name"><img src="../public/img/v2.png" class="friend-picture" >
      <div class="details">
      <p> Ride Id : 001 </p> 
      <p>Supplier Id : 025 </p> 
      <p>Vehicle Id : PV 3456 </p> 
      <p>No of Passengers : 24 </p> 
      <p>Amount : Rs 25000.00 </p>
      </div>
      </div>
      <br>
      <br>
      
    </div>
    <!-- <div class="friend-card">
      
      <div class="friend-name"><img src="../public/img/v3.png" class="friend-picture" >
      <div class="details">
      <p> Reservation Id : 002 </p> 
      <p>Driver Id : 123 </p> 
      <p>Vehicle Id : CAH 5643 </p>
      <p>Payments : Rs 1500.00 </p>
      </div>
      </div>
      <br>
      <br>
      
    </div> -->
    <div class="friend-card">
      
      <div class="friend-name"><img src="../public/img/v4.png" class="friend-picture" >
      <div class="details">
      <p> Ride Id : 002 </p> 
      <p>Supplier Id : 043 </p> 
      <p>Vehicle Id : KP 3489 </p> 
      <p>No of Passengers : 30 </p> 
      <p>Amount : Rs 67000.00 </p>
      </div>
      </div>
      <br>
      <br>
      
    </div>

    <div class="friend-card">
      
      <div class="friend-name"><img src="../public/img/v9.png" class="friend-picture" >
      <div class="details">
      <p> Ride Id : 003 </p> 
      <p>Supplier Id : 056 </p> 
      <p>Vehicle Id : LM 6590 </p> 
      <p>No of Passengers :27 </p> 
      <p>Amount : Rs 56000.00 </p>
      </div>
      </div>
      <br>
      <br>
      
    </div>

    <div class="friend-card">
      
      <div class="friend-name"><img src="../public/img/v11.png" class="friend-picture" >
      <div class="details">
      <p> Ride Id : 004 </p> 
      <p>Supplier Id : 100 </p> 
      <p>Vehicle Id : PV 7654 </p> 
      <p>No of Passengers : 17 </p> 
      <p>Amount : Rs 42000.00 </p>
      </div>
      </div>
      <br>
      <br>
      
    </div>
</div>
    <div>
      View All
    </div>

    <div id="reservations" class="tabcontent">
    <div class="friend-list">
      <div class="friend-card">
      
      <div class="friend-name"><img src="../public/img/v1.png" class="friend-picture" >
      <div class="details">
      <p> Reservation Id : 001 </p> 
      <p>Driver Id : 030 </p> 
      <p>Vehicle Id : KT 8976 </p>
      <p>Payments : Rs 2500.00 </p>
      </div>
      </div>
      <br>
      <br>
      
    </div>
    
    <div class="friend-card">
      
      <div class="friend-name"><img src="../public/img/v3.png" class="friend-picture" >
      <div class="details">
      <p> Reservation Id : 002 </p> 
      <p>Driver Id : 123 </p> 
      <p>Vehicle Id : CAH 5643 </p>
      <p>Payments : Rs 1500.00 </p>
      </div>
      </div>
      <br>
      <br>
      
    </div>
</div>
    <div>
      View All
    </div>
  
</div>
    
    </body>




    <!--<?php require APPROOT . '/views/inc/footer.php'; ?>-->