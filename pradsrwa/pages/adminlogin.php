
<?php 

include('loginheader.php');
include('class.php');

$obj= new user();	

if(isset($_POST['submit'])){
	$empid=$obj->adminlogin($_POST);
	
	
}
	
?>


<!DOCTYPE html>
<html lang="en">

<head>

<script>



function Validate(){
		
		var email= $("#email").val();
		if(email==''){ 
		alert("Please Enter Vailed Email Or Username");
		return false;
		}
		
		var pass= $("#pass").val();
		if(pass==''){
		alert("please enter Password");
		return false;
		}
	}

</script>

	<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<ul class="breadcrumb">
					<li><a href="login.php"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
					<li class="active">Admin Login</li>
				</ul>
			</div>
		</div>
	</div>
	</section>

	
	
	    <div class="container">
			<div class="col-md-12">
	
					<h2 class="section-title"><center><span><u>Administrator Login </u></span></center></h2>
	
			</div>
			
			<div class="col-md-3">
	
					
	
			</div>
				
			<div class="col-md-6 col-md-offset-">
                <div class="login-panel panel panel-default">
					
                    <div class="panel-heading">
							
                        <h3 class="panel-title">Sign In for admin</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" action="" method="post"  onsubmit="return Validate();">
                            <fieldset>
                               
								 <div class="form-group">
                                    <input class="form-control" placeholder="E-mail or username" name="email"  id="email" ="" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="pass" id="pass" type="password" value="">
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
								
                                
								
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
			
         

    </div>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<div class="panel-footer" >
	<div class="container">
		<div class="row">
			
			<div class="col-md-4 widget">
				<h3 class="widget-title">Follow me</h3>
				<div class="widget-body">
					<h2 class="follow-me-icons">
						<a href="#" ><i class="fa fa-twitter fa-2"></i></a>
						<a href=""><i class="fa fa-dribbble fa-2"></i></a>
						<a href=""><i class="fa fa-github fa-2"></i></a>
						<a href=""><i class="fa fa-facebook fa-2"></i></a>
						<a href=""><i class="fa fa-youtube fa-2"></i></a>
						<a href=""><i class="fa fa-linkedin fa-2"></i></a>
					</h2>
				</div>
			</div>

			<div class="col-md-4 widget">
				<h3 class="widget-title">About Us</h3>
				<div class="widget-body">
					<p>
						Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with


						
						
						
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

   









