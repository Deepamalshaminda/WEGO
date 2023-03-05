<?php
    class D_ManageDriver{
        protected $db;

        public function __construct()
        {
            $this->db = new Database;
        }

        public function getRequests($id){
            $this->db->query('SELECT * FROM sent_request WHERE from_whom = :id');
            $this->db->bind(':id', $id);
            $results = $this->db->resultSet();
            return $results;
        }
    }

?>
