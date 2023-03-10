<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/sidenavbar.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/acceptriderequests.css">
  <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/_base.css">
    <title><?php echo SITENAME; ?></title>
</head>
<body>
    <?php require APPROOT.'/views/inc/d_sidenavbar.php';?>

<main class="full-page">

<!-- <div class="background-section col-12"> -->


<?php
$cities = array($requests);
 
// Get values from cities array
print_r(array_values($cities));
?>

    <div class="request-row col-12">
        <?php foreach($data['requests'] as $requests){ ?>
             <div class="left-request col-6">
             <div class="left-request-container col-12">
                 <div class="title-container col-12">
                     <h3>Deepamal Shaminda</h3>
                     <php echo $requests ?>
                 </div>
 
                 <div class="div-bottom col-12">
                     <div class="image-wrapper col-6">
                         <img src="<?php echo URLROOT?>/img/3.jpg" class="profile-picture" alt="profile picture">
                     </div>
                     <div class="user-details col-6">
                         <div class="from-where col-12">
                             <div class="from col-12">
                                 <p>From</p>
                             </div>
                             <div class="location-name col-12">
                                 <h5>Pamankada</h5>
                             </div>
                         </div>
 
                         <div class="to-where col-12">
                             <div class="from col-12">
                                 <p>To</p>
                             </div>
                             <div class="location-name col-12">
                                 <h5>Colombo University</h5>
                             </div>
                         </div>
                     </div>
                 </div>
 
                 <div class="btn-container col-12">
                     <button class="button"><a class="link" href="#">Accept</a></button>
                     <button class="button"><a class="link" href="#">Declline</a></button>
                 </div>
             </div>
         </div>
       <?php } ?>
    </div>



</main>

    <?php require APPROOT.'/views/inc/footer.php';?>
