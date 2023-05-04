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
    <img src ="../public/img/us1.jpg" 
        alt="user" width="100">
        <h4> <?php echo $data['users']->name; ?> </h4>
         <p> <?php echo $data['users']->role_id; ?> </p>
    </div>
    <div class="right">
        <div class="info">
            <h2>Information</h2>
            <br>
            <div class="info_data">
                 <div class="data">
                    <h4>Name : <?php echo $data['users']->name; ?> </h4>
                    <br>
                    <h4>Gender : <?php echo $data['users']->gender; ?> </h4>
                    <br>
                    <h4>NIC : <?php echo $data['users']->nic; ?> </h4>
                    <br>
                    <h4>DOB : <?php echo $data['users']->dob; ?> </h4>
                    <br>
                    <h4>Gender : <?php echo $data['users']->gender; ?> </h4>
                    <br>
                    <h4>Address : <?php echo $data['users']->address; ?> </h4>
                    <br>
                    <h4>Email : <?php echo $data['users']->email; ?> </h4>
                    

                 </div>
                
            </div>
        </div>
        <br>
      
    
            
            <div class="projects_data">
                 <div class="data">
                    <button class="suspend">Suspend Account</button>
                    
                 </div>
                 
            </div>
      
        
    </div>
</div>

</body>
</html>


         

















    </body>




    <!--<?php require APPROOT . '/views/inc/footer.php'; ?>-->