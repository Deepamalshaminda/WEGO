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
    
    
    <form>
  <label for="vehicleid">Vehicle ID:</label>
  <input type="vehicleid" id="vehicleid" name="vehicleid" value="002">
  <br>
  <label for="vehicleno">Vehicle No:</label>
  <input type="vehicleno" id="vehicleno" name="vehicleno" value="SW 5642">
  <br>
  <label for="route">Route:</label>
  <input type="route" id="route" name="route" value="Starting from Nugegoda Junction, Kirulapana,Thibirogasyaya and end from Thunmulla">
  <br>
  <label for="driverid">Choose a Driver:</label>
  <select id="driverid" name="driverid">
    <option value="select">-Select</option>
    <option value="driver1">Driver ID 003</option>
    <option value="driver2">Driver Id 008</option>
    <option value="driver3">Driver Id 012</option>
    <option value="driver4">Driver Id 023</option>
  </select>
  <br>
  <br>
  <input type="submit" value="Submit">
  <input type="reset" value="Cancel">
 </form> 

</div>

</body>




    <?php require APPROOT . '/views/inc/footer.php'; ?>