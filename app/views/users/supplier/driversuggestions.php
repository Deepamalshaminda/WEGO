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
        <?php if (!empty($data['drivers'])): ?> 
        <?php foreach ($data['drivers'] as $drivers): ?>
            <div class="driver-card">
                <img src="<?php echo URLROOT; ?>/img/profile_image/<?php echo $drivers->profile_image ?>" >
                <h4 class="card-text"><?php echo $drivers->name; ?></h5>
                <button>View Details</button>
            </div>
        <?php endforeach; ?>
        <?php endif; ?>
    </div>
   
<?php require APPROOT . '/views/inc/footer.php'; ?>

</body>
</html>
