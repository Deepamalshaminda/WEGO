<?php require APPROOT . '/views/inc/header.php'; ?>

<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/addvehicle.css">
<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/dashboard.css">
<title><?php echo SITENAME; ?></title>
</head>

<body>


<div class="sidebar">
    <div class="logo-details">
      <div class='bx bxl-c-plus-plus'></div>
      <span class="logo_name">&nbsp; WeGo</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="#" class="active">
            <div class='bx bx-grid-alt' ></div>
            <span class="links_name">&nbsp; Dashboard</span>
          </a>
        </li>
        <li>
          <a href="#">
            <div class='bx bx-box' ></div>
            <span class="links_name">&nbsp; Parents</span>
          </a>
        </li>
        <li>
          <a href="#">
            <div class='bx bx-list-ul' ></div>
            <span class="links_name">&nbsp; Office Workers</span>
          </a>
        </li>
        <li>
          <a href="#">
            <div class='bx bx-pie-chart-alt-2' ></div>
            <span class="links_name">&nbsp; Rides</span>
          </a>
        </li>
        <li>
          <a href="#">
            <div class='bx bx-coin-stack' ></div>
            <span class="links_name">&nbsp; Drivers</span>
          </a>
        </li>
        <li>
          <a href="#">
            <div class='bx bx-book-alt' ></div>
            <span class="links_name">&nbsp; Earnings</span>
          </a>
        </li>
        <li>
          <a href="#">
            <div class='bx bx-user' ></div>
            <span class="links_name">&nbsp; Salaries</span>
          </a>
        </li>
        <li>
          <a href="#">
            <div class='bx bx-user' ></div>
            <span class="links_name">&nbsp; Reports</span>
          </a>
        </li>
        <li>
          <a href="#">
            <div class='bx bx-user' ></div>
            <span class="links_name">&nbsp; Vehicle Documents</span>
          </a>
        </li>
        <li>
          <a href="#">
            <div class='bx bx-user' ></div>
            <span class="links_name">&nbsp; Vehicle Maintenance</span>
          </a>
        </li>
        <li>
          <a href="#">
            <div class='bx bx-user' ></div>
            <span class="links_name">&nbsp; Driver Attendace</span>
          </a>
        </li>
        <li>
          <a href="#">
            <div class='bx bx-user' ></div>
            <span class="links_name">&nbsp; Vehicle Status</span>
          </a>
        </li>
        
        
        <!--<li class="log_out">
          <a href="#">
            <div class='bx bx-log-out'></div>
            <span class="links_name">&nbsp; Log out</span>
          </a>
        </li>-->
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <div class='bx bx-menu sidebarBtn'></div>
        
      </div>
      <div class="search-box">
        <input type="text" placeholder="Search...">
        <div class='bx bx-search' ></div>
      </div>
      <div class="profile-details">
        <!-- //<img src="../public/img/images.png" alt=""> -->
        <span class="admin_name">Adam Fernando</span>
        <div class='bx bx-chevron-down' ></div>
      </div>
    </nav>
     
    <div class="home-content">
  <div class="card"> 
    <h1>Add your vehicle here.....</h1>
    <form action="<?php echo URLROOT; ?>/vehicles/addvehicle" method="post">
    <div class="form-group">
    
                <label for="vehicleno">Vehicle No &nbsp; : <sup>*</sup></label>
                <input type="vehicleno" name="vehicleno" class="controls <?php echo (!empty($data['vehicleno_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['vehicleno']; ?>">
                <span class="invalid-feedback"><?php echo $data['vehicleno_err']; ?></span>
            </div><br>

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


            <div class="row">
                <div class="col">
                    <input type="submit" value="Save" name="addVehicle" class="btn1">
                    <input type="reset" value="Cancel" class="btn2">
                </div>
            </div>
        </div>
    </form>
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
        <a href="<?php echo URLROOT?>/users/supplier/addvehicle"><button class="more"  >Add another vehicle (+)</button></a><br>
        

    </div> 
</div>

</div>
</body>




    <?php require APPROOT . '/views/inc/footer.php'; ?>