<?php 
class Viewrides extends Controller
{
    
    
public $userModel;
  public function __construct()
  {
    // $this->userModel = $this->model('User');
  }

  public function viewride(){
    //view
    $this->view('users/admin/viewride');
}
}