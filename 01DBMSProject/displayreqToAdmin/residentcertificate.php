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

// Fetch data from the database based on some condition (e.g., ID)
if(isset($_GET['id'])) {
    $id = $_GET['id'];

    // Fetch details of resident certificate with the given ID
    $sql = "SELECT * FROM residentcertificate WHERE id=$id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Extract data from the fetched row
        $office = $row['office'];
        $taluka = $row['taluka'];
        $District = $row['district'];
        $date = $row['date'];
        $Name = $row['name'];
        $Adhar = $row['AdharCard'];
        $village = $row['village'];
        $Place = $row['place'];

        // Create PDF document
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
$pdf->Cell(40,10,'Of Grampanchayat: '.$office.'  Village : '.$village.' Tal:'.$taluka.'Dis:'.$District.',Maharashtra');
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

    } else {
        echo "No details found.";
    }
} else {
    echo "Invalid request.";
}

$conn->close();

?>
