<?php
class rides extends Controller
{
  public function viewRides(){
    //view
    $this->view('users/supplier/rides');
  }

  public function assignChangeDrivers(){
    // load the assignDrivers model
    require_once APPROOT . '/models/assignDrivers.php'; 

    // create a new instance of the assignDrivers model, passing in the user ID
    $assignDrivers = new assignDrivers($_SESSION['user_id']);

    // retrieve the list of vehicles for the current user from the database
    $vehicles = $assignDrivers->getVehiclesByUser();

    //print_r($vehicles);

    // pass the list of vehicles to the view
    $data = [
        'vehicles' => $vehicles
    ];
    $this->view('users/supplier/assignchange', $data);
}







 // public function viewRideInfo(){
    //view
    //$this->view('users/supplier/ongoing');
  //}

  public function assignDrivers(){
    //view
    $this->view('users/supplier/assigndrivers');
  }

  public function changeDrivers(){
    //view
    $this->view('users/supplier/changedrivers');
  }

}