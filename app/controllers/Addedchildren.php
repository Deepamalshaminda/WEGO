<?php 
class Addedchildren extends Controller
{
    
    
public $userModel;
  public function __construct()
  {
    // $this->userModel = $this->model('User');
  }

  public function addedchildren(){
    //view
    $this->view('users/parent/addedchildren');
}
}