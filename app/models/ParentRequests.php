<?php
class ParentRequests{
    private $db;
    private $id;

    public function __construct($id) {
        $this->db = new Database;
        $this->id = $id;
    }

    // retrieve all vehicles from the database for the current user
    public function getParentRequests() {
        $this->db->query('SELECT u.us_id, u.name, v.vehicleno 
        FROM ride_request r 
        JOIN user u ON r.from_whom = u.us_id 
        JOIN vehicle v ON r.to_whom = v.vehicleno 
        WHERE r.status = "Pending" AND v.id= :id ');



        $this->db->bind(':id', $this->id);
        $users = $this->db->resultSet();
        return $users;
    }

    // public function updateRequestStatus($req_id, $status) {
    //     $this->db->query('UPDATE conn_request SET status = :status WHERE req_id = :req_id');
    //     $this->db->bind(':status', 'Accepted');
    //     $this->db->bind(':req_id', $req_id);
    //     $result = $this->db->execute();
        
    //     if ($result === false) {
    //         // Handle the error here, such as logging it or displaying an error message to the user.
    //         return false;
    //     }
        
    //     return true;
    // }
    
      
      
}