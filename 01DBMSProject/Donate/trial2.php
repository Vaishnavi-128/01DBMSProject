<?php
// Include the FPDF library
require('fpdf.php');

// Get form data
$amount = $_POST['amount'];
$name = $_POST['name'];
$email = $_POST['email'];


// Validate and process the uploaded screenshot
if ($_FILES['image']['error'] === UPLOAD_ERR_OK) {
  $screenshot = $_FILES['image']['tmp_name'];

  // Convert image to JPEG format
  $convertedScreenshot = 'converted_screenshot.jpg';

  $imageInfo = getimagesize($screenshot);
  $imageType = $imageInfo[2];

  if ($imageType === IMAGETYPE_JPEG) {
    // If the image is already in JPEG format, use it as is
    copy($screenshot, $convertedScreenshot);
  } elseif ($imageType === IMAGETYPE_PNG) {
    // If the image is in PNG format, convert it to JPEG
    $png = imagecreatefrompng($screenshot);
    imagejpeg($png, $convertedScreenshot, 100);
    imagedestroy($png);
  } else {
    die("Unsupported image format. Please upload a JPEG or PNG image.");
  }
} else {
  die("Error uploading payment screenshot.");
}
class PDF extends FPDF
            {
                function Header() {
                    $this->SetLineWidth(1); 
                    $this->Rect(10,10, $this->GetPageWidth() - 20, $this->GetPageHeight() - 20);
                }
                
            }

// Generate receipt
$pdf = new PDF();
$pdf->AddPage();

// Add receipt content
$pdf->SetFont('Arial', 'B', 20);
$pdf->Cell(0, 20, "PAYMENT RECEIPT", 0, 1, 'C');
$pdf->SetLineWidth(1); 
$pdf->Line(20, 30, $pdf->GetPageWidth() - 20, 30);
$pdf->Ln(9);

$pdf->SetFont('Arial', '', 16);
$pdf->Cell(90, 20, '         Doner Name: ' . $name);
$pdf->Ln(8);

$pdf->Cell(90, 20, '         Doner Email : ' . $email);
$pdf->Ln(8);

$pdf->Cell(90, 20, '         Doner Amount : ' . $amount.' Rs');
$pdf->Ln(8);


$pdf->Cell(90, 20, '         Payment Details :');
$pdf->Ln(8);

$pdf->Image($convertedScreenshot, 60, 90, 80, 0);
$pdf->Ln(162);
$pdf->Cell(1, 0, '                                                                               Sign And Stamp');
$pdf->Ln();
$pdf->Cell(90, 20, '                                                                    GramSevak/GramPanchayat');
$pdf->Ln();
$pdf->Cell(1, 0, '                                                                                GramPanchayat');

$pdf->Ln(8);
// Embed the converted payment screenshot in the PDF


// Output the PDF
$pdf->Output();

// Clean up the converted screenshot file
unlink($convertedScreenshot);
?>
