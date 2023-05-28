<?php 
class prequests extends Controller
{

    
    
public $userModel;
  public function __construct()
  {
    // $this->userModel = $this->model('User');
  }


public function viewParentRequest(){

    // load the  model
    require_once APPROOT . '/models/ParentRequests.php';
  
    // create a new instance of the parentrequest model, passing in the user ID
    $ParentRequests = new ParentRequests($_SESSION['user_id']);
  
    // retrieve the list of driver requests for the current user from the database
    $users = $ParentRequests->getParentRequests();
  
    // check if a form has been submitted
    // if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //   $req_id = $_POST['req_id'];
    //   $status = 'Accepted'; // set the status to 'accepted'
  
    //   // update the status of the request in the database
    //   $req_id = $ParentRequests->updateRequestStatus($req_id, $status);
    //   if ($req_id) {
    //     echo 'Request status updated successfully.';
    //   } else {
    //     echo 'Failed to update request status.';
    //   }
    //   exit;
    // }
    
  
    // pass the list of driver requests to the view
    $data = [
      'users' => $users
    ];
  
    // load the view and pass the data
    $this->view('users/supplier/parentrequests', $data);
  }
            


}

