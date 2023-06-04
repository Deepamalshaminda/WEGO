<?php require APPROOT . '/views/inc/header.php'; ?>

<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/dashboard.css">
<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/driversug.css">
<link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
<script type="text/javascript" src="<?php echo URLROOT; ?>/js/list.js"></script>

<title><?php echo SITENAME; ?></title>
</head>

<body>
    <?php require APPROOT . '/views/inc/sidebarnav.php'; ?>

    <div class="home-content">
        <h1>Drivers Near You</h1>
        <!-- <?php var_dump($drivers); ?>  -->
        <?php foreach ($data['drivers'] as $driver): ?>
  <div class="driver-card">
    <img src="<?php echo $driver['profile_image']; ?>">
   
    <h3><?php echo $driver['name']; ?></h3>
    <a href="driverdetails.php?id=<?php echo $driver['id']; ?>">View Details</a>
  </div>
<?php endforeach; ?>

    </div>
   
<?php require APPROOT . '/views/inc/footer.php'; ?>


   