<?php
    class D_ManageDriver{
        protected $db;

        public function __construct()
        {
            $this->db = new Database;
        }

        public function getRequests($id){
            $this->db->query('SELECT se_id as sentRequestID, us_id as userID, name as userName, nearestTown as from,   FROM sent_request WHERE to_whom = :id');
            $this->db->bind(':id', $id);
            $results = $this->db->resultSet();
            return $results;
        }
    }

?>
