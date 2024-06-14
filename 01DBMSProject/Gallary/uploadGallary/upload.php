<!DOCTYPE html>
<html>
  <head>
    <title>File Manager</title>
    <link rel="stylesheet" href="lightbox.css">
    <link rel="stylesheet" href="style5.css">
    <style>
      .container {
  position: relative;
  font-family: Times Roman;
  font-size: 25pt;
}

.text-block {
  position: absolute;
  bottom: 35%;
  top:35%;
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
    <div class="header" style="text-align: center;">
      <div class="container" style="text-align: center;">
  <img src="bg4.jpg" alt="Nature" style="width:100%;filter: blur(8px);
  -webkit-filter: blur(5px);">

<div class="hero-text">
      <h1 style="text-align: center;">Photo Uploading</h1>
    </div>
      <div class="text-block">
        <h2 style="text-align: center;">Upload File</h2>
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
            $allowed = array('png','jpg','jpeg');
            if (in_array($file_ext, $allowed) === false) {
              echo '<div class="error">Only png,jpg,jpeg files are allowed!</div>';
            } else {
              // Move file to uploads directory
              move_uploaded_file($file_tmp, 'uploads/' . $file_name);
              echo '<div class="success">File uploaded successfully!</div>';
            }
          }
        ?>
        <form action="" method="POST" enctype="multipart/form-data">
          
          <input type="file" name="file" /><br><br>
          <input type="submit" />
          
        </form>
        
      </div>
      <div class="hero-back">
      <button type="button" value="Go back!" onclick="history.back()"style="background-color:white;font-family: 'Times New Roman'; color:black; padding: 10px 30px;font-size: 18px;border: none;border-radius: 5px;">Back</button>
      </div>
    </div>
    
    <script src="lightbox-plus-jquery.js"></script>
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

  // Read the file content
  $file_content = file_get_contents($file_tmp);

  // Insert file data into database
  $stmt = $conn->prepare("INSERT INTO images (image_data) VALUES (?)");
  $stmt->bind_param("s", $file_content);

  if ($stmt->execute() === TRUE) {
    echo '<div class="success">File uploaded successfully and details saved to database!</div>';
  } else {
    echo '<div class="error">Error uploading file: ' . $conn->error . '</div>';
  }
  
  $stmt->close();
}

// Close database connection
$conn->close();
?>
