<?php 
class wrequests extends Controller
{
    
    
public $userModel;
  public function __construct()
  {
    // $this->userModel = $this->model('User');
  }


public function viewWorkerRequest(){
            //view
            $this->view('users/supplier/workerrequest');
}

}

