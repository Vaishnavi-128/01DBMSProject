<!DOCTYPE html>
<html lang="en">
<head>
  <title>Veet Grampanchayat</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    body {
      margin: 0;
      padding: 25px;
      background-color: white;
      color: black;
      font-size: 25px;
    
    }

   .fixed-header {
  position: fixed;
  top: 0;
  width: 100%;
  z-index: 1000;
  height: 80px;
  background-color: #643b9f;
}

    .content {
      max-width: 800px;
      margin: 0 auto;
      padding: 20px;
    }


    * {
  box-sizing: border-box;
}

.columns {
  float:left;
  width: 16.5%;
  padding: 10px;
}

.price {
  list-style-type: none;
  border: 1px solid #eee;
  margin: 0;
  padding: 5px;
  -webkit-transition: 0.3s;
  transition: 0.3s;
}

.price:hover {
  box-shadow: 0 8px 12px 0 #643b9f;
}

.price .header {
  background-color: #643b9f;
  color: white;
  font-size: 25px;
}

.price li {
  border-bottom: 1px solid #eee;
  padding: 20px;
  text-align: center;
}

.price .grey {
  background-color: #eee;
  font-size: 20px;
}

.button {
  background-color: #04AA6D;
  border: none;
  color: white;
  padding: 10px 25px;
  text-align: center;
  text-decoration: none;
  font-size: 18px;
}
.footer{
  background-color:#643b9f;
  width:80%;
  height: 250px;
  padding-left: 30px;
  padding-right: 30px;
  margin-left: 150px;
  margin-right: 220px;
  font-size: 18px;
}
@media only screen and (max-width: 600px) {
  .columns {
    width: 100%;
    
  }
  .fixed-header {
  position: fixed;
  top: 0;
  width: 100%;
  z-index: 1000;
  height: 100px;
  background-color: #643b9f;
}
  .content {
      max-width: 50px;
      margin: 10px 10px;
      padding: 10px;
    }
  .button {
  background-color: #04AA6D;
  border: none;
  color: white;
  padding: 10px 25px;
  text-align: center;
  text-decoration: none;
  font-size: 16px;
}
.footer{
  background-color:#643b9f;
  
  width:90%;
  height: 400px;
  margin-top: 1100px;
  padding-left: 5px;
  padding-right: 5px;
  margin-left: 30px;
  margin-right: 220px;
  font-size: 18px;
}

}
.notification {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  background-color: yellow;
  color: red;
  font-size: 16px;
  margin: 200px;
  padding: 90px;
  text-align: center;
  white-space: nowrap;
  overflow: hidden;
  animation: marquee 20s linear infinite;
}

@keyframes marquee {
  0% {
    transform: translateX(100%);
  }
  100% {
    transform: translateX(-100%);
  }
}


  </style>
</head>

<body>
<div class="gridview">
  <div class="fixed-header">
    <div class="container col-md-9 text-white">
      <div class="d-flex justify-content-between align-items-center">
        <h1>वीट ग्रामपंचायत</h1>
        <div>
      <button type="button" class="btn btn-outline-light" onclick="window.location.href = 'Login/Sakshi_programs/Register.php';">साइन अप</button>
      <button type="button" class="btn btn-outline-light" onclick="window.location.href = 'Login/Sakshi_programs/signin.php';">लॉग इन</button>
      <button type="button" class="btn btn-outline-light" onclick="window.location.href = 'https://www.google.com/maps/place/Veet,+Maharashtra+413203/@18.3801191,75.0792998,13z/data=!3m1!4b1!4m6!3m5!1s0x3bc48518cf03b6e1:0xc3ee57ce291a99!8m2!3d18.3798749!4d75.1143345!16s%2Fg%2F11h1b1s4p';">स्थान</button>
      <button type="button" class="btn btn-outline-light" onclick="window.location.href = 'signin.php';">ॲडमिन</button>
      <button type="button" class="btn btn-outline-light" onclick="window.location.href = 'MainPage.php';">इंग्रजी</button>
      
    </div>
  </div>
</div>

</div>


<br>
<br>

