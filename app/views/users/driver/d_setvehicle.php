<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/d_setvehicle.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/_base.css">
    <title>Document</title>
</head>
<body>
    <div class="col-12 page">
        <div class="full col-8">
            <div class="top col-12">
                <div class="col-5 topic">
                    <h2>Select your preference as a driver</h2>
                </div>
            </div>
            <div class="col-12">
                <div class="right-container col-6">
                    <!-- <a href="/Vehicles/addvehicle"> -->
                        <div id="own-vehicle" class="col-4 right clickable-div" value="own-vehicle">
                            <h3 class="content">
                                Register your own vehicle
                                
                            </h3>
                        </div>
                    <!-- </a> -->
                </div>
                <div class="left-container col-6">
                    <!-- <a href="#"> -->
                        <div id="find-vehicle" class="col-4 left clickable-div" value="find-vehicle">
                            <h3 class="content">
                                Find vehicle suppliers
                            </h3>
                        </div>
                    <!-- </a> -->
                </div>   
            </div>
        </div>
    </div>
    <script src="<?php echo URLROOT?>/public/js/d_setvehicle.js" defer></script>

</body>
</html>