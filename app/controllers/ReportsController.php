<?php
require_once APPROOT . '/libraries/TCPDF/tcpdf.php';

class ReportsController {
    public function monthly_income_report() {
        ob_clean();
        $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
    
        // Set document information
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor('Your Name');
        $pdf->SetTitle('Monthly Income Report');
        $pdf->SetSubject('Monthly Income Report');
    
        // Add a page
        $pdf->AddPage();
    
        // Set some content
        $pdf->SetFont('helvetica', '', 12);
        $pdf->Write(0, 'Monthly Earning Report');
    
        // Table headers
        $pdf->Ln(10);
        $pdf->SetFont('helvetica', 'B', 10);
        $pdf->Cell(20, 10, 'Date', 1, 0, 'C');
        $pdf->Cell(30, 10, 'Customer ID', 1, 0, 'C');
        $pdf->Cell(40, 10, 'Customer Name', 1, 0, 'C');
        $pdf->Cell(30, 10, 'Vehicle ID', 1, 0, 'C');
        $pdf->Cell(30, 10, 'Service Type', 1, 0, 'C');
        $pdf->Cell(20, 10, 'Amount', 1, 0, 'C');
        $pdf->Cell(20, 10, 'Status', 1, 0, 'C');
        $pdf->Ln();
    
        // Table data (dummy data)
        $pdf->SetFont('helvetica', '', 8);
        $total_income = 0;
        for($i=1; $i<=10; $i++){
            $pdf->Cell(20, 10, '2022-01-01', 1, 0, 'C');
            $pdf->Cell(30, 10, 'USER_ID-'.$i, 1, 0, 'C');
            $pdf->Cell(40, 10, 'Mathew', 1, 0, 'C');
            $pdf->Cell(30, 10, 'VEHICLE_ID-'.$i, 1, 0, 'C');
            $pdf->Cell(30, 10, 'School Service', 1, 0, 'C');
            $pdf->Cell(20, 10, 'RS.8000/=', 1, 0, 'C');
            $pdf->Cell(20, 10, 'Paid', 1, 0, 'C');
            $pdf->Ln();
            $total_income += 50;
        }
    
        // Total monthly income
        $pdf->SetFont('helvetica', 'B', 10);
        $pdf->Ln(10);
        $pdf->Cell(180, 10, 'Total Monthly Income: $' . number_format($total_income, 2), 1, 0, 'R');
    
        // Output the PDF
        $pdf->Output('monthly_income_report.pdf', 'I');
    }
}    