<?php require APPROOT . '/views/inc/header.php'; ?>

<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/reports.css">
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
                      <td>Monthly income report</td>
                      <td><a href="<?php echo URLROOT; ?>/ReportsController/monthly_income_report"><button class="report-btn">View and Download PDF</button></a></td>
                      
                    </tr>
                    
                    <tr class="row">
                      <td>Monthly salary expense report</td>
                      <td><button class="report-btn">View and Download PDF</button></td>
                      
                    </tr>
                    <tr class="row">
                        <td>Annual Income Report</td>
                        <td><button class="report-btn">View and Download PDF</button></td>
                        
                    </tr>
                    <tr class="row">
                        <td>Annual Expenses Report</td>
                        <td><button class="report-btn">View and Download PDF</button></td>
                        
                    </tr>
                    <tr class="row">
                        <td>Driver Attendance Report</td>
                        <td><button class="report-btn">View and Download PDF</button></td>
                        
                    </tr>
                    <tr class="row">
                        <td>Driver Attendance Report</td>
                        <td><button class="report-btn">View and Download PDF</button></td>
                        
                    </tr>
                    <tr class="row">
                        <td>Income and Expense Summary Report</td>
                        <td><button class="report-btn">View and Download PDF</button></td>
                        
                    </tr>
                    
                    
                </table>
    </div>