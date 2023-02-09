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
          <a href="#"  class="active">
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
          <a href="#">
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
    
    <div class="graph-card">
      <h3>Earnings of last six months</h3>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>
  
  
    <canvas id="myChart"></canvas>
    <script>
      <?php
        $data = [70000, 75000, 80000, 75000, 96000, 100000];
      ?>
      var ctx = document.getElementById('myChart').getContext('2d');
      var chart = new Chart(ctx, {
        type: 'bar',
        data: {
          labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
          datasets: [{
            label: 'Earnings',
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
   
    <div class="total-card">
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>
    <canvas id="myDonutChart"></canvas>


    
    </div>


    
 <div class="table-card"> 
<h3>Earnings in this month</h3>

<table>
  <tr>
    <th>Vehicle ID</th>
    <th>User ID & Name</th>
    <th>Amount Paid</th>
    <th>Total Earning</th>
  </tr>
  <tr>
    <td>Vehicle ID 001</td>
    <td>P_ID 002 - James Perera</td>
    <td>LKR 2000</td>
    <td></td>
    
  </tr>
  <tr>
    <td></td>
    <td>P_ID 004 - Christina De Silva</td>
    <td>LKR 3500</td>
    <td></td>
    
  </tr>
  <tr>
    <td></td>
    <td>P_ID 009 - Devin Fazal</td>
    <td>LKR 2500</td>
    <td></td>
    <td></td>
    
  </tr>
  <tr>
    <td></td>
    <td>P_ID 034 - Steve Fernando</td>
    <td>LKR 3800</td>
    <td>LKR 28,350</td>
   
  </tr>
  <tr>
    <td></td>
    <td>P_ID 045 - Shanen Perera</td>
    <td>LKR 4000</td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td>P_ID 089 - Kevin Fernando</td>
    <td>LKR 5450</td>
    <td></td>
    
  </tr>
  <tr>
    <td></td>
    <td>P_ID 038 - John De Mel</td>
    <td>LKR 4300</td>
    <td></td>
    
  </tr>
  <tr>
    <td></td>
    <td>P_ID 034 - George De Zoysa</td>
    <td>LKR 2800</td>
    <td></td>
    
  </tr>

 


  <tr>
    <td>Vehicle ID 002</td>
    <td>O_ID 009 - John Perera</td>
    <td>LKR 5000</td>
    <td></td>
    
  </tr>
  <tr>
    <td></td>
    <td>o_ID 048 - Michelle De Silva</td>
    <td>LKR 6500</td>
    <td></td>
    
  </tr>
  <tr>
    <td></td>
    <td>O_ID 009 -  Ahamed Sajan</td>
    <td>LKR 4500</td>
    <td></td>
    <td></td>
    
  </tr>
  <tr>
    <td></td>
    <td>O_ID 034 - Chris Fernando</td>
    <td>LKR 3400</td>
    <td>LKR 35,950</td>
   
  </tr>
  <tr>
    <td></td>
    <td>O_ID 089 - Sheron Kingsley</td>
    <td>LKR 4000</td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td>O_ID 031 - Moris Fernando</td>
    <td>LKR 5450</td>
    <td></td>
    
  </tr>
  <tr>
    <td></td>
    <td>O_ID 022 - Melissa De Zoysa</td>
    <td>LKR 4300</td>
    <td></td>
    
  </tr>
  <tr>
    <td></td>
    <td>O_ID 043 - Patric De Silva</td>
    <td>LKR 2800</td>
    <td></td>
    
  </tr>





  <tr>
    <td>Vehicle ID 003</td>
    <td>O_ID 044 -  Silvester Fernando</td>
    <td>LKR 4000</td>
    <td></td>
    
  </tr>
  <tr>
    <td></td>
    <td>O_ID 068 - Billie De Silva</td>
    <td>LKR 5000</td>
    <td></td>
    
  </tr>
  <tr>
    <td></td>
    <td>O_ID 077 -  Sri Kumar</td>
    <td>LKR 3800</td>
    <td></td>
    <td></td>
    
  </tr>
  <tr>
    <td></td>
    <td>O_ID 093 - Jesica Fernando</td>
    <td>LKR 7500</td>
    <td>LKR 35,700</td>
   
  </tr>
  <tr>
    <td></td>
    <td>O_ID 051 - Roshen Kingsley</td>
    <td>LKR 3000</td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td>O_ID 031 - Peter Fernando</td>
    <td>LKR 4700</td>
    <td></td>
    
  </tr>
  <tr>
    <td></td>
    <td>O_ID 010 - Jack De Zoysa</td>
    <td>LKR 4800</td>
    <td></td>
    
  </tr>
  <tr>
    <td></td>
    <td>O_ID 091 - Mevin De Silva</td>
    <td>LKR 2900</td>
    <td></td>
    
  </tr>

  <tr>
    <td>Total</td>
    <td></td>
    <td></td>
    <td>LKR 100,000</td>
    
  </tr>

  
</table>

 </div>
    </div>		
</body>

<?php require APPROOT . '/views/inc/footer.php'; ?>