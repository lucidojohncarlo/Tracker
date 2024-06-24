<?php
//$servername = "localhost";
//$username = "root"; // Your database username
//$password = ""; // Your database password
//$dbname = "budget_tracker"; // Your database name

$servername = "lucidojohncarlo.mysql.database.azure.com"; // Azure MySQL server hostname
$username = "lucidojohncarlo"; // Azure MySQL username
$password = "Jhared123"; // Azure MySQL password
$dbname = "budget_tracker"; // Azure MySQL database name

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
