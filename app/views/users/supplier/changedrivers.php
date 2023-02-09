<?php require APPROOT . '/views/inc/header.php'; ?>

<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/assignchange.css">
<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/dashboard.css">
<title><?php echo SITENAME; ?></title>
</head>

<body>


<?php require APPROOT . '/views/inc/sidebarnav.php' ;?>
    <div class="home-content">
  <div class="card"> 
    <h1>Add your vehicle here.....</h1>
    <form action="<?php echo URLROOT; ?>/rides/changeDrivers" method="post">
    
    
    <form>
  <label for="vehicleid">Vehicle ID:</label>
  <input type="vehicleid" id="vehicleid" name="vehicleid" value="002">

  <label for="vehicleno">Vehicle No:</label>
  <input type="vehicleno" id="vehicleno" name="vehicleno" value="SW 5642">

  <label for="route">Route:</label>
  <input type="route" id="route" name="route" value="Starting from Nugegoda Junction, Kirulapana,">

  <label for="driverid">Choose a Driver:</label>
  <select id="driverid" name="driverid">
    <option value="driver1">Driver ID 003</option>
    <option value="driver2">Driver Id 008</option>
    <option value="driver3">Driver Id 012</option>
    <option value="driver4">Driver Id 023</option>
  </select>

  <input type="submit" value="Submit">
  <input type="reset" value="Cancel">
</form> 
