<?php require APPROOT . '/views/inc/header.php'; ?>

<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/dashboard.css">
<link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/doc.css">
<script type="text/javascript" src="<?php echo URLROOT; ?>/js/list.js"></script>
<title><?php echo SITENAME; ?></title>
<html>
</head>

<body>

<?php require APPROOT . '/views/inc/sidebarnav.php' ;?>

<div class="home-content">
  <br>
  <br>

  <!-- View for displaying all vehicle documents for a supplier -->
  <h2>Vehicle Documents</h2>
  <?php if(!empty($data['documents'])) : ?>
    <?php foreach($data['documents'] as $document) : ?>
      <div class="card">
        <h3>Vehicle ID: <?php echo $document->ve_id; ?></h3>
        <p>Vehicle Number: <?php echo $document->vehicleno; ?></p>
        <?php if(!empty($document->document_url)) : ?>
          <div class="doc-preview">
            <iframe src="https://docs.google.com/viewer?url=<?php echo urlencode($document->document_url); ?>&embedded=true"></iframe>
          </div>
          <a href="<?php echo $document->document_url; ?>" target="_blank">Download</a>
        <?php else : ?>
          <p>No document found for this vehicle</p>
        <?php endif; ?>
      </div>
    <?php endforeach; ?>
  <?php else : ?>
    <p>No vehicles found</p>
  <?php endif; ?>
</div>

<?php require APPROOT . '/views/inc/footer.php'; ?>