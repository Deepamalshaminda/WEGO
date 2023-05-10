<?php error_reporting(0); ?>
<?php require APPROOT . '/views/inc/header.php'; ?>
<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title><?php echo SITENAME; ?></title>
</head>

<body>
    <form action="<?php echo URLROOT; ?>/users/login" method="post" class="form">
        <div class="form">
            <div class="leftside">
                <div class="img"><img src="../public/img/welcome.svg"></div>
                <p class="wego">WeGo</p>
            </div>
            <div class="rightside">
                <p class="topic">Log In</p>
                <!-- <div class="select">
            <select name="user-role" id="user-role">
                <option value="1">Driver</option>
                <option value="2">Vehicle Supplier</option>
                <option value="3">Parent</option>
                <option value="4">Office Worker</option>
                <option value="5">Admin</option>
            </select>
            </div> -->
                <div class="input-container">
                    <div class="input">
                        <i class="fa fa-user"></i>
                        <input type="email" placeholder="Email" name="email" class="control <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['email']; ?> ">
                        <br><span class="invalid-feedback"><?php echo $data['email_err']; ?></span>
                    </div>
                    <br>
                    <div class="input">
                        <i class="fa fa-lock"></i>
                        <input type="password" placeholder="Password" name="password" class="control <?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['password']; ?>">
                        <br><span class="invalid-feedback"><?php echo $data['password_err']; ?></span>
                    </div>
                    <br>
                    <input type="submit" class="login" value="LOGIN">
                    <!--<p>Or Login Using</p>
                <div class="social-items">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-google"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                </div>-->
                    <h6 class="signup"> Not registered yet? <a href="<?php echo URLROOT; ?>/users/register"><span> Sign Up</span></a></h6>
                </div>
            </div>
        </div>







</body>
<?php require APPROOT . '/views/inc/footer.php'; ?>