<?php 

$errors = '';
//include 'session.php';

if(isset($_POST['submit'])){

    $email_to = "gauravkrishna6@gmail.com";
    $email_subject = "contacted from banking website";

    //getting data  from form
    $sender_name = $_POST['sender_name'];
    $email_from = $_POST['sender_mail'];
    $message = $_POST['message'];


    mail($email_to, $email_subject, $message);
  
}
  


 ?>












<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Contact Us</title>

  <!-- importing fonts =========================== -->
  <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>

  
  <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="./css/contact_us.css">

  
</head>

 
    <div class="container">
     <a href="my_home.php"> <span class="fa fa-home" id="home">home</span></a>
      

    </div>


    <div>
      <form class="form" action="" method="post">
          <h2>CONTACT US</h2>
          <p type="Name:"><input name="sender_name" placeholder="Write your name here.." required></input></p>
          <p type="Email:"><input name="sender_mail" placeholder="Let us know how to contact you back.." required></input></p>
          <p type="Message:"><input name="message" placeholder="What would you like to tell us.." required></input></p>
          <button  type="submit" name="submit">Send Message</button>
          <div id="contact_botm">
            <span class="fa fa-phone"></span>8793561316
            <span class="fa fa-envelope-o"></span> vnit@company.com
          </div>
      </form>
     </div> 
    
  
  
</body>
</html>