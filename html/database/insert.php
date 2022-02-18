<?php
$servername = "host.docker.internal";
$username = "Jung";
$password = "dahui";
$mysql_database = 'myDB';
$mysql_port = '52000';
$mysql_charset = 'UTF8';

// Create connection
$conn = new mysqli($servername, $username, $password,$mysql_database, $mysql_port, $mysql_charset);

$sql = "
INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Jung', 'dahui', 'john@example.com'
)";

$conn->query($sql);

$conn->close();


?>