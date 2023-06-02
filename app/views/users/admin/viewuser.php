<?php require APPROOT . '/views/inc/header.php'; ?>

<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/admin_dashboard.css">
<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/viewuser.css">
<link rel="stylesheet" href="<?php echo URLROOT; ?>/js/tab.js">
<title><?php echo SITENAME; ?></title>
<html>
</head>



<meta name="viewport" content="width=device-width, initial-scale=1.0">
<body>


<?php require APPROOT . '/views/inc/admin_sidenavbar.php' ;?>
     
   
  
</div>

<div class="wrapper">

    <div class="left">
    
    <img src="<?=URLROOT?>/public/img/<?=$data['users']->profile_image?>" alt="user" width="100">
        <h4> <?php echo $data['users']->name; ?> </h4>
         <p> <?php echo $data['users']->user_role; ?> </p>
    </div>
    <div class="right">
        <div class="info">
        <span id="message"></span>
            <h2>Information</h2>
            <br>
            <div class="info_data">
                 <div class="data">
                    <h4>Name : <?php echo $data['users']->name; ?> </h4>
                    <br>
                    <h4>NIC : <?php echo $data['users']->nic; ?> </h4>
                    <br>
                    <h4>DOB : <?php echo $data['users']->dob; ?> </h4>
                    <br>
                    <h4>Gender : <?php echo $data['users']->gender; ?> </h4>
                    <br>
                    <h4>Address : <?php echo $data['users']->address; ?> </h4>
                    <br>
                    <h4>Email : <?php echo $data['users']->email; ?> </h4>
                    <br>
                    <h4>Active Status : <?php echo $data['users']->active_status; ?> </h4>
                    

                 </div>
                
            </div>
        </div>
        <br>
      
        
            
        <div class="projects_data">
    <div class="data inputBox">
        <button type="button" id="suspendButton" class="suspend"  data-usid="<?php echo $data['users']->us_id; ?>">Suspend</button>
    </div>
    <div class="data inputBox">
        <button type="button" id="activeButton" class="suspend" data-usid="<?php echo $data['users']->us_id; ?>">Activate</button>
    </div>
    



     
    </div>
    
</div>

</body>
</html>





</body>




 <!--<?php require APPROOT . '/views/inc/footer.php'; ?>-->


<script>
        document.getElementById('suspendButton').addEventListener('click', function(event) {
            event.preventDefault(); 
            var us_id = this.getAttribute('data-usid');
            console.log(us_id);
            suspendUser(us_id); 
        });

        function suspendUser(us_id) {
            var xhr = new XMLHttpRequest();
            xhr.open('GET', "<?php echo URLROOT . '/Admin/suspendUser/' ?>" + us_id, true);
            xhr.onreadystatechange = function() {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {
                        console.log(xhr.responseText);
                        var successMessage = document.getElementById('message');
                        successMessage.style.display = 'block';
                        successMessage.style.backgroundColor = "Red";
                        successMessage.innerHTML = 'User Account Suspended';
                    } else {
                        console.error('Error:', xhr.status);
                    }
                }
            };
            xhr.send();
        }
        document.getElementById('activeButton').addEventListener('click', function(event) {
            event.preventDefault(); 
            var us_id = this.getAttribute('data-usid');
            console.log(us_id);
            activateUser(us_id); 
        });

        function activateUser(us_id) {
            var xhr = new XMLHttpRequest();
            xhr.open('GET', "<?php echo URLROOT . '/Admin/activateUser/' ?>" + us_id, true);
            xhr.onreadystatechange = function() {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {
                        console.log(xhr.responseText);
                        var successMessage = document.getElementById('message');
                        successMessage.style.display = 'block';
                        successMessage.style.backgroundColor = "green";
                        successMessage.innerHTML = 'User Account Activated';
                    } else {
                        console.error('Error:', xhr.status);
                    }
                }
            };
            xhr.send();
        }
</script>