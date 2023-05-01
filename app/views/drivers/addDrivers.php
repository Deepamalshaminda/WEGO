<?php require APPROOT . '/views/inc/header.php'; ?>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">

<div class="full-page">
       <div class="addDrivers-wrapper">
              <div class="title-wrapper">
                <h2 class="topic">Add Drivers</h2>
              </div>

              <form action="<?php echo URLROOT; ?>/drivers/addDrivers" method="post">
              <div class="left-column">
                     <div class="field">
                            <label for="name">Name <sup>*</sup></label> <br>
                            <input type="text" name="name" size="30" placeholder="Add name"
                                   class="input <?php echo (!empty($data['name_err'])) ? 'is-invalid' : ''; ?>"
                                   value="<?php echo $data['name']; ?>"><br>
                            <span class="invalid-feedback"><?php echo $data['name_err']; ?></span>
                     </div>
                    
                     <div class="field">
                            <label for="email">Email <sup>*</sup></label> <br>
                            <input type="email" name="email" size="30" placeholder="Add email"
                                   class="input <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>"
                                   value="<?php echo $data['email']; ?>"> <br>
                            <span class="invalid-feedback"><?php echo $data['email_err']; ?></span>
                     </div>
                     
                     <div class="field">
                            <label for="nic">NIC <sup>*</sup></label> <br>
                            <input type="text" name="nic" size="30" placeholder="Add NIC number"
                                   class="input <?php echo (!empty($data['nic_err'])) ? 'is-invalid' : ''; ?>"
                                   value="<?php echo $data['nic']; ?>"><br>
                            <span class="invalid-feedback"><?php echo $data['nic_err']; ?></span>
                     </div>

                     <div class="field">
                            <label for="phoneNumber">Phone Number <sup>*</sup></label> <br>
                            <input type="text" name="phoneNumber" size="30" placeholder="Add phone number"
                                   class="input <?php echo (!empty($data['phoneNumber_err'])) ? 'is-invalid' : ''; ?>"
                                   value="<?php echo $data['phoneNumber']; ?>"> <br>
                            <span class="invalid-feedback"><?php echo $data['phoneNumber_err']; ?></span>
                     </div>

                     <div class="field">

                            <label for="password">Create Password <sup>*</sup></label> <br>
                            <input type="password" name="password" size="30" placeholder="Create a password"
                                   class="input <?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>"
                                   value="<?php echo $data['password']; ?>"> <br>
                            <span class="invalid-feedback"><?php echo $data['password_err']; ?></span>
                     </div>

                     <!-- <div class="field">
                            <label for="gender">Gender <sup>*</sup></label> <br>
                            <input type="text" name="gender" size="30" placeholder="Select Gender"
                                   class="input <?php echo (!empty($data['gender_err'])) ? 'is-invalid' : ''; ?>"
                                   value="<?php echo $data['gender']; ?>"><br>
                            <span class="invalid-feedback"><?php echo $data['gender_err']; ?></span>
                     </div>

                     <div class="field">
                            <label for="address">Address <sup>*</sup></label> <br>
                            <input type="text" name="address" size="30" placeholder="Add address"
                                   class="input <?php echo (!empty($data['address_err'])) ? 'is-invalid' : ''; ?>"
                                   value="<?php echo $data['address']; ?>" > <br>
                            <span class="invalid-feedback"><?php echo $data['address_err']; ?></span>
                     </div> -->
                    
                </div>

                <div class="right-column">

                     <div class="field">
                            <label for="licenseNo">License No <sup>*</sup></label> <br>
                            <input type="text" name="licenseNo" size="30" placeholder="Add License No"
                                   class="input <?php echo (!empty($data['licenseNo_err'])) ? 'is-invalid' : ''; ?>"
                                   value="<?php echo $data['licenseNo']; ?>"> <br>
                            <span class="invalid-feedback"><?php echo $data['licenseNo_err']; ?></span>
                     </div>

                     <div class="field">
                            <label for="licenseExpDate">License Exp Date <sup>*</sup></label> <br>
                            <input type="date" name="licenseExpDate" size="30" placeholder="Add license exp date"
                                   class="input <?php echo (!empty($data['licenseExpDate_err'])) ? 'is-invalid' : ''; ?>"
                                   value="<?php echo $data['licenseExpDate']; ?>"> <br>
                            <span class="invalid-feedback"><?php echo $data['licenseExpDate_err']; ?></span>
                     </div>

                     <!-- <div class="field">
                            <label for="licenseExpDate">License Exp Date <sup>*</sup></label> <br>
                            <input type="date" name="licneseExpDate" size="30" placeholder="Add License Exp Date"
                                   class="input <?php echo (!empty($data['licenseExpDate_err'])) ? 'is-invalid' : ''; ?>"
                                   value="<?php echo $data['licenseExpDate']; ?>"> <br>
                            <span class="invalid-feedback"><?php echo $data['licenseExpDate_err']; ?></span>
                     </div> -->

                     <div class="field">
                            <label for="feasibleTimeSlot"> Feasible Time Slot <sup>*</sup></label> <br>
                            <input type="time" name="feasibleTimeSlot" size="30" placeholder="Add Feasible Time Slot"
                                   class="input <?php echo (!empty($data['feasibleTimeSlot_err'])) ? 'is-invalid' : ''; ?>"
                                   value="<?php echo $data['feasibleTimeSlot']; ?>"> <br>
                            <span class="invalid-feedback"><?php echo $data['feasibleTimeSlot_err']; ?></span>
                     </div>

                     <div class="field">
                            <label for="preferedServiceType">Prefered Service Type<sup>*</sup></label> <br>
                            <input type="text" name="preferedServiceType" size="30" placeholder="Add Prefered Service Type"
                                   class="input <?php echo (!empty($data['preferedServiceType_err'])) ? 'is-invalid' : ''; ?>"
                                   value="<?php echo $data['preferedServiceType']; ?>"> <br>
                            <span class="invalid-feedback"><?php echo $data['preferedServiceType_err']; ?></span>
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
              <div class="dropdown">
                <button class="dropbtn">If Own Vehicle</button>
              <div class="dropdown-content">
              <a href="#">Yes</a>
              <a href="#">No</a>
             </div>
            </div>
</div> 
<div class="btn-wrapper">
                    <button class="btn-register">Add</button>
                    <button class="btn-cancel">Cancel</button>
              </div>
              </form>
       </div>
</div>

<?php require APPROOT . '/views/inc/footer.php'; ?>