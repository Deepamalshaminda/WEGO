<?php require APPROOT . '/views/inc/header.php'; ?>

<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/admin_dashboard.css">
<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/vehicle_details.css">
  <title><?php echo SITENAME; ?></title>
</head>
<body>



<meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <?php require APPROOT . '/views/inc/admin_sidenavbar.php' ;?>
  
  <!-- <div class="container">
    <form>
<div class="row">
<div class="col">
<div class="input">
   <lable for="name" class="fields"> Added by : </lable>
   <input type = "text" name ="added by" id="addedby" />
</div>
<div class="input">
   <lable for="vehicleno" class="fields"> Vehicle Number : </lable>
   <input type = "text" name ="vehicleno" id="vehicleno" />
</div>
<div class="input">
   <lable for="type" class="fields"> Vehicle Type : </lable>
   <input type = "text" name ="type" id="type" />
</div>
<div class="input">
   <lable for="model" class="fields"> Vehicle Model : </lable>
   <input type = "text" name ="model" id="model" />
</div>
<div class="input">
   <lable for="year" class="fields"> Manufactured Year : </lable>
   <input type = "text" name ="year" id="year" />
</div>
</div>
<div class="col">
<div class="input">
   <lable for="engineno" class="fields"> Engine Number : </lable>
   <input type = "text" name ="engineno" id="engineno" />
</div>
<div class="input">
   <lable for="chassisno" class="fields"> Chassis Number : </lable>
   <input type = "text" name ="chassisno" id="chassisno" />
</div>
<div class="input">
   <lable for="seats" class="fields"> No of seats : </lable>
   <input type = "text" name ="seats" id="seats" />
</div>
<div class="input">
   <lable for="document" class="file"> Vehicle Book  </lable>
   <input type = "file" name ="document" id="document" />
</div>
<div class="input">
   <lable for="document" class="file"> Insurance Card  </lable>
   <input type = "file" name ="document" id="document" />
</div>
</div>
<div class="btn-wrapper">
                 <div class="data">
                    <button class="approve"> Approve </button>
                    <button class="deny"> Deny </button>
                 </div>
                 
            </div>
</div>
</div> -->

<div class="container">

<form action="">

    <div class="row">

        <div class="col">

            <h3 class="title"> Add Vehicle </h3>

            <div class="inputBox">
                <span>Added By :</span>
                <input type="text" >
            </div>
            <div class="inputBox">
                <span>Vehicle Number :</span>
                <input type="vehicleno">
            </div>
            <div class="inputBox">
                <span>Model :</span>
                <input type="text">
            </div>
            <div class="inputBox">
                <span>Color :</span>
                <input type="text">
            </div>
            <div class="inputBox">
                <span>Year :</span>
                <input type="text">
            </div>
            <div class="inputBox">
                <span>Vehicle Book :</span>
                <input type="image">
            </div>
            <div class="inputBox">
                <button class="approve"> Approve </button>
            </div>

            <!--<div class="flex">
                <div class="inputBox">
                    <span>state :</span>
                    <input type="text" placeholder="india">
                </div>
                <div class="inputBox">
                    <span>zip code :</span>
                    <input type="text" placeholder="123 456">
                </div>
            </div>-->

        </div>

        <div class="col">

            

            <div class="inputBox">
                <span>Address :</span>
                <input type="address">
            </div>
            <div class="inputBox">
                <span>Route :</span>
                <input type="text">
            </div>
            <div class="inputBox">
                <span>Usual journey start time :</span>
                <input type="time">
            </div>
            <div class="inputBox">
                <span>Seating capacity :</span>
                <input type="text">
            </div>
            <div class="inputBox">
                <span>AC/Non-AC :</span>
                <input type="text">
            </div>
            <div class="inputBox">
                <span>Insurance Card :</span>
                <input type="image">
            </div>
            <div class="inputBox">
                <button class="deny"> Deny </button>
               
            </div>

            

        </div>

    </div>
</form>

</div>

</section>  




<?php require APPROOT . '/views/inc/footer.php'; ?>