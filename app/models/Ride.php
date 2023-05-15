<?php
class Ride
{

    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllDataByID($id)
    {
        $this->db->query('SELECT * FROM ride WHERE us_id = :id');
        $this->db->bind(':id', $id);
        $results = $this->db->resultSet();
        return $results;
    }

    public function viewrides()
    {
        $this->db->query('SELECT * FROM trip_information');
        $results = $this->db->resultSet();
        return $results;
    }
    public function viewridesById($trip_id)
    {
        $this->db->query('SELECT * FROM trip_information
                          WHERE trip_id = :trip_id');
        $this->db->bind(':trip_id', $trip_id);
        $row = $this->db->single();
        return $row;
    }

    
}

