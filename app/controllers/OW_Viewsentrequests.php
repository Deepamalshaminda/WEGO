<?php 
class OW_Viewsentrequests extends Controller
{
    
    
public $userModel;
  public function __construct()
  {
    // $this->userModel = $this->model('User');
  }

  public function viewsentrequest(){
    //view
    $this->view('users/officeworker/ow_Viewsentrequests');
}
}