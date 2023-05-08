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
      $this->db->query('INSERT INTO vehicle (vehicleno, model, color, year, address, route, starttime, seatingcapacity, Ac, expirylicence, service_type, comments, vehicle_document, id) VALUES(:vehicleno, :model, :color, :year, :address, :route, :starttime, :seatingcapacity, :Ac, :expirylicence, :service_type, :comments, :vehicle_document, :id)');
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
      $this->db->bind(':service_type', $data['service_type']);
      $this->db->bind(':comments', $data['comments']);
      $this->db->bind(':vehicle_document', $data['vehicle_document']);

      $this->db->bind(':id', $data['userid']);
    
      // Check if document file is uploaded
      /*if (!empty($_FILES['vehicle_document']['name'])) {
        $file_name = basename($_FILES['vehicle_document']['name']);
        $file_tmp = $_FILES['vehicle_document']['tmp_name'];
        $file_destination = 'C:\xampp\htdocs\projectwego\public\vehicle_document\\' . $file_name;
    
        // Check file extension
        $file_extension = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
        if ($file_extension !== 'zip') {
          return false; // return false if the file extension is not zip
        }
    
        // Move the file to the destination folder
        if (move_uploaded_file($file_tmp, $file_destination)) {
          $this->db->bind(':vehicle_document', $file_destination);
        } else {
          return false; // return false if there is an error moving the file
        }
      } else {
        $this->db->bind(':vehicle_document', null); // insert null if no document is uploaded
      }
    */
      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }

      
    }
  }    