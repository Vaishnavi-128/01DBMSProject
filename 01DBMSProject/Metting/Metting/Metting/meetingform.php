<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Meeting</title>
  <style>
    body {
  background-color: #c7c5f0;
  font-family: 'Times New Roman', Times, serif;
}
    h1{
      color: #643b9f;
    font-family:"Monotype Corsiva";
    font-size: 50px; 
    text-align:center;
    margin: 50px 40px;
  }
    
    form {
      color: #643b9f;
      background-color:  white;
  max-width: 500px;
  margin: auto;
  padding: 50px 50px;
  border: 3px solid #643b9f;
  border-radius: 5px;
}

label {
  font-size: 20px;
  display: block;
  margin-bottom: 5px;
}

input[type="date"],
input[type="time"],
input[type="text"],
input[type="text"],
textarea {
  font-size: 20px;
  width: 100%;
  padding: 10px;
  margin-bottom: 10px;
  border: 1px solid #643b9f;
  border-radius: 3px;
}

input[type="submit"] {
  background-color: #643b9f;
  color: #fff;
  float:right;
  font-size: 16px;
  padding: 10px 20px;
  border: none;
  border-radius: 3px #643b9f;
  cursor: pointer;
}

input[type="submit"]:hover {
  background-color: #643b9f;
}

  </style>

</head>
<body>
  <h1>मीटिंग आयोजन</h1>
<form method="POST" action="meet.php">
  <label for="title">शीर्षक :</label>
  <input type="text" name="title" required>
  <br>
  <label for="date">दिनांक :</label>
  <input type="date" name="date" required>
  <br>
  <label for="time">वेळ :</label>
  <input type="time" name="time" required>
  <br>
  <label for="location">स्थान :</label>
  <input type="text" name="location">
  <br>
  <label for="attendees">उपस्थिती :</label>
  <textarea name="attendees" rows="3"></textarea>
  <br>
  <label for="agenda">अजेंडा :</label>
  <textarea name="agenda" rows="5"></textarea>
  <br>
  <button type="button" value="Go back!" onclick="history.back()"style="background-color:#e2d6f2;font-family: 'Times New Roman'; color:#643b9f; padding: 10px 30px;font-size: 18px;border: none;border-radius: 5px;">मागे जा</button>
  <input type="submit" value="आयोजित करा">
</form>
</body>
</html>
