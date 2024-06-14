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
$name = $_POST["name"];
$pass = $_POST["pass"];
$adminpass = $_POST["adminpass"];


/*echo $name;
echo $pass;
echo $adminpass;*/


// Prepare SQL statement
//$sql="INSERT INTO reg2 (name, village,HouseNo,date,PhoneNo,Uname,Pass) VALUES ('$name', '$village','$HouseNo','$date','$PhoneNo','$Uname','$Pass')";
if ($adminpass == "veet@123"){
    $sql = "SELECT * FROM reg2 WHERE Uname = '$name' AND Pass='$pass'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        header("Location: AdminPanel1.html");
    } else{
        echo "Incorrect Username and Password!!".mysqli_error($conn);
    }
}
else{
    echo "Incorrect Admin Password !!";
}
$conn->close();
?>
