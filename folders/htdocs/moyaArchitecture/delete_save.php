<?php
$id  = $_GET["thisId"];
// $userN  = $_GET["thisUser"];
// $passW  = $_GET["thisPass"];
//$passW  = $_GET["thisPass"];

////specifying the credentials for connection
//$servername = "192.168.254.100";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sd204";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "DELETE FROM  Mogamitay  WHERE id = '".$id."'";

if ($conn->query($sql) === TRUE) {
  echo "New record deleted successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


?>