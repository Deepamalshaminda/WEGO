<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <form action="<?php echo URLROOT; ?>/users/verify" method="post">

        <div class="field">
            <label for="otp">Enter OTP here <sup>*</sup></label> <br>
            <input type="text" name="otp" size="30" placeholder="Enter OTP here">    
        </div>

        <div class="btn-wrapper col-12">
            <button class="btn-submit">Register</button>
            <button class="btn-cancel">Cancel</button>
        </div>
    
        </form>
        

    </div>
</body>
</html>