<?php
  class Admin extends Controller {
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

    
    public function a_dashboard(){
      $data = [
        'title' => 'Admin'
      ];
    
      $this->view('users/admin/admindash', $data);
    }
    
  
    public function complaints(){
      $data = [
        'title' => 'complaint'
      ];
      //view
      $this->view('users/admin/complaint');
  }

  public function viewcomplaint(){
    $data = [
      'title' => 'viewcomplaint'
    ];
    //view
    $this->view('users/admin/viewcomplaint');
}

    public function rideschedule(){
      $data = [
        'title' => 'rides'
      ];
    //view
    $this->view('users/admin/rideschedule');
  }

  public function pendingride(){
    $data = [
      'title' => 'rides'
    ];
  //view
  $this->view('users/admin/pendingride');
}

  public function vehicles(){
    $data = [
      'title' => 'vehicles'
    ];
    //view
    $this->view('users/admin/vehicle');
  }
  public function viewvehicle(){
    $data = [
      'title' => 'viewvehicles'
    ];
    //view
    $this->view('users/admin/viewvehicle');
  }
  public function addvehicle(){
    $data = [
      'title' => 'viewvehicles'
    ];
    //view
    $this->view('users/admin/vehicleadd');
  }

    public function transactions(){
      $data = [
        'title' => 'transactions'
      ];
    //view
    $this->view('users/admin/transaction');
  }
  public function viewprofile(){
    $data = [
      'title' => 'viewprofile'
    ];
    //view
    $this->view('users/admin/viewprofiles');
  }
  public function viewuser(){
    $data = [
      'title' => 'viewuser'
    ];
    //view
    $this->view('users/admin/viewuser');
  }

  public function viewride(){
    $data = [
      'title' => 'viewride'
    ];
    //view
    $this->view('users/admin/viewride');
  }

   
  }
  