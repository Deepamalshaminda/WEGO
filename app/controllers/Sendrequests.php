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
  $children = $this->SendrequestModel->getChildrenByParent();
  $data = [
    'vehicle' => $vehicle,
    'children'=> $children
    
  ];
  $this->view('users/parent/viewvehicle', $data);
}
//view all sent requests
public function getSentRequests(){
    
    
  $sent = $this->SendrequestModel->getSentRequests();  
  $data = [
    'sent' => $sent
  ];

  // print_r($data);
  $this->view('users/parent/sentrequest', $data);
}

//view one sent request
public function getSentRequestById($id){
  $sentr = $this->SendrequestModel->getSentRequestById($id);
  $data = [
    'sentr' => $sentr
  ];
  $this->view('users/parent/sentrequestdetails', $data);
}

 // delete request
 public function deleteRequestById($id){

  $sent = $this->SendrequestModel->deleteRequestById($id);
  // $data = [
  //   'children' => $children
  // ];
  $this->view('users/parent/parentdash');
}
}