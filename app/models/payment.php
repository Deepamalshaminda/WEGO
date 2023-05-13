<?php
class Payment
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getLatestPaymentID()
    {
        $this->db->query('SELECT MAX(payment_id) as payment_id FROM payment');
        $row = $this->db->single();
        $payment_id = $row->payment_id;
        return $payment_id;
    }

    public function getGatewayDetails()
    {
        $this->db->query('SELECT * FROM gateway_details WHERE id = 0');
        $row = $this->db->single();
        return $row;
    }

    public function addPayment($payment_id, $amount, $date, $ve_id, $user_id)
    {
        $this->db->query("INSERT INTO payment (payment_id, amount, date, ve_id, user_id) VALUES (:payment_id, :amount, :date, :ve_id, :user_id)");
        $this->db->bind(':payment_id', $payment_id);
        $this->db->bind(':amount', $amount);
        $this->db->bind(':date', $date);
        $this->db->bind(':ve_id', $ve_id);
        $this->db->bind(':user_id', $user_id);
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
