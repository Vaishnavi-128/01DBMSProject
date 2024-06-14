<?php
// Database connection
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

// Fetch data from birthcertificate table
$sql = "SELECT * FROM residentcertificate where status = 'pending'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // Output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row["id"] . "</td>";
    echo "<td>" . $row["name"] ."</td>";
    echo "<td>" . $row["status"] . "</td>";
    echo "<td><form method='POST'><button type='submit' name='update_status' value='".$row['id']."' class='btn btn-danger'>Update Status</button></form></td>";
    echo "<td><a href='EmailSender/emailRes.php?id=" . $row["id"] . "' style='background-color: #28a745; color: #fff; padding: 5px 10px; border-radius: 4px; text-decoration: none;'>Sent</a></td>";
    echo "<td><a href='viewres.php?id=" . $row["id"] . "'>View Details</a></td>";
    echo "</tr>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
<?php
// Handling the form submission to update the status
if(isset($_POST['update_status'])) {
    $id = $_POST['update_status'];

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

    // SQL query to update status to "done" for the given ID
    $sql = "UPDATE residentcertificate SET status = 'done' WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Status updated successfully');</script>";
    } else {
        echo "<script>alert('Error updating status: " . $conn->error . "');</script>";
    }

    // Close database connection
    $conn->close();
}
?>
