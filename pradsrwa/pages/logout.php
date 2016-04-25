<?php

session_start();
  $email= $_SESSION["email"]; 
?>

<?php
include('config.php');

			$logout="UPDATE `login` SET `flag`= '0' WHERE `email` = '$email' OR `username`='$email';";
		
			if (mysql_query($logout))
			session_destroy();
			header("Location: login.php");
			exit();
?>