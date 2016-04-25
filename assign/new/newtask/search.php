<?php
include("config.php");
if (!empty($_GET['keywords'])) {

    $keywords = $_GET['keywords'];
	
    $query = mysql_query("SELECT FROM user WHERE name LIKE '%$keywords%' OR email LIKE '%$keywords%'");
	
   	 if (mysql_num_rows($query) > 0) {

		$result=array();
		
		 while ($row = mysql_fetch_array($query)){ 
			$result[]=$row;
			}
        	}
	
  	  }

echo json_encode($result);
?>
