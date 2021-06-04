<?php

$name = "";
$address = "";

$db = mysqli_connect('localhost', 'root', '', 'crud');

if(isset($_POST['create'])){
    $name = $_POST['name'];
    $address = $_POST['address'];

    $query = "INSERT INTO  info (name, address)VALUES('$name','$address')";
    mysqli_query($db,$query);
    header ('location: index.php');

}