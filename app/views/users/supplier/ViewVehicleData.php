<?php require APPROOT . '/views/inc/header.php'; ?>



  
	<div class="container">
	<a href="<?php echo URLROOT?>/rides/viewVehicleDetails"></a>
    
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
		<th>Exript date of licence</th>
        <th>Service Type</th>
		<th>Special conditions</th>
		</tr>
    
		</div>
	</thead>
	<div class="list">
	<tbody>	
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
                    <td><?php echo $vehicle->service_type;?></td>
					<td><?php echo $vehicle->comments;?></td>
				
    </tr>
    </tbody>
    </table>
</div>
</div> 













    </table>
       