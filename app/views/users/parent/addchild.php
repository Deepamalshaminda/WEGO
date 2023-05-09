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
    

       <h1 class="childtopic">Fill your child's details here..</h1>
       <br>
       <section class="formback">
       <form action="<?php echo URLROOT; ?>/parents/addchild" method="post">
      <div class="container">
       <br>
        <h1 class="topic">Please fill this form with your child's details</h1>
        
        <hr>

                     <div class="field">
                            <label for="name">Name <sup>*</sup></label> <br>
                            <input type="text" name="name" size="30" placeholder="Enter name"
                                   class="input-y <?php echo (!empty($data['name_err'])) ? 'is-invalid' : ''; ?>"
                                   value="<?php echo $data['name']; ?>" required><br>
                            <span class="invalid-feedback"><?php echo $data['name_err']; ?></span>
                     </div>

                     <div class="field">
                            <label for="gender">Gender <sup>*</sup></label> <br>
                            <select name="gender" id="cars" required class="input-x <?php echo (!empty($data['gender_err'])) ? 'is-invalid' : ''; ?>">
                                   <option value="male">Male</option>
                                   <option value="female">Female</option>
                            </select><br>
                            <span class="invalid-feedback"><?php echo $data['gender_err']; ?></span>
                     </div>
                    

                     <div class="field">
                            <label for="dob"> Date of birth <sup>*</sup></label> <br>
                            <input type="date" id="dob" name="dob" size="30" placeholder="Enter birthday" required
                                   class="input-x <?php echo (!empty($data['dob_err'])) ? 'is-invalid' : ''; ?>"
                                   value="<?php echo $data['dob']; ?>">
                            <span class="invalid-feedback"><?php echo $data['dob_err']; ?></span>
                     </div>
                    

                     <div class="field">
                            <label for="school">School<sup>*</sup></label> <br>
                            <input type="school" name="school" size="30" placeholder="Enter school" required
                                   class="input-y <?php echo (!empty($data['school_err'])) ? 'is-invalid' : ''; ?>"
                                   value="<?php echo $data['school']; ?>"> <br>
                            <span class="invalid-feedback"><?php echo $data['school_err']; ?></span>
                     </div>
                    

                     <div class="field">
                            <label for="school_address">School address <sup>*</sup></label> <br>
                            <input type="text" name="school_address" size="30" placeholder="Enter school address" required
                                   class="input-y <?php echo (!empty($data['school_address_err'])) ? 'is-invalid' : ''; ?>"
                                   value="<?php echo $data['school_address']; ?>"> <br>
                            <span class="invalid-feedback"><?php echo $data['school_address_err']; ?></span>
                     </div>
                    

                    

                    
                    
    
       <!-- <label for="email" class="fields"><b>Name*</b></label>
        <input type="text" placeholder="Enter Name" name="name" required>
    
        <label for="psw" class="fields"><b>age*</b></label>
        <input type="password" placeholder="Enter age" name="age" required>
    
        <label for="psw-repeat" class="fields"><b>dob*</b></label>
        <input type="password" placeholder="Enter dob" name="psw-repeat" required>

        <label for="psw-repeat" class="fields"><b>school*</b></label>
        <input type="password" placeholder="Enter school" name="psw-repeat" required>

        <label for="psw-repeat" class="fields"><b>school_address*</b></label>
        <input type="password" placeholder="Enter your require school_address" name="psw-repeat" required>

        <label for="psw-repeat" class="fields"><b>age*</b></label>
        <input type="password" placeholder="Enter child's age" name="psw-repeat" required>
    
        <label>
          <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
        </label>
    
        <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>-->
    
        <div class="clearfix">
          <button type="button" class="cancelbtn">Cancel</button>
          <!-- <button type="submit" class="signupbtn">Save</button> -->
          <button class="signupbtn" input type="submit" value="submit">submit</button>
        </div>
      </div>
    </form>
</div>
       </section>

<?php require APPROOT . '/views/inc/footer.php'; ?>