<?php
session_start();     //destroying session
if(session_destroy()){
	header("Location: index.html"); // Redirecting To Home Page
}

?>