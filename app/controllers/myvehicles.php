
<?php 
class myvehicles extends Controller
{
    
    
public $userModel;
  public function __construct()
  {
    // $this->userModel = $this->model('User');
  }


public function viewMyVehicles(){
            //view
            $this->view('users/supplier/vehicles');
}

}
