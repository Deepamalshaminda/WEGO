<?php 
class Transactions extends Controller
{
    
    
public $userModel;
  public function __construct()
  {
    // $this->userModel = $this->model('User');
  }

  public function transactions(){
    //view
    $this->view('users/admin/transaction');
}
}