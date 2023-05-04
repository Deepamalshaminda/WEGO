s<?php require APPROOT . '/views/inc/header.php'; ?>

<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/dashboard.css">
<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/p_prequest.css">
<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/viewchildren.css">
<link rel="stylesheet" href="<?php echo URLROOT; ?>/js/list.js">
<title><?php echo SITENAME; ?></title>
<html>
</head>



<meta name="viewport" content="width=device-width, initial-scale=1.0">
<body>


<?php require APPROOT . '/views/inc/sidenavbar.php' ;?>
     
   
  
</div>

<div class="wrapper">
    <div class="left">
        <img src ="../public/img/ch2.png" 
        alt="user" width="100">
        <h4><?php echo $data['child']->name ?></h4>
         <p>Student</p>
    </div>
    <div class="right">
        <div class="info">
            <h2>Information</h2>
            <br>
            <div class="info_data">
                 <div class="data">
                    <h4>Name : <?php echo $data['child']->name ?></h4>
                    <br>
                    <h4>School : <?php echo $data['child']->school ?></h4>
                    <br>
                    <h4>Address : <?php echo $data['child']->school_address ?></h4>
                    <br>
                    <h4>DOB : <?php echo $data['child']->dob ?></h4>
                    <br>
                    <h4>Gender : <?php echo $data['child']->gender ?></h4>
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
                 <button class="delete"><a href="<?php echo URLROOT?>/Parents/editChild/<?php echo$data['child']->id ?>">Edit child</a></button> 
                    
                 </div>
                 <div class="data">
                   <button class="delete"><a href="<?php echo URLROOT?>/Parents/deleteChild/<?php echo$data['child']->id ?>">Delele child</a></button> 
              </div>
            </div>
        </div>
      
        
    </div>
</div>

</body>
</html>


         

















    </body>




    <!--<?php require APPROOT . '/views/inc/footer.php'; ?>-->