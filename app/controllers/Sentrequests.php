<?php 
class Sentrequests extends Controller
{
    
    
public $userModel;
  public function __construct()
  {
    // $this->userModel = $this->model('User');
  }

  public function sentrequest(){
    //view
    $this->view('users/officeworker/sentrequest');
}
}