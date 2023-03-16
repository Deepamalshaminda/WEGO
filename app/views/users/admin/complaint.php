<?php require APPROOT . '/views/inc/header.php'; ?>

<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/admin_dashboard.css">
<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/complaint.css">
<link rel="stylesheet" href="<?php echo URLROOT; ?>/js/list.js">
<title><?php echo SITENAME; ?></title>
<html>
</head>



<meta name="viewport" content="width=device-width, initial-scale=1.0">
<body>


<?php require APPROOT . '/views/inc/admin_sidenavbar.php' ;?>
     
    <div class="home-content">
      <div class="tab>
<button class="tablink" onclick="openPage('sendrequests')" id="defaultOpen" >Complaints</button>
</div>
<div class="search-box">
        <input type="text" placeholder="Search...">
        <div class='bx bx-search' ></div>
      </div>
<div id="Parentrequests" class="tabcontent">
  <div class="friend-list">
    <div class="friend-card">
      
      <div class="friend-name"><img src="../public/img/rr.png" class="friend-picture" >Richard Fernando 
     </div>
      <br>
      <br>
      <div class="friend-actions">
      <button class="details-button"><a href="<?php echo URLROOT?>/Admin/viewcomplaint"> View details</a></button>
        
        
      </div>
    </div>
    <div class="friend-card">
      
      <div class="friend-name"><img src="../public/img/kk.png" class="friend-picture" > Razal Fazal 
   </div>
      <br>
      <br>
      <div class="friend-actions">
      <button class="details-button"><a href="<?php echo URLROOT?>/Admin/viewcomplaint"> View details</a></button>
        
      </div>
    </div>
    <div class="friend-card">
      
      <div class="friend-name"><img src="../public/img/driver1.png" class="friend-picture" >John Fernando
    </div>
      <br>
      <br>
      <div class="friend-actions">
      <button class="details-button"><a href="<?php echo URLROOT?>/Admin/viewcomplaint"> View details</a></button>
        
      </div>
    </div>
    <div class="friend-card">
      
      <div class="friend-name"><img src="../public/img/man1.jpg" class="friend-picture" >Nadun Gamage
    </div>
      <br>
      <br>
      <div class="friend-actions">
      <button class="details-button"><a href="<?php echo URLROOT?>/Admin/viewcomplaint"> View details</a></button>
       
      </div>
    </div>
    
  </div>
  
  
  </div>

  
</div>

    </body>




    <!--<?php require APPROOT . '/views/inc/footer.php'; ?>-->