<?php

$dbServerName = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "student_management_system";

$conn = mysqli_connect($dbServerName, $dbUsername, $dbPassword, $dbName) or die("unable");

echo "great";
?>