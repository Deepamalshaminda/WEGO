<?php
  class Vehicle {
    private $db;

    public function __construct(){
      $this->db = new Database;
    }

    public function getVehicleDetails(){
      $this->db->query('SELECT * FROM vehicles
                        INNER JOIN users
                        ON `vehicles`.`id` = `users`.`id` AND '.$_SESSION['user_id'].'=`vehicles`.`id`
                        ');

      $results = $this->db->resultSet();

      return $results;
    }

    public function addVehicle($data){
      $this->db->query('INSERT INTO vehicles (vehiclenumber, vehicletype, initiallocation, route, id) VALUES(:vehiclenumber, :vehicletype, :initiallocation, :route, :id)');

      $this->db->bind(':vehiclenumber', $data['vehiclenumber']);
      $this->db->bind(':vehicletype', $data['vehicletype']);
      $this->db->bind(':initiallocation', $data['initiallocation']);
      $this->db->bind(':route', $data['route']);
      $this->db->bind(':id', $data['user_id']);

      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }

    public function getRequestByID($id)
    {
        $this->db->query('SELECT * FROM vehicles WHERE vehicleid = :vehicleid');
        $this->db->bind(':vehicleid', $id);
        $row = $this->db->single();
        return $row;
    }
  }