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
  <title><?php echo SITENAME; ?></title>
</head>

<body>
  <?php require APPROOT . '/views/inc/d_sidenavbar-own-school.php'; ?>

  <main class="full-page">

    <div class="top-container col-12">
      <div class="top-container-left col-12">
        <h3>Students to be Present</h3>
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
            </tr>
            <?php
            foreach ($data['studentsToBePresent'] as $student) { ?>
              <tr>
                <td><?php echo $student->child_name ?></td>
                <td><?php echo $student->parent_contact ?></td>
                <td><?php echo $student->location ?></td>
              </tr>
            <?php } ?>
            <tr>
              <td>
                <button onclick="showStudentList()">Add Present Students</button>
                <div id="student-list">
                
                </div>
              </td>
            </tr>
          </table>

        </div>
      </div>
    </div>

    <script>
      const studentListDiv = document.getElementById('student-list');

      async function showStudentList() {
        const response = await fetch(`<?php echo URLROOT; ?>/D_Own_School_Drivers/getStudentListForTheVehicle`);
        if (response.status == 200) {
          let data = await response.json();
          
          let list = `<form action="<?php echo URLROOT ?>/D_Own_School_Drivers/updateAttendance" method="post">`;
          let student = 0;

          if(data.length != 0){
            data.forEach(element => {
            let row = `<input type="checkbox" name="student${student}" value="${element.child_id}">
            <label for="${student}-student">${element.child_name}</label><br>`;
            list += row;
            student++;
          });

          list += `<input type="submit" value="Submit"></form>`;
          studentListDiv.innerHTML = list;
          } else {
            studentListDiv.innerHTML = `<h5>No more students to be marked</h5>`
          }
        }
      }
    </script>
  </main>

  <?php require APPROOT . '/views/inc/footer.php'; ?>