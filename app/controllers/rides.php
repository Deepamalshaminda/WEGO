<?php 
class rides extends Controller
{
    
    
public $userModel;
  public function __construct()
  {
    // $this->userModel = $this->model('User');
  }

  public function viewRides(){
    //view
    $this->view('users/supplier/rides');
}

public function assignChangeDrivers(){
    //view
    $this->view('users/supplier/assignchange');
}

public function viewRideInfo(){
    //view
    $this->view('users/supplier/ongoing');
}

public function assignDrivers(){
  //view
  $this->view('users/supplier/assigndrivers');
}

public function changeDrivers(){
  //view
  $this->view('users/supplier/changedrivers');
}


}