<?php 
class reports extends Controller
{
    
    
public $userModel;
  public function __construct()
  {
    // $this->userModel = $this->model('User');
  }

    public function index() {
      // generate PDF here
    }
  
  

  public function viewReports(){
    //view
    $this->view('users/supplier/report');
}
}