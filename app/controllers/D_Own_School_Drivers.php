<?php
class D_Own_School_Drivers extends Controller
{
  public $viewDashboardModel;
  public $model;
  public $userModel;
  public $connRequestModel;
  public $Own_School_Driver_Model;
  public $Attendencechild;

  public function __construct()
  {
    if (!isLoggedIn()) {
      redirect('users/login');
    }

    $this->model = $this->model('D_ManageDriver');
    $this->userModel = $this->model('User');
    $this->connRequestModel = $this->model('D_ConnectionRequest');
    $this->viewDashboardModel = $this->model('viewDashboard');
    $this->Own_School_Driver_Model = $this->model('D_Own_School_Driver');
    $this->Attendencechild = $this->model('Attendencechild');
  }

  public function viewEarnings()
  {
    $month = date('m');
    $year = date('Y');
    $monthName = date('F', mktime(0, 0, 0, $month, 1));
    $payments = $this->Own_School_Driver_Model->getPaymentForVehicle($_SESSION['user_id'], $month, $year);
    $data = [
      'payments' => $payments,
      'month' => $month,
      'monthName' => $monthName,
      'year' => $year

    ];
    $this->view('users/driver/vehicle-own-school-transport/d_viewearnings', $data);
  }


  public function viewEarningsForAMonth()
  {
    // Get the month and year values from the form
    $earningsMonth = $_POST['earningsMonth'];

    // Extract the year and month values from the earningsMonth string
    $year = substr($earningsMonth, 0, 4);
    $month = substr($earningsMonth, 5, 2);
    $monthName = date('F', mktime(0, 0, 0, $month, 1));

    // Pass the year and month values to the viewEarnings function
    $payments = $this->Own_School_Driver_Model->getPresentStudentForVehicle($_SESSION['user_id'], $month, $year);
    $data = [
      'payments' => $payments,
      'month' => $month,
      'monthName' => $monthName,
      'year' => $year

    ];
    $this->view('users/driver/vehicle-own-school-transport/d_viewearnings', $data);
  }

  public function getPresentStudentForVehicle()
  {

    $studentsToBePresent = $this->Own_School_Driver_Model->getPresentStudentForVehicle($_SESSION['vehicle_id']);
    $data = [
      'studentsToBePresent' => $studentsToBePresent
    ];
    $this->view('users/driver/vehicle-own-school-transport/d_studentstobePresent', $data);
  }

  public function ConnectionRequests()
  {

    $data = [
      'title' => 'requests',
    ];

    $this->view('users/driver/d_acceptconnrequest', $data);
  }

  public function startTrip()
  {

    if (($_SERVER['REQUEST_METHOD'] == 'POST')) {
      $routeArray = $this->Own_School_Driver_Model->findStartAndEnd($_SESSION['vehicle_id']);
      // $start = 1;
      $vehicle_ID = $_SESSION['vehicle_id'];
      $array = explode(", ", $routeArray->route);

      print_r($array);

      // $destination =  2;

      $start = $array[0];
      $destination = $array[count($array) - 1];

      $data = [
        'user_id' => $_SESSION['user_id'],
        'start' => $start,
        'destination' => $destination,
        'no_of_passengers' => 2,
        've_id' => $vehicle_ID,
        'trip_status' => "Ongoing"

      ];

      $this->Own_School_Driver_Model->startTrip($data);


      $this->view('users/driver/vehicle-own-school-transport/d_dashboard-own-school');
    }
  }

  public function endTrip()
  {
    if (($_SERVER['REQUEST_METHOD'] == 'POST')) {


      $routeArray = $this->Own_School_Driver_Model->findStartAndEnd($_SESSION['vehicle_id']);
      // $start = 1;
      $vehicle_ID = $_SESSION['vehicle_id'];
      $array = explode(", ", $routeArray->route);
      $currentDate = date("Y-m-d");

      print_r($array);

      // $destination =  2;

      $start = $array[0];
      $destination = $array[count($array) - 1];

      $data = [
        'user_id' => $_SESSION['user_id'],
        'start' => $start,
        'destination' => $destination,
        'no_of_passengers' => 2,
        've_id' => $vehicle_ID,
        'trip_status' => "Ongoing",
        'date' => $currentDate

      ];

      $this->Own_School_Driver_Model->endTrip($data);


      $this->view('users/driver/vehicle-own-school-transport/d_dashboard-own-school');
    }
  }

