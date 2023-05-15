<?php require APPROOT . '/views/inc/header.php'; ?>

<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/admin_dashboard.css">
<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/vehicle_details.css">
  <title><?php echo SITENAME; ?></title>
</head>
<body>



<meta name="viewport" content="width=device-width, initial-scale=1.0">

   </head>
<body>
  <?php require APPROOT . '/views/inc/admin_sidenavbar.php' ;?>
  
  <!-- <div class="container">
    <form>
<div class="row">
<div class="col">
<div class="input">
   <lable for="name" class="fields"> Added by : </lable>
   <input type = "text" name ="added by" id="addedby" />
</div>
<div class="input">
   <lable for="vehicleno" class="fields"> Vehicle Number : </lable>
   <input type = "text" name ="vehicleno" id="vehicleno" />
</div>
<div class="input">
   <lable for="type" class="fields"> Vehicle Type : </lable>
   <input type = "text" name ="type" id="type" />
</div>
<div class="input">
   <lable for="model" class="fields"> Vehicle Model : </lable>
   <input type = "text" name ="model" id="model" />
</div>
<div class="input">
   <lable for="year" class="fields"> Manufactured Year : </lable>
   <input type = "text" name ="year" id="year" />
</div>
</div>
<div class="col">
<div class="input">
   <lable for="engineno" class="fields"> Engine Number : </lable>
   <input type = "text" name ="engineno" id="engineno" />
</div>
<div class="input">
   <lable for="chassisno" class="fields"> Chassis Number : </lable>
   <input type = "text" name ="chassisno" id="chassisno" />
</div>
<div class="input">
   <lable for="seats" class="fields"> No of seats : </lable>
   <input type = "text" name ="seats" id="seats" />
</div>
<div class="input">
   <lable for="document" class="file"> Vehicle Book  </lable>
   <input type = "file" name ="document" id="document" />
</div>
<div class="input">
   <lable for="document" class="file"> Insurance Card  </lable>
   <input type = "file" name ="document" id="document" />
</div>
</div>
<div class="btn-wrapper">
                 <div class="data">
                    <button class="approve"> Approve </button>
                    <button class="deny"> Deny </button>
                 </div>
                 
            </div>
</div>
</div> -->

<div class="container">


<form action="">
<span id="message"></span>
 <div>   
<h3 class="title"> Add Vehicle </h3>
</div>
    <div class="row">
    

        <div class="col">

            

            <div class="inputBox">
                <span>Added By :</span>
                <input type="text" >
            </div>
            <div class="inputBox">
                <span>Vehicle Number :</span>
                <input type="vehicleno" value="<?php echo $data['vehicle']->vehicleno; ?>">
            </div>
            <div class="inputBox">
                <span>Model : </span>
                <input type="text" value="<?php echo $data['vehicle']->model; ?>">
            </div>
            <div class="inputBox">
                <span>Color :</span>
                <input type="text" value="<?php echo $data['vehicle']->color; ?>">
            </div>
            <div class="inputBox">
                <span>Year :</span>
                <input type="text" value="<?php echo $data['vehicle']->year; ?>">
            </div>
            <div class="inputBox">
                <span> Vehicle Documents :</span>
                
            </div>
            <div class="inputBox">
            <button type="button" id="approveButton" class="approve" data-veid="<?php echo $data['vehicle']->ve_id; ?>">Approve</button>
            </div>

            <!--<div class="flex">
                <div class="inputBox">
                    <span>state :</span>
                    <input type="text" placeholder="india">
                </div>
                <div class="inputBox">
                    <span>zip code :</span>
                    <input type="text" placeholder="123 456">
                </div>
            </div>-->

        </div>

        <div class="col">

            

            <div class="inputBox">
                <span>Address : </span>
                <input type="address" value="<?php echo $data['vehicle']->address; ?>">
            </div>
            <div class="inputBox">
                <span>Route :</span>
                <input type="text" value="<?php echo $data['vehicle']->route; ?>">
            </div>
            <div class="inputBox">
                <span>Usual journey start time :</span>
                <input type="text" value="<?php echo $data['vehicle']->starttime; ?>">
            </div>
            <div class="inputBox">
                <span>Seating capacity :</span>
                <input type="text" value="<?php echo $data['vehicle']->seatingcapacity; ?>">
            </div>
            <div class="inputBox">
                <span>AC/Non-AC :</span>
                <input type="text" value="<?php echo $data['vehicle']->Ac; ?>">
            </div>
            <div class="inputBox">
                
                <?php if($data['vehicle']->vehicle_document): ?>
                    <a href="<?php echo URLROOT . '/Admin/download/' . $data['vehicle']->ve_id; ?>" class="download" download>Download</a>

                <?php else: ?>
                    <span>No document uploaded</span>
                <?php endif; ?>
            </div>

            <div class="inputBox">
            <button type="button" id="denyButton" class="deny" data-veid="<?php echo $data['vehicle']->ve_id; ?>">Deny</button>
            </div>

            

        </div>

    </div>
    
</form>

</div>

</section>  




<?php require APPROOT . '/views/inc/footer.php'; ?>

<script>
  document.getElementById('approveButton').addEventListener('click', function(event) {
    event.preventDefault(); 

    var ve_id = this.getAttribute('data-veid');
    console.log(ve_id);
    
    approve(ve_id); 
    
  });
  
  function approve(ve_id) {
    var xhr = new XMLHttpRequest();
    xhr.open('GET', "<?php echo URLROOT . '/Admin/approve/' ?>" + ve_id, true);
    xhr.onreadystatechange = function() {
      if (xhr.readyState === XMLHttpRequest.DONE) {
        if (xhr.status === 200) {
          console.log(xhr.responseText);
            // success message
            var successMessage = document.getElementById('message');
            successMessage.style.display = 'block';
            successMessage.style.backgroundColor = "Green";
            successMessage.innerHTML = 'Vehicle Approved Successfully';
        } else {
          console.error('Error:', xhr.status);
        }
      }
    };
    xhr.send();
  }
  document.getElementById('denyButton').addEventListener('click', function(event) {
    event.preventDefault(); 

    var ve_id = this.getAttribute('data-veid');
    console.log(ve_id);
    
    deny(ve_id); 
    
  });
  
  function deny(ve_id) {
    var xhr = new XMLHttpRequest();
    xhr.open('GET', "<?php echo URLROOT . '/Admin/deny/' ?>" + ve_id, true);
    xhr.onreadystatechange = function() {
      if (xhr.readyState === XMLHttpRequest.DONE) {
        if (xhr.status === 200) {
          console.log(xhr.responseText);
            var successMessage = document.getElementById('message');
            successMessage.style.display = 'block';
            successMessage.style.backgroundColor = "Red";
            successMessage.innerHTML = 'Vehicle Deleted Successfully';
        } else {
            console.error('Error:', xhr.status);
        }
      }
    };
    xhr.send();
  }
</script>
