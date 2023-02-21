<?php 
class Sendrequests extends Controller
{
    
    
public $userModel;
  public function __construct()
  {
    // $this->userModel = $this->model('User');
  }

  public function sendrequest(){
    //view
    $this->view('users/parent/sendrequest');
}
}