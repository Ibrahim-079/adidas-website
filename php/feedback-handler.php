<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = htmlspecialchars($_POST["name"]);
  $email = htmlspecialchars($_POST["email"]);
  $rating = htmlspecialchars($_POST["rating"]);
  $comments = htmlspecialchars($_POST["comments"]);

  echo "<h1>Thanks for your feedback, $name!</h1>";
  echo "<p>Email: $email</p>";
  echo "<p>Rating: $rating star(s)</p>";
  echo "<p>Comments: $comments</p>";
  echo "<a href='../feedback.html'>Go Back</a>";
} else {
  echo "Invalid request.";
}
?>
