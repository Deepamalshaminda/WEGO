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

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">

<div class="full-page">
       <div class="register-wrapper">
              <div class="title-wrapper">
                <h2 class="topic">Create An Account</h2>
              </div>

              <form action="<?php echo URLROOT; ?>/users/register" method="post">
              <div class="left-column">
                     <div class="field">
                            <label for="name">Name <sup>*</sup></label> <br>
                            <input type="text" name="name" size="30" placeholder="Enter name"
                                   class="input <?php echo (!empty($data['name_err'])) ? 'is-invalid' : ''; ?>"
                                   value="<?php echo $data['name']; ?>"><br>
                            <span class="invalid-feedback"><?php echo $data['name_err']; ?></span>
                     </div>
                    
                        

                     <div class="field">
                            <label for="gender">Gender <sup>*</sup></label> <br>
                            <input type="text" name="gender" size="30" placeholder="Select Gender"
                                   class="input <?php echo (!empty($data['gender_err'])) ? 'is-invalid' : ''; ?>"
                                   value="<?php echo $data['gender']; ?>"><br>
                            <span class="invalid-feedback"><?php echo $data['gender_err']; ?></span>
                     </div>

                     <div class="field">
                            <label for="address">Address <sup>*</sup></label> <br>
                            <input type="text" name="address" size="30" placeholder="Enter address"
                                   class="input <?php echo (!empty($data['address_err'])) ? 'is-invalid' : ''; ?>"
                                   value="<?php echo $data['address']; ?>" > <br>
                            <span class="invalid-feedback"><?php echo $data['address_err']; ?></span>
                     </div>
                    

                     <div class="field">
                            <label for="district">District <sup>*</sup></label> <br>
                            <input type="text" name="district" size="30" placeholder="Enter district"
                                   class="input <?php echo (!empty($data['district_err'])) ? 'is-invalid' : ''; ?>"
                                   value="<?php echo $data['district']; ?>"> <br>
                            <span class="invalid-feedback"><?php echo $data['district_err']; ?></span>
                     </div>
                    

                     <div class="field">
                            <label for="contactNumber">Contact Number <sup>*</sup></label> <br>
                            <input type="text" name="contactNumber" size="30" placeholder="Enter contact number"
                                   class="input <?php echo (!empty($data['contactNumber_err'])) ? 'is-invalid' : ''; ?>"
                                   value="<?php echo $data['contactNumber']; ?>"> <br>
                            <span class="invalid-feedback"><?php echo $data['contactNumber_err']; ?></span>
                     </div>
                    

                     <div class="field">

                            <label for="password">Password <sup>*</sup></label> <br>
                            <input type="password" name="password" size="30" placeholder="Create a password"
                                   class="input <?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>"
                                   value="<?php echo $data['password']; ?>"> <br>
                            <span class="invalid-feedback"><?php echo $data['password_err']; ?></span>
                     </div>
                    

                </div>

                <div class="right-column">

                     <div class="field">
                            <label for="nic">NIC Number <sup>*</sup></label> <br>
                            <input type="text" name="nic" size="30" placeholder="Enter NIC number"
                                   class="input <?php echo (!empty($data['nic_err'])) ? 'is-invalid' : ''; ?>"
                                   value="<?php echo $data['nic']; ?>"><br>
                            <span class="invalid-feedback"><?php echo $data['nic_err']; ?></span>
                     </div>

                     <div class="field">
                            <label for="dob">Date of Birth <sup>*</sup></label> <br>
                            <input type="date" name="dob" size="30" placeholder="Enter date of birth"
                                   class="input <?php echo (!empty($data['dob_err'])) ? 'is-invalid' : ''; ?>"
                                   value="<?php echo $data['dob']; ?>"> <br>
                            <span class="invalid-feedback"><?php echo $data['name_err']; ?></span>
                     </div>

                     <div class="field">
                            <label for="province">Province <sup>*</sup></label> <br>
                            <input type="text" name="province" size="30" placeholder="Enter province"
                                   class="input <?php echo (!empty($data['province_err'])) ? 'is-invalid' : ''; ?>"
                                   value="<?php echo $data['province']; ?>"> <br>
                            <span class="invalid-feedback"><?php echo $data['province_err']; ?></span>
                     </div>

                     <div class="field">
                            <label for="nearestTown">Nearest Town <sup>*</sup></label> <br>
                            <input type="text" name="nearestTown" size="30" placeholder="Enter nearest town"
                                   class="input <?php echo (!empty($data['nearestTown_err'])) ? 'is-invalid' : ''; ?>"
                                   value="<?php echo $data['nearestTown']; ?>"> <br>
                            <span class="invalid-feedback"><?php echo $data['nearestTown_err']; ?></span>
                     </div>

                     <div class="field">
                            <label for="email">Email <sup>*</sup></label> <br>
                            <input type="email" name="email" size="30" placeholder="Enter email"
                                   class="input <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>"
                                   value="<?php echo $data['email']; ?>"> <br>
                            <span class="invalid-feedback"><?php echo $data['email_err']; ?></span>
                     </div>

                     <div class="field">
                            <label for="confirm_password">Confirm Password <sup>*</sup></label> <br>
                            <input type="password" name="confirm_password" size="30" placeholder="Re-enter password"
                                   class="input <?php echo (!empty($data['confirm_password_err'])) ? 'is-invalid' : ''; ?>"
                                   value="<?php echo $data['confirm_password']; ?>"> <br>
                            <span class="invalid-feedback"><?php echo $data['confirm_password_err']; ?></span>
                     </div>         
                    
              </div>
              <div class="btn-wrapper">
                    <button class="btn-submit">Register</button>
                    <button class="btn-cancel">Cancel</button>
              </div>
              </form>
       </div>
</div>

<?php require APPROOT . '/views/inc/footer.php'; ?>