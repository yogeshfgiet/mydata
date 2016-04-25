<?php

include("config.php");
//include('class.php');

//$obj=new user();
extract($_GET);
		$adjacents = 5;
$p = $page;
$page=($p-1)*$adjacents;
                    /* $page=@$_GET['page'];
			if(empty($page)){
				$page=0;
				
			}else{
				
				$page=(@$_GET['page']-1)*$adjacents;
			}*/

			
$id=$_POST['id'];
$db=$_POST['db'];
if(!empty($id) && ($id)%2!=0){

	$query  = mysql_query("select data.id, data.name, data.email, data.message, data.dob  from (select * from user  LIMIT $page,$adjacents) data  ORDER BY id asc");


}

 else if(!empty($id) && ($id)%2==0){
	$query  = mysql_query("select data.id, data.name ,data.email, data.message, data.dob from (select * from user  LIMIT $page,$adjacents) data  ORDER BY id desc");
}


elseif(!empty($db) && ($db)%2!=0){
$query  = mysql_query("select data.id, data.name, data.email, data.message, data.dob from (select * from user  LIMIT $page,$adjacents) data  ORDER BY dob asc");

}
elseif(!empty($db) && ($db)%2 ==0){
	
$query  = mysql_query("select data.id, data.name, data.email, data.message, data.dob from (select * from user  LIMIT $page,$adjacents) data ORDER BY dob desc");

}
else{
	 $query = mysql_query("select * from `user`  ORDER BY id asc LIMIT $page, $adjacents") ;
}

//$query=$obj->viewrecord();
 		
			
				                   
			//  $query = mysql_query("select * from `user`  $orderBy LIMIT $page, $adjacents") or die ('error');
	//echo "select * from `user`  ORDER BY id desc LIMIT $page, $adjacents" ;			
					









$result=array();
 while ($row = mysql_fetch_array($query)){ 
	$result[]=$row;
}

echo json_encode($result);

 ?>

