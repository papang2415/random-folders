<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "papang";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT UserID, Username, Status FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["UserID"].  " || Name: " . $row["Username"] .  " || Status: " . $row["Status"] ."<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>