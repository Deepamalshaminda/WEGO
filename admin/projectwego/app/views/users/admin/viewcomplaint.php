<?php require APPROOT . '/views/inc/header.php'; ?>

<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/admin_dashboard.css">
<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/viewcomplaint.css">
<link rel="stylesheet" href="<?php echo URLROOT; ?>/js/dropdown.js">
<link rel="stylesheet" href="<?php echo URLROOT; ?>/js/list.js">
<title><?php echo SITENAME; ?></title>
<html>
</head>



<meta name="viewport" content="width=device-width, initial-scale=1.0">
<body>


<?php require APPROOT . '/views/inc/admin_sidenavbar.php' ;?>
     
   
  
</div>

<div class="wrapper">
    <div class="left">
        <img src ="../public/img/rr.png" 
        alt="user" width="100">
        <h4> Richard Fernando </h4>
         
    </div>
    <div class="right">
        <div class="info">
            <h2> Complain </h2>
            <br>
            <div class="info_data">
                 <div class="data">
                    <h4> Late coming in the morning regarding KV 5432 vehicle </h4>
                    <br>
                    <h4> NIC : 954332786V </h4>
                    <br>
                    <h4>Email : rich4@gmail.com </h4>
                    

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
        <script>
          const optionMenu = document.querySelector(".select-menu"),
selectBtn = optionMenu.querySelector(".select-btn"),
options = optionMenu.querySelectorAll(".option"),
sBtn_text = optionMenu.querySelector(".sBtn-text");

selectBtn.addEventListener("click" , () => optionMenu.classList.toggle("active"));

options.forEach(option =>{
    option.addEventListener("click" , ()=>{
        let selectedOption = option.querySelector(".option-text").innerText;
        sBtn_text.innerText = selectedOption;


        optionMenu.classList.remove("active")
        
    })
    
})
</script>
</div>
        
    </div>
</div>

</body>
</html>




    <!--<?php require APPROOT . '/views/inc/footer.php'; ?>-->