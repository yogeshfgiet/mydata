
<?php 
	
include('loginheader.php');
	include('class.php');
$obj= new user();
if(isset($_POST['submit'])){
	
	$msg=$obj->getouch($_POST);
	//echo "<script type='text/javascript'>alert('$msg ;')</script>";
	
}


   
	
	
	
	
	
?>


<!DOCTYPE html>
<html lang="en">

<head>

<script>




</script>

	<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<ul class="breadcrumb">
					<li><a href="login.php"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
					<li class="active">Contact Us</li>
				</ul>
			</div>
		</div>
	</div>
	</section>

	
	
	    <div class="container">
			<div class="col-md-12">
	
							<div class="map">
								<iframe src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=shipra+suncity+Indirapuram,+Ghaziabad,+Uttar+Pradesh,+India&amp;aq=3&amp;oq=kuningan+&amp;sll=37.0625,-95.677068&amp;sspn=37.410045,86.572266&amp;ie=UTF8&amp;hq=&amp;hnear=Kuningan&amp;t=m&amp;z=14&amp;ll= &amp;output=embed">
								</iframe>
								

								
							</div>
	
			</div>
			<div class="col-md-6">
					<h3>Get in touch with us by filling contact form bellow</h3>
					<h3 class="msg"><?php if(!empty($msg)) echo $msg;?></h3>
					</div>
			<div class="col-md-12">
				<form role="form" action="" method="POST" id="myform" name="myform"onsubmit="return Validate();">
					
					
					
					
					<div class="col-md-6">
						<div class="form-group input-group">
                            <span class="input-group-addon"><i class="fa fa-user"></i>
</span>
                            <input type="text" class="form-control" name="name" placeholder="Enter Name">
						</div>
					</div>
					
					<div class="col-md-6">
						<div class="form-group input-group">
                            <span class="input-group-addon"><i class="fa fa-phone-square"></i>
</span>
                            <input type="text" class="form-control" name="contact" placeholder="Enter Contact">
						</div>
					</div>
					
					<div class="col-md-6">
						<div class="form-group input-group">
                            <span class="input-group-addon"><i class="fa fa-envelope"></i>
</span>
                            <input type="text" class="form-control" name="email" placeholder="Enter Email">
						</div>
					</div>
					<div class="col-md-6">
					<div class="form-group input-group">
                            <span class="input-group-addon"><i class="fa fa-map-marker"></i>
</span>
                            <input type="text" class="form-control" name="add" placeholder="Enter Address">
						</div>
					</div>
					<div class="col-md-12">
					<textarea  class="form-control" name="desc" cols="171" rows="8" placeholder="Enter Message"></textarea>
					</div>
				
				  <button type="submit" name="submit" value="" class="btn btn-default">Send Message</button>
                  <button type="reset" class="btn btn-default">Reset Button</button>
						
				</form>
			</div>
				

    </div>
	<br>
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

   









