<?php
// Establishing Connection with database defined in connection.php file
include 'connection.php';

session_start();// Starting Session

// Storing Session
$user_check=$_SESSION['logged_user'];     //has name of user
$id_check=$_SESSION['logged_id'];			//has id of user

// SQL Query To Fetch Complete Information Of customer
$ses_sql=mysqli_query($connection,"SELECT * FROM account WHERE (cust_id='$id_check')");     

$cust_row=mysqli_fetch_assoc($ses_sql); 	//associative array of account table

$login_session =$cust_row['name'];			//session variable for customer name



if(!isset($login_session)){
	mysqli_close($connection); // Closing Connection
	header('Location: index.html'); // Redirecting To Home Page
}

?>