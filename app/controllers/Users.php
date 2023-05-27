<?php
class Users extends Controller
{
  public $userModel;
  public $driverModel;
  public $verificationModel;

  public $registering_driver = array();

  public function __construct()
  {
    $this->userModel = $this->model('User');
    $this->driverModel = $this->model('D_ManageDriver');
    // $this->view('users/index');
  }

  public function index()
  {
    // $users = $this->userModel->getUsers();

    // $data = [
    //   'users' => $users
    // ];

    $this->view('users/index');
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
        'latitude' => trim($_POST['latitude']),
        'longitude' => trim($_POST['longitude']),
        'profile_image' => !empty($_POST['profile_image']) ? trim(implode(',', (array)$_POST['profile_image'])) : '',
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
        'confirm_password_err' => '',
        'profile_image_err' => '',

      ];

      //$fileProfileImage = [
      //'image_name'=>$_FILES['profile_image']['name'],
      //'image_type'=>$_FILES['profile_image']['type'],
      //'image_size'=>$_FILES['profile_image']['size'],
      //'image_tempName'=>$_FILES['profile_image']['temp_name'],
      //'upload_location'=> PUBROOT . '/public/img/profile_image/'
      //];

      // Validate Email
      if (empty($data['email'])) {
        $data['email_err'] = 'Please enter email';
      } else {
        // Check email format
        if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
          $data['email_err'] = 'Invalid email format';
        } else {
          // Check if email already exists in database
          if ($this->userModel->findUserByEmail($data['email'])) {
            $data['email_err'] = 'Email is already taken';
          }
        }
      }
      // Validate Name
      if (empty($data['name'])) {
        $data['name_err'] = 'Please enter name';
      }

      // Validate NIC
      if (empty($data['nic'])) {
        $data['nic_err'] = 'Please enter NIC';
      } else {
        $nic = $data['nic'];
        $new_nic_regex = '/^[0-9]{12}$/'; // New NIC format: 12 digits
        $old_nic_regex = '/^[0-9]{9}[vVxX]$/'; // Old NIC format: 9 digits followed by 'v', 'V', 'x' or 'X'
        if (!preg_match($new_nic_regex, $nic) && !preg_match($old_nic_regex, $nic)) {
          $data['nic_err'] = 'Please enter a valid NIC number';
        }
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

      // Validate contact number
      if (empty($data['contactNumber'])) {
        $data['contactNumber_err'] = 'Please enter contact number';
      } else if (!preg_match('/^\d{10}$/', $data['contactNumber'])) {
        $data['contactNumber_err'] = 'Contact number must have exactly 10 digits';
      }


      // Validate Password
      if (empty($data['password'])) {
        $data['password_err'] = 'Please enter password';
      } elseif (strlen($data['password']) < 6) {
        $data['password_err'] = 'Password must be at least 6 characters';
      } elseif (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{6,}$/", $data['password'])) {
        $data['password_err'] = 'Password must contain at least one uppercase letter, one lowercase letter, one number, and one special character';
      }


      // Validate Confirm Password
      if (empty($data['confirm_password'])) {
        $data['confirm_password_err'] = 'Please confirm password';
      } else {
        if ($data['password'] != $data['confirm_password']) {
          $data['confirm_password_err'] = 'Passwords do not match';
        }
      }

      //validate profile images
      if (isset($_FILES['profile_image']) && !empty($_FILES['profile_image']['name'])) {
        $allowed_extensions = array('jpg', 'png', 'jpeg');
        $file_name = $_FILES['profile_image']['name'];
        $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

        // Check if file extension is allowed
        if (!in_array($file_ext, $allowed_extensions)) {
          $data['profile_image_err'] = 'Invalid file type';
        }

        // Check if file size is less than 10 MB
        elseif ($_FILES['profile_image']['size'] > 5485760) {
          $data['profile_image_err'] = 'File size exceeded. Please upload an image with size less than 5 MB.';
        } else {
          $file_tmp = $_FILES['profile_image']['tmp_name'];
          $file_destination = 'C:\xampp\htdocs\projectwego\public\img\profile_image\\' . $file_name;

          echo realpath($file_destination);

          if (move_uploaded_file($file_tmp, $file_destination)) {

            $data['profile_image'] = $file_destination;
          } else {
            $data['profile_image_err'] = 'Error uploading image.';
          }
        }
      } else {
        $data['profile_image_err'] = 'Please upload an image of you.';
      }


      // Make sure errors are empty
      if (empty($data['email_err']) && empty($data['name_err']) && empty($data['nic_err']) && empty($data['gender_err']) && empty($data['dob_err']) && empty($data['province_err']) && empty($data['district_err']) && empty($data['nearestTown_err']) && empty($data['address_err']) && empty($data['contactNumber_err']) && empty($data['password_err']) && empty($data['confirm_password_err'])  && empty($data['profile_image_err'])) {
        // Validated


        // Hash Password
        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);



        // Register User
        if ($this->userModel->register($data)) {
          $registering_driver = $this->userModel->getUserByEmail($data);
          $us_id = $registering_driver->us_id;
          if ($this->userModel->isDriver($data)) {
            $driver = $this->driverModel->getDriverByUserId($us_id);
            $vehicle = NULL;
            $this->createUserSession($registering_driver, $driver, $vehicle);
            $us_id = $registering_driver->us_id;
            // $this->setGlobal($us_id);
            $this->view('users/driver/d_setvehicle', $registering_driver);
          } else {
            redirect('users/login');
          }
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
        'user_role' => '',
        'confirm_password' => '',
        'latitude' => '',
        'longitude' => '',
        'profile_image' => '',
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
        'confirm_password_err' => '',
        'profile_image_err' => ''
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
        'email_err' => '',
        'password_err' => ''
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
        $driver = null;
        $vehicle=null;
        switch ($role_id) {
          case 1:
            $user = $this->userModel->getUserByEmail($data);
            $us_id = $user->us_id;

            $driver = $this->driverModel->getDriverByUserId($us_id);

            $service_type = $driver->service_type;
            $vehicle_status = $driver->vehicle_status;

            if ($vehicle_status == 'own' and $service_type == 'school') {
              $this->view('users/driver/vehicle-own-school-transport/d_dashboard-own-school', $data);
              $driver_id = $driver->driver_id;
              $vehicle = $this->userModel->getVehicleByOwnDriverId($us_id);
            } elseif ($vehicle_status == 'own' and $service_type == 'office') {
              $this->view('users/driver/vehicle-own-office-transport/d_dashboard-own-office', $data);
              $driver_id = $driver->driver_id;
              $vehicle = $this->userModel->getVehicleByOwnDriverId($us_id);
            } elseif ($vehicle_status == 'find' and $service_type == 'school') {
              $this->view('users/driver/vehicle-find-school-transport/d_dashboard-find-school', $data);
            } elseif ($vehicle_status == 'find' and $service_type == 'office') {
              $this->view('users/driver/vehicle-find-office-transport/d_dashboard-find-office', $data);
            } else {
              $this->view('users/index');
            }

            break;
          case 2:
            // $loggedInUser = $this->userModel->login($data['email'], $data['password']);
            // if($loggedInUser){
            // $this->view('users/supplier/supplier');
            redirect('/vdashboard/viewDashboard');
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

        switch($role_id){
          case 1:
            if($loggedInUser){
              $this->createUserSessionForDriver($loggedInUser, $driver, $vehicle);
            }
            else {
              $data['password_err'] = 'Password incorrect';
    
              $this->view('users/login', $data);
            }
            break;
          default:
          if($loggedInUser){
              $this->createUserSession($loggedInUser);
            }
            else {
              $data['password_err'] = 'Password incorrect';
    
              $this->view('users/login', $data);
            }
        }
      } else {
        // Load view with errors
        $this->view('users/login', $data);
      }
    } else {
      // Init data
      $data = [
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

  public function verify()
  {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $data = [
        'otp' => trim($_POST['otp']),
        'error' => '',
        'status' => ''
      ];

      $verified = $this->verificationModel->verifyOTP($data['otp']);

      if (is_numeric($data['otp']) && $verified) {
        if ($this->verificationModel->verify($verified->id)) {
          // set verification successful flash message
          // setFlash("verify","Your account has been verified",Flash::FLASH_SUCCESS);
          // redirect to the login of patient
          redirect('users/login');
        } else {
          // set verification failed flash message
          // setFlash("verify","Account verification failed!",Flash::FLASH_DANGER);
          // redirect to the signup of patient
          redirect('users/register');
        }
      } else {
        $data['error'] = "Invalid OTP";
      }
    } else {
      $data = [
        'otp' => '',
        'error' => '',
        'status' => ''
      ];
    }
    $this->view('users/signupVerification', $data);
  }



  public function createUserSession($user)
  {
    $_SESSION['user_id'] = $user->us_id;
    $_SESSION['user_email'] = $user->email;
    $_SESSION['user_name'] = $user->name;
  }
  

  public function createUserSessionForDriver($user, $driver, $vehicle)
  {

    $_SESSION['user_id'] = $user->us_id;
    $_SESSION['user_email'] = $user->email;
    $_SESSION['user_name'] = $user->name;
    if (!empty($driver)) {
      $_SESSION['driver_id'] = $driver->driver_id;
      $vehicle = $this->userModel->getVehicleByOwnDriverId($_SESSION['user_id']);
      $_SESSION['vehicle_id'] = $vehicle->ve_id;
    }
  //   $_SESSION['driver_id'] = $driver->driver_id;
  //   $vehicle = $this->userModel->getVehicleByOwnDriverId($_SESSION['user_id']);
  //   $_SESSION['vehicle_id'] = $vehicle->ve_id;
  }

  public function logout()
  {
    unset($_SESSION['user_id']);
    unset($_SESSION['user_email']);
    unset($_SESSION['user_name']);
    unset($_SESSION['child_id']);
    unset($_SESSION['parent_id']);
    session_destroy();
    redirect('users/login');
  }

  public function isLoggedIn()
  {
    if (isset($_SESSION['user_id'])) {
      return true;
    } else {
      return false;
    }
  }

  public function setVehicle($data)
  {
    // $data = [
    //   'setvehicle' => 'setVehicle'
    // ];

    $this->view('users/driver/d_setvehicle', $data);
    $loggedInUser = $this->userModel->login($data['email'], $data['password']);
    $us_id = $loggedInUser->us_id;
    $driver = $this->driverModel->getDriverByUserId($us_id);
    $driver_id = $driver->driver_id;
    $vehicle = $this->userModel->getVehicleByOwnDriverId($data, $driver_id);
    if ($loggedInUser) {
      // Create Session
      $this->createUserSession($loggedInUser, $driver, $vehicle);
    } else {
      $data['password_err'] = 'Password incorrect';

      $this->view('users/index', $data);
    }
  }

  public function setSeriviceType($data)
  {
    // $data = [
    //   'setvehicle' => 'setVehicle'
    // ];

    $this->view('users/driver/d_servicetype', $data);
    $loggedInUser = $this->userModel->login($data['email'], $data['password']);
    $us_id = $loggedInUser->us_id;
    $driver = $this->driverModel->getDriverByUserId($us_id);
    $driver_id = $driver->driver_id;
    $vehicle = $this->userModel->getVehicleByOwnDriverId($data, $driver_id);
    if ($loggedInUser) {
      // Create Session
      $this->createUserSession($loggedInUser, $driver, $vehicle);
    } else {
      $data['password_err'] = 'Password incorrect';

      $this->view('users/index', $data);
    }
  }

  public function test($email)
  {
    $this->view('users/driver/addvehicle', $email);
  }

  public function setServiceType($data)
  {
    // $data = [
    //   'setvehicle' => 'setVehicle'
    // ];

    $this->view('users/driver/d_setservicetype', $data);
  }

  public function ownVehicle($us_id)
  {
    if ($this->userModel->updateDriversVehicleOwnershipAsOwnVehicle($us_id)) {
      $this->view('users/driver/d_setservicetype', $_SESSION['user_name']);
      //redirect('users/setServiceType');
    } else {
      $this->view('users/index');
    }
  }

  public function findVehicle($us_id)
  {
    if ($this->userModel->updateDriversVehicleOwnershipAsFindVehicle($us_id)) {
      $this->view('users/driver/d_setservicetype', $_SESSION['user_name']);
      // redirect('pages/setServiceType');
    } else {
      $this->view('users/index');
    }
  }

  public function schoolService($us_id)
  {
    if ($this->userModel->updateServiceTypeAsSchoolService($us_id)) {
      session_destroy();
      redirect('users/login');
    } else {
      $this->view('users/index');
    }
  }

  public function officeService()
  {
    if ($this->userModel->updateServiceTypeAsOfficeService($_SESSION['user_id'])) {
      session_destroy();
      redirect('users/login');
    } else {
      $this->view('users/index');
    }
  }

  // public function setGlobal($us_id){
  //   $GLOBALS = array(
  //     'us_id' => $us_id
  //   );
  //   return $GLOBALS;
  // }

  public function getUserIdJson()
  {

    $this->sendJson($_SESSION);
  }
}
