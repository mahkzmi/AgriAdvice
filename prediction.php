<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agricultural Prediction</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            direction: ltr;
            text-align: left;
            background-color: #f1f5f9;
            font-family: Arial, sans-serif;
            padding: 40px;
        }
        .container {
            max-width: 700px;
            margin: auto;
            background: #ffffff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #1d4ed8;
            font-weight: bold;
        }
        .result {
            background: #e0f7fa;
            padding: 15px;
            border-radius: 8px;
            margin-top: 15px;
            font-weight: bold;
            color: #004d40;
        }
        label {
            font-weight: bold;
        }
        .form-select, .btn {
            border-radius: 8px;
        }
        .btn-success {
            background-color: #16a34a;
            border-color: #16a34a;
            font-weight: bold;
            padding: 10px 20px;
        }
        .btn-success:hover {
            background-color: #15803d;
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
        hr {
            border-top: 2px solid #e5e7eb;
            margin: 20px 0;
        }
    </style>
</head>
<body>

<div class="container">
    <h1 class="text-center">Agricultural Prediction</h1>
    <hr>
    <form method="POST" action="prediction.php">
        <div class="mb-3">
            <label for="soil" class="form-label">Soil Type:</label>
            <select class="form-select" id="soil" name="soil" required>
                <option value="" disabled selected>Select...</option>
                <option value="sandy">Sandy Soil</option>
                <option value="clayey">Clayey Soil</option>
                <option value="loamy">Loamy Soil</option>
                <option value="dry">Dry Soil</option>
                <option value="wet">Wet Soil</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="plant" class="form-label">Plant Type:</label>
            <select class="form-select" id="plant" name="plant" required>
                <option value="" disabled selected>Select...</option>
                <option value="wheat">Wheat</option>
                <option value="rice">Rice</option>
                <option value="corn">Corn</option>
                <option value="tomato">Tomato</option>
                <option value="pumpkin">Pumpkin</option>
            </select>
        </div>

        <button type="submit" class="btn btn-success w-100">Predict</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $soil = $_POST['soil'];
        $plant = $_POST['plant'];
        $prediction = '';

        if ($soil === 'sandy' && $plant === 'wheat') {
            $prediction = 'Sandy soil is not suitable for wheat. Additional irrigation and soil enrichment are needed.';
        } 
        if ($soil == "dry") {
            $prediction .= "The soil is dry; it is recommended to irrigate more. ";
        }
        if ($plant == "wheat") {
            $prediction .= "For wheat cultivation, ample sunlight and proper irrigation are essential. ";
        }
        elseif ($soil === 'clayey' && $plant === 'rice') {
            $prediction = 'Clayey soil is very suitable for rice. Use nitrogen-based fertilizers.';
        }
        elseif ($soil === 'loamy' && $plant === 'corn') {
            $prediction = 'Loamy soil is excellent for corn. Regular irrigation is recommended.';
        }
        else {
            $prediction = 'Please review your soil and plant conditions. More detailed suggestions are needed.';
        }

        if ($prediction) {
            echo "<div class='result'><strong>Prediction:</strong> $prediction</div>";
        }
    }
    ?>
</div>
<a href="index.php">Back to Home Page</a>

</body>
</html>
