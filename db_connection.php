<?php

$server = 'localhost';
$user = 'admin';
$password = 'admin';
$database = 'lab1';

// connect to the database
$connection = mysqli_connect($server, $user, $password, $database);
if (!$connection) {
	echo "Something was wrong! Failed to connect to database!";
}

?>
