<?php
//DATABASE CONNCTION
$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "binzo";

// Create connection
$conn = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
