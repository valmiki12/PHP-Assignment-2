<?php
$host = "172.31.22.43";
$username = "Valmiki200524559";
$password = "4VyvxiRXYt";
$dbname = "Valmiki200524559";

// Create a database connection
$conn=mysqli_connect($host, $username, $password, $dbname);
// Check if the connection was successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
