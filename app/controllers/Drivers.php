<?php
class Drivers extends Controller{
    public function __construct(){
        // if(!isLoggedIn()){
        //   redirect('users/login');
        // }
  
        $this->driverModel = $this->model('Driver');
      }
  
      public function index(){
        
        $result = $this->driverModel->viewAddedDrivers($_SESSION['user_id']);
  
        $data = [
          'drivers' => $result
        ];
        
  
        $this->view('drivers/index]', $data);
      }
       

    public function addDrivers(){
       // Check for POST
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // Process form
  
        // Sanitize POST data
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        // Init data
        $data = [
          'name' => trim($_POST['name']),
          'email' => trim($_POST['email']),
          'nic' => trim($_POST['nic']),
          'phoneNumber' => trim($_POST['phoneNumber']),
          'licenseNo' => trim($_POST['licenseNo']),
          'licenseExpDate' => trim($_POST['licenseExpDate']),
          'feasibleTimeSlot' => trim($_POST['feasibleTimeSlot']),
          'preferedServiceType' => trim($_POST['preferedServiceType']),
          'password' => trim($_POST['password']),
          'confirm_password' => trim($_POST['confirm_password']),
          'name_err' => '',
          'email_err' => '',
          'nic_err' => '',
          'phoneNumber_err' => '',
          'licenseNo_err' => '',
          'licenseExpDate_err' => '',
          'feasibleTimeSlot_err' => '',
          'preferedServiceType_err' => '',
          'password_err' => '',
          'confirm_password_err' => '',
          'userid' => $_SESSION['user_id']
        ];

        // Validate Email
        if(empty($data['email'])){
          $data['email_err'] = 'Please enter email';
        } else {
          // Check email
          if($this->driverModel->findDriverByEmail($data['email'])){
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

        // Validate License No
        if(empty($data['licenseNo'])){
          $data['licenseNo_err'] = 'Please enter license no';
        }

        // Validate License Exp.Date
        if(empty($data['licenseExpDate'])){
          $data['licenseExpDate_err'] = 'Please enter license exp.date';
        }

        // Validate Feasible Time Slot
        if(empty($data['feasibleTimeSlot'])){
          $data['feasibleTimeSlot_err'] = 'Please enter feasible time slot';
        }

        // Validate prefered service type
        if(empty($data['preferedServiceType'])){
          $data['preferedServiceType_err'] = 'Please enter prefered service type';
        }


        // Validate Phone Number
        if(empty($data['phoneNumber'])){
          $data['phoneNumber_err'] = 'Please enter phone number';
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
        if(empty($data['email_err']) && empty($data['name_err']) && empty($data['nic_err']) && empty($data['licenseNo_err']) && empty($data['licenseExpDate_err']) && empty($data['feasibleTimeSlot_err']) && empty($data['preferedServiceType_err']) && empty($data['phoneNumber_err']) && empty($data['password_err']) && empty($data['confirm_password_err'])){
          // Validated
          
          // Hash Password
          $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

          // Add Drivers
          if($this->driverModel->addDrivers($data)){
            flash('driver_message', 'Driver Added');
            return redirect('pages/dashboard');
          } else {
            die('Something went wrong');
          }

        } else {
          // Load view with errors
          $this->view('drivers/addDrivers', $data);
        }

      } else {
        // Init data

        $data =[
            'name' => '',
            'email' => '',
            'nic' => '',
            'phoneNumber' => '',
            'licenseNo' => '',
            'licenseExpDate' => '',
            'feasibleTimeSlot' => '',
            'preferedServiceType' => '',
            'password' => '',
            'confirm_password' =>'',
            'name_err' => '',
            'email_err' => '',
            'nic_err' => '',
            'phoneNumber_err' => '',
            'licenseNo_err' => '',
            'licenseExpDate_err' => '',
            'feasibleTimeSlot_err' => '',
            'preferedServiceType_err' => '',
            'password_err' => '',
            'confirm_password_err' => ''
        ];

        // Load view
        $this -> view('drivers/addDrivers',$data);
      }
    }

    public function viewdriver(){
      $veiwdrive=$this->DriverModel->viewdrive();
      die($veiwdrive);
      $data['drivers']=$veiwdrive;
      $this->view(drivers/index,$data);

    }
       
       
        
    }
