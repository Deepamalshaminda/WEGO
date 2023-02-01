<?php
  class Pages extends Controller {
    public function __construct(){
     
    }
    
    public function index(){
      $data = [
        'title' => 'projectwego',
        
      ];
     
      $this->view('pages/index', $data);
    }

    public function about(){
      $data = [
        'title' => 'About Us',
        
      ];

      $this->view('pages/about', $data);
    }

    public function vehicle(){
      $data = [
        'title' => 'Vehicle'
      ];

      $this->view('users/supplier/supplier', $data);
    }

    public function viewVehicle(){
      $data = [
        'title' => 'View Vehicle'
      ];

      $this->view('users/driver/index', $data);
    }
  }
  