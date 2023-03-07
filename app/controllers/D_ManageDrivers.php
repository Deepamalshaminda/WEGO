<?php
  class D_ManageDrivers extends Controller {
    public $userModel;
    public $viewDashboardModel;
    public $vehicleModel;

    public function __construct(){
      if(!isLoggedIn()){
        redirect('D_ManageDrivers/viewDashboard');
      }

      //$this->requestModel = $this->model('Request');
      $this ->vehicleModel = $this->model('D_ManageDriver');
      $this ->viewDashboardModel = $this->model('viewDashboard');
    }

    public function viewDashboard(){
      $dashboard = $this->viewDashboardModel->viewDashboard();
      $data = [
        'dashboard' => $dashboard
      ];
      $this->view('users/driver/d_dashboard', $data);
    }

    public function index(){
      
      $requests = $this->vehicleModel->getVehicleDetails();

      $data = [
        'requests' => $requests
      ];

      $this->view('users/driver/d_viewvehicle', $data);
    }

    public function acceptRideRequest(){
      $requests = array();
      $requests = $this->vehicleModel->getRequests($_SESSION['user_id']);
        
      //$vehicle = $this->vehicleModel->getRequestById($id);
      //$user = $this->userModel->getUserById($vehicle->vehicleid);
    
      $data = [
          'vehicle' =>'' ,
          'user' => '',
          'requests' => $requests
      ];
      $this->view('users/driver/d_acceptriderequest', $data);
    }

    public function checkTripInfo(){
      //$dashboard = $this->viewDashboardModel->viewDashboard();
      $data = [
        'trip' => 'trip'
      ];
      $this->view('users/driver/d_checktripinfo', $data);
    }

    public function viewEarnings(){
      //$dashboard = $this->viewDashboardModel->viewDashboard();
      $data = [
        'earnings' => 'earnings'
      ];
      $this->view('users/driver/d_viewearnings', $data);
    }
    
    public function viewProfile(){
      $data = [
        'title' => 'Profile',
      ];

      $this->view('users/driver/d_driver_profile', $data);
    }
  }

  ?>