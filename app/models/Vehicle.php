<?php
class Vehicle
{
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function getVehicles($userid)
  {
    $this->db->query('SELECT *  FROM vehicle where id=:id;');
    $this->db->bind(':id', $userid);
    $results = $this->db->resultSet();

    return $results;
  }

  public function getVehicleByNumber($number)
  {
    $this->db->query('SELECT *  FROM vehicle where vehicleno=:vehicleno;');
    $this->db->bind(':vehicleno', $number);
    $results = $this->db->resultSet();

    return $results;
  }



  public function getAllVehicles()
  {
    $this->db->query('SELECT *  FROM vehicle;');
    $results = $this->db->resultSet();

    return $results;
  }

    public function addvehicle($data,$fileVehicleImage){
      $this->db->query('INSERT INTO vehicle (vehicleno, model, color, year, address, route, starttime, seatingcapacity, Ac, expirylicence, service_type, charge_for_a_km, comments, vehicle_image, vehicle_document, id) VALUES(:vehicleno, :model, :color, :year, :address, :route, :starttime, :seatingcapacity, :Ac, :expirylicence, :service_type, :charge_for_a_km, :comments, :vehicle_image, :vehicle_document, :id)');
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

      $this->db->bind(':charge_for_a_km', $data['charge_for_a_km']);
      $this->db->bind(':vehicle_image', $fileVehicleImage['image_name']);
      $this->db->bind(':vehicle_document', $data['vehicle_document']);

      $this->db->bind(':id', $data['userid']);

    
      //move_uploaded_file($fileVehicleImage['image_tempName'],$fileVehicleImage['upload_location'].$fileVehicleImage['image_name']);

      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }

      
    }



  // public function showVehicles()
  // {
  //     $this->db->query('SELECT * FROM vehicle');
  //     $results = $this->db->resultSet();
  //     return $results;
  // }
  // public function showVehiclesById($ve_id)
  // {
  //     $this->db->query('SELECT * FROM vehicle  WHERE ve_id = :ve_id');
  //     $this->db->bind(':ve_id', $ve_id);
  //     $row = $this->db->single();
  //     return $row;
  // }

  
  public function showVehicles()
  {
      $this->db->query('SELECT vehicle. * , user. * FROM vehicle INNER JOIN user ON vehicle.id=user.us_id');
      $results = $this->db->resultSet();
      return $results;
  }
  public function showVehiclesById($ve_id)
  {
      $this->db->query('SELECT vehicle. * , user. * FROM vehicle INNER JOIN user ON vehicle.id=user.us_id WHERE vehicle.ve_id = :ve_id');
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

  public function calculateTotalVehicles(){

    $this->db->query("SELECT COUNT(*) AS total_count FROM vehicle");

    $row = $this->db->single();

    return $row->total_count;
}

}

