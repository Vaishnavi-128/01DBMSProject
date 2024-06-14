
<DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
      body{
        background-color:white	;
       }
          h1{
    color:#643b9f;
    font-family:"Times Roman";
    font-size: 50px; 
    text-align:center;
    margin: 50px 40px;
  }
  
        
        /* form container */
  form {
    max-width: 600px;
    background-color: white;
    margin: 0 auto;
    padding: 35px;
    border: 4px solid #643b9f;
    border-radius: 10px;
  }
  
  /* form fields */
  label, input, textarea {
    display: block;
    margin-bottom: 10px;
    color:#643b9f;
  }
  
  label {
    font-weight: bold;
  }
  
  input[type="text"],
  input[type="email"],
  input[type="number"],
  input[type="file"],
  textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #643b9f;
    border-radius: 5px;
    font-size: 16px;
  }
  
  /* form buttons */
  input[type="submit"] {
    background-color: #643b9f;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
  }
  @media only screen and (max-width: 600px) {
    h1{
    color:#643b9f;
    font-family:"Times Roman";
    font-size: 30px; 
    text-align:center;
    margin: 30px 40px;
  }

  }
    </style>

</head>
<body>
<h1>देणगी पावती</h1>
<form method="POST" action="trial2.php" enctype="multipart/form-data">

<label for="name">नाव:</label>
<input type="text" name="name" id="name" required>
<label for="email">ईमेल :</label>
<input type="email" name="email" id="email" required>
<label for="amount">देयक रक्कम :</label>
<input type="number" name="amount" id="amount" required>
<label for="amount">पेमेंट स्क्रीनशॉट :</label>
<input type="file" name="image" accept="image/jpeg, image/png"><br>
<input type="submit" value="पावती तयार करा">

</form>
</body>
</html>