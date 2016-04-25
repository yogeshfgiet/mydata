<?php
require "gump.class.php";
include('header.php');
include('sidemenu.php');
		$desc = $_GET['record_id'];
	$sql="select * from `resident` where `id` = '".$desc."';";
			
	$mydata=mysql_query($sql);
	if(isset($_POST['show'])){
	//$empid=$obj->showpdf($_POST);	
}	
   

	    
	  
 ?>

<body>

    <div id="wrapper">

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Full Resident Details</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
			<form id='myform'class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
					
				<div   class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            RWA Resident Details
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
									
										             <?php
								while($record=mysql_fetch_array($mydata)){
						?>
					
								<div class="col-lg-6">
									<label>Resident Id</label>
								</div>	
								<div class="col-lg-6">
									<p><?php echo $record['id']?></p>
								</div>	
								
								<div class="col-lg-6">
									<label>Block</label>
								</div>	
								<div class="col-lg-6">
									<p><?php echo $record['block']?></p>
								</div>
								<div class="col-lg-6">
									<label>Flat No:</label>
									</div>	
								<div class="col-lg-6">
									<p><?php echo $record['flat_no']?></p>
								</div>
								
								
								<div class="col-lg-6">
								<label>Resident Name</label>
								</div>	
								<div class="col-lg-6">
									<p><?php echo $record['first_name']?> <?php echo $record['middle_name']?> <?php echo $record['last_name']?></p>
								</div>
									
								<div class="col-lg-6">
									<label>Resident Primery Contact Number</label>
								</div>	
								<div class="col-lg-6">
									<p><?php echo $record['phone_no1']?></p>
								</div>
								<div class="col-lg-6">
									<label>Resident Landline Number </label>
								</div>	
								<div class="col-lg-6">
									<p><?php echo $record['landline']?></p>
								</div>
								<div class="col-lg-6">
					
									<label>Resident E-mail Address</label>
								</div>	
								<div class="col-lg-6">
									<p><?php echo $record['email']?></p>
								</div>
								<div class="col-lg-3">
					
									<label>Resident Address</label>
								</div>	
								<div class="col-lg-3">
									<p><b>House No:</b><?php echo $record['add_line1']?></p>
								</div>
								<div class="col-lg-3">
									<p><b>  Land Mark:</b><?php echo $record['add_line2']?></p>
								</div>
								<div class="col-lg-3">
									  <p><b>City:</b><?php echo $record['add_line3']?></b></p>
								</div>
								<div class="col-lg-6">
									<label>Resident State</label>
								</div>	
								<div class="col-lg-6">
									<p><?php echo $record['state']?></p>
								</div>
								<div class="col-lg-6">
									
									<label>Resident PIN Code</label>
								</div>	
								<div class="col-lg-6">
									
									<p><?php echo $record['pin_code']?></p>
								</div>
								<div class="col-lg-6">
									
									<label>Resident Occupation</label>
								</div>	
								<div class="col-lg-6">
									
									<p><?php echo $record['occupation']?></p>
								</div>
								<div class="col-lg-6">
									
									<label>Resident Emergency Contact Number</label>
								</div>	
								<div class="col-lg-6">
									
									<p><?php echo $record['emergency_contact']?></p>
								</div>
								<div class="col-lg-6">
									
								<label>Resident Company Contact</label>
								</div>	
								<div class="col-lg-6">
									<p><?php echo $record['comp_contact']?></p>
								</div>
								<div class="col-lg-6">
									
									<label>Resident Petas Information</label>
								</div>	
								<div class="col-lg-6">
									<p><?php echo $record['pets']?></p>
								</div>
								<div class="col-lg-6">
									
									<label>Resident Nature </label>
								</div>	
								<div class="col-lg-6">
									<p><?php echo $record['nature']?></p>
								</div>
								<div class="col-lg-6">
									
									<label>Resident Verified Or Not </label>
								</div>	
								<div class="col-lg-6">
									<p><?php echo $record['veryfied']?></p>
								</div>
									<div class="col-lg-6">
									
									<label>Resident Image </label><br>
								</div>	
								<div class="col-lg-6">
									<p>No Image Available</p>
								</div>
									
									
								
									</div>
								<?php }?>
								<br><br>	<br><br>
								
									<center>
							<div class="col-lg-12">
							
									<a class="btn btn-info" role="button" href="search.php">Go Back</a>
									<input class="btn btn-info" type="submit" value="showpdf" name="show">
                            <!-- /.table-responsive -->
                           </div>
						   </center>
                            </div>
						
						
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>	
					
					
			
           
           </form>
			

			
		
			
			
			
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    
</body>

</html>
