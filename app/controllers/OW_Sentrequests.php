<?php 
class OW_Sentrequests extends Controller
{
    
    
public $userModel;
  public function __construct()
  {
    // $this->userModel = $this->model('User');
  }

  public function sentrequest(){
    //view
    $this->view('users/officeworker/ow_sentrequest');
}
}