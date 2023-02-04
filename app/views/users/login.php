<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title><?php echo SITENAME; ?></title>
</head>
<body>

<main class="full-page">

    <div class="login-form-wrapper">
        <div class="left-side">
        <img src="<?php echo URLROOT; ?>/img/wego_logo.png" alt="" class="logo">
            <h1>WEGO</h1>
            <hr>
            <h3>Find Your<br> Transport Here</h3>
        </div>

        <div class="right-side">
            <div class="title-container"><h1>LOGIN</h1></div>
            <form action="<?php echo URLROOT; ?>/users/login" method="POST">

                <div class="input-segment">
                    <label class="form-label">Email</label> <br>
                    <input class="input-field" type="text" name="email" placeholder="Enter email"
                           size="40"><br>
                    <?php
                    if (isset($this->data['email_err'])) {
                        ?>
                        <span class="error">
                            <input type="hidden">
                            <?php echo $this->data['email_err']; ?>
                        </span>
                        <?php
                    }
                    ?>
                    <br>
                </div>

                <div class="input-segment">
                    <label class="form-label">Password</label> <br>
                    <input class="input-field" type="password" name="password" placeholder="Enter password" size="40"><br>
                    <?php
                    if (isset($this->data['password_err'])) {
                        ?>
                        <span class="error">
                            <input type="hidden">
                            <?php echo $this->data['password_err']; ?>
                        </span>
                        <?php
                    }
                    ?>
                    <br>
                </div>

                <p class="signup-link">Don't have an account?<a href="Register"><b>SignUp</b></a></p>
                <br>

                <div class="btn-wrapper">
                    <button class="btn-submit" type="submit">LOGIN</button>
                </div>

            </form>
        </div>

    
<?php require APPROOT . '/views/inc/footer.php'; ?>