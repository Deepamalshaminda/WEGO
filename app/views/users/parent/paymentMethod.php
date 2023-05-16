<?php require APPROOT . '/views/inc/header.php'; ?>
<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/dashboard.css">
<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/payments.css">
<script type="text/javascript" src="https://www.payhere.lk/lib/payhere.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<title><?php echo SITENAME; ?></title>
</head>

<body>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>

        <?php require APPROOT . '/views/inc/sidenavbar.php'; ?>

        <div class="container">

            <form action='' id="paymentForm">
                <div class="row">
                    <div class="col">
                        <input type="hidden" name="merchant_id" value="<?php echo $data["merchant_id"] ?>"> <!-- Replace your Merchant ID -->
                        <input type="hidden" name="last_name" value="<?php echo $data["last_name"] ?>">
                        <input type="hidden" name="return_url" value="http://localhost/projectwego/Payments/return">
                        <input type="hidden" name="cancel_url" value="http://localhost/projectwego/Payments/cancel">
                        <input type="hidden" name="notify_url" value="http://localhost/projectwego/Payments/notify">
                        <input type="hidden" name="country" value="Sri Lanka">
                        <input type="hidden" name="hash" value="<?php echo $data["hash"] ?>"> <!-- Replace with generated hash -->
                        <h3 class="title">Payment Details</h3>

                        <div class="inputBox">
                            <span>Name :</span>
                            <input type="text" name="first_name" value="<?php echo $data["first_name"] ?>">
                        </div>
                        <div class="inputBox">
                            <span>Email :</span>
                            <input type="text" name="email" value="<?php echo $data["email"] ?>">
                        </div>
                        <div class="inputBox">
                            <span>Phone No :</span>
                            <input type="text" name="phone" value="<?php echo $data["phone"] ?>">
                        </div>
                        <div class="inputBox">
                            <span>Address :</span>
                            <input type="text" name="address" value="<?php echo $data["address"] ?>">
                        </div>
                        <div class="inputBox">
                            <span>City :</span>
                            <input type="text" name="city" value="<?php echo $data["city"] ?>">
                        </div>
                    </div>

                    <div class="col">

                        <h3 class="title">Item Details</h3>
                        <div class="inputBox">
                            <span>Order ID :</span>
                            <input name="order_id" type="text" value="<?php echo $data["payment_id"] ?>" disabled>
                        </div>
                        <div class="inputBox">
                            <span>Payment Reason :</span>
                            <input type="text" name="items" value="<?php echo $data["reason"] ?>" disabled>
                        </div>
                        <div class="flex">
                            <div class="inputBox">
                                <span>Amount :</span>
                                <input type="text" name="amount" value="<?php echo $data["amount"] ?>" disabled>
                            </div>
                            <div class="inputBox">
                                <span>Currency :</span>
                                <input type="text" name="currency" value="LKR" disabled>
                            </div>
                        </div>
                    </div>
                </div>
                <input type="submit" value="Continue to payment" class="submit-btn">
            </form>
            <script>
                window.onload = function() {
                    let paymentForm = document.getElementById('paymentForm');
                    paymentForm.addEventListener('submit', (event) => {
                        event.preventDefault();

                        // Payment completed. It can be a successful failure.
                        payhere.onCompleted = function onCompleted(orderId) {
                            Swal.fire({
                                title: 'Loading',
                                html: 'Please wait...',
                                showConfirmButton: false,
                                allowOutsideClick: false,
                                allowEscapeKey: false,
                                didOpen: () => {
                                    Swal.showLoading();
                                }
                            });
                            console.log("Payment completed. OrderID:" + orderId);
                            var xhr = new XMLHttpRequest(); // create a new XMLHttpRequest object
                            xhr.open(
                                "GET",
                                "<?= URLROOT ?>/Payments/paymentSuccess",
                                true
                            ); // set the request method and URL
                            xhr.send();
                            xhr.onreadystatechange = function() {
                                // set the callback function
                                if (xhr.readyState == 4) {
                                    Swal.close();
                                    console.log(xhr.responseText);
                                    if (xhr.responseText == 1) {
                                        Swal.fire({
                                            title: 'Payment Successful',
                                            text: "Redirecting to the next page...",
                                            icon: "success",
                                            showCancelButton: false,
                                            allowOutsideClick: false,
                                            allowEscapeKey: false,
                                            confirmButtonColor: "#3085d6",
                                            confirmButtonText: "OK",
                                        }).then((result) => {
                                            if (result.isConfirmed) {
                                                window.location.href = "<?= URLROOT ?>/Payments";
                                            }
                                        });

                                    } else {
                                        Swal.fire({
                                            icon: 'error',
                                            title: 'Payment Failed',
                                            text: 'Your payment was unsuccessful!',
                                            allowOutsideClick: false,
                                            allowEscapeKey: false,
                                        });
                                    }
                                }
                            }
                            // Note: validate the payment and show success or failure page to the customer
                        };

                        // Payment window closed
                        payhere.onDismissed = function onDismissed() {
                            // Note: Prompt user to pay again or show an error page
                            console.log("Payment dismissed");
                        };

                        // Error occurred
                        payhere.onError = function onError(error) {
                            // Note: show an error page
                            console.log("Error:" + error);
                        };

                        // Put the payment variables here
                        var payment = {
                            "sandbox": true,
                            "merchant_id": document.getElementsByName("merchant_id")[0].value, // Replace your Merchant ID
                            "return_url": undefined, // Important
                            "cancel_url": undefined, // Important
                            "notify_url": "http://sample.com/notify",
                            "order_id": document.getElementsByName("order_id")[0].value,
                            "items": document.getElementsByName("items")[0].value,
                            "amount": document.getElementsByName("amount")[0].value,
                            "currency": "LKR",
                            "hash": document.getElementsByName("hash")[0].value, // *Replace with generated hash retrieved from backend
                            "first_name": document.getElementsByName("first_name")[0].value,
                            "last_name": document.getElementsByName("last_name")[0].value,
                            "email": document.getElementsByName("email")[0].value,
                            "phone": document.getElementsByName("phone")[0].value,
                            "address": document.getElementsByName("address")[0].value,
                            "city": document.getElementsByName("city")[0].value,
                            "country": "Sri Lanka"
                        };

                        // Show the payhere.js popup, when "PayHere Pay" is clicked
                        payhere.startPayment(payment);

                    });
                }
            </script>

        </div>

        </section>



    </body>
    <?php require APPROOT . '/views/inc/footer.php'; ?>