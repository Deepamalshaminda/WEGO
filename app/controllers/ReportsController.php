<?php

require_once APPROOT . '/libraries/TCPDF/tcpdf.php';

class ReportsController {
    public function monthly_income_report() {
        ob_clean();

       // Load the ReportModel
require_once APPROOT . '/models/ReportModel.php';
$ReportModel = new ReportModel();

        // Get monthly earnings data
        $monthlyEarnings = $ReportModel->getMonthlyEarnings();

        // Get total monthly income
        $totalMonthlyIncome = $ReportModel->getTotalMonthlyIncome();

        // Load the PDF library
        $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

        // Set document information
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor('WeGo');
        $pdf->SetTitle('Monthly Income Report');
        $pdf->SetSubject('Monthly Income Report');

        // Add a page
        $pdf->AddPage();

        // Set some content
        $pdf->SetFont('helvetica', '', 12);
        $pdf->Write(0, 'Monthly Income Report' . "\n\n");

        // Set table headers
        $headers = array('Date', 'Customer ID', 'Name', 'Vehicle ID', 'Service Type', 'Amount');

        // Set table data
        $data = array();
        foreach ($monthlyEarnings as $earning) {
            $data[] = array(
                $earning->date,
                $earning->customer_id,
                $earning->name,
                $earning->vehicle_id,
                $earning->service_type,
                $earning->amount
            );
        }

        // Set table column widths
        $widths = array(30, 30, 40, 30, 40, 30);

        // Print table
        $pdf->Ln();
        $pdf->SetFont('helvetica', 'B', 12);
        $pdf->SetFillColor(255, 255, 255);
        $pdf->SetTextColor(0);
        for ($i = 0; $i < count($headers); $i++) {
            $pdf->Cell($widths[$i], 7, $headers[$i], 1, 0, 'C', true);
        }
        $pdf->Ln();
        $pdf->SetFont('helvetica', '', 12);
        foreach ($data as $row) {
            for ($i = 0; $i < count($row); $i++) {
                $pdf->Cell($widths[$i], 6, $row[$i], 1, 0, 'C');
            }
            $pdf->Ln();
        }

        // Print total monthly income
        $pdf->Ln();
        $pdf->SetFont('helvetica', 'B', 12);
        $pdf->Cell(0, 10, 'Total Monthly Income: ' . $totalMonthlyIncome, 0, 0, 'R');

        // Output the PDF
        $pdf->Output('monthly_income_report.pdf', 'I');
    }
}
