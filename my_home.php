<?php
include 'session.php';


//echo $_SESSION['logged_id'];
$acc_num = $cust_row['acc_num'];
$balance = $cust_row['balance'];
$open_date = $cust_row['doc'];
$branch = $cust_row['branch'];

?>


<!-- ================================== PHP SCRIPT ABOUVE THIS===============================-->
  




  <!DOCTYPE html>
  <html>
    <head>
    
  <!-- Compiled and minified CSS -->
  <link href="https://fonts.googleapis.com/css?family=Lobster|Ubuntu:500" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/css/materialize.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="./css/my_home.css">



    </head>

    <body>


    <!-- ================================ navigation bar================================-->

    	<nav id="navigation">
    		<div class="nav-wrapper">
      			<span id="name" style="font-size: 30px;"><?php echo $login_session; ?></span>
      			
      			<ul id="nav-mobile" class="right hide-on-med-and-down">
        			<li><a href="sass.html" ><span id="nav_links">Profile</span></a></li>
        			<li><a href="logout.php"><span id="nav_links">Log Out</span></a></li>
        			<li><a href="#"><span id="nav_links">contact Us</span></a></li>
      			</ul>

    		</div>
  		</nav>

  	<!-- ============================end-nav===========================================-->
  	

  	<div class="container">
  		<marquee scrollamount="10" id="marquee">The new home loan rates from march 2017 are going to be 8.2% </marquee>
  	</div>	


    <!-- Page Layout here -->

   
	    <div class="row">

<!--=================================== left pane    ====================================-->
			<div class="col s12 m4 l3" >

				<div class="container" id="left-pane">

					<div id="left-heading">Useful links ...</div>
					<div class="divider"></div>

					<a href="my_home.php" class="waves-effect waves-light btn red valign-wrapper" id="button"><span class="valign">My Home Page</span></a>

					<a href="transaction.php" class="waves-effect waves-light btn  valign-wrapper" id="button"><span class="valign">Transaction History</span></a>
					<a href="money_transfer.php" class="waves-effect waves-light btn  valign-wrapper" id="button"><span class="valign">Transfer Money</span></a>
					
					


					<div class="container" id="card-1">	
						<div class="row">
	     					<div class="col s12 m12 l12">
	        					<div class="card-panel yellow  amber" >
	        						<i class="fa fa-thumb-tack fa-3x " id="pin" aria-hidden="true"></i><br>
	          						<span class="white-text">I am a very simple card. I am good at containing small bits of information.
	          							I am convenient because I require little markup to use effectively. I am similar to what is called a panel in other frameworks.
	          						</span>
	        					</div>
	      					</div>
	    				</div>

	    			</div>	
					
				</div>
			        

			</div>

	      
<!-- ====================================== right pane ==========================-->
			
	      	<div class="col s12 m8 l9 " >

	      		<div class="container" id="right-pane">

	      			 <pre id="right-heading">Account  Details</pre>

	      			<table>
	      				
	      				

	      				<tr>
	      					<td>Account Number</td>
	      					<td><?php echo $acc_num;  ?></td>
	      				</tr>

	      				<tr>
	      					<td>Name</td>
	      					<td><?php echo $login_session; ?></td>
	      				</tr>

	      				<tr>
	      					<td>Branch</td>
	      					<td><?php echo $branch; ?></td>
	      				</tr>

	      				<tr>
	      					<td>Date Of Opening</td>
	      					<td><?php echo $open_date; ?></td>
	      				</tr>
	      				
	      				<tr>
	      					<td>Available Balance</td>
	      					<td><?php echo $balance; ?></td>
	      				</tr>

	      				<tr>
	      					<td>Currency</td>
	      					<td>Indian National Rupee(&#8377;)</td>
	      				</tr>


	      			</table>
	      		

	      		</div>
	       


	      	</div>


	    </div>


	    
	    <!--=============================== footer=========================================-->

	    

  







      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

        <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/js/materialize.min.js"></script>

      <script type="text/javascript" src="test.js"></script>
    </body>
  </html>