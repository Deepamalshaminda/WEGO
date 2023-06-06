<?php 
    class D_Find_School_Drivers extends Controller{
        public $Own_Office_Driver_Model;
        public $viewDashboardModel;

        public function __construct(){
            if(!isLoggedIn()){
              redirect('users/login');
            }
          }

          public function viewDashboard(){

            $data = [
              "user" => ''
            ];
              $this->view('users/driver/vehicle-find-school-transport/D_Find_School_Drivers', $data);
            }
    }

?>