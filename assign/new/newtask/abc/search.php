<?php
include("config.php");
if (!empty($_GET['utext'])) {

    $utext = $_GET['keywords'];
    $query = mysql_query("SELECT * FROM user WHERE name LIKE '%".$utext."%' OR  email LIKE  '%".$utext."%'");

    if (mysql_num_rows($query) > 0) {
	$result=array();
        while ($fetch = mysql_fetch_array($query)) {
		$result[]=$fetch;
          
        }
    }
}
echo json_encode($result);
?>
