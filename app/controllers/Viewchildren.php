<?php 
class Viewchildren extends Controller
{
    
    
public $userModel;
  public function __construct()
  {
    // $this->userModel = $this->model('User');
  }

  public function viewchildren(){
    //view
    $this->view('users/parent/viewchildren');
}
}