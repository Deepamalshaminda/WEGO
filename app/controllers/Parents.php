<?php
class Parents extends Controller
{
  public $childModel;
  public $userModel;
  public function __construct()

  {
    $this->childModel = $this->model('Child');
    $this->userModel = $this->model('User');
  }

  // get all children 
  public function getChildren()
  {

    $children = $this->childModel->getChildren();
    $data = [
      'children' => $children
    ];

    $this->view('users/parent/addedchildren', $data);
  }

  //view one child information
  public function viewChild($id)
  {
    $child = $this->childModel->getChildById($id);
    $data = [
      'child' => $child
    ];
    $this->view('users/parent/viewchild', $data);
  }

  // delete child
  public function deleteChild($id)
  {

    $children = $this->childModel->deleteChildById($id);
    // $data = [
    //   'children' => $children
    // ];
    $this->view('users/parent/parentdash');
  }

  // add child
  public function addchild()
  {

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      // Sanitize POST data
      $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

      $data = [
        'name' => trim($_POST['name']),
        'gender' => trim($_POST['gender']),
        'dob' => trim($_POST['dob']),
        'school' => trim($_POST['school']),
        'school_address' => trim($_POST['school_address']),
        'distance_to_school' => trim($_POST['distance_to_school']),
        'child_image' => !empty($_FILES['child_image']) ? trim(implode(',', (array)$_FILES['child_image'])) : '',

        'parentid' => $_SESSION['user_id'],

        'name_err' => '',
        'gender_err' => '',
        'dob_err' => '',
        'school_err' => '',
        'school_address_err' => '',
        'child_image_err' => '',
        'distance_to_school_err' => '',
      ];

      $fileChildImage = [
        'image_name' => $_FILES['child_image']['name'],
        'image_type' => $_FILES['child_image']['type'],
        'image_size' => $_FILES['child_image']['size'],
        'image_tempName' => $_FILES['child_image']['tmp_name'],
        'upload_location' => URLROOT . '/img/child_image'
      ];


      if (empty($data['name'])) {
        $data['name_err'] = 'Please enter name';
      }

      if (empty($data['gender'])) {
        $data['gender_err'] = 'Please enter your childs gender';
      }

      if (empty($data['dob'])) {
        $data['dob_err'] = 'Please enter date of birth';
      }

      if (empty($data['school'])) {
        $data['school_err'] = 'Please enter school';
      }

      if (empty($data['school_address'])) {
        $data['school_address_err'] = 'Please enter school address';
      }

      if (empty($data['distance_to_school'])) {
        $data['distance_to_school_err'] = 'Please enter distance to school(km)';
      }
     

      //validate images
      if (!empty($_FILES['child_image']['name'])) {
        $allowed_extensions = array('jpg', 'png', 'jpeg');
        $file_name = $_FILES['child_image']['name'];
        $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

        // Check if file extension is allowed 
        if (!in_array($file_ext, $allowed_extensions)) {
          $data['child_image_err'] = 'Invalid file type';
        }

        // Check if file size is less than 10 MB
        elseif ($_FILES['child_image']['size'] > 5485760) {
          $data['child_image_err'] = 'File size exceeded. Please upload an image with size less than 5 MB.';
        } else {
          $file_tmp = $_FILES['child_image']['tmp_name'];
          $file_destination = 'C:\xampp\htdocs\projectwego\public\child_image\\' . $file_name;

          echo realpath($file_destination);

          if (move_uploaded_file($file_tmp, $file_destination)) {
            echo "uploaded";
            $data['child_image'] = $file_destination;
          } else {
            $data['child_image_err'] = 'Error uploading image.';
          }
        }
      } else {
        $data['child_image_err'] = 'Please upload an image of your child.';

        // if(intval(date('Y') - date('Y',strtotime($data['dob']))) < 18){
        //     $data['dob_err']='Child age must be 18 years or less';
        // }

      }

      if (empty($data['name_err']) && empty($data['gender_err']) && empty($data['dob_err']) && empty($data['school_err']) && empty($data['school_address_err']) && empty($data['distance_to_school_err']) && empty($data['child_image_err'])) {
        if ($this->childModel->addchild($data, $fileChildImage)) {
          // flash('register_success', 'Child Added');
          $children = $this->childModel->getChildren();
          $data = [
            'children' => $children
          ];

          $this->view('users/parent/addedchildren', $data);
        } else {
          die('Something went wrong');
        }
      } else {
        $this->view('users/parent/addchild', $data);
      }
    } else {
      $data = [
        'name' => '',
        'gender' => '',
        'dob' => '',
        'school' => '',
        'school_address' => '',
        'distance_to_school' => '',
        'child_image' => '',
        //'age' => '',

        'name_err' => '',
        'gender_err' => '',
        'dob_err' => '',
        'school_err' => '',
        'school_address_err' => '',
        'distance_to_school_err' => '',
        'child_image_err' => '',
        //'age_err' => '',


      ];

      // Load view
      $this->view('users/parent/addchild', $data);
    }
  }

  // edit child
  public function editChild($id)
  {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      // Sanitize POST data
      $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
      $child = $this->childModel->getChildById($id);

      $data = [
        'ch_id' => $id,
        'name' => trim($_POST['name']),
        'gender' => trim($_POST['gender']),
        'dob' => trim($_POST['dob']),
        'school' => trim($_POST['school']),
        'school_address' => trim($_POST['school_address']),
        'distance_to_school' => trim($_POST['distance_to_school']),
        'child_image' => trim($_POST['child_image']),
        'parentid' => $_SESSION['user_id'],

        'name_err' => '',
        'gender_err' => '',
        'dob_err' => '',
        'school_err' => '',
        'school_address_err' => '',
        'distance_to_school_err' => '',
        'child_image_err' => '',
      ];


      if (empty($data['name'])) {
        $data['name_err'] = 'Please enter name';
      }

      if (empty($data['gender'])) {
        $data['gender_err'] = 'Please enter your childs gender';
      }

      if (empty($data['dob'])) {
        $data['dob_err'] = 'Please enter date of birth';
      }

      if (empty($data['school'])) {
        $data['school_err'] = 'Please enter school';
      }

      if (empty($data['school_address'])) {
        $data['school_address_err'] = 'Please enter school address';
      }

      if (empty($data['distance_to_school'])) {
        $data['distance_to_school_err'] = 'Please enter distance to school';
      }

      if (empty($data['child_image'])) {
        $data['child_image_err'] = 'Please upload your childs profile pic';
      }

      // if(intval(date('Y') - date('Y',strtotime($data['dob']))) < 18){
      //     $data['dob_err']='Child age must be 18 years or less';
      // }



      if (empty($data['name_err']) && empty($data['gender_err']) && empty($data['dob_err']) && empty($data['school_err']) && empty($data['school_address_err']) && empty($data['distance_to_school_err']) && empty($data['child_image_err'])) {
        if ($this->childModel->updateChild($data)) {
          // flash('register_success', 'Child Added');
          $children = $this->childModel->getChildren();
          $data = [
            'children' => $children
          ];

          $this->view('users/parent/addedchildren', $data);
        } else {
          die('Something went wrong');
        }
      } else {
        $this->view('users/parent/parentdash', $data);
      }
    } else {
      $child = $this->childModel->getChildById($id);

      $data = [
        'ch_id' => $id,
        'name' => $child->name,
        'gender' => $child->gender,
        'dob' => $child->dob,
        'school' => $child->school,
        'school_address' => $child->school_address,
        'distance_to_school' => $child->distance_to_school,
        'child_image' => $child->child_image,

        // 'age' => $child->age,

        'name_err' => '',
        'gender_err' => '',
        'dob_err' => '',
        'school_err' => '',
        'school_address_err' => '',
        'distance_to_school_err' => '',
        'child_image_err' => '',
        //'age_err' => '',


      ];

      // Load view
      $this->view('users/parent/editchild', $data);
    }
  }
}
