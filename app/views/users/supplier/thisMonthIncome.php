<!DOCTYPE html>
<html>
<head>
    <title><?php echo SITENAME; ?></title>
    <?php require APPROOT . '/views/inc/header.php'; ?>
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/dashboard.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/earnings.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.3.2/dist/chart.min.js"></script>

</head>
<body>
    <?php require APPROOT . '/views/inc/sidebarnav.php'; ?>
     
    <div class="home-content">
        <h2>Income details of this month</h2>
        <canvas id="thisMonthIncome" height="400" width="600"></canvas>
    </div>

    <script>
        // Convert PHP array to JavaScript object
        var earnings_data = <?php echo json_encode($data['earnings_data']); ?>;

        // Extract the vehicle names and total earnings from the data
        var vehicle_numbers = [];
        var total_earnings = [];
        for (var i = 0; i < earnings_data.length; i++) {
            vehicle_numbers.push(earnings_data[i]['vehicleno']);
            total_earnings.push(earnings_data[i]['total_earnings']);
        }

        // Create the monthly income chart
        var thisMonthIncome = new Chart(document.getElementById('thisMonthIncome'), {
            type: 'bar',
            data: {
                labels: vehicle_numbers,
                datasets: [{
                    label: 'Total Earnings',
                    data: total_earnings,
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true,
                            suggestedMax: 70000
                        }
                    }]
                }
            }
        });
    </script>

    <?php require APPROOT . '/views/inc/footer.php'; ?>
</body>
</html>
