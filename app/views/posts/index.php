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
		<th>Model</th>
		<th>Color</th>
		<th>Year</th>
		<th>Address</th>
		<th>Route</th>
		<th>Usual starttime</th>
		<th>Seating capacity</th>
		<th>Ac/Non-Ac</th>
		<th>Licence expiry date</th>
		<th>Special conditions</th>
		<th> Supplier ID</th>

		</tr>
		</div>
	</thead>
	<div class="list">
	<tbody>	
	     
	      <?php if (!empty($data['vehicles'])) :?> 
				<?php  foreach ($data['vehicles'] as $vehicle):?>
					<tr>
					<td><?php echo $vehicle->ve_id; ?></td>
					<td><?php echo $vehicle->vehicleno; ?></td>
					<td><?php echo $vehicle->model;?></td>
					<td><?php echo $vehicle->color; ?></td>
					<td><?php echo $vehicle->year; ?></td>
					<td><?php echo $vehicle->address; ?></td>
					<td><?php echo $vehicle->route;?></td>
					<td><?php echo $vehicle->starttime; ?></td>
					<td><?php echo $vehicle->seatingcapacity; ?></td>
					<td><?php echo $vehicle->Ac; ?></td>
					<td><?php echo $vehicle->expirylicence;?></td>
					<td><?php echo $vehicle->comments;?></td>
					<td><?php echo $vehicle->id;?></td>
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