<?php
  class Vehicle {
    private $db;

    public function __construct(){
      $this->db = new Database;
    }

    public function getVehicles($userid){
      $this->db->query('SELECT *  FROM vehicle where id=:id;');
      $this->db->bind(':id', $userid);
      $results = $this->db->resultSet();

      return $results;
    }

    public function addvehicle($data){
      $this->db->query('INSERT INTO vehicle (vehicleno,model,color,year,address,route,starttime,seatingcapacity,Ac,expirylicence,comments,id) VALUES(:vehicleno, :model, :color, :year, :address, :route, :starttime, :seatingcapacity, :Ac, :expirylicence, :comments, :id)');
      // Bind values
      $this->db->bind(':vehicleno', $data['vehicleno']);
      //$this->db->bind(':user id', $data['user id']);
    
      $this->db->bind(':model', $data['model']);
      $this->db->bind(':color', $data['color']);
      $this->db->bind(':year', $data['year']);
      $this->db->bind(':address', $data['address']);
      $this->db->bind(':route', $data['route']);
      $this->db->bind(':starttime', $data['starttime']);
      $this->db->bind(':seatingcapacity', $data['seatingcapacity']);
      $this->db->bind(':Ac', $data['Ac']);
      $this->db->bind(':expirylicence', $data['expirylicence']);
      $this->db->bind(':comments', $data['comments']);
      $this->db->bind(':id', $data['userid']);

      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }
  }