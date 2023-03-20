<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <link rel="stylesheet" href="--><?php echo URLROOT; ?>/css/style.css">
  <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/main.css">
  <title><?php echo SITENAME; ?></title>
</head>
<body>
  <div class="row">
    <div class="col-md-6">
      <h1>Vehicles</h1>
    </div>
    <div class="col-md-6">
      <a href="<?php echo URLROOT; ?>/posts/add" class="btn btn-primary pull-right">
        <i class="fa fa-pencil"></i> Add vehicle
      </a>
    </div>
  </div>
<?php require APPROOT . '/views/inc/footer.php'; ?>