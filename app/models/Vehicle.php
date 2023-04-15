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
      //$this->db->bind(':vehicle_image', $data['vehicle_image']);
      //$this->db->bind(':vehicle_document', $data['vehicle_document']);
      $this->db->bind(':id', $data['userid']);

      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }


    public function getVehicleById($id){
        $this->db->query('SELECT * FROM vehicle WHERE id = :id');
        $this->db->bind(':id', $id);
        $row = $this->db->single();
        return $row;
    }

    public function updateVehicle($id, $vehicle_no, $model, $color, $year, $address, $route, $start_time, $seating_capacity, $ac, $expiry_licence, $comments){
        $this->db->query('UPDATE vehicle SET vehicleno = :vehicleno, model = :model, color = :color, year = :year, address = :address, route = :route, starttime = :starttime, seatingcapacity = :seatingcapacity, Ac = :Ac, expirylicence = :expirylicence, comments = :comments WHERE id = :id');
        $this->db->bind(':id', $id);
        $this->db->bind(':vehicleno', $vehicle_no);
        $this->db->bind(':model', $model);
        $this->db->bind(':color', $color);
        $this->db->bind(':year', $year);
        $this->db->bind(':address', $address);
        $this->db->bind(':route', $route);
        $this->db->bind(':starttime', $start_time);
        $this->db->bind(':seatingcapacity', $seating_capacity);
        $this->db->bind(':Ac', $ac);
        $this->db->bind(':expirylicence', $expiry_licence);
        $this->db->bind(':comments', $comments);

        if($this->db->execute()){
            return true;
        } else {
            return false;
        }
    }
}

    
  