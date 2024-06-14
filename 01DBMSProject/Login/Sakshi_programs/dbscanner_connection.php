<?php
// Create a connection to the MySQL database
$mysqli = new mysqli("localhost", "root", "root", "scanner");

// Check for errors in the connection
if ($mysqli->connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli->connect_error;
  exit();
}

// Get the data submitted by the form
$name = $_POST['name'];
$email = $_POST['email'];

// Insert the data into the database
$sql = "INSERT INTO scannerdemo(name, email) VALUES ('$name', '$email')";
if ($mysqli->query($sql) === TRUE) {
  header("Location: p2.html");
}
 else {
  echo "Error storing data: " . $mysqli->error;
}

// Close the database connection
$mysqli->close();
?>
