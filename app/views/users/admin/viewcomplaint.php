<?php require APPROOT . '/views/inc/header.php';?>

<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/admin_dashboard.css">
<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/viewcomplaint.css">
<link rel="stylesheet" href="<?php echo URLROOT; ?>/js/dropdown.js">
<link rel="stylesheet" href="<?php echo URLROOT; ?>/js/tab.js">
<title><?php echo SITENAME; ?></title>
<html>
</head>



<meta name="viewport" content="width=device-width, initial-scale=1.0">
<body>


<?php require APPROOT . '/views/inc/admin_sidenavbar.php';?>



</div>

<div class="wrapper">
    <div class="left">
        <img src ="<?php echo URLROOT ?>/public/img/rr.png"
        alt="user" width="100">
        <h4> <?php echo $data['complaint']->name; ?> </h4>

    </div>
    <div class="right">
        <div class="info">
            <h2> Complaint </h2>
            <br>
            <div class="info_data">
                 <div class="data">
                    <h4> <?php echo $data['complaint']->complaint_description; ?> </h4>
                    <br>
                    <h4> NIC : <?php echo $data['complaint']->nic; ?> </h4>
                    <br>
                    <h4>Email : <?php echo $data['complaint']->email; ?> </h4>


                 </div>

            </div>
        </div>
        <br>

    <div class="select-menu">
    <div class="select-btn">
            <span class="sBtn-text"> Respond <img src="../public/img/chevron-down-regular-24.png"> </span>

        </div>
        <ul class="options">
            <li class="option">
                <i class="view"></i>
                <span class="option-text"> Suspend Account </span>
            </li>
            <li class="option">
                <i class="view"></i>
                <span class="option-text"> Awareness </span>
            </li>
        </ul>

</div>

    </div>
</div>

</body>
</html>




    <!--<?php require APPROOT . '/views/inc/footer.php';?>-->

<script>
        const optionMenu = document.querySelector(".select-menu");
        const selectBtn = optionMenu.querySelector(".select-btn");
        const options = optionMenu.querySelectorAll(".option");
        const sBtn_text = optionMenu.querySelector(".sBtn-text");
        var co_id = <?php echo $data['complaint']->co_id; ?>;


        selectBtn.addEventListener("click", () => optionMenu.classList.toggle("active"));

        options.forEach(option => {
        option.addEventListener("click", () => {
            let selectedOption = option.querySelector(".option-text").innerText;
            sBtn_text.innerText = selectedOption;
            optionMenu.classList.remove("active");

            updateComplainAction(selectedOption,co_id); //function to update the database

        });
        });

        function updateComplainAction(selectedOption, co_id) {
            console.log(selectedOption,co_id);

        // fetch("<?php echo URLROOT . '/Admin/updateComplainAction' ?>", {
        //         method: 'POST',
        //         body: JSON.stringify({ selectedOption, co_id }),
        //         headers: {
        //         'Content-Type': 'application/json'
        //         }
        //     })
        //     .then(response => {
        //         console.log(response)
        //         if (response.ok) {
        //         console.log('Database updated successfully');
        //         } else {
        //         console.error('Failed to update database');
        //         }
        //     })
        //     .catch(error => {
        //         console.error('Error occurred while updating the database', error);
        //     });

            var xhr = new XMLHttpRequest();
            xhr.open('POST', "<?php echo URLROOT . '/Admin/updateComplainAction/' ?>", true);
            xhr.setRequestHeader("Content-Type", "application/json");
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
            console.log(JSON.stringify({ selectedOption: selectedOption, co_id: co_id }));
            xhr.send(JSON.stringify({ selectedOption: selectedOption, co_id: co_id }));
        }


</script>