<?php
class ParentModel {
  
  private $conn;
  
  public function __construct() {
    // Connect to the database
    $this->conn = new mysqli('localhost', 'root', '', 'wego');
  }
  
  public function getParentRequests() {
    // Query to get the parent requests
    $query = 'SELECT * FROM request';

    // Execute the query
    $result = $this->conn->query($query);

    // Fetch the results
    $parentRequests = $result->fetch_all(MYSQLI_ASSOC);

    // Return the results
    return $parentRequests;
  }
}
