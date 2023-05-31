<?php
    class ManageDriver{
        protected $db;

        public function __construct()
        {
            $this->db = new Database;
        }

        public function getRequests(){
            $this->db->query('SELECT * FROM requests');
            $results = $this->db->resultSet();
            return $results;
        }

        public function getRequestsFromParents($userId)
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
            $this->db->bind(':id', $userId);
            $results = $this->db->resultSet();
            return $results;
        }
    }
