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
