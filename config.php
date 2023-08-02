<?php
  $host = "localhost"; // Your database host
$username = "root"; // Your database username
$password = "root"; // Your database password
$dbname = "cafe"; // Your database name


$conn = mysqli_connect($host, $username, $password, $dbname);

if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}
?>