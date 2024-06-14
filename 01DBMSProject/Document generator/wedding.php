<!DOCTYPE html>
<html>
  <head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Merriage Certificate</title>
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
    float : right;
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
    font-size: 25px; 
    text-align:center;
    margin: 30px 40px;
  }

  }




    </style>
  </head>
  <body>
    <h1>Marriage Certificate</h1>
    <form action="Wedding1.php" method="post">
      <label for="office">Marriage Registration Office : </label>
      <input type="text" id="office" name="office" required><br><br>
      <label for="taluka">Taluka(तालुका) : </label>
      <input type="text" id="taluka" name="taluka" required><br><br>
      <label for="District">District(जिल्हा) : </label>
      <input type="text" id="District" name="District" required><br><br>
       <label for="Date">Marriage Date(दिनांक) : </label>
      <input type="date" id="date" name="date" required><br><br>
       <label for="Name">Husband Name : </label>
      <input type="text" id="Name" name="Name" required><br><br>
      <label for="Name2">Wife Name : </label>
      <input type="text" id="Name2" name="Name2" required><br><br>
      <label for="Adhar1">Adhar Card Number of Husband : </label>
      <input type="text" id="Adhar1" name="Adhar1" required><br><br>
      <label for="Adhar2">Adhar Card Number of Wife : </label>
      <input type="text" id="Adhar2" name="Adhar2" required><br><br>
      <label for="Place">Place(ठिकाण) : </label>
      <input type="text" id="Place" name="Place" required><br><br>
      <button type="button" value="Go back!" onclick="history.back()"style="background-color:#e2d6f2;font-family: 'Times New Roman'; color:#643b9f; padding: 10px 30px;font-size: 18px;border: none;border-radius: 5px;">Back</button>
      <input type="submit" value="Generate Certificate">
    </form>
     
  </body>
</html>