<?php require APPROOT . '/views/inc/header.php'; ?>
<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/admin_dashboard.css">
<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/viewprofiles.css">
<title><?php echo SITENAME; ?></title>
<html>
</head>



<meta name="viewport" content="width=device-width, initial-scale=1.0">
<body>
<?php require APPROOT . '/views/inc/admin_sidenavbar.php' ;?>
     
    <div class="home-content">
<div class="tab">
        <button class="tablink" onclick="openPage('drivers')" id="defaultOpen" >Drivers</button>
        <button class="tablink" onclick="openPage('Vehicle Suppliers')" >Vehicle Suppliers</button>
        <button class="tablink" onclick="openPage('parents')" >Parents</button>
        <button class="tablink" onclick="openPage('officeworkers')" >Office Workers</button>
    </div>   

    <div class="search-box">
        <input type="text" placeholder="Search...">
        <div class='bx bx-search' ></div>
      </div>

<div id="drivers" class="tabcontent">
  <div class="friend-list">
  <?php foreach($data['users'] as $user): ?>
    <div class="friend-card">
      
      <div class="friend-name"><img src="../public/img/us1.jpg" class="friend-picture" > <?php echo $user->name; ?> </div>
      <br>
      <br>
      <div class="friend-actions">
      <button class="details-button"><a href="<?php echo URLROOT?>/Admin/viewuser/<?php echo $user->us_id; ?>"> View details</a></button>
        
      </div>
    </div>
    <?php endforeach; ?>
    <!-- <div class="friend-card">
      
      <div class="friend-name"><img src="../public/img/us2.jpg" class="friend-picture" > Dan Fernando </div>
      <br>
      <br>
      <div class="friend-actions">
      <button class="details-button"> View details</button>
        
      </div>
    </div>
    <div class="friend-card">
      
      <div class="friend-name"><img src="../public/img/us3.jpg" class="friend-picture" > Sophia Aluthgama </div>
      <br>
      <br>
      <div class="friend-actions">
      <button class="details-button"> View details</button>
        
      </div>
    </div>
    <div class="friend-card">
      
      <div class="friend-name"><img src="../public/img/us4.jpg" class="friend-picture" > Minoli Perera </div>
      <br>
      <br>
      <div class="friend-actions">
      <button class="details-button"> View details</button>
        
      </div>
    </div>
    <div class="friend-card">
      
      <div class="friend-name"><img src="../public/img/us5.jpg" class="friend-picture" > Suchi Siriwardhana </div>
      <br>
      <br>
      <div class="friend-actions">
      <button class="details-button"> View details</button>
        
      </div>
    </div>

    <div class="friend-card">
      
      <div class="friend-name"><img src="../public/img/us6.jpg" class="friend-picture" > Wikim Gunathilaka </div>
      <br>
      <br>
      <div class="friend-actions">
      <button class="details-button"> View details</button>
        
      </div>
    </div> -->
  </div>
  
  
  </div>
  
</div>


    </body>




    <!--<?php require APPROOT . '/views/inc/footer.php'; ?>-->