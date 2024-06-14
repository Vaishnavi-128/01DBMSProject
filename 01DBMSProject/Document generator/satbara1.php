<?php
require('fpdf.php');

// Get form data
$survey_number = $_POST['survey_number'];
$land_type = $_POST['land_type'];
$owner_name = $_POST['owner_name'];
$owner_address = $_POST['owner_address'];

// Create PDF
$pdf = new FPDF();
$pdf->AddPage();

// Add content
$pdf->SetFont('Arial','B',16);
$pdf->Cell(0,10,'7/12 Utara',0,1,'C');
$pdf->Ln(10);

$pdf->SetFont('Arial','B',12);
$pdf->Cell(50,10,'Survey Number:');
$pdf->SetFont('Arial','',12);
$pdf->Cell(0,10,$survey_number);
$pdf->Ln();

$pdf->SetFont('Arial','B',12);
$pdf->Cell(50,10,'Land Type:');
$pdf->SetFont('Arial','',12);
$pdf->Cell(0,10,$land_type);
$pdf->Ln();

$pdf->SetFont('Arial','B',12);
$pdf->Cell(50,10,'Owner Name:');
$pdf->SetFont('Arial','',12);
$pdf->Cell(0,10,$owner_name);
$pdf->Ln();

$pdf->SetFont('Arial','B',12);
$pdf->Cell(50,10,'Owner Address:');
$pdf->SetFont('Arial','',12);
$pdf->MultiCell(0,10,$owner_address);
$pdf->Ln();

// Output PDF
$pdf->Output();
?>
