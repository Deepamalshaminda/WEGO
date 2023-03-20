<?php 
class Attendencechildren extends Controller
{
    
    
public $userModel;
  public function __construct()
  {
    // $this->userModel = $this->model('User');
  }

  public function attendencechild(){
    //view
    $this->view('users/parent/Attendencechildren');
}
}