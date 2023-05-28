<?php require APPROOT . '/views/inc/header.php'; ?>

<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/admin_dashboard.css">
<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/viewcomplaint.css">
<link rel="stylesheet" href="<?php echo URLROOT; ?>/js/dropdown.js">
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
            <span class="sBtn-text"> Respond  </span>
            
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