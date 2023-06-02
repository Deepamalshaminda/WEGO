<?php
  class Driver {
    private $db;

    public function __construct(){
      $this->db = new Database;
    }


    public function viewAddedDrivers($userid){
      
      $this->db->query('SELECT * FROM drivers where id=:id;');
      // $result=$this->db->query('SELECT * FROM drivers'); 
      // $res=$result->fetch_assoc();



      $this->db->bind(':id', $userid);
  
                        // users.id as userId,
                        // drivers.nic as driverNIC,
                        // drivers.phoneNumber as driverPhoneNumber,
                        // drivers.licenseNo as driverLicenseNo,
                        // drivers.licenseExpDate as driverLicenseExpDate,
                        // drivers.feasibleTimeSlot as driverFeasibleTimeSlot,
                        // drivers.preferedServiceType as driverPreferefServiceType
                        // FROM drivers
                        // INNER JOIN users
                        // ON drivers.driverId = users.id
                        // ORDER BY drivers.driverId DESC
                        // ');

      // $results = $this->db->resultSet();

      return $userid;
    }
   

    // add Drivers
    public function addDrivers($data){
      $this->db->query('INSERT INTO drivers (id, name,email, nic, phoneNumber, licenseNo, licenseExpDate, feasibleTimeSlot, preferedServiceType, password) VALUES(:id, :name,:email, :nic, :phoneNumber, :licenseNo, :licenseExpDate, :feasibleTimeSlot, :preferedServiceType, :password)');
      // Bind values
      $this->db->bind(':id', $data['userid']);
      $this->db->bind(':name', $data['name']);
      $this->db->bind(':email', $data['email']);
      $this->db->bind(':nic', $data['nic']);
      $this->db->bind(':phoneNumber', $data['phoneNumber']);
      $this->db->bind(':licenseNo', $data['licenseNo']);
      $this->db->bind(':licenseExpDate', $data['licenseExpDate']);
      $this->db->bind(':feasibleTimeSlot', $data['feasibleTimeSlot']);
      $this->db->bind(':preferedServiceType', $data['preferedServiceType']);
      $this->db->bind(':password', $data['password']);




      // public function addDrivers($data){
      // $this->db->query('INSERT INTO drivers (id,name,email, nic, phoneNumber, licenseNo, licenseExpDate, feasibleTimeSlot, preferedServiceType, password, haveVehicle) VALUES(:id, :name,:email, :nic, :phoneNumber, :licenseNo, :licenseExpDate, :feasibleTimeSlot, :preferedServiceType, :password, :haveVehicle)');
      // // Bind values
      // $this->db->bind(':id', $data['id']);
      // $this->db->bind(':name', $data['name']);
      // $this->db->bind(':email', $data['email']);
      // $this->db->bind(':nic', $data['nic']);
      // $this->db->bind(':phoneNumber', $data['phoneNumber']);
      // $this->db->bind(':licenseNo', $data['licenseNo']);
      // $this->db->bind(':licenseExpDate', $data['licenseExpDate']);
      // $this->db->bind(':feasibleTimeSlot', $data['feasibleTimeSlot']);
      // $this->db->bind(':preferedServiceType', $data['preferedServiceType']);
      // $this->db->bind(':password', $data['password']);
      // $this->db->bind(':haveVehicle', $data['haveVehicle']);

      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }

    // // Find user by email
    // public function findDriverByEmail($email){
    //   $this->db->query('SELECT * FROM drivers WHERE email = :email');
    //   // Bind value
    //   $this->db->bind(':email', $email);

    //   $row = $this->db->single();

    //   // Check row
    //   if($this->db->rowCount() > 0){
    //     return true;
    //   } else {
    //     return false;


    // Find user by email
    public function findDriverByEmail($email){
      $this->db->query('SELECT * FROM drivers WHERE email = :email');
      // Bind value
      $this->db->bind(':email', $email);

      $row = $this->db->single();

      // Check row
      if($this->db->rowCount() > 0){
        return true;
      } else {
        return false;
      }
    }

    public function viewdrive(){
      $this->db->query('SELECT * FROM drivers');
      $results->$this->db->reaultSet();

      return $results;
    }
  }

    
  