<?php
class Reservation
{

    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllDataByID($id)
    {
        $this->db->query('SELECT * FROM reservation WHERE us_id = :id');
        $this->db->bind(':id', $id);
        $results = $this->db->resultSet();
        return $results;
    }
}
