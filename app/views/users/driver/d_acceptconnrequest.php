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
    <title><?php echo SITENAME; ?></title>
</head>
<body>
    <?php require APPROOT.'/views/inc/d_sidenavbar.php';?>

<main class="full-page">

<div class="top-container col-12">
        <div class="top-container-left active-link col-4" id="received-requests">
            <h3>Received Requests</h3>
        </div>

        <div class="top-container-middle inactive-link col-4" id="sent-requests">
            <h3>Sent Requests</h3>
        </div>

        <div class="top-container-right inactive-link col-4" id="suggessions">
            <h3>Suggessted Vehicle Supliers</h3>
        </div>
    </div>

<div class="request-row col-12" id="requests">
</div>

</main>

<script src="<?php echo URLROOT; ?>/js/driver/connRequests.js" defer></script>

</body>
</html>
