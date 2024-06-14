<html>
<?php

// Connect to the database
$con = mysqli_connect("localhost", "root", "root", "complaint");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
 exit();
}

// Process the form data

    $name = $_POST["name"];
    $mobile = $_POST["Mno"];
    $email = $_POST["email"];
    $complaint_type = $_POST["type"];
    $location = $_POST["location"];
    $description = $_POST["description"];

  // Validate the form data
  if (empty($complaint_type) || empty($location) || empty($description)) {
    echo "Please fill all required fields.";
    exit();
  }

  // Store the complaint data in the database with status 'pending'
  
 $sql = "INSERT INTO complaints3 (name,Mno,email,complaint_type,location, description) VALUES ('$name','$mobile','$email','$complaint_type', '$location', '$description')";
  if (mysqli_query($con, $sql)) {
   
    header("Location: index2.php");
  
    }
  
     else 
     {
        echo "Error: ";
    }
    


// Close the database connection
mysqli_close($con);
?>
</html>