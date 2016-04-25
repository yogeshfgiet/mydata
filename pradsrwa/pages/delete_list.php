<?php
include('config.php');

   if(isset($_POST['delete_id'])) {

        $sql_articles = "DELETE  FROM `event` WHERE `id`= '".$_POST['delete_id']."';";

        if(mysql_query($sql_articles)) {
            echo "YES";
        }
        else {
            echo "NO";
        }
		}
else {
    echo "FAIL";
}

 
?>