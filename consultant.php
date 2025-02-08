<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Consultation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            direction: ltr;
            text-align: left;
            background-color: #f9f9f9;
            padding: 20px;
            font-family: 'Arial', sans-serif;
        }
        .container {
            max-width: 700px;
            margin: auto;
            background: #fff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #4CAF50;
            font-size: 2.5rem;
            margin-bottom: 20px;
            text-align: center;
        }
        .form-control, .btn-primary {
            border-radius: 8px;
        }
        .form-control {
            border: 1px solid #ddd;
            margin-bottom: 20px;
            padding: 15px;
        }
        .form-control:focus {
            border-color: #4CAF50;
            box-shadow: 0 0 5px rgba(76, 175, 80, 0.5);
        }
        .btn-primary {
            background-color: #4CAF50;
            border-color: #4CAF50;
            padding: 10px 20px;
            font-size: 1rem;
            width: 100%;
            transition: background-color 0.3s;
        }
        .btn-primary:hover {
            background-color: #45a049;
        }
        .answer {
            background: #e8f5e9;
            padding: 12px;
            border-radius: 8px;
            margin-top: 20px;
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
        .question {
            background: #f1f8e9;
            padding: 15px;
            margin-top: 15px;
            border-radius: 8px;
        }
        .question strong {
            color: #4CAF50;
        }
        .question small {
            color: #555;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Online Consultation</h1>
    <hr>
    <form method="POST" action="consultant.php">
        <label for="question">Enter your question:</label><br>
        <textarea id="question" name="question" class="form-control" rows="4" placeholder="Write your question..."></textarea><br>
        <input type="submit" name="submit" class="btn btn-primary" value="Submit Question">
    </form>
    
    <?php
    // Database connection
    $conn = new mysqli("localhost", "root", "", "agriculture_advice");

    // Check connection
    if ($conn->connect_error) {
        die("Database connection failed: " . $conn->connect_error);
    }

    // If form is submitted
    if (isset($_POST['submit'])) {
        $question = $_POST['question'];
        
        // Default response
        $response = "Default response: Your agricultural status has been evaluated based on soil and plant type.";

        // Store question and response in the database
        $sql = "INSERT INTO questions (question, response) VALUES ('$question', '$response')";
        if ($conn->query($sql) === TRUE) {
            echo "<div class='answer'>Your question has been submitted successfully. The response will be displayed shortly.</div>";
            
            // Send email to admin
            $to = "manager@example.com";  // Admin's email
            $subject = "New Question from User";
            $message = "A user has submitted a new question:\n\n" . $question;
            $headers = "From: no-reply@yourwebsite.com";

            // SMTP settings for Mailtrap
            ini_set("SMTP", "smtp.mailtrap.io");
            ini_set("smtp_port", "2525");
            ini_set("sendmail_from", "no-reply@yourwebsite.com");
            ini_set("sendmail_path", "/usr/sbin/sendmail -t -i");

            mail($to, $subject, $message, $headers);
        } else {
            echo "<div class='answer'>Error submitting question: " . $conn->error . "</div>";
        }
    }
    ?>

    <hr>
    <h3>Previous Questions:</h3>
    <?php
    // Fetch questions and responses
    $sql = "SELECT question, response, created_at FROM questions ORDER BY created_at DESC";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<div class='question'>
                    <strong>Question:</strong> " . $row['question'] . "<br>
                    <strong>Response:</strong> " . $row['response'] . "<br>
                    <small>Submitted at: " . $row['created_at'] . "</small>
                  </div><hr>";
        }
    } else {
        echo "<div class='answer'>No questions have been submitted yet.</div>";
    }

    // Close connection
    $conn->close();
    ?>
</div>

<a href="index.php">Back to Homepage</a>

</body>
</html>
