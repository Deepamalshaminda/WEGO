<?php error_reporting(0); ?>
<?php require APPROOT . '/views/inc/header.php'; ?>
<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/style.css">
<title><?php echo SITENAME; ?></title>
</head>

<body>
  




  <form action="<?php echo URLROOT; ?>/users/login" method="post" class="form">
  <h1>Login</h1>
    
  <div class="form">
      <b><label for="email">Email &nbsp; &nbsp; : <sup>*</sup></label></b>
      <input type="email" name="email" class="control <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['email']; ?>">
      <br><span class="invalid-feedback"><?php echo $data['email_err']; ?></span>
    </div>

    <div class="form">
      <b><label for="password">Password : <sup>*</sup></label></b>
      <input type="password" name="password" class="control <?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['password']; ?>">
      <br><span class="invalid-feedback"><?php echo $data['password_err']; ?></span>
    </div>
    <div class="row">
      <div class="col">
        <input type="submit" value="Login" class="btn">
      </div>

    </div>

    <p class="recover">Forgot Password?<a href="link"> Recover here</a></p>
  </form>


  <div class="right">
  <div class="signup">
    <h2>If you are new to our website,<br>please sign up first.</h2>

    <div class="column">
      <a href="<?php echo URLROOT; ?>/users/register" class="btn">Sign Up</a>
    </div>
  </div>
  <img class="top" src="../public/img/logo.svg" >

  </div>
  

</body>
<?php require APPROOT . '/views/inc/footer.php'; ?>