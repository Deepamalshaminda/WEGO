<?php 
class vehicleProfile extends Controller
{
    
    
public $userModel;
  public function __construct()
  {
    // $this->userModel = $this->model('User');
  }

  public function viewVehicleProfile(){
    //view
    $this->view('users/supplier/vehicleProfile');
}
}