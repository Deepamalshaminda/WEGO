<?php
  class Admin extends Controller {
    public $userModel;
    public function __construct(){
      if(!isLoggedIn()){
        redirect('Admin/a_dashboard');
      }

      //$this->requestModel = $this->model('Request');
      $this ->complaintModel = $this->model('Complaint');
      $this ->userModel = $this->model('User');
      $this->profileModel = $this->model('Profile');
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
    // $requests = $this->profileModel->profile($us_id);
    

    //     $data = [
    //         'requests' => $requests,
            
    //     ];
    //view
    $this->view('users/admin/viewprofiles');
  }
  public function viewuser(){
      //  $requests = $this->profileModel->profile($us_id);
      //   $user = $this->userModel->getUserById($requests->us_id);

      //   $data = [
      //       'requests' => $requests,
      //       'user' => $user
      //   ];
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
  