<?php 
class Madereservations extends Controller
{
    
    
public $userModel;
  public function __construct()
  {
    // $this->userModel = $this->model('User');
  }

  public function madereservation(){
    //view
    $this->view('users/parent/madereservations');
}
}