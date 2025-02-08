<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soil and Plant Information</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f4f6f9;
            font-family: 'Arial', sans-serif;
            margin-top: 20px;
        }
        h1 {
            color: #4CAF50;
            font-size: 2.5rem;
            font-weight: bold;
            text-align: center;
        }
        h2 {
            color: #333;
            margin-top: 40px;
            font-size: 1.8rem;
            text-align: center;
        }
        .table {
            margin-top: 20px;
            border-collapse: collapse;
        }
        .table th, .table td {
            padding: 15px;
            text-align: center;
        }
        .table th {
            background-color: #4CAF50;
            color: white;
        }
        .table td {
            background-color: #fff;
            border-bottom: 1px solid #ddd;
        }
        .table tr:hover td {
            background-color: #f1f1f1;
        }
        a {
            display: block;
            text-decoration: none;
            color: #fff;
            background-color: #007BFF;
            padding: 12px;
            text-align: center;
            font-size: 1.1rem;
            border-radius: 8px;
            margin-top: 30px;
            width: 200px;
            margin: 30px auto;
            transition: background-color 0.3s ease;
        }
        a:hover {
            background-color: #0056b3;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Soil and Plant Database</h1>

        <h2>Soil Information</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Soil Type</th>
                    <th>pH</th>
                    <th>Nutrients</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $conn = new mysqli("localhost", "root", "", "agriculture_advice");
                if ($conn->connect_error) {
                    die("Error connecting to database: " . $conn->connect_error);
                }

                $sql = "SELECT * FROM soils";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>{$row['id']}</td>
                                <td>{$row['type']}</td>
                                <td>{$row['ph']}</td>
                                <td>{$row['nutrients']}</td>
                              </tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>No data available.</td></tr>";
                }
                ?>
            </tbody>
        </table>

        <h2>Plant Information</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Plant Name</th>
                    <th>Soil ID</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM plants";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>{$row['id']}</td>
                                <td>{$row['name']}</td>
                                <td>{$row['soil_id']}</td>
                                <td>{$row['description']}</td>
                              </tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>No data available.</td></tr>";
                }
                $conn->close();
                ?>
            </tbody>
        </table>

        <a href="index.php">Back to Home Page</a>
    </div>
</body>
</html>
