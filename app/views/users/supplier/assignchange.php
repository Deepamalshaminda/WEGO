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
    <a href="<?php echo URLROOT?>/rides/assignDrivers/<?php echo $vehicle->ve_id; ?>"> <button type="button" class="btn btn-primary assign-btn" value="assign" onclick="assignDriver(<?php echo $vehicle->ve_id; ?>)">Assign</button></a>
    <a href="<?php echo URLROOT?>/rides/changeDrivers"><button type="button" class="btn btn-secondary change-btn" >Change</button></a>
    <a href="<?php echo URLROOT?>/rides/viewVehicleDetails/<?php echo $vehicle->ve_id; ?>"> <button type="button" class="btn btn-primary assign-btn" value="view" onclick="viewVehicleDetail(<?php echo $vehicle->ve_id; ?>)">View Vehicle Details</button></a>
</div>

      </div>
    <?php endforeach; ?>
  <?php else: ?>
    <p>No vehicles found.</p>
  <?php endif; ?>
</div>
<!-- onclick="assignDriver(${user.user_id})" -->

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

<script>
  function viewVehicleDetail($vehicle_id) {
  console.log($vehicle_id)
  var path = document.querySelector('.view-btn').value;
  if (path === 'view') {
    window.location.href = "http://localhost/projectwego/rides/viewVehicleDetails/" + $vehicle_id;
    if(response.status == 200){
      console.log("Successful");
    }
  }
}
</script>

<!-- <?php echo $vehicle->vehicleno; ?> -->