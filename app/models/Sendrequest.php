<?php
class Sendrequest {
    private $db;
    //private $id;

    public function __construct() {
        $this->db = new Database;
        // $this->id = $id;
    }

    // retrieve all vehicles 
    public function getVehicles() {
        $this->db->query('SELECT * FROM vehicle;');
        // $this->db->bind(':id', $this->id);
        $vehicles = $this->db->resultSet();
        
        return $vehicles;
    }
    //view one vehicle information
    public function getVehicleById($id){
      $this->db->query('SELECT * FROM vehicle WHERE ve_id = :id');
      $this->db->bind(':id', $id);
      $vehicle = $this->db->single();
      return $vehicle;
  }

  //view sent requests
  public function getSentRequests() {
    $this->db->query('SELECT * FROM ride_request;');
    
    $sent = $this->db->resultSet();
    
    return $sent;
}
}

 // retrieve all vehicles 
 //public function getVehicles() {
    //$this->db->query('SELECT * FROM vehicle WHERE vehicle_type=:vehicle_type;');
   // $this->db->bind(':vehicle_type', "service_type");
    // $this->db->bind(':id', $this->id);
    //$vehicles = $this->db->resultSet();
    
    //return $vehicles;
//}