<?php 
class Vmaintenance extends Controller
{
    
    
public $userModel;
  public function __construct()
  {
    // $this->userModel = $this->model('User');
  }

  public function viewMaintenanceDetails(){
    //view
    $this->view('users/supplier/maintenance');
}
}