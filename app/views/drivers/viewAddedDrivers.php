<?php require APPROOT . '/views/inc/header.php'; ?>

  <?php flash('driver_message'); ?>
  <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/view.css">
  <?php 


 ?>

	<div class="container-drivers">
	<a href="addDrivers.php"> 
       
	               
	   <!-- <button class="create" name="create-btn" id="create-btn">
        <span class="ct">Add Vehicle Details</span> -->
        </button></a>

<table class="table">
	<thead>
		<div class="thd">
		<tr>
    <th> Driver ID </th>
		<th> Driver Name </th> 
    <th> Driver Email </th>
		<th>Driver NIC</th>
		<th>Driver Phone </th>
		<th>Driver License Number </th>
		<th>Driver License Exp Date </th>
    <th>Feasible Time Slot </th>
    <th>Prefered Service Type </th>
		<th>User ID</th>
		</tr>
		</div>
	</thead>
	<div class="list">
	<tbody>	
	     
	      <?php if (!empty($data['drivers'])) :?> 
				<?php  foreach ($data['drivers'] as $drivers):?>
					<tr>
					<td><?php echo $drivers->driverId; ?></td>
          <td><?php echo $drivers->name; ?></td>
          <td><?php echo $drivers->email; ?></td>
					<td><?php echo $drivers->nic; ?></td>
          <td><?php echo $drivers->phoneNumber; ?></td>
          <td><?php echo $drivers->licenseNo; ?></td>
          <td><?php echo $drivers->licenceExpDate; ?></td>
          <td><?php echo $drivers->feasibleTimeSlot; ?></td>
          <td><?php echo $drivers->preferedServiceType; ?></td>

					</tr>
					
					<?php endforeach ;?>
		<?php endif ;?>
		     	
	</tbody>
	<div class="list">
</table>
	</div>

</body>
<?php require APPROOT . '/views/inc/footer.php'; ?>