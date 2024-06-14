<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Death Certificate Details</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Custom styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border: 1px solid #ddd; /* Add border */
        }
        h2 {
            color: #643b9f;
            margin-bottom: 20px;
        }
        p {
            margin-bottom: 10px;
        }
        .label {
            font-weight: bold; /* Make the label names bold */
        }
        .btn {
            padding: 8px 16px;
            font-size: 14px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
        }
        .btn-primary {
            background-color: #643b9f;
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        // Database connection
        $servername = "localhost";
        $username = "root";
        $password = "root";
        $dbname = "documents";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }

        // Fetch data based on ID passed through URL parameter
        if(isset($_GET['id'])) {
            $id = $_GET['id'];

            // Fetch details of death certificate with the given ID
            $sql = "SELECT * FROM deathcertificate WHERE id=$id";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                // Display all details here
                echo "<h2>Death Certificate Details</h2>";
                echo "<p><span class='label'>Name of Deceased:</span> " . $row["nameOfDeceased"] . "</p>";
                echo "<p><span class='label'>Area:</span> " . $row["Area"] . "</p>";
                echo "<p><span class='label'>Taluka:</span> " . $row["taluka"] . "</p>";
                echo "<p><span class='label'>District:</span> " . $row["district"] . "</p>";
                echo "<p><span class='label'>Date of Death:</span> " . $row["dateOfDeath"] . "</p>";
                echo "<p><span class='label'>Gender:</span> " . $row["gender"] . "</p>";
                echo "<p><span class='label'>Place of Death:</span> " . $row["placeOfDeath"] . "</p>";
                echo "<p><span class='label'>Name of Mother:</span> " . $row["nameOfMother"] . "</p>";
                echo "<p><span class='label'>Cause of Death:</span> " . $row["causeOfDeath"] . "</p>";
                echo "<p><span class='label'>Name of Father:</span> " . $row["nameOfFather"] . "</p>";
                echo "<p><span class='label'>Address of Deceased:</span> " . $row["addressOfDeceased"] . "</p>";
                echo "<p><span class='label'>Permanent Address:</span> " . $row["permanentAddress"] . "</p>";
                echo "<p><span class='label'>Date of Issue:</span> " . $row["DateOfIssue"] . "</p>";
                echo "<p><span class='label'>Date of Registration:</span> " . $row["DateOfreg"] . "</p>";
                // Add button to create document
                echo "<a href='deathcertificate.php?id=" . $row["id"] . "' class='btn btn-primary'>Create Document</a>";
            } else {
                echo "No details found.";
            }
        } else {
            echo "Invalid request.";
        }
        $conn->close();
        ?>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
