<?php
class VehicleDetails {
    private $db;
    

    public function __construct($id) {
        $this->db = new Database;
        
    }

    public function getVehicledetailsbyVehicleId ($vehicle_id){
        $this->db->query("SELECT ve_id, vehicleno, model, color, year, address, route, starttime, seatingcapacity, Ac,expirylicence, service_type, comments 
        FROM vehicle WHERE ve_id = :vehicle_id");
        $this->db->bind(':vehicle_id',$vehicle_id);
       
    }

   


}