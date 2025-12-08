<?php

$server   = "localhost";
$username = "bluebird_user";
$password = "password";
$database = "bluebirdhotel";

// Create connection
$conn = mysqli_connect($server, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// echo "Connected successfully"; // (optional)

?>
