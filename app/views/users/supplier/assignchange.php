<?php require APPROOT . '/views/inc/header.php'; ?>

<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/dashboard.css">
<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/prequest.css">
<link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
<script type="text/javascript" src="<?php echo URLROOT; ?>/js/list.js"></script>
<title><?php echo SITENAME; ?></title>
<html>
</head>

<body>

<?php require APPROOT . '/views/inc/sidebarnav.php' ;?>
     
    <div class="home-content">
 <h2>Assign or Change Drivers</h2>
 <br>
  <div class="friend-list">
    <div class="friend-card">
      
      <div class="friend-name"><img src="../public/img/wwww.jpg" class="friend-picture" >Vehicle ID 001</div>
      <br>
      <br>
      <div class="friend-actions">
        <a href="<?php echo URLROOT?>/rides/assignDrivers"><button class="accept-button">Assign</button></a>
        <a href="<?php echo URLROOT?>/rides/changeDrivers"><button class="delete-button">Change</button></a>
        
      </div>
    </div>
    <div class="friend-card">
      
      <div class="friend-name"><img src="../public/img/vv.jpg" class="friend-picture" >Vehicle ID 002</div>
      <br>
      <br>
      <div class="friend-actions">
        <button class="accept-button">Assign</button>
        <button class="delete-button">Change</button>
      </div>
    </div>
    <div class="friend-card">
      
      <div class="friend-name"><img src="../public/img/v4.jpg" class="friend-picture" >Vehicle ID 003</div>
      <br>
      <br>
      <div class="friend-actions">
        <button class="accept-button">Assign</button>
        <button class="delete-button">Change</button>
      </div>
    </div>
    <div class="friend-card">
      
      <div class="friend-name"><img src="../public/img/v3.jpg" class="friend-picture" >Vehicle ID 004</div>
      <br>
      <br>
      <div class="friend-actions">
        <button class="accept-button">Assign</button>
        <button class="delete-button">Change</button>
      </div>
    </div>
    <div class="friend-card">
      
      <div class="friend-name"><img src="../public/img/v9.jpg" class="friend-picture" >Vehicle ID 005</div>
      <br>
      <br>
      <div class="friend-actions">
        <button class="accept-button">Assign</button>
        <button class="delete-button">Change</button>
      </div>
    </div>

    <div class="friend-card">
      
        <div class="friend-name"><img src="../public/img/wwww.jpg" class="friend-picture" >Vehicle ID 006</div>
        <br>
        <br>
        <div class="friend-actions">
          <button class="accept-button">Assign</button>
          <button class="delete-button">Change</button>
        </div>
      </div>


  </div>
  
  
  </div>


 
  
</div>




         
















   


    </body>




    <?php require APPROOT . '/views/inc/footer.php'; ?>