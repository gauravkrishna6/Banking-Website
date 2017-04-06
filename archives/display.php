<?php
  include 'connection.php';
 
  $name=$_POST["name"];
  $message=$_POST["message"];
 
  $result=mysqli_query($connection,"select * from Users");
 
  echo "<table border='1' >
<tr>
<td align=center> <b>ACCOUNT</b></td>
<td align=center><b>Name</b></td>
<td align=center><b>PASWD</b></td>
<td align=center><b>SEX</b></td></td>
<td align=center><b>AGE</b></td>";

while($data = mysqli_fetch_row($result))
{   
    echo "<tr>";
    echo "<td align=center>$data[0]</td>";
    echo "<td align=center>$data[1]</td>";
    echo "<td align=center>$data[2]</td>";
    echo "<td align=center>$data[3]</td>";
    echo "<td align=center>$data[4]</td>";
    echo "</tr>";
}
echo "</table>";

?>