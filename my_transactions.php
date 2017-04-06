<?php
include 'session.php';   //getting session variables

$qry = "SELECT * FROM transaction WHERE cust_id ='$id_check' order by trans_date desc";
$tran_res = mysqli_query($connection,$qry);





?>


<!-- ================================== PHP SCRIPT ABOUVE THIS===============================-->
  




  <!DOCTYPE html>
  <html>
    <head>
    
  <!-- Compiled and minified CSS -->
  <link href="https://fonts.googleapis.com/css?family=Lobster|Ubuntu:500" rel="stylesheet">
  <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/css/materialize.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="./css/my_transactions.css">



    </head>

    <body>


    <!-- ================================ navigation bar================================-->

      <nav id="navigation">
        <div class="nav-wrapper">
            <span id="name" style="font-size: 30px;"><?php echo $login_session; ?></span>
            
            <ul id="nav-mobile" class="right hide-on-med-and-down">
              <li><a href="sass.html" ><span id="nav_links">Profile</span></a></li>
              <li><a href="logout.php"><span id="nav_links">Log Out</span></a></li>
              <li><a href="contact_us.php"><span id="nav_links">contact Us</span></a></li>
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

               <pre id="right-heading">Recent  Transactions</pre>

<!--========================= printing table rows dynamically ================= -->
              <?php

                if (mysqli_num_rows($tran_res) > 0) {
    
                    echo '<table align="center">

                          <tr>

                          <th>DATE</th>
                          <th>DESCRIPTION</th>
                          <th>CREDIT</th>
                          <th>DEBIT</th>
                          <th>BALANCE<th>
    
                          </tr>'; 
                    
                    $i =1;
                    while(($row = mysqli_fetch_assoc($tran_res)) AND ($i <= 5)){

                           echo "<tr><td>".$row['trans_date']."</td> <td>".$row['trans_detail']."</td> <td>".$row['credit']."</td> <td>".$row['debit']."</td><td>".$row['cur_bal']."</td><tr>";

                           $i++;
                    }

                    echo '</table>';    //closing table tag
                } 

                else {
                    echo "no transactions found!!!";
                }

            ?>
            
           
            

            </div>
         


          </div>


  </div>
<!--=================================== horizontal rule for separation ======================= -->

<div class="container" id="h_rule">  <hr>    </div>


<!--=================================== selection types ===================================== -->




 <div class="row">
      
        
       
   



      <div class="col s6 m6 l12" id="btm-pane">
          <div class="container" id="date_pick_container">
                <p id="heading">Select By Dates</p>
            <form action="trans_btwn_dates.php" method="post">

              <div class="container">
                <div class="container" id="left">
                  <p>Start Date</p>
                  <input type="date" class="center-align" name="start_date" required>
                </div>

                <div  class="container" id="right">
                  <p>End Date</p>
                  <input type="date" class="center-align" name="end_date" required> 
                </div>
              </div>  
               <br> 
              <div class="container" id="button-send">
                <button class="btn waves-effect waves-light" type="submit" name="submit">Submit
                <i class="material-icons right">send</i>
                </button>
              </div>

            </form>

          </div>        
      </div>

  </div>  
        









<div style="height: 15cm;"></div>














     
      <!--=============================== footer=========================================-->

      

  







      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

        <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/js/materialize.min.js"></script>

      <script type="text/javascript" src="test.js"></script>
    </body>
  </html>
