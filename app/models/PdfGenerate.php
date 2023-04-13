<?php
class PdfGenerate {

  private $db;

  public function __construct($db) {
    $this->db = $db;
  }

  public function getData() {
    $data = array();
    $stmt = $this->db->prepare('SELECT * FROM earnings');
    $stmt->execute();
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
      $data[] = $row;
    }
    return $data;
  }

}
