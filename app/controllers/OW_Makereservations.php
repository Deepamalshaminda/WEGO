<?php 
class OW_Makereservations extends Controller
{
    
    
public $userModel;
  public function __construct()
  {
    // $this->userModel = $this->model('User');
  }

  public function makereservation(){
    //view
    $this->view('users/officeworker/ow_makereservations');
}
}