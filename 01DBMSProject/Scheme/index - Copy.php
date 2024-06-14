<!DOCTYPE html>
<html>
  <head>
    <title>योजना</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
  </head>
  <style type="text/css">
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
    margin-top:20px;
    margin-top: 30px;
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
    margin-top: 40px;
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
  </style>
  <body>
    <div class="header">
      <h1>योजना</h1>
    </div>
    <div class="container">
  
      <div class="main">
        <ul>
          <?php
            $dir = "uploads/";
            if (is_dir($dir)) {
              if ($dh = opendir($dir)) {
                while (($file = readdir($dh)) !== false) {
                  if ($file != "." && $file != "..") {
                    // Display a list item for each file with a button to preview the PDF file
                    echo "<div class='preview-container' style=position='relative' display='inline-block' margin-right='10px'><img class='preview-image' width='250px' height='300px' src='preview.png' alt='Preview' onclick=\"window.open('uploads/$file', '_blank');\"><span class='preview-filename'>$file</span></div>";
                  }
                }
                closedir($dh);
              }
            }
          ?>
        </ul>
      </div>
      <button type="button" class="btn1" value="Go back!" onclick="history.back()">मागे जा</button>
    </div>
  

  </body>
</html>
