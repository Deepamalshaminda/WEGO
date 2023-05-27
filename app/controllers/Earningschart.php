
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


public function  thisMonthIncome()  {
	$earnings_model = $this->model('Earnings');
	$earnings_data = $earnings_model->get_earnings_by_vehicle_and_month();

	$data = [
		'amounts' => $earnings_data['amounts'],
		'dates' => $earnings_data['dates']
	];

	$this->view('users/supplier/thisMonthIncome', $data);
}


}




  //public function earningSummary(){

//}

//public function earningsFromVehicles(){

//}

