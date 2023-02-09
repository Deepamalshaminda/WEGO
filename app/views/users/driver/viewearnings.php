<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/sidenavbar.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/viewearnings.css">
  <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/_base.css">
    <title>Document</title>
</head>
<body>
  <?php require APPROOT.'/views/inc/sidenavbar.php';?>

  <!-- <table>
  <tr>
    <th>Company</th>
    <th>Contact</th>
    <th>Country</th>
  </tr>
  <tr>
    <td>Alfreds Futterkiste</td>
    <td>Maria Anders</td>
    <td>Germany</td>
  </tr>
  <tr>
    <td>Centro comercial Moctezuma</td>
    <td>Francisco Chang</td>
    <td>Mexico</td>
  </tr>
  <tr>
    <td>Ernst Handel</td>
    <td>Roland Mendel</td>
    <td>Austria</td>
  </tr>
  <tr>
    <td>Island Trading</td>
    <td>Helen Bennett</td>
    <td>UK</td>
  </tr>
  <tr>
    <td>Laughing Bacchus Winecellars</td>
    <td>Yoshi Tannamuri</td>
    <td>Canada</td>
  </tr>
  <tr>
    <td>Magazzini Alimentari Riuniti</td>
    <td>Giovanni Rovelli</td>
    <td>Italy</td>
  </tr>
</table> -->

<main class="full-page">
  <!-- <div class="check-trip-info-page">
    <div class="top-container col-12">
      <div class="top-container-left col-6">
        <h3>Ongoing Trips</h3>
      </div>
      <div class="top-container-right col-6">
        <h3>Completed Trips</h3>
      </div>
    </div>
  </div> -->

    <div class="top-container col-12">
        <div class="top-container-left col-6">
            <h3>Earnings Feom Reservations</h3>
        </div>


        <div class="top-container-right col-6">
            <h3>Earnings From Regular Rides</h3>
        </div>
    </div>

    <div class="card-row col-12">
        <div class="card-row-left col-8">
            <div class="card-row-left-container col-10">
              <div class="trip-id col-12">
                <h1>Earnings For Month - JULY</h1>
              </div>

              <div class="details col-12">
                <table>
                  <tr>
                    <th>Company</th>
                    <th>Contact</th>
                    <th>Country</th>
                  </tr>
                  <tr>
                    <td>Alfreds Futterkiste</td>
                    <td>Maria Anders</td>
                    <td>Germany</td>
                  </tr>
                  <tr>
                    <td>Centro comercial Moctezuma</td>
                    <td>Francisco Chang</td>
                    <td>Mexico</td>
                  </tr>
                  <tr>
                    <td>Ernst Handel</td>
                    <td>Roland Mendel</td>
                    <td>Austria</td>
                  </tr>
                  <tr>
                    <td>Island Trading</td>
                    <td>Helen Bennett</td>
                    <td>UK</td>
                  </tr>
                  <tr>
                    <td>Laughing Bacchus Winecellars</td>
                    <td>Yoshi Tannamuri</td>
                    <td>Canada</td>
                  </tr>
                  <tr>
                    <td>Magazzini Alimentari Riuniti</td>
                    <td>Giovanni Rovelli</td>
                    <td>Italy</td>
                  </tr>
                </table>
                
            </div>
        </div>

    </div>
</main>

  <?php require APPROOT.'/views/inc/footer.php';?>