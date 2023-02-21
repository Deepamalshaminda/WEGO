<?php require APPROOT . '/views/inc/header.php'; ?>

<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/dashboard.css">
<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/p_prequest.css">
<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/viewvehicle.css">
<link rel="stylesheet" href="<?php echo URLROOT; ?>/js/list.js">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title><?php echo SITENAME; ?></title>
<html>
</head>



<meta name="viewport" content="width=device-width, initial-scale=1.0">
<body>



<?php require APPROOT . '/views/inc/sidenavbar.php' ;?>
     

<div class="wrapper">
    <div class="left">
        <img src ="../public/img/v1.png" 
        alt="user" width="100">
        <br>
        <h6 class="name">LB 5678 - Van(HIACE)</h6>
         <p class="name" >Driver</p>
         <br>
         <p class="name"><b>Overall Rating</b></p>
<div class="name"><span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span></div>
    </div>
    <div class="right">
        <div class="info"> 
            <h2>Information</h2>
            <br>
            <div class="info_data">
                 <div class="data">
                    <h4>Name(Driver) : Nadun Gamlath</h4>
                    
                    <br>
                    <h4>Route : Panadura - Moratuwa - Ratmalana - Mt. Lavinia (Galkissa) - Dehiwala</h4>
                    <br>
                    <h4>Departure time : 8.30 a.m.</h4>
                    <br>
                    <h4>Vehicle No. : LB 5678</h4>
                    <br>
                    <h4>Available Seats : 5</h4>
                    




                    <!--<p>Kevin Fernando</p>-->
                 </div>
                <!-- <div class="data">
                   <h4>Phone</h4>
                    <p>0001-213-998761</p>
              </div>-->
            </div>
        </div>
        <br>
      
      <div class="projects">
            
            <div class="projects_data">
                 <div class="data">
                 <button class="view-profile"><a href="<?php echo URLROOT?>/Viewdriverprofiles/viewdriverprofile"> View profile</a></button>
                    
                 </div>
                 <div class="data">
                   <button class="delete">Delete</h4>
                    
              </div>
            </div>
        </div>
      
        
    </div>
</div>

</body>
</html>


         

















    </body>




    <!--<?php require APPROOT . '/views/inc/footer.php'; ?>-->