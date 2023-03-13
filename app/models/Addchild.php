<?php
  class addchild {
    private $db;

    public function __construct(){
      $this->db = new Database;
    }

    //public function getaddchild($userid){
     // $this->db->query('SELECT *  FROM child where id=:id;');
      //$this->db->bind(':id', $userid);
      //$results = $this->db->resultSet();

      //return $results;
   // }

    public function addchild($data){
      $this->db->query('INSERT INTO child (name,school,address,age,route,gender,pr_id) VALUES(:name, :school, :address, :age,:route, :gender, :pr_id)');
      // Bind values
      $this->db->bind(':name', $data['name']);
      //$this->db->bind(':user id', $data['user id']);
      $this->db->bind(':school', $data['school']);
      $this->db->bind(':address', $data['address']);
      $this->db->bind(':age', $data['age']);
      $this->db->bind(':route', $data['route']);
      $this->db->bind(':gender', $data['gender']);
      $this->db->bind(':pr_id', $data['pr_id']);


      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }
  }