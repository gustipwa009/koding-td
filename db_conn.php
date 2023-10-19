<?php
$servername = "awsus.lailagustinet.my.id";
$username = "root";
$password = "Bebek@123";
$dbname = "phptd";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

?>
