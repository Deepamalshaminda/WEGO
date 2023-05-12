<?php require APPROOT . '/views/inc/header.php'; ?>

<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/dashboard.css">
<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/prequest.css">
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
  <div id="vehicle-cards">
    <?php if(!empty($vehicles)): ?>
      <?php foreach ($vehicles as $vehicle): ?>
        <div class="card">
        <img src="<?php echo URLROOT . '/public/vehicle_image/' . $vehicle->vehicle_image; ?>" alt="Vehicle Image">

          <div class="card-content">
            <h2><?php echo $vehicle->vehicleno; ?></h2>
            <p>Vehicle ID: <?php echo $vehicle->ve_id; ?></p>
            <div class="card-buttons">
              <form action="assign-driver.php" method="POST">
                <input type="hidden" name="vehicle_id" value="<?php echo $vehicle->ve_id; ?>">
                <button type="submit">Assign Driver</button>
              </form>
              <form action="change-driver.php" method="POST">
                <input type="hidden" name="vehicle_id" value="<?php echo $vehicle->ve_id; ?>">
                <button type="submit">Change Driver</button>
              </form>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    <?php else: ?>
      <p>No vehicles found.</p>
    <?php endif; ?>
  </div>
</div>
