<?php 


include 'session.php';


if(isset($_POST['submit'])){

 		$from_date = $_POST['start_date'];
 		$to_date = $_POST['end_date'];
 		//echo $to_date;
 		//echo $from_date;

 		$dt_qry = "SELECT * FROM transaction WHERE (cust_id = '$id_check') and (trans_date BETWEEN timestamp('$from_date') AND timestamp('$to_date'))";

 		$dt_qry_res = mysqli_query($connection,$dt_qry);

 		$row_nums = mysqli_num_rows($dt_qry_res);

 		
 		 
 		
}
?>
<!-- ======================================== php script above ================================= -->







<!DOCTYPE html>
<html>
	<head>

		<title></title>

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/css/materialize.min.css">
  		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  		<link rel="stylesheet" type="text/css" href="./css/date.css">

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

          <a href="my_home.php" class="waves-effect waves-light btn  valign-wrapper" id="button"><span class="valign">My Home Page</span></a>

          <a href="transaction.php" class="waves-effect waves-light btn red  valign-wrapper" id="button"><span class="valign">Transaction History</span></a>
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

               <pre id="right-heading">Transactions</pre>

<!--========================= printing table rows dynamically ================= -->
              <?php

                if ($row_nums > 0) {
    
                    echo '<table align="center">

                          <tr>

                          <th>DATE</th>
                          <th>DESCRIPTION</th>
                          <th>CREDIT</th>
                          <th>DEBIT</th>
                          <th>BALANCE<th>
    
                          </tr>'; 
                    
                    
                    while($row = mysqli_fetch_assoc($dt_qry_res)){

                           echo "<tr><td>".$row['trans_date']."</td> <td>".$row['trans_detail']."</td> <td>".$row['credit']."</td> <td>".$row['debit']."</td><td>".$row['cur_bal']."</td><tr>";

                           
                    }

                    echo '</table><br>'; 
                    echo '<p class="rec_found_text">'.$row_nums.'records found</p>';
                       //closing table tag
                } 

                else {
                    echo "<p class='rec_found_text'>"."no transactions found!!!</p>";
                }

            ?>
            
           
            

            </div>
         


          </div>


  </div>




  <div class="container" id="go_back" align="center">
    <a href="my_transactions.php" class="waves-effect waves-light btn deep-orange darken-2 valign-wrapper"><span class="valign" style="font-size: 40px;letter-spacing: 9px;">Back</span></a>
  </div>
<!--=================================== horizontal rule for separation ======================= -->

<div class="container" id="h_rule">  <hr>    </div>


<!--=================================== selection types ===================================== -->




 <div class="row">


</body>
</html>




