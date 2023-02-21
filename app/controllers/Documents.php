<?php 
class Documents extends Controller
{
    
    
public $userModel;
  public function __construct()
  {
    // $this->userModel = $this->model('User');
  }

  public function viewDocuments(){
    //view
    $this->view('users/supplier/documents');
}
}