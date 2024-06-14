<?php

require('fpdf.php');

$name = $_POST['name'];
$tal = $_POST['tal'];
$dis = $_POST['dis'];
$area = $_POST['area'];
$date = $_POST['date'];
$gender = $_POST['gender'];
$placeb = $_POST['placeb'];
$mother = $_POST['mother'];
$father = $_POST['father'];
$address1 = $_POST['address1'];
$address2 = $_POST['address2'];
$date2 = $_POST['date2'];
$r = $_POST['r'];
$r2 = $_POST['cause'];
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
$pdf->SetFont('Arial','B',16);

$pdf->Image("C:\Users\DELL\Downloads\Photo.png", 20, 10, 50, 50);
$pdf->Cell(40,10," ");
$pdf->Ln();
$pdf->Cell(40,10,"                                               GOVERMENT OF MAHARASHTRA");
$pdf->Ln();
$pdf->Cell(40,10,"                                                          HEALTH DEPARTMENT");
$pdf->Ln();
$pdf->Cell(40,10,"                                                               GRAM PANCHYAT");
$pdf->line(200,70,10,70);
$pdf->Ln();
$pdf->Ln(25);
$pdf->Cell(40,10,"                                        DEATH CERTIFICATE");
$pdf->Ln(15);
$pdf->SetFont('Arial','',14);
$pdf->Cell(40,10,"Issued under section 12/17 of registration of Births & Deaths Act.,1969 and Rule 8/13");
$pdf->Ln();
$pdf->Cell(40,10,"of the Maharashtra Registration of Births and Deaths Rules,2000");
$pdf->Ln();
$pdf->Cell(40,10,"Register for (Local area/body) ".$area." of Tal : ".$tal." Dis : ".$dis);
$pdf->Ln();
$pdf->Ln();
$pdf->Cell(40,10,"Name of Deceased: ".$name);
$pdf->Cell(40,10,"                                               Gender : ".$gender);
$pdf->Ln(15);
$pdf->Cell(40,10,"Date of Death : ".$date);
$pdf->Cell(40,10,"                                               Place of the Death : ".$placeb);
$pdf->Ln(15);
$pdf->Cell(40,10,"Name of Mother : ".$mother);
$pdf->Cell(40,10,"                                               Name of Father : ".$father);
$pdf->Ln(15);
$pdf->Cell(40,10,"Address Of Deceased at the ");
$pdf->Ln();
$pdf->Cell(40,10,"time of Death: ".$address1);
$pdf->Cell(40,10,"                                               Parmanent address : ".$address2);
$pdf->Ln(15);
$pdf->Cell(40,10,"Date of Registration : ".$r);
$pdf->Cell(40,10,"                                               Date of Issue : ".$date2);
$pdf->Ln();
$pdf->Cell(40,10,"Cause :".$r2);
$pdf->Ln(35);
//$pdf->Image("Logo2.png", 140, 217, 27, 27);
$pdf->Cell(40,10,"Place : $area                                                                 Sign/Stamp");
$pdf->Ln(); 
$pdf->Cell(40,10,"                                                                         GramSevak / Village Development Officer");
$pdf->Ln();
$pdf->Cell(40,10,"Date : $r                                                              GramPanchayat");

$pdf->Output("Death Certificate.pdf","D");
?>
