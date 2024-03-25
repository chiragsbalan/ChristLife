<?php
// Database connection
$servername = "localhost"; // Change this to your database servername
$username = "root"; // Change this to your database username
$password = ""; // Change this to your database password
$dbname = "christlife"; // Change this to your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Set parameters and execute
  $reg = $_POST["registerNumber"];
  $name = $_POST["name"];
  $email = $_POST["email"];
  $campus = $_POST["campus"];
  $event = $_POST["events"];

  $sql = "INSERT INTO events (reg, name, email, campus, event) VALUES ('$reg','$name','$email','$campus','$event')";
  if ($conn->query($sql) === TRUE) {
      echo "Registered for event successfully!";
  } else {
      echo "Error registering for event: " . $conn->error;
  }
}
?>
