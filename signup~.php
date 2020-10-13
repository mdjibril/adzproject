<?php
session_start();

include 'connect~.php';

$fullname = $_POST['fullname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];
$passhash = md5($password);

$register = mysqli_num_rows(mysqli_query($con, "SELECT * FROM admintb WHERE email = '$email' OR phone = '$phone'"));
    if($register == 0){
        // echo "$fullname, $email, $phone, $password";
    	$insert = mysqli_query($con, "INSERT INTO admintb (fullname, email, phone, password) VALUES ('$fullname', '$email', '$phone', '$passhash')");

        if (!($insert)) {
        	$_SESSION['error'] = "Error registering";
        	header("Location: adminsignup.php");
            // echo "Error registering";
        }else{
        		
        	$_SESSION['success'] = "Register successfull, login with email and password";
        	header("Location: admindashboard.php");
            // echo "Success";
        }
    	
    }else if($register != 0){
        $_SESSION['error'] = "User already exist, try new email or phone number";
        header("Location: adminsignup.php");
        // echo "User Exist";
    }
?>