<?php
$servername = "127.0.0.1";
$username = "root";
$password = "Rootpass@123";

// Create connection
$con = new mysqli($servername, $username, $password,"bus");

// Check connection
if (!$con) {
  die("Connection failed: " . $con->connect_error);
}
?>