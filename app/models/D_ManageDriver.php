<?php
    class D_ManageDriver{
        protected $db;

        public function __construct()
        {
            $this->db = new Database;
        }

        public function getRequestsFromParents($driverId)
        {
            $this->db->query("SELECT
            r.ride_request_id as 'request_id',
            u.name as 'fromWhom',
            u.address as 'fromWhere',
            c.school_address as 'toWhere'
            FROM ride_request r
            INNER JOIN user u ON u.us_id = r.from_whom 
            INNER JOIN parent p ON p.us_id = u.us_id
            INNER JOIN child c ON c.pr_id = p.pr_id
            INNER JOIN vehicle v ON v.ve_id = r.to_whom
            WHERE v.driver_id = :id AND r.status = 'Pending'");
            $this->db->bind(':id', $driverId);
            $results = $this->db->resultSet();
            return $results;
        }

        public function getRequestsFromOfficeWorkers($driverId)
        {
            $this->db->query("SELECT
            r.ride_request_id as 'request_id',
            u.name as 'fromWhom',
            u.address as 'fromWhere',
            ow.officeaddress as 'toWhere'
            FROM ride_request r
            INNER JOIN user u ON u.us_id = r.from_whom 
            INNER JOIN officeworker ow ON ow.us_id = u.us_id
            INNER JOIN vehicle v ON v.ve_id = r.to_whom
            WHERE v.driver_id = :id;");
            $this->db->bind(':id', $driverId);
            $results = $this->db->resultSet();
            return $results;
        }

        public function acceptRideRequests($requestId)
        {
            $this->db->query("UPDATE ride_request SET status = 'Accepted' WHERE ride_request_id = :id");
            $this->db->bind(':id', $requestId);
            if($this->db->execute()){
                return true;
              } else {
                return false;
              }
        }  

        public function declineRideRequests($requestId)
        {
            $this->db->query("DELETE FROM ride_request WHERE ride_request_id = :id");
            $this->db->bind(':id', $requestId);
            if($this->db->execute()){
                return true;
              } else {
                return false;
              }
        }


        public function viewOngoingTrip($driverId)
        {
            $this->db->query("SELECT * FROM trip_information WHERE driver_id = :id AND trip_status = 'Ongoing'");
            $this->db->bind(':id',$driverId);
            return $this->db->resultSet();
        }

        public function viewCompletedTrips($driverId)
        {
            $this->db->query("SELECT * FROM trip_information WHERE driver_id = :id AND trip_status = 'Completed'");
            $this->db->bind(':id',$driverId);
            return $this->db->resultSet();
        }

        public function getDriverByUserId($us_id){
            $this->db->query("SELECT * FROM driver WHERE us_id = :us_id");
            $this->db->bind(':us_id',$us_id);
            $row = $this->db->asAnArray();
            //$row = $this->db->asAnArray();
            if($row){
                $row = $this->db->single();
                return $row;
            } else {
                return false;
            }
        }
     

    }

?>
