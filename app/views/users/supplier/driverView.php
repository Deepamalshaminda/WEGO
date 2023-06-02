<?php require APPROOT . '/views/inc/header.php'; ?>

<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/addvehicle.css">
<link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/dashboard.css">
<title><?php echo SITENAME; ?></title>
</head>

<body>

<?php require APPROOT . '/views/inc/sidebarnav.php' ;?>
    <div class="home-content">

    <h1>Drivers Near You</h1>

    <!-- Loop through the drivers and display them in cards -->
    <?php foreach ($drivers as $driver): ?>
        <div class="driver-card">
            <img src="<?php echo $driver['profile_image']; ?>" alt="Profile Picture">
            <h3><?php echo $driver['name']; ?></h3>
            <button onclick="viewDriverDetails(<?php echo $driver['id']; ?>)">View Details</button>
        </div>
    <?php endforeach; ?>

    <script>
        function viewDriverDetails(driverId) {
            // Redirect to the driver details page
            window.location.href = 'driverDetails.php?driverId=' + driverId;
        }
    </script>
</body>
</html>
