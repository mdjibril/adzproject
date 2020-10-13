<?php 
$con = mysqli_connect("localhost", "root", "", "adzproject");

if (!$con) {
	die("Connection failed: " .mysqli_connect_error());
}

?>