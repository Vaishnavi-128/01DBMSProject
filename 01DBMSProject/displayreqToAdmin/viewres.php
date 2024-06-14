<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resident Certificate Details</title>
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

            // Fetch details of resident certificate with the given ID
            $sql = "SELECT * FROM residentcertificate WHERE id=$id";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                // Display all details here
                echo "<h2>Resident Certificate Details</h2>";
                echo "<p><span class='label'>Office:</span> " . $row["office"] . "</p>";
                echo "<p><span class='label'>Taluka:</span> " . $row["taluka"] . "</p>";
                echo "<p><span class='label'>District:</span> " . $row["district"] . "</p>";
                echo "<p><span class='label'>Date:</span> " . $row["date"] . "</p>";
                echo "<p><span class='label'>Name:</span> " . $row["name"] . "</p>";
                echo "<p><span class='label'>Adhar Card:</span> " . $row["AdharCard"] . "</p>";
                echo "<p><span class='label'>Village:</span> " . $row["village"] . "</p>";
                echo "<p><span class='label'>Place:</span> " . $row["place"] . "</p>";
                echo "<a href='residentcertificate.php?id=" . $row["id"] . "' class='btn btn-primary'>Create Document</a>";
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
