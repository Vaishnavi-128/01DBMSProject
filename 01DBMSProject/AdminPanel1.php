<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Admin Panel </title>
    <link rel="stylesheet" href="styele.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
 body{
    background-color: #E4E9F7;
  }
* {
  box-sizing: border-box;
}

.columns {
  float:left;
  width: 30%;
  padding: 20px;

}
.sidebar{
  position: fixed;
  left: 0;
  top: 0;
  height: 100%;
  width: 78px;
  background-color: #1d1b31;
  padding: 6px 14px;
  z-index: 99;
  transition: all 0.5s ease;
}
.price {
  list-style-type: none;
  border: 1px solid white;
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
  border-bottom: 1px solid white;
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

@media only screen and (max-width: 600px) {
  .columns {
    width: 100%;
  }
}
</style>
</head>
<body>
  <div class="sidebar">
    <div class="logo-details">
        <div class="logo_name">ॲडमिन-पॅनेल</div>
        <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="nav-list">
      <li>
          <i class='bx bx-search' ></i>
         <input type="text" placeholder="Search...">
         <span class="tooltip">शोधा</span>
      </li>
      <li>
       <a href="Complaint/complanit show.php">
         <i class='bx bx-bell' ></i>
         <span class="links_name">नोटिफिकेशन</span>
       </a>
       <span class="tooltip">नोटिफिकेशन</span>
     </li>
     <li>
       <a href="MainPage - Copy.php">
         <i class='bx bx-log-out-circle' ></i>
         <span class="links_name">लॉग आऊट</span>
       </a>
       <span class="tooltip">लॉग आऊट</span>
     </li>
     <li>
       <a href="#">
         <i class='bx bx-cog' ></i>
         <span class="links_name">सेटिंग</span>
       </a>
       <span class="tooltip">सेटिंग</span>
     </li>

    </ul>
  </div>
  <section class="home-section" class="d-flex align-items-center">
      <div class="text">वीट ग्रामपंचायत ॲडमिन डॅशबोर्ड</div>
       <form action="/action_page.php">
<div class="row d-flex justify-content-center">
<div class="columns" >
  <ul class="price">
    <li class="header">नवीन ॲडमिन ॲड करा</li>
 <li class="grey"><a href="signin.php"><i class='bx bx-user-plus'style='font-size:70px;color:black' ></i></a></li>
  </ul>
</div>

<div class="columns">
  <ul class="price">
    <li class="header">मीटिंग आयोजन करा</li>
    <li class="grey"><a href="Metting/meetingform.php"><i class='bx bx-calendar-plus'style='font-size:70px;color:black' ></i></a></li>
  </ul>
</div>

<div class="columns">
  <ul class="price">
    <li class="header">ॲडमिन डिलीट करा</li>
    <li class="grey"><a href="delete admin.php"><i class='bx bx-user-minus'style='font-size:70px;color:black' ></i></a></li>
  </ul>
</div>

<div class="columns">
  <ul class="price">
    <li class="header">तक्रार दाखल करा</li>
    <li class="grey"><a href="Complaint/complanit show.php"><i class='bx bx-comment-error'style='font-size:70px;color:black' ></i></a></li>
  </ul>
</div>

<div class="columns">
  <ul class="price">
    <li class="header">नवीन योजना ॲड करा </li>
    <li class="grey"><a href="Scheme/upload - Copy.php"><i class='bx bx-folder-plus'style='font-size:70px;color:black' ></i></a></li>
  </ul>
</div>

<div class="columns">
  <ul class="price">
    <li class="header">नवीन फोटो ॲड करा</li>
    <li class="grey"><a href="Gallary/uploadGallary/upload - Copy.php"><i class='bx bx-image-add'style='font-size:70px;color:black' ></i></a></li>
  </ul>
</div>

<div class="columns">
  <ul class="price">
    <li class="header">नवीन वापरकर्ता ॲड करा</li>
    <li class="grey"><a href="Register.php"><i class='bx bx-user-plus'style='font-size:70px;color:black' ></i></a></li>
  </ul>
</div>


</div>
</form>
   </section>
  <br>
  <br>

  <script >
    
    let sidebar = document.querySelector(".sidebar");
let closeBtn = document.querySelector("#btn");
let searchBtn = document.querySelector(".bx-search");

closeBtn.addEventListener("click", ()=>{
  sidebar.classList.toggle("open");
  menuBtnChange();//calling the function(optional)
});

searchBtn.addEventListener("click", ()=>{ // Sidebar open when you click on the search iocn
  sidebar.classList.toggle("open");
  menuBtnChange(); //calling the function(optional)
});

// following are the code to change sidebar button(optional)
function menuBtnChange() {
 if(sidebar.classList.contains("open")){
   closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");//replacing the iocns class
 }else {
   closeBtn.classList.replace("bx-menu-alt-right","bx-menu");//replacing the iocns class
 }
}

  </script>

</body>
</html>
