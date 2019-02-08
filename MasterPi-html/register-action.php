<?php
session_start();
$connection = mysqli_connect("localhost", "phpmyadmin", "19951995");
$mysqli = new mysqli("localhost", "phpmyadmin", "19951995", "phpmyadmin");
$_SESSION['submit'] = $_POST;

$email = $mysqli->real_escape_string($_POST['email']);
$username = $mysqli->real_escape_string($_POST['username']);
$password = $mysqli->real_escape_string($_POST['password']);


$db = mysqli_select_db($connection, "phpmyadmin");
mysqli_query($connection, "INSERT INTO register (email, username, password) VALUES ('$email', '$username', '$password')");

if(mysqli_connect_errno()){
	header('location: login.php');
	
	}

else {
	

	header('location: login.php');

}
exit;
?>
