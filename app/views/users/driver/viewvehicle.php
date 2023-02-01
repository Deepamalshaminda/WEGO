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

<h2>HTML Table</h2>

<?php print_r($data['vehicle']) ?>

<table>
<?php
			//if ($data['vehicles']->) {
				//output data of each row
				//while ($row = $result->fetch_assoc()) {


				
		?>
		

		<tr><?php if($data['vehicle']->id == $_SESSION['user_id']) : ?>

                           
						   <h1><?php echo $data['vehicle']->vehicleid; ?></h1>
							  <td> <h1><?php echo $data['vehicle']->vehiclenumber; ?></h1></td></td>
							  <h3> <?php echo $data['vehicle']->vehicletype; ?></h3>
								  <?php echo $data['user']->name; ?>   
							<?php endif; ?>
							</tr>

					
	        
		
	        	
	</tbody>
</table>
	</div>

</body>
</html>
