<?php 
$server_name = 'localhost';
$username = 'gaxin';
$password = 'gaxin';
$dbname = 'gaxin';

$conn = new mysqli($server_name, $username, $password, $dbname);

if ($conn->connect_error) {
  die("connection failed" . $conn->connect_error);
}

$conn->query('SET NAMES UTF8');
$conn->query('SET time_zone = "+8:0"');
?>