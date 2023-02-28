<?php require APPROOT . '/views/inc/header.php'; ?>

<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/dashboard.css">
<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/p_prequest.css">
<link rel="stylesheet" href="<?php echo URLROOT; ?>/js/list.js">
<title><?php echo SITENAME; ?></title>
<html>
</head>



<meta name="viewport" content="width=device-width, initial-scale=1.0">
<body>



<?php require APPROOT . '/views/inc/sidenavbar.php' ;?>
     
     
    <div class="home-content">
<button class="tablink" onclick="openPage('sendrequests')" id="defaultOpen" >Reserve your vehicle here..</button>
<!--<button class="tablink" onclick="openPage('PAccepted')" >Sent Requests</button>-->

<div id="Parentrequests" class="tabcontent">
  <div class="friend-list">
    <div class="friend-card">
      
      <div class="friend-name"><img src="../public/img/v6.png" class="friend-picture" >Route : Colombo-Kandy</div>
      <br>
      <br>
      <div class="friend-actions">
        <button class="accept-button"><a href="<?php echo URLROOT?>/Viewsentrequests/viewsentrequest"> View</a></button>
        <button class="delete-button">Delete</button>
      </div>
    </div>
    <div class="friend-card">
      
      <div class="friend-name"><img src="../public/img/v7.png" class="friend-picture" >Route : Galle-Kandy</div>
      <br>
      <br>
      <div class="friend-actions">
        <button class="accept-button">View</button>
        <button class="delete-button">Delete</button>
      </div>
    </div>
    <div class="friend-card">
      
      <div class="friend-name"><img src="../public/img/v8.png" class="friend-picture" >Route : Pettah-Nugegoda</div>
      <br>
      <br>
      <div class="friend-actions">
        <button class="accept-button">View</button>
        <button class="delete-button">Delete</button>
      </div>
    </div>
    <div class="friend-card">
      
      <div class="friend-name"><img src="../public/img/v9.png" class="friend-picture" >Route : Kandy-Colombo</div>
      <br>
      <br>
      <div class="friend-actions">
        <button class="accept-button">View</button>
        <button class="delete-button">Delete</button>
      </div>
    </div>
    <div class="friend-card">
      
      <div class="friend-name"><img src="../public/img/v10.png" class="friend-picture" >Route : Negombo-Kandy</div>
      <br>
      <br>
      <div class="friend-actions">
        <button class="accept-button">View</button>
        <button class="delete-button">Delete</button>
      </div>
    </div>

    <div class="friend-card">
      
      <div class="friend-name"><img src="../public/img/v12.png" class="friend-picture" >Route : Pettah-Negombo</div>
      <br>
      <br>
      <div class="friend-actions">
        <button class="accept-button">View</button>
        <button class="delete-button">Delete</button>
      </div>
    </div>
  </div>
  
  
  </div>

<!--<div id="PAccepted" class="tabcontent">
  <div class="friend-list">
    <div class="friend-card">
      
      <div class="friend-name"><img src="p4.png" class="friend-picture" >Adam Awishka</div>
      <br>
      <br>
      <div class="friend-actions">
        <button class="details-button">View Details</button>
       
      </div>
    </div>
    <div class="friend-card">
      
      <div class="friend-name"><img src="p8.png" class="friend-picture" >Susan Perera</div>
      <br>
      <br>
      <div class="friend-actions">
        <button class="details-button">View Details</button>
      </div>
    </div>
    <div class="friend-card">
      
      <div class="friend-name"><img src="p7.png" class="friend-picture" >Arthur Fernando</div>
      <br>
      <br>
      <div class="friend-actions">
        <button class="details-button">View Details</button>
      </div>
    </div>
    <div class="friend-card">
      
      <div class="friend-name"><img src="ac4.png" class="friend-picture" >Peter Perera</div>
      <br>
      <br>
      <div class="friend-actions">
        <button class="details-button">View Details</button>
      </div>
    </div>-->
  
</div>


         

















    </body>




    <!--<?php require APPROOT . '/views/inc/footer.php'; ?>-->