<?php 
class SendRideRequests extends Controller{
public $requestModel;
public function __construct()
  {
    $this->requestModel = $this->model('Sendrequest');
  }

  public function getVehicles(){
  $vehicles = $this->requestModel->getVehicles();
  $data = [
  'vehicles' => $vehicles
  ];

    $this->view('users/parent/sendrequest',$data);
  
   
}

 
}