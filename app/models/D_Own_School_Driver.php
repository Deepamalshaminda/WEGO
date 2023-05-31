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

        public function getRequestsFromParents($userId)
        {
            $this->db->query("SELECT
            r.ride_request_id as 'request_id',
            u.name as 'fromParent',
            u.address as 'fromWhere',
            c.school_address as 'toWhere',
            c.Name as 'childName',
            r.from_whom as 'childId'
            FROM ride_request r
            INNER JOIN child c ON c.ch_id = r.from_whom
            INNER JOIN user u ON u.us_id = r.from_parent
            INNER JOIN vehicle v ON v.ve_id = r.to_whom
            WHERE v.driver_id = :id AND r.status = 'Pending'");
            $this->db->bind(':id', $userId);

            $results = $this->db->resultSet();
        
            return $results;
        }

        public function acceptRideRequests($childId)
        {
            $this->db->query("UPDATE ride_request SET status = 'Accepted' WHERE ride_request_id = :id");
            $this->db->bind(':id', $childId);
            if($this->db->execute()){
                return true;
              } else {
                return false;
              }
        }  

        public function declineRideRequests($requestId)
        {
            $this->db->query("UPDATE ride_request SET status = 'declined' WHERE ride_request_id = :id");
            $this->db->bind(':id', $requestId);
            if($this->db->execute()){
                return true;
              } else {
                return false;
              }
        }

        public function getPresentStudentForVehicle($vehicle_id)
        {
            $currentDate = date("Y-m-d");
            $this->db->query("SELECT
            c.name as 'child_name',
            u.contactNumber as 'parent_contact',
            u.address as 'location'
            FROM child c
            INNER JOIN user u ON u.us_id = c.pr_id
            INNER JOIN vehicle v ON v.ve_id = c.ve_id
            INNER JOIN student_attendance s ON s.studentid = c.ch_id
            WHERE c.ve_id = :vehicle_id AND s.mark = 1 AND s.attendancedate = :current_date
            ");
            $this->db->bind(':vehicle_id', $vehicle_id);
            $this->db->bind(':current_date', $currentDate);
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

        public function endTrip($data){
            $this->db->query("UPDATE trip_information SET trip_status = 'Completed' WHERE ve_id = :id AND DATE(date) = :date" );
            $this->db->bind(':id', $data['ve_id']);
            $this->db->bind(':date', $data['date']);
            if($this->db->execute()){
                return true;
              } else {
                return false;
              }
        }

        public function checkTripsOnSameDate($data){
            $this->db->query("SELECT trip_id, trip_status FROM trip_information WHERE DATE(date) = :date AND ve_id = :ve_id");
            $this->db->bind(':ve_id', $data['ve_id']);
            $this->db->bind(':date', $data['date']);
            $result = $this->db->resultSet();
            return $result;
            
        }

        public function checkOngoingTrip($vehicleId){
            $this->db->query("SELECT DATE(date) as trip_date FROM `trip_information` WHERE ve_id = :id AND trip_status = 'Ongoing'");
            $this->db->bind(':id', $vehicleId);
            $result = $this->db->resultSet();
            return $result;

        }

        
        public function getProfileDetails($userId){
            $this->db->query("SELECT * FROM user WHERE us_id = :us_id");
            $this->db->bind(':us_id', $userId);
            $result = $this->db->single();
            return $result;
        }

        public function updateProfileDetails($data){

            $this->db->query('UPDATE user SET name = :name, gender = :gender, dob = :dob, province = :province, district = :district, nearestTown :nearestTown, contactNumber = :contactNumber, email = :email');
      
            // Bind values
            $this->db->bind(':name', $data['name']);
            $this->db->bind(':gender', $data['gender']);
            $this->db->bind(':dob', $data['dob']);
            $this->db->bind(':province', $data['province']);
            $this->db->bind(':district', $data['district']);
            $this->db->bind(':nearestTown', $data['nearestTown']);
            $this->db->bind(':address', $data['address']);
            $this->db->bind(':contactNumber', $data['contactNumber']);
            $this->db->bind(':email', $data['email']);
            
      
            // Execute
            if($this->db->execute()){
              return true;
            } else {
              return false;
            }
          }
        
    }

?>
