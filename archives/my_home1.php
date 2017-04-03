<?php
include 'session.php';


//echo $_SESSION['logged_id'];
$acc_num = $cust_row['acc_num'];
$balance = $cust_row['balance'];
$open_date = $cust_row['doc'];

?>


<!-- ================================== PHP SCRIPT ABOUVE THIS===============================-->

<!DOCTYPE html>

<html>

<head>
	<title>my page</title>

		 <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">

	<link href="css/my_home.css" rel="stylesheet" type="text/css">

</head>










<body>


	<div class="top_section">

		<div id="welcome">
			Welcome : <i><?php echo $login_session; ?></i>
		</div>

    <div id="logout"><a href="logout.php">Log Out</a></div>

	</div>


<!--.........................NAVIGATION BAR.....................-->
	<nav>
	
	<div class="nav-wrapper">
      <a href="#" class="brand-logo">LotusBank</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="transaction.php">transaction</a></li>
        <li><a href="money_transfer.php">money transfer</a></li>
        <li><a href="#">JavaScript</a></li>
      </ul>
    </div>
  </nav>

<!--........................end of navbar.....................-->



	<a href="new.php">test</a>

<h1 align="center">account summary</h1>
<br><br>


	 <table align="center">
        
          <tr>
              <th>ACCOUNT NUMBER</th>
              <th>DATE OPENED</th>
              <th>BALANCE</th>
              
          </tr>
        

        
          <tr>
            <td><?php echo $acc_num;  ?></td>
            <td><?php echo $open_date; ?></td>
            <td>&#8377;<?php echo $balance; ?></td>
            
          </tr>
          
      
      </table>
	
	









<!-- ....................... imports below this line............................--> 

<!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
     

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
</body>

</html>