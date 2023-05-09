<?php

class forgot_password extends Controller {
    private $email_from = 'dewminigune123@gmail.com';
    public function resetForm() {
        $this->view('/users/supplier/forgot_password');
    }

    public function reset() {
        // Check if the form was submitted
        if (isset($_POST['submit'])) {
            // Get the email address from the form
            $email = $_POST['email'];

            // Load the model
            $ResetPassword = $this->model('ResetPassword');

            // Check if the email address exists in the database
            $user = $ResetPassword->getUserByEmail($email);

            if ($user) {
                // Generate a password reset token and save it in the database
                $token = bin2hex(random_bytes(16));
                $ResetPassword->saveResetToken($user->id, $token);


                // Send an email to the user with a link to reset their password
                $resetUrl = URLROOT . '/reset_password.php?token=' . $token;
                $subject = 'Password Reset Request';
                $message = 'Click the following link to reset your password: ' . $resetUrl;
                $headers = 'From: ' . $this->email_from;

                ini_set('SMTP', 'smtp.gmail.com');
ini_set('smtp_port', '587');


                if (mail($email, $subject, $message, $headers)) {
                    // Display a success message to the user
                    $data = array('success' => 'An email has been sent to your email address with instructions on how to reset your password.');
                    $this->view('forgot_password', $data);
                } else {
                    // Display an error message if the email could not be sent
                    $data = array('error' => 'An error occurred while sending the email. Please try again later.');
                    $this->view('forgot_password', $data);
                }
            } else {
                // Display an error message if the email address is not found in the database
                $data = array('error' => 'The email address you entered does not exist in our database.');
                $this->view('forgot_password', $data);
            }
        } else {
            // Load the view for the forgot password form
            $this->view('/users/supplier/forgot_password');
        }
    }
}

?>
