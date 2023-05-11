<?php
class Complaint
{

    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function setComplaint($complaint_type, $complaint_description, $us_id, $ride_id, $reservation_id)
    {
        $this->db->query('INSERT INTO complaint (complaint_type, complaint_description, us_id, ride_id, reservation_id) VALUES (:complaint_type, :complaint_description, :us_id, :ride_id, :reservation_id)');
        $this->db->bind(':complaint_type', $complaint_type);
        $this->db->bind(':complaint_description', $complaint_description);
        $this->db->bind(':us_id', $us_id);
        $this->db->bind(':ride_id', $ride_id);
        $this->db->bind(':reservation_id', $reservation_id);
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
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
