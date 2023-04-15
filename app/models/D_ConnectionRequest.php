<?php
    class D_ConnectionRequest{
        protected $db;

        public function __construct()
        {
            $this->db = new Database;
        }

        public function getRequestsFromVehicleSuppliers($driverId)
        {
            $this->db->query("SELECT
            cr.req_id as 'request_id',
            u.name as 'fromWhom'
            FROM conn_request cr
            INNER JOIN user u ON u.us_id = cr.from_whom 
            WHERE cr.to_whom = :id AND cr.status = 'Pending'");
            $this->db->bind(':id', $driverId);
            $results = $this->db->resultSet();
            return $results;
        }

        public function getSentRequestsToVehicleSuppliers($driverId)
        {
            $this->db->query("SELECT
            cr.req_id as 'request_id',
            u.name as 'toWhom'
            FROM conn_request cr
            INNER JOIN user u ON u.us_id = cr.to_whom 
            WHERE cr.from_whom = :id AND cr.status = 'Pending'");
            $this->db->bind(':id', $driverId);
            $results = $this->db->resultSet();
            return $results;
        }

        // public function getListOfVehicleSuppliers()
        // {
        //     $this->db->query("SELECT
        //     u.name as 'name',
        //     v.id as 'supplier_id'
        //     FROM vehicle v
        //     INNER JOIN user u ON u.us_id = v.id
        //     WHERE v.id NOT IN (SELECT from_whom from conn_request UNION 
        //     SELECT to_whom FROM conn_request)");
        //     $results = $this->db->resultSet();
        //     return $results;
        // }

        public function getListOfVehicleSuppliers()
        {
            $this->db->query("SELECT
            u.name as 'name',
            v.id as 'supplier_id'
            FROM vehicle v
            INNER JOIN user u ON u.us_id = v.id
            LEFT JOIN (
            SELECT from_whom AS id FROM conn_request
            UNION
            SELECT to_whom AS id FROM conn_request
            ) cr ON u.Us_id = cr.id
            WHERE cr.id IS NULL");
            $results = $this->db->resultSet();
            return $results;
        }

        public function acceptRideRequests($requestId)
        {
            $this->db->query("UPDATE conn_request SET status = 'Accepted' WHERE req_id = :id");
            $this->db->bind(':id', $requestId);
            if($this->db->execute()){
                return true;
              } else {
                return false;
              }
        }

        public function declineRideRequests($requestId)
        {
            $this->db->query("DELETE FROM conn_request WHERE req_id = :id");
            $this->db->bind(':id', $requestId);
            if($this->db->execute()){
                return true;
              } else {
                return false;
              }
        }

        public function deleteSentRequest($requestId)
        {
            $this->db->query("DELETE FROM conn_request WHERE req_id = :id");
            $this->db->bind(':id', $requestId);
            if($this->db->execute()){
                return true;
              } else {
                return false;
              }
        }

    }









