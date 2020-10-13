<?php
	$msg = "";
	session_start();
	require 'connect~.php';

	// login values
	$email = $_POST['email'];
	$password = $_POST['password'];
	$passhash = md5($password);
	
	$login = "SELECT * FROM admintb WHERE email = '$email' AND password = '$passhash'";

	$result = $con->query($login);

	if (!$row = $result->fetch_assoc()) {
		$msg = "Wrong password or Email";
		echo "<script>alert('Wrong password or Email')</script>";
			
	}else{
		$_SESSION['email'] = $row['email'];
		$_SESSION['adminId'] = $row['adminId'];
		$_SESSION['password'] = $row['password'];
		header("Location: admindashboard.php");
	}
?>