<?php
include("config.php");
//extract($_GET);
$sel  = mysql_query("select * from user ");
$num = mysql_num_rows($sel);
//echo $num
if(($num%5)==0){
	echo $num/5;
}
else {
	echo intval($num/5 + 1);
}
?>
