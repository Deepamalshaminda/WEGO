<?php 
class Viewprofiles extends Controller
{
    
    
public $userModel;
  public function __construct()
  {
    // $this->userModel = $this->model('User');
  }

  public function viewprofile(){
    //view
    $this->view('users/admin/viewprofiles');
}
}