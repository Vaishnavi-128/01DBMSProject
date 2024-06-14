<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "adminreg";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Get values from form
$name = $_POST["fullname"];
$village = $_POST["village"];
$HouseNo = $_POST["HouseNo"];
$date = $_POST["date"];
$PhoneNo = $_POST["PhoneNo"];
$Uname = $_POST["Uname"];
$Pass = $_POST["Pass"];

/*echo $name;
echo $village;
echo $HouseNo;
echo $date;
echo $PhoneNo;
echo $Uname;
echo $Pass;*/

// Prepare SQL statement
//$sql = "SELECT * FROM citizens WHERE name='$name' AND ration='$ration'";
$sql="INSERT INTO reg2 (name, village,HouseNo,date,PhoneNo,Uname,Pass) VALUES ('$name', '$village','$HouseNo','$date','$PhoneNo','$Uname','$Pass')";

if (mysqli_query($conn, $sql)) {
  echo "Registration SuccessfulL!!";
} else {
  echo "Something went wrong!!".mysqli_error($conn);
}

$conn->close();
?>
