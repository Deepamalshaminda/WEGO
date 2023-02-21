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
    }
