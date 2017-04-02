<?php 
include 'session.php';
$qry = "SELECT * FROM transaction WHERE cust_id ='$id_check' order by trans_date desc";
$rw = mysqli_query($connection,$qry);

?>


<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/trans.css">
	<title></title>
</head>
<body>

	<header class="header">

		<div id="profile">
			<div id="logout"><a href="logout.php">Log Out</a></div>
		</div>
			
		<div id="welcome">
			Welcome : <i><?php echo $login_session; ?></i>
		</div>

	</header>



<h1>MY TRANSACTIONS</h1>


</table>

<?php

if (mysqli_num_rows($rw) > 0) {
    
    echo '<table align="center">
	<tr>
		<th>DATE</th>
		<th>DESCRIPTION</th>
		<th>credit</th>
		<th>debit</th>
		<th>balance<th>
		
	</tr>';
    
    // output data of each row
    while($row = mysqli_fetch_assoc($rw)) {
        echo "<tr><td>".$row['trans_date']."</td> <td>".$row['trans_detail']."</td> <td>".$row['credit']
        ."</td> <td>".$row['debit']."</td><td>".$row['cur_bal']."</td><tr>";
    }
    echo '</table>';		//closing table tag
} else {
    echo "no transactions found!!!";
}



  ?>

<a href="my_home.php">back to my home</a>
  
</body>
</html>