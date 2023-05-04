<?php
    class D_ManageDriver{
        protected $db;

        public function __construct()
        {
            $this->db = new Database;
        }

        public function getRequests($driverId)
        {
            $this->db->query("SELECT
            s.se_id as 'se_id',
            u.name as 'fromWhom',
            u.nearestTown as 'fromWhere',
            ow.officeAddress as 'toWhere'
            FROM sent_request s
            INNER JOIN user u ON s.from_whom = u.us_id
            INNER JOIN officeworker ow ON s.from_whom = ow.us_id
            WHERE to_whom = :id;");
            $this->db->bind(':id', $driverId);
            $results = $this->db->resultSet();
            return $results;
        }

        public function acceptRideRequest($se_id)
        {
            $this->db->query("INSERT INTO accepted_request (se_id, status) VALUES (:id, '1')");
            $this->db->bind(':id', $se_id);
            if($this->db->execute()){
                return true;
              } else {
                return false;
              }
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

        // public function getRequestSendersName($sendersUserID){
        //     $this->db->query("SELECT
        //     u.name as 'sendersName'
        //     FROM user as u
        //     WHERE u.us_id = :senderID;
        //     ");
        //     $this->db->bind(':senderID', $sendersUserID);
        //     $results = $this->db->resultSet();
        //     return $results;
        // }
    }

?>
