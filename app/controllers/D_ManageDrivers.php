n<?php
  class D_ManageDrivers extends Controller {
    public $userModel;
    public $viewDashboardModel;
    public $model;
    public $connRequestModel;

    public function __construct(){
      if(!isLoggedIn()){
        redirect('users/login');
      }

      $this->model = $this->model('D_ManageDriver');
      $this->connRequestModel = $this->model('D_ConnectionRequest');
      $this->viewDashboardModel = $this->model('viewDashboard');
    }

    public function viewDashboard(){
      $dashboard = $this->viewDashboardModel->viewDashboard();
      $data = [
        'dashboard' => $dashboard
      ];
      $this->view('users/driver/d_dashboard', $data);
    }

    public function index(){
      
      $requests = $this->model->getVehicleDetails();

      $data = [
        'requests' => $requests
      ];

      $this->view('users/driver/d_viewvehicle', $data);
    }

    public function RideRequests(){

      $requests = $this->model->getRequestsFromParents($_SESSION['user_id']);
  
      $data = [
          'vehicle' =>'' ,
          'user' => '',
          'requests' => $requests
      ];

      $this->view('users/driver/d_acceptriderequest', $data);
    }

    public function accept($requestId){

      if ($this->model->acceptRideRequests($requestId)){
        redirect('D_ManageDrivers/RideRequests');
        return true;
      };

      $this->view('users/driver/d_acceptriderequest');
      return false;
    }

    public function decline($requestId){

      if ($this->model->declineRideRequests($requestId)){
        redirect('D_ManageDrivers/RideRequests');
        return true;
      };
      
      $this->view('users/driver/d_acceptriderequest');
      return false;
    }

    public function checkTripInfo(){

      $this->view('users/driver/d_checktripinfo');

    }

    public function getOngoingTripInfo(){

      $this->sendJson($this->model->viewOngoingTrip($_SESSION['user_id']));

    }

    public function getCompletedTripsInfo(){

      $this->sendJson($this->model->viewCompletedTrips($_SESSION['user_id']));

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