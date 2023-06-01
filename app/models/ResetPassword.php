<?php
class ResetPassword {
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    // Check if the reset token is valid
    public function isValidResetToken($token) {
        $this->db->query('SELECT * FROM reset_tokens WHERE token = :token');
        $this->db->bind(':token', $token);
        $this->db->execute();

        if ($this->db->rowCount() > 0) {
            $token_row = $this->db->single();
            // Check if the token has expired
            $expiration_time = strtotime('+1 hour', strtotime($token_row['created_at']));
            $current_time = time();
            if ($current_time < $expiration_time) {
                return true;
            } else {
                // Delete the expired token from the database
                $this->db->query('DELETE FROM reset_tokens WHERE us_id = :us_id');
                $this->db->bind(':us_id', $token_row['us_id']);
                $this->db->execute();
            }
        }

        return false;
    }

    // Update the user's password with a new password
    public function updatePassword($user_id, $new_password) {
        $this->db->query('UPDATE user SET password = :password WHERE us_id = :us_id');
        $this->db->bind(':us_id', $user_id);
        $this->db->bind(':password', $new_password);
        return $this->db->execute();
    }

    // Delete the reset token from the database
    public function deleteResetToken($token) {
        $this->db->query('DELETE FROM reset_tokens WHERE token = :token');
        $this->db->bind(':token', $token);
        return $this->db->execute();
    }
    
    // Get the user with the given email address
    public function getUserByEmail($email) {
        $this->db->query('SELECT * FROM user WHERE email = :email');
        $this->db->bind(':email', $email);
        $this->db->execute();
        return $this->db->single();
    }

    // Save the reset token for the user
    public function saveResetToken($user_id, $token) {
        // Delete any existing reset tokens for the user
        $this->db->query('DELETE FROM reset_tokens WHERE us_id = :us_id');
        $this->db->bind(':us_id', $user_id);
        $this->db->execute();

        // Insert the new reset token for the user
        $this->db->query('INSERT INTO reset_tokens (us_id, token) VALUES (:us_id, :token)');
        $this->db->bind(':us_id', $user_id);
        $this->db->bind(':token', $token);
        return $this->db->execute();
    }
}
