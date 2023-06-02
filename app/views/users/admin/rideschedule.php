<?php require APPROOT . '/views/inc/header.php'; ?>


<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/admin_dashboard.css">
<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/vehicle.css">
<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/completed.css">
<script type="text/javascript" src="<?php echo URLROOT; ?>/js/tab.js"></script>
<title><?php echo SITENAME; ?></title>
<html>
</head>




<body>

<?php require APPROOT . '/views/inc/admin_sidenavbar.php' ;?>
     
    <div class="home-content">
    <div class="tab">
        <button class="tablink" onclick="openPage('ongoing')" id="defaultOpen" > Rides</button>
        
    </div>   
   
        <div id="ongoing" class="tabcontent">
        <div class="friend-list">
        <?php if (!empty($data)) :?> 
        <?php foreach($data['rides'] as $trip_information): ?>
    <div class="friend-card">
      
      <div class="friend-name"><img src="../public/vehicle_image/<?php echo $trip_information->vehicle_image; ?>." class="friend-picture" > Start : <?php echo $trip_information->start; ?></div>
      
      <br>
      <br>
      <div class="friend-actions">
        <button class="accept-button"><a href="<?php echo URLROOT?>/Admin/viewride/<?php echo $trip_information->trip_id; ?>"> View </a></button>
      </div>
    </div>
    <?php endforeach; ?>
    <?php endif ;?>
    
  </div>
  
  
</div>
               
            </div>
        </div>
              

