<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['employee'];
    $hours = $_POST['hours'];
    $rate = $_POST['rate'];
    
    // Calculate the salary
    $salary = $hours * $rate;

    echo "<!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Salary Result</title>
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
                color: #4CAF50;
                font-weight: bold;
            }

            a:hover {
                color: #333;
            }
        </style>
    </head>
    <body>
        <div class='result-box'>
            <h2>$name, your salary is: $$salary</h2>
            <a href='../salary.html'>← Back to Form</a>
        </div>
    </body>
    </html>";
} else {
    echo "Invalid request method.";
}
?>
