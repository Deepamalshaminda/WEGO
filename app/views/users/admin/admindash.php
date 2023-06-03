<?php require APPROOT . '/views/inc/header.php'; ?>
<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/admin_dashboard.css">
<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/graphstyle.css">
  <title><?php echo SITENAME; ?></title>
</head>
<body>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>

<?php require APPROOT . '/views/inc/admin_sidenavbar.php' ;?>

    <div class="home-content">
      <div class="overview-boxes">
        <div class="box">
          <div class="right-side">
            <div class="box-topic-link"> Rides</div>
            <div class="number"> <?php echo($data["total_rides"]); ?> </div>
            
            
        </div>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic-link"> Vehicles </div>
           <div class="number">  <?php echo($data["total_vehicles"]); ?>  </div>
          
          </div>
          
          
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic-link"> Total No of Users </div>
           <div class="number">  <?php echo($data["total_users"]); ?>  </div>
          
          </div>
          
          
        </div>
        
      </div>


     <div class="sales-boxes">
        <div class="recent-sales box">
          <div class="title">Transactions Summary</div>
          <div class="graph-card">
      <h3 class="summery">Transactions Summary of last week</h3>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>
  
  
    <canvas id="myChart"></canvas>
    <script>
      
      <?php
        $data = [14, 13, 15, 14, 13, 10 , 15];
      ?>
      var ctx = document.getElementById('myChart').getContext('2d');
      var chart = new Chart(ctx, {
        type: 'bar',
        data: {
          labels: ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saterday' , 'Sunday'],
          datasets: [{
            label: 'Transaction',
            data: <?php echo json_encode($data) ?>,
            backgroundColor: 'rgba(52, 45, 113)',
            borderColor: 'rgba(0, 116, 203, 0.35)',
            borderWidth: 0
            
            
          }]
        },
        options: {
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero: true
              }
            }]
          }
        }
      });
    </script>
          
        </div></div>
          
        
        <div class="card">
            <div class="driver-topic">
            Users
            </div>
            
            <div class="driver-details">
                <div class="driver-img">
                    <img class="profile-img" src="../public/img/kk.png">
                </div>
                <div class="driver-name">
                    <label>Priyantha Jayalal</label>
                </div>
            </div>

            <div class="driver-details">
                <div class="driver-img">
                    <img class="profile-img" src="../public/img/images.png">
                </div>
                <div class="driver-name">
                    <label> Tony Weerasingha </label>
                </div>
            </div>

            <div class="driver-details">
                <div class="driver-img">
                    <img class="profile-img" src="../public/img/driver1.png">
                </div>
                <div class="driver-name">
                    <label> John Perera</label>
                </div>
            </div>

            <div class="driver-details">
                <div class="driver-img">
                    <img class="profile-img" src="../public/img/profile.png">
                </div>
                <div class="driver-name">
                    <label>Samanthi Piris </label>
                </div>
            </div>

            <div class="driver-details">
                <div class="driver-img">
                    <img class="profile-img" src="../public/img/man1.jpg">
                </div>
                <div class="driver-name">
                    <label> Sahan Iddagoda </label>
                </div>
            </div>

            <div class="driver-details">
                <div class="driver-img">
                    <img class="profile-img" src="../public/img/rr.png">
                </div>
                <div class="driver-name">
                    <label>Peshala Kumara</label>
                </div>
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

 
   