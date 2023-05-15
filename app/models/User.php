<?php
  class User {
    private $db;

    public function __construct(){
      $this->db = new Database;
    }

    // Regsiter user
    public function register($data){
      $this->db->query('INSERT INTO user (name, nic, gender, dob, province, district, nearestTown, address, contactNumber, email, password, role_id,latitude, longitude) VALUES(:name, :nic, :gender, :dob, :province, :district, :nearestTown, :address, :contactNumber, :email, :password, :role_id, :latitude, :longitude)');
      // Bind values
      $this->db->bind(':name', $data['name']);
      $this->db->bind(':nic', $data['nic']);
      $this->db->bind(':gender', $data['gender']);
      $this->db->bind(':dob', $data['dob']);
      $this->db->bind(':province', $data['province']);
      $this->db->bind(':district', $data['district']);
      $this->db->bind(':nearestTown', $data['nearestTown']);
      $this->db->bind(':address', $data['address']);
      $this->db->bind(':contactNumber', $data['contactNumber']);
      $this->db->bind(':email', $data['email']);
      $this->db->bind(':password', $data['password']);
      $this->db->bind(':role_id', $data['user_role']);
      $this->db->bind(':latitude', $data['latitude']);
      $this->db->bind(':longitude', $data['longitude']);
      

      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }

    // Login User
    public function login($email, $password){
      $this->db->query('SELECT * FROM user WHERE email = :email');
      $this->db->bind(':email', $email);

      $row = $this->db->single();

      $hashed_password = $row->password;
      if(password_verify($password, $hashed_password)){
        return $row;
      } else {
        return false;
      }
    }

    public function isDriver($data){
      $email = $data['email'];
      $this->db->query('SELECT * FROM user WHERE email = :email');
      $this->db->bind(':email', $email);
      $row = $this->db->asAnArray();
        if($row['role_id'] == 1){
          return true;
        } else {
          return false;
        }
    }


    public function getUserByEmail($data){
      $email = $data['email'];
      $this->db->query('SELECT * FROM user WHERE email = :email');
      $this->db->bind(':email', $email);
      $row = $this->db->asAnArray();
        if($row['role_id'] == 1){
          $row = $this->db->single();
          return $row;
        } else {
          return false;
        }
    }

    public function getVehicleByOwnDriverId($us_id){
      $this->db->query('SELECT * FROM vehicle WHERE driver_id = :user_id');
      $this->db->bind(':user_id', $us_id);
      $row = $this->db->asAnArray();
            //$row = $this->db->asAnArray();
            if($row){
                $row = $this->db->single();
                return $row;
            } else {
                return false;
            }
    }

    public function ownVehicle($email){
      $this->db->query('SELECT * FROM user WHERE email = :email');
      $this->db->bind(':email', $email);
      $row = $this->db->asAnArray();
        if($row['role_id'] == 2){
          return true;
        } else {
          return false;
        }
    }

    

    // Find user by email
    public function findUserByEmail($email){
      $this->db->query('SELECT * FROM user WHERE email = :email');
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



    public function updateDriversVehicleOwnershipAsOwnVehicle($userId)
    {

        $this->db->query("INSERT INTO driver (us_id, vehicle_status) VALUES (:us_id, :vehicle_status)");
        $this->db->bind(':us_id', $userId);
        $this->db->bind(':vehicle_status', 'own');
         // $results = $this->db->resultSet();

         if($this->db->execute()){
          return true;
        } else {
          return false;
        }
    }

    public function updateDriversVehicleOwnershipAsFindVehicle($userId)
    {

        $this->db->query("INSERT INTO driver (us_id, vehicle_status) VALUES (:us_id, :vehicle_status)");
        $this->db->bind(':us_id', $userId);
        $this->db->bind(':vehicle_status', 'find');
        // $results = $this->db->resultSet();
        if($this->db->execute()){
          return true;
        } else {
          return false;
        }
        
    }
    
    public function updateServiceTypeAsSchoolService($userId)
    {
        $this->db->query("UPDATE driver SET service_type = :service_type WHERE us_id = :us_id");
        $this->db->bind(':us_id', $userId);
        $this->db->bind(':service_type', 'school');
        // $results = $this->db->resultSet();

         if($this->db->execute()){
          return true;
        } else {
          return false;
        }
    } 
    
    public function updateServiceTypeAsOfficeService($userId)
    {
        $this->db->query("UPDATE driver SET service_type = :service_type WHERE us_id = :us_id");
        $this->db->bind(':us_id', $userId);
        $this->db->bind(':service_type', 'office');
         // $results = $this->db->resultSet();

         if($this->db->execute()){
          return true;
        } else {
          return false;
        }
    }
    public function getUserById($id)
  {
    $this->db->query('SELECT * FROM user WHERE us_id = :id');
    // Bind value
    $this->db->bind(':id', $id);

    $row = $this->db->single();

    return $row;
  }
  }