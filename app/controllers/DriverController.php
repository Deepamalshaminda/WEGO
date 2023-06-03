<?php

class DriverController {
    public function viewDrivers() {
        // Check if the user is logged in and get their address
        $userAddress = "123 Main Street"; // Replace with actual user address retrieval logic

        // Create an instance of the model
        $addDriver = new addDriver();

        // Fetch drivers near the user's address
        $drivers = $addDriver->getDriversNearAddress($userAddress);

        // Render the view to display the drivers in cards
        include 'driverView.php';
    }

    public function viewDriverDetails($driverId) {
        // Create an instance of the model
        $addDriver = new addDriver();

        // Fetch the details of the selected driver
        $driverDetails = $addDriver->getDriverDetails($driverId);

        // Render the view to display the driver details and buttons
        include 'driverDetailsView.php';
    }

    public function addDriver($driverId, $userId) {
        // Create an instance of the model
        $driverModel = new addDriver();

        // Update the driver's assigned user ID
        $driverModel->updateDriverAssignment($driverId, $userId);

        // Redirect or display a success message
        header('Request Sent');
        exit();
    }
}
