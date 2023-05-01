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
      $data = [];
      $data['transactions'] =  $this->transactionModel->getTransactions();
    //view
    $this->view('users/admin/transaction', $data);
  }
  public function viewprofile(){
    $data = [];
    $data['users'] =  $this->model('User')->getUsers();
    //view
    $this->view('users/admin/viewprofiles', $data);
  }
  public function viewuser($us_id){
    $data = [];
    $data['users'] =  $this->model('User')->getUsersById($us_id);

    //view
    $this->view('users/admin/viewuser' ,$data);
  }

  public function viewride(){
    $data = [
      'title' => 'viewride'
    ];
    //view
    $this->view('users/admin/viewride');
  }

   
  }
  