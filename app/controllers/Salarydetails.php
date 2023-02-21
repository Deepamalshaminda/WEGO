<?php 
class Salarydetails extends Controller
{
    
    
public $userModel;
  public function __construct()
  {
    // $this->userModel = $this->model('User');
  }

  public function viewSalaryInfo(){
    //view
    $this->view('users/supplier/salaries');
}
}