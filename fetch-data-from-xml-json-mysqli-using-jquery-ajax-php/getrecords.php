<?php
require_once("configure.php");

$sql = "SELECT title, capital FROM countries  WHERE 1 ORDER BY id asc";
$rs = mysqli_query($connection,$sql);
$str = '';

$str .= '<ul>';
while ($res = mysqli_fetch_array($rs)) {
  $str .= '<li>'.$res["title"].' - '. $res["capital"];
}
$str .= '</ul>';
echo $str;
?>