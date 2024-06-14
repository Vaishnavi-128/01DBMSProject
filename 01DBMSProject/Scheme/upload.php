<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
.container {
  position: relative;
  font-family: Times Roman;
  font-size: 25pt;
}

.text-block {
  position: absolute;
  bottom: 35%;
  top:33%;
  width: 60%;
  left:20%;
  color: white;
  padding-left: 50px;
  padding-right: 50px;
  align-content: center;
  box-sizing: border-box;
border: 5px solid white;

}
.hero-text {
  text-align: center;
  position: absolute;
  top: 10%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
}
.hero-back {
  text-align: center;
  position: absolute;
  bottom: 23%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
}
.success{
  font-size: 18pt;
}
.error{
  font-size: 18pt;
}
.btn1{
  background-color: white;
  color: #643b9f;
  padding: 10px 30px;
  border-radius: 10px;
  text-decoration: none;
  font-size: 18px;
  text-transform: uppercase;
  position: relative;
  overflow: hidden;
  border-color: white;
}
input[type="submit"] {
    background-color: white;
    color: black;
    padding: 10px 20px;
    border: none;
    font-family:"Times New Roman";
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
  }
</style>
</head>
<body>


<div class="container">
  <img src="bg4.jpg" alt="Nature" style="width:100%;filter: blur(8px);
  -webkit-filter: blur(5px);">
 
<div class="hero-text">
      <h1 style="text-align: center;">Scheme Uploading</h1>

</div>
<div class="text-block" style="text-align: center;">

    <div class="container" style="text-align: center;">
      <div class="main" style="text-align: center;" >
       <h2  style="text-align: center;font-size: 25pt">Upload</h2>
        <?php
          // Handle file upload
          if (isset($_FILES['file'])) {
            $file_name = $_FILES['file']['name'];
            $file_size = $_FILES['file']['size'];
            $file_tmp = $_FILES['file']['tmp_name'];
            $file_type = $_FILES['file']['type'];
            $file_parts = explode('.', $_FILES['file']['name']);
            $file_ext = strtolower(end($file_parts));
            
            // Check if file is allowed
            $allowed = array('pdf');
            if (in_array($file_ext, $allowed) === false) {
              echo '<div class="error">Only PDF files are allowed!</div>';
            } else {
              // Move file to uploads directory
              move_uploaded_file($file_tmp, 'uploads/' . $file_name);
              echo '<div class="success"  >File uploaded successfully!</div>';
            }
          }
        ?>
        <form action="" method="POST" enctype="multipart/form-data">
          <input type="file" name="file" />
            <br><br>
          <input type="submit"style="text-align: center;" />
        </form>
      </div>
    </div>
  </div>
  <div class="hero-back">
    <button type="button" class="btn1" value="Go back!" onclick="history.back()">Back</button>
  </div>
  
</div>

</body>
</html> 

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

// Handle file upload
if (isset($_FILES['file'])) {
  $file_tmp = $_FILES['file']['tmp_name'];
  $file_ext = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);

  // Check if file is PDF
  if ($file_ext !== 'pdf') {
    echo '<div class="error">Only PDF files are allowed!</div>';
  } else {
    // Read the file content
    $file_content = file_get_contents($file_tmp);

    // Insert file data into database
    $stmt = $conn->prepare("INSERT INTO scheme (pdf_data) VALUES (?)");
    $stmt->bind_param("s", $file_content);

    if ($stmt->execute() === TRUE) {
      echo '<div class="success">PDF uploaded successfully and details saved to database!</div>';
    } else {
      echo '<div class="error">Error uploading PDF: ' . $conn->error . '</div>';
    }
    
    $stmt->close();
  }
}

// Close database connection
$conn->close();
?>
