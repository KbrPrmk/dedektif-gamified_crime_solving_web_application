<?php
// Example DB config (do not put real credentials in the repository)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dedektif";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
