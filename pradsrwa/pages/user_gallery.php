
<?php 
	error_reporting(0);
include('loginheader.php');

include('class.php');

$obj= new user();	


	
?>


<!DOCTYPE html>
<html lang="en">

<head>
	
	
	
	
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <title>3D Gallery with CSS3 and jQuery</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="3D Gallery with CSS3 and jQuery" />
        <meta name="keywords" content="3d, gallery, jquery, css3, auto, slideshow, navigate, mouse scroll, perspective" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
		<script type="text/javascript" src="js/modernizr.custom.53451.js"></script>
    
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
<link rel="stylesheet" href="dist/css/lightbox.css">
	<script src="gen_validatorv4.js" type="text/javascript"></script>
	<script src="http://code.jquery.com/jquery-latest.js"></script>
<script>




</script>
</head>
	<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<ul class="breadcrumb">
					<li><a href="login.php"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
					<li class="active">Image Gallery</li>
				</ul>
			</div>
		</div>
	</div>
	</section>

	
	
	    <div class="container">
		<br><br>
			<div class="col-md-12">
				<div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading"><strong><i class="fa fa-picture-o"></i>

                            My Image Gallery</strong>
                        </div>
                        <div class="panel-body">
                            <div class="row">
            <form id='myform'class="form-horizontal" role="form" method="post" enctype="multipart/form-data">                 
											
			<?php
				  $empid=$obj->viewrecord($_POST);
					while($block=mysql_fetch_array($empid)){?>
					  <section>
    
						<div>
					
	
					 <a class="example-image-link" href="http://localhost/pradsrwa/pages/uploads/<?php echo $block['image_name']?>" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img style=" float: left;  height: 172px; padding-left: 13px;  width: 250px;" class="example-image" src="uploads/<?php echo $block['image_name']?>" alt=""/></a>	
						 </div>
						  </section>
						
					
						
					<?php }?>
					
    
				<div class="col-lg-4">
				
					</div>
					
      
                    <div class="col-lg-6">
					
					
					 <?php  echo $_SESSION['msg']; ?>
                  
                    <!-- /.panel -->
					</div>
					<div class="col-lg-2">
				
					</div>
						
							 
						   </form>
					 
                                
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>	
				
							
	
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
 <script src="dist/js/lightbox-plus-jquery.min.js"></script>
   









