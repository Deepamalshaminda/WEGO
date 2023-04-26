<?php
  class D_Vehicles extends Controller {

    public function __construct(){
      if(!isLoggedIn()){
        redirect('users/login');
      }

      $this->vehicleModel = $this->model('Vehicle');
      $this ->userModel = $this->model('User');
    }

    public function index(){
      
      $vehicles = $this->vehicleModel->getVehicleDetails();

      $data = [
        'vehicles' => $vehicles
      ];

      $this->view('users/driver/d_viewvehicle', $data);
    }
  }