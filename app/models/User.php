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
      $this->db->bind(':password', $data['password']);
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
  }