<!-- Carousel -->
<?php include('Metting/meet3 - Copy.php'); ?>
<div id="demo" class="carousel slide" data-bs-ride="carousel" class="content">
  <!-- Indicators/dots -->
  <div class="text-center"class="content">
  <div class="carousel-indicators" class="content">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
  </div>
  
  <!-- The slideshow/carousel -->
  <div class="carousel-inner" class="content">
    <div class="carousel-item active" class="content">
      <img src="2.jpg" alt="Los Angeles" class="rounded" style="width:50% , height:50%" >
    </div>
    <div class="carousel-item" class="content">
      <img src="6.jpg" alt="Chicago" class="rounded" style="width:50% , height:50%">
    </div>
    <div class="carousel-item"class="content">
      <img src="20.jpg" alt="New York" class="rounded" style="width:50% , height:50%">
      <!--<div class="carousel-caption"class="content">
    <h3>Fish upon a sky</h3>
    <p>Maybe some dreams are always meant to be dreams</p>
  </div>-->
    </div>
  </div>
</div>
  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev" style="width:70%">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next" style="width:70%">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>

<br>
<div class="container col-md-12 text-center " class="content">
<button type="button" class="btn" data-bs-toggle="collapse" data-bs-target="#demo1"  style="background-color: #643b9f; color: white">about</button>
  <div id="demo1" class="collapse">
  वीट स्थानिक भाषा मराठी आहे. वीट गावाची एकूण लोकसंख्या ५०५३ असून घरांची संख्या १०८७ आहे. महिलांची लोकसंख्या ४७.८% आहे. गावातील साक्षरता दर 66.7% आणि महिला साक्षरता दर 28.3% आहे.
  </div>
</div>
<br>


<section align-items-center>
 
     <form action="/action_page.php">
           <form action="/action_page.php">
<div class="columns">
  <ul class="price">
    <li class="header">मीटिंग आयोजन</li>
    <li class="grey"><a href="#"><i class='bx bx-calendar-plus'style='font-size:70px;color:black' ></i></a></li>
  </ul>
</div>
<div class="columns">
  <ul class="price">
    <li class="header">तक्रार दाखल करा</li>
    <li class="grey"><a href="Complaint/form2.php"><i class='bx bx-comment-error'style='font-size:70px;color:black' ></i></a></li>
  </ul>
</div>
<div class="columns">
  <ul class="price">
    <li class="header">कागदपत्रे</li>
 <li class="grey"><a href="Document generator/verification.php"><i class='bx bx-folder' style='font-size:70px;color:black' ></i></a></li>
  </ul>
</div>

<div class="columns">
  <ul class="price">
    <li class="header">नवीन योजना</li>
    <li class="grey"><a href="Scheme/index - Copy.php"><i class='bx bx-folder-plus'style='font-size:70px;color:black' ></i></a></li>
  </ul>
</div>


<div class="columns">
  <ul class="price">
    <li class="header">देणगी</li>
    <li class="grey"><a href="Donate/p1 - Copy.php"><i class='bx bx-money'style='font-size:70px;color:black' ></i></a></li>
  </ul>
</div>

<div class="columns">
  <ul class="price">
    <li class="header">फोटो गॅलरी</li>
    <li class="grey"><a href="Gallary/uploadGallary/index - Copy.php"><i class='bx bx-image-add'style='font-size:70px;color:black' ></i></a></li>
  </ul>
</div>

</form>
</section>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="footer">
  <div class="mt-3 p-4 text-white rounded" >
    <h3>वीट ग्रामपंचायत संपर्क तपशील</h3> 
    <p>वीट हे भारताच्या महाराष्ट्र राज्यातील सोलापूर जिल्ह्यातील करमाळा तालुक्यात एक गाव आहे. </p> 
    <p>पत्ता: 94H7+8RV,S67,Vit,महाराष्ट्र.</p>
    <p>संपर्क क्रमांक: 9975345116</p>
    <p>ईमेल आयडी: veetgrampanchayat@gmail.com</p>
  </div>
</div>
</div>

<script>

function myFunction1() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
</script>
</body>
</html>


