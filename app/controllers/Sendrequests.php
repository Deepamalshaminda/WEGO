<?php 
class Sendrequests extends Controller
{
    
    
public $userModel;
public $SendrequestModel;
public function __construct()
{
  $this->SendrequestModel = $this->model('Sendrequest'); 
  $this->userModel = $this->model('User');
}

  public function sendrequest(){
    
    
    $vehicles = $this->SendrequestModel->getVehicles();  
    $data = [
      'vehicles' => $vehicles
    ];

    // print_r($data);
    $this->view('users/parent/sendrequest', $data);
}

public function getVehicleById($id){
  $vehicle = $this->SendrequestModel->getVehicleById($id);
  $data = [
    'vehicle' => $vehicle
  ];
  $this->view('users/parent/viewvehicle', $data);
}

public function getSentRequests(){
    
    
  $sent = $this->SendrequestModel->getSentRequests();  
  $data = [
    'sent' => $sent
  ];

  // print_r($data);
  $this->view('users/parent/sentrequest', $data);
}
}