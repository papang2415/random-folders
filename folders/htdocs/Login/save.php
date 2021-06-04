<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "papang";

$userN = $_GET["myname"];
$passW = $_GET["myPass"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO users (Username, Passwords, Status)
VALUES ('".$userN."', '".$passW."', 'enabled')";

// $sql = "UPDATE users SET PasswordS = '".$passW."' where Username = '".$userN."' ";


if ($conn->query($sql) === TRUE) {
  echo "Operation Successful";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>