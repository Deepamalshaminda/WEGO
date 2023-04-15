<?php
  class D_ConnectionRequests extends Controller {
    public $model;
    public $connRequestModel;

    public function __construct(){
      if(!isLoggedIn()){
        redirect('D_ManageDrivers/viewDashboard');
      }

      $this->connRequestModel = $this->model('D_ConnectionRequest');
      $this->model = $this->model('D_ManageDriver');;
    }

    public function index(){
      
      $requests = $this->model->getVehicleDetails();

      $data = [
        'requests' => $requests
      ];

      $this->view('users/driver/d_viewvehicle', $data);
    }

    public function ConnectionRequests(){

      $data = [
        'title' => 'requests',
      ];

      $this->view('users/driver/d_acceptconnrequest',$data);

    }

    public function getReceivedRequests(){

      $this->sendJson($this->connRequestModel->getRequestsFromVehicleSuppliers($_SESSION['user_id']));

    }

    public function getSentRequests(){

      $this->sendJson($this->connRequestModel->getSentRequestsToVehicleSuppliers($_SESSION['user_id']));
      
    }

    public function getSuggessions(){

      $this->sendJson($this->connRequestModel->getListOfVehicleSuppliers($_SESSION['user_id']));
      
    }


    public function accept($requestId){

      if ($this->model->acceptConnRequests($requestId)){
        redirect('D_ConnectionRequests/ConnectionRequests');
          return true;
      };

        $this->view('users/driver/d_acceptconnectionrequest');
        return false;
    }

    public function decline($requestId){

      if ($this->model->declineConnRequests($requestId)){
        redirect('D_ConnectionRequests/ConnectionRequests');
          return true;
      };
      
        $this->view('users/driver/d_acceptconnectionrequest');
        return false;
    }

    public function delete($requestId){

        if ($this->model->deleteSentRequest($requestId)){
          redirect('D_ConnectionRequests/ConnectionRequests');
          return true;
        };
        
        $this->view('users/driver/d_acceptconnectionrequest');
        return false;
      }

  }

  ?>