<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbName = "doan2";

$conn = mysqli_connect($servername, $username, $password, $dbName);

if ($conn->connect_error) {
    
    die("Conencttion failed: ".$conn->connect_error);
}