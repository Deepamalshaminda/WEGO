<?php 
class Complaints extends Controller
{
    
    
public $userModel;
  public function __construct()
  {
    // $this->userModel = $this->model('User');
  }

  public function complaints(){
    //view
    $this->view('users/admin/complaint');
}
}