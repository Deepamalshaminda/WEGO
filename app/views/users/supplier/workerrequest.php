<?php require APPROOT . '/views/inc/header.php'; ?>

<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/dashboard.css">
<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/prequest.css">
<script type="text/javascript" src="<?php echo URLROOT; ?>/js/list.js"></script>
<body>
<title><?php echo SITENAME; ?></title>
<html>
</head>




<?php require APPROOT . '/views/inc/sidebarnav.php' ;?>
     
    <div class="home-content">
<button class="tablink" onclick="openPage('workerrequest')" id="defaultOpen" >Office Worker Requests</button>
<button class="tablink" onclick="openPage('WAccepted')" >Accepted Worker Requests</button>

<div id="workerrequest" class="tabcontent">
  <div class="friend-list">
    <div class="friend-card">
      
      <div class="friend-name"><img src="../public/img/p1.png" class="friend-picture" >Michelle Fernando</div>
      <br>
      <br>
      <div class="friend-actions">
        <button class="accept-button">Accept</button>
        <button class="delete-button">Delete</button>
      </div>
    </div>
    <div class="friend-card">
      
      <div class="friend-name"><img src="../public/img/p2.jpg" class="friend-picture" >Gabriella De Silva</div>
      <br>
      <br>
      <div class="friend-actions">
        <button class="accept-button">Accept</button>
        <button class="delete-button">Delete</button>
      </div>
    </div>
    <div class="friend-card">
      
      <div class="friend-name"><img src="../public/img/m1.png" class="friend-picture" >John De Zoysa</div>
      <br>
      <br>
      <div class="friend-actions">
        <button class="accept-button">Accept</button>
        <button class="delete-button">Delete</button>
      </div>
    </div>
    <div class="friend-card">
      
      <div class="friend-name"><img src="../public/img/m2.png" class="friend-picture" >James Perera</div>
      <br>
      <br>
      <div class="friend-actions">
        <button class="accept-button">Accept</button>
        <button class="delete-button">Delete</button>
      </div>
    </div>
    <div class="friend-card">
      
      <div class="friend-name"><img src="../public/img/vs round.png" class="friend-picture" >Zain Malik</div>
      <br>
      <br>
      <div class="friend-actions">
        <button class="accept-button">Accept</button>
        <button class="delete-button">Delete</button>
      </div>
    </div>


  </div>
  
  
  </div>

<div id="WAccepted" class="tabcontent">
  <div class="friend-list">
    <div class="friend-card">
      
      <div class="friend-name"><img src="../public/img/m3.png" class="friend-picture" >Joel De Mel</div>
      <br>
      <br>
      <div class="friend-actions">
        <button class="details-button">View Details</button>
       
      </div>
    </div>
    <div class="friend-card">
      
      <div class="friend-name"><img src="../public/img/m4.png" class="friend-picture" >Sunil Perera</div>
      <br>
      <br>
      <div class="friend-actions">
        <button class="details-button">View Details</button>
      </div>
    </div>
    <div class="friend-card">
      
      <div class="friend-name"><img src="../public/img/ac6.png" class="friend-picture" >Zac Fernando</div>
      <br>
      <br>
      <div class="friend-actions">
        <button class="details-button">View Details</button>
      </div>
    </div>
    <div class="friend-card">
      
      <div class="friend-name"><img src="../public/img/ac7.png" class="friend-picture" >Prakash Sivakumar</div>
      <br>
      <br>
      <div class="friend-actions">
        <button class="details-button">View Details</button>
      </div>
    </div>

    <div class="friend-card">
      
        <div class="friend-name"><img src="../public/img/o3.png" class="friend-picture" >Peter Parker</div>
        <br>
        <br>
        <div class="friend-actions">
          <button class="details-button">View Details</button>
        </div>
      </div>

      <div class="friend-card">
      
        <div class="friend-name"><img src="../public/img/w7.png" class="friend-picture" >Jesica De Silva</div>
        <br>
        <br>
        <div class="friend-actions">
          <button class="details-button">View Details</button>
        </div>
      </div>
  
</div>

<?php require APPROOT . '/views/inc/footer.php'; ?>


         
















   


    </body>




    <!--<?php require APPROOT . '/views/inc/footer.php'; ?>-->