<?php 
class Rideschedules extends Controller
{
    
    
public $userModel;
  public function __construct()
  {
    // $this->userModel = $this->model('User');
  }

  public function rideschedule(){
    //view
    $this->view('users/admin/rideschedule');
}
}