<?php
include("config.php");
if (!empty($_GET['keywords'])) {

    $keywords = $_GET['keywords'];
    $query = mysql_query("SELECT * FROM user WHERE name LIKE '%" . $keywords . "%'");

    if (mysql_num_rows($query) > 0) {

        while ($fetch = mysql_fetch_array($query)) {
            $output[] = array("id" => $fetch[0], "name" => $fetch[1], "email" => $fetch[2], "message" => $fetch[3], "date" => $fetch[4]);
        }
    }
}
echo json_encode($output);
?>
