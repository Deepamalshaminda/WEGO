<?php
class DriverRequests{
    private $db;
    private $id;

    public function __construct($id) {
        $this->db = new Database;
        $this->id = $id;
    }

    // retrieve all vehicles from the database for the current user
    public function getDriverRequests() {
        $this->db->query('SELECT DISTINCT u.us_id, u.name
        FROM user u
        INNER JOIN conn_request ON u.us_id = conn_request.from_whom
        INNER JOIN vehicle ON conn_request.to_whom = vehicle.id
        WHERE conn_request.status = "Pending" AND vehicle.id = :id
        
        ');
        $this->db->bind(':id', $this->id);
        $users = $this->db->resultSet();
        return $users;
    }

    public function updateRequestStatus($req_id, $status) {
        $this->db->query('UPDATE conn_request SET status = :status WHERE req_id = :req_id');
        $this->db->bind(':status', 'Accepted');
        $this->db->bind(':req_id', $req_id);
        $result = $this->db->execute();
        
        if ($result === false) {
            // Handle the error here, such as logging it or displaying an error message to the user.
            return false;
        }
        
        return true;
    }
    
      
      
}