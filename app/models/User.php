<?php
  class User {
    private $db;

    public function __construct(){
      $this->db = new Database;
    }

    // Regsiter user
    public function register($data){
      $this->db->query('INSERT INTO user (name, nic, gender, dob, province, district, nearestTown, address, contactNumber, email, password, role_id) VALUES(:name, :nic, :gender, :dob, :province, :district, :nearestTown, :address, :contactNumber, :email, :password, :role_id)');
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
      $this->db->bind(':password', $data['password']);+
      $this->db->bind(':role_id', $data['user_role']);

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
      $row = $this->db->single();
        if($row['role_id'] == 1){
          return true;
        } else {
          return false;
        }
    }


    public function getUserByEmail($email){
      // $email = $data['email'];
      $this->db->query('SELECT * FROM user WHERE email = :email');
      $this->db->bind(':email', $email);
      $row = $this->db->single();

      // $row2 = json_decode($row);
        if($row->role_id == 1){
          return $row;
        } else {
          return false;
        }
    }



    public function ownVehicle($email){
      $this->db->query('SELECT * FROM user WHERE email = :email');
      $this->db->bind(':email', $email);
      $row = $this->db->single();
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

    public function findUserById($id){
      $this->db->query('SELECT * FROM user WHERE us_id = :us_id');
      // Bind value
      $this->db->bind(':us_id', $id);

      $row = $this->db->single();
      // Check row
      if($this->db->rowCount() > 0){
        return $row;
      } else {
        return false;
      }
    }



    public function updateDriversVehicleOwnershipAsOwnVehicle($driverId)
    {

        $this->db->query("INSERT INTO driver (us_id, vehicle_status) VALUES (:us_id, :vehicle_status)");
        $this->db->bind(':us_id', $driverId);
        $this->db->bind(':vehicle_status', 'own');
         // $results = $this->db->resultSet();

         if($this->db->execute()){
          return true;
        } else {
          return false;
        }
    }

    public function updateDriversVehicleOwnershipAsFindVehicle($driverId)
    {

        $this->db->query("INSERT INTO driver (us_id, vehicle_status) VALUES (:us_id, :vehicle_status)");
        $this->db->bind(':us_id', $driverId);
        $this->db->bind(':vehicle_status', 'find');
        // $results = $this->db->resultSet();

        if($this->db->execute()){
          return true;
        } else {
          return false;
        }
        
    }
    
    public function updateServiceTypeAsSchoolService($driverId)
    {
        $this->db->query("UPDATE driver SET service_type = :service_type WHERE us_id = :us_id");
        $this->db->bind(':us_id', $driverId);
        $this->db->bind(':service_type', 'school');
         // $results = $this->db->resultSet();

         if($this->db->execute()){
          return true;
        } else {
          return false;
        }
    } 
    
    public function updateServiceTypeAsOfficeService($driverId)
    {
        $this->db->query("UPDATE driver SET service_type = :service_type WHERE us_id = :us_id");
        $this->db->bind(':us_id', $driverId);
        $this->db->bind(':service_type', 'office');
         // $results = $this->db->resultSet();

         if($this->db->execute()){
          return true;
        } else {
          return false;
        }
    } 
    public function getUsers()
    {
        $this->db->query('SELECT * FROM user');
        $results = $this->db->resultSet();
        return $results;
    }
    public function getUsersById($us_id)
    {
        $this->db->query('SELECT * FROM user 
                          INNER JOIN roles on user.role_id = roles.role_id
                          WHERE user.us_id = :us_id');
        $this->db->bind(':us_id', $us_id);
        $row = $this->db->single();
        return $row;
    }

    // public function getUsersByrole($role_id)
    // {
    //     $this->db->query('SELECT * FROM user WHERE role_id = :role_id');
    //     $this->db->bind(':role_id', $role_id);
    //     $row = $this->db->single();
    //     return $row;
    // }

  }