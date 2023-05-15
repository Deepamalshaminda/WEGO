<?php require APPROOT . '/views/inc/header.php'; ?>
<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/p_dashboard.css">
<title><?php echo SITENAME; ?></title>
</head>

<body>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>

  <body>

    <?php require APPROOT . '/views/inc/sidenavbar.php'; ?>


    <div class="home-content">
      <div class="overview-boxes">
        <div class="box">
          <div class="right-side">
            <div class="box-topic-link"><a href="<?php echo URLROOT ?>/Parents/addchild"> Add child</a></div>
            <!--<div class="number">10</div>-->

          </div>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic-link"><a href="<?php echo URLROOT ?>/Parents/getChildren"> Your children</a></div>
            <!-- <div class="number">12</div>-->

          </div>


        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic-link"><a href="<?php echo URLROOT ?>/Sendrequests/getSentRequests"> Sent requests </a></div>
            <!-- <div class="number">10</div>-->

          </div>

        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic-link"><a href="<?php echo URLROOT ?>/Madereservations/madereservation"> Reservations made</a></div>
            <!--<div class="number">15</div>-->

          </div>

        </div>
      </div>

      <div class="sales-boxes">
        <div class="recent-sales box">
          <div class="title">Attendence Summery</div>
          <div class="graph-card">
            <h3 class="summery">Attendence summery of last month</h3>
            <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>


            <canvas id="myChart"></canvas>
            <script>
              <?php
              $data = [4, 3, 5, 4, 3, 1, 5];
              ?>
              var ctx = document.getElementById('myChart').getContext('2d');
              var chart = new Chart(ctx, {
                type: 'bar',
                data: {
                  labels: ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saterday', 'Sunday'],
                  datasets: [{
                    label: 'Attendace',
                    data: <?php echo json_encode($data) ?>,
                    backgroundColor: 'rgba(0, 116, 203, 0.35)',
                    borderColor: 'rgba(0, 140, 214, 1)',
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

          </div>
        </div>

        <div class="card">
          <div class="driver-topic">
            Drivers near you
          </div>
          <div class="driver-card">
            <div class="driver-details">
              <div class="driver-img">
                <img class="profile-img" src="../public/img/v1.png">
              </div>
              <div class="driver-name">
                <label><a href="<?php echo URLROOT ?>/Viewsentrequests/viewsentrequest"> Colombo-Kandy</a></label>
              </div>
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
            <a href="<?php echo URLROOT ?>/Vehicles/addvehicle"><button class="addfunctions"  >Add a new vehicle</button></a><br>
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