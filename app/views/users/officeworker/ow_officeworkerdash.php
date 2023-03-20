<?php require APPROOT . '/views/inc/header.php'; ?>
<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/o_dashboard.css">
<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/nav.css">
  <title><?php echo SITENAME; ?></title>
</head>
<body>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
<?php require APPROOT.'/views/inc/navbar.php';?>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <div class='bx bx-menu sidebarBtn'></div>
        
      </div>
      <div class="search-box">
        <input type="text" placeholder="Search...">
        <div class='bx bx-search' ></div>
      </div>
      <div class="profile-details">
        <!-- //<img src="../public/img/images.png" alt=""> -->
        <span class="admin_name">Ishini Amandi</span>
        <div class='bx bx-chevron-down' ></div>
      </div>
    </nav>

    <div class="home-content">
      <div class="overview-boxes">
        <!--  --<div class="box">
          <div class="right-side">
            <div class="box-topic-link"><a href="<?php echo URLROOT?>/Parents/addchild"> add child</a></div>
            <div class="number">10</div>-->
            
        <!-- </div>
        </div>> -->
        <!-- <div class="box">
          <div class="right-side">
            <div class="box-topic-link"><a href="<?php echo URLROOT?>/Addedchildren/addedchildren"> Your added children</a></div>
            <div class="number">12</div>-->
          
          <!-- </div>
          
          
        </div> --> 
        <div class="box">
          <div class="right-side">
            <div class="box-topic-link"><a href="<?php echo URLROOT?>/OW_Sentrequests/sentrequest"> Sent requests </a></div>
            <!-- <div class="number">10</div>-->
            
          </div>
          
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic-link"><a href="<?php echo URLROOT?>/OW_Madereservations/madereservation"> Reservations made</a></div>
            <!--<div class="number">15</div>-->
        
          </div>
          
        </div>
      </div>

      <div class="sales-boxes">
        <div class="recent-sales box">
          <div class="title">Attendence Summary</div>
          <div><img class="earn" src="../public/img/graph.png"></div>
        </div>
        
        <div class="card">
            <div class="driver-topic">
                Drivers near you
            </div>
            
            <div class="driver-details">
                <div class="driver-img">
                    <img class="profile-img" src="../public/img/v1.png">
                </div>
                <div class="driver-name">
                    <label>Colombo-Kandy</label>
                </div>
            </div>

            <div class="driver-details">
                <div class="driver-img">
                    <img class="profile-img" src="../public/img/v2.png">
                </div>
                <div class="driver-name">
                    <label>Galle-Colombo</label>
                </div>
            </div>

            <div class="driver-details">
                <div class="driver-img">
                    <img class="profile-img" src="../public/img/v3.png">
                </div>
                <div class="driver-name">
                    <label>Kandy-Galle</label>
                </div>
            </div>

            <div class="driver-details">
                <div class="driver-img">
                    <img class="profile-img" src="../public/img/v4.png">
                </div>
                <div class="driver-name">
                    <label>Matara-Kandy</label>
                </div>
            </div>

            <div class="driver-details">
                <div class="driver-img">
                    <img class="profile-img" src="../public/img/v5.png">
                </div>
                <div class="driver-name">
                    <label>Pettah-Kandy</label>
                </div>
            </div>

            <div class="driver-details">
                <div class="driver-img">
                    <img class="profile-img" src="../public/img/v6.png">
                </div>
                <div class="driver-name">
                    <label>Matara-Pettah</label>
                </div>
            </div>
        </div>
    </div>
                
          

            
        </div>  
</div>
<!-- <div class="join">
   <div class="card2">
            <a href="<?php echo URLROOT?>/Vehicles/addvehicle"><button class="addfunctions"  >Add a new vehicle</button></a><br>
            <br>
            <div><img class="add" src="../public/img/add ve.jpg"></div>
    </div>
        
    <div class="card2">
            <div class="addfunctions">My Vehicles</div>
            <div class="number">06</div>
            <div><img class="add" src="../public/img/car.png"></div>
            
          </div>-->
          
          
      
   </div>
         
      </div>
    </div>
</div>
  </section>

  

</body>
<?php require APPROOT . '/views/inc/footer.php'; ?>

 
   