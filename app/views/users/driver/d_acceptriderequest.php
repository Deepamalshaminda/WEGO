<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/d_sidenavbar.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/d_acceptriderequests.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/_base.css">
    <script src="https://unpkg.com/sweetalert@2/dist/sweetalert.min.js"></script>
    <title><?php echo SITENAME; ?></title>
</head>
<body>
    <?php require APPROOT.'/views/inc/d_sidenavbar.php';?>

<main class="full-page">

<div class="request-row col-12">
        <?php foreach($data['requests'] as $request){ ?>
             <div class="left-request col-6">
             <div class="left-request-container col-6">
                 <div class="title-container col-12">
                     <h3><?php echo $request->fromParent?></h3>
                     
                 </div>
 
                 <div class="div-bottom col-12">
                     <div class="image-wrapper col-4">
                         <img src="<?php echo URLROOT?>/img/3.jpg" class="profile-picture" alt="profile picture">
                     </div>
                     <div class="user-details col-8">
                         <div class="from-where col-12">
                             <div class="from col-4">
                                 <p>From</p>
                             </div>
                             <div class="location-name col-8">
                                 <h5><?php echo $request->fromWhere?></h5>
                             </div>
                         </div>
 
                         <div class="to-where col-12">
                             <div class="from col-4">
                                 <p>To</p>
                             </div>
                             <div class="location-name col-8">
                                 <h5><?php echo $request->toWhere?></h5>
                             </div>
                         </div>
                     </div>
                 </div>
 
                 <div class="btn-container col-12">
                     <button class="button"><a class="link" href="<?php echo URLROOT?>/D_ManageDrivers/accept/<?php echo $request->request_id?>">Accept</a></button>
                     <button class="button"><a class="link" href="<?php echo URLROOT?>/D_ManageDrivers/decline/<?php echo $request->request_id?>">Declline</a></button>
                 </div>
             </div>
         </div>
       <?php } ?>
    </div>

    

</main>

    <?php require APPROOT.'/views/inc/footer.php';?>
