<?php 
class OW_Attendance extends Controller
{
    
    
public $userModel;
  public function __construct()
  {
    // $this->userModel = $this->model('User');
  }

  public function attendance(){
    //view
    $this->view('users/officeworker/ow_attendance');
}
}