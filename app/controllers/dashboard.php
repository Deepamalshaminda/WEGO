<?php 
class Dashboard extends Controller
{
    
    
public $userModel;
  public function __construct()
  {
    // $this->userModel = $this->model('User');
  }

  public function dashboard(){
    //view
    $this->view('users/parent/parentdash');
}
}