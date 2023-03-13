<?php 
require_once('/TCPDF-main/tcpdf.php');
require_once('/models/PdfGenerate.php');



class PdfController {

  private $db;

  public function __construct($db) {
    $this->db = $db;
  }

  public function index() {
    // Create new TCPDF object
    $pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8', false);


    // Set document information
    $pdf->SetCreator('System Admin');
    $pdf->SetAuthor('Adam Fernando');
    $pdf->SetTitle('Monthly Earnings');
    $pdf->SetSubject('Earning Information');

    // Add a page
    $pdf->AddPage();

    // Set font
    $pdf->SetFont('helvetica', '', 12);

    // Get data from model
    $model = new PdfGenerate($this->db);
    $data = $model->getData();

    // Add table with data
    $html = '<table border="1">';
    foreach ($data as $row) {
      $html .= '<tr>';
      foreach ($row as $cell) {
        $html .= '<td>' . $cell . '</td>';
      }
      $html .= '</tr>';
    }
    $html .= '</table>';

    $pdf->writeHTML($html, true, false, true, false, '');


    ob_clean();
    ob_flush();
    // Output PDF to browser
    $pdf->Output('report.pdf', 'I');

    ob_end_flush();
    ob_end_clean();
  }

}
