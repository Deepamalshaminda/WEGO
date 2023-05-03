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

    // if (!empty($result)) {
    //   echo "no";
    //   foreach ($result as $vehicle) {
    //     echo $vehicle->vehicleid;
    //     echo $vehicle->vehicletype;
    //     echo $vehicle->route;
    //     echo $vehicle->starttime;
    //     echo $vehicle->id;
    //   }
    // }






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

      // Validate image
      //if (empty($data['image'])) {
      //$data['image_err'] = 'Please upload image';
      // }

      // Validate documents
      // if (empty($data['document'])) {
      // $data['document_err'] = 'Please upload documents';
      //}

   // upload the vehicle image
  $target_dir = "uploads/";
  $target_file = $target_dir . basename($_FILES["vehicle_image"]["name"]);
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  // check if image file is a actual image or fake image
  $check = getimagesize($_FILES["vehicle_image"]["tmp_name"]);
  if($check !== false) {
    $uploadOk = 1;
  } else {
    $uploadOk = 0;
  }

  // check file size
  if ($_FILES["vehicle_image"]["size"] > 500000) {
    $uploadOk = 0;
  }

  // allow certain file formats
  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
  && $imageFileType != "gif" ) {
    $uploadOk = 0;
  }

  if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
  } else {
    if (move_uploaded_file($_FILES["vehicle_image"]["tmp_name"], $target_file)) {
      $vehicle_image = $target_file;
    } else {
      echo "Sorry, there was an error uploading your file.";
    }
  }

  // upload the vehicle document
  $target_dir = "uploads/";
  $target_file = $target_dir . basename($_FILES["vehicle_document"]["name"]);
  $uploadOk = 1;
  $documentFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  // check file size
  if ($_FILES["vehicle_document"]["size"] > 500000) {
    $uploadOk = 0;
  }

  // allow certain file formats
  if($documentFileType != "pdf" && $documentFileType != "doc" && $documentFileType != "docx"
  && $documentFileType != "txt" ) {
    $uploadOk = 0;
  }

  if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
  } else {
    if (move_uploaded_file($_FILES["vehicle_document"]["tmp_name"], $target_file)) {
      $vehicle_document = $target_file;
    } else {
      echo "Sorry, there was an error uploading your file.";
    }
  }


      // Make sure errors are empty
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

  public function updateVehicle()
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
            redirect('posts/index' . $data);
        } else {
            die('Something went wrong');
        }
    } else {
        // Get existing vehicle data
        $vehicle = $this->vehicleModel->getVehicleById($_SESSION['id']);

        $data = [
            'id' => $vehicle->id,
            'vehicle_no' => $vehicle->vehicle_no,
            'model' => $vehicle->model,
            'color' => $vehicle->color,
            'year' => $vehicle->year,
            'address' => $vehicle->address,
            'route' => $vehicle->route,
            'start_time' => $vehicle->start_time,
            'seating_capacity' => $vehicle->seating_capacity,
            'ac' => $vehicle->ac,
            'expiry_licence' => $vehicle->expiry_licence,
            'comments' => $vehicle->comments
        ];

        $this->view('users/supplier/updateVehicle', $data);
    }
}
}