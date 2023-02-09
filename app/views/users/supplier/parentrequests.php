<?php require APPROOT . '/views/inc/header.php'; ?>

<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/dashboard.css">
<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/prequest.css">
<script type="text/javascript" src="<?php echo URLROOT; ?>/js/list.js"></script>
<title><?php echo SITENAME; ?></title>
<html>
</head>


<body>


<?php require APPROOT . '/views/inc/sidebarnav.php' ;?>
     
    <div class="home-content">
<button class="tablink" onclick="openPage('Parentrequests')" id="defaultOpen" >Parent Requests</button>
<button class="tablink" onclick="openPage('PAccepted')" >Accepted Parent Requests</button>

<div id="Parentrequests" class="tabcontent">
  <div class="friend-list">
    <div class="friend-card">
      
      <div class="friend-name"><img src="../public/img/ac1.png" class="friend-picture" >Sheron Kingsley</div>
      <br>
      <br>
      <div class="friend-actions">
        <button class="accept-button">Accept</button>
        <button class="delete-button">Delete</button>
      </div>
    </div>
    <div class="friend-card">
      
      <div class="friend-name"><img src="../public/img/ac8.png " class="friend-picture" >Jane De Silva</div> 
      <br>
      <br>
      <div class="friend-actions">
        <button class="accept-button">Accept</button>
        <button class="delete-button">Delete</button>
      </div>
    </div>
    <div class="friend-card">
      
      <div class="friend-name"><img src="../public/img/o1.png" class="friend-picture" >Anne De Zoysa</div>
      <br>
      <br>
      <div class="friend-actions">
        <button class="accept-button">Accept</button>
        <button class="delete-button">Delete</button>
      </div>
    </div>
    <div class="friend-card">
      
      <div class="friend-name"><img src="../public/img/w1.png" class="friend-picture" >John Fernando</div>
      <br>
      <br>
      <div class="friend-actions">
        <button class="accept-button">Accept</button>
        <button class="delete-button">Delete</button>
      </div>
    </div>
    <div class="friend-card">
      
      <div class="friend-name"><img src="../public/img/o6.png" class="friend-picture" >George Perera</div>
      <br>
      <br>
      <div class="friend-actions">
        <button class="accept-button">Accept</button>
        <button class="delete-button">Delete</button>
      </div>
    </div>

    <div class="friend-card">
      
      <div class="friend-name"><img src="../public/img/w5.png" class="friend-picture" >Melissa De Silva</div>
      <br>
      <br>
      <div class="friend-actions">
        <button class="accept-button">Accept</button>
        <button class="delete-button">Delete</button>
      </div>
    </div>
  </div>
  
  
  </div>

<div id="PAccepted" class="tabcontent">
  <div class="friend-list">
    <div class="friend-card">
      
      <div class="friend-name"><img src="../public/img/p4.png" class="friend-picture" >Adam Awishka</div>
      <br>
      <br>
      <div class="friend-actions">
        <button class="details-button">View Details</button>
       
      </div>
    </div>
    <div class="friend-card">
      
      <div class="friend-name"><img src="../public/img/p8.png" class="friend-picture" >Susan Perera</div>
      <br>
      <br>
      <div class="friend-actions">
        <button class="details-button">View Details</button>
      </div>
    </div>
    <div class="friend-card">
      
      <div class="friend-name"><img src="../public/img/p7.png" class="friend-picture" >Arthur Fernando</div>
      <br>
      <br>
      <div class="friend-actions">
        <button class="details-button">View Details</button>
      </div>
    </div>
    <div class="friend-card">
      
      <div class="friend-name"><img src="../public/img/ac4.png" class="friend-picture" >Peter Perera</div>
      <br>
      <br>
      <div class="friend-actions">
        <button class="details-button">View Details</button>
      </div>
    </div>
  
</div>



    </body>




    <?php require APPROOT . '/views/inc/footer.php'; ?>