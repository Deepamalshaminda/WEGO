<?php 
class vdashboard extends Controller
{
    
    
public $userModel;
  public function __construct()
  {
    // $this->userModel = $this->model('User');
  }

  public function viewDashboard(){
    //view
    $this->view('users/supplier/supplier');
}
}