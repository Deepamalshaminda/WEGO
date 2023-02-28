<?php
    class ManageDriver{
        protected $db;

        public function __construct()
        {
            $this->db = new Database;
        }
    }
