
<?php

        $username = $_POST['username'];
        $email = $_POST['email'];
        $pass = $_POST['password'];
        
if (!empty($username)){
if (!empty($email)){
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "loginPage";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO users (username, email, password) 
VALUES ('$username', '$email', '$pass')";
if ($conn->query($sql)){
header('location:userpage.php');
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{
echo "Password should not be empty";
die();
}
}
else{
echo "Username should not be empty";
die();
}
?>
 
