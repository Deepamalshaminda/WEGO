<!DOCTYPE html>
<html lang="en">
<head>
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/_base.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/register.css">
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

    <div class="bottom col-12">
       <div>
              <div class="col-4 image">
                     <div class="image-container col-12">
                            <img src="<?php echo URLROOT?>/img/Driver/reg.png" class="reg-background" alt="wego-logo">
                     </div>
              </div>
              <div class="col-8 form">
                     <div class="form-container col-11">
                            <div class="register-wrapper col-11">
                                   <div class="title-wrapper">
                                   <h2 class="topic">Create An Account</h2>
                                   </div>

                                   <form action="<?php echo URLROOT; ?>/users/register" method="post">
                                   <div class="left-column col-6">

                                          <div class="field">
                                                 <label for="user_role">Select User Role</label>
                                                 <select name="user_role" id="user-role" class="field-content">
                                                        <option value="1">Driver</option>
                                                        <option value="2">Vehicle Supplier</option>
                                                        <option value="3">Parent</option>
                                                        <option value="4">Office Worker</option>
                                                        <!-- <option value="5">Admin</option> -->
                                                 </select>
                                          </div>
                                          
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

                                   <div class="right-column col-6">

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

                                   <div>
                                          
                                   </div>

                                   <div class="btn-wrapper col-12">
                                   <button class="btn-submit">Register</button>
                                   <button class="btn-cancel">Cancel</button>
                                   </div>
                                   </form>
                            </div>
                     </div>
              </div>
       </div>
    </div>
    
</body>
</html>