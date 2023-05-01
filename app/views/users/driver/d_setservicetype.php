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
        <div class="col-12 top-navbar">
            <div class="col-9">
                <div class="col-2 logo">
                <img src="<?php echo URLROOT?>/img/wego_logo.png" class="wego-logo" alt="wego-logo">
                </div>
            </div>
            <div class="col-1 headings">
                <h4><a class="top-link" href="<?php echo URLROOT?>/users/index">HOME</a></h4>
            </div>
            <div class="col-1 headings">
                <h4><a class="top-link" href="<?php echo URLROOT?>/pages/contactUs">CONTACT</a></h4>
            </div>
            <div class="col-1 headings">
                <h4><a class="top-link" href="<?php echo URLROOT?>/users/register">SIGNUP</a></h4>
            </div>
        </div>
    <div class="col-12 page">
        
        <div class="full col-8">
            <div class="top col-12">
                <div class="col-5 topic">
                    <h2>Hi <?php echo $data['name']?>Select your prefered serivce type as a driver</h2>
                </div>
            </div>
            <div class="col-12">
                <div class="right-container col-6">
                    <!-- <a href="/Vehicles/addvehicle"> -->
                        <div id="own-vehicle" class="col-4 right clickable-div" value="school-service">
                            <h3 class="content">
                                School Service
                                
                            </h3>
                        </div>
                    <!-- </a> -->
                </div>
                <div class="left-container col-6">
                    <!-- <a href="#"> -->
                        <div id="find-vehicle" class="col-4 left clickable-div" value="office-service">
                            <h3 class="content">
                                Office Transport
                            </h3>
                        </div>
                    <!-- </a> -->
                </div>   
            </div>
        </div>
    </div>
    <script src="<?php echo URLROOT?>/public/js/driver/d_setservicetype.js" defer></script>

</body>
</html>