<?php require APPROOT . '/views/inc/header.php'; ?>
<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/admin_dashboard.css">
<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/vehicle.css">
<link rel="stylesheet" href="<?php echo URLROOT; ?>/js/tab.js">
<title><?php echo SITENAME; ?></title>
<html>
</head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<body>

<?php require APPROOT . '/views/inc/admin_sidenavbar.php' ;?>
     
    <div class="home-content">
    <div class="tab">
        <button class="tablink" onclick="openPage('rides')" id="defaultOpen" >Rides</button>
        <button class="tablink" onclick="openPage('reservations')" >Reservations</button>
        
    </div>
    <div class="search-box">
        <input type="text" placeholder="Search...">
        <div class='bx bx-search' ></div>
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