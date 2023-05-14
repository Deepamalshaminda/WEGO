<?php 
class driver extends Controller
{
    
    
public $userModel;
  public function __construct()
  {
    // $this->userModel = $this->model('User');
  }

  public function viewDrivers(){
    //view
    $this->view('users/supplier/drivers');
}

public function viewDriverRequest(){
            // load the assignDrivers model
    require_once APPROOT . '/models/assignDrivers.php'; 

    // create a new instance of the assignDrivers model, passing in the user ID
    $assignDrivers = new assignDrivers($_SESSION['user_id']);

    // retrieve the list of vehicles for the current user from the database
    $vehicles = $assignDrivers->getVehiclesByUser();

    // pass the list of vehicles to the view
    $data = [
        'vehicles' => $vehicles
    ];
   
            $this->view('users/supplier/driverrequests');
}

public function viewDriverSuggestions(){
    //view
    $this->view('users/supplier/driversuggestions');
}
public function viewMyDrivers(){
    //view
    $this->view('users/supplier/mydrivers');
}

}








