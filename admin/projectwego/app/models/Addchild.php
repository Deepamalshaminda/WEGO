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
      $this->db->query('INSERT INTO child (child_name,school,address,age,route,gender) VALUES(:name, :school, :address, :age,:route, :gender)');
      // Bind values
      $this->db->bind(':name', $data['name']);
      //$this->db->bind(':user id', $data['user id']);
      $this->db->bind(':school', $data['school']);
      $this->db->bind(':address', $data['address']);
      $this->db->bind(':age', $data['age']);
      $this->db->bind(':route', $data['route']);
      $this->db->bind(':gender', $data['gender']);


      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }
  }