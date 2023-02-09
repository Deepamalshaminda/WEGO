<?php
  class Users extends Controller {
    public function __construct(){
      $this->userModel = $this->model('User');
    }

    public function register(){
      // Check for POST
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // Process form
  
        // Sanitize POST data
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        // Init data
        $data =[
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
        if(empty($data['email'])){
          $data['email_err'] = 'Pleae enter email';
        } else {
          // Check email
          if($this->userModel->findUserByEmail($data['email'])){
            $data['email_err'] = 'Email is already taken';
          }
        }

        // Validate Name
        if(empty($data['name'])){
          $data['name_err'] = 'Please enter name';
        }

        // Validate NIC
        if(empty($data['nic'])){
          $data['nic_err'] = 'Please enter NIC';
        }

        // Validate Name
        if(empty($data['gender'])){
          $data['gender_err'] = 'Please enter name';
        }

        // Validate Name
        if(empty($data['dob'])){
          $data['dob_err'] = 'Please enter name';
        }

        // Validate Name
        if(empty($data['province'])){
          $data['province_err'] = 'Please enter name';
        }

        // Validate Name
        if(empty($data['district'])){
          $data['district_err'] = 'Please enter name';
        }

        // Validate Name
        if(empty($data['nearestTown'])){
          $data['nearestTown_err'] = 'Please enter name';
        }

        // Validate Name
        if(empty($data['address'])){
          $data['address_err'] = 'Please enter name';
        }

        // Validate Name
        if(empty($data['contactNumber'])){
          $data['contactNumber_err'] = 'Please enter name';
        }

        // Validate Password
        if(empty($data['password'])){
          $data['password_err'] = 'Pleae enter password';
        } elseif(strlen($data['password']) < 6){
          $data['password_err'] = 'Password must be at least 6 characters';
        }

        // Validate Confirm Password
        if(empty($data['confirm_password'])){
          $data['confirm_password_err'] = 'Pleae confirm password';
        } else {
          if($data['password'] != $data['confirm_password']){
            $data['confirm_password_err'] = 'Passwords do not match';
          }
        }

        // Make sure errors are empty
        if(empty($data['email_err']) && empty($data['name_err']) && empty($data['nic_err']) && empty($data['gender_err']) && empty($data['dob_err']) && empty($data['province_err']) && empty($data['district_err']) && empty($data['nearestTown_err']) && empty($data['address_err']) && empty($data['contactNumber_err']) && empty($data['password_err']) && empty($data['confirm_password_err'])){
          // Validated
          
          // Hash Password
          $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

          // Register User
          if($this->userModel->register($data)){
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

        $data =[
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

    public function login(){
      // Check for POST
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // Process form
        // Sanitize POST data
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        
        // Init data
        $data =[
          'email' => trim($_POST['email']),
          'password' => trim($_POST['password']),
          'email_err' => '',
          'password_err' => '',      
        ];

        // Validate Email
        if(empty($data['email'])){
          $data['email_err'] = 'Pleae enter email';
        }

        // Validate Password
        if(empty($data['password'])){
          $data['password_err'] = 'Please enter password';
        }
        

        // Check for User/Email
        if($this->userModel->findUserByEmail($data['email'])){
          //User found
        }else {
          // User not found
          $data['email_err'] = 'No user found';
        }

        // Make sure errors are empty
        if(empty($data['email_err']) && empty($data['password_err'])){
          // Validated

  //         //Check and set logged in user
  //         $loggedInUser = $this ->userModel ->login($data['email'], $data['password'] );

  //         if($loggedInUser){
  //            // Create session
  //         $this -> createUserSession($loggedInUser);   
  //            //die('SUCCESS');
  //         $this->view('users/admin/admin_home', $data);
  //         }else{
  //           $data['password_err'] = 'Password incorrect';

  //           $this->view ('users/login', $data);
  //         }
  

          
  //       } else {
  //         // Load view with errors
  //         $this->view('users/login', $data);
  //       }


  //     } else {
  //       // Init data
  //       $data =[    
  //         'email' => '',
  //         'password' => '',
  //         'email_err' => '',
  //         'password_err' => '',        
  //       ];

  //       // Load view
  //       $this->view('users/login', $data);
  //     }
  //   }

  //   public function createUserSession($user){
  //     $_SESSION['user_id'] = $user -> id;
  //     $_SESSION['user_email'] = $user -> email;
  //     $_SESSION['user_name'] = $user -> name;
  //     redirect('pages/index');
  //   }
  // }

  // Check and set logged in user
  $loggedInUser = $this->userModel->login($data['email'], $data['password']);

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
    'email_err' => '',
    'password_err' => '',        
  ];

  // Load view
  $this->view('users/login', $data);
}
}

public function createUserSession($user){
$_SESSION['user_id'] = $user->id;
$_SESSION['user_email'] = $user->email;
$_SESSION['user_name'] = $user->name;
redirect('pages/dashboard');
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