<?php
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

// Get values from form
$name = $_POST["name"];
$ration = $_POST["number"];

// Prepare SQL statement
$sql = "SELECT * FROM citizens WHERE name='$name' AND ration='$ration'";
$result = $conn->query($sql);

// Check if citizen is found
if ($result->num_rows > 0) {
  // Generate certificate
  header("Location: EngMara.html");
} else {
  echo "Sorry You are not the resident of VEET , KARMALA";
}

$conn->close();
?>
