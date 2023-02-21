<?php 
class OW_Payments extends Controller
{
    
    
public $userModel;
  public function __construct()
  {
    // $this->userModel = $this->model('User');
  }

  public function payment(){
    //view
    $this->view('users/officeworker/ow_payments');
}
}