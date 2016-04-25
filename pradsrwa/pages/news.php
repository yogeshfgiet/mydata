
<?php 
	
include('loginheader.php');
$sql= "SELECT * from`event` order by id desc ;";

	$data=mysql_query($sql);
	
	$sql2= "SELECT * from`news` order by id desc ;";

	$data2=mysql_query($sql2);


if(isset($_POST['submit'])){
	$empid=$obj->adminlogin($_POST);
	
	
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
					<li class="active">News & Events</li>
				</ul>
			</div>
		</div>
	</div>
	</section>

	
	
	    <div class="container">
		<br><br>
			<div class="col-md-12">
				<div class="col-lg-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           <strong><i class="fa fa-bullhorn"></i> Latest News And Circular</strong>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                             
							  <div id="scrol"class="dataTable_wrapper">
									<ul class="list-unstyled">
									<?php
										while($row2=mysql_fetch_array($data2)){
										?>
									
										<li class="col-lg-10"><a href='user_news_sirc.php?news_id=<?php echo $row2['id']?>'>	 <strong><i id="icon1"class="fa fa-file-text"></i></strong>

											<?php echo $row2['news_name']?><?php echo $row2['news_disc']?>On : <?php echo $row2['news_date']?><hr  class="hr2"/></a></li>
									
									
									<?php }?>
									</ul>
									
									
							</div>
							 
							 
							 
							 
							 
							 
							 
							 
                                
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>	
				<div class="col-lg-4">
                    <div class="panel panel-default">
                        <div class="panel-heading"><strong><i class="fa fa-bullhorn"></i>
                            Upcoming Events</strong>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                             
							 
							 
							 <div id="scrol"class="dataTable_wrapper">
									<ul class="list-unstyled">
									<?php
										while($row=mysql_fetch_array($data)){
										?>
										<li class="col-lg-10"><i class="fa fa-check-square"></i><a class="news"href='user_eventshow.php?event_id=<?php echo $row['id']?>'><?php echo $row['event_name']?><img src="image/11111new.gif" width="28px" height="21px"></a></li>
										
									
										<?php }?>
									</ul>
									
									
							</div>
							
                             
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

   









