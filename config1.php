<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "crudsystem2";

// Create the database connection
$conn = new mysqli($servername, $username, $password, $database);

// Check whether the connection was successful or not
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}

?>