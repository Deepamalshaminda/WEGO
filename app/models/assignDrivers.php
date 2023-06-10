<?php

class AssignDrivers {
    private $db;
    private $id;

    public function __construct($id) {
        $this->db = new Database;
        $this->id = $id;
    }

    public function getVehiclesByUser() {
        $this->db->query('SELECT v.vehicle_image, v.ve_id, v.vehicleno, d.driver_id
                          FROM vehicle v
                          LEFT JOIN driver d ON v.driver_id = d.driver_id
                          WHERE v.id = :id');
        $this->db->bind(':id', $this->id);
        $vehicles = $this->db->resultSet();
        return $vehicles;
    }
    
    

    public function getUnassignedDrivers() {
        $this->db->query('SELECT driver_id FROM driver WHERE id = 188 AND driver_id NOT IN (SELECT driver_id FROM vehicle WHERE driver_id IS NOT NULL)');
        $drivers = $this->db->resultSet();
        return $drivers;
    }
    

    public function assignDriverToVehicle($driver_id, $vehicle_id) {
        $this->db->query('UPDATE vehicle SET driver_id = :driver_id WHERE ve_id = :ve_id');
        $this->db->bind(':driver_id', $driver_id);
        $this->db->bind(':ve_id', $vehicle_id);
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }


    public function getVehicleByVehicleId($vehicle_id){
        $this->db->query("SELECT * FROM vehicle WHERE ve_id = :vehicle_id");
        $this->db->bind(':vehicle_id',$vehicle_id);
        $row = $this->db->asAnArray();
        //$row = $this->db->asAnArray();
        if($row){
            $row = $this->db->single();
            return $row;
        } else {
            return false;
        }
    }

    public function getRideInfo() {
        $this->db->query('SELECT v.ve_id, v.vehicleno, v.driver_id, v.starttime, v.route FROM vehicle v INNER JOIN trip_information ON v.ve_id = trip_information.ve_id WHERE trip_information.trip_status = "Ongoing" AND v.id = :id;');
        $this->db->bind(':id', $this->id);
        $vehicles = $this->db->resultSet();
        return $vehicles;
    }
    
    public function getCompletedRides() {
        $this->db->query('SELECT v.ve_id, v.vehicleno, v.driver_id, v.route 
        FROM vehicle v 
        INNER JOIN trip_information 
        ON v.ve_id = trip_information.ve_id 
        WHERE trip_information.trip_status = "Completed" 
        AND v.id = :id;');
        $this->db->bind(':id', $this->id);
        $vehicles = $this->db->resultSet();
        return $vehicles;
    }
    public function getDriverEmail(){
        $this->db->query('SELECT email
        FROM user 
        INNER JOIN driver ON driver.driver_id = user.us_id');
        $vehicles = $this->db->resultSet();
        return $vehicles;
        

    }
    public function getDriverEmailbyID($id){
        $this->db->query('SELECT email
        FROM user 
        INNER JOIN driver ON driver.driver_id = user.us_id
        WHERE driver_id = :driver_id ');
        $this->db->bind(':driver_id', $id);
        $vehicles = $this->db->single();
        return $vehicles->email;
        

    }

    
    
    }
    

