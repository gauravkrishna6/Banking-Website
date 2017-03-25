<?php
include 'login.php'; // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location: my_home.php");
}

?>







<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login Form</title>
  
  

  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900'>
<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/icon?family=Material+Icons'>

      <link rel="stylesheet" href="./css/login.css">

  
</head>

<body>


  <form  action="" method="post" 	id="signin" >

	<div class="form-title">Sign in</div>
	<div class="input-field">
		<input type="text" name="username" id="email" autocomplete="off" required >
		<i class="material-icons">email</i>
		<label for="email">Email</label>
	</div>
	<div class="input-field">
		<input type="password"  name="password" id="password"/>
		<i class="material-icons">lock</i>
		<label for="password">Password</label>
	</div>
	<a href="" class="forgot-pw">Forgot Password ?</a>
	<button class="login" name="submit" value="login">Login</button>
	<?php echo $error ?>
	
	</form>

  <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>

    <script src="./js/login.js"></script>

</body>
</html>
