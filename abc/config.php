<?php 
$con= mysql_connect("localhost","root","") or die(mysql_error());

mysql_select_db("abc",$con) or die(mysql_error());

?>
