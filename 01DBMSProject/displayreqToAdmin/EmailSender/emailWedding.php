<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

// Database connection
$servername = "localhost"; // Change this to your database servername
$username = "root"; // Change this to your database username
$password = "root"; // Change this to your database password
$dbname = "documents"; // Change this to your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch email based on the provided ID
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT email FROM marriagecertificate WHERE id = $id"; // Modify this query according to your table structure
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $email = $row['email'];

        // Manually set the subject and message
        $subject = "Your Birth Certificate is Ready";
        $message = "Dear User,\n\nYour birth certificate is now ready. Please take it from GramPanchayat.\n\nRegards,\nAdmin";

        // Send email
        try {
            $mail = new PHPMailer(true);

            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'veetgrampanchayat@gmail.com';
            $mail->Password = 'iegnyhpqaygmdpij';
            $mail->SMTPSecure = 'ssl';
            $mail->Port = 465;

            $mail->setFrom('veetgrampanchayat@gmail.com');
            $mail->addAddress($email);
            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body = $message;

            $mail->send();

            echo "<script>alert('Sent Successfully');</script>";
        } catch (Exception $e) {
            echo "<script>alert('Message could not be sent. Mailer Error: {$mail->ErrorInfo}');</script>";
        }
    } else {
        echo "<script>alert('No email found for the given ID');</script>";
    }
}

// Close database connection
$conn->close();
?>
