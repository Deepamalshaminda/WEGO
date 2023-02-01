<?php
  class Pages extends Controller {
    public function __construct(){
     
    }
    
    public function index(){

      if(isLoggedIn()){
        redirect('pages');
      }

      $data = [
        'title' => 'WEGO',
      ];
     
      $this->view('pages/index', $data);
    }

    public function about(){
      $data = [
        'title' => 'About Us'
      ];

      $this->view('pages/about', $data);
    }

    // public function vehicle(){
    //   $data = [
    //     'title' => 'Vehicle',
    //      'vehiclenumber_err' => '',
    //       'vehicletype_err' => '',
    //       'initiallocation_err' => '',
    //       'route_err' => ''
    //   ];

    //   $this->view('users/driver/addvehicle', $data);
    // }

    // public function viewVehicle(){
    //   $data = [
    //     'title' => 'View Vehicle'
    //   ];

    //   $this->view('users/driver/viewvehicle', $data);
    // }

    public function dashboard(){
      $data = [
        'title' => 'Dashboard'
      ];

      $this->view('users/driver/dashboard', $data);
    }
  }