<?php require APPROOT . '/views/inc/header.php'; ?>

<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/dashboard.css">
<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/p_prequest.css">
<link rel="stylesheet" href="<?php echo URLROOT; ?>/js/list.js">
<title><?php echo SITENAME; ?></title>
<html>
</head>

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<body>

  <?php require APPROOT . '/views/inc/sidenavbar.php'; ?>

  <div class="home-content">
    <button class="tablink" id="defaultOpen">Lodge a Complaint</button>
    <!--<button class="tablink" onclick="openPage('PAccepted')" >Sent Requests</button>-->

    <div id="Parentrequests" class="tabcontent">
      <div class="friend-list">
        <?php if (!empty($data)) : ?>
          <div class="friend-card">
            <form action="<?php echo URLROOT; ?>/Complaints/setComplaint" method="post">
              <div class="row">
        </br></br>
                <label for="ride">Select Ride ID:</label>
                <select name="ride" id="ride">
                  <optgroup label="Ride ID">
                    <?php foreach ($data['rides'] as $ride) : ?>
                      <option value="<?php echo $ride->ride_id ?>">Ride ID: <?php echo $ride->ride_id ?> - <?php echo $ride->ve_id ?> - <?php echo $ride->date ?></option>
                    <?php endforeach; ?>
                  </optgroup>
                </select>
                </br></br>
                <div class="row">
                  <span>Complaint</span>
                  <div class="inputBox">
                    <textarea id="complaint" name="complaint" rows="4" cols="50"></textarea>
                  </div>
                </div>
                </br></br></br></br>
                <div class="row">
                  <div class="friend-actions">
                    <button class="details-button">Submit</a></button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</body>
<!--<?php require APPROOT . '/views/inc/footer.php'; ?>-->