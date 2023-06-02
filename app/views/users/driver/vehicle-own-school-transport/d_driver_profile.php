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
            <table>

                <tr>
                    <td><h3>Name</h3></td>
                    <td><?php echo $data['user']->name?></td>
                </tr>
                <tr>
                    <td><h3>User ID</h3></td>
                    <td><?php echo $data['user']->us_id?></td>
                </tr>
                <tr>
                    <td><h3>Gender</h3></td>
                    <td><?php echo $data['user']->gender?></td>
                </tr>
                <tr>
                    <td><h3>DOB</h3></td>
                    <td><?php echo $data['user']->dob?></td>
                </tr>
                <tr>
                    <td><h3>Province</h3></td>
                    <td><?php echo $data['user']->province?></td>
                </tr>
                
                <tr>
                    <td><h3>District</h3></td>
                    <td><?php echo $data['user']->district?></td>
                </tr>

                <tr>
                    <td><h3>Naearest Town</h3></td>
                    <td><?php echo $data['user']->nearestTown?></td>
                </tr>

                <tr>
                    <td><h3>Contact Number</h3></td>
                    <td><?php echo $data['user']->contactNumber?></td>
                </tr>

                <tr>
                    <td><h3>Email</h3></td>
                    <td><?php echo $data['user']->email?></td>
                </tr>
                <!-- <tr>
                    <td><h3>Vehicles</h3></td>
                    <td><button class="button"><a class="link" href="#">View All Your Vehicles</a></button></td>
                </tr> -->


            </table>
        </div>
        <br>
      
      <div class="projects">
            
            <div class="projects_data">
                 <div class="data">
                    <a href="<?php echo URLROOT?>/D_Own_School_Drivers/editDriverProfile"><button class="edit">Edit</button></a>
                    
                 </div>
            </div>
        </div>  
    </div>
</div>
    </main>

    <?php require APPROOT.'/views/inc/footer.php';?>