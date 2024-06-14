<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complaints</title>
    <style>
        h1{
    color:#673ab7;
    font-family:"Monotype Corsiva";
    font-size: 50px; 
    text-align:center;
    margin: 50px 40px;
  }
        .styled-table {
    width: 100%;
    background-color: #f7f7f9;
    font-size: 1em;
    margin: 45px 0;
    border-collapse: separate;
    border-spacing: 0;
    border: 3px solid #673ab7;
}

.styled-table thead tr {
    height: 60px;
    background-color: #673ab7;
    color: #fff;
    font-weight: bold;
    font-size: 1.2em;
    text-align: left;
}

.styled-table th {
    padding: 10px;
    font-size: 1.1em;
    text-transform: uppercase;
    letter-spacing: 0.1em;
}

.styled-table tbody tr {
    height: 50px;
    border-bottom: 1px solid #e0e0e0;
}

.styled-table tbody tr:nth-of-type(even) {
    background-color: #f1f1f1;
}

.styled-table tbody tr:last-of-type {
    border-bottom: 2px solid #673ab7;
}

.styled-table td {
    padding: 10px;
}

.styled-table td:last-of-type {
    text-align: center;
}

.styled-table td:last-of-type button {
    padding: 6px 10px;
    background-color: #673ab7;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: all 0.3s ease-in-out;
}

.styled-table td:last-of-type button:hover {
    background-color: #4b2a80;
}

@media (max-width: 600px) {
    h1{
    color:#673ab7;
    font-family:"Monotype Corsiva";
    font-size: 50px; 
    text-align:center;
    margin: 50px 40px;
  }
    .styled-table {
        font-size: 0.8em;
    }

.styled-table {
    width: 100%;
    background-color: #f7f7f9;
    font-size: 1em;
    margin: 45px 0;
    border-collapse: separate;
    border-spacing: 0;
    border: 3px solid #673ab7;
}

.styled-table thead tr {
    height: 60px;
    background-color: #673ab7;
    color: #fff;
    font-weight: bold;
    font-size: 1.2em;
    text-align: left;
}

.styled-table th {
    padding: 10px;
    font-size: 1.1em;
    text-transform: uppercase;
    letter-spacing: 0.1em;
}

.styled-table tbody tr {
    height: 50px;
    border-bottom: 1px solid #e0e0e0;
}

.styled-table tbody tr:nth-of-type(even) {
    background-color: #f1f1f1;
}

.styled-table tbody tr:last-of-type {
    border-bottom: 2px solid #673ab7;
}

.styled-table td {
    padding: 10px;
}

.styled-table td:last-of-type {
    text-align: center;
}

.styled-table td:last-of-type button {
    padding: 6px 10px;
    background-color: #673ab7;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: all 0.3s ease-in-out;
}

.styled-table td:last-of-type button:hover {
    background-color: #4b2a80;
}}
body
{
    background-color:white;
}

.display{
    margin-top: 60px;
    margin-left: 20px;
    padding: 60px;
    background-color: aliceblue;
}
.btn1{
  background-color: #643b9f;
  color: #fff;
  padding: 10px 30px;
  border-radius: 10px;

  text-decoration: none;
  font-size: 18px;
  text-transform: uppercase;
  position: relative;
  overflow: hidden;
  border-color: white;
}
input[type="submit"]
{
  background-color: red;
  color: #fff;
  padding: 10px 20px;
  border: none;
  border-radius: 3px;
  cursor: pointer;
}


    </style>
</head>
<body>
    <h1>Complaints</h1>
<div class="display">
<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "complaint";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if a delete request was made
if (isset($_POST["delete_complaint"])) {
    $complaint_id = $_POST["complaint_id"];
    $sql = "DELETE FROM complaints3 WHERE id=$complaint_id";
    if ($conn->query($sql) === TRUE) {
        header("Location: complanit show.php");
    } else {
        echo "Error deleting complaint: " . $conn->error;
    }
}

// Select all complaints from the database
$sql = "SELECT * FROM complaints3";
$result = $conn->query($sql);

// Display the complaints in a table
if ($result->num_rows > 0) {
    echo "<table class='styled-table'>";
    echo "<thead><tr><th>Name</th><th>Email</th><th>Phone</th><th>Subject</th><th>Description</th><th>Action</th></tr></thead><tbody>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$row["name"]."</td>";
        echo "<td>".$row["email"]."</td>";
        echo "<td>".$row["Mno"]."</td>";
        echo "<td>".$row["complaint_type"]."</td>";
        echo "<td>".$row["description"]."</td>";
        echo "<td><form method='post'>";
        echo "<input type='hidden' name='complaint_id' value='".$row["id"]."'>";
        echo "<input type='submit' name='delete_complaint' value='Delete' class='btn'>";
        echo "</form></td></tr>";
    }
    echo "</tbody></table>";
    echo "<div class='hero-back'> ";
    echo "<button type='button' class='btn1' value='Go back!' onclick='history.back()'>Back</button>";
    echo "</div>";
} else {
    echo "No complaints found.";
}

$conn->close();
?>
</div>
</body>
</html>
