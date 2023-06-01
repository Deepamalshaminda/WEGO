<?php
class Complaints extends Controller
{

  public function __construct()
  {
    $this->rideModel = $this->model('Ride');
    $this->reservationModel = $this->model('Reservation');
  }

  public function index()
  {
    //view
    $user_id = $_SESSION['user_id'];
    $rides = $this->rideModel->getAllDataByID($user_id);
    $reservations = $this->reservationModel->getAllDataByID($user_id);
    $data = [
      'rides' => $rides,
      'reservations' => $reservations
    ];
    $this->view('users/parent/complaints', $data);
  }

  public function setComplaint()
  {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $ride_id = $_POST['ride'];
      $reservation_id = $_POST['reservations'];
      $complaint = $_POST['complaint'];
      $user_id = $_SESSION['user_id'];
      $complaint_type = 'Complaint';
      $complaint_description = $complaint;
      $this->complaintModel = $this->model('Complaint');
      if ($this->complaintModel->setComplaint($complaint_type, $complaint_description, $user_id, $ride_id, $reservation_id)) {
        header('location: ' . URLROOT . '/Complaints/index');
      } else {
        die('Something went wrong, please try again!');
      }
    }
  }
}
