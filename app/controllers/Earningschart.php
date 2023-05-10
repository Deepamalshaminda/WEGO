
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

public function thisMonthIncome(){

 // Get the current month and year
 $current_month = date('m');
 $current_year = date('Y');

 // Get the total earnings for each vehicle for the current month
 $earnings_model = $this->model('Earnings');
 $earnings_data = $earnings_model->get_earnings_by_vehicle_and_month($current_month, $current_year);

 // Pass the data to the view
 $data = [
     'earnings_data' => $earnings_data,
 ];
 $this->view('users/supplier/thisMonthIncome', $data);
}
}




  //public function earningSummary(){

//}

//public function earningsFromVehicles(){

//}

