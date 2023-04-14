<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/d_sidenavbar.css">
  <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/d_addvehicle.css">
  <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/_base.css">
  <title><?php echo SITENAME; ?></title>
</head>
<body>

<!--<h1>--><?php //echo $_SESSION['user_id']?><!--</h1>-->

<?php require APPROOT . '/views/inc/d_sidenavbar.php'; ?>

<main class="full-page">

<div class="background-section col-12">

<div class="back-btn-container">
  <button class="btn-back"><a href="<?php echo URLROOT; ?>/users/driver/addvehicle" class="btn btn-light">< Back</a></button>
</div>

<div class="form-wrapper col-12">
    <h1 class="title-container">Add vehicle</h1>
    <p class="form-description">Enter your vehicle details here</p>

    <form action="<?php echo URLROOT; ?>/D_Vehicles/addVehicle" method="POST">

      <div class="row col-12">
      <div class="form-group col-6 vehicleNo-input">
        <label for="vehiclenumber" class="form-label">Vehicle Number: <sup>*</sup></label><br>
        <input type="text" name="vehiclenumber" placeholder="Enter Vehicle Number" class="input-field form-control col-12">
         <!-- <span class="invalid-feedback"><?php echo $data['vehiclenumber_err']; ?></span> -->
      </div>

      <div class="form-group col-6 vehicleType-input">
        <label for="vehicletype">Vehicle Type: <sup>*</sup></label><br>
        <input type="text" name="vehicletype" placeholder="Enter Vehicle Type" class="input-field form-control col-12"></input>
        <!-- <span class="invalid-feedback"><?php echo $data['vehicletype_err']; ?></span> -->
      </div>
      </div>
    
      <div class="form-group col-12">
        <label for="route">Route: <sup>*</sup></label> <br>
        <textarea name="route" placeholder="You must enter here location names for each theree kilometer" class="input-field form-control col-12" cols="52" rows="3"></textarea>
        <!-- <span class="invalid-feedback"><?php echo $data['route_err']; ?></span> -->
      </div>

      <div class="form-group col-12">
        <label for="fuelefficiency">Fuel Efficiency: <sup>*</sup></label> <br>
        <textarea name="route" placeholder="Mention average fuel efficiency of your vehicle as your experience" class="input-field form-control col-12" cols="52" rows="3"></textarea>
        <!-- <span class="invalid-feedback"><?php echo $data['fuelefficiency_err']; ?></span> -->
      </div>

        <div class="btn-container col-12">
            <input type="submit" class="btn-submit" value="Submit">
        </div>
    </form>
  </div>
</div>
</main>

<?php require APPROOT . '/views/inc/footer.php'; ?>