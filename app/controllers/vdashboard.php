<?php
class vdashboard extends Controller
{


  public $userModel;
  public function __construct()
  {
    // $this->userModel = $this->model('User');
  }

  public function viewDashboard()
  {
    //view
    $earnings_model = $this->model('Earnings');
    $earnings_data = $earnings_model->get_earnings_by_vehicle_and_month();

    $data = [
      'amounts' => $earnings_data['amounts'],
      'dates' => $earnings_data['dates']
    ];
    $this->view('users/supplier/supplier', $data);
  }
}
