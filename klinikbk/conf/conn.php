<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="poli_bk";

// Create Connection
$conn = mysqli_connect($servername, $username, $password, $db);

// Check Connection
if (!$conn){
    die("Connection Failed: " . mysqli_connect_error());
}
?>