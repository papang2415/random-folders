<?php
$userN = "Jose";
$passW = "Rizal";

$str1 = "INSERT INTO users (Username, Password, Status) VALUES ('";
$str2 = $userN;
$str3 = "', '";
$str4 = $passW;
$str5 = "', 'enabled')";


$sql = $str1.$str2.$str3.$str4.$str5;
echo $sql;
?>






