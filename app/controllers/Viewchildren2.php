<?php 
class Viewchildren2 extends Controller
{
    
    
public $userModel;
  public function __construct()
  {
    // $this->userModel = $this->model('User');
  }

  public function viewchildren2(){
    //view
    $this->view('users/parent/viewchildren2');
}
}