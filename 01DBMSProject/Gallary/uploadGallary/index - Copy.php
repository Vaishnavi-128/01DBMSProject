<!DOCTYPE html>
<html>
  <head>
    <title>गॅलरी</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="lightbox.css">
    <style>
      body{
    background-color: #c7c5f0;
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
  margin-left: 50%;
  border-color: white;
}
  .header h1 {
    font-size: 50px;
    margin-top:40px;
    font-weight: bold;
    text-align: center;
   color:#643b9f;
    font-family: Arial, Helvetica, sans-serif;
  }
  
  
  .header .user-info {
    display: flex;
    align-items: center;
  }
  
  .header .user-info img {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    margin-right: 10px;
  }

  .main {
    margin-bottom: 20px;
    margin-left: 85px;
    margin-right: 20px;
  }

  .preview-container {
    position: relative;
    display: inline-block;
    margin-right: 30px;
    margin-bottom: 30px;
  }
  
  .preview-image {
    display: block;
    max-width: 100%;
  }
  
  .preview-filename {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    color: #fff;
    padding: 5px;
    box-sizing: border-box;
    font-size: 18px;
    text-align: center;
  }
  .main {
    margin-top: 10px;
    margin-left: 20px;
    padding: 60px;
    background-color: white;
  }
      </style>
  </head>
  <body>
    <div class="header">
      <h1>गॅलरी</h1>
    </div>
    <div class="container" style="background-color: #c7c5f0;">
     <!-- <div class="sidebar">
        <h2>Navigation</h2>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="upload.php">Upload File</a></li>
        </ul>
      </div>-->
      <div class="main" style="background-color: #c7c5f0;">
        <ul>
          <?php
            // Read the list of files from the directory
            $dir = 'uploads/';
            $files = scandir($dir);

            // Display each file as a link
            foreach ($files as $file) {
              if ($file != '.' && $file != '..') {
                echo '<a href='.$dir.$file .' data-lightbox="GramPanchyat" data-title="GramPanchayat"><img width=300 height=200 border=5px solid #040f11 src="' . $dir . $file . '"></a>' . $file ;
              }
            }
          ?>
        </ul>
        <button type="button" class="btn1" value="Go back!" onclick="history.back()"style="background-color:#643b9f;font-family: 'Times New Roman'; color:white; padding: 10px 30px;font-size: 30px;border: none;border-radius: 5px;">मागे जा</button>
      </div>
    </div>
    
<script src="lightbox-plus-jquery.js"></script>

  </body>
</html>
