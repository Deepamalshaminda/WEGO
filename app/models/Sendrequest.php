<?php
  class Sendrequest {
    private $db;

    public function __construct()
        {
            $this->db = new Database;
        }

        

    public function getVehicles(){
            $parent_id = $_SESSION['user_id'];
            $this->db->query('SELECT *  FROM vehicle WHERE id = :vehicle_supplier_id');
            $this->db->bind(':vehicle_supplier_id', $parent_id);
            $results = $this->db->resultSet();
      
            return $results;
          }
    
    
  }