
<?php 
class Earningschart extends Controller
{
    
    
public $userModel;
  public function __construct()
  {
    // $this->userModel = $this->model('User');
  }


public function viewEarnings(){
            //view
            $this->view('users/supplier/earnings');
}

}
