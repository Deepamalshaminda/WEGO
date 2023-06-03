<?php require APPROOT . '/views/inc/header.php'; ?>

<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/addvehicle.css">
<link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/dashboard.css">
<title><?php echo SITENAME; ?></title>
</head>

<body>

<?php require APPROOT . '/views/inc/sidebarnav.php' ;?>
    <div class="home-content">
    <h1>Driver Details</h1>
    <h3>Name: <?php echo $driverDetails['name'];?></h3>

    <h3>Name: <?php echo $driverDetails['name'];?>



        <!-- Add and Remove buttons -->
        <button onclick="addDriver(<?php echo $driverDetails['id']; ?>)">Add</button>
        <button onclick="removeDriver(<?php echo $driverDetails['id']; ?>)">Remove</button>
    
        <script>
            function addDriver(driverId) {
                // Make an AJAX request to the server to add the driver
                // You can use a library like jQuery or fetch API for the AJAX request
                // Example using jQuery:
                $.post('addDriver.php', { driverId: driverId }, function(data) {
                    // Handle the response from the server
                    // You can display a success message or perform any other necessary actions
                    console.log(data);
                });
            }
    
            function removeDriver(driverId) {
                // Make an AJAX request to the server to remove the driver
                // Example using jQuery:
                $.post('removeDriver.php', { driverId: driverId }, function(data) {
                    // Handle the response from the server
                    console.log(data);
                });
            }
        </script>
    </body>
    </html>
    
