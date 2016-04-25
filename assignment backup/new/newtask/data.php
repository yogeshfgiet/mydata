<?php

include("config.php");



$sql="select * from `user` order by id DESC limit 0,5;";
$query= mysql_query($sql)  or die ('error');

?>




<?php 
$output = "[";

 WHILE ($row = mysql_fetch_array($query)){ 
  	

    if ($output != "[") {$output .= ",";}
	 $output .= '{"id":"'  . $row["id"] . '",'; 
    $output .= '"name":"'  . $row["name"] . '",';

    $output .= '"email":"'   . $row["email"]        . '",';

    $output .= '"message":"'   . $row["message"]        . '",';
    $output .= '"date":"'. $row["dob"]     . '"}';
}
$output .="]";

//mysqli_close($conn);
echo $output;
 ?>

