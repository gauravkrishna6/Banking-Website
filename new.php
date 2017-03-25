<?php  
session_start();
if($_SESSSION["login_user"]==null){
	header("location: ../css/login_form.html");
}

?>