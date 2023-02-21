<?php require APPROOT . '/views/inc/header.php'; ?>
<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/addchild.css">
<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/dashboard.css">
  <title><?php echo SITENAME; ?></title>
</head>
<body>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">


<meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <?php require APPROOT . '/views/inc/sidenavbar.php' ;?>
    
<!--<div class="full-page">
       <div class="register-wrapper">
              <div class="title-wrapper">
                <h2 class="topic">Add your child's details..</h2>
              </div>

              <form action="<?php echo URLROOT; ?>/Parents/addchild" method="post">
              <div class="left-column">
                     <div class="field">
                            <label for="name">Name <sup>*</sup></label> <br>
                            <input type="text" name="name" size="30" placeholder="Enter name"
                                   class="input <?php echo (!empty($data['name_err'])) ? 'is-invalid' : ''; ?>"
                                   value="<?php echo $data['name']; ?>"><br>
                            <span class="invalid-feedback"><?php echo $data['name_err']; ?></span>
                     </div>
                    
                        

                     <div class="field">
                            <label for="school">School <sup>*</sup></label> <br>
                            <input type="text" name="school" size="30" placeholder="Select school"
                                   class="input <?php echo (!empty($data['school_err'])) ? 'is-invalid' : ''; ?>"
                                   value="<?php echo $data['school']; ?>"><br>
                            <span class="invalid-feedback"><?php echo $data['school_err']; ?></span>
                     </div>

                     <div class="field">
                            <label for="address">Address <sup>*</sup></label> <br>
                            <input type="text" name="address" size="30" placeholder="Enter address"
                                   class="input <?php echo (!empty($data['address_err'])) ? 'is-invalid' : ''; ?>" 
                                   value="<?php echo $data['address']; ?>" > <br>
                            <span class="invalid-feedback"><?php echo $data['address_err']; ?></span>
                     </div>
                    

                     <div class="field">
                            <label for="">Age <sup>*</sup></label> <br>
                            <input type="number" name="age" size="30" placeholder="Enter age"
                                   class="input <?php echo (!empty($data['age_err'])) ? 'is-invalid' : ''; ?>"
                                   value="<?php echo $data['age']; ?>"> <br>
                            <span class="invalid-feedback"><?php echo $data['age_err']; ?></span>
                     </div>
                    

                     <div class="field">
                            <label for="route">Route <sup>*</sup></label> <br>
                            <input type="text" name="route" size="30" placeholder="Enter contact number"
                                   class="input <?php echo (!empty($data['route_err'])) ? 'is-invalid' : ''; ?>"
                                   value="<?php echo $data['route']; ?>"> <br>
                            <span class="invalid-feedback"><?php echo $data['route_err']; ?></span>
                     </div>
                    

                     <div class="field">

                            <label for="gender">Gender <sup>*</sup></label> <br>
                            <input type="gender" name="gender" size="30" placeholder="Create a gender"
                                   class="input <?php echo (!empty($data['gender_err'])) ? 'is-invalid' : ''; ?>"
                                   value="<?php echo $data['gender']; ?>"> <br>
                            <span class="invalid-feedback"><?php echo $data['gender_err']; ?></span>
                     </div>
                    

                </div>

               
                    
              </div>
              <div class="btn-wrapper">
                    <button class="btn-register">Register</button>
                    <button class="btn-cancel">Cancel</button>
              </div>
              </form> 
       </div>-->
       <h1 class="childtopic">Fill your child's details here..</h1>
       <br>
       <section class="formback">
       <form action="<?php echo URLROOT; ?>/Parents/addchild" method="post">
      <div class="container">
        <h1 class="topic">Please fill this form with your child's details</h1>
        
        <hr>
    
        <label for="email" class="fields"><b>Name*</b></label>
        <input type="text" placeholder="Enter Name" name="name" required>
    
        <label for="psw" class="fields"><b>School*</b></label>
        <input type="password" placeholder="Enter School" name="school" required>
    
        <label for="psw-repeat" class="fields"><b>Address*</b></label>
        <input type="password" placeholder="Enter address" name="psw-repeat" required>

        <label for="psw-repeat" class="fields"><b>Age*</b></label>
        <input type="password" placeholder="Enter age" name="psw-repeat" required>

        <label for="psw-repeat" class="fields"><b>Route*</b></label>
        <input type="password" placeholder="Enter your require route" name="psw-repeat" required>

        <label for="psw-repeat" class="fields"><b>Gender*</b></label>
        <input type="password" placeholder="Enter child's gender" name="psw-repeat" required>
    
        <!--<label>
          <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
        </label>
    
        <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>-->
    
        <div class="clearfix">
          <button type="button" class="cancelbtn">Cancel</button>
          <button type="submit" class="signupbtn">Save</button>
        </div>
      </div>
    </form>
</div>
       </section>

<?php require APPROOT . '/views/inc/footer.php'; ?>