<?php 
class Users extends Controller
{public $userModel;
  public function __construct()
  {
    $this->userModel = $this->model('User');
  }
  public function register()
  {
    // Check for POST
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      // Process form

      // Sanitize POST data
      $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

      // Init data
      $data = [
        'name' => trim($_POST['name']),
        'nic' => trim($_POST['nic']), 
        'gender' => trim($_POST['gender']),
        'dob' => trim($_POST['dob']),
        'province' => trim($_POST['province']),
        'district' => trim($_POST['district']),
        'nearestTown' => trim($_POST['nearestTown']),
        'address' => trim($_POST['address']),
        'contactNumber' => trim($_POST['contactNumber']),
        'email' => trim($_POST['email']),
        'user_role' => trim($_POST['user_role']),
        'password' => trim($_POST['password']),
        'confirm_password' => trim($_POST['confirm_password']),
        'name_err' => '',
        'nic_err' => '',
        'gender_err' => '',
        'dob_err' => '',
        'province_err' => '',
        'district_err' => '',
        'nearestTown_err' => '',
        'address_err' => '',
        'contactNumber_err' => '',
        'email_err' => '',
        'password_err' => '',
        'confirm_password_err' => ''
      ];

      // Validate Email
      if (empty($data['email'])) {
        $data['email_err'] = 'Please enter email';
      } else {
        // Check email
        if ($this->userModel->findUserByEmail($data['email'])) {
          $data['email_err'] = 'Email is already taken';
        }
      }

      // Validate Name
      if (empty($data['name'])) {
        $data['name_err'] = 'Please enter name';
      }

      // Validate NIC
      if (empty($data['nic'])) {
        $data['nic_err'] = 'Please enter NIC';
      }

      // Validate grnder
      if (empty($data['gender'])) {
        $data['gender_err'] = 'Please fill this field';
      }

      // Validate dob
      if (empty($data['dob'])) {
        $data['dob_err'] = 'Please enter dob';
      }

      // Validate province
      if (empty($data['province'])) {
        $data['province_err'] = 'Please fill this field';
      }

      // Validate district
      if (empty($data['district'])) {
        $data['district_err'] = 'Please fill this field';
      }

      // Validate town
      if (empty($data['nearestTown'])) {
        $data['nearestTown_err'] = 'Please fill this field';
      }

      // Validate address
      if (empty($data['address'])) {
        $data['address_err'] = 'Please enter address';
      }

      // Validate contactno
      if (empty($data['contactNumber'])) {
        $data['contactNumber_err'] = 'Please enter contact No';
      }

      // Validate Password
      if (empty($data['password'])) {
        $data['password_err'] = 'Please enter password';
      } elseif (strlen($data['password']) < 6) {
        $data['password_err'] = 'Password must be at least 6 characters';
      }

      // Validate Confirm Password
      if (empty($data['confirm_password'])) {
        $data['confirm_password_err'] = 'Please confirm password';
      } else {
        if ($data['password'] != $data['confirm_password']) {
          $data['confirm_password_err'] = 'Passwords do not match';
        }
      }

      // Make sure errors are empty
      if (empty($data['email_err']) && empty($data['name_err']) && empty($data['nic_err']) && empty($data['gender_err']) && empty($data['dob_err']) && empty($data['province_err']) && empty($data['district_err']) && empty($data['nearestTown_err']) && empty($data['address_err']) && empty($data['contactNumber_err']) && empty($data['password_err']) && empty($data['confirm_password_err'])) {
        // Validated

        // Hash Password
        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

        // Register User
        if ($this->userModel->register($data)) {
          redirect('users/login');
        } else {
          die('Something went wrong');
        }
      } else {
        // Load view with errors
        $this->view('users/register', $data);
      }
    } else {
      // Init data

      $data = [
        'name' => '',
        'nic' => '',
        'gender' => '',
        'dob' => '',
        'province' => '',
        'district' => '',
        'nearestTown' => '',
        'address' => '',
        'contactNumber' => '',
        'email' => '',
        'password' => '',
        'user_role'=>'',
        'confirm_password' => '',
        'name_err' => '',
        'nic_err' => '',
        'gender_err' => '',
        'dob_err' => '',
        'province_err' => '',
        'district_err' => '',
        'nearestTown_err' => '',
        'address_err' => '',
        'contactNumber_err' => '',
        'email_err' => '',
        'password_err' => '',
        'confirm_password_err' => ''
      ];

      // Load view
      $this->view('users/register', $data);
    }
  }


  public function login()
  {
    // Check for POST
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      // Process form
      // Sanitize POST data
      $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

      // Init data
      $data = [
        'email' => trim($_POST['email']),
        'password' => trim($_POST['password']),
        // 'role_id' => trim($_POST['user-role']),
        'email_err' => '',
        'password_err' => '',
        // 'role_id_err'=>'',
      ];

      // Validate Email
      if (empty($data['email'])) {
        $data['email_err'] = 'Please enter email';
      }

      // Validate Password
      if (empty($data['password'])) {
        $data['password_err'] = 'Please enter password';
      }

      // Make sure errors are empty
      if (empty($data['email_err']) && empty($data['password_err'])) {
        // Validated 
      //   $this->view('users/supplier/supplier', $data);
      // } else {
      //   // Load view with errors
      //   $this->view('users/login', $data);
      // }
      // $role_id = $this->userModel->getUserRoleByEmail($data['email']); 
      $loggedInUser = $this->userModel->login($data['email'], $data['password']);
      $role_id = $loggedInUser->role_id;
      switch($role_id){
        case 1:
          
          // if($loggedInUser){
            //$this->view('users/driver/d_dashboard');
            redirect('D_ManageDrivers/viewDashboard');
          // }
          break;
        case 2:
          // $loggedInUser = $this->userModel->login($data['email'], $data['password']);
          // if($loggedInUser){
          $this->view('users/supplier/supplier');
          // }
          break;
        case 3:
          // $loggedInUser = $this->userModel->login($data['email'], $data['password']);
          // if($loggedInUser){
          $this->view('users/parent/parentdash');
          // }
          break;
        case 4:
          // $loggedInUser = $this->userModel->login($data['email'], $data['password']);
          // if($loggedInUser){
            $this->view('users/officeworker/ow_officeworkerdash');
          // }
          break;
        case 5:
          // $loggedInUser = $this->userModel->login($data['email'], $data['password']);
          // if($loggedInUser){
            $this->view('users/admin/admindash');
          // }
          break;

      }

      if($loggedInUser){
        // Create Session
        $this->createUserSession($loggedInUser);
      } else {
        $data['password_err'] = 'Password incorrect';

        $this->view('users/login', $data);
      }
    } else {
      // Load view with errors
      $this->view('users/login', $data);
    }


    } else {
      // Init data
      $data =[    
        'email' => '',
        'password' => '',
        // 'role_id' => '',
        'email_err' => '',
        'password_err' => '', 
        // 'role_id_err' =>'',      
      ];

      // Load view
      $this->view('users/login', $data);
    }
  }

  public function createUserSession($user){
    $_SESSION['user_id'] = $user->us_id;
    $_SESSION['user_email'] = $user->email;
    $_SESSION['user_name'] = $user->name;
  }

  public function logout(){
    unset($_SESSION['user_id']);
    unset($_SESSION['user_email']);
    unset($_SESSION['user_name']);
    session_destroy();
    redirect('users/login');
  }

  public function isLoggedIn(){
    if(isset($_SESSION['user_id'])){
      return true;
    } else {
      return false;
    }
  }

}



