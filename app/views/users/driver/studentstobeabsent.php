<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/sidenavbar.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/studentstobeabsent.css">
  <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/_base.css">
    <title><?php echo SITENAME; ?></title>
</head>
<body>
  <?php require APPROOT.'/views/inc/d_sidenavbar.php';?>

  <main class="full-page">

    <div class="top-container col-12">
        <div class="top-container-left col-12">
            <h3>Students to be Absent</h3>
        </div>
        <div class="top-container-right">
            <h3></h3>
        </div>
    </div>

    <div class="card-row col-12">
        <div class="card-row-left col-12">
            <div class="card-row-left-container col-10">
                <table class="col-12">
                  <tr>
                    <th>Student Name</th>
                    <th>Parent Contact</th>
                    <th>Location</th>
                    <th>Confirm Absence</th>
                    
                  </tr>
                  <tr>
              <td>Deepamal Shaminda</td>
              <td>076-7671283</td>
              <td>Pamankada</td>
              <th><input type="checkbox"></th>
            </tr>
            <tr>
              <td>Parindi Dewmini</td>
              <td>070-2678678</td>
              <td>Thimbirigasyaya</td>
              <th><input type="checkbox"></th>
            </tr>
            <tr>
              <td>Ishini Amandi</td>
              <td>071-3688991</td>
              <td>Nugegoda</td>
              <th><input type="checkbox"></th>
            </tr>
            <tr>
              <td>Naduni Manawasinghe</td>
              <td>076-6778615</td>
              <td>Bambalapitiya</td>
              <th><input type="checkbox"></th>
            </tr>
            <tr>
              <td>Surani sooriyaarachchi</td>
              <td>077-2871877</td>
              <td>Maharagama</td>
              <th><input type="checkbox"></th>
            </tr>
            <tr>
              <td>Thisara Bhagya</td>
              <td>076-6781526</td>
              <td>Kirulapone</td>
              <th><input type="checkbox"></th>
            </tr>
          </table>
                
        </div>
      </div>
    </div>
</main>

  <?php require APPROOT.'/views/inc/footer.php';?>