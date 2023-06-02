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

  
  public function getChildrenByParent(){
    $this->db->query('SELECT * FROM child WHERE pr_id = :id');

    //Bind values
    //$this->db->bindParam(':nic', $nic);
    $this->db->bind(':id', $_SESSION['user_id']);
    //Execute
    $sent = $this->db->resultSet();
    
    return $sent;
    
}

  //view all sent requests
  public function getSentRequests() {
    $this->db->query('SELECT * FROM ride_request;');
    
    $sent = $this->db->resultSet();
    
    return $sent;
}

 //view one sent request
 public function getSentRequestById($id){
    $this->db->query('SELECT * FROM ride_request WHERE ride_request_id = :id');
    $this->db->bind(':id', $id);
    $sentr = $this->db->single();
    return $sentr;
}

public function deleteRequestById($id){
    $this->db->query('DELETE FROM ride_request WHERE ride_request_id_id = :id');
    $this->db->bind(':id', $id);
    $sentr = $this->db->single();

    // $children = Child::getChildren();
    return $sentr;
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