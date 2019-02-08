<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Email Or Password Is Invalid!";
}
else {
$server = "localhost";
$username = "phpmyadmin";
$password = "19951995";
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysqli_connect($server, $username, $password);
if (!$connection) { 
die("Connection failed: " . $connection->connect_error);
} 
// Define $username and $password
$username=$_POST['username'];
$password=$_POST['password'];
// To protect MySQL injection for Security purpose
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysqli_real_escape_string($connection, $username);
$password = mysqli_real_escape_string($connection, $password);
// Selecting Database
$db = mysqli_select_db($connection, 'phpmyadmin');
if (!$db) { 
die('Database Not Found: ' . $db->connect_error);
}  else {
// SQL query to fetch information of registerd users and finds user match.
$adminquery = mysqli_query($connection, "SELECT * FROM LOG_IN WHERE username='$username' AND password='$password'");
$adminrows = mysqli_num_rows($adminquery);
if ($adminrows == 1) {
$_SESSION['login_admin']=$username; // Initializing Session
header("Location: upload.php"); // Redirecting To Other Page
mysql_close($connection);
}
else {
$error = "Username Or Password Is Invalid!";
}
header('Location: index.php');
mysqli_close($connection); // Closing Connection
header('Location: index.php');
}
}
}
?>
