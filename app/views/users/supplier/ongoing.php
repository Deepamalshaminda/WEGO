<?php require APPROOT . '/views/inc/header.php'; ?>

<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/dashboard.css">
<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/ongoing.css">
<link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/prequest.css">
<script type="text/javascript" src="<?php echo URLROOT; ?>/js/list.js"></script>
<title><?php echo SITENAME; ?></title>

</head>

<body>

    <?php require APPROOT . '/views/inc/sidebarnav.php'; ?>

    <div class="home-content">
        <button class="tablink" onclick="openPage('ongoing')" id="defaultOpen">Ongoing Rides</button>
        <button class="tablink" onclick="openPage('completed')">Completed Rides</button>

        <div id="ongoing" class="tabcontent">
            <div class="card-container">
                <?php if (!empty($data['vehicles'])): ?>
                    <?php foreach ($data['vehicles'] as $vehicle): ?>
                        <div class="card">
                            <div class="card-header">
                                <h3>Ride ID <?php echo $vehicle->ve_id; ?></h3>
                            </div>
                            <div class="card-body">
                                <h5 class="card-text">Vehicle No: <?php echo $vehicle->vehicleno; ?></h5><br>
                                <h5 class="card-text">Driver ID: <?php echo $vehicle->driver_id; ?></h5><br>
                                <h5 class="card-text">Started Time: <?php echo $vehicle->starttime; ?></h5><br>
                                <h5 class="card-text">Route: <?php echo $vehicle->route; ?></h5>
                            </div>
                            <button class="view-btn">View on Map</button>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>

        <div id="completed" class="tabcontent">
            <div class="card-container">
                <div class="card">
                    <div class="card-header">
                        <h3>Ride ID <?php echo $vehicle->ve_id;?></h3>
                    </div>
                    <div class="card-body">
                    <h5 class="card-text">Vehicle No: <?php echo $vehicle->vehicleno; ?></h5><br>
                    <h5 class="card-text">Driver ID: <?php echo $vehicle->driver_id; ?></h5><br>
                    <h5 class="card-text">Route: <?php echo $vehicle->route; ?></h5><br>
                    <h5 class="card-text">Status: Completed Successfully</h5>
                    </div>
                    <button class="remove-btn">Remove</button>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
