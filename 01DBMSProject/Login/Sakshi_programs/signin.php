<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Log in</title>

<link rel="stylesheet" href="https://colorlib.com/etc/regform/colorlib-regform-7/fonts/material-icon/css/material-design-iconic-font.min.css">

<link rel="stylesheet" href="style.css">
<!--<link rel="stylesheet" href="style2.css">-->
</head>
<style>
body{
  background-color: #c7c5f0;
}
</style>
<body>
<div class="main" style="background-color: #c7c5f0">

<section class="sign-in">
<div class="container">
<div class="signin-content">
<div class="signin-image">
<figure><img src="4.jpg" alt="sing up image"></figure>
<a href="Register.php" class="signup-image-link">अकाऊंट तयार करा</a>
</div>
<div class="signin-form" style="color: #643b9f">
<h2 class="form-title" style="color: #643b9f">लॉग इन </h2>
<form method="POST" action="adminlogin.php"class="register-form" id="login-form">
<div class="form-group">
<label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
<input type="text" name="name" id="your_name" placeholder="तुमचे नाव" style="color: #643b9f"/>
</div>
<div class="form-group" style="background-color: #643b9f">
<label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
<input type="password" name="pass" id="your_pass" placeholder="पासवर्ड" style="color: #643b9f"/>
</div>
<div class="form-group">
<input type="checkbox" name="remember-me" id="remember-me" class="agree-term" style="color: #643b9f" />
<label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
</div>
<div class="form-group form-button">
<button type="button" class="btn btn-light btn-lg" value="Go back!" onclick="history.back()"style="background-color:#ebe7f2; font-family:'Times New Roman';color:#643b9f; padding: 10px 30px;font-size: 18px;margin-left:20px;margin-top: 10%;border: none;border-radius: 5px;margin:10px 20px">मागे जा</button>
  <input type="submit" name="signin" id="signin" class="form-submit" value="लॉग इन" style="background-color: #643b9f" />
  </div>
<!--<div class="popup" id="popup">
  <img src="tick.png" alt="tick">
  <h2>THANK YOU!</h2>
  <p>Your details has been successfully submitted. Thanks!</p>
  <button type="button" onclick="closePopup()">OK</button>
  <script>

    let popup= document.getElementById("popup");
            function openPopup()
            {
                popup.classList.add("open-popup");
            }
            function closePopup()
            {
                popup.classList.remove("open-popup");
            }
    </script>-->
</div>
</div>
</form>

</div>
</div>
</div>
</section>
</div>

<script src="vendor/jquery/jquery.min.js"></script>
<script src="js/main.js"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v52afc6f149f6479b8c77fa569edb01181681764108816" integrity="sha512-jGCTpDpBAYDGNYR5ztKt4BQPGef1P0giN6ZGVUi835kFF88FOmmn8jBQWNgrNd8g/Yu421NdgWhwQoaOPFflDw==" data-cf-beacon='{"rayId":"7bb5ed7708f78587","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2023.3.0","si":100}' crossorigin="anonymous"></script>
</body>
</html>