<?php

require('fpdf.php');

// Get the form data
$office = $_POST['office'];
$taluka = $_POST['taluka'];
$District = $_POST['District'];
$date = $_POST['date'];
$Name = $_POST['Name'];
$Adhar = $_POST['Adhar'];
$village = $_POST['village'];
$Place = $_POST['Place'];

class PDF extends FPDF
{
    function Header()
    {
        $this->Rect(5.0, 5.0, 200.0, 287.0, 'D');
    }

    function Footer()
    {
        // Do nothing
    }
}


// Create the PDF document
ob_start();
$pdf = new PDF();
$pdf->AddPage();
$pdf->SetFont('Arial','',12);
$pdf->Ln();
$pdf->SetFont('Arial','',16);
$pdf->Cell(40,10,"GramPanchayat Office : ".$office.' Tal : '.$taluka.' Dis : '.$District);
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->SetFont('Arial','B',25); 
$pdf->Cell(40,10,"                       Residence Cerificate");
$pdf->Ln();  
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->SetFont('Arial','',14);
$pdf->Cell(40,10,"Dispatch no : ".'                                                                              '.' Date : '.$date);
$pdf->Ln();  
$pdf->Ln();  

$pdf->Cell(40,10,"Sarpanch/Gramsevak/Village Development Officer,GramPanchayat : ".$office);
$pdf->Ln();  

$pdf->Cell(40,10,'is issuing the Cerificate to Mr./Mrs. '.$Name);
$pdf->Ln(); 
$pdf->Cell(40,10,'Adhar Card Number :  '.$Adhar);
$pdf->Ln(); 
$pdf->Cell(40,10,'Of Grampanchayat: '.$office.'  Village : '.$village.' Tal:'.$taluka);
$pdf->Ln();
$pdf->Cell(40,10,'Dis:'.$District.',Maharashtra');
$pdf->Ln();
$pdf->Cell(40,10,'is the Permanent/Temporary resident. ');
$pdf->Ln();
$pdf->Cell(40,10,'Ceritificate is issued on request of the applicant,after his resident verification & local');
$pdf->Ln();
$pdf->Cell(40,10,' level enquiry.');
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();

$pdf->Cell(40,10,'Place : '.$Place.'                                                                    Signaure with Stamp');
$pdf->Ln();
$pdf->Cell(40,10,'                                                            Sarpanch/Gramsevak/Village Development Officer');





// Output the PDF document
$pdf->Output("Resident Certificate.pdf","D");






?>
