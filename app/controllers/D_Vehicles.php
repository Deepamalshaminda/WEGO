<?php
  class D_Vehicles extends Controller {

    public $vehicleModel;
    public $userModel;

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

    public function show($id){
        
      $vehicle = $this->vehicleModel->getRequestById($id);
      $user = $this->userModel->getUserById($vehicle->vehicleid);
    
      $data = [
          'vehicle' => $vehicle,
          'user' => $user
      ];
      $this->view('users/driver/d_viewvehicle', $data);

  }

    public function addVehicle(){
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // Sanitize POST array
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        $data = [
          'vehicleno' => trim($_POST['vehicleno']),
          'model' => trim($_POST['model']),
          'color' => trim($_POST['color']),
          'year' => trim($_POST['year']),
          'address' => trim($_POST['address']),
          'route' => trim($_POST['route']),
          'starttime' => trim($_POST['starttime']),
          'seatingcapacity' => trim($_POST['seatingcapacity']),
          'Ac' => trim($_POST['Ac']),
          'expirylicence' => trim($_POST['expirylicence']),
          'comments' => trim($_POST['comments']),
          'vehicle_image' => trim($_POST['vehicle_image']),
          'vehicle_document' => trim($_POST['vehicle_document']),
          //'image'=>trim($_POST['image']),
          //'document'=>trim($_POST['document']),
          'vehicleno_err' => '',
          'model_err' => '',
          'color_err' => '',
          'year_err' => '',
          'address_err' => '',
          'route_err' => '',
          'starttime_err' => '',
          'seatingcapacity_err' => '',
          'Ac_err' => '',
          'expirylicence_err' => '',
          'comments_err' => '',
          'vehicle_image_err' => '',
          'vehicle_document_err' => '',
          
          //'image_err' => '',
          //'document_err' => '',
          'userid' => $_SESSION['user_id']
        ];

        // Validate vehicleno
      if (empty($data['vehicleno'])) {
        $data['vehicleno_err'] = 'Please enter vehicle number';
      }

    

      // Validate model
      if (empty($data['model'])) {
        $data['model_err'] = 'Please enter vehicle model';
      }

      // Validate color
      if (empty($data['color'])) {
        $data['color_err'] = 'Please enter color of the vehicle';
      }

      // Validate year
      if (empty($data['year'])) {
        $data['year_err'] = 'Please enter manufactured year of the vehicle';
      }

      // Validate address
      if (empty($data['address'])) {
        $data['address_err'] = 'Please enter the address';
      }

      // Validate route
      if (empty($data['route'])) {
        $data['route_err'] = 'Please enter vehicle route';
      }

      // Validate start time
      if (empty($data['starttime'])) {
        $data['starttime_err'] = 'Please enter normal journey start time';
      }

      // Validate seating capacity
      if (empty($data['seatingcapacity'])) {
        $data['seatingcapacity_err'] = 'Please enter number of seats';
      }

      // Validate AC
      if (empty($data['Ac'])) {
        $data['Ac_err'] = 'Please select Ac or Non-Ac';
      }

      // Validate expiry of licence
      if (empty($data['expirylicence'])) {
        $data['expirylicence_err'] = 'Please enter licence expiry date';
      }

      // Validate comments
      if (empty($data['comments'])) {
        $data['comments_err'] = 'Please describe if there any special conditions of the vehicle';
      }

      // Validate image
      if (empty($data['vehicle_image'])) {
        $data['vehicle_image_err'] = 'Please upload an image of your vehicle';
      }

       // Validate image
       if (empty($data['vehicle_document'])) {
        $data['vehicle_document_err'] = 'Please upload documents of your vehicle';
      }

        // Make sure no errors
        if (empty($data['vehicleno_err']) && empty($data['model_err']) && empty($data['color_err']) && empty($data['year_err']) && empty($data['address_err']) && empty($data['route_err']) && empty($data['starttime_err']) && empty($data['seatingcapacity_err']) && empty($data['Ac_err']) && empty($data['expirylicence_err']) && empty($data['comments_err'])  && empty($data['vehicle_image_err']) && empty($data['vehicle_document_err'])) {
          if ($this->vehicleModel->addvehicle($data)) {
            // flash('vehicle_message','Vehicle Added');
            // echo "added";
  
  
            return redirect('vehicles');
          } else {
            die('Something went wrong');
          }
        } else {
          // Load view with errors
          $this->view('users/supplier/addvehicle', $data);
        }
        } else {
        // Init data
        $data = [
          'vehicleno' => '',
          'model' => '',
          'color' => '',
          'year' => '',
          'address' => '',
          'route' => '',
          'starttime' => '',
          'seatingcapacity' => '',
          'Ac' => '',
          'expirylicence' => '',
          'comments' => '',
          'vehicleno_err' => '',
          'chassino_err' => '',
          'model_err' => '',
          'color_err' => '',
          'year_err' => '',
          'address_err' => '',
          'route_err' => '',
          'starttime_err' => '',
          'seatingcapacity_err' => '',
          'Ac_err' => '',
          'expirylicence_err' => '',
          'comments_err' => '',
          'vehicle_image_err' => '',
          'vehicle_document_err' => '',
          
          //'image_err' => '',
          //'document_err' =>'',
        ];
  
        
        
        // Load view
        $this->view('users/supplier/addvehicle', $data);
      }
    }

    public function studentsToBeAbsent(){
      //$dashboard = $this->viewDashboardModel->viewDashboard();
      $data = [
        'student' => 'student'
      ];
      $this->view('users/driver/d_studentstobePresent', $data);
    }

    public function completedTrips(){
      //$dashboard = $this->viewDashboardModel->viewDashboard();
      $data = [
        'completedTrip' => 'completedTrip'
      ];
      $this->view('users/driver/d_completedtrips', $data);
    }
  }