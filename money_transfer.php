<?php 

include 'session.php';



$msg = "";

if (isset($_POST['submit'])) {
	if (empty($_POST['to_account']) || empty($_POST['to_name']) || empty($_POST['amount']) ) {
		$msg = "all fields are necessary";
		
	}

	else{
		// defining and intitallizing variables
		$to_account=$_POST['to_account'];
		$amount = $_POST['amount'];

		//getting sender's balance
		$sender_bal_qry = mysqli_query($connection,"SELECT balance FROM account WHERE cust_id = '$id_check'");
		$sender_bal_res_array = mysqli_fetch_assoc($sender_bal_qry);
		$sender_balance = $sender_bal_res_array['balance'];

		//checking for sufficient balance
		if($sender_balance < $amount){
			$msg = "You don't have enough balance";
		}


		//when  balance is enough 
		else{

				//checking if intended reciver has a account or not
				$chk_qry= "SELECT * from account where acc_num = '$to_account'";
				$check_reciever = mysqli_query($connection,$chk_qry);



				if(mysqli_num_rows($check_reciever)){
						//reducing balance of sender's account	
						$mny_ded_sql = "UPDATE account SET balance = balance - $amount WHERE cust_id = '$id_check'";
						$mny_ded = mysqli_query($connection,$mny_ded_sql);

						// increasing the balance of the reciver's account 
						$mny_tr_sql= "UPDATE account SET balance = balance + $amount WHERE acc_num='$to_account' ";
	 					$mny_tr_res = mysqli_query($connection,$mny_tr_sql);
//----------------------------------------------------------------------------------------------------------


	 					//update transaction table entries
	 					$reciever_assoc= mysqli_fetch_assoc($check_reciever);
						$reciever_id = $reciever_assoc['cust_id'];

							//updating recievers transaction entries
						$upd_rec_sql= "INSERT INTO transaction(cust_id,credit,trans_detail) values('$reciever_id','$amount','by transfer')";

						


						$upd_sen_sql= "INSERT INTO transaction(cust_id,debit,trans_detail) values('$id_check','$amount','money sent')";

						mysqli_query($connection,$upd_rec_sql);

						mysqli_query($connection,$upd_sen_sql);
						
						

//--------------------------------------------------------------------------------------------------------------------------
	 					//notifying that the transaction process was successful
	 					header("location: transaction_sucess.php");



				}
			
				else{
				
					$msg = "the person u are trying to send money does not have a account with us";
				}
			}


	
	 		
	 		
		


	 }

	
}

 ?>


 <!DOCTYPE html>
 <html>
 <head>
 <link rel="stylesheet" type="text/css" href="css/transfer.css">
 	<title></title>
 </head>
 <body>

<h1 >TRANSFER MONEY </h1>

 <!--===============  form for sending money ============================= -->	
 <div class="container" id="outer_container">
 <form action="" method="post" id="form">
 	<label>account number:</label>
 	<input type="text" name="to_account"><br><br>

 	<label>name:</label>
 	<input type="text" name="to_name"><br><br>

 	<label>amount:</label>
 	<input type="text" name="amount"><br><br>

 	<button name="submit" style="color: red; background-color: black;
 	width: 2.5cm;height: 1cm;">submit</button><br>
 	<?php echo $msg; ?>

 </form>
 </div>

 				<div class="container" id="back-page">
 					<a href="my_home.php">Go To home</a>
 				</div>
 				

 </body>
 </html>