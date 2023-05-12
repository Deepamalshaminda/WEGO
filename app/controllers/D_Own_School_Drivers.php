<?php 
    class D_Own_School_Drivers extends Controller{
      public $viewDashboardModel;
      public $model;
      public $connRequestModel;
      public $Own_Office_Driver_Model;
  
      public function __construct(){
        if(!isLoggedIn()){
          redirect('users/login');
        }
  
        $this->model = $this->model('D_ManageDriver');
        $this->connRequestModel = $this->model('D_ConnectionRequest');
        $this->viewDashboardModel = $this->model('viewDashboard');
        $this->Own_Office_Driver_Model = $this->model('D_Own_School_Driver');
          }


          // public function index(){
      
          //   $requests = $this->model->getVehicleDetails();
      
          //   $data = [
          //     'requests' => $requests
          //   ];
      
          //   $this->view('users/driver/d_viewvehicle', $data);
          // }
      
          public function ConnectionRequests(){
      
            $data = [
              'title' => 'requests',
            ];
      
            $this->view('users/driver/d_acceptconnrequest',$data);
      
          }
      
          public function getReceivedRequests(){
      
            $this->sendJson($this->connRequestModel->getRequestsFromVehicleSuppliers($_SESSION['user_id']));
      
          }
      
          public function getSentRequests(){
      
            $this->sendJson($this->connRequestModel->getSentRequestsToVehicleSuppliers($_SESSION['user_id']));
            
          }
      
          public function getSuggessions(){
      
            $this->sendJson($this->connRequestModel->getListOfVehicleSuppliers($_SESSION['user_id']));
            
          }
      
      
          public function accept($requestId){
      
            if ($this->connRequestModel->acceptConnRequests($requestId)){
              redirect('D_Own_School_Drivers/ConnectionRequests');
                return true;
            };
      
              $this->view('users/driver/d_acceptconnectionrequest');
              return false;
          }
      
          public function decline($requestId){
      
            if ($this->connRequestModel->declineConnRequests($requestId)){
              redirect('D_Own_School_Drivers/ConnectionRequests');
                return true;
            };
            
              $this->view('users/driver/d_acceptconnectionrequest');
              return false;
          }
      
          public function delete($requestId){
      
              if ($this->connRequestModel->deleteSentRequest($requestId)){
                redirect('D_Own_School_Drivers/ConnectionRequests');
                return true;
              };
              
              $this->view('users/driver/d_acceptconnectionrequest');
              return false;
            }
      

        public function viewDashboard($user){
            $data = [
                'user' => $user
            ];
            $this->view('users/driver/vehicle-own-school-transport/d_dashboard-own-school', $data);
          }

        public function viewOwnSchoolDashboard(){
            $this->view('users/driver/vehicle-own-school-transport/d_dashboard-own-school');
        }
    
        public function index(){
          
          $requests = $this->model->getVehicleDetails();
    
          $data = [
            'requests' => $requests
          ];
    
          $this->view('users/driver/vehicle-own-school-transport/d_viewvehicle', $data);
        }
    
        public function RideRequests(){
    
          $requests = $this->model->getRequestsFromParents($_SESSION['user_id']);
      
          $data = [
              'vehicle' =>'' ,
              'user' => '',
              'requests' => $requests
          ];
    
          $this->view('users/driver/vehicle-own-school-transport/d_acceptriderequest', $data);
        }
    
        // public function accept($requestId){
    
        //   if ($this->model->acceptRideRequests($requestId)){
        //     redirect('D_Own_School_Drivers/RideRequests');
        //     return true;
        //   };
    
        //   $this->view('users/driver/vehicle-own-school-transport/d_acceptriderequest');
        //   return false;
        // }
    
        // public function decline($requestId){
    
        //   if ($this->model->declineRideRequests($requestId)){
        //     redirect('D_Own_School_Drivers/RideRequests');
        //     return true;
        //   };
          
        //   $this->view('users/driver/vehicle-own-school-transport/d_acceptriderequest');
        //   return false;
        // }
    
        public function checkTripInfo(){
    
          $this->view('users/driver/vehicle-own-school-transport/d_checktripinfo');
    
        }
    
        public function getOngoingTripInfo(){
    
          $this->sendJson($this->model->viewOngoingTrip($_SESSION['user_id']));
    
        }
    
        public function getCompletedTripsInfo(){
    
          $this->sendJson($this->model->viewCompletedTrips($_SESSION['user_id']));
    
        }
    
        public function viewEarnings(){
          //$dashboard = $this->viewDashboardModel->viewDashboard();
          $data = [
            'earnings' => 'earnings'
          ];
          $this->view('users/driver/vehicle-own-school-transport/d_viewearnings', $data);
        }
        
        public function viewProfile(){
          $data = [
            'title' => 'Profile',
          ];
    
          $this->view('users/driver/vehicle-own-school-transport/d_driver_profile', $data);
        }
    
        public function getDriverByUserId($us_id){
          $driver = $this -> model -> getDriverByUserId($us_id);
          return $driver;
        }

        public function studentsToBeAbsent(){
          //$dashboard = $this->viewDashboardModel->viewDashboard();
          $data = [
            'student' => 'student'
          ];
          $this->view('users/driver/vehicle-own-school-transport/d_studentstobeabsent', $data);
        }
    
        public function completedTrips(){
          //$dashboard = $this->viewDashboardModel->viewDashboard();
          $data = [
            'completedTrip' => 'completedTrip'
          ];
          $this->view('users/driver/vehicle-own-school-transport/d_completedtrips', $data);
        }
    }

?>