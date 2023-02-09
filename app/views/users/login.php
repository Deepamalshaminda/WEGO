<?php require APPROOT . '/views/inc/header.php'; ?>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/style.css">
<script src="app.js"></script>


  
  

  <div class="container">
      <div class="forms-container">
      <form action="<?php echo URLROOT; ?>/users/login" method="post">
        <div class="signin-signup">
          
            <h2 class="title">Sign in</h2>

            <table class="login-table">
          <tr class="login-tr>
            <div class="login-field">
              <td class="login-td">
                <label for="email">Email: <sup>*</sup></label>
              </td>
              <td class="login-td">
                <input type="email" name="email" placeholder="Enter your email" class=" <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['email']; ?>"><br>
                <span class="invalid-feedback"><?php echo $data['email_err']; ?></span>
              </td>
            </div>
          </tr>

          <tr class="login-tr>
            <div class="login-field">
              <td class="login-td">
                <label for="password">Password: <sup>*</sup></label>
              </td>
              <td class="login-td">
                <input type="password" name="password" placeholder="Enter your email" class=" <?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['password']; ?>"><br>
                <span class="invalid-feedback"><?php echo $data['password_err']; ?></span>
              </td>
            </div>
          </tr>
        </table>

        <input type="submit" value="Login" class="btn solid" />
           <div> <i class="forgetPassword"> Forgot password ? </i>
            <a href="#"> Recover here </a> </div>




            <!-- <div class="input-field">
              <i class="fas fa-user"></i>
              <label for="email">Email: <sup>*</sup></label>
              <input type="email" name="email" class="form-control form-control-lg <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['email']; ?>">
              <span class="invalid-feedback"><?php echo $data['email_err']; ?></span>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <label for="password">Password: <sup>*</sup></label>
            <input type="password" name="password" class="form-control form-control-lg <?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['password']; ?>">
            <span class="invalid-feedback"><?php echo $data['password_err']; ?></span>
            </div>
            <input type="submit" value="Login" class="btn solid" />
           <div> <i class="forgetPassword"> Forgot password ? </i>
            <a href="#"> Recover here </a> </div> -->
          
          
        </div>
      </div>


      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>New here ?</h3>
            <p>
                If you are new to our website please sign up before log in!
            </p>
            <button class="btn transparent" id="sign-up-btn">
            <a href="<?php echo URLROOT?>/users/register">
              Sign up
            </button>
          </div>
          <img src="../img/v767_8233.png" class="image" alt="" />
        </div>
        
      </div>
      </form>
    </div>

   
  
</div>

        
        
<?php require APPROOT . '/views/inc/footer.php'; ?>
