<?php require APPROOT . '/views/inc/header.php'; ?>

<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/dashboard.css">
<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/earnings.css">

<title><?php echo SITENAME; ?></title>
<html>
</head>

<body>


<div class="sidebar">
    <div class="logo-details">
      <div class='bx bxl-c-plus-plus'></div>
      <span class="logo_name">&nbsp; WeGo</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="#">
            <div class='bx bx-grid-alt' ></div>
            <span class="links_name">&nbsp; Dashboard</span>
          </a>
        </li>
        <li>
          <a href="#" >
            <div class='bx bx-box' ></div>
            <span class="links_name">&nbsp; Parents</span>
          </a>
        </li>
        <li>
          <a href="#">
            <div class='bx bx-list-ul' ></div>
            <span class="links_name">&nbsp; Office Workers</span>
          </a>
        </li>
        <li>
          <a href="#">
            <div class='bx bx-pie-chart-alt-2' ></div>
            <span class="links_name">&nbsp; Rides</span>
          </a>
        </li>
        <li>
          <a href="#" >
            <div class='bx bx-coin-stack' ></div>
            <span class="links_name">&nbsp; Drivers</span>
          </a>
        </li>
        <li>
          <a href="#">
            <div class='bx bx-book-alt' ></div>
            <span class="links_name">&nbsp; Earnings</span>
          </a>
        </li>
        <li>
          <a href="#"  class="active">
            <div class='bx bx-user' ></div>
            <span class="links_name">&nbsp; Salaries</span>
          </a>
        </li>
        <li>
          <a href="#">
            <div class='bx bx-user' ></div>
            <span class="links_name">&nbsp; Reports</span>
          </a>
        </li>
        <li>
          <a href="#">
            <div class='bx bx-user' ></div>
            <span class="links_name">&nbsp; Vehicle Documents</span>
          </a>
        </li>
        <li>
          <a href="#">
            <div class='bx bx-user' ></div>
            <span class="links_name">&nbsp; Vehicle Maintenance</span>
          </a>
        </li>
        <li>
          <a href="#">
            <div class='bx bx-user' ></div>
            <span class="links_name">&nbsp; Driver Attendace</span>
          </a>
        </li>
        <li>
          <a href="#">
            <div class='bx bx-user' ></div>
            <span class="links_name">&nbsp; Vehicle Status</span>
          </a>
        </li>
        
        
        <!--<li class="log_out">
          <a href="#">
            <div class='bx bx-log-out'></div>
            <span class="links_name">&nbsp; Log out</span>
          </a>
        </li>-->
      </ul>
  </div>
  <div class="home-section">
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
        <span class="admin_name">Adam Fernando</span>
        <div class='bx bx-chevron-down' ></div>
      </div>
    </nav>
     
    <div class="home-content">
      <div class="pie-card">
      <h3>Salaries to be paid this month</h3>
      <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>
      <canvas id="pieChart"></canvas>
      <script>

   var ctx = document.getElementById("pieChart").getContext('2d');
   var pieChart = new Chart(ctx, {
      type: 'pie',
      data: {
         labels: ["Driver ID 002", "Driver ID 006", "Driver ID 012", "Driver ID 032", "Driver ID 008"],
         datasets: [{
            label: 'Salaries to be paid',
            data: [20000, 32000, 25000, 35000, 12000],
            backgroundColor: [
               'rgba(255, 99, 132, 0.2)',
               'rgba(54, 162, 235, 0.2)',
               'rgba(255, 206, 86, 0.2)',
               'rgba(115, 192, 192, 0.2)'
            ],
            borderColor: [
               'rgba(255,99,132,1)',
               'rgba(54, 162, 235, 1)',
               'rgba(255, 206, 86, 1)',
               'rgba(115, 192, 192, 1)'
            ],
            borderWidth: 1
         }]
      },
      options: {
         scales: {
            yAxes: [{
               ticks: {
                  beginAtZero:true
               }
            }]
         }
      }
   });
</script>

      </div>


      <div class="table-card"> 
<h3>Salary Payment History</h3>
      <table>
  <thead>
    <tr>
      <th>Month</th>
      <th>Driver ID</th>
      <th>Salary Amount</th>
      <th>Total Salary Expense of the Month</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>May</td>
      <td>Driver ID 002</td>
      <td>LKR 20,000</td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td>Driver ID 006</td>
      <td>LKR 22,000</td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td>Driver ID 012</td>
      <td>LKR 15,000</td>
      <td>LKR 90,000</td>
    </tr>
    <tr>
      <td></td>
      <td>Driver ID 032</td>
      <td>LKR 21,000</td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td>Driver ID 008</td>
      <td>LKR 12,000</td>
      <td></td>
    </tr>




    <tr>
      <td>April</td>
      <td>Driver ID 002</td>
      <td>LKR 14,000</td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td>Driver ID 006</td>
      <td>LKR 15,000</td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td>Driver ID 012</td>
      <td>LKR 19,000</td>
      <td>LKR 88,000</td>
    </tr>
    <tr>
      <td></td>
      <td>Driver ID 032</td>
      <td>LKR 23,000</td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td>Driver ID 008</td>
      <td>LKR 17,000</td>
      <td></td>
    </tr>



    <tr>
      <td>March</td>
      <td>Driver ID 002</td>
      <td>LKR 20,000</td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td>Driver ID 006</td>
      <td>LKR 18,000</td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td>Driver ID 012</td>
      <td>LKR 10,000</td>
      <td>LKR 79,000</td>
    </tr>
    <tr>
      <td></td>
      <td>Driver ID 032</td>
      <td>LKR 16,000</td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td>Driver ID 008</td>
      <td>LKR 15,000</td>
      <td></td>
    </tr>
  </tbody>
</table>


</body>




<?php require APPROOT . '/views/inc/footer.php'; ?>
