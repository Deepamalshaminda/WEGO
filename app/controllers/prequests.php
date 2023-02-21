<?php 
class prequests extends Controller
{

    
    
public $userModel;
  public function __construct()
  {
    // $this->userModel = $this->model('User');
  }


public function viewParentRequest(){
            //view
            $this->view('users/supplier/parentrequests');
}


}

