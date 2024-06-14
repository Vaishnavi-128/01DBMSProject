<?php

require('fpdf.php');

// Establish database connection
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "documents";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from the database
$id = $_GET['id']; // Assuming you're passing the ID via URL parameter
$sql = "SELECT * FROM deathcertificate WHERE id=$id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();

    // Data retrieved from the database
    $name = $row['nameOfDeceased'];
    $tal = $row['taluka'];
    $dis = $row['district'];
    $area = $row['Area'];
    $date = $row['dateOfDeath'];
    $gender = $row['gender'];
    $placeb = $row['placeOfDeath'];
    $mother = $row['nameOfMother'];
    $father = $row['nameOfFather'];
    $address1 = $row['addressOfDeceased'];
    $address2 = $row['permanentAddress'];
    $date2 = $row['DateOfreg'];
    $r = $row['DateOfIssue'];
    $r2 = $row['causeOfDeath'];

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
    $pdf->SetFont('Arial', 'B', 16);

    // Add page border
    $pdf->Rect(5, 5, 200, 287, 'D');

    $pdf->SetFont('Arial','B',16);
    $pdf->Image("logo.png", 10, 10, 40, 50);
    $pdf->Cell(40,10," ");
    $pdf->Ln();
    $pdf->Cell(40,10,"                          GOVERMENT OF MAHARASHTRA");
    $pdf->Ln();
    $pdf->Cell(40,10,"                                        HEALTH DEPARTMENT");
    $pdf->Ln();
    $pdf->Cell(40,10,"                                          GRAM PANCHYAT");
    $pdf->Image("logo.png", 150, 10, 40, 50);
    $pdf->line(200,70,10,70);
    $pdf->Ln();
    $pdf->Ln(25);
    $pdf->Cell(40, 10, "                                        DEATH CERTIFICATE");
    $pdf->Ln(15);
    $pdf->SetFont('Arial', '', 14);
    $pdf->Cell(40, 10, "Issued under section 12/17 of registration of Births & Deaths Act.,1969 and Rule 8/13");
    $pdf->Ln();
    $pdf->Cell(40, 10, "of the Maharashtra Registration of Births and Deaths Rules,2000");
    $pdf->Ln();
    $pdf->Cell(40, 10, "Register for (Local area/body) " . $area . " of Tal : " . $tal . " Dis : " . $dis);
    $pdf->Ln();
    $pdf->Ln();
    $pdf->Cell(40, 10, "Name of Deceased: " . $name);
    $pdf->Cell(40, 10, "                                               Gender : " . $gender);
    $pdf->Ln(15);
    $pdf->Cell(40, 10, "Date of Death : " . $date);
    $pdf->Cell(40, 10, "                                               Place of the Death : " . $placeb);
    $pdf->Ln(15);
    $pdf->Cell(40, 10, "Name of Mother : " . $mother);
    $pdf->Cell(40, 10, "                                               Name of Father : " . $father);
    $pdf->Ln(15);
    $pdf->Cell(40, 10, "Address Of Deceased at the ");
    $pdf->Ln();
    $pdf->Cell(40, 10, "time of Death: " . $address1);
    $pdf->Cell(40, 10, "                                               Parmanent address : " . $address2);
    $pdf->Ln(15);
    $pdf->Cell(40, 10, "Date of Registration : " . $r);
    $pdf->Cell(40, 10, "                                               Date of Issue : " . $date2);
    $pdf->Ln();
    $pdf->Cell(40, 10, "Cause :" . $r2);
    $pdf->Ln(35);
    //$pdf->Image("Logo2.png", 140, 217, 27, 27);
    $pdf->Cell(40, 10, "Place : $area                                                                 Sign/Stamp");
    $pdf->Ln();
    $pdf->Cell(40, 10, "                                                                         GramSevak / Village Development Officer");
    $pdf->Ln();
    $pdf->Cell(40, 10, "Date : $r                                                              GramPanchayat");

    $pdf->Output("Death_Certificate.pdf", "D");
} else {
    echo "No data found.";
}

$conn->close();
?>
