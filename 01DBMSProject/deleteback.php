<?php
// Retrieve form data
$username = $_POST['name'];
$password = $_POST['pass'];
$admin_code = $_POST['adminpass'];

// Verify the admin code
if ($admin_code !== 'veet@123') {
    echo "Incorrect admin code.";
    exit;
}

// Establish a connection to the database
$conn = new mysqli("localhost", "root", "root", "adminreg");

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare the query and bind parameters
$stmt = $conn->prepare("SELECT * FROM reg2 WHERE Uname = ? AND Pass = ?");
$stmt->bind_param("ss", $username, $password);

// Execute the query
$stmt->execute();

// Fetch the result
$result = $stmt->get_result();
$admin = $result->fetch_assoc();

if ($admin) {
    // Delete the admin from the database
    $deleteStmt = $conn->prepare("DELETE FROM reg2 WHERE Uname = ? AND Pass = ?");
    $deleteStmt->bind_param("ss", $username, $password);
    $deleteStmt->execute();

    header("Location: popup.html");
} else {
    echo "Admin credentials not found.";
}

// Close the statements and connection
$stmt->close();
$deleteStmt->close();
$conn->close();
?>
