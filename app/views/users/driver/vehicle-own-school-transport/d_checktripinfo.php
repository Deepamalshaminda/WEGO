<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/d_sidenavbar.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/d_checktripinfo.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/_base.css">
    <title><?php echo SITENAME; ?></title>
</head>
<body>
<?php require APPROOT.'/views/inc/d_sidenavbar-own-school.php';?>

<main class="full-page">

    <div class="top-container col-12">

        <div class="top-container-left col-6 active-link" id="ongoing-trips">
            <h3>Ongoing Trips</h3>
        </div>

        <div class="top-container-right col-6 inactive-link" id="completed-trips">
            <h3>Completed Trips</h3>
        </div>

    </div>

    <div class="card-row col-12" id="trip-info">
    </div>
</main>

  <script src="<?php echo URLROOT; ?>/js/driver/tripInfo.js" defer></script>

</body>
</html>