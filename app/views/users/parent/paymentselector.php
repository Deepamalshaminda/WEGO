<?php require APPROOT . '/views/inc/header.php'; ?>

<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/dashboard.css">
<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/p_prequest.css">
<link rel="stylesheet" href="<?php echo URLROOT; ?>/js/list.js">
<!-- <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script> -->
<script type="text/javascript" src="https://www.payhere.lk/lib/payhere.js"></script>
<title><?php echo SITENAME; ?></title>
<html>
</head>

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<body>

  <?php require APPROOT . '/views/inc/sidenavbar.php'; ?>

  <div class="home-content">
    <button class="tablink" id="defaultOpen">Pick the Month and Driver</button>
    <!--<button class="tablink" onclick="openPage('PAccepted')" >Sent Requests</button>-->

    <div id="Parentrequests" class="tabcontent">
      <div class="friend-list">
        <div class="friend-card">
          <form action="<?php echo URLROOT; ?>/Payments/paymentmethod" method="post">
            <label for="datepicker">Choose a Month:</label>
            <input name="datepicker" type="month" id="datepicker" value="YYYY-MM">
            <input name="ch_id" type="hidden" id="ch_id" value="<?php echo $data["ch_id"] ?>"><br>
            <label for="cars">Vehicle Id</label>
            <input type="text" name="cars" id="cars" value="<?php echo $data["childVehicle"] ?>">
            <!-- <p><!?php echo $data["childVehicle"] ?></p> -->
            <!-- <label for=""><!?php echo $data["childVehicle"] ?></label> -->
            
            <!--<label for="cars">Choose a Vehicle:</label>
             <select name="cars" id="cars">
              <optgroup label="Vehicle No">
                <!?php foreach ($data['vehicles'] as $vehicle) : ?>
                  <option value="<!?php echo $vehicle->vehicleno ?>"><!?php echo $vehicle->vehicleno ?></option>
                <!?php endforeach; ?>
              </optgroup>
            </select> -->
            <!-- <input type="text" name="vehicleId" id="vehicleId" value="<!?php echo $data["childVehicle"] ?>"> -->
            </br>
            </br>
            <div class="friend-actions">
              <button class="details-button" id="payhere-payment" type="submit">Make The Payment</button>
            </div>
            </br>
            </br>
            <span style="color:#f5f5f5">Test</span>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
<!--<?php require APPROOT . '/views/inc/footer.php'; ?>-->