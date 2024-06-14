<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <style>

body {
  /* white */
  background-image: radial-gradient(circle, #ba9deb, #ccffff, #f086d6, #ba9deb, #f086d6); /* gradient */

  animation-name: background-pulse;
  animation-duration: 4s;
  animation-timing-function: ease-in-out;
  animation-iteration-count: infinite;
}

@keyframes background-pulse {
  0% {
    background-position: center;
  }
  50% {
    background-position: bottom;
  }
  100% {
    background-position: center;
  }
}

h1{
  color:darkred;
  font-family:"Monotype Corsiva";
  font-size: 50px; 
  text-align:center;
  margin: 100px 70px;
}



        button {
          background-color: purple; /* Green background color */
  border: none; /* Remove button border */
  color: white; /* White text color */
  padding: 25px 50px; /* Padding around text */
  text-align: center; /* Center text horizontally */
  text-decoration: none; /* Remove text underline */
  display: inline-block; /* Display as a block element */
  font-size: 20px; /* Font size */
  font-family:"Segoe UI";
  margin: 35px 35px; /* Add some margin */
  cursor: pointer; /* Add pointer cursor on hover */
  border-radius: 8px; /* Add some rounding to the corners */
  box-shadow: 2px 2px 4px #888888; /* Add a small shadow */
}

button:hover {
  background-color: #3e8e41; /* Darker green on hover */
}

button:active {
  background-color: #2d6827; /* Even darker green on click */
  box-shadow: none; /* Remove shadow on click */
}

    </style>
</head>

<body>
 
  <h1>तुम्हाला कोणते कागदपत्र हवे आहेत?</h1>
  <button type="button" value="Go back!" onclick="history.back()">मागे जा</button>
<button onclick="window.location.href='Resident certificate/Resident1.php'">रहिवासी दाखला</button>
<button onclick="window.location.href='Merreige certificate/Marriage.php'">विवाह दाखला</button>
<button onclick="window.location.href='Birth Certificate/BirthMarathi.php'">जन्म दाखला</button>
<button onclick="window.location.href='Death certificate/DeathMarathi.php'">मृत्यू दाखला</button>



    
</body>
</html>