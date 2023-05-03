<?php
class ReportModel {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function getMonthlyEarnings() {
        $this->db->query('SELECT date, user.us_id as customer_id, user.name, vehicle.ve_id as vehicle_id, vehicle.service_type, payment.amount 
        FROM earnings
        JOIN vehicle ON earnings.ve_id = vehicle.ve_id 
        JOIN user ON earnings.us_id = user.us_id 
        JOIN payment ON earnings.ve_id = payment.ve_id
        WHERE MONTH(date) = MONTH(CURRENT_DATE())
        ');
        return $this->db->resultSet();
    }

    public function getTotalMonthlyIncome() {
        $this->db->query('SELECT SUM(amount) as total_income 
                          FROM payment 
                          WHERE MONTH(date) = MONTH(CURRENT_DATE())');
        $result = $this->db->single();
        return $result->total_income;
    }
}
