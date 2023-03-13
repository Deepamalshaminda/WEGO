<?php
  class D_Vehicles extends Controller {

    public $vehicleModel;
    public $userModel;

    public function __construct(){
      if(!isLoggedIn()){
        redirect('users/login');
      }

      $this->vehicleModel = $this->model('Vehicle');
      $this ->userModel = $this->model('User');
    }

    public function index(){
      
      $vehicles = $this->vehicleModel->getVehicleDetails();

      $data = [
        'vehicles' => $vehicles
      ];

      $this->view('users/driver/d_viewvehicle', $data);
    }

    public function show($id){
        
      $vehicle = $this->vehicleModel->getRequestById($id);
      $user = $this->userModel->getUserById($vehicle->vehicleid);
    
      $data = [
          'vehicle' => $vehicle,
          'user' => $user
      ];
      $this->view('users/driver/d_viewvehicle', $data);

  }

    public function addVehicle(){
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // Sanitize POST array
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        $data = [
          'vehiclenumber' => trim($_POST['vehiclenumber']),
          'vehicletype' => trim($_POST['vehicletype']),
          'initiallocation' => trim($_POST['initiallocation']),
          'route' => trim($_POST['route']),
          'user_id' => $_SESSION['user_id'],
          'vehiclenumber_err' => '',
          'vehicletype_err' => '',
          'initiallocation_err' => '',
          'route_err' => ''
        ];

        // Validate data
        if(empty($data['vehiclenumber'])){
          $data['vehiclenumber_err'] = 'Please enter title';
        }
        if(empty($data['vehicletype'])){
          $data['vehicletype_err'] = 'Please enter body text';
        }
        if(empty($data['initiallocation'])){
          $data['initiallocation_err'] = 'Please enter body text';
        }
        if(empty($data['route'])){
          $data['route_err'] = 'Please enter body text';
        }

        // Make sure no errors
        if(empty($data['vehiclenumber_err']) && empty($data['vehicletype_err']) && empty($data['initiallocation_err']) && empty($data['route_err'])){
          // Validated
          if($this->vehicleModel->addVehicle($data)){
            flash('vehicle_message', 'Vehicle Added');
            redirect('D_Vehicles/addVehicle');
          } else {
            die('Something went wrong');
          }
        } else {
          // Load view with errors
          $this->view('users/driver/addvehicle', $data);
        }

      } else {
        $data = [
          'vehiclenumber' => '',
          'vehicletype' => '',
          'initiallocation' => '',
          'route' => ''
        ];
        $this->view('users/driver/d_addvehicle', $data);
      }
    }

    public function studentsToBeAbsent(){
      //$dashboard = $this->viewDashboardModel->viewDashboard();
      $data = [
        'student' => 'student'
      ];
      $this->view('users/driver/d_studentstobeabsent', $data);
    }

    public function completedTrips(){
      //$dashboard = $this->viewDashboardModel->viewDashboard();
      $data = [
        'completedTrip' => 'completedTrip'
      ];
      $this->view('users/driver/d_completedtrips', $data);
    }
  }