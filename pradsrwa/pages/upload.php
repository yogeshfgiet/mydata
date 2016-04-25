 <?php
error_reporting(1);


session_start();
include('config.php');
include_once('class.php');
$obj= new user();


$valid_formats = array("jpg", "png", "gif", "bmp","jpeg");
if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST") 
{
	$empid=$obj->uploadimage($_POST);	


	
	
	
}

?>