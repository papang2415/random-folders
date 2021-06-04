<?php
$name = '';
$address = '';
$id = 0;
$edit_phase = false;    
session_start();
$db = mysqli_connect('192.168.0.17', 'emelisa', 'rafols', 'daryllcrud');
if(isset($_POST['create'])){ 
    $name = $_POST['username'];
    $address = $_POST['password'];
    $sql = "INSERT INTO  info (username, password)VALUES('$name','$address')";
    mysqli_query($db,$sql);
    $_SESSION['msg'] = "Added Successfully";
    header ('location: index.php');
}
if(isset($_POST['update'])){
    $name = $_POST['username'];
    $address = $_POST['password'];
    $id =$_POST['id'];

    mysqli_query($db, " UPDATE info SET username = '$name', password = '$address'  WHERE id = $id");
    $_SESSION['msg'] = "Updated Successfully";
    header ('location: index.php');
}
if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    mysqli_query($db, "DELETE FROM info WHERE id = '$id' ");
    $_SESSION['msg'] = "Deleted Successfully";
    header ('location: index.php');
}
$result = mysqli_query($db,"SELECT * FROM info");
?>