<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title><?php echo SITENAME; ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/dashboard.css">
  <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/p_prequest.css">
   <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/_base.css">
  <link rel="stylesheet" href="<?php echo URLROOT; ?>/js/list.js">
</head>

<body>
  <?php require APPROOT . '/views/inc/header.php'; ?>
  <?php require APPROOT . '/views/inc/sidenavbar.php'; ?>
  <div class="home-content">
    <button class="tablink" onclick="openPage('sendrequests')" id="defaultOpen">Requests you sent</button>
    <!--<button class="tablink" onclick="openPage('PAccepted')">Sent Requests</button>-->
    <div id="Parentrequests" class="tabcontent">
      <div class="friend-list">
        <?php if (!empty($data['sentr'])): ?>
          <?php foreach ($data['sentr'] as $sentr): ?>
            <div class="friend-card">
              <div class=""><img src="../public/img/v1.png" class="friend-picture1"></div>
              <div class="friend-name1" >Sent date and time : <?php echo $sentr->sent_at; ?></div>
              <div class="friend-name1" >Sent vehicle id : <?php echo $sentr->to_whom; ?></div>
              <div class="friend-name1" >Status : <?php echo $sentr->status; ?></div>
              
              <button class="request-button"><a href="<?php echo URLROOT?>/Sendrequests/getSentRequestById/<?php echo $sentr->ride_request_id;?>">Remove request</a></button>
              
            </div>
          <?php endforeach; ?>
        <?php else: ?>
          <p>No sent requests</p>
        <?php endif; ?>
      </div>
    </div>
  </div>
  <?php require APPROOT . '/views/inc/footer.php'; ?>
</body>
</html>
