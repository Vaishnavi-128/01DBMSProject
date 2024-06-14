
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php

$link = mysqli_connect("localhost", "root", "root", "complaint");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
$sql = "DELETE FROM complaints3 WHERE name='Revati Nimbalkar'";
if(mysqli_query($link, $sql)){
    echo "Records were deleted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
</body>
</html>