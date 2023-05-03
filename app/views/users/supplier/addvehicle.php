<?php require APPROOT . '/views/inc/header.php'; ?>

<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/addvehicle.css">
<link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/dashboard.css">
<title><?php echo SITENAME; ?></title>
</head>

<body>

<?php require APPROOT . '/views/inc/sidebarnav.php' ;?>
    <div class="home-content">
        <br>
        <br>
  <div class="add-card"> 
    <h1>Add your vehicle here...</h1>
    <br>
    <div class="add-form">
    <form action="<?php echo URLROOT; ?>/vehicles/addvehicle" method="post">
    <div class="form-group">
    
                <label for="vehicleno">Vehicle No &nbsp; : <sup>*</sup></label>
                <input type="vehicleno" name="vehicleno" class="controls <?php echo (!empty($data['vehicleno_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['vehicleno']; ?>">
                <span class="invalid-feedback"><?php echo $data['vehicleno_err']; ?></span>
            </div>

            <!--<div class="form-group">
                <label for="chassino">Chassi No &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : <sup>*</sup></label>
                <input type="chassino" name="chassino" class="controls <?php echo (!empty($data['chassino_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['chassino']; ?>">
                <span class="invalid-feedback"><?php echo $data['chassino_err']; ?></span>
            </div><br>-->

            <div class="form-group">
                <label for="model">Model &nbsp; &nbsp; : <sup>*</sup></label>
                <input type="model" name="model" class="controls <?php echo (!empty($data['model_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['model']; ?>">
                <span class="invalid-feedback"><?php echo $data['model_err']; ?></span>
            </div><br>

            <div class="form-group">
                <label for="color">Color  : <sup>*</sup></label>
                <input type="color" name="color" class="controls <?php echo (!empty($data['color_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['color']; ?>">
                <span class="invalid-feedback"><?php echo $data['color_err']; ?></span>
            </div>

            <div class="form-group">
                <label for="year">Year  : <sup>*</sup></label>
                <input type="year" name="year" class="controls <?php echo (!empty($data['year_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['year']; ?>">
                <span class="invalid-feedback"><?php echo $data['year_err']; ?></span>
            </div>

            <div class="form-group">
                <label for="address">Address : <sup>*</sup></label>
                <input type="address" name="address" class="controls <?php echo (!empty($data['address_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['address']; ?>">
                <span class="invalid-feedback"><?php echo $data['address_err']; ?></span>
            </div>

            <div class="form-group">
                <label for="route">Route : <sup>*</sup></label>
                <input type="route" name="route" class="controls <?php echo (!empty($data['route_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['route']; ?>">
                <span class="invalid-feedback"><?php echo $data['route_err']; ?></span>
            </div>

            <div class="form-group">
                <label for="starttime">Usual journey start time : <sup>*</sup></label>
                <input type="starttime" name="starttime" class="controls <?php echo (!empty($data['starttime_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['starttime']; ?>">
                <span class="invalid-feedback"><?php echo $data['starttime_err']; ?></span>
            </div>

            <div class="form-group">
                <label for="seatingcapacity">Seating capacity: <sup>*</sup></label>
                <input type="seatingcapacity" name="seatingcapacity" class="controls <?php echo (!empty($data['seatingcapacity_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['seatingcapacity']; ?>">
                <span class="invalid-feedback"><?php echo $data['seatingcapacity_err']; ?></span>
            </div>

            <div class="form-group">
                <label for="Ac">AC/Non-AC : <sup>*</sup></label>
                <input type="Ac" name="Ac" class="controls <?php echo (!empty($data['Ac_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['Ac']; ?>">
                <span class="invalid-feedback"><?php echo $data['Ac_err']; ?></span>
            </div>

            <div class="form-group">
                <label for="expirylicence">Expiry date of licence: <sup>*</sup></label>
                <input type="date" name="expirylicence" size="30" placeholder="Enter licence expiry date"
                 class="controls <?php echo (!empty($data['expirylicence_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['expirylicence']; ?>">
                <span class="invalid-feedback"><?php echo $data['expirylicence_err']; ?></span>
            </div>

            <div class="form-group">
                <label for="comments">Special conditions<sup>*</sup></label>
                <input type="comments" name="comments" class="controls <?php echo (!empty($data['comments_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['comments']; ?>">
                <span class="invalid-feedback"><?php echo $data['comments_err']; ?></span>
            </div>
            
            <div class="form-group">
                <label for="vehicle_image">Image of vehicle<sup>*</sup></label>
                <input type="file" name="vehicle_image" class="controls <?php echo (!empty($data['vehicle_image_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['vehicle_image']; ?>">
                <span class="invalid-feedback"><?php echo $data['vehicle_image_err']; ?></span>
            </div>

            
            <div class="form-group">
                <label for="vehicle_document">Upload documents of the vehicle<sup>*</sup></label>
                <input type="file" name="vehicle_document" class="controls <?php echo (!empty($data['vehicle_document_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['vehicle_document']; ?>">
                <span class="invalid-feedback"><?php echo $data['vehicle_document_err']; ?></span>
            </div>
           


            <div class="row">
                <div class="col">
                    <input type="submit" value="Save" name="addVehicle" class="btn1">
                    <br>
                    <input type="reset" value="Cancel" class="btn2">
                </div>
            </div>
        </div>
    </form>
  </div>
  </div>
    <!-- <div class="box-right">
        <div class="upload">
            <img src="../public/img/upimage.jpg"><br>
            <label class="button" for="upload-btn">Upload a vehicle image here</label>
            <input type="file" id="upload-btn" hidden />
        </div>
        <br>
        <div class="upload">
            <img src="../public/img/upimage.jpg"><br>
            <label class="button" for="upload-btn">Upload documents here</label>
            <input type="file" id="upload-btn" hidden />
        </div>-->
        <br>
        <br>
</div>
        <br>
        <br><br>
        <!--<a href="<?php echo URLROOT?>/users/supplier/addvehicle"><button class="more"  >Add another vehicle (+)</button></a><br>-->
        

    </div> 
</div>

</div>
</body>




    <?php require APPROOT . '/views/inc/footer.php'; ?>