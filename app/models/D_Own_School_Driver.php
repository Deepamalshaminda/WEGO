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

        
    }

?>
