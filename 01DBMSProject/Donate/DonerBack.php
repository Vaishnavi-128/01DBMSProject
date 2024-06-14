<?php
    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve form data
        $imagePath = $_GET['image'];
        $name = $_POST["name"];
        $email = $_POST["email"];
        $paymentAmount = $_POST["amount"];
        $ss = $_POST["ss"];

        // Process and store form data in the database
        $servername = "localhost";
        $username = "root";
        $password = "root";
        $dbname = "scanner";

        // Create a database connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check the connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql = "INSERT INTO payment_data (name, email, payment_amount)
                VALUES ('$name', '$email', $paymentAmount)";

        if ($conn->query($sql) === false) {
            echo "Error inserting data: " . $conn->error;
        } else {
            require('fpdf.php');
            class PDF extends FPDF
            {
                function Header() {
                    $this->Rect(10, 10, $this->GetPageWidth() - 20, $this->GetPageHeight() - 20);
                    if (isset($_FILES['ss']) && $_FILES['ss']['error'] === UPLOAD_ERR_OK) {
                        $imagePath = $_FILES['ss']['tmp_name'];
                        
                    }
                }
                
            }

            
            ob_start();
            // Create a new PDF instance
            $pdf = new PDF();
    
            // Add a page to the PDF
            $pdf->AddPage();
    
            // Set the font and font size
            $pdf->SetFont('Arial', 'B', 16);
    
            // Add content to the PDF
            $pdf->SetLineWidth(1); 
            $pdf->Line(20, 30, $pdf->GetPageWidth() - 20, 30);
            $pdf->Ln();
            $pdf->Image($imagePath, 0, 0, $pdf->GetPageWidth(), $pdf->GetPageHeight());
            $pdf->Cell(0, 20, "Payment Receipt", 0, 1, 'C');
            $pdf->Image($ss, 10, 10, 50, 0);
            $pdf->Cell(0, 10, "Doner Name : $name", 0, 1);
            $pdf->Cell(0, 10, "Email: $email", 0, 1);
            $pdf->Cell(0, 10, "Payment Amount: $paymentAmount", 0, 1);
    
            // Output the PDF to the browser
            $pdf->Output();
        }
        $conn->close();

    }
