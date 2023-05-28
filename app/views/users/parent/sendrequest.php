<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title><?php echo SITENAME; ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/dashboard.css">
  <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/p_prequest.css">
   <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/_base.css">
  <link rel="stylesheet" href="<?php echo URLROOT; ?>/js/list.js">
</head>

<body>
  <?php require APPROOT . '/views/inc/header.php'; ?>
  <?php require APPROOT . '/views/inc/sidenavbar.php'; ?>
  <div class="home-content">
    <button class="tablink" onclick="openPage('sendrequests')" id="defaultOpen">Choose your preferred vehicle here..</button>
    <!--<button class="tablink" onclick="openPage('PAccepted')">Sent Requests</button>-->
    <div id="Parentrequests" class="tabcontent">
      <div class="friend-list">
        <?php if (!empty($data['vehicles'])): ?>
          <?php foreach ($data['vehicles'] as $vehicle): ?>
            <div class="friend-card">
            <div class="friend-name"><img src="../public/vehicle_image/<?php echo $vehicle->vehicle_image; ?>" class="friend-picture" ><?php echo $vehicle->vehicleno ?></div> 
              <div class="friend-name1" >Service type : <?php echo $vehicle->service_type; ?></div>
              <div class="friend-name1" >Route : <?php echo $vehicle->route; ?></div>
              <div class="friend-name1" >Start time : <?php echo $vehicle->starttime; ?></div>
              
              <button class="request-button"><a href="<?php echo URLROOT?>/Sendrequests/getVehicleById/<?php echo $vehicle->ve_id;?>"> View details</a></button>
              
            </div>
          <?php endforeach; ?>
        <?php else: ?>
          <p>No vehicles found.</p>
        <?php endif; ?>
      </div>
    </div>
  </div>
  <?php require APPROOT . '/views/inc/footer.php'; ?>
</body>
</html>
