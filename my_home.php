<?php
include 'session.php';
?>

<!DOCTYPE html>

<html>

<head>
	<title>my page</title>
	<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
	<div id="profile">
		<div id="welcome">Welcome : <i><?php echo $login_session; ?></i></div>
		<div id="logout"><a href="logout.php">Log Out</a></div>

		<a href="testing.php">testing only</a>
	</div>
</body>

</html>