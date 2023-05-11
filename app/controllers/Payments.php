<?php
class Payments extends Controller
{


  public function __construct()
  {
    $this->Attendencechild = $this->model('Attendencechild');
    $this->Vehicle = $this->model('Vehicle');
    $this->User = $this->model('User');
    $this->Payment = $this->model('Payment');
    // $this->userModel = $this->model('User');
  }

  public function index()
  {
    //view
    $children = $this->Attendencechild->getChildren();

    $data = [
      'children' => $children
    ];


    $this->view('users/parent/paymentchildren', $data);
  }

  public function paymentselector()
  {
    $url = $_SERVER['REQUEST_URI'];
    $url_components = parse_url($url);
    parse_str($url_components['query'], $params);
    $ch_id = $params['ch_id'];

    $gatewayDetails = $this->Payment->getGatewayDetails();
    $merchant_id = $gatewayDetails->merchant_id;
    $merchant_secret = $gatewayDetails->merchant_secret;
    $order_id = uniqid();
    $amount = 100;
    $currency = "LKR";

    $hash = strtoupper(
      md5(
        $merchant_id .
          $order_id .
          number_format($amount, 2, '.', '') .
          $currency .
          strtoupper(md5($merchant_secret))
      )
    );
    $vehicles = $this->Vehicle->getAllVehicles();
    $data = [
      'ch_id' => $ch_id,
      'vehicles' => $vehicles
    ];
    $this->view("users/parent/paymentselector", $data);
  }


  public function paymentMethod()
  {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
      $ch_id = $_POST['ch_id'];
      $date = $_POST['datepicker'];
      $vehicle = $_POST['cars'];

      $attendance = $this->Attendencechild->getMonthlyAttendance($date, $ch_id);
      $userDetails = $this->User->getUserById($_SESSION['user_id']);
      $payemnt_id = $this->Payment->getLatestPaymentID() + 1;
      $vehicle_details = $this->Vehicle->getVehicleByNumber($vehicle)[0];

      $charge_for_a_day = number_format($vehicle_details->charge_for_a_day);
      $reason = $date . " " . "Payment";
      $amount = $charge_for_a_day * $attendance;
      $currency = "LKR";

      $gatewayDetails = $this->Payment->getGatewayDetails();
      $merchant_id = $gatewayDetails->merchant_id;
      $merchant_secret = $gatewayDetails->merchant_secret;
      $order_id = $payemnt_id;

      $hash = strtoupper(
        md5(
          $merchant_id .
            $order_id .
            number_format($amount, 2, '.', '') .
            $currency .
            strtoupper(md5($merchant_secret))
        )
      );

      $data = [
        'ch_id' => $ch_id,
        'vehicle' => $vehicle,
        've_id' => $vehicle_details->ve_id,
        'attendance' => $attendance,
        'email' => $userDetails->email,
        'first_name' => $userDetails->name,
        'last_name' => $userDetails->name,
        'phone' => $userDetails->contactNumber,
        'city' => $userDetails->nearestTown,
        'address' => $userDetails->address,
        'payment_id' => $payemnt_id,
        'amount' => $amount,
        'currency' => $currency,
        'merchant_id' => $merchant_id,
        'order_id' => $order_id,
        'hash' => $hash,
        'reason' => $reason
      ];

      $_SESSION['payment_data'] = $data;

    } else {
      $data = [
        'ch_id' => '',
        'vehicle' => '',
        'attendance' => '',
        'email' => '',
        'payment_id' => '',
        'reason' => ''
      ];
    }
    $this->view("users/parent/paymentMethod", $data);
  }

  public function paymentSuccess()
  {
    $data = $_SESSION['payment_data'];
    $today_date_time = date('Y-m-d H:i:s');
    $response = $this->Payment->addPayment($data["payment_id"], $data["amount"], $today_date_time, $data["ve_id"], $_SESSION['user_id']);
    echo $response;
  }
}
