<?php

include("config.php");
include('class.php');

$obj=new user();

$query=$obj->viewrecord();
 			 /*$adjacents = 5;
			if(empty($page)){
				$page=0;
				
			}else{
				
				$page = $_GET['page'];
			}
			
			$sql="SELECT COUNT(*) as num FROM `user` order by id  desc;";
				$query=mysql_query($sql);
				$total_pages = mysql_fetch_array($query);
				$total_pages = $total_pages['num'];
				$limit = 4;                                //how many items to show per page
				
				if($page) 
					$start = ($page - 1) * $limit;          //first item to display on this page
				else
				$start = 0;    
			 $query = mysql_query("select * from `user` order by id  desc LIMIT $start, 	$limit") or die ('error'); */
				
			//$query= mysql_query($sql)  or die ('error');


?>




<?php 
$result=array();
 while ($row = mysql_fetch_array($query)){ 
	$result[]=$row;
}
echo json_encode($result);
 ?>

