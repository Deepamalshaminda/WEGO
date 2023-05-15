<?php require APPROOT . '/views/inc/header.php'; ?>

<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/assignchange.css">
<link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/dashboard.css">
<title><?php echo SITENAME; ?></title>
</head>

<body>

<?php require APPROOT . '/views/inc/sidebarnav.php' ;?>
    <div class="home-content">
      <br>
      
  <div class="as-card"> 
    <h2>Choose your driver from here...</h2>
    <br>
    <br>
    <form action="<?php echo URLROOT; ?>/rides/assignDrivers" method="post">
    <label for="vehicleid">Vehicle ID:</label>
    <input type="text" id="vehicleid" name="vehicleid" value="<?php echo $data['vehicle_id']; ?>">
<br>
<label for="vehicleno">Vehicle No:</label>
<input type="text" id="vehicleno" name="vehicleno" value="<?php echo $data['vehicle_no'];?>">
<br>
<label for="route">Route:</label>
<input type="text" id="route" name="route" value="<?php echo $data['route']; ?>">
<br>
<label for="driverid">Choose a Driver:</label>
<select id="driverid" name="driverid">
    <option value="select">-Select</option>
    
    <!--<?php foreach($data['drivers'] as $drivers): ?>-->
        <option value="<?php echo $drivers->us_id; ?>">Driver ID <?php echo $data['drivers']; ?></option>
   <!-- <?php endforeach; ?>-->
</select>

  <br>
  <br>
  <input type="submit" value="Submit">
  <input type="reset" value="Cancel">
 </form> 

</div>

</body>

<?php require APPROOT . '/views/inc/footer.php'; ?>
