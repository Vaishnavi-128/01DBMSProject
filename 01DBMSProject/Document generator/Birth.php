<!DOCTYPE html>
<html>
  <head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Birth Cerificate</title>
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
    border: 1px solid #643b9f;
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
    float: right;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
  }
  @media only screen and (max-width: 600px) {
    h1{
    color:#643b9f;
    font-family:"Times Roman";
    font-size: 25px; 
    text-align:center;
    margin: 30px 40px;
  }

  }



    </style>
  </head>
  <body>
    <h1>Birth Certificate</h1>
    <form action="Birth1.php" method="post">
      <label for="name">Name Of Child : </label>
      <input type="text" id="name" name="name" required><br><br>
      <label for="area">Area : </label>
      <input type="text" id="area" name="area" required><br><br>
      <label for="tal">Taluka : </label>
      <input type="text" id="tal" name="tal" required><br><br>
      <label for="dis">District : </label>
      <input type="text" id="dis" name="dis" required><br><br>
      <label for="date">Date of Birth : </label>
      <input type="date" id="date" name="date" required><br><br>
      <label for="gender">Gender : </label>
      <input type="text" id="gender" name="gender" required><br><br>
       <label for="placeb">Place of Birth : </label>
      <input type="text" id="placeb" name="placeb" required><br><br>
      <label for="mother">Name of Mother : </label>
      <input type="text" id="mother" name="mother" required><br><br>
      <label for="father">Name of Father : </label>
      <input type="text" id="father" name="father" required><br><br>
      <label for="address1">Address of parents at the time of birth of child : </label>
      <input type="text" id="address1" name="address1" required><br><br>
      <label for="address2">Parmanent address of parents : </label>
      <input type="text" id="address2" name="address2" required><br><br>
      <label for="date2">Date of issue : </label>
      <input type="date" id="date2" name="date2" required><br><br>
      <label for="r">Date of Registration : </label>
      <input type="date" id="r" name="r" required><br><br>
      <button type="button" value="Go back!" onclick="history.back()"style="background-color:#e2d6f2;font-family: 'Times New Roman'; color:#643b9f; padding: 10px 30px;font-size: 18px;border: none;border-radius: 5px;">Back</button>
      <input type="submit" value="Generate Certificate">

    </form>
     
  </body>
</html>