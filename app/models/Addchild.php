<?php
  class addchild {
    private $db;

    public function __construct()
        {
            $this->db = new Database;
        }


    //public function getaddchild($userid){
     // $this->db->query('SELECT *  FROM child where id=:id;');
      //$this->db->bind(':id', $userid);
      //$results = $this->db->resultSet();

      //return $results;
   // }

    public function addchild($data){
      $this->db->query('INSERT INTO child (name,gender,dob,school,school_address,age) VALUES(:name, :gender, :dob, :school,:school_address, :age, )');
      // Bind values
      $this->db->bind(':name', $data['name']);
      //$this->db->bind(':user id', $data['user id']);
      $this->db->bind(':gender', $data['gender']);
      $this->db->bind(':dob', $data['dob']);
      $this->db->bind(':school', $data['school']);
      $this->db->bind(':school_address', $data['school_address']);
      $this->db->bind(':age', $data['age']);
     



      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }
  }