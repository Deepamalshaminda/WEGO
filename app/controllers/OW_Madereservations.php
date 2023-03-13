<?php 
class OW_Madereservations extends Controller
{
    
    
public $userModel;
  public function __construct()
  {
    // $this->userModel = $this->model('User');
  }

  public function madereservation(){
    //view
    $this->view('users/officeworker/ow_madereservations');
}
}