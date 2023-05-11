<?php
class Rides extends Controller
{
  public function viewRides(){
    //view
    $this->view('users/supplier/rides');
  }

  public function assignChangeDrivers(){
    // load the assignDrivers model
    require_once APPROOT . '/models/assignDrivers.php'; 

    // create a new instance of the assignDrivers model
    $assignDrivers = new assignDrivers();

    // retrieve the list of vehicles for the current user from the database
    $vehicles = $assignDrivers->getVehiclesByUser();

    // pass the list of vehicles to the view
    $data = [
        'vehicles' => $vehicles
    ];
    $this->view('users/supplier/assignchange', $data);
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
