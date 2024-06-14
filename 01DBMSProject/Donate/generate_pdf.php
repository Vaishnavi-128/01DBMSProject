<?php
require('fpdf.php');

// Create a new PDF instance
$pdf = new FPDF();

// Add a page
$pdf->AddPage();

// Set font and size for the table header
$pdf->SetFont('Arial', 'B', 12);

// Table header
$pdf->Cell(40, 10, 'Header 1', 1);
$pdf->Cell(40, 10, 'Header 2', 1);
$pdf->Cell(40, 10, 'Header 3', 1);
$pdf->Ln();

// Set font and size for the table content
$pdf->SetFont('Arial', '', 12);

// Table content
$pdf->Cell(40, 10, 'Row 1, Column 1', 1);
$pdf->Cell(40, 10, 'Row 1, Column 2', 1);
$pdf->Cell(40, 10, 'Row 1, Column 3', 1);
$pdf->Ln();

$pdf->Cell(40, 10, 'Row 2, Column 1', 1);
$pdf->Cell(40, 10, 'Row 2, Column 2', 1);
$pdf->Cell(40, 10, 'Row 2, Column 3', 1);
$pdf->Ln();

// Output the PDF
$pdf->Output();
?>
