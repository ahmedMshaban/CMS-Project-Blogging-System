<?php

$db["db_server"] = "localhost";
$db["db_username"] = "root";
$db["db_password"] = "";

foreach ($db as $key => $value) {
	define(strtoupper($key), $value);
}

$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD);


if($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}



?>