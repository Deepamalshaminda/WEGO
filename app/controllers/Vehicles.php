
<?php
class Vehicles extends Controller
{public $vehicleModel;
  public function __construct()
  {
    //if(!isLoggedIn()){
    //('users/login');
    //}
    $this->vehicleModel = $this->model('Vehicle');
  }

  public function index()
  {
    $result = $this->vehicleModel->getVehicles($_SESSION['user_id']);


    $data = [
      'vehicles' => $result
    ];
    $this->view('posts/index', $data);
  }

  public function addvehicle()
  {
    // Check for POST
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {


      // Process form
      // Sanitize POST data

      $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

      print_r($_POST);

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
        'vehicle_image' => !empty($_POST['vehicle_image']) ? trim(implode(',', (array)$_POST['vehicle_image'])) : '',
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
      echo "<br>";
      print_r($data);

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

        //validate images
        if (!empty($_FILES['vehicle_image']['name'])) {
          $allowed_extensions = array('jpg','png','jpeg');
          $file_name = $_FILES['vehicle_image']['name'];
          $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
        
          // Check if file extension is allowed
          if (!in_array($file_ext, $allowed_extensions)) {
            $data['vehicle_image_err'] = 'Invalid file type';
          }
        
          // Check if file size is less than 10 MB
          elseif ($_FILES['vehicle_image']['size'] > 5485760) {
            $data['vehicle_image_err'] = 'File size exceeded. Please upload an image with size less than 5 MB.';
          }
          else {
            $file_tmp = $_FILES['vehicle_image']['tmp_name'];
            $file_destination = 'C:\xampp\htdocs\projectwego\public\vehicle_image\\' . $file_name;
        
            //echo realpath($file_destination);
        
            if (move_uploaded_file($file_tmp, $file_destination)) {
              echo "uploaded";
              $data['vehicle_image'] = $file_destination;
            } else {
              $data['vehicle_image_err'] = 'Error uploading image.';
            }
            
          }
          
        } else {
          $data['vehicle_image_err'] = 'Please upload an image of your vehicle.';
        }
        


      

        // Validate documents
        if (!empty($_FILES['vehicle_document']['name'])) {
          $allowed_extensions = array('zip');
          $file_name = $_FILES['vehicle_document']['name'];
          $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
        
          // Check if file extension is allowed
          if (!in_array($file_ext, $allowed_extensions)) {
            $data['vehicle_document_err'] = 'Invalid file type. Only ZIP files are allowed.';
          }
        
          // Check if file size is less than 10 MB
          elseif ($_FILES['vehicle_document']['size'] > 10485760) {
            $data['vehicle_document_err'] = 'File size exceeded. Please upload a file with size less than 10 MB.';
          }
        
          // If file is valid, move it to the destination folder
          else {
            $file_tmp = $_FILES['vehicle_document']['tmp_name'];
            $file_destination = 'C:\xampp\htdocs\projectwego\public\vehicle_document\\' . $file_name;
        
            echo realpath($file_destination);
        
            if (move_uploaded_file($file_tmp, $file_destination)) {
              $data['vehicle_document'] = $file_destination;
            } else {
              $data['vehicle_document_err'] = 'Error uploading file.';
            }
            
          }
          
        } else {
          $data['vehicle_document_err'] = 'Please upload documents of your vehicle.';
        }
        


      // Make sure errors are empty
      if (empty($data['vehicleno_err']) && empty($data['model_err']) && empty($data['color_err']) && empty($data['year_err']) && empty($data['address_err']) && empty($data['route_err']) && empty($data['starttime_err']) && empty($data['seatingcapacity_err']) && empty($data['Ac_err']) && empty($data['expirylicence_err']) && empty($data['service_type_err']) && empty($data['charge_for_a_km_err']) && empty($data['comments_err']) && empty($data['vehicle_document_err'])) {
        if ($this->vehicleModel->addvehicle($data,$fileVehicleImage)) {
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
      $this->view('users/supplier/addvehicle', $data);
    }
  }


  /*public function updateVehicle()
{
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Sanitize POST data
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        $data = [
            'id' => trim($_POST['id']),
            'vehicle_no' => trim($_POST['vehicle_no']),
            'model' => trim($_POST['model']),
            'color' => trim($_POST['color']),
            'year' => trim($_POST['year']),
            'address' => trim($_POST['address']),
            'route' => trim($_POST['route']),
            'start_time' => trim($_POST['start_time']),
            'seating_capacity' => trim($_POST['seating_capacity']),
            'ac' => trim($_POST['ac']),
            'expiry_licence' => trim($_POST['expiry_licence']),
            'comments' => trim($_POST['comments'])
        ];

        // Update vehicle
        if ($this->vehicleModel->updateVehicle(
            $data['id'],
            $data['vehicle_no'],
            $data['model'],
            $data['color'],
            $data['year'],
            $data['address'],
            $data['route'],
            $data['start_time'],
            $data['seating_capacity'],
            $data['ac'],
            $data['expiry_licence'],
            $data['comments']
        )) {
            flash('vehicle_message', 'Vehicle updated');
            redirect('posts/index');
        } else {
            die('Something went wrong');
        }
    } else {
        // Get existing vehicle data
        if (isset($_SESSION['id']) && !is_null($_SESSION['id'])) {
            $vehicle = $this->vehicleModel->getVehicleById($_SESSION['id']);

            $data = [
                'id' => $vehicle->ve_id,
                'vehicle_no' => $vehicle->vehicle_no,
                'model' => $vehicle->model,
                'color' => $vehicle->color,
                'year' => $vehicle->year,
                'address' => $vehicle->address,
                'route' => $vehicle->route,
                'start_time' => $vehicle->starttime,
                'seating_capacity' => $vehicle->seatingcapacity,
                'ac' => $vehicle->Ac,
                'expiry_licence' => $vehicle->expirylicence,
                'comments' => $vehicle->comments
            ];

            $this->view('users/supplier/updateVehicle', $data);
        }
    }
    */
}
