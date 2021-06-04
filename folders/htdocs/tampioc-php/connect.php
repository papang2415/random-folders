<?php

$localhost = "localhost:3306";
$username = "root";
$password = "";
$dbname = "mentoringdb";

$con = new mysqli($localhost, $username, $password, $dbname);

if ($con->connect_error) {
    die("connection failed : " . $con->connect_error);
}
