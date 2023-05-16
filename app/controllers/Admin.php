<?php
  class Admin extends Controller {
    public $userModel;
    public function __construct(){
      if(!isLoggedIn()){
        redirect('Admin/a_dashboard');
      }

      //$this->requestModel = $this->model('Request');
      $this ->complaintModel = $this->model('Complaint');
      $this->profileModel = $this->model('Profile');
      $this->transactionModel = $this->model('Transaction');
      $this->userModel = $this->model('User');
      $this->vehicleModel = $this->model('Vehicle');
      $this->rideModel = $this->model('Ride');
      // $this->rideModel = $this->model('Ride');
      

    }
    
    public function index(){
      $data = [
        'title' => 'projectwego',
        
      ];
     
      $this->view('pages/index', $data);
    }

    public function about(){
      $data = [
        'title' => 'About Us',
        
      ];

      $this->view('pages/about', $data);
    }

    
    public function a_dashboard(){
      $data = [
        'title' => 'Admin'
      ];
    
      $this->view('users/admin/admindash', $data);
    }
    
  
    public function complaints()
    {
      $data = [];
      $data['complaints'] =  $this-> complaintModel->getComplaints();
      $this->view('users/admin/complaint', $data);
    }
  
    public function viewcomplaint($co_id)
    {
      $data = [];
      $data['complaint'] =  $this-> complaintModel ->getComplaintById($co_id);
  
      $this->view('users/admin/viewcomplaint', $data);
    }

    public function rideschedule(){
      $data = [];
      $data['rides'] =  $this->rideModel->viewrides();
      //view
    //view
    $this->view('users/admin/rideschedule',$data);
  }

  public function viewride($trip_id){
    $data = [];
    $data['rides'] =  $this->rideModel->viewridesById($trip_id);
    //view
    $this->view('users/admin/viewride',$data);
  }

  public function pendingride(){
    $data = [];
    // $data['pending_rides'] =  $this->rideModel->getPendingrides();
  //view
  $this->view('users/admin/pendingride');
}



public function vehicles(){
  $data = [];
  $data['vehicle']=$this->model('Vehicle')->showVehicles();
  //view
  $this->view('users/admin/vehicles',$data);
}
public function vehicle(){
  $data = [];
  $data['vehicle']=$this->model('Vehicle')->showVehicles();
  //view
  $this->view('users/admin/vehicle',$data);
}
public function viewvehicle($ve_id){
  $data = [];
  $data['vehicle']=$this->model('Vehicle')->showVehiclesById($ve_id);
  //view
  $this->view('users/admin/viewvehicle',$data);
}
public function addvehicle($ve_id){
  $data = [];
  $data['vehicle'] =  $this->model('Vehicle')->showVehiclesById($ve_id);
  //view
  $this->view('users/admin/vehicleadd',$data);
}

public function download($ve_id)
{
  $vehicle = $this->model('Vehicle')->showVehiclesById($ve_id);

  
  if (!$vehicle) {
      flash('error', 'Vehicle not found');
      redirect('vehicles');
  }

  
  if (!$vehicle->vehicle_document) {
      flash('error', 'No document uploaded');
      redirect('vehicles');
  }

  // file path
  $file = APPROOT . '/../public/' . $vehicle->vehicle_document;


  
  if (!file_exists($file)) {
      flash('error', 'File not found');
      redirect('vehicles');
  }

  //headers
  header('Content-Description: File Transfer');
  header('Content-Type: application/octet-stream');
  header('Content-Disposition: attachment; filename="' . basename($file) . '"');
  header('Expires: 0');
  header('Cache-Control: must-revalidate');
  header('Pragma: public');
  header('Content-Length: ' . filesize($file));

  
  readfile($file);
}


public function approve($ve_id)
{
if ($this->model('Vehicle')->approveVehicleRequests($ve_id)) {
  redirect('Admin/addvehicle');
  return true;
} else {
  $this->view('users/admin/vehicle');
  return false;
}
}

public function deny($ve_id){

  if ($this->model('Vehicle')->denyVehicleRequests($ve_id)){
    redirect('Admin/addvehicle');
    return true;
  };

  $this->view('users/admin/vehicleadd');
  return false;
}
    public function transactions(){
      $data = [];
      $data['transactions'] =  $this->transactionModel->getTransactions();
    //view
    $this->view('users/admin/transaction', $data);
  }
  public function viewprofile(){
    $data = [];
    $data['users'] =  $this->userModel->getUsers();
    //view
    $this->view('users/admin/viewprofiles', $data);
  }
  public function viewuser($us_id){
    $data = [];
    $data['users'] =  $this->userModel->getUsersById($us_id);

    //view
    $this->view('users/admin/viewuser' ,$data);
  }
  
  
  public function suspendUser($us_id){

    if ($this->model('User')->suspendUser($us_id)){
      redirect('Admin/viewUser');
      return true;
    };
  
    $this->view('users/admin/viewUser');
    return false;
  }
  public function dashboard(){

    $total_rides = $this->rideModel->calculateTotalRides();
    $total_vehicles = $this->vehicleModel->calculateTotalVehicles();
    $chart = $this->transactionModel->calculateTransactions();
   

    $data = [
       'total_rides' => $total_rides,
       'total_vehicles' => $total_vehicles,
       'chart' => $chart,
    
    ];

    $this->view('admin/admindash', $data);
}
  

}
   
  
  