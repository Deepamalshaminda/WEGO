<?php require APPROOT . '/views/inc/header.php'; ?>

<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/admin_dashboard.css">
<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/rideschedule.css">
<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/viewride.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title><?php echo SITENAME; ?></title>
<html>
</head>



<meta name="viewport" content="width=device-width, initial-scale=1.0">
<body>


<?php require APPROOT . '/views/inc/admin_sidenavbar.php' ;?>

<div class="wrapper">
    <div class="left">
        <img src ="../public/img/v5.png" 
        alt="user" width="100">
        <br>
        <h6 class="name">Vehicle No - PA 2456 <br> Van(HIACE)</h6>
         <p class="name" >Driver ID  -  008</p>
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
                    <h4>Date  - 2023/02/05</h4>
                    
                    <br>
                    <h4>Route : Panadura - Moratuwa - Ratmalana - Mt. Lavinia (Galkissa) - Dehiwala</h4>
                    <br>
                    <h4>End Time  - 9:00 AM</h4>
                    <br>
                    <h4>Available Seats : 5</h4>
                  
                </div>


                    
            </div>
        </div>
        <br>
      
      <div class="projects">
            
            <div class="projects_data">
                 <div class="data">
                 <button class="view-profile"><a href="<?php echo URLROOT?>/Viewdriverprofiles/viewdriverprofile">View Location</a></button>
                    
                 </div>
            </div>
        </div>
      
        
    </div>
</div>

</body>
</html>


         

















    </body>




    <!--<?php require APPROOT . '/views/inc/footer.php'; ?>-->