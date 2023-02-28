<?php
    class Request{
        protected $db;

        public function __construct()
        {
            $this->db = new Database;
        }

        public function getRequests($data){
            // $this->db->query('SELECT * FROM requests');
            // $results = $this->db->resultSet();
            // return $results;

            $query = "SELECT * FROM requests where to_whom = :to_whom";
            $this->db->bind(':to_whom', $_SESSION[('user_email')]);

            $row = $this->db->single();

            if($this->db->rowCount() > 0){
                return $row;
            } else {
                return false;
            }
        }
    }
