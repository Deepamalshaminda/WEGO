<?php
class Attendencechildren extends Controller
{
  public $Attendencechild;
  public function __construct()
  {
    $this->Attendencechild = $this->model('Attendencechild');
  }

  public function attendencechild()
  {
    //view
    $children = $this->Attendencechild->getChildren();

    $data = [
      'children' => $children
    ];

    foreach ($children as $child) {
      $ch_id = $child->ch_id;
      $marked = $this->Attendencechild->getAttendance($ch_id);
      $child->marked = $marked;
    }

    $this->view('users/parent/attendencechildren', $data);
  }

  public function markAttendance()
  {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
      $ch_id = $_POST['ch_id'];
      $results = $this->Attendencechild->markAttendance($ch_id);
      if ($results) {
        redirect('attendencechildren/attendencechild');
      } else {
        die('Something went wrong');
      }
    }
  }
}
