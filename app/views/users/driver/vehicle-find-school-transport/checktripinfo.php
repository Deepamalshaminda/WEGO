<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/d_sidenavbar.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/checktripinfo.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/_base.css">
    <script src="https://unpkg.com/sweetalert@2/dist/sweetalert.min.js"></script>
    <title><?php echo SITENAME; ?></title>
</head>
<body>
<?php require APPROOT.'/views/inc/d_sidenavbar-own-school.php';?>

<main class="full-page">

    <div class="top-container col-12">
        <div class="top-container-left col-6">
            <h3>Ongoing Trips</h3>
        </div>


        <div class="top-container-right col-6">
            <h3>Completed Trips</h3>
        </div>
    </div>

    <div class="card-row col-12">
        <div class="card-row-left col-6">
            <div class="card-row-left-container col-10">
              <div class="trip-id col-12">
                <h1>Trip ID - 223456</h1>
              </div>

              <div class="details col-12">
                <div class="details-container col-12">
                  <div class="details-container-top col-12">
                    <div class="short col-4">
                      <h4>Start</h4>
                    </div>
                    <div class="long col-8">
                      <p>Kirulapone</p>
                    </div>
                  </div>
                  

                  <div class="details-container-top col-12">
                    <div class="short col-4">
                      <h4>Final Destination</h4>
                    </div>
                    <div class="long col-8">
                      <p>Colombo Fort</p>
                    </div>
                  </div>

                  <div class="details-container-top col-12">
                    <div class="short col-4">
                      <h4>Driver ID</h4>
                    </div>
                    <div class="long col-3">
                      <p>D501</p>
                    </div>
                    <div class="rest col-3">
                      <button class="button"><a class="link" href="#">Driver Details</a></button>
                    </div>
                  </div>


                  <div class="details-container-top col-12">
                    <div class="short col-4">
                      <h4>Number of Passengers</h4>
                    </div>
                    <div class="long col-8">
                      <p>25</p>
                    </div>
                  </div>

                  <div class="details-container-top col-12">
                    <div class="short col-4">
                      <h4>Final Destination</h4>
                    </div>
                    <div class="long col-8">
                      <p>Colombo Fort</p>
                    </div>
                  </div>

                  <div class="details-container-top col-12">
                    <div class="short col-4">
                      <h4>Complaints</h4>
                    </div>
                    <div class="long col-8">
                      <button class="button"><a class="link" href="#">Click Here</a></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>

    </div>
</main>

<?php require APPROOT.'/views/inc/footer.php';?>