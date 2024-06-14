<?php

require('fpdf.php');

$office = $_POST['office'];
$taluka = $_POST['taluka'];
$District = $_POST['District'];
$date = $_POST['date'];
$Name = $_POST['Name'];
$Name2 = $_POST['Name2'];
$Adhar1 = $_POST['Adhar1'];
$Adhar2 = $_POST['Adhar2'];
$Place = $_POST['Place'];

//$photo2 = $_POST['photo2'];
// Get the form data

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
$pdf->rect(10,10,50,50);
$pdf->SetFont('Arial','',12);
$pdf->Cell(40,50,"     Husband Photo");
$pdf->rect(150,10,50,50);
$pdf->Cell(40,50,"                                                                                            Wife Photo");
$pdf->rect(10,10,50,50);
$pdf->SetFont('Arial','',14);
$pdf->Cell(40,10,'');
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Cell(40,10,"                                  Marriage Registration Office : ".$office);
$pdf->Ln();
$pdf->Cell(40,10,'                                                 Tal : '.$taluka.'      Dis : '.$District);
$pdf->Ln();
$pdf->line(200,100,10,100);
$pdf->Ln();
$pdf->Ln();
$pdf->SetFont('Arial','B',20);
$pdf->Cell(40,10,"      CERTIFICATE OF REGISTRATION OF MARRIAGE");
$pdf->Ln();
$pdf->Ln();
$pdf->SetFont('Arial','',14);
$pdf->Cell(40,10,"Certified that the marriage between Husband Name : ".$Name);
$pdf->Ln();
$pdf->Cell(40,10,"Adhar Card Number : ".$Adhar1."   Residing at : ".$Place."   Taluka : ".$taluka);
$pdf->Ln();
$pdf->Cell(40,10,"District : ".$District."   and  Wife Name : ".$Name2);
$pdf->Ln();
$pdf->Cell(40,10,"Adhar Card Number : ".$Adhar2."    Residing at : ".$Place."   Taluka : ".$taluka);
$pdf->Ln();
$pdf->Cell(40,10,"District : ".$District." Solemnized on : ".$date." at ".$Place." (Place)");
$pdf->Ln();
$pdf->Cell(40,10,"is Register by me no.  /   /23  at the Serial No.      of volume         of register of Maaiages");
$pdf->Ln();
$pdf->Cell(40,10,"mainted under the Maharashtra regulation of merriage bureaus and Registration of ");
$pdf->Ln();
$pdf->Cell(40,10,"Marriage Act 1998.");
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Cell(40,10,"Place : ".$Place."                                                                 Register of Marriage");
$pdf->Ln();
$pdf->Cell(40,10,"Date : ".$date."                                      GramSevak / Village Development Officer");
$pdf->Ln();
$pdf->Cell(40,10,"                                                                                        GramPanchayat");





// Output the PDF document
$pdf->Output("Weeding Certificate.pdf","D");






?>
