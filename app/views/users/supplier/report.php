<?php require APPROOT . '/views/inc/header.php'; ?>

<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/reports.css">
<link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/dashboard.css">
<title><?php echo SITENAME; ?></title>
</head>

<body>


<?php require APPROOT . '/views/inc/sidebarnav.php' ;?>
     
    <div class="home-content">
    <br>
    <br>
    <div class="report-card">
    <table style="width:100%">
                    <tr class="row">
                      
                      <th><h2>Reports</h2></th>
                      <th></th>
                    </tr>
                    
                    <tr class="row">
                      <td>Monthly earning report</td>
                      
                      <td class="report-btn"><a href="pdf/index" target="_blank" rel="noopener noreferrer">View PDF</a></td>
                      <td> <a href="pdf/generate" download="report.pdf">Download PDF</a></td>

                      
                    </tr>
                    <tr class="row">
                      <td>Monthly salary expense report</td>
                      <td><button class="report-btn">View</button></td>
                      <td><img src="../public/img/downloads.png"></td>
                    </tr>
                    <tr class="row">
                        <td>Annual Income Report</td>
                        <td><button class="report-btn">View</button></td>
                        <td><img src="../public/img/downloads.png"></td>
                    </tr>
                    <tr class="row">
                        <td>Annual Expenses Report</td>
                        <td><button class="report-btn">View</button></td>
                        <td><img src="../public/img/downloads.png"></td>
                    </tr>
                    <tr class="row">
                        <td>Driver Attendance Report</td>
                        <td><button class="report-btn">View</button></td>
                        <td><img src="../public/img/downloads.png"></td>
                    </tr>
                    <tr class="row">
                        <td>Driver Attendance Report</td>
                        <td><button class="report-btn">View</button></td>
                        <td><img src="../public/img/downloads.png"></td>
                    </tr>
                    <tr class="row">
                        <td>Income and Expense Summary Report</td>
                        <td><button class="report-btn">View</button></td>
                        <td><img src="../public/img/downloads.png"></td>
                    </tr>
                    
                    
                </table>
    </div>