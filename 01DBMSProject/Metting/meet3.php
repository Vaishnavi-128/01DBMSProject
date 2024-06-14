<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
@keyframes marquee {
    0%   { transform: translateX(0); }
    100% { transform: translateX(-100%); }
  }


</style>
</head>
<body>

<?php
// Connect to database
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "meeting";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get upcoming meetings
$current_time = time();
$upcoming_meetings = array();


$sql = "SELECT * FROM schedule";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    $meetingDate = $row['date1'];
    $meetingTime = $row['time1'];
    $meetingtitle= $row['title'];
    $place = $row['location'];
    $agenda = $row['agenda'];

    $message ="Meeting on $meetingtitle date : $meetingDate at $meetingTime in $place agenda of the meeting is $agenda";
}
}

// Display the notification
if ($row) {
  echo '<div style="width: 100%; height: 50px; overflow: hidden; class="noti"><div style="display: inline-block; white-space: nowrap; padding-right: 100%;" class="notification">New meeting scheduled for ' . $row['date1'] . ' at ' . $row['time1'] . '</div></div>';
}

?>
<div id="scrolling-container" style=" top: 60px; left: 0; width: 100%; background-color: white; padding-top: 30px; box-sizing: border-box;">
  <div style="width: 100%; height: 50px; overflow: hidden;">
    <div style="display: inline-block; font-size:20px;white-space: nowrap; padding-right: 100%; animation: marquee 20s linear infinite;">
      <?php echo $message; ?>
    </div>
  </div>
</div>
<script>
  // Delay the display of the scrolling text by 2 seconds
  setTimeout(function() {
    document.getElementById("scrolling-container").style.display = "block";
  }, 2);
  
  // Reset the animation when it ends
  var scrollingText = document.getElementById("scrolling-text");
  scrollingText.addEventListener("animationend", function() {
    scrollingText.style.animation = "none";
    scrollingText.offsetHeight; /* trigger reflow */
    scrollingText.style.animation = "marquee 20s linear infinite";
  });
</script>



</body>
</html>

