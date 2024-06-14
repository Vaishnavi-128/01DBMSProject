<?php
// Database connection parameters
$host = "localhost";
$username = "root";
$password = ""; // Assuming no password is set
$database = "meeting";

// Create connection
$mysqli = new mysqli($host, $username, $password, $database);

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Check if the delete_id is set in the POST request
if(isset($_POST['delete_id'])) {
    // Sanitize the input to prevent SQL injection
    $delete_id = $mysqli->real_escape_string($_POST['delete_id']);
    
    // Prepare and execute the SQL statement to delete the meeting with the given ID
    $sql = "DELETE FROM schedule WHERE id = '$delete_id'";
    if ($mysqli->query($sql) === TRUE) {
        // Close database connection
        $mysqli->close();
        // Redirect back to the previous page with JavaScript
        echo "<script>alert('Meeting with ID $delete_id deleted successfully.'); window.history.back();</script>";
        exit(); // Stop further execution of the script
    } else {
        echo "Error deleting meeting: " . $mysqli->error;
    }
}

// Close database connection
$mysqli->close();
?>
