<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Grade Result</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #fafafa;
      margin: 0;
      padding: 0;
      text-align: center;
    }

    .result-box {
      max-width: 600px;
      margin: 50px auto;
      padding: 30px;
      background-color: white;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }

    h2 {
      color: #333;
    }

    a {
      text-decoration: none;
      display: inline-block;
      margin-top: 20px;
      color: black;
      font-weight: bold;
    }

    a:hover {
      color: #555;
    }
  </style>
</head>
<body>

  <div class="result-box">
    <?php
      $name = $_POST['student'];
      $marks = (int)$_POST['marks'];

      if ($marks >= 90) {
        $grade = "A+";
      } elseif ($marks >= 80) {
        $grade = "A";
      } elseif ($marks >= 70) {
        $grade = "B";
      } elseif ($marks >= 60) {
        $grade = "C";
      } else {
        $grade = "F";
      }

      echo "<h2>$name, your grade is <span style='color: green;'>$grade</span>.</h2>";
    ?>
    <a href="../grading.html">← Back to Form</a>
  </div>

</body>
</html>
