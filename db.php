<?php

$serveraddr = "degig.se";
$username = "03bvi01";
$password = "Kakatus123!";

$connection = new mysqli($serveraddr, $username, $password);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
?>