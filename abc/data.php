<?php

include("config.php");
//include('class.php');

//$obj=new user();



if(!empty($_POST['id']) && $_POST['id']==1){
$orderBy='order by id  asc';

}elseif(!empty($_POST['id']) && $_POST['id']==2){
	
	$orderBy='order by id  desc';
}elseif(!empty($_POST['id']) && $_POST['id']==3){
	
	$orderBy='order by id  asc';
}elseif(!empty($_POST['db']) && $_POST['db']==1){
$orderBy='order by dob  asc';

}elseif(!empty($_POST['db']) && $_POST['db']==2){
	
	$orderBy='order by dob  desc';
}elseif(!empty($_POST['db']) && $_POST['db']==3){
	
	$orderBy='order by dob  asc';
}else{
	$orderBy='order by id  desc';
}

//$query=$obj->viewrecord();
 			$adjacents = 5;
                     $page=@$_POST['page'];
			if(empty($page)){
				$page=0;
				
			}else{
				
				$page=(@$_POST['page']-1)*$adjacents;
			}
			
			$sql="SELECT COUNT(*) as num FROM `user` order by id  desc;";
				$query=mysql_query($sql);
				$total_pages = mysql_fetch_array($query);
				$total_pages = $total_pages['num'];
				
				
				
				
				                               //how many items to show per page
//echo "select * from `user` $orderBy LIMIT $page, $adjacents";
			  $query = mysql_query("select * from `user`  $orderBy LIMIT $page, $adjacents") or die ('error');
				
					

?>




<?php 


$result=array();
 while ($row = mysql_fetch_array($query)){ 
	$result[]=$row;
}

echo json_encode($result);
 exit;
 ?>

