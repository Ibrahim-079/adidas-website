<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Adidas - Form Submission</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f1f1f1;
      margin: 0;
      padding: 0;
    }

    .container {
      max-width: 600px;
      margin: 50px auto;
      background-color: white;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }

    h2 {
      color: #333;
      text-align: center;
    }

    p {
      font-size: 18px;
      color: #333;
      margin-bottom: 10px;
    }

    .back-link {
      display: block;
      text-align: center;
      margin-top: 20px;
      text-decoration: none;
      color: #000;
      font-weight: bold;
    }

    .back-link:hover {
      color: #555;
    }
  </style>
</head>
<body>

  <div class="container">
    <h2>Form Submission Result</h2>

    <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars($_POST["name"]);
        $email = htmlspecialchars($_POST["email"]);
        $experience = (int)$_POST["experience"];
        $bonus = $experience * 1000; // Simple bonus calculation

        echo "<p><strong>Name:</strong> $name</p>";
        echo "<p><strong>Email:</strong> $email</p>";
        echo "<p><strong>Experience:</strong> $experience years</p>";
        echo "<p><strong>Expected Bonus:</strong> $$bonus</p>";
      } else {
        echo "<p>No data submitted.</p>";
      }
    ?>

    <a class="back-link" href="form.html">← Back to Form</a>
  </div>

</body>
</html>
