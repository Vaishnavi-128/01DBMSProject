<!DOCTYPE html>
<html>
<head>
	<title>My Webpage</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- CSS styles can be included in a <style> tag or in an external file -->
	<style>
		img {
			width: 50%; /* set the image width to 50% of the container */
			display: block; /* make the image a block element to center it */
			margin: 0 auto; /* center the image horizontally */
			border: 1px solid black; /* add a border to the image */
		}
		h1{
  color:#643b9f;
  font-family:"Monotype Corsiva";
  font-size: 50px; 
  text-align:center;
}



button {
  background-color: #643b9f; /* Green background color */
  border: none; /* Remove button border */
  color: white; /* White text color */
  padding: 25px 50px; /* Padding around text */
  text-align: center; /* Center text horizontally */
  text-decoration: none; /* Remove text underline */
  display: inline-block; /* Display as a block element */
  font-size: 20px; /* Font size */
  font-family:"Segoe UI";
  float : center;
  margin-top:30px;
  margin-left: 350px; /* Add some margin */
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
@media only screen and (max-width: 600px) {
  button {
  background-color: purple; /* Green background color */
  border: none; /* Remove button border */
  color: white; /* White text color */
  padding: 10px 15px; /* Padding around text */
  text-align: center; /* Center text horizontally */
  text-decoration: none; /* Remove text underline */
  display: inline-block; /* Display as a block element */
  font-size: 12px; /* Font size */
  font-family:"Segoe UI";
  margin-top:30px;
  margin-left: 80px; /* Add some margin */
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
img {
			width: 200px; /* set the image width to 50% of the container */
      height: 200px;
      size:200px;
			display: block; /* make the image a block element to center it */
			margin: 0 auto; /* center the image horizontally */
			border: 1px solid black; /* add a border to the image */
		}
}
	</style>
</head>
<body>
	<h1>देणगी</h1>
	
	<img src="veet.jpg" alt="My Image">
  <button type="button." class="btn btn-light btn-lg" value="Go back!" onclick="history.back()">मागे जा</button>
  <button type="button" class="btn btn-outline-light" onclick="window.location.href = 'Doner2.php';">पावती तयार करा</button>
</body>
</html>