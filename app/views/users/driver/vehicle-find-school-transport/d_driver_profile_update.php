<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/d_sidenavbar.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/driver_profile.css">
  <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/_base.css">
  <script src="https://unpkg.com/sweetalert@2/dist/sweetalert.min.js"></script>
    <title><?php echo SITENAME; ?></title>
</head>
<body>
    <?php require APPROOT.'/views/inc/d_sidenavbar-own-school.php';?>

    <main class="full-page">
    <div class="wrapper">
    <div class="left">
        <img src ="<?php echo URLROOT; ?>/img/1.png" 
        alt="user" width="100">
        <h4><?php echo $data['user']->name?></h4>
         <p>Driver</p>
    </div>
    <div class="right">
        <div class="info">
            <form action="<?php echo URLROOT?>/D_Own_School_Drivers/editDriverProfile" method="post">
                <table>
                
                    <tr>
                        <td><h3>Name</h3></td>
                        <td><input type="text" name="name" value="<?php echo $data['user']->name?>" class="input <?php echo (!empty($data['name_err'])) ? 'is-invalid' : ''; ?>"></td>
                    </tr>
                    <tr>
                        <td><h3>User ID</h3></td>
                        <td><?php echo $data['user']->us_id?></td>                    
                    </tr>
                    <tr>
                        <td><h3>Gender</h3></td>
                        <td><input type="text" name="gender" value="<?php echo $data['user']->gender?>" class="input <?php echo (!empty($data['gender_err'])) ? 'is-invalid' : ''; ?>"></td>
                    </tr>
                    <tr>
                        <td><h3>DOB</h3></td>
                        <td><input type="text" name="dob" value="<?php echo $data['user']->dob?>" class="input <?php echo (!empty($data['dob_err'])) ? 'is-invalid' : ''; ?>"></td>
                    </tr>
                    <tr>
                        <td><h3>Province</h3></td>
                        <td><input type="text" name="province" value="<?php echo $data['user']->province?>" class="input <?php echo (!empty($data['province_err'])) ? 'is-invalid' : ''; ?>"></td>
                    </tr>
                    
                    <tr>
                        <td><h3>District</h3></td>
                        <td><input type="text" name="district" value="<?php echo $data['user']->district?>" class="input <?php echo (!empty($data['district_err'])) ? 'is-invalid' : ''; ?>"></td>
                    </tr>

                    <tr>
                        <td><h3>Nearest Town</h3></td>
                        <td><input type="text" name="nearestTown" value="<?php echo $data['user']->nearestTown?>" class="input <?php echo (!empty($data['nearestTown_err'])) ? 'is-invalid' : ''; ?>"></td>
                    </tr>

                    <tr>
                        <td><h3>Contact Number</h3></td>
                        <td><input type="text" name="contactNumber" value="<?php echo $data['user']->contactNumber?>" class="input <?php echo (!empty($data['contactNumber_err'])) ? 'is-invalid' : ''; ?>"></td>
                    </tr>

                    <tr>
                        <td><h3>Email</h3></td>
                        <td><input type="text" name="email" value="<?php echo $data['user']->email?>" class="input <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>"></td>
                    </tr>

                </table>
            
            
        </div>
        <br>
      
      <div class="projects">
            
            <div class="projects_data">
                 <div class="data">
                    <button type="submit" class="edit">UPDATE</button>
                    
                 </div>
            </div>
        </div>
</form>  
    </div>
</div>
    </main>

    <?php require APPROOT.'/views/inc/footer.php';?>