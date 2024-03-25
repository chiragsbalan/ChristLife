<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$database = "christlife"; 

$conn = new mysqli($servername, $username, $password, $database);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$class = $_POST['class'];
$name = $_POST['name'];
$reg_number = $_POST['reg_number'];
$sports = $_POST['sports'];
$gender = $_POST['gender'];

$sql = "INSERT INTO sports (regno, name, class, sport, gender) VALUES ('$reg_number','$name','$class','$sports','$gender')";


if ($conn->query($sql)===TRUE) {
    echo "Record inserted successfully";
} else {
    echo "Error creating user:" . $conn->error;
}


$conn->close();
?>
