<?php
	session_start();
	if(session_destroy()){ 
			echo "Logged Out!";
			header("Location: index.php");
	} 
?>