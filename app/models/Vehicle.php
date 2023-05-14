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
      $this->db->query('INSERT INTO vehicle (vehicleno,model,color,year,address,route,starttime,seatingcapacity,Ac,expirylicence,comments,image_path, document_path,id) VALUES(:vehicleno, :model, :color, :year, :address, :route, :starttime, :seatingcapacity, :Ac, :expirylicence, :comments, :vehicle_image, :vehicle_document, :id)');
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
      $this->db->bind(':vehicle_image', $data['vehicle_image']);
      $this->db->bind(':vehicle_document', $data['vehicle_document']);
      $this->db->bind(':id', $data['userid']);

      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }


  //   public function getVehicleById($id){
  //     $this->db->query('SELECT * FROM vehicle WHERE ve_id = :id');
  //     $this->db->bind(':id', $id);
  //     $row = $this->db->single();
  //     return $row;
  // }

  public function showVehicles()
  {
      $this->db->query('SELECT * FROM vehicle');
      $results = $this->db->resultSet();
      return $results;
  }
  public function showVehiclesById($ve_id)
  {
      $this->db->query('SELECT * FROM vehicle  WHERE ve_id = :ve_id');
      $this->db->bind(':ve_id', $ve_id);
      $row = $this->db->single();
      return $row;
  }

  public function approveVehicleRequests($ve_id)
  {
      $this->db->query("UPDATE vehicle SET approve_status = 'Accepted' WHERE ve_id = :ve_id");
      $this->db->bind(':ve_id', $ve_id);
            if($this->db->execute()){
                return true;
              } else {
                return false;
              }
  }  

  public function denyVehicleRequests($ve_id)
  {
      $this->db->query("DELETE FROM vehicle WHERE ve_id = :ve_id");
      $this->db->bind(':ve_id', $ve_id);
            if($this->db->execute()){
                return true;
              } else {
                return false;
              }
  }


}