  public function checkTripsOnSameDate()
  {
    $currentDate = date("Y-m-d");
    $vehicle_ID = $_SESSION['vehicle_id'];

    $data = [
      'user_id' => $_SESSION['user_id'],
      've_id' => $vehicle_ID,
      'date' => $currentDate

    ];

    $this->sendJson($this->Own_School_Driver_Model->checkTripsOnSameDate($data));
  }

  public function getReceivedRequests()
  {

    $this->sendJson($this->connRequestModel->getRequestsFromVehicleSuppliers($_SESSION['user_id']));
  }

  public function getSentRequests()
  {

    $this->sendJson($this->connRequestModel->getSentRequestsToVehicleSuppliers($_SESSION['user_id']));
  }

  public function getSuggessions()
  {

    $this->sendJson($this->connRequestModel->getListOfVehicleSuppliers($_SESSION['user_id']));
  }

  public function accept($requestId)
  {

    if ($this->connRequestModel->acceptConnRequests($requestId)) {
      redirect('D_Own_School_Drivers/ConnectionRequests');
      return true;
    };

    $this->view('users/driver/d_acceptconnectionrequest');
    return false;
  }

  public function decline($requestId)
  {

    if ($this->connRequestModel->declineConnRequests($requestId)) {
      redirect('D_Own_School_Drivers/ConnectionRequests');
      return true;
    };

    $this->view('users/driver/d_acceptconnectionrequest');
    return false;
  }

  public function delete($requestId)
  {

    if ($this->connRequestModel->deleteSentRequest($requestId)) {
      redirect('D_Own_School_Drivers/ConnectionRequests');
      return true;
    };

    $this->view('users/driver/d_acceptconnectionrequest');
    return false;
  }


  public function viewDashboard($user)
  {
    $data = [
      'user' => $user
    ];
    $this->view('users/driver/vehicle-own-school-transport/d_dashboard-own-school', $data);
  }

  public function viewOwnSchoolDashboard()
  {
    $data = [
      'user' => "Deep"
    ];
    $this->view('users/driver/vehicle-own-school-transport/d_dashboard-own-school', $data);
  }

  public function index()
  {

    die("Something went wrong");
  }

  public function RideRequests()
  {

    $requests = $this->Own_School_Driver_Model->getRequestsFromParents($_SESSION['user_id']);

    $data = [
      'vehicle' => '',
      'user' => '',
      'requests' => $requests
    ];

    $this->view('users/driver/vehicle-own-school-transport/d_acceptriderequest', $data);
  }

  public function acceptRideRequest($requestId)
  {

    if ($this->Own_School_Driver_Model->acceptRideRequests($requestId)) {
      redirect('D_Own_School_Drivers/RideRequests');
      return true;
    };

    $this->view('users/driver/vehicle-own-school-transport/d_acceptriderequest');
    return false;
  }

  public function declineRideRequest($requestId)
  {

    if ($this->Own_School_Driver_Model->declineRideRequests($requestId)) {
      redirect('D_Own_School_Drivers/RideRequests');
      return true;
    };

    $this->view('users/driver/vehicle-own-school-transport/d_acceptriderequest');
    return false;
  }


  // public function accept($requestId){

  //   if ($this->model->acceptRideRequests($requestId)){
  //     redirect('D_Own_School_Drivers/RideRequests');
  //     return true;
  //   };

  //   $this->view('users/driver/vehicle-own-school-transport/d_acceptriderequest');
  //   return false;
  // }

  // public function decline($requestId){

  //   if ($this->model->declineRideRequests($requestId)){
  //     redirect('D_Own_School_Drivers/RideRequests');
  //     return true;
  //   };

  //   $this->view('users/driver/vehicle-own-school-transport/d_acceptriderequest');
  //   return false;
  // }

  public function checkTripInfo()
  {

    $this->view('users/driver/vehicle-own-school-transport/d_checktripinfo');
  }

  public function getOngoingTripInfo()
  {

    $this->sendJson($this->model->viewOngoingTrip($_SESSION['user_id']));
  }

