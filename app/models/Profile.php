<?php
class Profile{
    private $db;
    public function __construct(){
        $this->db = new Database;
    }
    public function profile($us_id)
    {
        $this->db->query('SELECT * FROM user WHERE US_Id = :us_id');
        $this->db->bind(':us_id', $us_id);
        $row = $this->db->single();
        return $row;
    }

}