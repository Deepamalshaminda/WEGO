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

public function viewDriverRequest() {
  // load the assignDrivers model
  require_once APPROOT . '/models/DriverRequests.php';

  // create a new instance of the assignDrivers model, passing in the user ID
  $DriverRequests = new DriverRequests($_SESSION['user_id']);

  // retrieve the list of driver requests for the current user from the database
  $users = $DriverRequests->getDriverRequests();

  // check if a form has been submitted
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $req_id = $_POST['req_id'];
    $status = 'Accepted'; // set the status to 'accepted'

    // update the status of the request in the database
    $req_id = $DriverRequests->updateRequestStatus($req_id, $status);
    if ($req_id) {
      echo 'Request status updated successfully.';
    } else {
      echo 'Failed to update request status.';
    }
    exit;
  }
  

  // pass the list of driver requests to the view
  $data = [
    'users' => $users
  ];

  // load the view and pass the data
  $this->view('users/supplier/driverrequests', $data);
}


public function viewDriverSuggestions() {
  require_once APPROOT . '/models/driversuggestions.php';
  $driversuggestions = new driversuggestions();

  // Fetch the drivers based on the user's nearest town
  $drivers = $driversuggestions->getDriversByNearestTown($nearestTown);

  // View
  $this->view('users/supplier/driversuggestions', ['drivers' => $drivers]);
}


public function viewMyDrivers(){
    //view
    $this->view('users/supplier/mydrivers');
}

}








