
<?php 
	
include('loginheader.php');
include('class.php');
$obj= new user();
if(isset($_POST['submit'])){
	$msg=$obj->complain($_POST);
	
	
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
					<li class="active">Complain</li>
				</ul>
			</div>
		</div>
	</div>
	</section>

	
	
	    <div class="container">
			<div class="col-md-12">
	
					<h2 class="section-title"><center><span><u>Complain</u></span></center></h2>
	
			</div>
			<div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading"><strong><i class="glyphicons glyphicons-edit"></i>
		
                            Complain</strong>
                        </div>
                        <div class="panel-body">
						<h3 class="msg"><?php if(!empty($msg)) echo $msg;?></h3>
                            <div class="row">
                             
							 <div id="scrol"class="dataTable_wrapper">
									
			<form id='myform' class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
						
				  <div class="col-lg-4">
					<label>Registered ID<label>
                   
				  </div>
				  <div class="col-lg-5">
                    
                    <input type="text" class="form-control" placeholder="Registered Id" id="id" name="id">
				  </div>
				  <br><br>
				  <div class="col-lg-4">
						<label> Enate Name</label>
                   
					</div>
				     <div class="col-lg-5">
						
						<input class="form-control" placeholder="Name "id="name" name="name">
					</div>
					<br><br>
				  <div class="col-lg-4">
					<label>Email ID</label>
                   
				  </div>
				  <div class="col-lg-5">
               
                    <input type="email" class="form-control" placeholder="Email" id="email"name="email"><?php if(!empty($add1)) echo $add1;?>
				  </div>
				  <br><br>
				 
					 <div class="col-lg-4">
						<label>Enter Contact</label>
                   
					</div>	
				     <div class="col-lg-5">
						
						<input class="form-control" placeholder="Registered Contact" id="contact"name="contact"><?php if(!empty($pin)) echo $pin;?>
					</div>
					<br><br>
					
					 
					
					 <div class="col-lg-4">
						<label>Enter Your Message</label>
                   
					</div>
				     <div class="col-lg-5">
						
						<textarea  rows="6"  cols="5"class="form-control" placeholder="Please Enter Your Message"id="mess" name="mess"></textarea>
					</div>
			
					
					 		<br><br>		<br><br>		<br><br>
				
							<br><br>
					
					<div class="sub">
                    <button type="submit" name="submit" value="submit"class="btn btn-primary">Submit Button</button>
                     <button type="reset" name="reset"class="btn btn-primary">Reset Button</button>
					</div>
			
			
					
		   </form>
		   <script  type="text/javascript" xml:space="preserve">
 var frmvalidator = new Validator("myform");
 
 
  frmvalidator.addValidation("id","req","Please Enter Flat Number");
  frmvalidator.addValidation("name","req","Please enter your First Name");

   frmvalidator.addValidation("contact","req","Please Enter Contact Number");
   frmvalidator.addValidation("contact","maxlen=10");
    frmvalidator.addValidation("contact","minlength=10");
 frmvalidator.addValidation("contact","numeric");
 frmvalidator.addValidation("email","maxlen=50");
 frmvalidator.addValidation("email","req");
 frmvalidator.addValidation("email","email");

		</script>							
									
									
									
									
									
									
									
									
									
									
									
									
									
								</div>
						 
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
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

   









