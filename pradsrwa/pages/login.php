
<?php 
session_start();
require "gump.class.php";
//include('config.php');

include('class.php');

//include('header.php');
$obj= new user();
include('loginheader.php');

if(isset($_SESSION['msg'])){
echo $_SESSION['msg']; 
unset($_SESSION['msg']);
}
if(isset($_POST['submit'])){
	
$is_valid = GUMP::is_valid($_POST, array(
	'email' => 'required|alpha_numeric',
    'pass' => 'required|alpha_numeric',		

));

if($is_valid === true) {
	$empid=$obj->login($_POST);
    // continue
} else {
	
	
if ( ! empty($is_valid[1])) {

   
 $email=$is_valid[0];
	 $pass=$is_valid[1];
}
	
 $pass=$is_valid[0];

  // print_r($is_valid);	
}
	
	
	
	

	
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
	
	
	
	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<link href="jquery.smartmarquee.css" rel="stylesheet">
	<script src="jquery.smartmarquee.js"></script>

	
	<script src="gen_validatorv4.js" type="text/javascript"></script>



    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>RWA</title>
	
	
	

    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">
	
	
	<!-- Custom CSS  By PRADS Tech -->
    <link href="newstyle.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	<script>	
	$(document).ready(function(){
			$(".example").smartmarquee();
		});
</script>

</head>

<body>

	



	
	<!-----------------------slider start by yogi----------------------------->



  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="slides/banner1.jpg" alt="Chania" width="100%" height="50%">
      </div>

      <div class="item">
        <img src="slides/banner2.jpg" alt="Chania" width="100%" height="50%">
      </div>
    
      <div class="item">
        <img src="slides/banner3.jpg" alt="Flower" width="100%" height="50%">
      </div>

    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

	<!----------------------------------slider end   ------------------------->
	
    <div class="container">
	<div class="col-md-12">
	
	<h2 class="section-title"><center><span Class="welcome">RWA Welcomes You</span></center></h2>
	<hr class="wel">
			</div>
			<div class="col-md-3">
				
			
			
			<div class="login-panel panel panel-default">
					
                    <div class="panel-heading">
							
							<h3 class="panel-title"> <strong><i class="fa fa"></i>Facilities in my City</strong></h3>
                    </div>
					<div  class="panel-body">
						<ul class="list-unstyled">
									
										<li class="col-lg-10"><i class="fa fa-hand-o-right"></i>
<a class=""href='#'> Banquet Hall </a></li>
										<li class="col-lg-10"><i class="fa fa-hand-o-right"></i>
<a class=""href='#'> Our Market</a></li>
									<li class="col-lg-10"><i class="fa fa-hand-o-right"></i>
<a class=""href='#'>Shopping Complex </a></li>
									<li class="col-lg-10"><i class="fa fa-hand-o-right"></i>
<a class=""href='#'>Many Other </a></li>	
									</ul>
						
                </div>
			</div>
			<!------------------New Box---------------->
			<div class="login-panel panel panel-default">
					
                    <div class="panel-heading">
							
							<h3 class="panel-title"> <strong><i class="fa fa-comment"></i>Member Feedback</strong></h3>
                    </div>
					<div  class="panel-body">
						
						<p>Hello dear resident we are providing many facility in my residential city</p>	
		
                </div>
			</div>
			
			
			
			</div>
	<div class="col-md-6">
	
	<p>
	
	A <strong>Resident Welfare Association </strong>(frequently abbreviated as RWA)
					is a civic body that represents the interests of the residents 
					of a specific urban or suburban locality in Indian cities.
					Membership is voluntary, and the leadership is usually elected by
					fee-paying members. Members who do not pay the voluntary subsrcription 
					fee in any year may not vote in the general body and other meetings of
					the association since they would be deemed as having opted out of the 
					membership of the voluntary association. In some localities such association
					bear the word 'Development" in their nomenclature such as development and 
					welfare association.	

						
							
		
		
		
		
		
		</p>
		
		
		
				

			</div>
       
			
            <div class="col-md-3 ">
                <div class="login-panel panel panel-default">
					
                    <div class="panel-heading">
							
                        <h3 class="panel-title"><strong><i class="fa fa-sign-in"></i>
User Login </strong></h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" action="" method="post" id="myform" name="myform"onsubmit="return Validate();">
                            <fieldset>
                               
								 <div class="form-group">
                                    <input class="form-control" placeholder="E-mail or username" name="email"  id="email" ="" type="text" autofocus><?php if(!empty($email)) print_r ($email);?>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="pass" id="pass" type="password" value=""><?php if(!empty($pass)) print_r ($pass);?>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
								<div class="">
                                    <input name="submit" type="submit" value="Submit"  class="btn btn-lg btn-success btn-block">
                                </div>
								
								<a href="forget.php" class="">Forget password?</a>
                            </fieldset>
                        </form>
						
                    </div>
                </div>
				<!----------------------space for you----------------------------->
				<div class="login-panel panel panel-default">
					
                    <div class="panel-heading">
							
                        <h3 class="panel-title"><strong><i class="fa fa-sun-o"></i>
City Weather</strong></h3>
                    </div>
                    <div class="panel-body">
					

						<a href="http://www.accuweather.com/en/in/ghaziabad/206683/weather-forecast/206683" class="aw-widget-legal">
<!--
By accessing and/or using this code snippet, you agree to AccuWeather’s terms and conditions (in English) which can be found at http://www.accuweather.com/en/free-weather-widgets/terms and AccuWeather’s Privacy Statement (in English) which can be found at http://www.accuweather.com/en/privacy.---->
</a><div id="awcc1445334863734" class="aw-widget-current"  data-locationkey="" data-unit="c" data-language="en-us" data-useip="false" data-uid="awcc1445334863734" data-targeturl="http://localhost/pradsrwa/pages/login.php"></div><script type="text/javascript" src="http://oap.accuweather.com/launch.js"></script>	
		
		
		
		
					</div>
                </div>
				<div class="login-panel panel panel-default">
					
                    <div class="panel-heading">
							
                        <h3 class="panel-title"><strong><i class="fa fa-phone"></i>
Some Important Details</strong></h3>
                    </div>
                    <div class="panel-body">
							<p> <b>Security Officer : </b>9966332255(D)</p>
							<p> <b>Security Officer : </b>9966332255(N)</p>
							<p> <b>Complain: </b>9966332255</p>
							<p> <b>RWA Office: </b>120-4132255</p>
							<div class="seeall"><a href="imptcont.php" class="">See All</a></div>
					</div>
				</div>
				
            </div>
      
    </div>
	<!--------------------------Footer Section--------------------------->
	<div class="panel-footer" >
	<div class="container">
		<div class="row">
			
			<div class="col-md-4 widget">
				<h3 class="widget-title">Follow me</h3>
				<div class="widget-body">
					<h2 class="follow-me-icons">
						<a href="http://www.twitter.com" target="blank" ><i class="fa fa-twitter fa-2"></i></a>
						<a href="http://www.dribbble.com" target="blank"><i class="fa fa-dribbble fa-2"></i></a>
						<a href="http://www.github.com" target="blank"><i class="fa fa-github fa-2"></i></a>
						<a href="http://www.facebook.com" target="blank"><i class="fa fa-facebook fa-2"></i></a>
						<a href="http://www.youtube.com" target="blank"><i class="fa fa-youtube fa-2"></i></a>
						<a href="http://www.linkedin.com" target="blank"><i class="fa fa-linkedin fa-2"></i></a>
					</h2>
				</div>
			</div>

			<div class="col-md-4 widget">
				<h3 class="widget-title">About Us</h3>
				<div class="widget-body">
					<p>
						Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.


						
						
						
						</p>
					
				</div>
			</div>

			<div class="col-md-4 widget">
				<h3 class="widget-title">Contact Details</h3>
				<div class="">
					
				<p>SC 37 Jaipuria Sunrise plaza,Indirauram <BR> Ghaziabad Uttar Pradesh	</p>
				
				</div>
					
					
					<div class="widget-body">
			
					<p>0120-4132255 </p>
						<p><a href="mailto:#">info@pradsoft.com</a></p>

						<p><a href="http://www.pradsoft.com">www.pradsoft.com</a></p>
						<a href="adminlogin.php" class="">Admin Login</a>
					</p>	
				</div>
				</div>
			</div>

		</div> 
		
			
	
	</div>
	<div style="background-color: black;color: gray;" class="sub-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="copyright">
						<p>
							<span>&copy;PRADS Software Private Limited  2015 All right reserved. Powered By </span><a href="http://www.pradsoft.com" target="_blank">PRADS Software</a>
						</p>
                        <!-- 
                            All links in the footer should remain intact. 
                            Licenseing information is available at: http://bootstraptaste.com/license/
                            You can buy this theme without footer links online at: http://bootstraptaste.com/buy/?theme=Moderna
                        -->
					</div>
				</div>
			
		</div>
	</div>
	</div>

    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>










