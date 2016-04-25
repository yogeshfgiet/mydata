<?php

include("config.php");


$name= $_POST['name'];
$email= $_POST['email'];
$mass= $_POST['mass'];
$dob= $_POST['dob'];
//extract($data);
$sql= "INSERT INTO `user`set 
	name='".$name."',
	email='".$email."',
	message='".$mass."',
	dob='".$dob."';";

			
	if (mysql_query($sql))	{
					
		 echo $result= "Insert Data Succesfully" ;
	}
	else{
		echo$result= "Data Not Inserted To Database";
	}
					

		
?>
