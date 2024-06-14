<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gallery</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="lightbox.css">
    <link rel="stylesheet" href="style2.css">
    <style>
         body, h1, h2, p, ul, li {
  margin: 0;
  padding: 0;
}

body {
  font-family: Arial, sans-serif;
  line-height: 1.6;
}

.container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 20px;
}
      /* Navigation Bar Styles */
nav {
    background-color: #3B5998;
    color: #fff;
    padding: 3px;
  }
  
  nav .container {
    display: flex;
    justify-content: space-between;
    align-items: center;
  }
  
  .name{
    margin-right:250px;
    font-size: 20px;
    font-family: Georgia, 'Times New Roman', Times, serif;
    color: #fff;
    font-size: 24px;
    text-decoration: none;
  }
  .logo{
      color: #fff;
      font-size: 24px;
      text-decoration: none;
  }
  .logo img{
    width:100px;
    height:90px;
  }
  .nav-links {
    list-style: none;
    display: flex;
  }
  
  .nav-links li {
    margin-left: 15px;
    font-size: 16px;
    font-family: Georgia, 'Times New Roman', Times, serif;
  }
  
  .nav-links li a {
    text-decoration: none;
    color: white;
    display: inline-block;
    transition: color 0.3s ease, transform 0.3s ease;
  }
  .nav-links li a:hover {
    color: rgb(5, 4, 63); /* Change color on hover */
    transform: translateY(15%);
}
  .nav-icon {
    display: none; /* Hide the menu icon by default */
    font-size: 24px;
    cursor: pointer;
    color: #fff;
  }
  

/* Home Section Styles */
.home-section {
  background-color: #f0f0f0;
  text-align: center;
  padding: 100px 0;
}
@media (max-width: 768px) {
    
    .name{
      font-family: Georgia, 'Times New Roman', Times, serif;
      color: #fff;
      margin-right:50px;
      text-decoration: none;
    }
    
    .slide img {
        width: 100%; /* Set the image width to 100% of the container */
        height: auto; /* Let the height adjust proportionally */
      }
    
      .caption {
        font-size: 16px; /* Increase the font size of the caption text if needed */
      }
  }
  


  .main {
    margin-top: 10px;
    margin-left: 60px;
    padding: 60px;
    padding-inline-start:0;
    background-color: white;
  }
  
      </style>
  </head>
  <body>
  <h1 style="text-align:center; margin-top: 40px; color:#643b9f">Gallary</h2>


      <div class="main">
        <ul>
          <?php
            // Read the list of files from the directory
            $dir = 'uploads/';
            $files = scandir($dir);

            // Display each file as a link
            foreach ($files as $file) {
              if ($file != '.' && $file != '..') {
                echo '<a href='.$dir.$file .' data-lightbox="Veet GramPanchayat" data-title="Dnyanvardhini Academy"><img src="' . $dir . $file . '"style= "width:260px; height:200px; margin-left:30px; margin-bottom:30px""></a>';
              }
            }
          ?>
        </ul>
    </div>
    
<script src="lightbox-plus-jquery.js"></script>
<script>
    const navIcon = document.querySelector('.nav-icon');
const navLinks = document.querySelector('.nav-links');

navIcon.addEventListener('click', () => {
  navLinks.classList.toggle('active');
});
  </script>

        <!--<div class="footer-col">
          <h4>Links</h4>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Our Topper</a></li>
            <li><a href="#">Feature</a></li>
            <li><a href="#">Course</a></li>
            <li><a href="#">Branches</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </div>-->
      
  </body>
</html>
