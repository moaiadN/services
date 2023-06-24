<?php
require '../fpdf/fpdf.php';
require '../processes/connection.php';
class PDF extends FPDF
{
    // Page header
    function Header()
    {
        // $this->Image('logo.png', 10, 6, 30);
        $this->SetFont('Arial', 'B', 20);
        $this->Cell(0, 10, 'Uni-Services', 'B', 0, 'C');
        $this->Ln(15);

        $this->SetFillColor(3, 161, 252);
        $this->SetTextColor(255, 255, 255);
        $this->SetDrawColor(3, 161, 255);

        $this->SetFont('Arial', 'B', 13);
        $this->Cell(10, 10, 'No', '1', 0, 'C', true);
        $this->Cell(36, 10, 'First Name', '1', 0, 'C', true);
        $this->Cell(36, 10, 'Last Name', '1', 0, 'C', true);
        $this->Cell(36, 10, 'Email', '1', 0, 'C', true);
        $this->Cell(36, 10, 'Phone Number', '1', 0, 'C', true);
        $this->Cell(36, 10, 'User Type', '1', 0, 'C', true);
        $this->Ln();
    }
    // Page footer
    function Footer()
    {
        $this->SetY(-15);
        $this->SetFont('Arial', 'I', 8);
        $this->Cell(0, 10, 'Page ' . $this->PageNo(), 0, 0, 'C');
    }
}

// Instantiation of inherited class
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times', '', 12);

$rows = mysqli_query($conn, "SELECT `fname`, `lname`, `email`, `phone_number`, `user_type` FROM `register` ORDER BY fname");
$sr = 1;
$pdf->SetFillColor(215, 244, 247);
$pdf->SetDrawColor(3, 161, 255);
$fill = false;
foreach ($rows as $row) {

    $row['user_type'] == 'pending' ? $pdf->SetTextColor(255, 0, 0) : $pdf->SetTextColor(0, 0, 0);

    $pdf->Cell(10, 10, $sr++, '1', 0, 'C', $fill);
    $pdf->Cell(36, 10, $row['fname'], '1', 0, 'C', $fill);
    $pdf->Cell(36, 10, $row['lname'], '1', 0, 'C', $fill);
    $pdf->Cell(36, 10, $row['email'], '1', 0, 'C', $fill);
    $pdf->Cell(36, 10, $row['phone_number'], '1', 0, 'C', $fill);
    $pdf->Cell(36, 10, $row['user_type'], '1', 0, 'C', $fill);
    $pdf->Ln();
    $fill = !$fill;
}

$pdf->Output();