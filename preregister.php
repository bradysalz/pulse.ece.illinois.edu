<?php
$servername = "pulseece.web.engr.illinois.edu";
$username = "pulseece_admin16";
$password = "pulseECE123";
$database = "pulseece_2016";
$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error)
{
    echo "connection error";
    die("Connection failed: " . $conn->connect_error);
}

var_dump($_POST);
$email = $_POST["email"];

$query = 'INSERT INTO preregister (email) VALUES("'.$email.'")';
$conn->query($query);

?>
