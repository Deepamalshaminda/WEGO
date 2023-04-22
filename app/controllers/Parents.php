<?php 
  class Parents extends Controller{
  public $childModel;
  public $userModel;
  public function __construct()
  
  {
    $this->childModel = $this->model('Child');
    $this->userModel = $this->model('User');
  }
  
  // get all children 
  public function getChildren(){

    $children = $this->childModel->getChildren();
    $data = [
      'children' => $children
    ];

    $this->view('users/parent/addedchildren', $data);
  }

 //view one child information
  public function viewChild($id){
    $child = $this->childModel->getChildById($id);
    $data = [
      'child' => $child
    ];
    $this->view('users/parent/viewchild', $data);
  }

  // delete child
  public function deleteChild($id){

    $children = $this->childModel->deleteChildById($id);
    // $data = [
    //   'children' => $children
    // ];
    $this->view('users/parent/parentdash');
  }

  // add child
  public function addchild()
  {

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Sanitize POST data
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        $data = [
          'name' => trim($_POST['name']),
          'gender' => trim($_POST['gender']),
          'dob' => trim($_POST['dob']),
          'school' => trim($_POST['school']),
          'school_address' => trim($_POST['school_address']),      
          'parentid' => $_SESSION['user_id'],
          
          'name_err' => '',
          'gender_err' => '',
          'dob_err' => '',
          'school_err' => '',
          'school_address_err' => '',  
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
          $data['school_address_err'] = 'Please enter school address';
        }

        // if(intval(date('Y') - date('Y',strtotime($data['dob']))) < 18){
        //     $data['dob_err']='Child age must be 18 years or less';
        // }

        

        if( empty($data['name_err']) && empty($data['gender_err']) && empty($data['dob_err']) && empty($data['school_err']) && empty($data['school_address_err']) )

        {
          if($this->childModel->addchild($data)){
            // flash('register_success', 'Child Added');
            $children = $this->childModel->getChildren();
            $data = [
              'children' => $children
            ];
            
            $this->view('users/parent/addedchildren', $data);
          }
          else{
            die('Something went wrong');
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

  // edit child
  public function editChild($id){
    if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
      // Sanitize POST data
      $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

      $data = [
        'id' => $id,
        'name' => trim($_POST['name']),
        'gender' => trim($_POST['gender']),
        'dob' => trim($_POST['dob']),
        'school' => trim($_POST['school']),
        'school_address' => trim($_POST['school_address']),      
        'parentid' => $_SESSION['user_id'],
        
        'name_err' => '',
        'gender_err' => '',
        'dob_err' => '',
        'school_err' => '',
        'school_address_err' => '',  
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
        $data['school_address_err'] = 'Please enter school address';
      }

      // if(intval(date('Y') - date('Y',strtotime($data['dob']))) < 18){
      //     $data['dob_err']='Child age must be 18 years or less';
      // }

      

      if( empty($data['name_err']) && empty($data['gender_err']) && empty($data['dob_err']) && empty($data['school_err']) && empty($data['school_address_err']) )

      {
        if($this->childModel->updateChild($data)){
          // flash('register_success', 'Child Added');
          $children = $this->childModel->getChildren();
          $data = [
            'children' => $children
          ];
          
          $this->view('users/parent/addedchildren', $data);
        }
        else{
          die('Something went wrong');
        }

      }else{
        $this->view('users/parent/parentdash', $data);
      }
     
  }else{
      $child = $this->childModel->getChildById($id);

      $data = [
          'id' => $id,
          'name' => $child->name,
          'gender' => $child->gender,
          'dob' => $child->dob,
          'school' => $child->school,
          'school_address' => $child->school_address,
          'age' => $child->age,
         
         'name_err' => '',
         'gender_err' => '',
         'dob_err' => '',
         'school_err' => '',
         'school_address_err' => '',
         'age_err' => '',
        
         
        ];
  
        // Load view
        $this->view('users/parent/editchild', $data);
  }

  }



}


 



