<!DOCTYPE html>
<html lang="en">
<head>
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/_base.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/d_index.css">
    <title><?php echo SITENAME; ?></title>
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
    <div class="col-12 bottom">
        <div class="col-12 ow-pr">
            <div class="col-3 card">
                <p><strong class="strong">WEGO</strong> is a web app that simplifies transport management for both 
                offices and schools. Our platform connects users with trusted drivers, providing a hassle-free way 
                to find reliable and safe transportation for your employees or children. Whether you're a driver 
                looking for work or a business in need of transportation services, Wego makes it easy to find and 
                book the right option for you. Join our community today and experience stress-free transport management 
                like never before!<?php echo $GLOBALS ?></p>
            </div>
        </div> 
    </div>
    <div class="col-12 bottom-2">
        <div class="col-12">
            <div class="col-4 out-login-container">
                <div class="col-6 login-container">
                    <h3 class="add-margin">Are you already registered?</h3>
                    <div class="btn-container col-12">
                        <div class="btn-submit"><a href="<?php echo URLROOT?>/users/login">Click Here to Login</a></div>
                    </div>
                </div>
            </div>
            <div class="col-4 out-login-container">
                <div class="col-8 login-container-explore-vehicle">
                    <h3 class="add-margin-explore-vehicle">explore Our Vehicle Gallery without Login !!</h3>
                    <div class="btn-container col-12">
                        <div class="btn-submit"><a href="<?php echo URLROOT?>/users/login">Explore</a></div>
                    </div>
                </div>
            </div>
            <div class="col-4 out-login-container">
                <div class="col-6 login-container">
                <h3 class="add-margin">New user?</h3>
                    <div class="btn-container col-12">
                        <div class="btn-submit"><a href="<?php echo URLROOT?>/users/register">Sign Up Here</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>