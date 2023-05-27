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
        <h6 class="name">Vehicle No <?php echo $data['rides']->vehicleno; ?></h6>
         <p class="name" >Driver ID  - <?php echo $data['rides']->driver_id; ?> </p>

         <br>
         
    </div>
    <div class="right">
        <div class="info"> 
            <h2>Information</h2>
            <br>
            <div class="info_data">
                 <div class="data">

                    <h4>Date  - <?php echo $data['rides']->date; ?></h4>

                    
                    <br>
                    <h4>Starting Place : <?php echo $data['rides']->start; ?></h4>
                    <br>
                    <h4>Starting Place : <?php echo $data['rides']->destination; ?></h4>

                    
                    <br>
                    <h4>No of Passengers  : <?php echo $data['rides']->no_of_passengers; ?></h4>
                  
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