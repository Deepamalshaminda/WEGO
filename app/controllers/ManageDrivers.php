<?php
  class ManageDrivers extends Controller {
    public $userModel;
    public $viewDashboardModel;
    public $vehicleModel;

    public function __construct(){
      if(!isLoggedIn()){
        redirect('ManageDrivers/viewDashboard');
      }

      //$this->requestModel = $this->model('Request');
      $this ->vehicleModel = $this->model('ManageDriver');
      $this ->viewDashboardModel = $this->model('viewDashboard');
    }

    public function viewDashboard(){
      $dashboard = $this->viewDashboardModel->viewDashboard();
      $data = [
        'dashboard' => $dashboard
      ];
      $this->view('users/driver/dashboard', $data);
    }

    public function index(){
      
      $requests = $this->vehicleModel->getVehicleDetails();

      $data = [
        'requests' => $requests
      ];

      $this->view('users/driver/viewvehicle', $data);
    }

    public function acceptRequest(){
      $requests = $this->vehicleModel->getRequests();
        
      //$vehicle = $this->vehicleModel->getRequestById($id);
      //$user = $this->userModel->getUserById($vehicle->vehicleid);
    
      $data = [
          'vehicle' =>'' ,
          'user' => '',
          'requests' => $requests
      ];
      $this->view('users/driver/viewvehicle', $data);
    }
    
    public function viewProfile(){
      $data = [
        'title' => 'Profile',
      ];

      $this->view('users/driver/driver_profile', $data);
    }
  }

  ?>