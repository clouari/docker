<?php
$servername = "host.docker.internal";
$username = "Jung";
$password = "dahui";
$mysql_database = 'myDB';
$mysql_port = '52000';
$mysql_charset = 'UTF8';

// Create connection
$conn = new mysqli($servername, $username, $password,$mysql_database, $mysql_port, $mysql_charset);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

//mysql_port 를 10000으로 해서 연습 해 보기
?>