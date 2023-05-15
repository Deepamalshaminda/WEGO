<?php require APPROOT . '/views/inc/header.php'; ?>

<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/admin_dashboard.css">
<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/vehicle.css">
<link rel="stylesheet" href="<?php echo URLROOT; ?>/js/tab.js">



<title><?php echo SITENAME; ?></title>
<html>

</head>



<meta name="viewport" content="width=device-width, initial-scale=1.0">
<body>


<?php require APPROOT . '/views/inc/admin_sidenavbar.php' ;?>
     
    <div class="home-content">
    <div class="tab">
        <button class="tablink" onclick="openPage('rides')" id="defaultOpen" >Rides</button>
        <button class="tablink" onclick="openPage('reservations')" >Reservations</button>
        
    </div>
    <div class="search-box">
        <input type="text" placeholder="Search...">
        <div class='bx bx-search' ></div>
      </div>
    

<div id="rides" class="tabcontent">
  <div class="friend-list" id="results">
    <!-- <div class="friend-card">
      
      <div class="friend-name"><img src="../public/img/v1.png" class="friend-picture" >
      <div class="details">
      <p> Reservation Id : 001 </p> 
      <p>Driver Id : 030 </p> 
      <p>Vehicle Id : KT 8976 </p>
      <p>Payments : Rs 2500.00 </p>
      </div>
      </div>
      <br>
      <br>
      
    </div> -->
    <?php $count = 0; ?>
    <?php foreach($data['transactions'] as $transaction): ?>
      <?php if ($count >= 2) break; ?>
    <div class="friend-card">
    
      <div class="friend-name"><img src="../public/img/v2.png" class="friend-picture" >
        <div class="details">
          <p> <?php echo $transaction->earning_rec_id; ?> </p> 
          <p>Supplier Id : 025 </p> 
          <p>Vehicle No : <?php echo $transaction->vehicleno;?> </p> 
          <p>Amount : Rs <?php echo $transaction->total_earnings;?> </p>
        </div>
      </div>
      <br>
      <br>
      
    </div>
    <?php $count++; ?>
    <?php endforeach; ?>
    
</div>

    <div>
    <button id="viewall">View All</button>
    </div>
  
</div>
    
    </body>




    <!--<?php require APPROOT . '/views/inc/footer.php'; ?>-->

    <script>
      const resultsPerPage = 4;
const allResults = <?php echo json_encode($data['transactions']); ?>;

const viewAllButton = document.getElementById('viewall');
const resultsContainer = document.getElementById('results');

viewAllButton.addEventListener('click', () => {
  // Remove results from the container
  resultsContainer.innerHTML = '';
  // Add  results to the container
  allResults.forEach((transaction) => {
    const resultElement = document.createElement('div');
    resultElement.classList.add('friend-card');
    resultElement.innerHTML = `
      <div class="friend-name"><img src="../public/img/v2.png" class="friend-picture" >
        <div class="details">
          <p>${transaction.earning_rec_id}</p> 
          <p>Supplier Id : 025</p> 
          <p>Vehicle Id : ${transaction.vehicleno}</p> 
          <p>No of Passengers : ${transaction.no_ofPassengers}</p> 
          <p>Amount : Rs ${transaction.total_earnings}</p>
        </div>
      </div>
      <br>
      <br>
    `;
    resultsContainer.appendChild(resultElement);
  });
});

// first page of results initially
// allResults.slice(0, resultsPerPage).forEach((transaction) => {
//   const resultElement = document.createElement('div');
//   resultElement.classList.add('friend-card');
//   resultElement.innerHTML = `
//     <div class="friend-name"><img src="../public/img/v2.png" class="friend-picture" >
//       <div class="details">
//         <p>${transaction.earning_rec_id}</p> 
//         <p>Supplier Id : 025</p> 
//         <p>Vehicle Id : ${transaction.vehicleno}</p> 
//         <p>No of Passengers : 24</p> 
//         <p>Amount : Rs ${transaction.total_earnings}</p>
//       </div>
//     </div>
//     <br>
//     <br>
//   `;
//   resultsContainer.appendChild(resultElement);
// });

    </script>
    