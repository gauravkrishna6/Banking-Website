<?php 

include 'session.php';

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<style type="text/css">
 		
 	h1{
 		text-align: center;
 		margin-top: 5cm;
 		font-size: 46px;
 		color: #00e600;
 	}

 	#new_trans{
 		float: left;
 		position: relative;
 		top: 4cm;
 		margin-left: 4cm;
 		font-size: 25px;
 		text-decoration: none;
 		font-weight: bold;
 	}

 	#my_home{
 		float: right;
 		position: relative;
 		top: 4cm;
 		margin-right: 4cm;
 		font-size: 25px;
 		text-decoration: none;
 		font-weight: bold;
 	}

 	</style>
 </head>
 <body>

 <h1>Your Transaction Was SUCCESSFUL !!</h1>
 <a href="money_transfer.php" id="new_trans">another transaction ?</a>
 <a href="my_home.php" id="my_home">home page</a>
 </body>
 </html>