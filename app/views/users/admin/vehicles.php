<?php require APPROOT . '/views/inc/header.php'; ?>

<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/admin_dashboard.css">
<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/vehicle.css">
<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/ridescedule.css">



<title><?php echo SITENAME; ?></title>
<html>
</head>



<meta name="viewport" content="width=device-width, initial-scale=1.0">
<body>


<?php require APPROOT . '/views/inc/admin_sidenavbar.php' ;?>
     
    <div class="home-content">
    <div class="tab">
        <button class="tablink" onclick="openPage('add')" id="defaultOpen" > Add Vehicles </button>
        <button class="tablink" onclick="openPage('view')" > View Vehicles </button>
        
    </div>
    <div class="search-box">
        <input type="text" placeholder="Search...">
        <div class='bx bx-search' ></div>
      </div>

<div id="add" class="tabcontent">
  <div class="friend-list">
  <?php foreach($data['vehicles'] as $vehicle): ?>
    <div class="friend-card">
      
      <div class="friend-name"><img src="../public/img/v3.png" class="friend-picture" > <?php echo $vehicle->vehicleno; ?> <br> Added By: Roshan Madushan </div>
      <br>
      <br>
      <div class="friend-actions">

      <button class="details-button"><a href="<?php echo URLROOT?>/Admin/viewvehicle/<?php echo $vehicle->ve_id; ?>"> View </a></button>
        
      </div>
    </div>

    <div class="friend-card">
      
      <div class="friend-name"><img src="../public/img/v3.png" class="friend-picture" > <?php echo $vehicle->vehicleno; ?> <br> Added By: Roshan Madushan </div>
      <br>
      <br>
      <div class="friend-actions">

      <button class="details-button"><a href="<?php echo URLROOT?>/Admin/addvehicle/<?php echo $vehicle->ve_id; ?>"> Add </a></button>
        
      </div>
    </div>
    
    <?php endforeach; ?>
    <!-- <div class="friend-card">
      
      <div class="friend-name"><img src="../public/img/v6.png" class="friend-picture" > ASS 3421 <br> Added By: Kalum Pathirana </div>
      <br>
      <br>
      <div class="friend-actions">
      <button class="details-button"><a href="<?php echo URLROOT?>/Admin/addvehicle"> Add </a> </button>
        
      </div>
    </div>
    <div class="friend-card">
      
      <div class="friend-name"><img src="../public/img/v9.png" class="friend-picture" > KT 6437 <br> Added By: Vidusha Samaranayaka </div>
      <br>
      <br>
      <div class="friend-actions">
      <button class="details-button"> Add </button>
        
      </div>
    </div>
    <div class="friend-card">
      
      <div class="friend-name"><img src="../public/img/v4.png" class="friend-picture" > CBK 4875 <br> Added By: Wisal Perera </div>
      <br>
      <br>
      <div class="friend-actions">
      <button class="details-button"> Add </button>
        
      </div>
    </div>
    

    
  </div>

  <div id="view" class="tabcontent">
  <div class="friend-list">
    <div class="friend-card">
      
      <div class="friend-name"><img src="../public/img/v3.png" class="friend-picture" > CAA 7865 <br> Added By: Roshan Madushan </div>
      <br>
      <br>
      <div class="friend-actions">
        
      <button class="details-button"><a href="<?php echo URLROOT?>/Admin/viewvehicle"> View </a></button>
        
      </div>
    </div>
    <div class="friend-card">
      
      <div class="friend-name"><img src="../public/img/v6.png" class="friend-picture" > ASS 3421 <br> Added By: Kalum Pathirana </div>
      <br>
      <br>
      <div class="friend-actions">
      <button class="details-button"><a href="<?php echo URLROOT?>/Admin/addvehicle"> View </a> </button>
        
      </div>
    </div>
    <div class="friend-card">
      
      <div class="friend-name"><img src="../public/img/v9.png" class="friend-picture" > KT 6437 <br> Added By: Vidusha Samaranayaka </div>
      <br>
      <br>
      <div class="friend-actions">
      <button class="details-button"> View </button>
        
      </div>
    </div>
    <div class="friend-card">
      
      <div class="friend-name"><img src="../public/img/v4.png" class="friend-picture" > CBK 4875 <br> Added By: Wisal Perera </div>
      <br>
      <br>
      <div class="friend-actions">
      <button class="details-button"> View </button>
        
      </div>
    </div> -->
    

    
  </div>
  
  
  </div>


  
</div>



    </body>




    <!--<?php require APPROOT . '/views/inc/footer.php'; ?>-->