<?php 
class Viewreservedprofiles extends Controller
{
    
    
public $userModel;
  public function __construct()
  {
    // $this->userModel = $this->model('User');
  }

  public function viewreservedprofile(){
    //view
    $this->view('users/parent/viewprofiles');
}
}