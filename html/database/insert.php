<?php
include "conn.php";

$sql = "
INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Jung', 'dahui', 'john@example.com'
)";

$conn->query($sql);

$conn->close();


?>