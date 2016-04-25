<?php
include("config.php");
extract($_GET);
$page -= 1;
$per_page = 5;
$start = $page * $per_page;
if(!empty($sid) && ($sid%2)!=0)
{
	$sel  = mysqli_query($link,"select * from (select * from user WHERE Name LIKE '%$src%' OR Email LIKE '%$src%' LIMIT $start,5)  ORDER BY id DESC");
	
}
else if(!empty($sid) && ($sid%2)==0)
{
	$sel  = mysqli_query($link,"select * from user WHERE Name LIKE '%$src%' OR Email LIKE '%$src%' LIMIT $start,5");
	
}

else if(!empty($sdt) && ($sdt%2)!=0)
{
	$sel  = mysqli_query($link,"select * from (select * from details WHERE Name LIKE '%$src%' OR Email LIKE '%$src%' LIMIT $start,5)  ORDER BY tbl.Date ASC");
	
}
else if(!empty($sdt) && ($sdt%2)==0)
{
	$sel  = mysqli_query($link,"select * from (select * from details WHERE Name LIKE '%$src%' OR Email LIKE '%$src%' LIMIT $start,5)  ORDER BY tbl.Date DESC");
	
}

else
{
	$sel  = mysqli_query($link,"select * from details WHERE Name LIKE '%$src%' OR Email LIKE '%$src%' LIMIT $start,5");
	
}
	$fRows = array();
	while($arr=mysqli_fetch_array($sel))
	{

		$fRows[]=$arr;
	}

	echo json_encode($fRows);
/*$arr=mysqli_fetch_array($sel);
echo json_encode($arr);*/
?>
