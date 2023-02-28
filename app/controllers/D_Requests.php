<?php 
    class D_Requests extends Controller{
        public $requestModel;
        public $userModel;

        public function __construct()
        {
            if (!isLoggedIn()){
                redirect('users/login');
            }

            $this->requestModel = $this->model('ManageDriver');
            $this->userModel = $this->model('User');

            $email = $_SESSION['user_email'];
        }

        public function getRequests($email){
            $requests = $this->requestModel->getRequests($email);
        }
    } 
?>