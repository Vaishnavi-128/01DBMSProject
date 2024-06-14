<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
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
            font-size:40px;
            text-align:center;
            margin-top: 20px;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        h3{
            color: #643b9f;
            font-size:25px;
            text-align:center;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color:#643b9f;
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
    </style>
</head>
<body>
<h2>Admin Dashboard</h2>
    <div class="container">
        <h3>Birth Certificates</h3>
        <table>
            <thead>
                <tr>
                    <th>Sr. No</th>
                    <th>Name</th>
                    <th>Status</th>
                    <th>Update Status</th>
                    <th>Sent Update</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php include 'fetch_birth.php'; ?>
            </tbody>
        </table>
        <!-- Repeat similar structure for other certificate types -->
    </div>

    <div class="container">
        <h3>Death Certificates</h3>
        <table>
            <thead>
                <tr>
                    <th>Sr. No</th>
                    <th>Name</th>
                    <th>Status</th>
                    <th>Update Status</th>
                    <th>Sent Update</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php include 'fetch_death.php'; ?>
            </tbody>
        </table>
        <!-- Repeat similar structure for other certificate types -->
    </div>

    <div class="container">
        <h3>Marriage Certificates</h3>
        <table>
            <thead>
                <tr>
                    <th>Sr. No</th>
                    <th>Name</th>
                    <th>Status</th>
                    <th>Update Status</th>
                    <th>Sent Update</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php include 'fetch_wedding.php'; ?>
            </tbody>
        </table>
        <!-- Repeat similar structure for other certificate types -->
    </div>

    <div class="container">
        <h3>Residence Certificates</h3>
        <table>
            <thead>
                <tr>
                    <th>Sr. No</th>
                    <th>Name</th>
                    <th>Status</th>
                    <th>Update Status</th>
                    <th>Sent Update</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php include 'fetch_res.php'; ?>
            </tbody>
        </table>
        <!-- Repeat similar structure for other certificate types -->
    </div>
</body>
</html>
