<?php require APPROOT . '/views/inc/header.php'; ?>

<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/dashboard.css">
<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/rides.css">
<link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
<script type="text/javascript" src="<?php echo URLROOT; ?>/js/list.js"></script>
<title><?php echo SITENAME; ?></title>
<html>
</head>


<body>

<?php require APPROOT . '/views/inc/sidebarnav.php' ;?>
 
 <div class="home-content">
 <h2>Choose your rider and view your rides</h2>
 <div class="list">
 <div class="card">
<a href="<?php echo URLROOT?>/rides/assignChangeDrivers">
  <div class="details">Assign Drivers for Rides</div>
</a> 
</div>
<div class="card">
<a href="<?php echo URLROOT?>/rides/viewRideInfo">    
  <div class="details">View Rides</div>
  
</div>
<div class="ride-image"><img src="../public/img/image1.svg"></div>

</div>







</body>




<!--<?php require APPROOT . '/views/inc/footer.php'; ?>-->




