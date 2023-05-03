<?php
  class Child {
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
    public function getChildById($id){
        $this->db->query('SELECT * FROM child WHERE id = :id');
        $this->db->bind(':id', $id);
        $child = $this->db->single();
        return $child;
    }

    public function getChildren(){
      $parent_id = $_SESSION['user_id'];
      $this->db->query('SELECT *  FROM child WHERE parent_id = :parent_id');
      $this->db->bind(':parent_id', $parent_id);
      $results = $this->db->resultSet();

      return $results;
    }

    public function deleteChildById($id){
      $this->db->query('DELETE FROM child WHERE id = :id');
      $this->db->bind(':id', $id);
      $child = $this->db->single();

      // $children = Child::getChildren();
      return $child;
    }

    public function addchild($data){
      
      $this->db->query('INSERT INTO child(name,gender,dob,school,school_address,age,parent_id) VALUES(:name, :gender, :dob, :school,:school_address, :age, :parent_id)');
      // Bind values
      
      $this->db->bind(':name', $data['name']);
      $this->db->bind(':gender', $data['gender']);
      $this->db->bind(':dob', $data['dob']);
      $this->db->bind(':school', $data['school']);
      $this->db->bind(':school_address', $data['school_address']);
      $this->db->bind(':age', (date('Y') - date('Y',strtotime($data['dob']))));
      $this->db->bind(':parent_id', $data['parentid']);

      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }
    public function updateChild($data){
      $this->db->query('UPDATE child SET name = :name, gender = :gender, dob = :dob, school = :school, school_address = :school_address, age = :age, parent_id = :parent_id WHERE id = :id');
      // Bind values
      $this->db->bind(':id', $data['id']);
      $this->db->bind(':name', $data['name']);
      $this->db->bind(':gender', $data['gender']);
      $this->db->bind(':dob', $data['dob']);
      $this->db->bind(':school', $data['school']);
      $this->db->bind(':school_address', $data['school_address']);
      $this->db->bind(':age', (date('Y') - date('Y',strtotime($data['dob']))));
      $this->db->bind(':parent_id', $data['parentid']);

      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }
  }