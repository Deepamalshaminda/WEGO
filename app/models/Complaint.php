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
}
