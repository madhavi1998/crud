<?php

function getConn() {
	$servername = "localhost";
	$username = "diituser";
	$password = "%TGBbgt5";
	$dbname = "php";
	
	$conn = new mysqli($servername,$username,$password);

	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	echo "connected successfully";

	return $conn;
}
