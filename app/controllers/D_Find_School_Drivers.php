<?php 
    class D_Find_School_Drivers extends Controller{
        public $Own_Office_Driver_Model;
        public $viewDashboardModel;

        public function __construct(){
            if(!isLoggedIn()){
              redirect('users/login');
            }
      
            $this->Own_Office_Driver_Model = $this->model('D_Find_School_Driver');
          }

          public function viewDashboard($user){

            $data = [
              "user" => $user
            ];
              $this->view('users/driver/vehicle-find-school-transport/D_Find_School_Drivers', $data);
            }
    }

?>