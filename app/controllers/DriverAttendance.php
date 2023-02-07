<?php 
class DriverAttendance extends Controller
{
    
    
public $userModel;
  public function __construct()
  {
    // $this->userModel = $this->model('User');
  }

  public function viewDriverAttendance(){
    //view
    $this->view('users/supplier/driver_attendance');
}
}