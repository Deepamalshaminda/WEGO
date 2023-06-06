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
  <script src="https://unpkg.com/sweetalert@2/dist/sweetalert.min.js"></script>
    <title><?php echo SITENAME; ?></title>
</head>
<body>
    <?php require APPROOT.'/views/inc/d_sidenavbar-own-school.php';?>

<main class="full-page">

<div class="request-page col-12">
    <h3 class="request-page-heading">Accept Rquests From Parents</h3>

</div>

<div class="request-row col-12">
    
        <?php foreach($data['requests'] as $request){ ?>
             <div class="left-request col-6">
             <div class="left-request-container col-10">
                 <div class="title-container col-12">
                     <h3>Parent : <?php echo $request->fromParent?></h3>
                     
                 </div>
 
                 <div class="div-bottom col-12">
                     <div class="image-wrapper col-4">
                         <img src="<?php echo URLROOT?>/img/3.jpg" class="profile-picture" alt="profile picture">
                     </div>
                     <div class="user-details col-8">

                        <div class="from-where col-12">
                             <div class="from col-4">
                                 <p>Child Name : </p>
                             </div>
                             <div class="location-name col-8">
                                 <h5><?php echo $request->childName?></h5>
                             </div>
                         </div>

                         <div class="from-where col-12">
                             <div class="from col-4">
                                 <p>From : </p>
                             </div>
                             <div class="location-name col-8">
                                 <h5><?php echo $request->fromWhere?></h5>
                             </div>
                         </div>
 
                         <div class="to-where col-12">
                             <div class="from col-4">
                                 <p>To : </p>
                             </div>
                             <div class="location-name col-8">
                                 <h5><?php echo $request->toWhere?></h5>
                             </div>
                         </div>
                     </div>
                 </div>
 
                 <div class="btn-container col-12">
                    <button class="button"><a class="link" href="#" onclick="acceptRideRequest(<?php echo $request->request_id?>)">Accept</a></button>
                        <script>
                        function acceptRideRequest(requestId) {
                            // swal("Ride Request Accepted", "The ride request has been successfully accepted.", "success").then(() => {
                            //     window.location.href = '<?php echo URLROOT?>/D_Own_School_Drivers/acceptRideRequest/' + requestId;
                            // });
                            swal({
                            title: "Are you sure to accept?",
                            text: "Child will be added to your vehicle",
                            icon: "warning",
                            buttons: ["Cancel", "Accept"],
                            dangerMode: true,
                        }).then((confirm) => {
                            if (confirm) {
                                window.location.href = '<?php echo URLROOT?>/D_Own_School_Drivers/acceptRideRequest/' + requestId;
                            }
                        });
                        }
                        </script>
                     <button class="button"><a class="link" href="#" onclick="declineRideRequest(<?php echo $request->request_id?>)">Decline</a></button>
                        <script>
                        function declineRideRequest(requestId) {
                            // swal("Ride Request declined", "The ride request has been successfully decline.", "success").then(() => {
                            //     window.location.href = '<?php echo URLROOT?>/D_Own_School_Drivers/declineRideRequest/' + requestId;
                            // });
                            swal({
                            title: "Are you sure to decline?",
                            text: "Request will be removed",
                            icon: "warning",
                            buttons: ["Cancel", "Decline"],
                            dangerMode: true,
                        }).then((confirm) => {
                            if (confirm) {
                                window.location.href = '<?php echo URLROOT?>/D_Own_School_Drivers/declineRideRequest/' + requestId;
                            }
                        });
                        }
                        </script>
                 </div>
             </div>
         </div>
       <?php } ?>
    </div>

    

</main>

    <?php require APPROOT.'/views/inc/footer.php';?>
