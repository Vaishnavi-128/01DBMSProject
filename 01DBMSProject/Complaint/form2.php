<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complaints</title>
    <style>
    body{
        background-color:white;
        font-family:"Times New Roman";
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
    float:right;
    font-family:"Times New Roman";
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
    <h1>Raise a complaints(तक्रार नोंदणी)</h1>
    <form action="complaint2.php" method="post">
        <label for="name">Name Of Person(व्यक्तीचे नाव):</label>
        <input type="text"name="name"id="name" required><br>

        <label for="email">Email(ईमेल):</label>
        <input type="email" name="email" id="email" required><br>
        
        <label for="Mno">Mobile No(मोबाईल क्र.) :</label>
        <input type="text" name="Mno" id="Mno" required><br>

        <label for="type">Complaint Type(तक्रारीचा प्रकार):</label>
        <input type="text" name="type" id="type" required><br>
      
        <label for="location">Location(ठिकाण):</label>
        <input type="text" name="location" id="location" required><br>
      
        <label for="description">Description Of Complaint(तक्रारीचे वर्णन) :</label>
        <textarea name="description" id="description" rows="4" required></textarea><br>
      
        <button type="button" value="Go back!" onclick="history.back()"style="background-color:#e2d6f2;font-family: 'Times New Roman'; color:#643b9f; padding: 10px 30px;font-size: 18px;border: none;border-radius: 5px;">Back</button>
        <input type="submit" value="Submit">
      </form>
      
    
</body>
</html>