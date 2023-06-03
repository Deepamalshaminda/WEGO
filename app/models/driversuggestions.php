<?php
class driversuggestions {
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    // Function to fetch drivers based on nearest town
    public function getDriversByNearestTown($nearestTown) {
        $this->db->query('SELECT profile_image, name FROM user WHERE role_id = 1 AND nearestTown = :nearestTown');
        $this->db->bind(':nearestTown', $nearestTown);
        $drivers = $this->db->resultSet();
        return $drivers;
    }
    
}
