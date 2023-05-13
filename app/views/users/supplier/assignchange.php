<?php require APPROOT . '/views/inc/header.php'; ?>

<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/dashboard.css">
<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/assigndr.css">
<link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
<!--<script type="text/javascript" src="<?php echo URLROOT; ?>/js/list.js"></script>-->
<title><?php echo SITENAME; ?></title>
<html>
</head>

<body>

<?php require APPROOT . '/views/inc/sidebarnav.php' ;?>
     
<div class="home-content">
  <h2>Assign or Change Drivers</h2>
  <br>
  <?php foreach ($vehicles as $vehicle): ?>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title"><?php echo $vehicle['vehicleno']; ?></h5>
      <p class="card-text"><?php echo $vehicle['ve_id']; ?></p>
      <button type="button" class="btn btn-primary assign-btn" data-vehicle-id="<?php echo $vehicle['ve_id']; ?>">Assign</button>
      <button type="button" class="btn btn-secondary change-btn" data-vehicle-id="<?php echo $vehicle['ve_id']; ?>">Change</button>
    </div>
  </div>
  <?php endforeach; ?>
</div>


