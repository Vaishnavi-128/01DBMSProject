
<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  background-color: #c7c5f0;
  font-family: sans-serif;
}

.login-box {
  width: 500px;
  font-family:'Gill Sans';
  background-color: white;
  color: #643b9f;
  top: 50%;
  left: 50%;
  position: absolute;
  transform: translate(-50%, -50%);
  padding: 30px;
  border-radius: 10px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.3);
  text-align: center;
}

.login-box h2 {
  font-size: 30px;
  text-transform: uppercase;
  margin-bottom: 30px;
}

.user-box {
  position: relative;
  margin-bottom: 20px;
}

.user-box input {
  width: 100%;
  padding: 10px 0;
  font-size: 16px;
  border: none;
  border-bottom: 1px solid #643b9f;
  outline: none;
  background: transparent;
}

.user-box label {
  position: absolute;
  top: 0;
  left: 0;
  padding: 10px 0;
  font-size: 16px;
  color: #643b9f;
  pointer-events: none;
  transition: 0.5s;
}

.user-box input:focus ~ label,
.user-box input:valid ~ label {
  top: -20px;
  left: 0;

  color: #643b9f;
  font-size: 12px;
}

input[type=submit] {
  display: inline-block;
  background-color: #643b9f;
  color: #fff;
  padding: 10px 30px;
  border-radius: 30px;
  text-decoration: none;
  font-size: 18px;
  text-transform: uppercase;
  position: relative;
  overflow: hidden;
}

a:hover {
  background-color: #333;
  color: #fff;
}

a span {
  position: absolute;
  display: block;
}

a span:nth-child(1) {
  top: 0;
  left: -100%;
  width: 100%;
  height: 2px;
  background-color: linear-gradient(90deg, transparent, #ff652f);
  animation: animate1 1s linear infinite;
}

@keyframes animate1 {
  0% {
    left: -100%;
  }
  50%,
  100% {
    left: 100%;
  }
}

a span:nth-child(2) {
  top: -100%;
  right: 0;
  width: 2px;
  height: 100%;
  background-color: linear-gradient(180deg, transparent, #ff652f);
  animation: animate2
}

    </style>
    <title>Document</title>
</head>
<body>
    <div class="login-box">
        <h2>तुम्ही वीट, करमाळा येथील रहिवासी आहात याची पडताळणी करण्यासाठी</h2>
        <form method="post" action="verifyDB.php">
          <b><div class="user-box">
            <input type="text" name="name" required="">
            <label>रहिवाशाचे नाव : </label>
          </div>
          <div class="user-box">
            <input type="password" name="number" required="">
            <label>रेशन कार्ड नंबर : </label>
          </div>
          <input type="submit" value="चेक">
</b>
        </form>
      </div>
    
</body>
</html>