<?php  

session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
	if (empty($_POST['username']) || empty($_POST['password'])) {
		$error = "Username or Password is invalid";
	}
	else{
		// Define $username and $password
		$username=$_POST['username'];
		$password=$_POST['password'];


		//setting up connection with database
		include 'connection.php'; 


		//sql query to fetch info of registered user  from db
		$sql = "select username from Users where username = '$username' and password = '$password'"; 
		$result = mysqli_query($connection,$sql);


	





		//checking for valid user
		if(mysqli_num_rows($result)){
			$_SESSION['login_user']=$username;       // Initializing Session
			header("location: my_home.php"); 		// Redirecting To Other Profile page
		} 
		else{
			$error = "Username or Password is invalid";
		}

		mysqli_close($connection); // Closing Connection

	}
}





?>
