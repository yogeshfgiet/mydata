<?php

include("config.php");


$sql="select * from `user` order by id DESC limit 0,5;";
$query= mysql_query($sql)  or die ('error');

?>


<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
</style>
<table class="mytab" >
	<tr>
    <th>Name</th>
    <th>Email</th>
    <th>Message</th>
  <th>DOB</th>
  </tr>
<?php  WHILE ($row = mysql_fetch_array($query)){ 
 
$data .= "<tr>";
   $data .= "<td>$row[name]</td>";
   $data .= "<td>$row[email]</td>";
   $data .= "<td>$row[message]</td>";
   $data .= "<td>$row[dob]</td>";
   $data .= "</tr>";
}
echo $data;
 ?>
<table>
</body>
</html>
