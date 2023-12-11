<?php 

$host = "localhost";
$dbname = "login_db";
$username = "root";
$password = "root";

$mysqli = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($mysqli->connect_errno) {
    die("Connection error: " . $mysqli->connect_errno);
}

return $mysqli;