<?php
class assignDrivers {
    private $db;
    private $id;

    public function __construct($id) {
        $this->db = new Database;
        $this->id = $id;
    }

    // retrieve all vehicles from the database for the current user
    public function getVehiclesByUser() {
        $this->db->query('SELECT ve_id, vehicleno FROM vehicle WHERE id = :id');
        $this->db->bind(':id', $this->id);
        $vehicles = $this->db->resultSet();
        return $vehicles;
    }
}
