<?php 
class driver extends Controller
{
    
    
public $userModel;
  public function __construct()
  {
    // $this->userModel = $this->model('User');
  }

  public function viewDrivers(){
    //view
    $this->view('users/supplier/drivers');
}

public function viewDriverRequest(){
            //view
            $this->view('users/supplier/driverrequests');
}

public function viewDriverSuggestions(){
    //view
    $this->view('users/supplier/driversuggestions');
}
public function viewMyDrivers(){
    //view
    $this->view('users/supplier/mydrivers');
}

}








