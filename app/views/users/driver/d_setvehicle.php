<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/d_setvehicle.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/_base.css">
    <title>Document</title>
</head>
<body>
        <div class="col-12 top-navbar">
            <div class="col-9">
                <div class="col-2 logo">
                <img src="<?php echo URLROOT?>/img/wego_logo.png" class="wego-logo" alt="wego-logo">
                </div>
            </div>
            <div class="col-1 headings">
                <h4><a class="top-link" href="<?php echo URLROOT?>/users/index">HOME</a></h4>
            </div>
            <div class="col-1 headings">
                <h4><a class="top-link" href="<?php echo URLROOT?>/pages/contactUs">CONTACT</a></h4>
            </div>
            <div class="col-1 headings">
                <h4><a class="top-link" href="<?php echo URLROOT?>/users/register">SIGNUP</a></h4>
            </div>
        </div>
    <div class="col-12 page">
        
        <div class="full col-8">
            <div class="top col-12">
                <div class="col-5 topic">
                    <h2>Hi <?php echo $data -> name?>. Select your preference as a driver</h2>
                </div>
            </div>
            <div class="col-12" id="view">
                <div class="right-container col-6">
    
                    <button id="own-vehicle" class="col-4 left clickable-div" value="own-vehicle" onclick="setVehicleAsOwn(<?php echo $data -> us_id?>)">
                        <h3 class="content">
                        Own vehicle suppliers
                        </h3>
                    </button>

                </div>
                <div class="left-container col-6">
                    <button id="find-vehicle" class="col-4 left clickable-div" value="find-vehicle" onclick="setVehicleAsFind(<?php echo $data -> us_id?>)">
                        <h3 class="content">
                        Find vehicle suppliers
                        </h3>
                    </button>
                </div>  
            </div>
        </div>
    </div>
    <!-- <script src="<?php echo URLROOT?>/public/js/driver/d_setvehicle.js" defer></script> -->
    <!-- <script>
        document.getElementById("own-vehicle").addEventListener("click", function() {
            // get the data to send
            var myData = {foo: "bar"};

            // make AJAX request
            $.ajax({
            url: "http://localhost/projectwego/Users/ownVehicle",
            type: "POST",
            data: myData,
            dataType: "json",
            success: function(data) {
                // handle response from server
            },
            error: function() {
                // handle error
            }
            });
        });
    </script> -->

    <script>
        const setVehicleAsOwn = async($us_id) => {
        console.log($us_id);
        // const response = await fetch(`http://localhost/projectwego/Users/ownVehicle/` + $us_id);
        window.location.href = 'http://localhost/projectwego/Users/ownVehicle/' + $us_id;
            console.log($us_id)
            if(response.status == 200){
            console.log("Successful");
}
}

        const setVehicleAsFind = async($us_id) => {
        console.log($us_id);
        window.location.href = 'http://localhost/projectwego/Users/findVehicle/' + $us_id;
            console.log($us_id)
            if(response.status == 200){
            console.log("Successful");
}
}
    </script>

</body>
</html>