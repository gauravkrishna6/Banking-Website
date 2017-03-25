<?php
// Establishing Connection with database defined in connection.php file
include 'connection.php';

session_start();// Starting Session

// Storing Session
$user_check=$_SESSION['login_user'];

// SQL Query To Fetch Complete Information Of User
$ses_sql=mysqli_query($connection,"select username from Users where username='$user_check'");

$row=mysqli_fetch_assoc($ses_sql);

$login_session =$row['username'];

if(!isset($login_session)){
	mysqli_close($connection); // Closing Connection
	header('Location: index.html'); // Redirecting To Home Page
}

?>