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
<?php require APPROOT.'/views/inc/d_sidenavbar-own-school.php';?>

<main class="full-page">

    <div class="top-container col-12">
        <div class="top-container-right col-6">
            <h3>Earnings for vehicle<?php echo $_SESSION['vehicle_id']?></h3>
        </div>
    </div>

      <div class="card-row col-12">
        <div class="card-row-left col-12">
          <div class="card-row-left-container col-8">
            <div>
              <form action="<?php echo URLROOT; ?>/D_Own_School_Drivers/viewEarningsForAMonth" method="post">
                <label for="Select month"><h3>Selct month</h3></label>
                <input type="month" id="earningsMonth" name="earningsMonth" class="earnings-input">
                <input type="submit" class="btn-submit">
              </form>
            </div>
            <table class="col-12 table">
                <tr>
                  <td colspan="3">
                    <h1>Earnings For Month <?php echo $data['monthName']?> of <?php echo $data['year']?></h1>
                  </td>
                </tr>
                <tr>
                  <th>Payment Date</th>
                  <th>Passenger Name</th>
                  <th>Amount</th>
                </tr>
                <?php foreach($data['payments'] as $payment){ ?>
                  <tr>
                    <td><?php echo $payment-> payment_date ?></td>
                    <td><?php echo $payment-> name ?></td>
                    <td><?php echo $payment-> amount ?></td>
                  </tr>
                <?php } ?>  
            </table> 
          </div>
          <div>
            <img src="<?php echo URLROOT?>/img/earnings.png" alt="Earnings">
          </div>
        </div>
      </div>
</main>

<?php require APPROOT.'/views/inc/footer.php';?>