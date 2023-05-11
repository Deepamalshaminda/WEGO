<?php require APPROOT . '/views/inc/header.php'; ?>

<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/dashboard.css">
<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/earnings.css">
<link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

<title><?php echo SITENAME; ?></title>
<html>
</head>

<body>


<?php require APPROOT . '/views/inc/sidebarnav.php' ;?>
     
    <div class="home-content">
  
	<div class="card">
		<h1 class="card-title">Earning Information</h1>
		<div class="card-body">
    <a href="<?php echo URLROOT?>/Earningschart/thisMonthIncome" class="card-button"><button>This Month Income</button></a>
    <a href="<?php echo URLROOT?>/Earningschart/earningSummary"><button>Summary of Earnings</button></a><br>
		<a href="<?php echo URLROOT?>/Earningschart/earningsFromVehicles"><button>Earnings from Each Vehicle</button></a>
		</div>
	</div>
</body>
</html>


    



</body>

<?php require APPROOT . '/views/inc/footer.php'; ?>