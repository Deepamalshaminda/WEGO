<?php
  class Pages extends Controller {
    public function __construct(){
     
    }
    
    public function index(){
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
    //     'title' => 'Vehicle'
    //   ];

    //   $this->view('users/driver/addvehicle', $data);
    // }

    public function dashboard(){
      $data = [
        'title' => 'Dashboard'
      ];

      $this->view('users/officeworker/officeworkerdash', $data);
    }
  

  public function addDrivers(){
    $title = [
      'title' => 'Add Drivers'
    ];

    $this->view('drivers/addDrivers', $title);
  }


public function viewAddedDrivers(){
  $data = [
    'title' => 'View Added Drivers'
    
  ];

  redirect(drivers/viewdrve);

  // $this->view('drivers/index', $data);
}

//public function dashboard(){
  //$data = [
   // 'title' => 'Dashboard'
  //];

  //$this->view('users/admin/admin_home', $data);
//}

}