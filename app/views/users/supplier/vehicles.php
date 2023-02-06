<?php require APPROOT . '/views/inc/header.php'; ?>

<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/dashboard.css">
<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/prequest.css">
<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/details.css">
<html>
</head>


<body>


<div class="sidebar">
    <div class="logo-details">
      <div class='bx bxl-c-plus-plus'></div>
      <span class="logo_name">&nbsp; WeGo</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="#">
            <div class='bx bx-grid-alt' ></div>
            <span class="links_name">&nbsp; Dashboard</span>
          </a>
        </li>
        <li>
          <a href="#" class="active">
            <div class='bx bx-box' ></div>
            <span class="links_name">&nbsp; Parents</span>
          </a>
        </li>
        <li>
          <a href="#">
            <div class='bx bx-list-ul' ></div>
            <span class="links_name">&nbsp; Office Workers</span>
          </a>
        </li>
        <li>
          <a href="#">
            <div class='bx bx-pie-chart-alt-2' ></div>
            <span class="links_name">&nbsp; Rides</span>
          </a>
        </li>
        <li>
          <a href="#">
            <div class='bx bx-coin-stack' ></div>
            <span class="links_name">&nbsp; Drivers</span>
          </a>
        </li>
        <li>
          <a href="#">
            <div class='bx bx-book-alt' ></div>
            <span class="links_name">&nbsp; Earnings</span>
          </a>
        </li>
        <li>
          <a href="#">
            <div class='bx bx-user' ></div>
            <span class="links_name">&nbsp; Salaries</span>
          </a>
        </li>
        <li>
          <a href="#">
            <div class='bx bx-user' ></div>
            <span class="links_name">&nbsp; Reports</span>
          </a>
        </li>
        <li>
          <a href="#">
            <div class='bx bx-user' ></div>
            <span class="links_name">&nbsp; Vehicle Documents</span>
          </a>
        </li>
        <li>
          <a href="#">
            <div class='bx bx-user' ></div>
            <span class="links_name">&nbsp; Vehicle Maintenance</span>
          </a>
        </li>
        <li>
          <a href="#">
            <div class='bx bx-user' ></div>
            <span class="links_name">&nbsp; Driver Attendace</span>
          </a>
        </li>
        <li>
          <a href="#">
            <div class='bx bx-user' ></div>
            <span class="links_name">&nbsp; Vehicle Status</span>
          </a>
        </li>
        
        
        <!--<li class="log_out">
          <a href="#">
            <div class='bx bx-log-out'></div>
            <span class="links_name">&nbsp; Log out</span>
          </a>
        </li>-->
      </ul>
  </div>
  <div class="home-section">
    <nav>
      <div class="sidebar-button">
        <div class='bx bx-menu sidebarBtn'></div>
        
      </div>
      <div class="search-box">
        <input type="text" placeholder="Search...">
        <div class='bx bx-search' ></div>
      </div>
      <div class="profile-details">
        <!-- //<img src="../public/img/images.png" alt=""> -->
        <span class="admin_name">Adam Fernando</span>
        <div class='bx bx-chevron-down' ></div>
      </div>
    </nav>
     
    <div class="home-content">
   <br>
  
  <section>
    <div class="card">
      <img src="../public/img/mazda bongo.png" alt="Vehicle 1">
      <h2>Vehicle ID 001</h2>
      <p>Vehicle No - SD 8976 <br> Model - Mazda Bongo GL <br> Color - White <br> Year - 2007 <br> Address - No.123, Temple Road, Nugegoda <br> Route - Starting from Nugegoda Junction, Kirulapana,Thibirigasyaya,Thunmulla,Union Place,Pettah <br> Start Time - 6 AM <br> Seating Capacity - 8 <br> AC - Yes <br> Licence Expiry Date - 2023/09/06</p>
      
      <button class="edit-btn">Edit</button>
<button class="delete-btn">Delete</button>
    </div>

    <div class="card">
      <img src="../public/img/micro-tourer.png" alt="Vehicle 2">
      <h2>Vehicle ID 002</h2>
      <p>Vehicle No - RF 7656 <br> Model - Micro Tourer <br> Color - Dark Blue <br> Year - 2014 <br> Address - No.78, Sri Vihar Road, Thunmulla <br> Route - Starting from Thunmulla Junction,Thibirigasyaya,Kirulapana,Nugegoda, Delkanda, Maharagama<br> Start Time - 6.30 AM <br> Seating Capacity - 18 <br> AC - No  <br> Licence Expiry Date - 2024/06/06</p>
      
      <button class="edit-btn">Edit</button>
<button class="delete-btn">Delete</button>
    </div>

    <div class="card">
      <img src="../public/img/mitsubishi-delica.png" alt="Vehicle 3">
      <h2>Vehicle ID 003</h2>
    
      <p>Vehicle No - 20-2507<br> Model - Mitsubishi Delica L 300<br> Color - White <br> Year - 1984 <br> Address - No.34, Dali Road,Colombo 4 <br> Route - Starting from Bambalapitiya,Kollupitiya,Pettah,Union Place,Thunmulla<br> Start Time - 7.00 AM <br> Seating Capacity - 9 <br> AC - No  <br> Licence Expiry Date - 2024/12/06</p>
      
      <button class="edit-btn">Edit</button>
<button class="delete-btn">Delete</button>
    </div>

    <div class="card">
      <img src="../public/img/nissan-vanette-.png" alt="Vehicle 4">
      <h2>Vehicle ID 004</h2>
    
      <p>Vehicle No - 58-4601<br> Model - Nissan Vanette<br> Color - White <br> Year - 1992 <br> Address - No.34, Dali Road,Colombo 4 <br> Route - Starting from Bambalapitiya,Kollupitiya,Pettah,Union Place,Thunmulla<br> Start Time - 7.30 AM <br> Seating Capacity - 9 <br> AC - No  <br> Licence Expiry Date - 2023/12/06</p>
      
      <button class="edit-btn">Edit</button>
<button class="delete-btn">Delete</button>
    </div>

    <div class="card">
      <img src="../public/img/toyota_hiace-removebg-preview.png" alt="Vehicle 5">
      <h2>Vehicle ID 005</h2>
    
      <p>Vehicle No - PA 3456<br> Model - Toyota Hiace Super GL<br> Color - White <br> Year - 2001 <br> Address - No.77, Temple Road,Colombo 4 <br> Route - Starting from Bambalapitiya,Kollupitiya,Pettah,Union Place,Thunmulla<br> Start Time - 7.00 AM <br> Seating Capacity - 14 <br> AC - Yes  <br> Licence Expiry Date - 2023/12/06</p>
      
      <button class="edit-btn">Edit</button>
<button class="delete-btn">Delete</button>
    </div>

    <div class="card">
      <img src="../public/img/toyota regius.png" alt="Vehicle 6">
      <h2>Vehicle ID 006</h2>
    
      <p>Vehicle No - WC 3490<br> Model - Toyota Hiace Regius<br> Color - White <br> Year - 1998 <br> Address - No.145,Delkanda Junction <br> Route - Starting from Delkanda Junction, Nugegoda,Kirulapana,Thibirigasyaya,Thunmulla, Union Place<br> Start Time - 6.00 AM <br> Seating Capacity - 8 <br> AC - Yes  <br> Licence Expiry Date - 2024/11/06</p>
      
      <button class="edit-btn">Edit</button>
<button class="delete-btn">Delete</button>
    </div>



    
         
















   


    </body>




    <?php require APPROOT . '/views/inc/footer.php'; ?>