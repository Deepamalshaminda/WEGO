<?php
  class D_ManageDrivers extends Controller {
    public $userModel;
    public $viewDashboardModel;
    public $requestModel;

    public function __construct(){
      if(!isLoggedIn()){
        redirect('D_ManageDrivers/viewDashboard');
      }

      //$this->requestModel = $this->model('Request');
      $this ->requestModel = $this->model('D_ManageDriver');
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
      
      $requests = $this->requestModel->getVehicleDetails();

      $data = [
        'requests' => $requests
      ];

      $this->view('users/driver/d_viewvehicle', $data);
    }

    public function getRideRequest(){
      $requests = array();
      $requests = $this->requestModel->getRequests($_SESSION['user_id']);
  
      $data = [
          'vehicle' =>'' ,
          'user' => '',
          'requests' => $requests
      ];
      $this->view('users/driver/d_acceptriderequest', $data);
    }

    public function acceptRideRequest($se_id){

      if ($this->requestModel->acceptRideRequest($se_id)){
        redirect('D_ManageDrivers/getRideRequest');
        return true;
      }

      $this->view('users/driver/d_acceptriderequest');
      return false;
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