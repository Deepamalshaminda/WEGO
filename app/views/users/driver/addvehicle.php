<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <link rel="stylesheet" href="--><?php echo URLROOT; ?>/css/style.css">
  <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/main.css">
  <title><?php echo SITENAME; ?></title>
</head>
<body>

<!--<h1>--><?php //echo $_SESSION['user_id']?><!--</h1>-->
    <main class="full-page">

    <div class="form-wrapper">
        <a href="<?php echo URLROOT; ?>/users/driver/addvehicle" class="btn btn-light"><- Back</a>
    <h1 class="title-container">Add vehicle</h1>
    <p class="form-description">Enter your vehicle details here</p>
    <form action="<?php echo URLROOT; ?>/Vehicles/addVehicle" method="POST">
      <div class="form-group">
        <label for="vehiclenumber">Vehicle Number: <sup>*</sup></label><br>
        <input type="text" name="vehiclenumber" placeholder="Enter Vehicle Number" class="input-field form-control" size="41">
         <span class="invalid-feedback"><?php echo $data['vehiclenumber_err']; ?></span>
      </div>
      <div class="form-group">
        <label for="vehicletype">Vehicle Type: <sup>*</sup></label><br>
        <textarea name="vehicletype" placeholder="Enter Vehicle Type" class="input-field form-control" cols="40" rows="3"></textarea>
        <span class="invalid-feedback"><?php echo $data['vehicletype_err']; ?></span>
      </div>
      <div class="form-group">
        <label for="initiallocation">Initial Location: <sup>*</sup></label><br>
        <textarea name="initiallocation" placeholder="Enter Initial Location" class="input-field form-control" cols="40" rows="3"></textarea>
        <span class="invalid-feedback"><?php echo $data['initiallocation_err']; ?></span>
      </div>
      <div class="form-group">
        <label for="route">Route: <sup>*</sup></label> <br>
        <textarea name="route" placeholder="Enter the route" class="input-field form-control" cols="40" rows="3"></textarea>
        <span class="invalid-feedback"><?php echo $data['route_err']; ?></span>
      </div>
        <div class="btn-container">
            <input type="submit" class="btn-submit" value="Submit">
        </div>

    </form>

  </div>
    </main>
<?php require APPROOT . '/views/inc/footer.php'; ?>