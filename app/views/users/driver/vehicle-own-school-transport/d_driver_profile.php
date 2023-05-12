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
        <h4>Deepamal Shaminda</h4>
         <p>Driver</p>
    </div>
    <div class="right">
        <div class="info">
            <table>
                <tr>
                    <td><h3>Name</h3></td>
                    <td>Deepamal Shaminda</td>
                </tr>
                <tr>
                    <td><h3>Driver ID</h3></td>
                    <td>D507</td>
                </tr>
                <tr>
                    <td><h3>Gender</h3></td>
                    <td>Male</td>
                </tr>
                <tr>
                    <td><h3>DOB</h3></td>
                    <td>1999/01/13</td>
                </tr>
                <tr>
                    <td><h3>Province</h3></td>
                    <td>Sothern</td>
                </tr>
                
                <tr>
                    <td><h3>District</h3></td>
                    <td>Colombo</td>
                </tr>

                <tr>
                    <td><h3>Naearest Junction</h3></td>
                    <td>Pamankada</td>
                </tr>

                <tr>
                    <td><h3>Contact Number</h3></td>
                    <td>0766544829</td>
                </tr>

                <tr>
                    <td><h3>Email</h3></td>
                    <td>deepamalsh@gmail.com</td>
                </tr>
                <tr>
                    <td><h3>Vehicles</h3></td>
                    <td><button class="button"><a class="link" href="#">View All Your Vehicles</a></button></td>
                </tr>


            </table>
        </div>
        <br>
      
      <div class="projects">
            
            <div class="projects_data">
                 <div class="data">
                    <button class="edit">Edit</button>
                    
                 </div>
                 <div class="data">
                   <button class="delete">Delete</h4>
                    
              </div>
            </div>
        </div>  
    </div>
</div>
    </main>

    <?php require APPROOT.'/views/inc/footer.php';?>