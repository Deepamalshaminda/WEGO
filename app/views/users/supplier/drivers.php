<?php require APPROOT . '/views/inc/header.php'; ?>

<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/dashboard.css">
<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/rides.css">
<script type="text/javascript" src="<?php echo URLROOT; ?>/js/list.js"></script>
<link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
<title><?php echo SITENAME; ?></title>
<html>
</head>


<body>


<?php require APPROOT . '/views/inc/sidebarnav.php' ;?>
 
 <div class="home-content">
 <h2>Drivers</h2>
 <div class="list">
 <div class="d-card">
  <a href="<?php echo URLROOT?>/driver/viewDriverRequest">   
  <div class="details">Driver Requests</div>
  </a>
</div>

<div class="d-card">
<a href="<?php echo URLROOT?>/driver/viewDriverSuggestions">      
  <div class="details">Driver Suggestions</div>
</a> 
</div>


<div class="d-card">
<a href="<?php echo URLROOT?>/driver/viewMyDrivers">   
    <div class="details">My Drivers</div>
</a>  
</div>

<div class="container">
    <img class="driver-image" src="../public/img/image2.png" >
  </div>
  

</div>












</div>