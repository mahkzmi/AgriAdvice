<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Vazirmatn:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Vazirmatn', sans-serif;
            direction: ltr;
            text-align: left;
            padding: 20px;
            background-color: #f3f4f6;
            color: #374151;
        }
        .form-container {
            max-width: 700px;
            margin: auto;
            background: #ffffff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #16a34a;
            font-size: 1.8rem;
            margin-bottom: 1rem;
            text-align: center;
        }
        h2 {
            color: #0ea5e9;
            font-size: 1.4rem;
            margin-top: 1.5rem;
        }
        label {
            font-weight: 500;
        }
        .btn {
            font-weight: 500;
            border-radius: 8px;
        }
        .btn-success {
            background-color: #16a34a;
            border-color: #16a34a;
        }
        .btn-success:hover {
            background-color: #15803d;
            border-color: #15803d;
        }
        .btn-primary {
            background-color: #0ea5e9;
            border-color: #0ea5e9;
        }
        .btn-primary:hover {
            background-color: #0284c7;
            border-color: #0284c7;
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
    </style>
</head>
<body>

<div class="form-container">
    <h1>Add New Data</h1>

    <!-- Soil Registration Form -->
    <h2>Add New Soil</h2>
    <form action="insert_data.php" method="POST">
        <div class="mb-3">
            <label for="soil_type" class="form-label">Soil Type</label>
            <input type="text" class="form-control" id="soil_type" name="soil_type" placeholder="e.g., Clay" required>
        </div>
        <div class="mb-3">
            <label for="soil_ph" class="form-label">Soil pH</label>
            <input type="number" step="0.1" class="form-control" id="soil_ph" name="soil_ph" placeholder="e.g., 7.5" required>
        </div>
        <div class="mb-3">
            <label for="soil_nutrients" class="form-label">Soil Nutrients</label>
            <input type="text" class="form-control" id="soil_nutrients" name="soil_nutrients" placeholder="e.g., Nitrogen, Potassium" required>
        </div>
        <button type="submit" class="btn btn-success w-100" name="add_soil">Add Soil</button>
    </form>

    <hr>

    <!-- Plant Registration Form -->
    <h2>Add New Plant</h2>
    <form action="insert_data.php" method="POST">
        <div class="mb-3">
            <label for="plant_name" class="form-label">Plant Name</label>
            <input type="text" class="form-control" id="plant_name" name="plant_name" placeholder="e.g., Wheat" required>
        </div>
        <div class="mb-3">
            <label for="soil_id" class="form-label">Required Soil ID</label>
            <input type="number" class="form-control" id="soil_id" name="soil_id" placeholder="e.g., 1" required>
        </div>
        <div class="mb-3">
            <label for="plant_description" class="form-label">Plant Description</label>
            <textarea class="form-control" id="plant_description" name="plant_description" rows="3" placeholder="Short description about the plant" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary w-100" name="add_plant">Add Plant</button>
    </form>
</div>

<div class="text-center">
    <a href="index.php">Back to Home Page</a>
</div>

</body>
</html>
