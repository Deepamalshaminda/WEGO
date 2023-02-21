<?php 
class OW_Sendrequests extends Controller
{
    
    
public $userModel;
  public function __construct()
  {
    // $this->userModel = $this->model('User');
  }

  public function sendrequest(){
    //view
    $this->view('users/officeworker/ow_sendrequest');
}
}