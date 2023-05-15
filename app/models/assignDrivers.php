<?php
class AssignDrivers {
    private $db;
    private $id;

    public function __construct($id) {
        $this->db = new Database;
        $this->id = $id;
    }

    // retrieve all vehicles from the database for the current user
    public function getVehiclesByUser() {
        $this->db->query('SELECT vehicle_image ,ve_id, vehicleno, route FROM vehicle WHERE id = :id');
        $this->db->bind(':id', $this->id);
        $vehicles = $this->db->resultSet();
        return $vehicles;
    }

    // retrieve all drivers from the database of supplier
    public function getDrivers() {
        $this->db->query('SELECT driver_id from driver WHERE id = 154');
        $drivers = $this->db->resultSet();
        return $drivers;
    }

    // assign a driver to a vehicle in the database
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
    
    }
    

