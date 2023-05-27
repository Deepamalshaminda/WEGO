<?php require APPROOT . '/views/inc/header.php'; ?>
<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/dashboard.css">
<link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
<title><?php echo SITENAME; ?></title>
</head>

<body>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <body>
    <?php require APPROOT . '/views/inc/sidebarnav.php'; ?>

    <div class="home-content">
      <br>
      <br>

      <!--<div class="overview-boxes">
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Drivers working today</div>
            <div class="number">10</div>

          </div>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">New Ride Requests</div>
            <div class="number">12</div>

          </div>


        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">New Parent Requests</div>
            <div class="number">10</div>

          </div>

        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">New Worker Requests</div>
            <div class="number">15</div>

          </div>-->

       

      <div class="sales-boxes">
        <div class="recent-sales box">
          <div class="title">Earnings Summary</div>
          <div> <canvas id="thisMonthIncome" height="400" width="600"></canvas></div>
        </div>

        <div class="map-card">
          <div class="driver-topic">
            Vehicle locations
          </div>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126743.63162574056!2d79.78616450128246!3d6.921833528266875!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae253d10f7a7003%3A0x320b2e4d32d3838d!2sColombo!5e0!3m2!1sen!2slk!4v1675796781445!5m2!1sen!2slk" width="420" height="450" style="border:0;" allowfullscreen></iframe>
        </div>

        <!-- <div><img class="map" src="../public/img/gmap.png "></div>-->

        <!--<div class="driver-details">
                <div class="driver-img">
                    <img class="profile-img" src="../public/img/profile.png">
                </div>
                <div class="driver-name">
                    <label>Sheron Kingsley</label>
                </div>
            </div>

            <div class="driver-details">
                <div class="driver-img">
                    <img class="profile-img" src="../public/img/profile.png">
                </div>
                <div class="driver-name">
                    <label>Roshen Perera</label>
                </div>
            </div>

            <div class="driver-details">
                <div class="driver-img">
                    <img class="profile-img" src="../public/img/profile.png">
                </div>
                <div class="driver-name">
                    <label>Razal Mohomed</label>
                </div>
            </div>

            <div class="driver-details">
                <div class="driver-img">
                    <img class="profile-img" src="../public/img/profile.png">
                </div>
                <div class="driver-name">
                    <label>Dave Fernando</label>
                </div>
            </div>

            <div class="driver-details">
                <div class="driver-img">
                    <img class="profile-img" src="../public/img/profile.png">
                </div>
                <div class="driver-name">
                    <label>Chamel Perera</label>
                </div>
            </div>

            <div class="driver-details">
                <div class="driver-img">
                    <img class="profile-img" src="../public/img/profile.png">
                </div>
                <div class="driver-name">
                    <label>Troy Bolton</label>
                </div>
            </div>-->
      </div>
    </div>




    </div>
    </div>
    <div class="join">
      <div class="card2">
        <a href="<?php echo URLROOT ?>/Vehicles/addvehicle"><button class="addfunctions">Add a new vehicle</button></a><br>
        <br>
        <div><img class="add" src="../public/img/add ve.jpg"></div>
      </div>
      <!-- </div> -->
      

       


    </div>

    </div>
    </div>
    </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.3.2/dist/chart.min.js"></script>
    <script>
      var ctx = document.getElementById('thisMonthIncome').getContext('2d');
      var chart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: <?php echo json_encode($data['dates']); ?>,
          datasets: [{
            label: 'Earnings',
            data: <?php echo json_encode($data['amounts']); ?>,
            borderColor: 'rgba(255, 99, 132, 1)',
            borderWidth: 1
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

  </body>
  <?php require APPROOT . '/views/inc/footer.php'; ?>