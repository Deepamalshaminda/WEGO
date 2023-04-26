<?php

class Complaint{
    private $db;

    public function __construct(){
      $this->db = new Database;
    }
    public function getComplaints()
    {
        $this->db->query('SELECT complaint.*, user.name FROM complaint join user on complaint.us_id = user.us_id');
        $results = $this->db->resultSet();
        return $results;
    }
    public function getComplaintById($co_id)
    {
        $this->db->query('SELECT complaint.*, user.name, user.nic, user.email FROM complaint join user on complaint.us_id = user.us_id WHERE co_id = :co_id');
        $this->db->bind(':co_id', $co_id);
        $row = $this->db->single();
        return $row;
    }
}