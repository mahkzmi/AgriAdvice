<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agriculture Project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            direction: ltr;
            text-align: center;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #4CAF50;
            color: white;
            padding: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        header h1 {
            margin: 0;
            font-size: 2.5rem;
        }
        nav {
            height: 100px;
            margin-top: 100px;
            background-color: #ffffff;
            padding: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        nav a {
            display: inline-block;
            margin: 10px 20px;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            border-radius: 25px;
            font-size: 1.1rem;
            transition: all 0.3s ease;
        }
        nav a:hover {
            background-color: #3e8e41;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.15);
        }
        main {
            padding: 40px 20px;
        }
        main p {
            font-size: 1.2rem;
            color: #555;
        }
        footer {
            background-color: #333;
            color: white;
            padding: 10px;
            position: absolute;
            bottom: 0;
            width: 100%;
            text-align: center;
            font-size: 0.9rem;
        }
    </style>
</head>
<body>
    <header>
        <h1>Agriculture Advisory</h1>
    </header>
    <nav>
        <a href="consultant.php">Online Consultation</a>
        <a href="prediction.php">Agriculture Prediction</a>
        <a href="database_display.php">Soil & Plant Data</a>
        <a href="insert_data.php">Update Database</a>
    </nav>
    <main>
        <p>Welcome to the Agriculture Advisory and Prediction System. Use our tools to improve your farming practices and soil management.</p>
    </main>
    <footer>
        © 2025 - Agriculture Project. Designed by Me.
    </footer>
</body>
</html>
