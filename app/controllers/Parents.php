<?php 
class Parents extends Controller
{public $userModel;
  public function __construct()
  {
    $this->userModel = $this->model('Addchild');
  }
  public function addchild()
  {

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Process form
  
        // Sanitize POST data
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        $data = [
          'name' => trim($_POST['name']),
          'gender' => trim($_POST['gender']),
          'school' => trim($_POST['school']),
         'address' => trim($_POST['address']),
         'route' => trim($_POST['route']),
         'age' => trim($_POST['age']),


          'name_err' => '',
          'gender_err' => '',
          'school_err' => '',
          'address_err' => '',
          'route_err' => '',
          'age_err' => ''
          
        ];
        if(!($data['age']<18)){
            $data['age_err']='Age is Invalid';
        }
        
        if( empty($data['name_err']) && empty($data['gender_err']) && empty($data['school_err']) && empty($data['address_err'])&& empty($data['route_err']) && empty($data['age_err']) )

        {

          if($this->userModel->addchild($data)){
              echo "correct";
          }else{
            echo "wrong";
          }

        }else{
          $this->view('users/parent/parentdash', $data);
        }
       
    }else{
        $data = [
            'name' => '',
            'gender' => '',
            'school' => '',
           'address' => '',
           'route' => '',
           'age' => '',


            'name_err' => '',
            'gender_err' => '',
            'school_err' => '',
            'address_err' => '',
            'route_err' => '',
            'age_err' => ''
            
          ];
    
          // Load view
          $this->view('users/parent/addchild', $data);
    }
  }


}