<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/d_sidenavbar.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/d_studentstobeabsent.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/_base.css">
    <script src="https://unpkg.com/sweetalert@2/dist/sweetalert.min.js"></script>
    <title><?php echo SITENAME; ?></title>
</head>
<body>
<?php require APPROOT.'/views/inc/d_sidenavbar-own-school.php';?>

<main class="full-page">

    <div class="top-container col-12">
        <div class="top-container-left col-12">
            <h3>Your Added Children</h3>
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
                        <th>School</th>
                    </tr>
                    <?php
                    foreach($data['student'] as $student){?>
                        <tr>
                            <td><?php echo $student-> child_name ?></td>
                            <td><?php echo $student-> parent_contact ?></td>
                            <td><?php echo $student-> location ?></td>
                            <td><?php echo $student-> school ?></td>
                        </tr>
                    <?php } ?>
                </table>

            </div>
        </div>
    </div>
</main>

<?php require APPROOT.'/views/inc/footer.php';?>