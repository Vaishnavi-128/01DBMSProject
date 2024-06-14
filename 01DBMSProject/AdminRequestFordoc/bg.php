<?php
/*
// Database connection parameters
$servername = "localhost"; // Change this if your MySQL server is on a different host
$username = "root"; // Your MySQL username
$password = "root"; // Your MySQL password
$dbname = "documents"; // Your MySQL database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from the form
$nameOfChild = $_POST['name'];
$area = $_POST['area'];
$taluka = $_POST['tal'];
$district = $_POST['dis'];
$DOB = $_POST['date'];
$gender = $_POST['gender'];
$placeOfBirth = $_POST['placeb'];
$nameOfMother = $_POST['mother'];
$nameOfFather = $_POST['father'];
$AddressOfParent = $_POST['address1'];
$PermenentAddress = $_POST['address2'];
$DateOfIssue = $_POST['date2'];
$DateOfReg = $_POST['r'];

// Insert data into the birthcertificate table
$sql = "INSERT INTO birthcertificate (id, nameOfChild, area, taluka, district, DOB, gender, placeOfBirth, nameOfMother, nameOfFather, AddressOfParent, PermenentAddress, DateOfIssue, DateOfReg, status)
VALUES (NULL, '$nameOfChild', '$area', '$taluka', '$district', '$DOB', '$gender', '$placeOfBirth', '$nameOfMother', '$nameOfFather', '$AddressOfParent', '$PermenentAddress', '$DateOfIssue', '$DateOfReg',NULL)";

if ($conn->query($sql) === TRUE) {
    header("Location: popup.html");
} else {
    header("Location: wrongPopup.html");
}

// Close the database connection
$conn->close();
*/

// Database connection parameters
$servername = "localhost"; // Change this if your MySQL server is on a different host
$username = "root"; // Your MySQL username
$password = "root"; // Your MySQL password
$dbname = "documents"; // Your MySQL database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// Check form ID
$form_id = isset($_POST['form_id']) ? $_POST['form_id'] : '';

if ($form_id == 'f1') 
{
	
// Fetch data from the form
$nameOfChild = $_POST['name'];
$area = $_POST['area'];
$taluka = $_POST['tal'];
$district = $_POST['dis'];
$DOB = $_POST['date'];
$gender = $_POST['gender'];
$placeOfBirth = $_POST['placeb'];
$nameOfMother = $_POST['mother'];
$nameOfFather = $_POST['father'];
$AddressOfParent = $_POST['address1'];
$PermenentAddress = $_POST['address2'];
$DateOfIssue = $_POST['date2'];
$DateOfReg = $_POST['r'];
$email = $_POST['email'];
    // Insert data into the birthcertificate table
    $sql = "INSERT INTO birthcertificate (id, nameOfChild, area, taluka, district, DOB, gender, placeOfBirth, nameOfMother, nameOfFather, AddressOfParent, PermenentAddress, DateOfIssue, DateOfReg, status,email)
    VALUES (NULL, '$nameOfChild', '$area', '$taluka', '$district', '$DOB', '$gender', '$placeOfBirth', '$nameOfMother', '$nameOfFather', '$AddressOfParent', '$PermenentAddress', '$DateOfIssue', '$DateOfReg', NULL,'$email')";

    if ($conn->query($sql) === TRUE) {
        header("Location: popup.html");
    } else {
        header("Location: wrongPopup.html");
    }
} else if ($form_id == 'f2') {
	
// Fetch data from the form
$nameOfChild = $_POST['name'];
$area = $_POST['area'];
$taluka = $_POST['tal'];
$district = $_POST['dis'];
$DOB = $_POST['date'];
$gender = $_POST['gender'];
$placeOfBirth = $_POST['placeb'];
$nameOfMother = $_POST['mother'];
$nameOfFather = $_POST['father'];
$AddressOfParent = $_POST['address1'];
$PermenentAddress = $_POST['address2'];
$DateOfIssue = $_POST['date2'];
$DateOfReg = $_POST['r'];
$email = $_POST['email'];
    // Insert data into the deathcertificate table
    $causeOfDeath = $_POST['cause'];
    $addressOfDeceased = $_POST['address1'];
    $permanentAddress = $_POST['address2'];
    
    $sql = "INSERT INTO deathcertificate (nameOfDeceased, Area, taluka, district, dateOfDeath, gender, placeOfDeath, nameOfMother, causeOfDeath, nameOfFather, addressOfDeceased, permanentAddress, DateOfIssue, DateOfreg,status,email)
    VALUES ('$nameOfChild', '$area', '$taluka', '$district', '$DOB', '$gender', '$placeOfBirth', '$nameOfMother', '$causeOfDeath', '$nameOfFather', '$addressOfDeceased', '$permanentAddress', '$DateOfIssue', '$DateOfReg',NULL,'$email')";

    if ($conn->query($sql) === TRUE) {
        header("Location: popup.html");
    } else {
        header("Location: wrongPopup.html");
    }
}
else if ($form_id == 'f3') {
    $nameOfHusband = $_POST['Name'];
    $nameOfWife = $_POST['Name2'];
    $marriageDate = $_POST['date'];
    $office = $_POST['office'];
    $taluka = $_POST['taluka'];
    $district = $_POST['District'];
    $adhar_card_husband = $_POST['Adhar1'];
    $adhar_card_wife = $_POST['Adhar2'];
    $place = $_POST['Place'];
    $email = $_POST['email'];

    if (!preg_match('/^\d{12}$/', $adhar_card_husband) || !preg_match('/^\d{12}$/', $adhar_card_wife)) {
        // Redirect with error message if Aadhar card numbers are invalid
        echo "Invalid Adhar card";
        exit();
    }

    $sql = "INSERT INTO marriagecertificate (office, taluka, district, marriageDate, husbandName, wifeName, adhar_card_husband, adhar_card_wife, place,status,email)
    VALUES ('$office', '$taluka', '$district', '$marriageDate', '$nameOfHusband', '$nameOfWife', '$adhar_card_husband', '$adhar_card_wife', '$place',NULL,'$email')";

if ($conn->query($sql) === TRUE) {
    header("Location: popup.html");
} else {
    header("Location: wrongPopup.html");
}

}

else if ($form_id == 'f4') {
    $office = $_POST['office'];
    $taluka = $_POST['taluka'];
    $District = $_POST['District'];
    $date = $_POST['date'];
    $Name = $_POST['Name'];
    $Adhar = $_POST['Adhar'];
    $village = $_POST['village'];
    $Place = $_POST['Place'];
    $email = $_POST['email'];

    // Insert data into the residentcertificate table
    $sql = "INSERT INTO residentcertificate (office, taluka, district, date, Name, AdharCard, village, Place,email)
    VALUES ('$office', '$taluka', '$District', '$date', '$Name', '$Adhar', '$village', '$Place','$email')";

    if ($conn->query($sql) === TRUE) {
        header("Location: popup.html");
    } else {
        header("Location: wrongPopup.html");
    }
}

// Close the database connection
$conn->close();



?>