  public function getCompletedTripsInfo()
  {

    $this->sendJson($this->model->viewCompletedTrips($_SESSION['user_id']));
  }

  // public function viewEarnings(){
  //   //$dashboard = $this->viewDashboardModel->viewDashboard();
  //   $data = [
  //     'earnings' => 'earnings'
  //   ];
  //   $this->view('users/driver/vehicle-own-school-transport/d_viewearnings', $data);
  // }

  public function viewProfile()
  {
    $userId = $_SESSION['user_id'];
    $user = $this->Own_School_Driver_Model->getProfileDetails($userId);
    $data = [
      'title' => 'Profile',
      'user' => $user
    ];

    $this->view('users/driver/vehicle-own-school-transport/d_driver_profile', $data);
  }

  public function editDriverProfile()
  {

    // Check for POST
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      // Process form

      // Sanitize POST data
      $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

      $userId = $_SESSION['user_id'];
      $user = $this->Own_School_Driver_Model->getProfileDetails($userId);
      $data = [
        'user_id' => $userId,
        'user' => $user,
        'name' => trim($_POST['name']),
        'gender' => trim($_POST['gender']),
        'dob' => trim($_POST['dob']),
        'province' => trim($_POST['province']),
        'district' => trim($_POST['district']),
        'nearestTown' => trim($_POST['nearestTown']),
        'contactNumber' => trim($_POST['contactNumber']),
        'email' => trim($_POST['email']),
        'name_err' => '',
        'gender_err' => '',
        'dob_err' => '',
        'province_err' => '',
        'district_err' => '',
        'nearestTown_err' => '',
        'contactNumber_err' => '',
        'email_err' => '',
      ];

      if (empty($data['name'])) {
        $data['name_err'] = 'Please enter name';
      }

      // Validate grnder
      if (empty($data['gender'])) {
        $data['gender_err'] = 'Please fill this field';
      }

      // Validate dob
      if (empty($data['dob'])) {
        $data['dob_err'] = 'Please enter dob';
      }

      // Validate province
      if (empty($data['province'])) {
        $data['province_err'] = 'Please fill this field';
      }

      // Validate district
      if (empty($data['district'])) {
        $data['district_err'] = 'Please fill this field';
      }

      // Validate town
      if (empty($data['nearestTown'])) {
        $data['nearestTown_err'] = 'Please fill this field';
      }

      // Validate contact number
      if (empty($data['contactNumber'])) {
        $data['contactNumber_err'] = 'Please enter contact number';
      } else if (!preg_match('/^\d{10}$/', $data['contactNumber'])) {
        $data['contactNumber_err'] = 'Contact number must have exactly 10 digits';
      }


      if (empty($data['name_err']) && empty($data['gender_err']) && empty($data['dob_err']) && empty($data['province_err']) && empty($data['district_err']) && empty($data['nearestTown_err']) && empty($data['address_err']) && empty($data['contactNumber_err'])) {
        if ($this->Own_School_Driver_Model->updateProfileDetails($data)) {
          redirect('D_Own_School_Drivers/viewProfile');
        } else {
          die('success');
        }
      }
      // $this->view('users/driver/vehicle-own-school-transport/d_driver_profile_update', $data);Warning: Cannot modify header information - headers already sent by (output started at C:\wamp64\www\projectwego\app\views\inc\d_sidenavbar-own-school.php:65) in C:\wamp64\www\projectwego\app\helpers\url_helper.php on line 4

    } else {
      $userId = $_SESSION['user_id'];
      $user = $this->Own_School_Driver_Model->getProfileDetails($userId);
      $data = [
        'title' => 'Profile',
        'user' => $user
      ];
      $this->view('users/driver/vehicle-own-school-transport/d_driver_profile_update', $data);
    }
  }

  public function getDriverByUserId($us_id)
  {
    $driver = $this->model->getDriverByUserId($us_id);
    return $driver;
  }

  public function completedTrips()
  {
    //$dashboard = $this->viewDashboardModel->viewDashboard();
    $data = [
      'completedTrip' => 'completedTrip'
    ];
    $this->view('users/driver/vehicle-own-school-transport/d_completedtrips', $data);
  }
  public function checkOngoingTrip()
  {
    $ongoingTrip = $this->model->checkOngoingTrip($_SESSION['vehicle_id']);
    $trip_date = $ongoingTrip['trip_date'];
    $currentDate = date("Y-m-d");

    if ($trip_date == $currentDate) {
      return true;
    } else {
      return false;
    }
  }

  public function viewAddedChildren()
  {
    $student = $this->Own_School_Driver_Model->viewAddedChildren($_SESSION['vehicle_id']);
    $data = [
      'student' => $student
    ];
    $this->view('users/driver/vehicle-own-school-transport/d_added_children', $data);
  }

  public function getStudentListForTheVehicle()
  {
    $students = $this->Own_School_Driver_Model->getStudentListForTheVehicle($_SESSION['vehicle_id']);
    $this->sendJson($students);
  }

  public function updateAttendance()
  {
    $presentStudents[] = null;
    $element = 0;
    foreach ($_POST as $key => $value) {
      $presentStudents[$element] = $value;
      $element++;
    }

    foreach($presentStudents as $key => $value){
      $this->Own_School_Driver_Model->updateStudentAttendance($value);
    }
    // print_r($presentStudents);
    redirect('D_Own_School_Drivers/getPresentStudentForVehicle');
  }

  public function getPresentStudentsForDashboard(){
    $studentsToBePresent = $this->Own_School_Driver_Model->getPresentStudentForVehicle($_SESSION['vehicle_id']);
    $data = [
      'studentsToBePresent' => $studentsToBePresent
    ];
    $this->sendJson($studentsToBePresent);
  }

  public function addvehicle()
  {
    // Check for POST
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {


      // Process form
      // Sanitize POST data

      $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

     // print_r($_POST);

      // Init data
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
        'service_type' => trim($_POST['service_type']),
        'charge_for_a_km' => trim($_POST['charge_for_a_km']),
        'comments' => trim($_POST['comments']),
       // 'vehicle_image' => trim($_POST['vehicle_image']),
        'vehicle_image' => $_FILES['vehicle_image'],
        'vehicle_document' => !empty($_POST['vehicle_document']) ? trim(implode(',', (array)$_POST['vehicle_document'])) : '',

        

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
        'service_type_err' => '',
        'charge_for_a_km_err' => '',
        'comments_err' => '',
        'vehicle_image_err' => '',
        'vehicle_document_err' => '',
        
        
        'userid' => $_SESSION['user_id']
      ];
      //echo "<br>";
      //print_r($data);

      $fileVehicleImage = [
        'image_name'=>$_FILES['vehicle_image']['name'],
        'image_type'=>$_FILES['vehicle_image']['type'],
        'image_size'=>$_FILES['vehicle_image']['size'],
        'image_tmpName'=>$_FILES['vehicle_image']['tmp_name'],
        'upload_location'=> PUBROOT . '/public/vehicle_image/'
      ];

      // Validate vehicleno
      if (empty($data['vehicleno'])) {
        $data['vehicleno_err'] = 'Please enter vehicle number';
    } else {
        // Validate vehicle number format
        $vehicleno_regex = '/^[A-Z]{2,3}\s[0-9]{4}$/'; // Matches format AA 1234 or AAA 1234
        if (!preg_match($vehicleno_regex, $data['vehicleno'])) {
            $data['vehicleno_err'] = 'Please enter a valid vehicle number in the format AA 1234 or AAA 1234.';
        }
        else {
          // Check if the vehicle number already exists
          $existingVehicle = $this->Own_School_Driver_Model->getVehicleByNumber($data['vehicleno']);
          if ($existingVehicle) {
              $data['vehicleno_err'] = 'This vehicle number already exists in the system';
          }
        }
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
    } else {
        // Validate that expiry date is not due
        $expiry_date = strtotime($data['expirylicence']);
        if ($expiry_date < time()) {
            $data['expirylicence_err'] = 'Licence expiry date cannot be due.';
        }
    }
    
      // Validate service type
      if (empty($data['service_type'])) {
        $data['service_type_err'] = 'Please select whether you are providing school service or office transport';
      }

      // Validate service type
      if (empty($data['charge_for_a_km'])) {
        $data['charge_for_a_km_err'] = 'Please enter the charge per kilometer';
      }
      // Validate comments
      if (empty($data['comments'])) {
        $data['comments_err'] = 'Please describe if there any special conditions of the vehicle';
      }

       // Validate image filename
if (!empty($_FILES['vehicle_image']['name'])) {
  $allowed_extensions = array('jpg', 'png', 'jpeg');
  $file_name = $_FILES['vehicle_image']['name'];
  $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

  // Check if file extension is allowed
  if (!in_array($file_ext, $allowed_extensions)) {
      $data['vehicle_image_err'] = 'Invalid file type';
  } else {
      $vehicleno = $data['vehicleno'];
      $expected_filename = $vehicleno . '.' . $file_ext; // Expected filename with the vehicle number and original extension

      // Check if the uploaded filename matches the expected filename
      if ($file_name != $expected_filename) {
          $data['vehicle_image_err'] = 'Please rename the image file with the vehicle number: ' . $expected_filename;
      } else {
          $file_tmp = $_FILES['vehicle_image']['tmp_name'];
          $file_destination = 'C:\wamp64\www\projectwego\public\vehicle_image\\' . $file_name;

          if (move_uploaded_file($file_tmp, $file_destination)) {
              $data['vehicle_image'] = $file_destination;
          } else {
              $data['vehicle_image_err'] = 'Error uploading image.';
          }
      }
  }
} else {
  $data['vehicle_image_err'] = 'Please upload an image of your vehicle.';
}

// Validate document filename
if (!empty($_FILES['vehicle_document']['name'])) {
  $allowed_extensions = array('zip');
  $file_name = $_FILES['vehicle_document']['name'];
  $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

  // Check if file extension is allowed
  if (!in_array($file_ext, $allowed_extensions)) {
      $data['vehicle_document_err'] = 'Invalid file type. Only ZIP files are allowed.';
  } else {
      $vehicleno = $data['vehicleno'];
      $expected_filename = $vehicleno . '.' . $file_ext; // Expected filename with the vehicle number and original extension

      // Check if the uploaded filename matches the expected filename
      if ($file_name != $expected_filename) {
          $data['vehicle_document_err'] = 'Please rename the document file with the vehicle number: ' . $expected_filename;
      } else {
          $file_tmp = $_FILES['vehicle_document']['tmp_name'];
          $file_destination = 'C:\xampp\htdocs\projectwego\public\vehicle_document\\' . $file_name;

          if (move_uploaded_file($file_tmp, $file_destination)) {
              $data['vehicle_document'] = $file_destination;
          } else {
              $data['vehicle_document_err'] = 'Error uploading file.';
          }
      }
  }
} else {
  $data['vehicle_document_err'] = 'Please upload documents of your vehicle.';
}



      // Make sure errors are empty
      if (empty($data['vehicleno_err']) && empty($data['model_err']) && empty($data['color_err']) && empty($data['year_err']) && empty($data['address_err']) && empty($data['route_err']) && empty($data['starttime_err']) && empty($data['seatingcapacity_err']) && empty($data['Ac_err']) && empty($data['expirylicence_err']) && empty($data['service_type_err']) && empty($data['charge_for_a_km_err']) && empty($data['comments_err']) && empty($data['vehicle_document_err'])) {
        if ($this->Own_School_Driver_Model->addvehicle($data,$fileVehicleImage)) {
          // flash('vehicle_message','Vehicle Added');
          // echo "added";


          return redirect('vehicles');
        } else {
          die('Something went wrong');
        }
      } else {
        // Load view with errors
        $this->view('users/driver/vehicle-own-school-transport/d_addvehicle_old', $data);
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
        'service_type' => '',
        'charge_for_a_km' => '',
        'comments' => '',
        'vehicle_image' => '',
        'vehicle_document' => '',
        'vehicleno_err' => '',
        //'chassino_err' => '',
        'model_err' => '',
        'color_err' => '',
        'year_err' => '',
        'address_err' => '',
        'route_err' => '',
        'starttime_err' => '',
        'seatingcapacity_err' => '',
        'Ac_err' => '',
        'expirylicence_err' => '',
        'service_type_err' => '',
        'charge_for_a_km_err' => '',
        'comments_err' => '',
        'vehicle_image_err' => '',
        'vehicle_document_err' => '',
        
    
      ];

      
      
      // Load view
      $this->view('users/driver/vehicle-own-school-transport/d_addvehicle_old', $data);
    }
  }

}
