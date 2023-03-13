<?php 
  class Parents extends Controller{
  public $userModel;
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
          'school' => trim($_POST['school']),
          'address' => trim($_POST['address']),
          'age' => trim($_POST['age']),
          'route' => trim($_POST['route']),
          'gender' => trim($_POST['gender']),
          'pr_id' => $_SESSION['user_id'],


          'name_err' => '',
          'school_err' => '',
          'address_err' => '',
          'age_err' => '',
          'route_err' => '',
          'gender_err' => '',
          'pr_id_err' => '',
          
        ];

        if (empty($data['name'])) {
          $data['name_err'] = 'Please enter name';
        }

        if (empty($data['school'])) {
          $data['school_err'] = 'Please enter school';
        }

        if (empty($data['address'])) {
          $data['name_address'] = 'Please enter address';
        }

        if(!($data['age']<18)){
            $data['age_err']='Age is Invalid';
        }

        if (empty($data['route'])) {
          $data['route_err'] = 'Please enter route';
        }

        if (empty($data['gender'])) {
          $data['gender_err'] = 'Please enter gender';
        }

        if (empty($data['pr_id'])) {
          $data['pr_id'] = 'Please enter parent id';
        }
        
        if( empty($data['name_err']) && empty($data['school_err']) && empty($data['address_err']) && empty($data['age_err'])&& empty($data['route_err']) && empty($data['gender_err']) &&  empty($data['pr_id_err']) )

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
            'pr_id' => '',



            'name_err' => '',
            'gender_err' => '',
            'school_err' => '',
            'address_err' => '',
            'route_err' => '',
            'age_err' => '',
            'pr_id_err' => '',
            
          ];
    
          // Load view
          $this->view('users/parent/addchild', $data);
    }
  }




}


 



