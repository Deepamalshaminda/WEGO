<?php

class Transaction{
    private $db;

    public function __construct(){
      $this->db = new Database;
    }
    public function getTransactions()
    {
        $this->db->query('SELECT earnings.* From earnings');
        $results = $this->db->resultSet();
        return $results;
        
    }
    
}