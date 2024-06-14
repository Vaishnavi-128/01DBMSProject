<?php
// Database connection parameters
$host = "localhost";
$username = "root";
$password = "root"; // Assuming no password is set
$database = "meeting";

// Create connection
$mysqli = new mysqli($host, $username, $password, $database);

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Check if form data is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $id = $_POST['id'];
    $title = $_POST['title'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $location = $_POST['location'];
    $agenda = $_POST['agenda'];
    $status = $_POST['status'];

    // Update query
    $sql = "UPDATE schedule SET title='$title', date1='$date', time1='$time', location='$location', agenda='$agenda', Status='$status' WHERE id='$id'";

    // Execute update query
    if ($mysqli->query($sql) === TRUE) {
        echo "<script>alert('Data updated successfully!'); window.location.href = 'disp_data_meetings.php';</script>";
    } else {
        echo "Error updating record: " . $mysqli->error;
    }
}

// Close database connection
$mysqli->close();
?>
