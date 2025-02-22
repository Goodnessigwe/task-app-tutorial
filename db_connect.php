<?php
//Variable declaration
$servername = "localhost";
$username = "root";
$password = "";
$database = "task-manager-tutorial";

//Database connection
$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
