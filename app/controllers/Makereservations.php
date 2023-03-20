<?php 
class Makereservations extends Controller
{
    
    
public $userModel;
  public function __construct()
  {
    // $this->userModel = $this->model('User');
  }

  public function makereservation(){
    //view
    $this->view('users/parent/makereservations');
}
}