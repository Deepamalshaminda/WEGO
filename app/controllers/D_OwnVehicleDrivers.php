<?php
  class D_OwnVehicleDrivers extends Controller {
    public $userModel;

    public function __construct(){
      if(!isLoggedIn()){
        redirect('users/login');
      }

      //$this->requestModel = $this->model('Request');
    }

    
  }

  ?>