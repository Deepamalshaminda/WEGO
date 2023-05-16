<?php
    class D_Own_School_Driver{
        protected $db;

        public function __construct()
        {
            $this->db = new Database;
        }

        public function getPaymentForVehicle($userId,$month, $year)
        {
            $this->db->query("SELECT
            sum(p.amount) as 'amount',
            date(p.date) as 'payment_date',
            u.name as 'name'
            FROM payment p
            INNER JOIN user u ON u.us_id = p.user_id
            INNER JOIN vehicle v on v.ve_id = p.ve_id
            WHERE v.driver_id = :id AND YEAR(p.date) = :year AND MONTH(p.date) = :month
            GROUP BY date(p.date)");
            $this->db->bind(':id', $userId);
            $this->db->bind(':year', $year);
            $this->db->bind(':month', $month);
            $results = $this->db->resultSet();
            return $results;
        }

        public function getPresentStudentForVehicle($vehicle_id)
        {
            $this->db->query("SELECT
            c.name as 'child_name',
            u.contactNumber as 'parent_contact',
            u.address as 'location'
            FROM child c
            INNER JOIN user u ON u.us_id = c.pr_id
            INNER JOIN vehicle v ON v.ve_id = c.ve_id
            INNER JOIN student_attendance s ON s.studentid = c.ch_id
            WHERE c.ve_id = :vehicle_id AND s.mark = 1
            ");
            $this->db->bind(':vehicle_id', $vehicle_id);
            $results = $this->db->resultSet();
            return $results;
        }

        public function findStartAndEnd($vehicle_id){
            $this->db->query("SELECT route FROM vehicle WHERE ve_id = :id");
            $this->db->bind(':id', $vehicle_id);
            $result = $this->db->single();
            return $result;
        }

        public function startTrip($data){
            $this -> db -> query("INSERT INTO
            trip_information (driver_id, ve_id, start, destination, no_of_passengers, trip_status) VALUES (:user_id, :ve_id, :start, :destination, :no_of_passengers, :trip_status)           
            ");
            $this->db->bind(':user_id', $data['user_id']);
            $this->db->bind(':ve_id', $data['ve_id']);
            $this->db->bind(':start', $data['start']);
            $this->db->bind(':destination', $data['destination']);
            $this->db->bind(':no_of_passengers', $data['no_of_passengers']);
            $this->db->bind(':trip_status', $data['trip_status']);
            if($this->db->execute()){
                return true;
              } else {
                return false;
              }
        }

        public function checkOngoingTrip($vehicleId){
            $this->db->query("SELECT DATE(date) as trip_date FROM `trip_information` WHERE ve_id = :id AND trip_status = 'Ongoing'");
            $this->db->bind(':id', $vehicleId);
            $result = $this->db->single();
            return $result;

        }

        
    }

?>
