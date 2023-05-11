<?php
  class Pages extends Controller {
    public function __construct(){
     
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

    public function vehicle(){
      $data = [
        'title' => 'Vehicle'
      ];

      $this->view('users/supplier/supplier', $data);
    }

    public function viewVehicle(){
      $data = [
        'title' => 'View Vehicle'
      ];

      $this->view('users/driver/index', $data);
    }
  
    public function dashboard(){
      $data = [
        'title' => 'Dashboard'
      ];

      $this->view('users/officeworker/ow_officeworkerdash', $data);
    }
  

  public function addDrivers(){
    $title = [
      'title' => 'Add Drivers'
    ];

    $this->view('drivers/addDrivers', $title);
  }

  public function contactUs(){
    $title = [
      'title' => 'Contact Us'
    ];

    $this->view('contact_us', $title);
  }

  public function setServiceType(){
    $title = [
      'title' => 'Contact Us'
    ];

    $this->view('users/driver/d_setservicetype', $title);
  }

public function viewAddedDrivers(){
  $data = [
    'title' => 'View Added Drivers'
    
  ];

  //redirect(drivers/viewdrve);

  // $this->view('drivers/index', $data);
}

//public function dashboard(){
  //$data = [
   // 'title' => 'Dashboard'
  //];

  //$this->view('users/admin/admin_home', $data);
//}

public function d_dashboard(){
  $data = [
    'title' => 'Dashboard'
  ];

  $this->view('users/driver/d_dashboard', $data);
}
public function a_dashboard(){
  $data = [
    'title' => 'Parent'
  ];

  $this->view('users/admin/admindash', $data);
}

}