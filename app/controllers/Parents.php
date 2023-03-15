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
          'gender' => trim($_POST['gender']),
          'dob' => trim($_POST['dob']),
          'school' => trim($_POST['school']),
          'school_address' => trim($_POST['school_address']),
          'age' => trim($_POST['age']),
          //'pr_id' => $_SESSION['user_id'],
          'userid' => $_SESSION['user_id'],
          


          'name_err' => '',
          'gender_err' => '',
          'dob_err' => '',
          'school_err' => '',
          'school_address_err' => '',
          'age_err' => '',
          
        
          
        ];

        if (empty($data['name'])) {
          $data['name_err'] = 'Please enter name';
        }

        if (empty($data['gender'])) {
          $data['gender_err'] = 'Please enter your childs gender';
        }

        if (empty($data['dob'])) {
          $data['dob_err'] = 'Please enter date of birth';
        }

        if (empty($data['school'])) {
          $data['school_err'] = 'Please enter school';
        }

        if (empty($data['school_address'])) {
          $data['school_address'] = 'Please enter school address';
        }

        if(!($data['age']<18)){
            $data['age_err']='Age is Invalid';
        }

        

        if( empty($data['name_err']) && empty($data['gender_err']) && empty($data['dob_err']) && empty($data['school_err'])&& empty($data['school_address_err']) && empty($data['age_err']) )

        {

          if($this->userModel->addchild($data)){
            $this->view('users/parent/parentdash', $data);
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
            'dob' => '',
            'school' => '',
            'school_address' => '',
            'age' => '',
           



           'name_err' => '',
           'gender_err' => '',
           'dob_err' => '',
           'school_err' => '',
           'school_address_err' => '',
           'age_err' => '',
          
           
          ];
    
          // Load view
          $this->view('users/parent/addchild', $data);
    }
  }




}


 



