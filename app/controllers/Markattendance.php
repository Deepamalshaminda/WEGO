<?php 
class Markattendance extends Controller
{
    
    
public $userModel;
  public function __construct()
  {
    // $this->userModel = $this->model('User');
  }

  public function markattendance(){
    //view
    $this->view('users/parent/markattendance');
}
}