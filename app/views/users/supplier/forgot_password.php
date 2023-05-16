<?php require APPROOT . '/views/inc/header.php'; ?>

<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/reset.css">

<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/dashboard.css">
<title><?php echo SITENAME; ?></title>
</head>

<body>


    <div class="home-content">
    <br>
    <br>
    <br>
    <br>
    <div class="form-container">
    
		<h2>Forgot Password?</h2>
        <br>
        <h3>Enter your email to reset the password</h3>
        <br>
		<form action="<?php echo URLROOT; ?>/forgot_password/reset" method="post">
			<label for="email">Email:</label>
			<input type="email" id="email" name="email" required>
            <br>
            <br>
            <br>
			<input type="submit" name="submit" value="Submit">
		</form>
	</div>


























    </body>




    <?php require APPROOT . '/views/inc/footer.php'; ?>