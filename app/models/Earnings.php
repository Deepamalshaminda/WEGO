<?php
class Earnings {
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    // Get the earnings for each vehicle for a given month and year
//     public function get_earnings_by_vehicle_and_month($month, $year) {
//        $this->db->query("SELECT payment.ve_id, vehicle.vehicleno, SUM(payment.amount) AS total_earnings FROM payment JOIN vehicle ON payment.ve_id = vehicle.id WHERE MONTH(date) = :month AND YEAR(date) = :year GROUP BY payment.ve_id");
// $this->db->bind(':month', $month);
// $this->db->bind(':year', $year);

// return $this->db->resultSet();

//     }





public function get_earnings_by_vehicle_and_month() {
    $this->db->query("SELECT SUM(amount) as total_earnings, date FROM payment GROUP BY date");
    $result_set = $this->db->resultSet();

    $amounts = array();
    $dates = array();

    foreach ($result_set as $row) {
        $amounts[] = $row->total_earnings;
        $dates[] = $row->date;
    }

    return array('amounts' => $amounts, 'dates' => $dates);
}




}
