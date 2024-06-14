
<DOCTYPE html>
<html>
<head>
    <style>
      form {
  border: 4px solid black;
  padding: 10px;
}

        /* Set font styles for the entire page */
body {
  font-family: Arial, sans-serif;
  font-size: 16px;
  color: #333;
}

/* Style the heading */
h1 {
  font-size: 20px;
  text-align: center;
  margin-top: 20px;
  color:red;
}

/* Style the form fields */
label {
  display: block;
  margin-top: 10px;
  font-weight: bold;
}

input[type="text"],
input[type="email"],
textarea {
  display: block;
  width: 60%;
  padding: 10px;
  margin-top: 5px;
  font-size: 16px;
  border: 1px solid #ccc;
  border-radius: 4px;
}

input[type="submit"] {
  background-color: #4CAF50;
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  margin-top: 10px;
}

input[type="submit"]::hover {
  background-color: #3e8e41;

}

/* Style form errors */
input:invalid {
  border-color: red;
  border-radius: 4px;
}

input:invalid + span::before {
  content: "✖ ";
  color: red;
  font-size: 12px;
}

input:valid + span::before {
  content: "✓ ";
  color: green;
  font-size: 12px;
}
        </style>

</head>
<body>
<h1>Simple Form</h1>
<form method="post" action="dbscanner_connection.php">

<label for="name">Name:</label>
<input type="text" name="name" id="name" required>
<label for="email">Email:</label>
<input type="email" name="email" id="email" required>
<input  type ="submit"Value="Submit">
</form>
</body>
</html>