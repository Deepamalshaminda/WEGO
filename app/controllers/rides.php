<?php

use helpers\Email;

class Rides extends Controller {
    public function viewRides() {
        $this->view('users/supplier/rides');
    }

    public function assignChangeDrivers() {
        require_once APPROOT . '/models/assignDrivers.php';
        $assignDrivers = new AssignDrivers($_SESSION['user_id']);
        $vehicles = $assignDrivers->getVehiclesByUser();
        $unassignedDrivers = $assignDrivers->getUnassignedDrivers();
        $data = [
            'vehicles' => $vehicles,
            'unassignedDrivers' => $unassignedDrivers
        ];
        $this->view('users/supplier/assignchange', $data);
    }

    public function assignDrivers($vehicle_id) {
        require_once APPROOT . '/models/assignDrivers.php';
        $assignDrivers = new AssignDrivers($_SESSION['user_id']);
        $vehicle = $assignDrivers->getVehicleByVehicleId($vehicle_id);
        $drivers = $assignDrivers->getUnassignedDrivers();
        $vehicle_id = $vehicle->ve_id;
        $vehicle_no = $vehicle->vehicleno;
        $route = $vehicle->route;
        $data = [
            'drivers' => $drivers,
            'vehicle_id' => $vehicle_id,
            'vehicle_no' => $vehicle_no,
            'route' => $route,
            'unassignedDrivers' => $drivers
        ];
        $this->view('users/supplier/assigndrivers', $data);
    }

    public function assignDriverToVehicle() {
        require_once APPROOT . '/models/assignDrivers.php';
        $data = [
            'vehicleno' => $_POST['vehicleno'],
            'vehicleid' => $_POST['vehicleid'],
            'route' => $_POST['route'],
            'driverid' => $_POST['driverid']
        ];
        $assignDrivers = new AssignDrivers($_SESSION['user_id']);
        $result = $assignDrivers->getDriverEmailbyID($data['driverid']);
        $email = new Email($result);
        $email->sendUserAssigningEmail();
        $driver_id = $_POST['driverid'];
        $vehicle_id = $_POST['vehicleid'];
        $assignDrivers->assignDriverToVehicle($driver_id, $vehicle_id);
        redirect('rides/assignChangeDrivers');
    }

 
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
