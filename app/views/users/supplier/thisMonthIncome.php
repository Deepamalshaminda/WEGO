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
        <h2>Income details of this month </h2>
        <canvas id="thisMonthIncome" height="400" width="600"></canvas>
    </div>

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


    <?php require APPROOT . '/views/inc/footer.php'; ?>
</body>
</html>
