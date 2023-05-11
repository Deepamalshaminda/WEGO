<?php 
    class D_Find_Office_Drivers extends Controller{
        public $Find_Office_Driver_Model;
        public $viewDashboardModel;

        public function __construct(){
            if(!isLoggedIn()){
              redirect('users/login');
            }
      
            $this->Find_Office_Driver_Model = $this->model('D_Find_Office_Driver');
          }

        public function viewDashboard($data){
            $this->view('users/driver/vehicle-find-office-transport/d_dashboard-find-office', $data);
          }
    }

?>