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
		$sql = "SELECT * FROM login WHERE (user_name = '$username' and password = '$password' and user_type='customer')"; 
	

		$result = mysqli_query($connection,$sql);
	
		$res_assoc = mysqli_fetch_assoc($result);			//creating associative array  of result set.
	}
 
	





		//checking for valid user
		if(mysqli_num_rows($result)){
			$_SESSION['logged_user']=$username;
			$_SESSION['logged_id']=$res_assoc['id'];	// setting session variables userid and name
			header("location: my_home.php"); 		// Redirecting To Other Profile page
		}
		 
		else{
			$error = "Username or Password is invalid";
		}

		mysqli_close($connection); // Closing Connection

}




?>
