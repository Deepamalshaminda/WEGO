<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/d_sidenavbar.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/d_viewearnings.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/_base.css">
    <title><?php echo SITENAME; ?></title>
</head>
<body>
<?php require APPROOT.'/views/inc/d_sidenavbar.php';?>

<main class="full-page">

    <div class="top-container col-12">
        <div class="top-container-left col-6">
            <h3>Earnings From Reservations</h3>
        </div>


        <div class="top-container-right col-6">
            <h3>Earnings From Regular Rides</h3>
        </div>
    </div>

        <div class="card-row col-12">
        <div class="card-row-left col-6">
        <div class="card-row-left-container col-12">
        <table class="col-12">

            <tr>
              <td colspan="3">
                <h1>Earnings For Month January - 2023</h1>
              </td>
            </tr>
            <tr>
              <th>Ride ID</th>
              <th>Start - Destination</th>
              <th>Price</th>
            </tr>
            <tr>
              <td>0203D450</td>
              <td>Pamankada - Colombo Fort</td>
              <td>500 LKR</td>
            </tr>
            <tr>
              <td>0212D630</td>
              <td>Boralasgamuwa - Pamankada</td>
              <td>400 LKR</td>
            </tr>
            <tr>
              <td>0114D750</td>
              <td>Papiliyana - Havelock</td>
              <td>500 LKR</td>
            </tr>
            <tr>
              <td>0125D123</td>
              <td>Pamankada - Town Halle</td>
              <td>700 LKR</td>
            </tr>
            <tr>
              <td>0129D523</td>
              <td>Havelock - Town Hall</td>
              <td>500 LKR</td>
            </tr>
               
        </table> 
        </div>
        </div>
        <div class="card-row-right col-6">
            <img src="<?php echo URLROOT?>/img/earnings.png" class="side-image" alt="Image">
        </div>
        </div>
</main>

<?php require APPROOT.'/views/inc/footer.php';?>