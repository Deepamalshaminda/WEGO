<?php require APPROOT . '/views/inc/header.php'; ?>

<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/dashboard.css">
<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/requestcards.css">
<link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

<title><?php echo SITENAME; ?></title>
<html>
</head>

<body>

<?php require APPROOT . '/views/inc/sidebarnav.php' ;?>

<div class="home-content">
  <br>
  <h2>Driver Requests</h2>
  <br>
  <br>
  <?php foreach ($data['users'] as $user): ?>
  <div class="card">
    <div class="card-body">
      <h5 class="card-text">Driver ID: <?php echo $user->us_id; ?></h5>
      <h5 class="card-title"> <?php echo $user->name; ?></h5>
      <button type="button" class="btn btn-primary accept-btn" id="acceptBtn<?php echo $user->us_id; ?>">Accept</button>
      <button type="button" class="btn btn-secondary remove-btn">Remove</button>
    </div>
  </div>
<?php endforeach; ?>
 
</div>
   

  </div> 
</div>

    </body>
    <script>
 var acceptBtns = document.querySelectorAll('.accept-btn');
acceptBtns.forEach(function(acceptBtn) {
  acceptBtn.addEventListener('click', function() {
    // Update the button text
    this.textContent = 'Accepted';
    
    // Make an AJAX request to update the database
    var xhr = new XMLHttpRequest();
    xhr.open('POST', '<?php echo URLROOT; ?>/driver/viewDriverRequest');
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onload = function() {
      if (xhr.status === 200) {
        
        console.log(xhr.responseText);
      } else {
        console.log('Request failed. Returned status of ' + xhr.status);
      }
    };
    xhr.send('req_id=' + this.id.substring(9) + '&status=Accepted');
  });
});

</script>





    <!--<?php require APPROOT . '/views/inc/footer.php'; ?>-->