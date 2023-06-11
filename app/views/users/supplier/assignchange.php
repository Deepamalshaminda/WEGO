<?php require APPROOT . '/views/inc/header.php'; ?>

<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/dashboard.css">
<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/assigndr.css">
<link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

<title><?php echo SITENAME; ?></title>

<html>
</head>

<body>

<?php require APPROOT . '/views/inc/sidebarnav.php'; ?>
     
<div class="home-content">
  <br>
  <h2>Assign or Change Drivers</h2>
  <br>
  <?php if (!empty($data['vehicles'])): ?>
    <?php foreach ($data['vehicles'] as $vehicle): ?>
      <div class="card">
        <div class="card-body">
          <img src="<?php echo URLROOT; ?>/vehicle_image/<?php echo $vehicle->vehicle_image ?>" alt="<?php echo $vehicle->vehicleno; ?>" class="card-img">
          <h5 class="card-text">Vehicle ID: <?php echo $vehicle->ve_id; ?></h5>
          <h5 class="card-title">Vehicle Number: <?php echo $vehicle->vehicleno; ?></h5>
          <?php if ($vehicle->driver_id): ?>
              <p>Assigned Driver: <?php echo $vehicle->driver_id; ?></p>
          <?php else: ?>
              <p>No assigned driver.</p>
          <?php endif; ?>
          <a href="<?php echo URLROOT?>/rides/assignDrivers/<?php echo $vehicle->ve_id; ?>">
            <button type="button" class="btn btn-primary assign-btn">Assign</button>
          </a>
          <a href="<?php echo URLROOT?>/rides/changeDrivers">
            <button type="button" class="btn btn-secondary change-btn">Change</button>
          </a>
        </div>
      </div>
    <?php endforeach; ?>
  <?php else: ?>
    <p>No vehicles found.</p>
  <?php endif; ?>
</div>

<script>
  function assignDriver($vehicle_id) {
    console.log($vehicle_id)
    var path = document.querySelector('.assign-btn').value;
    if (path === 'assign') {
      window.location.href = "http://localhost/projectwego/rides/assignDrivers/" + $vehicle_id;
      if(response.status == 200){
        console.log("Successful");
      }
    }
  }
</script>

<?php require APPROOT . '/views/inc/footer.php'; ?>
