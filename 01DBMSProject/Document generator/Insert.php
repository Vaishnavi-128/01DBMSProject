<!DOCTYPE html>
<html>
<head>
	<title>Connect To DB</title>
</head>
<body>
	<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "documents";
// checking connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql code to create table
$sql = "INSERT INTO citizens (name, ration) VALUES ('Amar Jagdale', 456789);";

if ($conn->query($sql) === TRUE) {
    echo "Insert successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
</body>
</html>