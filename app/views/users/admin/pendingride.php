<?php require APPROOT . '/views/inc/header.php'; ?>

<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/admin_dashboard.css">
<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/rideschedule.css">
<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/dropdown.css">
<link rel="stylesheet" href="<?php echo URLROOT; ?>/js/dropdown.js">



<title><?php echo SITENAME; ?></title>
<html>
</head>



<meta name="viewport" content="width=device-width, initial-scale=1.0">
<body>


<?php require APPROOT . '/views/inc/admin_sidenavbar.php' ;?>
     
    <div class="home-content">
    <div class="select-menu">
    <div class="select-btn">
            <span class="sBtn-text"> Rides <img src="../public/img/chevron-down-regular-24.png"> </span>
            
        </div>
        <ul class="options">
            <li class="option">
                <i class="view"></i>
                <span class="option-text"><a href="<?php echo URLROOT?>/Admin/pendingride"> Pending </span>
            </li>
            <li class="option">
                <i class="view"></i>
                <span class="option-text"> Ongoing </span>
            </li>
            <li class="option">
                <i class="view"></i>
                <span class="option-text"> Finished </span>
            </li>
        </ul>
        <script>
          const optionMenu = document.querySelector(".select-menu"),
selectBtn = optionMenu.querySelector(".select-btn"),
options = optionMenu.querySelectorAll(".option"),
sBtn_text = optionMenu.querySelector(".sBtn-text");

selectBtn.addEventListener("click" , () => optionMenu.classList.toggle("active"));

options.forEach(option =>{
    option.addEventListener("click" , ()=>{
        let selectedOption = option.querySelector(".option-text").innerText;
        sBtn_text.innerText = selectedOption;


        optionMenu.classList.remove("active")
        
    })
    
})
</script>
</div>
<br><br><br>

<div id="rideschedule" class="tabcontent">
  <div class="friend-list">
    <div class="friend-card">
      
      <div class="friend-name"><img src="../public/img/v1.png" class="friend-picture" >Route : Colombo-Kandy</div>
      <br>
      <br>
      <div class="friend-actions">
      <button class="details-button"><a href="<?php echo URLROOT?>/Viewrides/viewride"> Ride details</a></button>
        
      </div>
    </div>
    <div class="friend-card">
      
      <div class="friend-name"><img src="../public/img/v2.png" class="friend-picture" >Route : Galle-Kandy</div>
      <br>
      <br>
      <div class="friend-actions">
      <button class="details-button">Ride details</button>
        
      </div>
    </div>
    <div class="friend-card">
      
      <div class="friend-name"><img src="../public/img/v3.png" class="friend-picture" >Route : Pettah-Nugegoda</div>
      <br>
      <br>
      <div class="friend-actions">
      <button class="details-button">Ride details</button>
        
      </div>
    </div>
    <div class="friend-card">
      
      <div class="friend-name"><img src="../public/img/v4.png" class="friend-picture" >Route : Kandy-Colombo</div>
      <br>
      <br>
      <div class="friend-actions">
      <button class="details-button">Ride details</button>
        
      </div>
    </div>
    <div class="friend-card">
      
      <div class="friend-name"><img src="../public/img/v5.png" class="friend-picture" >Route : Negombo-Kandy</div>
      <br>
      <br>
      <div class="friend-actions">
      <button class="details-button">Ride details</button>
        
      </div>
    </div>

    <div class="friend-card">
      
      <div class="friend-name"><img src="../public/img/v6.png" class="friend-picture" >Route : Pettah-Negombo</div>
      <br>
      <br>
      <div class="friend-actions">
      <button class="details-button">Ride details</button>
        
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