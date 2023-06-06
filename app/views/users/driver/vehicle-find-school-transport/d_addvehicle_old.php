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
  <script src="https://unpkg.com/sweetalert@2/dist/sweetalert.min.js"></script>
  <title><?php echo SITENAME; ?></title>
</head>

<body>

  <!--<h1>--><?php //echo $_SESSION['user_id']
              ?><!--</h1>-->

  <?php require APPROOT . '/views/inc/d_sidenavbar-own-school.php'; ?>

  <main class="full-page">

    <div class="background-section col-12">

      <!-- <div class="back-btn-container">
        <button class="btn-back"><a href="<?php echo URLROOT; ?>/users/driver/addvehicle" class="btn btn-light">
            < Back</a></button>
      </div> -->

      <div class="form-wrapper col-12">
        <div class="title-container">Add vehicle</div>
        <p class="form-description">Enter your vehicle details here</p>

        <form action="<?php echo URLROOT; ?>/D_Own_School_Drivers/addvehicle" method="POST">

          <div class="row col-12">
            <div class="form-group col-4">
              <label for="vehicleno">Vehicle No<sup>*</sup> :</label><br>
              <input size="45" type="text" name="vehicleno" class="input-field controls <?php echo (!empty($data['vehicleno_err'])) ? 'is-invalid' : ''; ?>"
              value="<?php echo $data['vehicleno']; ?>" placeholder="Enter vehicle number">
              <span class="invalid-feedback"><?php echo $data['vehicleno_err']; ?></span>
            </div>

            <div class="form-group col-4">
              <label for="model">Model<sup>*</sup> :</label><br>
              <input size="45" type="text" name="model" class="input-field controls <?php echo (!empty($data['model_err'])) ? 'is-invalid' : ''; ?>"
              value="<?php echo $data['model']; ?>" placeholder="Enter vehicle model">
              <span class="invalid-feedback"><?php echo $data['model_err']; ?></span>
            </div>

            <div class="form-group col-4">
              <label for="year">Year<sup>*</sup> :</label><br>
              <input size="45" size="" type="text" name="year" class="input-field controls <?php echo (!empty($data['year_err'])) ? 'is-invalid' : ''; ?>"
              value="<?php echo $data['year']; ?>" placeholder="Enter registered year of the vehicle">
              <span class="invalid-feedback"><?php echo $data['year_err']; ?></span>
            </div>

            <div class="form-group col-4">
              <label for="color">Color<sup>*</sup> :</label><br>
              <input size="45" type="color" name="color" class="input-field controls <?php echo (!empty($data['color_err'])) ? 'is-invalid' : ''; ?>"
              value="<?php echo $data['color']; ?>">
              <span class="invalid-feedback"><?php echo $data['color_err']; ?></span>
            </div>

            <div class="form-group col-4">
              <label for="Ac">AC/Non-AC<sup>*</sup> :</label><br>
              <select name="Ac" class="input-field controls <?php echo (!empty($data['Ac_err'])) ? 'is-invalid' : ''; ?>">
                <option value="">Select AC/Non-AC</option>
                <option value="AC" <?php if ($data['Ac'] == 'AC') echo 'selected'; ?>>AC</option>
                <option value="Non-AC" <?php if ($data['Ac'] == 'Non-AC') echo 'selected'; ?>>Non-AC</option>
              </select>
              <span class="invalid-feedback"><?php echo $data['Ac_err']; ?></span>
            </div>

            <div class="form-group col-4">
              <label for="expirylicence">Expiry date of licence: <sup>*</sup></label><br>
              <input size="45" type="date" name="expirylicence" size="30" placeholder="Enter licence expiry date" class="input-field controls <?php echo (!empty($data['expirylicence_err'])) ? 'is-invalid' : ''; ?>"
              value="<?php echo $data['expirylicence']; ?>">
              <span class="invalid-feedback"><?php echo $data['expirylicence_err']; ?></span>
            </div>

            <div class="form-group col-4">
              <label for="service_type">Service Type of the Vehicle<sup>*</sup> :</label><br>
              <select name="service_type" class="input-field controls <?php echo (!empty($data['service_type_err'])) ? 'is-invalid' : ''; ?>">
                <option value="">Select Service Type</option>
                <option value="School Service" <?php if ($data['service_type'] == 'School Service') echo 'selected'; ?>>School Service</option>
                <option value="Office Transport" <?php if ($data['service_type'] == 'Office Transport') echo 'selected'; ?>>Office Transport</option>
              </select>
              <span class="invalid-feedback"><?php echo $data['service_type_err']; ?></span>
            </div>

            <div class="form-group col-4">
              <label for="charge_for_a_km">Charge for a Km<sup>*</sup> :</label><br>
              <input size="45" type="text" name="charge_for_a_km" class="input-field controls <?php echo (!empty($data['charge_for_a_km_err'])) ? 'is-invalid' : ''; ?>"
              value="<?php echo $data['charge_for_a_km']; ?>" placeholder="Enter the charge for a km">
              <span class="invalid-feedback"><?php echo $data['charge_for_a_km_err']; ?></span>
            </div>

            <div class="form-group col-4">
              <label for="seatingcapacity">Seating capacity<sup>*</sup> :</label><br>
              <input size="45" type="text" name="seatingcapacity" class="input-field controls <?php echo (!empty($data['seatingcapacity_err'])) ? 'is-invalid' : ''; ?>"
              value="<?php echo $data['seatingcapacity']; ?>" placeholder="Enter the seating capacity of the vehicle">
              <span class="invalid-feedback"><?php echo $data['seatingcapacity_err']; ?></span>
            </div>

            <div class="form-group col-12">
              <label for="address">Address<sup>*</sup> :</label><br>
              <input size="165" type="text" name="address" class="input-field controls <?php echo (!empty($data['address_err'])) ? 'is-invalid' : ''; ?>"
              value="<?php echo $data['address']; ?>" placeholder="Enter the address">
              <span class="invalid-feedback"><?php echo $data['address_err']; ?></span>
            </div>

            <div class="form-group col-9">
              <label for="route">Route<sup>*</sup> :</label><br>
              <input size="120" type="text" name="route" class="input-field controls <?php echo (!empty($data['route_err'])) ? 'is-invalid' : ''; ?>"
              value="<?php echo $data['route']; ?>" placeholder="Enter the route of the vehicle">
              <span class="invalid-feedback"><?php echo $data['route_err']; ?></span>
            </div>

            <div class="form-group col-3">
              <label for="starttime">Usual journey start time<sup>*</sup> :</label><br>
              <input size="45" type="time" name="starttime" class="input-field controls <?php echo (!empty($data['starttime_err'])) ? 'is-invalid' : ''; ?>"
              value="<?php echo $data['starttime']; ?>" placeholder="Enter the starting time of the journey">
              <span class="invalid-feedback"><?php echo $data['starttime_err']; ?></span>
            </div>

            <div class="form-group col-12">
              <label for="comments">Special conditions<sup>*</sup> :</label><br>
              <input size="165" type="text" name="comments" class="input-field controls <?php echo (!empty($data['comments_err'])) ? 'is-invalid' : ''; ?>"
              value="<?php echo $data['comments']; ?>" placeholder="Mention any special condition">
              <span class="invalid-feedback"><?php echo $data['comments_err']; ?></span>
            </div>

            <div class="form-group col-12">
              <label for="vehicle_image">Image of vehicle <sup>*</sup>
              - Rename the image with the vehicle number ( ex:- AB 1234)</label><br>
              <input type="file" name="vehicle_image" class="input-field controls <?php echo (!empty($data['vehicle_image_err'])) ? 'is-invalid' : ''; ?>"
              value="<?php echo $data['vehicle_image']; ?>">
              <span class="invalid-feedback"><?php echo $data['vehicle_image_err']; ?></span>
            </div>

            <div class="form-group col-12">
              <label for="vehicle_document">Upload documents of the vehicle (ZIP format only)<sup>*</sup>
               - Please upload a zip file including the below documents and rename it with your vehicle number<br>
               1. Driver Licence<br> 
               2. Letter of handingover the vehicle <br>
               3. Vehicle Insuarance Document</label>
              <br>
              <input type="file" name="vehicle_document" class="input-field controls <?php echo (!empty($data['vehicle_document_err'])) ? 'is-invalid' : ''; ?>" accept=".zip">
              <span class="invalid-feedback"><?php echo $data['vehicle_document_err']; ?></span>
            </div>

            <div class="btn-container col-12">
              <input type="submit" class="btn-submit" value="Submit">
              <br>
              <form action="<?php echo URLROOT ?>/users/supplier/addvehicle" method="get">
                <button type="reset" class="btn-cancel">Cancel</button>
              </form>
            </div>
        </form>
      </div>
    </div>
  </main>

  <?php require APPROOT . '/views/inc/footer.php'; ?>