<?php require APPROOT . '/views/inc/header.php'; ?>

  <?php flash('vehicle_message'); ?>
  <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/view.css">
  <?php 


 ?>

	<div class="container">
	<a href="<?php echo URLROOT?>/Vehicles/addvehicle"> 
       
	               
	   <button class="create" name="create-btn" id="create-btn">
        <span class="ct">Add more vehicles (+)</span> 
        </button></a> 
<h2>My vehicles</h2>
<table class="table">
	<thead>
		<div class="thd">
		<tr>
		<th>Vehicle Id</th>
		<th>Vehicle No</th>
		<th>Route</th>
		<th>Start Time</th>
		<th>Vehicle Type</th>
		<th>User ID</th>
		</tr>
		</div>
	</thead>
	<div class="list">
	<tbody>	
	     
	      <?php if (!empty($data['vehicles'])) :?> 
				<?php  foreach ($data['vehicles'] as $vehicle):?>
					<tr>
					<td><?php echo $vehicle->vehicleid; ?></td>
					<td><?php echo $vehicle->vehicleno; ?></td>
					<td><?php echo $vehicle->route;?></td>
					<td><?php echo $vehicle->starttime; ?></td>
					<td><?php echo $vehicle->vehicletype; ?></td>
					<td><?php echo $vehicle->id; ?></td>
					</tr>
					
					<?php endforeach ;?>
		<?php endif ;?>
		     	
	</tbody>
	<div class="list">
</table>
	</div>
	<br>
	<br>
	<a href="<?php echo URLROOT?>../pages/vehicle"><button class="back"  >Back</button></a><br>
</body>
<?php require APPROOT . '/views/inc/footer.php'; ?>