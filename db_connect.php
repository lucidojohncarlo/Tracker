<?php
//$servername = "localhost";
//$username = "root"; // Your database username
//$password = ""; // Your database password
//$dbname = "budget_tracker"; // Your database name

$servername = "lucidojohncarlo.mysql.database.azure.com"; // Azure MySQL server hostname
$username = "lucidojohncarlo"; // Azure MySQL username
$password = "Jhared123"; // Azure MySQL password
$dbname = "budget_tracker"; // Azure MySQL database name
$port = 3306;

$ssl_cert_path = "/home/site/wwwroot/DigiCertGlobalRootCA.crt.pem";

$conn = mysqli_init();

mysqli_ssl_set($conn, NULL, NULL, $ssl_cert_path, NULL, NULL);

// Establish secure connection
if (!mysqli_real_connect($conn, $servername, $username, $password, $dbname, $port, NULL, MYSQLI_CLIENT_SSL)) {
    die("Connection failed: " . mysqli_connect_error());
}


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
