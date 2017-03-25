<?php  


$servername = "localhost";
$u_uname = "gaurav";
$pwd = "gaurav610";
$db_name ="awp";

$connection = mysqli_connect($servername,$u_uname,$pwd,$db_name);

if(!$connection){
	die("connection failed:".mysqli_connect_error());
}


?>
