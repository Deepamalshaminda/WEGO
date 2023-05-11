<?php
class assignDrivers {
    private $db;
    private $id;

    public function __construct() {
        $this->db = new Database;
        $this->id = $_SESSION['id'];
    }

    // retrieve all vehicles from the database for the current user
    public function getVehiclesByUser() {
        $this->db->query('SELECT ve_id, vehicleno, vehicle_image FROM vehicle WHERE user_id = :id');
        $this->db->bind(':id', $this->id);
        $vehicles = $this->db->resultSet();
        return $vehicles;
    }
}
