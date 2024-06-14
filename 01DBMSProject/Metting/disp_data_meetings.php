<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meeting Information</title>
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
        }
        h2 {
            color: #643b9f;
            font-size: 40px;
            text-align: center;
            margin-top: 20px;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #643b9f;
            color: #fff;
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
        .btn-primary:hover {
            background-color: #0056b3;
        }
        .btn-danger {
            background-color: #dc3545;
            color: #fff;
        }
        .btn-danger:hover {
            background-color: #bd2130;
        }
        /* Added spacing between buttons */
        .btn-container {
            display: flex;
            justify-content: space-between;
        }
        .btn-primary + .btn-danger {
            margin-left: 10px; /* Adjust spacing as needed */
        }
    </style>
</head>
<body>
    <h2>Meeting Information</h2>
    <div class="container">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Location</th>
                    <th>Agenda</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Database connection parameters
                $host = "localhost";
                $username = "root";
                $password = "root"; // Assuming no password is set
                $database = "meeting";

                // Create connection
                $mysqli = new mysqli($host, $username, $password, $database);

                // Check connection
                if ($mysqli->connect_error) {
                    die("Connection failed: " . $mysqli->connect_error);
                }

                // Fetch data from "schedule" table
                $sql = "SELECT * FROM schedule";
                $result = $mysqli->query($sql);

                // Check if any rows were returned
                if ($result->num_rows > 0) {
                    // Output data of each row
                    while($row = $result->fetch_assoc()) {
                        // Check if the date, time, and status fields are set
                        $date = isset($row["date1"]) ? $row["date1"] : "N/A";
                        $time = isset($row["time1"]) ? $row["time1"] : "N/A";
                        $status = isset($row["Status"]) ? $row["Status"] : "N/A";

                        echo "<tr>";
                        echo "<td>" . $row["id"] . "</td>";
                        echo "<td>" . $row["title"] . "</td>";
                        echo "<td>" . $date . "</td>";
                        echo "<td>" . $time . "</td>";
                        echo "<td>" . $row["location"] . "</td>";
                        echo "<td>" . $row["agenda"] . "</td>";
                        echo "<td>" . $status . "</td>";
                        echo "<td class='btn-container'>
                               <form action='update_meeting.php' method='post'>
    <input type='hidden' name='update_id' value='" . $row["id"] . "'>
    <button type='submit' class='btn btn-primary'>Update</button>
</form>

                                <form action='delete_meeting.php' method='post'>
                                    <input type='hidden' name='delete_id' value='" . $row["id"] . "'>
                                    <button type='submit' class='btn btn-danger' onclick='return confirm(\"Are you sure you want to delete meeting with ID " . $row["id"] . "?\")'>Delete</button>
                                </form>
                              </td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='8'>No meetings scheduled</td></tr>";
                }

                // Close database connection
                $mysqli->close();
                ?>
            </tbody>
        </table>
        <div style="text-align: center; margin-top: 20px;">
            <a href="C:\xampp\htdocs\Final\AdminPanel1.html" class="btn btn-primary">Back</a>
        </div>
    </div>
</body>
</html>
