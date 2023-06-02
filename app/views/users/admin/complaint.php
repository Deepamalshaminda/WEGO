<?php require APPROOT . '/views/inc/header.php'; ?>

<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/admin_dashboard.css">
<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/complaint.css">
<link rel="stylesheet" href="<?php echo URLROOT; ?>/js/tab.js">
<title><?php echo SITENAME; ?></title>
<html>


<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>


  <?php require APPROOT . '/views/inc/admin_sidenavbar.php'; ?>

  <div class="home-content">
    <div class="tab">
      <button class=" tablink" onclick="openPage('sendrequests')" id="defaultOpen">Complaints</button>
    </div>
    
    <div id="Parentrequests" class="tabcontent">
      <div class="friend-list">
        <?php foreach($data['complaints'] as $complaint): ?>
        <div class="friend-card">
          <div class="friend-name"><img src="<?php echo URLROOT?>/public/img/<?php echo $complaint->profile_image; ?>." class="friend-picture" > 
          <?php echo $complaint->name; ?>
          </div>
          <br>
          <br>
          <div class="friend-actions">
            <button class="details-button"><a href="<?php echo URLROOT ?>/Admin/viewcomplaint/<?php echo $complaint->co_id; ?>"> View details</a></button>


          </div>
        </div>
        <?php endforeach; ?>
      </div>


    </div>


  </div>

</body>




<!--<?php require APPROOT . '/views/inc/footer.php'; ?>-->