
<?php
include 'session.php';


?>


<!DOCTYPE html>
<html>
<head>
	<title></title>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>


	<script type="text/javascript">
               $(document).ready(function(){
                    $("#display").click(function(){
 
                          
 
                          $.ajax({
                              type:"post",
                              url:"display.php",
                              //dataType:"html",
                              success:function(resp){
                                 $("#responsecontainer").html(resp);
                              }
 
                          });
 
                    });
               });
       </script>


</head>
<body>
<h3 align="center">Manage Student Details</h3>
<table border="1" align="center">
   <tr>
       <td> <input type="button" id="display" value="Display All Data" /> </td>
   </tr>
</table>
<div id="responsecontainer" align="center">

</div>
</body>
</html>


