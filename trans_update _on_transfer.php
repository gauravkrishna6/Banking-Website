<?php 

$reciever_assoc= mysqli_fetch_assoc($check_reciever);
$reciever_id = $reciever_assoc['cust_id'];

$upd_rec_sql= "INSERT INTO transactions(trans_type,cust_id,amount,trans_detail) values('credit','$reciever_id','$amount','by transfer')";


$upd_sen_sql= "INSERT INTO transactions(trans_type,cust_id,amount,trans_detail) values('debit','$id_check','$amount','money sent')";


mysqli_query($connection,$upd_rec_sql);
mysqli_query($connection,$upd_sen_sql);


?>
