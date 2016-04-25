<?php
 class user{
		function selectblock($data){
		  $sql="SELECT * FROM `block`;";
			$query=mysql_query($sql);
			return $query;
		}
		function selectstate($data){
		  $sql="SELECT * FROM `state` ORDER BY state_name ASC;";
			$query1=mysql_query($sql);
			return $query1;
		}
		
		
		 public function imageupload($data){
				
					$uploaddir = "G:/xampp/htdocs/pradsrwa/pages/uploads/";
					$uploadfile = $uploaddir . stripslashes($_FILES['userfile']['name']);
					$show='<img src="uploads/'.stripslashes($_FILES['userfile']['name']).'" width="100" height="100"/>';
					move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile);
					$path= "uploads/".stripslashes($_FILES['userfile']['name']);
					$filename=stripslashes($_FILES['userfile']['name']);
					//$filename='<img src="uploads/'.stripslashes($_FILES['userfile']['name']).'" width="100" height="100"/>';
					//return $path;
					   return array( $path,$filename,$show );
					
				}
				
				function savedata($data){
				$block=$data['block'];	
				$block_ar=explode(",",$block);
				$block_id = $block_ar[0];
				$block_name = $block_ar[1];
				
				$state1=$data['state'];	
				$state_ar=explode(",",$state1);
				$state_id = $state_ar[0];
				$state_name = $state_ar[1];
			
					extract($data);
					
					$sql= "INSERT INTO resident set 
					block='".$block_name."',
					flat_no='".$flatno."',
					first_name='".$fname."',
						middle_name='".$mname."',
						last_name='".$lname."',
						phone_no1='".$contact1."',
							phone_no2='".$contact2."',	
						landline='".$landline."',
						email='".$email."',
						add_line1='".$add1."',	
							add_line2='".$add2."',
						add_line3='".$add3."',	
							state='".$state_name."',
						pin_code='".$pin."',	
							occupation='".$occupation."',
								emergency_contact='".$em_contact."',
							comp_contact='".$c_contact."',
								pets='".$pet."',
							nature='".$optionsRadios1."',
								veryfied='".$optionsRadios2."',
								veryfication_code='".$vcode."'
								
							
					";
						
						mysql_query($sql);
					
				}
				
				 function login($data){
		
					if($_POST['email'] != '' && $_POST['pass'] != '')
					{
						$name = $_POST['email'];
						$pass = md5($_POST['pass']);
						$ip=$_SERVER['REMOTE_ADDR'];
			
						$query = mysql_query("SELECT * FROM `login` WHERE (`email` = '$name' or `username`= '$name') AND `pass` = '$pass' AND `flag`= '0' AND `status`='0'");
						$sql="UPDATE `login` SET `userip`= '".$ip."',`flag`= '1', `lastlogin`=now()  WHERE (`email` = '$name' or `username`= '$name')  AND `pass` = '$pass';";
			
						$rows = mysql_fetch_array($query);
						if($rows > 0)
						{
				
							//echo "IP address= $ip";
							$query = mysql_query($sql);
							//$query = mysql_query($sql1);
							//session_start();
							$_SESSION['email'] = $name;
		
							header("Location:user_profile.php");
						}
						else {
							$_SESSION['msg']="Invalid Login Credentials";
						}
					}	
				}
				
				
						function uploadimage($data){
		
							$path = $this->imageupload($_POST);
							
							$file=$path[0] ;
							$image_name=$path[1];
							echo $show=$path[2];
							$sql="INSERT INTO `imageupload`(`image_name`,`user_id`,`created`,`path`) VALUES('".$image_name."','".$session_id."',now(),'".$file."');";
							
							mysql_query($sql);
						}
						
		function showimage($data){
			$sql="SELECT * FROM `imageupload`;";
			$query=mysql_query($sql);
			return $query;
		}
		
		
		function viewrecord(){
		  $adjacents = 5;
			
			$sql="SELECT COUNT(*) as num FROM `imageupload` order by id  desc;";
			$query=mysql_query($sql);
				$total_pages = mysql_fetch_array($query);
				$total_pages = $total_pages['num'];
				$limit = 4;                                //how many items to show per page
				$page = $_GET['page'];
				if($page) 
					$start = ($page - 1) * $limit;          //first item to display on this page
				else
				$start = 0;    
			 $result = mysql_query("select * from `imageupload` order by id  desc LIMIT $start, $limit");

    /* Setup page vars for display. */
    if ($page == 0) $page = 1;                  //if no page var is given, default to 1.
    $prev = $page - 1;                          //previous page is page - 1
    $next = $page + 1;                          //next page is page + 1
    $lastpage = ceil($total_pages/$limit);      //lastpage is = total pages / items per page, rounded up.
    $lpm1 = $lastpage - 1; 							//last page minus 1
	
	/////define range by yogesh
    $adjacents = 2;
	 $pagination = "";
    if($lastpage > 1)
    {   
        $pagination .= "<div class=\"pagination\">";
        //previous button
        if ($page > 1) 
            $pagination.= " <a class=\"btn btn-info\" href='{$_SERVER['PHP_SELF']}?page=$prev'>« Previous</a> ";
        else
            $pagination.= "<span class=\"btn btn-default\" class=\"disabled\">« previous</span>"; 

		//////////////////////////////////////////////////////////
		
		
		
		
		$pmin = ($page > $adjacents) ? ($page - $adjacents) : 1;
		
		  $pmax = ($page < ($lastpage - $adjacents)) ? ($page + $adjacents) : $lastpage;
		
		for ($x = 	$pmin /*($page - $limit)*/; $x <=   $pmax /*(($page + $limit) + 1)*/; $x++)
		{
				// if it's a valid page number...
			if (($x > 0) && ($x < $lastpage)) 
			{
			
			
				// if we're on current page...
				if ($x != $page) 
				{
					 $pagination.= " <a class=\"btn btn-info\" href='{$_SERVER['PHP_SELF']}?page=$x'>$x</a> ";
				
				} else
				{
							// make it a link
					$pagination.= "<span class=\"btn btn-default\" class=\"disabled\">$x</span>"; 
									
							// end else
				}
				
			} // end if 
		} // end for
			
		/////////////////////////////////////////////
        //next button
       
		if ($page < $lastpage) 
            $pagination.= " <a class=\"btn btn-info\" href='{$_SERVER['PHP_SELF']}?page=$next'>Next»</a> ";
	
        else
            $pagination.= "<span class=\"btn btn-default\" class=\"disabled\">Next »</span>";
			$pagination.= "</div>\n";    	
		

    }
	
			$q = mysql_query("select * from `imageupload` order by id desc limit $start,$limit");
			while($row=mysql_fetch_assoc($q)){


					// LOOP Code
				$_SESSION['msg'] = $pagination;
				

			} 
			return $result;
	}
		
				function search($data){
					extract($data);
				
				if($search == "1"){
					$sql="select * from `resident` where `first_name` = '".$name."';";
				}
				 elseif($search == "2"){
					$sql="select * from `resident` where `flat_no` = '".$flat."';";
				}
				 elseif($search == "3"){
					$sql="select * from `resident` where `phone_no1` = '".$contact."' ;";
				}
				 elseif($search == "4"){
					$sql="select * from `resident` where `block` = '".$block."';";
				}
				
					$data=mysql_query($sql);
					return $data;
				}
				
				function showpdf($data){
		
			extract($data);
			
			session_start();
			$user_arr = array ( 'fname' => $fname,'lname' => $lname,'add' => $add,'contact' => $contact,'email' => $email );
			$_SESSION['user'] = $user_arr;
			
			echo '<script>window.location.href = "viewpdf.php";</script>';
			
			
			
		}
		
		
		function insert_event($data){
			 extract($data);
					$sql= "INSERT INTO `event`set 
					event_name='".$name."',
					event_desc='".$disc."',
					event_add='".$add."',
					date_from='".$from."',
					date_to='".$to."';";
				
			if (mysql_query($sql))	{
					
					$result= "Insert Data Succesfully" ;
					}
					else{
						$result= "Data Not Inserted To Database";
						}
					return $result;
		}
		
		
		
		
		
		
		
		
		
		
		
		function workerdata($data){
				
			
					extract($data);
					
					$sql= "INSERT INTO worker set 
						worker_type='".$work_type."',
					worker_name='".$name."',
						worker_gender='".$option."',
						worker_contact='".$contact."'";
					if (mysql_query($sql))	{
					
					$result= "Inser Data Succesfully";
					}
					else{
						$result= "Invailid Data Insertion";
						}
					return $result;
		}
		
		function workerlist($data){
			extract($data);
		
		  $sql="SELECT * FROM `worker` where worker_type='".$work_type."';";
			$query1=mysql_query($sql);
			return $query1;
		}
		
		function deleteworker($data){
		$id=$_GET['worker_id'];
			extract($data);
				$sql="DELETE  FROM `worker` WHERE `worker_id`='".$id."';";

				mysql_query($sql);
				//header('Location:info_board.php');

			}
			
		function adminlogin($data){
		
		if($_POST['email'] != '' && $_POST['pass'] != '')
		{
			$name = $_POST['email'];
			$pass =$_POST['pass'];
			
				//$ip=$_SERVER['REMOTE_ADDR'];
			//$check_email = Is_email($name);
			$sql1="SELECT * FROM `adminlogin` WHERE `username`= '$name' AND `pass` = '$pass'";
			
			$query = mysql_query($sql1);
			
			$rows = mysql_fetch_array($query);
			if($rows > 0)
			{
				
				//echo "IP address= $ip";
			 //	$query = mysql_query($sql1);
				//$query = mysql_query($sql1);
				session_start();
			
				$_SESSION["email"] = "Administrator";
				echo ("<SCRIPT LANGUAGE='JavaScript'>
    
				window.location.href='index.php';
					</SCRIPT>");
				
				
			  // header('Location:index.php');
				
			}
			else {
			 $_SESSION['msg']="Invalid Login Credentials";
			}
			}	
		}
		
			function insert_news($data){
			 extract($data);
					$sql= "INSERT INTO `news`set 
					news_name='".$name."',
					news_disc='".$disc."',
					
					news_date='".$from."'";
					
				
			mysql_query($sql);
		}
	
		function addtelephone($data){
			 extract($data);
					$sql= "INSERT INTO `tele_directory`set 
					member_id='".$id."',
					member_name='".$name."',
					member_contact='".$contact."',
						member_add='".$add."',
					member_gender='".$optionsRadios1."',
					member_type='".$optionsRadios2."'";
					
				
			mysql_query($sql);
		}
		function getouch($data){
			extract($data);
					$email_to="yogeshyadav5791@gmail.com";
					$email_subject='".$add."';
					$email_message= '".$desc."';
					$headers = "From: Beacze\r\n".
					"Reply-To: yogehyadav5791@gmail.com\r\n'" .
					"X-Mailer: PHP/" . phpversion();
					mail($email_to, $email_subject, $email_message, $headers);  
			
					$sql= "INSERT INTO `get_touch`set 
						touch_name='".$name."',
						touch_contact='".$contact."',
						touch_email='".$email."',
						touch_add='".$add."',
						touch_massege='".$desc."'";
					
			if (mysql_query($sql))	{
					
					$result= "Message Send Succesfully" ;
					}
					else{
						$result= "Message Not Send";
						}
					return $result;
		}
		
		function complain($data){
			extract($data);
					$email_to="yogeshyadav5791@gmail.com";
					$email_subject='".$add."';
					$email_message= '".$desc."';
					$headers = "From: Beacze\r\n".
					"Reply-To: yogehyadav5791@gmail.com\r\n'" .
					"X-Mailer: PHP/" . phpversion();
					mail($email_to, $email_subject, $email_message, $headers);  
			
					$sql= "INSERT INTO `complain`set 
						user_id='".$id."',
						user_name='".$name."',
						user_email='".$email."',
						user_contact='".$contact."',
						user_message='".$mess."',
						compalin_date= now();";
					
			if (mysql_query($sql))	{
					
					$result='Your Message Sent Your Complain Number IS :', mysql_insert_id();
					}
					else{
						$result= "Message Not Send";
						}
					return $result;
		}
	
	
			
 
 }
 ?>
 


