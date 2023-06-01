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
    <button class="tablink" onclick="openPage('sendrequests')" id="defaultOpen">Your added children</button>
    <!--<button class="tablink" onclick="openPage('PAccepted')" >Sent Requests</button>-->

    <div id="Parentrequests" class="tabcontent">
      <div class="friend-list">
        <?php foreach ($data["children"] as $child) {; ?>

          <div class="friend-card">
          <div class="friend-name"><img src="../public/child_image/<?php echo $child->child_image; ?>" class="friend-picture" ><?php echo $child->name ?></div>
            <br>
            <br>
            <form action="<?php echo URLROOT; ?>/Attendencechildren/markAttendance" method="post">
              <input type="hidden" name="ch_id" value="<?php echo $child->ch_id; ?>">
              <?php if ($child->marked == 0) { ?>
                <div class="friend-actions">
                  <button class="details-button" type="submit">Mark Attendance</button>
                </div>
              <?php } else { ?>
                <div class="friend-actions">
                  <span class="details-button">Attendance Marked</span>
                </div>
              <?php }; ?>
            </form>
          </div>
        <?php }; ?>
      </div>
    </div>
  </div>

</body>

<!-- <?php require APPROOT . '/views/inc/footer.php'; ?> -->