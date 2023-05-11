<?php
class documentModel {
    private $db;

    public function __construct(){
      $this->db = new Database;
    }

    // Function to get all vehicles and their documents for a supplier
    public function getDocumentsBySupplier($id) {
        // Prepare query
        $this->db->query('SELECT * FROM vehicle WHERE supplier_id = :id');
        $this->db->bind(':id', $id);

        // Get result set
        $results = $this->db->resultSet();

        // Check if any vehicles were found
        if($this->db->rowCount() > 0) {
            // Loop through vehicles and add document path to object
            foreach($results as $result) {
                $result->vehicle_document = URLROOT . '/public/vehicle_document/' . $result->vehicle_document;
            }
        }

        return $results;
    }
}
