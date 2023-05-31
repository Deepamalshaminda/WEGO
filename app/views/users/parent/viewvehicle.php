<?php require APPROOT . '/views/inc/header.php'; ?>

<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/dashboard.css">
<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/p_prequest.css">
<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/viewchildren.css">
<link rel="stylesheet" href="<?php echo URLROOT; ?>/js/list.js">
<title><?php echo SITENAME; ?></title>
<html>
</head>



<meta name="viewport" content="width=device-width, initial-scale=1.0">

<body>


    <?php require APPROOT . '/views/inc/sidenavbar.php'; ?>



    </div>

    <div class="wrapper">
        <div class="left">
            <img src="../public/img/ch2.png" alt="user" width="100">
            <h4><?php echo $data['vehicle']->ve_id ?></h4>
            <p>School service.</p>
        </div>
        <div class="right">
            <div class="info">
                <h2>Information</h2>
                <br>
                <div class="info_data">
                    <div class="data">
                        <h4>Vehicle no : <?php echo $data['vehicle']->vehicleno ?></h4>
                        <br>
                        <h4>Model : <?php echo $data['vehicle']->model ?></h4>
                        <br>
                        <h4>Route : <?php echo $data['vehicle']->route ?></h4>
                        <br>
                        <h4>Start time : <?php echo $data['vehicle']->starttime ?></h4>
                        <br>
                        <h4>Ac/nonAC : <?php echo $data['vehicle']->Ac ?></h4>
                        
              <br>
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
                        <form action="<?php echo URLROOT; ?>/D_ConnectionRequests/riderRequest" method="post">
                            
                             
                            <input type="text" name="to_whom" value="<?php echo $data['vehicle']->ve_id ?>" hidden>
                            <button class="delete">Send request</a></button>
                        </form>

                    </div>
                    
                </div>
            </div>


        </div>
    </div>

</body>

</html>




















</body>




<!--<?php require APPROOT . '/views/inc/footer.php'; ?>-->