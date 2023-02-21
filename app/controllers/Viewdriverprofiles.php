<?php 
class Viewdriverprofiles extends Controller
{
    
    
public $userModel;
  public function __construct()
  {
    // $this->userModel = $this->model('User');
  }

  public function viewdriverprofile(){
    //view
    $this->view('users/parent/viewdriverprofiles');
}
}