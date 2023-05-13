<?php
    class D_Own_School_Driver{
        protected $db;

        public function __construct()
        {
            $this->db = new Database;
        }

        public function getPaymentForVehicle($driverId)
        {
            $this->db->query("SELECT
            sum(p.amount) as 'amount',
            date(p.date) as 'payment_date',
            u.name as 'name'
            FROM payment p
            INNER JOIN user u ON u.us_id = p.user_id
            INNER JOIN vehicle v on v.ve_id = p.ve_id
            WHERE v.driver_id = :id
            GROUP BY date(p.date)");
            $this->db->bind(':id', $driverId);
            $results = $this->db->resultSet();
            return $results;
        }

        
    }

?>
