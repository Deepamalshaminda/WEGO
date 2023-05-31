<?php require APPROOT . '/views/inc/header.php'; ?>

<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/admin_dashboard.css">
<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/viewuser.css">
<link rel="stylesheet" href="<?php echo URLROOT; ?>/js/tab.js">
<title><?php echo SITENAME; ?></title>
<html>
</head>



<meta name="viewport" content="width=device-width, initial-scale=1.0">
<body>


<?php require APPROOT . '/views/inc/admin_sidenavbar.php' ;?>
     
   
  
</div>

<div class="wrapper">
    <div class="left">
        <img src ="../public/img/v3.png" 
        alt="user" width="100">
        <h4> Added By: <?php echo $data['vehicle']->name; ?> </h4>
        <br>
        <h4> Vehicle No:<br><?php echo $data['vehicle']->vehicleno; ?> <h4>
    </div>
    <div class="right">
        <div class="info">
            <h2>Information</h2>
            <br>
            <div class="info_data">
                 <div class="data">

                    <h4>Vehicle Type : Car </h4>
                    <br>
                    <h4>Vehicle Model : <?php echo $data['vehicle']->model; ?></h4>
                    <br>
                    <h4>Color: <?php echo $data['vehicle']->color; ?></h4>
                    <br>
                    <h4>AC/Non AC : <?php echo $data['vehicle']->Ac; ?></h4>
                    <br>
                    <h4>Year : <?php echo $data['vehicle']->year; ?> </h4>
                    <br>
                    <h4>Seating Capacity : <?php echo $data['vehicle']->seatingcapacity; ?> </h4>
                    <br>
                    <h4>Insurance Card : Valid </h4>
                    <br>
                    <h4>Vehicle Book : Valid</h4>   

                 </div>
                
            </div>
        </div>
        <br>
      
    
            
            
      
        
    </div>
</div>

</body>
</html>


         

















    </body>




    <!--<?php require APPROOT . '/views/inc/footer.php'; ?>-->