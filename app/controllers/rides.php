<?php

use helpers\Email;

class rides extends Controller
{
  public function viewRides(){
    //view
    $this->view('users/supplier/rides');
  }

  public function assignChangeDrivers(){
    // load the assignDrivers model
    require_once APPROOT . '/models/assignDrivers.php'; 

    // create a new instance of the assignDrivers model, passing in the user ID
    $assignDrivers = new assignDrivers($_SESSION['user_id']);

    // retrieve the list of vehicles for the current user from the database
    $vehicles = $assignDrivers->getVehiclesByUser();

    // pass the list of vehicles to the view
    $data = [
        'vehicles' => $vehicles
    ];
    $this->view('users/supplier/assignchange', $data);
  }
  //getVehicleByVehicleId


  public function assignDrivers($vehicle_id){
    
    // load the assignDrivers model
    require_once APPROOT . '/models/assignDrivers.php'; 

    // create a new instance of the assignDrivers model
    $assignDrivers = new assignDrivers($_SESSION['user_id']);

  
    // retrieve the list of drivers from the database
    $vehicle = $assignDrivers->getVehicleByVehicleId($vehicle_id);
    $drivers = $assignDrivers->getDrivers();
    
    // retrieve the selected vehicle information from the form data
    $vehicle_id = $vehicle -> ve_id;
    $vehicle_no = $vehicle -> vehicleno;
    $route = $vehicle -> route;
    

    // pass the selected vehicle information to the view
    $data = [
        'driver_id' => $driver_id,
        'vehicle_id' => $vehicle_id,
        'vehicle_no' => $vehicle_no,
        

    ];
    $this->view('users/supplier/assigndrivers', $data);
  }

  public function viewVehicleDetails($vehicle_id){
    
    // load the assignDrivers model
    require_once APPROOT . '/models/VehicleDetails.php'; 

    // create a new instance of the assignDrivers model
    $VehicleDetails = new VehicleDetails($_SESSION['user_id']);


    // retrieve the list of drivers from the database
   // $vehicle = $VehicleDetails->getVehicledetailsbyVehicleId($vehicle_id);
    
    
    // retrieve the selected vehicle information from the form data
    // $data =[
    // 'vehicle_id' => $vehicle_id,
    // 'vehicle_no' => $vehicle_no,
    // 'model' => $model,
    // 'color' => $color,
    // 'route' => $route,
    // 'year' => $year,
    // 'address'=> $address,
    // 'starttime' => $starttime,
    // 'seatingcapacity'=>$seatingcapacity,
    // 'Ac'=>$Ac,
    // 'expirylicence'=>$expirylicence,
    // 'comments'=>$comments,
    // 'service_type'=> $service_type,
    // 'charge_for_a_km'=> $charge_for_a_km,
    // ];
    
     $this->view('users/supplier/ViewVehicleData');
  }


  public function assignDriverToVehicle(){
    //load the assignDrivers model
    require_once APPROOT . '/models/assignDrivers.php'; 

    $data = [
      'vehicleno'=> $_POST['vehicleno'],
      'vehicleid'=> $_POST['vehicleid'],
      'route'=> $_POST['route'],
      'driverid'=> $_POST['driverid']
    ];   
  
    //create a new instance of the assignDrivers model
    $assignDrivers = new assignDrivers($_SESSION['user_id']);

    $result = $assignDrivers->getDriverEmailbyID($data['driverid']);
    $email = new Email($result);//driverge email eka
    $email->sendUserAssigningEmail();

    //retrieve the selected driver and vehicle information from the form data
    $driver_id = $_POST['driverid'];
    $vehicle_id = $_POST['vehicleid'];

   // assign the selected driver to the selected vehicle in the database
    $assignDrivers->assignDriverToVehicle($driver_id, $vehicle_id);

   // redirect back to the assignChangeDrivers page
    redirect('rides/assignChangeDrivers');
}
 //public function viewRideInfo(){
  //  view
  // $this->view('users/supplier/ongoing');
  //}
 
  public function viewRideInfo(){
    // load the assignDrivers model
    require_once APPROOT . '/models/assignDrivers.php'; 

    // create a new instance of the assignDrivers model, passing in the user ID
    $assignDrivers = new assignDrivers($_SESSION['user_id']);

    // retrieve the list of vehicles for the current user from the database
    $vehicles = $assignDrivers->getRideInfo();

    // pass the list of vehicles to the view
    $data = [
        'vehicles' => $vehicles
        
        
    ];
    $this->view('users/supplier/ongoing', $data);
  }

  public function viewCompleted(){
    // load the assignDrivers model
    require_once APPROOT . '/models/assignDrivers.php'; 

    // create a new instance of the assignDrivers model, passing in the user ID
    $assignDrivers = new assignDrivers($_SESSION['user_id']);

    // retrieve the list of vehicles for the current user from the database
    $vehicles = $assignDrivers->getCompletedRides();

    // pass the list of vehicles to the view
    $data = [
        'vehicles' => $vehicles
        
        
    ];
    $this->view('users/supplier/ongoing', $data);
  }

  
}
