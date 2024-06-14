<?php

require('fpdf.php');

// Database connection
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "documents";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Fetch data from the database
$id = $_GET['id']; // Assuming you're passing the ID through URL parameter
$sql = "SELECT * FROM marriagecertificate WHERE id=$id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();

    // Get the form data
    $office = $row['office'];
    $taluka = $row['taluka'];
    $District = $row['district'];
    $date = $row['marriageDate'];
    $Name = $row['husbandName'];
    $Name2 = $row['wifeName'];
    $Adhar1 = $row['adhar_card_husband'];
    $Adhar2 = $row['adhar_card_wife'];
    $Place = $row['place'];

    // Create the PDF document
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

    // Output the PDF document
    ob_start();
$pdf = new PDF();
$pdf->AddPage();
$pdf->rect(10,10,50,50);
$pdf->SetFont('Arial','',12);
$pdf->Image("logo.png", 80, 10, 40, 50);
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


} else {
    echo "No data found.";
}

$conn->close();
?>
