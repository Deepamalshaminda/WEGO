<?php 
    class D_Own_Office_Drivers extends Controller{
        public $Own_Office_Driver_Model;
        public $viewDashboardModel;

        public function __construct(){
            if(!isLoggedIn()){
              redirect('users/login');
            }
      
            $this->Own_Office_Driver_Model = $this->model('D_Own_Office_Driver');
          }

        public function viewDashboard($user){

          $data = [
            "user" => $user
          ];
            $this->view('users/driver/vehicle-own-office-transport/D_Own_Office_Drivers');
          }
    }

?>