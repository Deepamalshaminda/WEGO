<?php require APPROOT . '/views/inc/header.php'; ?>
<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/style.css">
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCykzd2-mQTQdSMQNh8PxrWAnDBgqjf_Xg&libraries=places"></script>
    <body onload="initMap()">

    <div class="logo">
        <img src="<?php echo URLROOT; ?>/img/logo_black.png" alt="logo">
        </div>
       
     <img class="wave" src="<?php echo URLROOT; ?>/img/signup_wave.svg">  
    <div class="container">
        <div class="img">
            <img src="<?php echo URLROOT; ?>/img/signup_bg.svg">
        </div>
        <div class="login-container">
            <form action="<?php echo URLROOT; ?>/users/signup_ben" method="POST">
                <img class="avatar" src="<?php echo URLROOT; ?>/img/signup.svg">
                
                <h2>SignUp</h2>
                
                <div class="input-div one ">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <h5>Organization name</h5>
                        <input name="name" type="text" class="input" value="<?php echo $data['name']; ?>" >
                        <div class=warn><?php echo $data['name_err']; ?></div>
                    </div>
                </div>
                <div class="input-div two">
                    <div class="i">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="div">
                        <h5>Email</h5>
                        <input type="text" name="email" class="input"  value="<?php echo $data['email']; ?>">
                        
                        <div class=warn><?php echo $data['email_err']; ?></div>
                    </div>
                    
                </div>
                <div class="input-div one ">
                    <div class="i">
                        <i class="fas fa-mobile"></i>
                    </div>
                    <div class="div">
                        <h5>Telephone number</h5>
                        <input type="tel" name="telephone_number" pattern="[0-9]{10}" class="input" value="<?php echo $data['telephone_number'];?>"  >
                        <div class=warn><?php echo $data['telephone_number_err']; ?></div>
                    </div>
                    </div>
                    <div class="input-div one ">
                        <div class="i">
                            <i class="fas fa-address-book"></i>
                        </div>
                        <div class="div">
                            <h5>Address</h5>

                            <input type="text" name="address" id="autocomplete" class="input" value="<?php echo $data['address'];?>">
                            
                            <div class=warn><?php echo $data['address_err']; ?></div>
                        </div>
                        </div>
                       <div class="space" style="height: 500px; margin : 20px;">
                           <div id="map" style="height: 400px; width: 100%; margin: 20px;">

<!--                               <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCykzd2-mQTQdSMQNh8PxrWAnDBgqjf_Xg&callback=Function.prototype"></script>-->
                               <script>
                                   function initMap() {
                                       var colombo = {lat: 6.9271, lng: 79.8612};
                                       var map = new google.maps.Map(document.getElementById('map'), {
                                           zoom: 12,
                                           center: colombo

                                       });
                                       var marker = new google.maps.Marker({
                                           position: colombo,
                                           map: map,
                                           draggable: true
                                       });
                                       google.maps.event.addListener(marker, 'dragend', function(event) {
                                           document.getElementById("latitude").value = event.latLng.lat();
                                           document.getElementById("longitude").value = event.latLng.lng();
                                       });
                                   }

                               </script>

                           </div>
                           <input type="hidden" id="latitude" name="latitude"><br>
                           <input type="hidden" id="longitude" name="longitude"><br>
                       </div>
                        
                        <div class="input-div one ">
                            <div class="i">
                                <i class="fas fa-lock"></i>
                            </div>
                            <div class="div">
                                <h5>Create password</h5>
                                <input type="password" name="password" class="input" value="<?php echo $data['password'];?>" >
                                <div class=warn><?php echo $data['password_err']; ?></div>
                            </div>
                            </div>
                            <div class="input-div one ">
                                <div class="i">
                                    <i class="fas fa-lock"></i>
                                </div>
                                <div class="div">
                                    <h5>Confirm password</h5>
                                    <input type="password" name="confirm_password" class="input" value="<?php echo $data['password'];?>" >
                                    <div class=warn><?php echo $data['confirm_password_err']; ?></div>
                                </div>
                                
                                </div>
                
               
                <input type="submit" class="btn" value="Register">
                <a href="<?php echo URLROOT; ?>/users/login_ben"> already have an account login</a>
            </form>
            
        </div>
        

    </div>
  
    <script src="<?php echo URLROOT; ?>/js/main.js"></script>
<?php require APPROOT . '/views/inc/footer.php';?>