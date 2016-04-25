<?php

include("config.php");
//include('class.php');

//$obj=new user();

//$query=$obj->viewrecord();
 			$adjacents = 5;
                     $page=$_POST['page'];
			if(empty($page)){
				$page=0;
				
			}else{
				
				$page=($_POST['page']-1)*$adjacents;
			}
			
			$sql="SELECT COUNT(*) as num FROM `user` order by id  desc;";
				$query=mysql_query($sql);
				$total_pages = mysql_fetch_array($query);
				$total_pages = $total_pages['num'];
				                               //how many items to show per page
// "select * from `user` order by id  desc LIMIT $page, $adjacents";
			 $query = mysql_query("select * from `user` order by id  desc LIMIT $page, $adjacents") or die ('error');
				
					

?>




<?php 


$result=array();
 while ($row = mysql_fetch_array($query)){ 
	$result[]=$row;
}

echo json_encode($result);
 exit;
 ?>

