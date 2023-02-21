<?php
class ParentController extends Controller {
  
  public function __construct() {
    // Load the parent model
    $this->ParentModel = $this->model('ParentModel');
  }
  
  public function getParentRequests() {
    // Get the parent requests
    $parentRequests = $this->ParentModel->getParentRequests();

    $data = [
      'parentRequests' => $parentRequests
    ];

    $this->view('users/supplier/parentrequests', $data);
  }

  private function view($parentrequests, $data = []) {
    // Check for the view file
    if(file_exists('users/supplier/parentrequests' . $parentrequests . '.php')) {
      // Require the view file
      require_once 'users/supplier/parentrequests' . $parentrequests . '.php';
    } else {
      // View does not exist
      die('View does not exist');
    }
  }
}
